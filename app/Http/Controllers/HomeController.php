<?php

namespace App\Http\Controllers;

use App\Models\Enhances;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Client;


class HomeController extends Controller
{


    public function bannerAdmin()
    {
        $banner= Banner::get();
        return view('\Backend\Content\Banner\banner',compact('banner'));
    }

    public function enhancesAdmin()
    {
        $enhances= Enhances::get();
        return view('\Backend\Content\Enhances\enhances',compact('enhances'));
    }
    public function clientAdmin()
    {
        $client= Client::get();
        return view('\Backend\Content\Client\client',compact('client'));
    }


}

