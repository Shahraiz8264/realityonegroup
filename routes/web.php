<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\PropertyTypeController;
use Artisan;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[SitePageController::class,'renderMainPage'])->name('home');
Route::get('/pages/{page}',[SitePageController::class,'renderSitePages'])->name('site-pages');

Route::get('/error', function(){
    return view('errors.404');
});



// NewsLetter
Route::post('/newsletter',[BaseController::class,'newsletterSubscription'])->name('newsletter.subscribe');
Route::post('/contact-us',[BaseController::class,'saveContactForm'])->name('contact-us');
// Custom Form Posting

Route::post('/custom-form/get-a-quote',[SitePageController::class,'storeCustomForm'])->name('custom-form-posting');
require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth:sanctum'])->group(function () {
    require __DIR__ . '/admin.php';
});

Route::prefix('developer')->group(function () {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    Route::get('/artisan', function () {
        Artisan::call("view:cache");
        Artisan::call("view:clear");
        Artisan::call("config:cache");
        Artisan::call("config:clear");
        Artisan::call("cache:clear");

        dd('clear');
    });
});


// Static Pages
Route::prefix('pages')->group(function () {
    Route::get('/{slug}', [SitePageController::class, 'page'])->name('page');
});

// Public properties
Route::prefix('properties')->group(function () {
    Route::get('/',[PropertyController::class, 'buyAndSell'])->name('properties.index');
    Route::get('/locations',[PropertyController::class, 'buyAndSellLocations'])->name('properties.location');
    Route::get('/{slug}',[PropertyController::class, 'getProperty'])->name('properties.get');
});

Route::prefix('projects')->group(function () {
    Route::get('/',function(){
        return view('pages.projects',[
            'title' => __('lang.our_projects'),
        ]);
    })->name('projects.index');

    Route::get('/{slug}',function($slug){
        return view('projects.project-detail',[
            'title' => str_replace('-',' ',$slug),
            'name' => strtolower($slug),
        ]);
    })->name('projects.get');
});


// Developers
Route::get('/developers/select', [DeveloperController::class, 'getSelectRecords'])->name('developers.select');

// PropertyTypes
Route::get('/property-types/select', [PropertyTypeController::class, 'getSelectRecords'])->name('property_types.select');