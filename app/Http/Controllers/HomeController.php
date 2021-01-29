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
        return view('home.about');
    }
    public function references(){
        return view('home.about');
    }
    public function contact(){
        return view('home.about');
    }
    public function fag(){
        return view('home.about');
    }
    //



}
