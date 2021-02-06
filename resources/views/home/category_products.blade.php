
@extends('layouts.home')

@section('title', $data->title)

@section('content')
    <hr>
    <!-- Product Section Begin -->

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>{{$data->title}}</h4>
                        @foreach($datalist as $rs)
                            <ul>
                                <li><a href="{{route('deneme',['make'=>$rs->make,'id'=>$rs->category_id])}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->make)}}</a></li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item sidebar__item__color--option">
                        <h4>Colors</h4>
                        <div class="sidebar__item__color sidebar__item__color--white">
                            <label for="white">
                                White
                                <input type="radio" id="white">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--gray">
                            <label for="gray">
                                Gray
                                <input type="radio" id="gray">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--red">
                            <label for="red">
                                Red
                                <input type="radio" id="red">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--black">
                            <label for="black">
                                Black
                                <input type="radio" id="black">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--blue">
                            <label for="blue">
                                Blue
                                <input type="radio" id="blue">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--green">
                            <label for="green">
                                Green
                                <input type="radio" id="green">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <h4>Popular Size</h4>
                        <div class="sidebar__item__size">
                            <label for="large">
                                Large
                                <input type="radio" id="large">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="medium">
                                Medium
                                <input type="radio" id="medium">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="small">
                                Small
                                <input type="radio" id="small">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="tiny">
                                Tiny
                                <input type="radio" id="tiny">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
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
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>{{count($datalist)}}</span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($datalist as $rs)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 270px; border-radius: 20px;">
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
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Product Section End -->
@endsection
