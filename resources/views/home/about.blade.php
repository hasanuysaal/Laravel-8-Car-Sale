@extends('layouts.home')

@section('title', 'About Us')

@section('content')
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                {!!$setting->aboutus!!}
            </div>
        </div>
    </div>
    <br>
@endsection


