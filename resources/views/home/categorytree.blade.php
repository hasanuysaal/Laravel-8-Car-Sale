@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li class="slicknav_collapsed slicknav_parent">
                <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                    <a href="#">{{$subcategory->title}}</a>
                    <span class="slicknav_arrow">►</span>
                </a>
                <ul class="header__menu__dropdown slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                    <li><a href="./shop-details.html" role="menuitem" tabindex="-1">
                            @include('home.categorytree',['children'=>$subcategory->children])
                        </a>
                    </li>
                </ul>
            </li>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
