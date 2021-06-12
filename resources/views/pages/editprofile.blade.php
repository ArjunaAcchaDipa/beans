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
    .bt_send {
        background: #282e40;
        color: #111;
    }
</style>

@if (Auth::guest())
    <meta http-equiv="refresh" content="0; url = {{ route('login') }}" />
@else
    @extends('layouts.app')
    
    @section('content')
        <div id="profile" class="layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img class="img-responsive" src={{ Auth::user()->profile_pict }} alt="Profile Picture" style="width: 100px; height: 100px; margin-left: 65px"/>
                    </div>
                    <div class="col-md-9">
                        <div class="row" style="padding-top: 5px">
                            <div style="font-size: 25px">
                                <strong>{{ Auth::user()->name }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form Edit Profile --}}
                <form class="container layout_padding" style="margin-left: 4%; padding-right: 2%" action="/edit" method="POST">
                    @csrf
                    <div class="row container">
                        <input type="hidden" name="id" value="{{ $user['id'] }}">
                        <div class="col-sm-12">
                            <h3>Name:</h3>
                            <input name="name" class="form-control" placeholder="Elon Musk" type="text" style="font-size: 15px">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <h3>Email:</h3>
                            <input name="email" class="form-control" placeholder="ElonMusk@binus.ac.id" type="Email" style="font-size: 15px">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <h3>Image path:</h3>
                            <input name="profile_pict" class="form-control" placeholder="/images/profile.png" type="text" style="font-size: 15px">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <h3>Description:</h3>
                            <textarea name="description" class="form-control" placeholder="$DOGE to the moon" type="text" style="font-size: 15px"></textarea>
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <h3>Password:</h3>
                            <input name="password" type="password" class="form-control textarea" placeholder="Message" style="font-size: 15px">
                            <br>
                            <br>
                        </div>
                    </div>
                    <button class="bt_send white_font" style="font-size: 15px; float: right; margin-right: 2%" type="submit">
                        Send
                    </button>
                </form>
                {{-- End of Form Edit Profile --}}
            </div>
        </div>
    @endsection
@endif