@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<div class="col-lg-3">
    <div class="hero__categories">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>All departments</span>
        </div>
        <ul >
            @foreach($parentCategories as $rs)
                <div class="row">
                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#">{{$rs->title}}</a>
                        @if(count($rs->children))
                            <span class="slicknav_arrow">►</span></a>
                    <ul class="header__menu__dropdown" role="menu" aria-hidden="true" style="display: none;" >
                        <li><a href="#" role="menuitem" tabindex="-1">
                                @include('home.categorytree',['children'=>$rs->children])
                            </a>
                        </li>
                    </ul>
                    @endif
                </li>
                </div>
            @endforeach
        </ul>
    </div>
</div>

