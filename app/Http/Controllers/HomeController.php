<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $datalist = Product::select('id','title','image','price')->limit(8)->get();
        $slider = Product::select('id','title','image','price')->get();
        $latest = Product::latest()->first();
        $last1 = Product::select('id','title','image','price')->limit(3)->orderByDesc('id')->get();
        $top1 = Product::select('id','title','image','price')->limit(3)->inRandomOrder()->get();
        $review1 = Product::select('id','title','image','price')->limit(3)->inRandomOrder()->get();
        $last2 = Product::select('id','title','image','price')->limit(3)->orderByDesc('id')->get();
        $top2 = Product::select('id','title','image','price')->limit(3)->inRandomOrder()->get();
        $review2 = Product::select('id','title','image','price')->limit(3)->inRandomOrder()->get();
        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'last1'=>$last1,
            'top1'=>$top1,
            'review1'=>$review1,
            'last2'=>$last2,
            'top2'=>$top2,
            'review2'=>$review2,
            'page'=>'home',
            'latest'=>$latest,
            'datalist'=>$datalist,
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
        $datalist = Product::where('category_id',$id)->where('status','true')->get();
        $data = Category::find($id);
        $last1 = Product::select('id','title','image','price')->limit(3)->orderByDesc('id')->get();
        $last2 = Product::select('id','title','image','price')->limit(3)->orderByDesc('year')->get();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist,'last1'=>$last1,'last2'=>$last2]);
    }

    public function deneme($id,$make){
        $datalist = Product::where('make',$make)->where('status','true')->get();
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
    public static function getownerphone($id)
    {
        $data = Product::where('id',$id)->first();
        $owner_id = $data->user_id;
        $owner = User::where('id',$owner_id)->first();
        $ownernumber = $owner->phone;
        return $ownernumber;
    }
    public static function getowneraddress($id)
    {
        $data = Product::where('id',$id)->first();
        $owner_id = $data->user_id;
        $owner = User::where('id',$owner_id)->first();
        $owneradress = $owner->address;
        return $owneradress;
    }
    public static function getownername($id)
    {
        $data = Product::where('id',$id)->first();
        $owner_id = $data->user_id;
        $owner = User::where('id',$owner_id)->first();
        $ownername= $owner->name;
        return $ownername;
    }

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }else{
            return view('admin.login');
        }
    }
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
