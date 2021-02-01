@extends('layouts.home')

@section('title', 'Contact')

@section('content')
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
            <div class="contact-form spad">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__title">
                            <h2>İletişim Bilgileri</h2>
                        </div>
                    </div>
                </div>
                {!!$setting->contact!!}
            </div>
            </div>
            <div class="col-lg-5 col-md-7">
                <!-- Contact Form Begin -->
                <div class="contact-form spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact__form__title">
                                    <h2>İletişim Formu</h2>
                                </div>
                            </div>
                        </div>
                        @include('home.message')
                        <form action="{{route('sendmessage')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="name" placeholder="Name Surname">
                                </div>
                                <div class="col-lg-12 ">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <textarea placeholder="Your message" name="message"></textarea>
                                    <button type="submit" class="site-btn">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact Form End -->
            </div>
        </div>
    </div>
    <br>
@endsection


