@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<div class="col-lg-3">
    <div class="hero__categories">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>Categories</span>
        </div>
        <ul @if(isset($page)) style="display: block;" @endif>
            @foreach($parentCategories as $rs)
                <div class="row">
                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none; "><a href="{{route('categoryproducts',['id'=>$rs->id])}}">{{$rs->title}}</a></a></li>
                </div>
            @endforeach
        </ul>
    </div>
</div>

