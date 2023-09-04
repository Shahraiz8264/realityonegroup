<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Developer;
use App\Models\Property;
use App\Models\ContactForm;
use DB;

class DashboardController extends BaseController
{
    //
    public function index(Request $request){
        if ($request->ajax()) {
            $TotalDevelopers = Developer::count();
            $TotalProperties = Property::count();
            $TotalQueries = ContactForm::count();

            return $this->sendResponse([
                [
                    'title' => trans('lang.properties'),
                    'count' => $TotalProperties,
                    'bg_color' => 'bg-primary',
                    'link' => route('admin.properties.index'),
                ],
                [
                    'title' => trans('lang.developers'),
                    'count' => $TotalDevelopers,
                    'bg_color' => 'bg-info',
                    'link' => route('admin.developers.index'),
                ],
                [
                    'title' => trans('lang.queries'),
                    'count' => $TotalQueries,
                    'bg_color' => 'bg-warning',
                    'link' => route('admin.queries.index'),
                ],
                
            ]);
        }
        return view('admin.dashboard',[
            'title' => trans('lang.admin'),
        ]);
    }

    public function getRegistrationsPreMonth(Request $request)
    {

        $year = 'YEAR(NOW())';
        if ($request->has('year') && $request->year != '') {
            $year = $request->year;
        }
        DB::enableQueryLog();
        $PropertiesByDate = Property::withOutGlobalScope('active_properties')
            ->selectRaw('months.short_name as Month,COUNT(properties.created_at) as totalProperties')
            ->rightJoin('months', function ($join) {
                $join->whereRaw('months.month = MONTHNAME(properties.created_at)');
            })
            ->whereRaw('YEAR(properties.created_at) = ' . $year)

            ->orWhereNull('properties.created_at')
            ->groupBy('months.month')
            ->orderBy('months.id');
        // $db = DB::getQueryLog();
        // dd($PropertiesByDate);
        

        $RecentQueries = ContactForm::where('is_delete', 0)
            ->orderBy('created_at', 'desc')
            ->limit(5)->get();

        return $this->sendResponse([
            'status' => true,
            'PropertiesByDate' => [
                'PropertiesCount' => $PropertiesByDate->pluck('totalProperties'),
                'Months' => $PropertiesByDate->pluck('Month'),
            ],
            // 'CompaniesByDate' => [
            //     'CompaniesCount' => $CompaniesByDate->pluck('totalCompanies'),
            //     'Months' => $CompaniesByDate->pluck('Month'),
            // ],
            // 'IdeasByDate' => [
            //     'IdeasCount' => $IdeasByDate->pluck('totalIdeas'),
            //     'Months' => $IdeasByDate->pluck('Month'),
            // ],
            // 'DealsByDate' => [
            //     'DealsCount' => $DealsByDate->pluck('totalDeals'),
            //     'Months' => $DealsByDate->pluck('Month'),
            // ],
            'RecentQueries' => $RecentQueries,

        ]);
    }
}
