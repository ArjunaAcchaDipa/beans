@extends('layouts.app')

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

@section('content')
    {{-- Profile Page --}}
    <div id="profile" class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img class="img-responsive" src="images/profile.png" alt="Profile Picture" style="width: 100px; height: 100px; margin-left: 60px"/>
                </div>
                <div class="col-md-9">
                    <div style="padding-top: 20px">
                        <h1>Budi Setiawan</h1>
                        <div style="font-size: 18px">
                            1 Following
                            20 Followers
                            30 Following
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div id="description" class="layout_padding" style="padding-left: 4%">
                    <div class="full description text_align_center">
                        <h2 class="white_font" style="text-align: left; padding: 25px">
                            Coffee Lovers!<br>
                            No Coffee No Party!
                        </h2>
                    </div> 
                </div>
            </div>

            <div class="container">
                <div id="review" class="layout_padding" style="padding-left: 4%; padding-top: 10px">
                    <h2 style="text-align: left">
                        Review
                    </h2>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Profile Page --}}
@endsection