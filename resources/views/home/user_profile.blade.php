@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5" style="padding-top: 3px;">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-9 col-md-7">
                    @include('profile.show')
                </div>
            </div>
        </div>
@endsection
