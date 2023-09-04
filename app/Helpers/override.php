<?php

use App\Helpers\Helper;

if (!function_exists('prefix_route')) {

    function prefix_route($name, $parameters = [], $absolute = true)
    {
        //dd($name);
        $getuserrole = Helper::getuserrole();
        //dd($getuserrole);
        if ($getuserrole == '') {
            //                $name = app()->getLocale() . '.'. $name;
            $name = $name;
        } else {
            //                $name = app()->getLocale() . '.'. $getuserrole .'.'. $name;
            $name = $getuserrole . '.' . $name;
        }
        //   dd($name);
        return app('url')->route($name, $parameters, $absolute);
    }
}
if (!function_exists('route')) {
    function  route($name, $parameters = [], $absolute = true)
    {
        // dd($name);
        //            $name = app()->getLocale() . '.' . $name;
        $name = $name;
        return app('url')->route($name, $parameters, $absolute);
    }
}
