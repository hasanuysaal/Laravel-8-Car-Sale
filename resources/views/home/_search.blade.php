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
            <div class="hero__search__phone__text" >
                <a href="{{route('user_products')}}" class="site-btn">ÜCRETSİZ İLAN VER</a>
            </div>
        </div>
    </div>
    <br>
    @yield('shopnow')
</div>
