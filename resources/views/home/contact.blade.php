@extends('layouts.home')

@section('title', 'Contact')

@section('content')
    <hr>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                {!!$setting->contact!!}
            </div>
            <div class="col-lg-5 col-md-7">
                <strong>İletişim Formu</strong>
                <p>Bize Yazın...</p>
            </div>
        </div>
    </div>
    <br>
@endsection


