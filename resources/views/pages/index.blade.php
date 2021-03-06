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
    <div id="blog" class="beans_bg layout_padding right_white" style="padding-left: 200px">
        <div class="container">
            <div class="row">
            <div class="col-md-11">
                    <div class="heading full text_align_center">
                        <h2 class="white_font full text_align_left" style="padding-bottom: 20px">Our Recommendation</h2>
                    </div>
                </div>
            </div>
            <div id="CarouselCoffee" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#CarouselCoffee" data-slide-to="0" class="active"></li>
                    <li data-target="#CarouselCoffee" data-slide-to="1"></li>
                    <li data-target="#CarouselCoffee" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                @foreach($shops as $shop)
                    @if(($shop->id) == 1)
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
                    @endif
                            <table>
                                <tr>
                                    <td>
                                        <div class="container">
                                            <img src="/{{ $shop->shop_pict }}" alt="Our Recommendation Carousel" style=" height:500px">
                                        </div>
                                    </td>   
                                    <td> 
                                        <div class="container">
                                            <a href="{{ route('coffeeshop', ['id'=>$shop->id]) }}" style="text-decoration: none">
                                                <h2 name="coffee_shop_name" class="white_font" style="font-size: 30px">{{ $shop->shop_name }}</h2>
                                            </a>
                                            <a  href="{{ $shop->shop_website }}" style="text-decoration:none"  target="_blank" rel="noopener noreferrer">
                                                <p class="white_font" style="margin-bottom: 67%;"> 
                                                    Visit website
                                                </p>
                                            </a>
                                            <a style="text-decoration:none"  target="_blank" rel="noopener noreferrer" href="{{ $shop->shop_maps }}">
                                                <p class="white_font"> 
                                                    {{ $shop->shop_address }}
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>    
                        </div> <!-- Div gabung sama if -->
                @endforeach
                </div>
                <a class="carousel-control-prev" href="#CarouselCoffee" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#CarouselCoffee" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> 
                <br>
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