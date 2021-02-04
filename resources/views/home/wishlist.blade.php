@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                @include('home.usermenu')
            </div>
            <div class="col-lg-9 col-md-7">
                <!-- Shoping Cart Section Begin -->
                <section class="shoping-cart spad" style="padding-top: 2px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shoping__cart__table">
                                    <table style="text-align: start;">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td class="shoping__cart__item">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                    @if($rs->product->image)
                                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->product->image)}}" alt="" style="height: 101px; width: 100px;">
                                                    @endif
                                                        </div>
                                                        <div class="col-lg-9" style="align-content: center;">
                                                        <a href="{{route('product',[$rs->product->id])}}" target="_blank">
                                                            <h5>{{$rs->product->title}}</h5></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="shoping__cart__price">
                                                    {{$rs->product->price}}
                                                </td>
                                                <td class="shoping__cart__total">
                                                    <a href="{{route('user_wishlist_delete',['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                                                        <i class="icon_trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection


