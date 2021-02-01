<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

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
        $slider = Product::select('id','title','image','price')->get();
        $latest = Product::latest()->first();
        $last = Product::select('id','title','image','price')->limit(6)->orderByDesc('id')->get();
        $top = Product::select('id','title','image','price')->limit(6)->inRandomOrder()->get();
        $review = Product::select('id','title','image','price')->limit(6)->inRandomOrder()->get();
        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'last'=>$last,
            'top'=>$top,
            'review'=>$review,
            'page'=>'home',
            'latest'=>$latest,
            ];
        return view('home.index',$data);
    }

    public function product($id){
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function addtocart($id){

        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function categoryproducts($id){
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }

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
    public function sendmessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        //$data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir, Teşekkür Ederiz...');
    }
    public function fag(){
        $setting = Setting::first();
        return view('home.fag',['setting'=>$setting]);
    }
    //



}
