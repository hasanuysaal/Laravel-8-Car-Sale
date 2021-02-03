
<div class="contact-form spad" style="padding-top: 3px;">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <input type="text" wire:model="subject" placeholder="Subject">
                @error('subject') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-lg-12 text-center">
                <textarea wire:model="review"  placeholder="Your review"></textarea>
                @error('review') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="col-lg-12">
                @error('rate') <span class="text-danger">{{$message}}</span>@enderror
                <div class="row">
                    <div class="col-lg-3">
                        <strong>Your Rating:</strong>
                    </div>
                    <div class="col-lg-9">
                        <div class="product__details__text">
                            <div class="product__details__rating">
                                <i class="fa fa-star"><input type="radio" id="star5" wire:model="rate" value="1"/></i>
                                <i class="fa fa-star"><input type="radio" id="star4" wire:model="rate" value="2"/></i>
                                <i class="fa fa-star"><input type="radio" id="star3" wire:model="rate" value="3"/></i>
                                <i class="fa fa-star"><input type="radio" id="star2" wire:model="rate" value="4"/></i>
                                <i class="fa fa-star"><input type="radio" id="star1" wire:model="rate" value="5"/></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @auth
                <input type="submit" class="site-btn" value="Save"/>
            @else
                <a href="/login" class="site-btn">For Submit Your Review, Please Login</a>
            @endauth
        </div>
    </form>
</div>

<br>
