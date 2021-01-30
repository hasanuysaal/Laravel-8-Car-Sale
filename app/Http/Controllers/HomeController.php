<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getSetting(){
        return Setting::first();
    }

    public function index(){
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting,'page'=>'home']);
    }


    //
    public function aboutus(){
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function references(){
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function fag(){
        $setting = Setting::first();
        return view('home.fag',['setting'=>$setting]);
    }
    //



}
