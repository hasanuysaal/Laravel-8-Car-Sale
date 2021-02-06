@extends('layouts.home')

@section('title', $setting->title)

@section('description',$setting->description)

@section('keywords',$setting->keywords)

@section('shopnow')
    <div class="hero__item set-bg" style="height: 431px; width: 870px; border-radius: 12px; "  data-setbg="{{\Illuminate\Support\Facades\Storage::url($latest->image)}}">
        <div class="hero__text">
            <span style="color: black; background-color: white;">{{$latest->title}}</span>
            <h2>{{$latest->make}} <br />{{$latest->series}}</h2>
            <p >{{$latest->price}} TL</p>
            <a href="{{route('product',['id'=>$latest->id])}}" class="primary-btn">SHOP NOW</a>
        </div>
    </div>
@endsection
@section('content')
    @include('home._slider')
    <!-- Featured Section Begin -->
    <hr>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 270px; border-radius: 20px; " >
                                <ul class="product__item__pic__hover">
                                    <li><a href="{{route('user_wishlist_add',['id'=>$rs->id])}}"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{route('product',['id'=>$rs->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{$rs->title}}</a></h6>
                                <h5>{{$rs->price}} TL</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Latest Product Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach($last1 as $rs)
                                <a href="{{route('product',['id'=>$rs->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="height: 110px; width: 110px; border-radius: 20px;">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rs->title}}</h6>
                                        <span>{{$rs->price}} TL</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach($last2 as $rs)
                                <a href="{{route('product',['id'=>$rs->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="height: 110px; width: 110px; border-radius: 20px;">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rs->title}}</h6>
                                        <span>{{$rs->price}} TL</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>

                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach($top1 as $rs)
                                <a href="{{route('product',['id'=>$rs->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="height: 110px; width: 110px; border-radius: 20px;">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rs->title}}</h6>
                                        <span>{{$rs->price}} TL</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach($top2 as $rs)
                                <a href="{{route('product',['id'=>$rs->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="height: 110px; width: 110px; border-radius: 20px;">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rs->title}}</h6>
                                        <span>{{$rs->price}} TL</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>

                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach($review1 as $rs)
                                <a href="{{route('product',['id'=>$rs->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="height: 110px; width: 110px; border-radius: 20px;">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rs->title}}</h6>
                                        <span>{{$rs->price}} TL</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach($review2 as $rs)
                                <a href="{{route('product',['id'=>$rs->id])}}" class="latest-product__item">
                                    <div class="latest-product__item__pic" style="height: 110px; width: 110px; border-radius: 20px;">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rs->title}}</h6>
                                        <span>{{$rs->price}} TL</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Latest Product Section End -->

@endsection




