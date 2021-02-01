<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($slider as $rs)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" style="height: 270px" data-setbg="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}">
                        <h5><a href="{{route('product',['id'=>$rs->id])}}">{{$rs->title}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
