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
    .our_recommendation_highlight {
        background: #282e40;
        margin-top: -1px;
        position: relative;
        width: 350px;
        height: 104px;
    }
    button.readmore_bt {
        background: #282e40;
        color: #111;
    }
</style>

@section('content')
    {{-- Our Recommendation --}}
    <div id="blog" class="beans_bg layout_padding right_white" style="padding-left: 200px">
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
                            <a style="text-decoration:none" href="https://firstcrackcoffee.id/">
                                <h2 class="white_font">First Crack Coffee, Pluit</h2>
                            </a>
                            <p>
                                <div class="white_font">
                                    Address:<br>
                                    <a class="white_font" style="text-decoration: none" href="https://www.google.com/maps/place/First+Crack+Coffee+Pluit/@-6.117954,106.785658,15z/data=!4m2!3m1!1s0x0:0x76e8a98bd3283eae?sa=X&ved=2ahUKEwjcv__piIXxAhVGyjgGHb9DDXYQ_BIwCnoECEMQBQ">
                                        Pluit Indah No.31, RT.1/RW.7, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450
                                    </a>
                                </div>
                            </p>
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
                            <a style="text-decoration: none">
                                <h2 class="white_font">Monks, Kelapa Gading</h2>
                            </a>
                            <p>
                                <div class="white_font">
                                    Address:<br>
                                    <a class="white_font" style="text-decoration: none" href="https://www.google.com/maps/place/Monks/@-6.1638517,106.9112396,15z/data=!4m5!3m4!1s0x0:0xb9f5722c6f309c13!8m2!3d-6.1638341!4d106.9112511">
                                        Komp. Graha Boulevard Timur Summarecon Kelapa Gading Blok ND1/51, RT.8/RW.12, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14550
                                    </a>
                                </div>
                            </p>
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
                            <a style="text-decoration:none" href="https://www.cafebatavia.com/">
                                <h2 class="white_font">Cafe Batavia</h2>
                            </a>
                            <p>
                                <div class="white_font">
                                    Address:<br>
                                    <a class="white_font" style="text-decoration: none" href="https://www.google.com/maps/place/Cafe+Batavia/@-6.1344685,106.8105859,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6a1dff154fd569:0xa38223eb6637cf44!8m2!3d-6.1344685!4d106.8127746">
                                        Jl. Pintu Besar Utara No.14, Pinangsia, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11230
                                    </a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    {{-- End of Our Recommendation --}}

    <div class="container heading" style="heading; padding-top: 20px">
        <br>
        <br>
        <strong>
            <h2 class="full">Article</h2>
        </strong>
    </div>

    {{-- Article 1 --}}
    <div id="article1" class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading margin_top_30" style="padding-top: 10px">
                            <strong>
                                <h3>Java Travel</h3>
                            </strong>
                            <h2>20 Cafe Tempat Nongkrong di Jakarta yang Paling Hits</h2>
                        </div>
                        <div style="font-size: 16px; text-align: justify">
                            <p>
                                Setelah lelah seharian bekerja, biasanya pada malam hari dapat diisi kegiatan dengan nongkrong di cafe. Tidak hanya sekedar nongkrong saja, dengan bertemu banyak orang di cafe juga dapat menghasilkan sesuatu yang bernilai positif.
                            </p>
                        </div>
                        <div class="full margin_top_30">
                            <a class="btn readmore_bt btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40" href="https://www.javatravel.net/cafe-jakarta">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full margin_top_30">
                        <img class="img-responsive layout_padding" src="images/java_travel.jpg" alt="Article1" /> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Article 1 --}}
    
    {{-- Article 2 --}}
    <div id="article2" class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="images/brilio_food.jpg" alt="Article2" />
                </div>
                <div class="col-md-6">
                    <div class="heading margin_top_30" style="padding-top: 10px">
                        <strong>
                            <h3>Briliofood.net</h3>
                        </strong>
                        <h2>30 Kafe instagramable di Jakarta, unik dan cocok untuk hangout</h2>
                    </div>
                    <div class="full margin_top_20" style="keterangan; font-size: 16px; text-align: justify">
                        <p>
                            Hangout atau nongkrong kini sudah menjadi lifestyle bagi anak muda, pelajar, mahasiswa hingga para pekerja. Tidak terkecuali bagi orang-orang yang hidup di Jakarta, hangout bisa untuk melepaskan kepenatan setelah seharian beraktivitas.
                        </p>
                    </div>
                    <div class="full margin_top_30">
                        <a class="btn readmore_bt btn-outline-success" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40" href="https://www.briliofood.net/tempat-makan/30-kafe-instagramable-di-jakarta-unik-dan-cocok-untuk-hangout-190809a.html">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Article 2 --}}

    {{-- Article 3 --}}
    <div id="article3" class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading margin_top_30" style="padding-top: 10px">
                            <strong>
                                <h3>iTrip</h3>
                            </strong>
                            <h2>15 Cafe Instagramable di Jakarta yang Bikin Betah Nongkrong</h2>
                        </div>
                        <div style="font-size: 16px; text-align: justify">
                            <p>
                                Aktivitas santai seperti nongkrong agaknya telah menjadi gaya hidup bagi para anak muda maupun para pekerja. Dengan hangout di kafe dianggap menjadi cara ampuh melepaskan rasa penat akibat aktivitas sehari-hari.
                            </p>
                        </div>
                        <div class="full margin_top_30">
                            <a class="btn readmore_bt btn-outline-success" href="https://www.itrip.id/cafe-jakarta" style="font-size: 15px; color: white; background-color: #282E40; border: #282E40">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full margin_top_30">
                        <img class="img-responsive layout_padding" src="images/itrip.jpg" alt="Article3" /> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Article 3 --}}
@endsection