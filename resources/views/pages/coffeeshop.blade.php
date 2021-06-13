@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="margin-left:115px">
            <h1>{{$shop->shop_name}}</h1>

    </div>
    <div class="container-fluid" style="margin-left:115px">
            <h2>{{$shop->rating}}⭐</h2>
    </div>
    
    <div class="container-fluid" style="margin-left:100px;padding-top:10px" >
            <img class="col-md-6" src="/{{$shop->shop_pict}}" alt="Coffee Shop Image"  height="400px" >
                <div class="col-md-1" style="margin-right:85px">
                    <img src="/{{$shop->shop_pict1}}" alt="Coffee Shop Image" height="200" width="200" style="padding-bottom: 5px">
                    
                    <img  src="/{{$shop->shop_pict2}}" alt="Coffee Shop Image" height="200" width="200" style="padding-top: 5px">
                    
                </div>                        
                <div class="col-md-3" style="margin-right:100px">
                    <img src="/{{$shop->shop_pict3}}" alt="Coffee Shop Image" height="200" width="200" style="padding-bottom: 5px">
                    <img src="/{{$shop->shop_pict4}}" alt="Coffee Shop Image" height="200" width="200" style="padding-top: 5px">
                </div>
    </div>

    <div class="container-fluid" style="margin-left:100px;padding-top: 40px">
        <div class="col-md-6">
            <h2> Menu </h2>
            <img src="/{{$shop->menu_pict}}" alt="Coffee Shop Menu" height="400" width="355">
            <img src="/{{$shop->menu_pict1}}" alt="Coffee Shop Menu" height="400" width="355" style="padding-left: 30px">

        </div>
        <div class="col-md-3">
            <h2> Location </h2>
            <div class="container-absolute" style="background-color:#A67B5B; height: 400px; width: 410px">
                <div style="margin-left: 30px">
                    <h5 style=" padding-top:15px">Day of Operation: Monday-Sunday</h5>
                    <h5>Hour of Operation: 08:00 - 22:00 WIB</h5>
                    <a style="text-decoration:none"  target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/place/First+Crack+Coffee+Pluit/@-6.117954,106.785658,15z/data=!4m2!3m1!1s0x0:0x76e8a98bd3283eae?sa=X&ved=2ahUKEwjcv__piIXxAhVGyjgGHb9DDXYQ_BIwCnoECEMQBQ">
                        <img src="/{{$shop->location_pict}}" alt="map" height="250" width="280">
                    </a>
                    <h5 style="padding-right:20px; padding-top:10px">Address: Pluit Indah No.31, RT.1/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450 </h5>
                    <h5> Phone: (021) 21882368 </h5>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="padding-top:40px;">
        <h2> Review </h2>
        <form action="target" method="POST">
        <textarea rows="8" cols="100" name="comments" id="comments" style="font-family:sans-serif;font-size:10px;" placeholder="Review here!">
        </textarea>
        <br>
        <input type="submit" class="wpcf7-form-control wpcf7-submit" value="Submit" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40">
        </form>
    </div>
    
</div>
@endsection