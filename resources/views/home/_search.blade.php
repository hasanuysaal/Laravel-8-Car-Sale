<div class="col-lg-9">
    <div class="hero__search">
        <div class="hero__search__form">
            <form action="{{route('getproduct')}}" method="post">
                @csrf
                @livewire('search')
                <button type="submit" class="site-btn">SEARCH</button>
            </form>
            @section('footerjs')
                @livewireScripts
            @endsection
        </div>
        <div class="hero__search__phone">
            <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
            </div>
            <div class="hero__search__phone__text">
                <h5>+65 11.188.888</h5>
                <span>support 24/7 time</span>
            </div>
        </div>
    </div>
    <br>
    @yield('shopnow')
</div>
