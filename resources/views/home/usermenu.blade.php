@auth
<div class="sidebar">
    <div class="sidebar__item">
        <h4>User Panel</h4>
        <ul>
            <li><a href="{{route('userprofile')}}">My Profile</a></li>
            <li><a href="{{route('myreviews')}}">My Reviews</a></li>
            <li><a href="{{route('user_wishlist')}}">My Wishlist</a></li>
            <li><a href="#">My Messages</a></li>
            <li><a href="{{route('user_products')}}">My Products</a></li>
            @php
                $userRoles = \Illuminate\Support\Facades\Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}"  target="_blank">Admin Panel</a></li>
            @endif
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </div>
</div>
@endauth
