<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Product::all();
        return view('admin.product',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.product_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->make = $request->input('make');
        $data->series = $request->input('series');
        $data->model = $request->input('model');
        $data->year = $request->input('year');
        $data->fuel = $request->input('fuel');
        $data->gear = $request->input('gear');
        $data->km = $request->input('km');
        $data->engine_power = $request->input('engine_power');
        $data->engine_capacity = $request->input('engine_capacity');
        $data->traction = $request->input('traction');
        $data->color = $request->input('color');
        $data->condition = $request->input('condition');
        $data->save();
        return redirect()->route('admin_products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $datalist = Category::all();
        return view('admin.product_edit', ['data' => $data,'datalist' => $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data = Product::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->user_id = Auth::id();
        $data->price = (float)$request->input('price');
        $data->make = $request->input('make');
        $data->series = $request->input('series');
        $data->model = $request->input('model');
        $data->year = $request->input('year');
        $data->fuel = $request->input('fuel');
        $data->gear = $request->input('gear');
        $data->km = $request->input('km');
        $data->engine_power = $request->input('engine_power');
        $data->engine_capacity = $request->input('engine_capacity');
        $data->traction = $request->input('traction');
        $data->color = $request->input('color');
        $data->condition = $request->input('condition');
        $data->save();
        return redirect()->route('admin_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //DB::table('products')->where('id', '=', $id)->delete();
        $data = Product::find($id);
        $data->delete();

        return redirect()->route('admin_products');

    }
}