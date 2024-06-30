<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home(){

        $banners = Banners::where('status','1')->get();
        return Inertia::render('Home',[
            'banners' => $banners
        ]);
    }
}
