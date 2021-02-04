@extends('layouts.home')

@section('title', $data->title)

@section('content')
    <hr>

    <!-- Product Details Section Begin -->
    <section class="product-details spad" style="padding-top: 2px;">
        <div class="container">
            <div class="row">
                <div class="product__details__text">
                    <h3>{{$data->title}}</h3>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" style="height: 540px; width: 560px;"
                                 src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach($datalist as $rs)
                                <img data-imgbigurl="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                     src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        @php
                            $avgrev = \App\Http\Controllers\HomeController::avgreview($data->id);
                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                            $ownerphone = \App\Http\Controllers\HomeController::getownerphone($data->id);
                            $owneraddress = \App\Http\Controllers\HomeController::getowneraddress($data->id);
                            $ownername = \App\Http\Controllers\HomeController::getownername($data->id);
                        @endphp
                        <div class="product__details__price">{{$data->price}} TL</div>
                        <p>{{$owneraddress}}</p>
                        <hr>
                        <table>
                            <tr>
                                <th>Make :</th><td> {{$data->make}}</td>
                            </tr>
                            <tr>
                                <th>Series :</th><td> {{$data->series}}</td>
                            </tr>
                            <tr>
                                <th>Model :</th><td> {{$data->model}}</td>
                            </tr>
                            <tr>
                                <th>Year :</th><td> {{$data->year}}</td>
                            </tr>
                            <tr>
                                <th>Fuel :</th><td> {{$data->fuel}}</td>
                            </tr>
                            <tr>
                                <th>Gear :</th><td> {{$data->gear}}</td>
                            </tr>
                            <tr>
                                <th>KM :</th><td> {{$data->km}}</td>
                            </tr>
                            <tr>
                                <th>Engine Power :</th><td> {{$data->engine_power}}</td>
                            </tr>
                            <tr>
                                <th>Engine Capacity :</th><td> {{$data->engine_capacity}}</td>
                            </tr>
                            <tr>
                                <th>Tarction :</th><td> {{$data->traction}}</td>
                            </tr>
                            <tr>
                                <th>Color :</th><td> {{$data->color}}</td>
                            </tr>
                            <tr>
                                <th>Condition :</th><td> {{$data->condition}}</td>
                            </tr>
                            <tr>
                                <th>Created at :</th><td> {{$data->created_at}}</td>
                            </tr>
                        </table>
                        <hr>
                        <div class="product__details__rating">
                            <a class="heart-icon" href="{{route('user_wishlist_add',['id'=>$data->id])}}"><span class="icon_heart_alt"></span></a>
                            <a href="#" class="primary-btn">{{$ownerphone}}</a>
                            <i class="fa fa-star @if ($avgrev<1) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<2) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<3) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<4) fa fa-star-o @endif"></i>
                            <i class="fa fa-star @if ($avgrev<5) fa fa-star-o @endif"></i>
                            <span>({{$countreview}} reviews)</span>
                        </div>
                        <ul>
                            <li><b>Name :</b> <span>{{$ownername}}</span></li>
                            <li><b>Phone :</b> <span>{{$ownerphone}}</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                   aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                   aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                   aria-selected="false">Reviews

                                    <span>({{$countreview}})</span>

                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    {!!  $data->detail !!}
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <hr>
                                    <table>
                                        <tr>
                                            <th>Make :</th><td> {{$data->make}}</td>
                                        </tr>
                                        <tr>
                                            <th>Series :</th><td> {{$data->series}}</td>
                                        </tr>
                                        <tr>
                                            <th>Model :</th><td> {{$data->model}}</td>
                                        </tr>
                                        <tr>
                                            <th>Year :</th><td> {{$data->year}}</td>
                                        </tr>
                                        <tr>
                                            <th>Fuel :</th><td> {{$data->fuel}}</td>
                                        </tr>
                                        <tr>
                                            <th>Gear :</th><td> {{$data->gear}}</td>
                                        </tr>
                                        <tr>
                                            <th>KM :</th><td> {{$data->km}}</td>
                                        </tr>
                                        <tr>
                                            <th>Engine Power :</th><td> {{$data->engine_power}}</td>
                                        </tr>
                                        <tr>
                                            <th>Engine Capacity :</th><td> {{$data->engine_capacity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tarction :</th><td> {{$data->traction}}</td>
                                        </tr>
                                        <tr>
                                            <th>Color :</th><td> {{$data->color}}</td>
                                        </tr>
                                        <tr>
                                            <th>Condition :</th><td> {{$data->condition}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created at :</th><td> {{$data->created_at}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7" >

                                                <div class="row" >
                                                    @foreach($reviews as $rs)
                                                        <div class="col-lg-12" >
                                                            <hr>
                                                            <i class="fa fa-user"> {{$rs->user->name}}</i>
                                                            <i class="fa fa-clock-o"> {{$rs->created_at}}</i>
                                                            <div class="product__details__text">
                                                                <div class="product__details__rating">
                                                                    <i class="fa fa-star @if ($rs->rate<1) fa fa-star-o @endif"></i>
                                                                    <i class="fa fa-star @if ($rs->rate<2) fa fa-star-o @endif"></i>
                                                                    <i class="fa fa-star @if ($rs->rate<3) fa fa-star-o @endif"></i>
                                                                    <i class="fa fa-star @if ($rs->rate<4) fa fa-star-o @endif"></i>
                                                                    <i class="fa fa-star @if ($rs->rate<5) fa fa-star-o @endif"></i>
                                                                </div>
                                                            </div>
                                                            <strong>{{$rs->subject}}</strong>
                                                            <p>{{$rs->review}}</p>
                                                            <hr>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                @livewire('review',['id' => $data->id])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

@endsection
