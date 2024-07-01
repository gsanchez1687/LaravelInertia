<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Configurations;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home(){

        $config = Configurations::first();

        $banners = Banners::where('status','1')->get();
        return Inertia::render('Home',[
            'banners' => $banners,
            'config' => $config,
        ]);
    }
}
