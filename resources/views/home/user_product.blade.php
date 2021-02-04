@extends('layouts.home')

@section('title', 'My Products')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-10 col-md-10">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <h6 class=" col-lg-10 m-0 font-weight-bold text-primary">Products</h6>
                                <a href="{{route('user_product_add')}}" class="col-lg-2 btn btn-primary btn-user btn-block">
                                    Add Product
                                </a>
                                @include('home.message')
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="padding-left: 0px; ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Make</th>
                                        <th>Series</th>
                                        <th>Model</th>
                                        <th>Year</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Image Gallery</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}
                                            </td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->make}}</td>
                                            <td>{{$rs->series}}</td>
                                            <td>{{$rs->model}}</td>
                                            <td>{{$rs->year}}</td>
                                            <td>{{$rs->price}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{Illuminate\Support\Facades\Storage::url($rs->image)}}" height="40px" alt="">
                                                @endif
                                            </td>
                                            <td><a href="{{route('user_image_add',['product_id'=>$rs->id])}}" onclick="return  !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets')}}/admin/img/gallery.png" height="40px"></a></td>
                                            <td><a href="{{route('user_product_edit',['id' => $rs->id])}}" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                                                    <i class="icon_tool"></i>
                                                </a></td>
                                            <td><a href="{{route('user_product_delete',['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                                                    <i class="icon_trash"></i>
                                                </a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br>
@endsection
