@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{route('home')}}"><img src="https://arbimg1.mncdn.com/assets/dist/img/tek-tur-large.gif?v=20210128162709" alt=""></a>
                    </div>
                    <ul>
                        <li><strong>Address: </strong>{{$setting->address}}</li>
                        <li><strong>Phone: </strong>{{$setting->phone}}</li>
                        <li><strong>Email: </strong>{{$setting->email}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        @if ($setting->facebook != null)<a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                        @if ($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
                        @if ($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                        @if ($setting->youtube != null)<a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-pinterest"></i></a> @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->title}}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.slicknav.js"></script>
<script src="{{ asset('assets') }}/js/mixitup.min.js"></script>
<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets') }}/js/main.js"></script>
