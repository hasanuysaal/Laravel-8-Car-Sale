<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
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

    public static function countreview($id){
        return Review::where('product_id',$id)->count();
    }

    public static function avgreview($id){
        return Review::where('product_id',$id)->average('rate');
    }

    public function index(){
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price')->get();
        $latest = Product::latest()->first();
        $last = Product::select('id','title','image','price')->limit(3)->orderByDesc('id')->get();
        $top = Product::select('id','title','image','price')->limit(3)->inRandomOrder()->get();
        $review = Product::select('id','title','image','price')->limit(3)->inRandomOrder()->get();
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
        $datalist = Image::where('product_id',$id)->get();
        $reviews = Review::where('product_id',$id)->get();
        return view('home.product_detail',['data'=>$data, 'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function getproduct(Request $request){

        $search = $request->input('search');

        $count = Product::where('title','like','%'.$search.'%')->get()->count();

        if($count==1)
        {
            $data = Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('productlist',['search'=>$search]);
        }
            //$data = Product::where('title',$request->input('search'))->first();


    }

    public function productlist($search){

        $datalist = Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);

    }


    public function addtocart($id){

        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function categoryproducts($id){
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        $last = Product::select('id','title','image','price')->limit(3)->orderByDesc('id')->get();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist,'last'=>$last]);
    }

    public function deneme($id,$make){
        $datalist = Product::where('make',$make)->get();
        $data = Category::find($id);
        $last = Product::select('id','title','image','price')->limit(3)->orderByDesc('id')->get();
        return view('home.deneme',['data'=>$data,'datalist'=>$datalist,'last'=>$last,'make'=>$make]);
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
    public function faq(){
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
    }
    //



}
