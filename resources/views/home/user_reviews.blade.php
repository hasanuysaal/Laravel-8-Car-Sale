@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-10 col-md-7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div >
                                        @include('home.message')
                                        <table border="1" cellpadding="10" >
                                            <thead style="text-align: start;">
                                            <tr>
                                                <th class="shoping__product">Id</th>
                                                <th>Product</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                            <hr>
                                            </thead>
                                            <tbody style="text-align: start; ">
                                            @foreach($datalist as $rs)
                                            <tr>
                                                <td >
                                                    <h5>{{$rs->id}}</h5>
                                                </td>
                                                <td > <a href="{{route('product',[$rs->product->id])}}" target="_blank">
                                                    <h5>{{$rs->product->title}}</h5></a>
                                                </td>
                                                <td >
                                                    <h5>{{$rs->subject}}</h5>
                                                </td>
                                                <td >
                                                    <h5>{{$rs->review}}</h5>
                                                </td>
                                                <td >
                                                    <h5>{{$rs->rate}}</h5>
                                                </td>
                                                <td >
                                                    <h5>{{$rs->status}}</h5>
                                                </td>
                                                <td >
                                                    <h5>{{$rs->created_at}}</h5>
                                                </td>
                                                <td align="center"><a href="{{route('myreview_delete',['id' => $rs->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
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
        </div>
    <br>
@endsection
