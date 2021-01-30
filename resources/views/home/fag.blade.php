@extends('layouts.home')

@section('title', 'FAQ')

@section('content')
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                {!!$setting->fag!!}
            </div>
        </div>
    </div>
    <br>
@endsection


