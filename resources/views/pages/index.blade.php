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
    .right_white {
     position: relative;
    }
    .right_white::after {
        position: absolute;
        height: 100%;
        width: 10%;
        left: 0;
        top: 0;
        background: #fff;
        content: "";
        display: block;
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
    .recom_image {
        width: 350px;
        height: 234px;
    }
</style>

@section('content')
    <div id="blog" class="beans_bg layout_padding right_white">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                    <div class="heading full text_align_center">
                        {{-- reference to Our Recommendation --}}
                        <a href="/ourreccomendation">
                            <h2 class="white_font full text_align_left" style="padding-bottom: 20px">Our Recommendation</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 margin_top_30">
                    <div class="full" style="overflow: hidden;">
                        <div class="full">
                            <img class="img-responsive; recom_image" src="images/FCC.jpg" alt="#" />
                        </div>
                        {{-- text keterangan --}}
                        <div class="full our_recommendation_highlight text_align_center">
                            <a href="https://www.google.com/maps/place/First+Crack+Coffee+Pluit/@-6.117954,106.785658,15z/data=!4m2!3m1!1s0x0:0x76e8a98bd3283eae?sa=X&ved=2ahUKEwjcv__piIXxAhVGyjgGHb9DDXYQ_BIwCnoECEMQBQ">
                                <h2 class="white_font">First Crack Coffee, Pluit</h2>
                                <p>
                                    <div class="white_font">
                                        Address:<br>
                                        Pluit Indah No.31, RT.1/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450
                                    </div>
                                </p>
                            </a>
                        </div> 
                    </div>  
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full" style="overflow: hidden;">
                        <div class="full bl">
                            <img class="img-responsive; recom_image" src="images/monks_KG.jpg" alt="#" />
                        </div> 
                        {{-- text keterangan --}}
                        <div class="full our_recommendation_highlight text_align_center">
                            <a href="https://www.google.com/maps/place/Monks/@-6.1638517,106.9112396,15z/data=!4m5!3m4!1s0x0:0xb9f5722c6f309c13!8m2!3d-6.1638341!4d106.9112511">
                                <h2 class="white_font">Monks, Kelapa Gading</h2>
                                <p>
                                    <div class="white_font">
                                        Address:<br>
                                        Komp. Graha Boulevard Timur Summarecon Kelapa Gading Blok ND1/51, RT.8/RW.12, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14550
                                    </div>
                                </p>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full" style="overflow: hidden;">
                        <div class="full bl">
                            <img class="img-responsive; recom_image" src="images/cafe_batavia.jpg" alt="#" />
                        </div> 
                        {{-- text keterangan --}}
                        <div class="full our_recommendation_highlight text_align_center">
                            <a href="https://www.google.com/maps/place/Cafe+Batavia/@-6.1344685,106.8105859,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6a1dff154fd569:0xa38223eb6637cf44!8m2!3d-6.1344685!4d106.8127746">
                                <h2 class="white_font">Cafe Batavia</h2>
                                <p>
                                    <div class="white_font">
                                        Address:<br>
                                        Pluit Indah No.31, RT.1/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450
                                    </div>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h1>
                            <strong class="white_font">
                                Java Travel
                            </strong>
                            <br>
                            20 Cafe Tempat Nongkrong di Jakarta yang Paling Hits
                        </h1>
                        <p>
                            Setelah lelah seharian bekerja, biasanya pada malam hari dapat diisi kegiatan dengan nongkrong di cafe. Tidak hanya sekedar nongkrong saja, dengan bertemu banyak orang di cafe juga dapat menghasilkan sesuatu yang bernilai positif.
                        </p>
                        <div class="full margin_top_30">
                            <a class="main_bt" href="https://www.javatravel.net/cafe-jakarta">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full margin_top_30">
                        <img class="img-responsive layout_padding" src="images/java_travel.jpg" alt="#" /> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection