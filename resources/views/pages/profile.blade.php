<style>
    .beans_bg {
        background: #A67B5B;
    }
    .white_font {
        color: white !important;
    }
    .text_align_left {
        text-align: left !important;
    }
    .text_align_center {
        text-align: center !important;
    }
    .text_align_right {
        text-align: right !important;
    }
    .layout_padding{
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .full {
        width: 100%;
        float: left;
        margin: 0;
        padding: 0;
    }
    .heading h2 {
        padding: 0;
        font-size: 45px;
        font-weight: 500;
        text-align: left;
        color: #282e40;
    }
    .description {
        background: #282e40;
        margin-top: -1px;
        position: relative;
        width: 100%;
    }
    button.readmore_bt {
        background: #282e40;
        color: #111;
    }
</style>

@if (Auth::guest())
    <meta http-equiv="refresh" content="0; url = {{ route('login') }}" />
@else
    @extends('layouts.app')
    
    @section('content')
        {{-- Profile Page --}}
        <div id="profile" class="layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img class="img-responsive" src="/{{ Auth::user()->profile_pict }}" alt="Profile Picture" style="width: 100px; height: 100px; margin-left: 65px"/>
                    </div>
                    <div class="col-md-9">
                        <div class="row" style="padding-top: 5px">
                            <div style="font-size: 25px">
                                <strong>{{ Auth::user()->name }}</strong>
                                <a style="font-size: 12px; text-decoration: none" href="{{ route('editprofile', ['id'=>Auth::user()->id]) }}">Change</a>
                            </div>
                            <div style="font-size: 18px">
                                {{ Auth::user()->review }} Review
                                {{ Auth::user()->followers }} Followers
                                {{ Auth::user()->following }} Following
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div id="description" class="layout_padding" style="padding-left: 4%">
                        <div class="full description text_align_center">
                            <h2 class="white_font" style="text-align: left; padding: 25px">
                                {{ Auth::user()->description }}
                            </h2>
                        </div> 
                    </div>
                </div>

                @if (Auth::user()->review > 0)
                    <div class="container">
                        <div id="review" class="layout_padding" style="padding-left: 4%; padding-top: 10px">
                            <h1 style="text-align: left">
                                Review
                            </h1>
                        </div>
                        @foreach ($reviews as $review)
                            @if($review->user_id == Auth::user()->id)
                                @foreach ($shops as $shop)
                                    @if($shop->id == $review->shop_id)
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="container" src="/{{ $shop->shop_pict }}" alt="Image Error" style="margin-left: 50px; margin-right: 10px; width: 350px; height: 234px"/>
                                            </div>
                                            <div class="col-md-6 description white_font" style="width: 65%; padding-top: 10px">
                                                <div id="cafe_rating" style="padding-top: 10px">
                                                    <a href="{{ route('coffeeshop', ['id'=>$shop->id]) }}" style="text-decoration: none; color: white">
                                                        <h1 style="font-size: 20px">{{ $shop->shop_name }}</h1>
                                                    </a>
                                                    <h1 style="font-size: 20px">{{ $shop->rating }}⭐</h1>
                                                </div>
                                                <br>
                                                <div id="caption_review" style="font-size: 16px">
                                                    {{ $review->review_body }}
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        {{-- End of Profile Page --}}
    @endsection
@endif