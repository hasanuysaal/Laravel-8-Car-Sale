@extends('layouts.home')

@section('title', 'References')

@section('content')
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-7">
                {!!$setting->references!!}
            </div>
        </div>
    </div>
    <br>
@endsection


