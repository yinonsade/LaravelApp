@extends('master') 
@section('main_content')

<style>
    .first {
        background-color: rgba(255, 255, 255, 0.3) !important;
    }
</style>

<!-- CONTENT --------------------------------------------------------------------------------->

<!-- Intro Section -->
<section id="intro">

    <!-- Hero Slider Section -->
    <div class="flexslider fullscreen-carousel hero-slider-1 ">
        <ul class="slides">



            <!--Slide-->
            <li data-slide="light-slide">
                <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="{{asset('images/model-1.jpg') }}">
                    <div class="js-Slide-fullscreen-height container">
                        <div class="intro-content">
                            <div class="intro-content-inner">
                                <h2 class="h2">E2.1.8</h2>
                                <p class="lead">TOP ONLINE FASHION</p>
                                <br />
                                <div><a href="{{ url('shop') }}" class=" first btn btn-md btn-black-line ">COLLECTION</a>
                                    <span class="btn-space-10 xs-hidden"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!--Slide-->
            <li data-slide="light-slide">
                <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="{{asset('images/lady.jpg') }}">
                    <div class="js-Slide-fullscreen-height container">
                        <div class="intro-content">
                            <div class="intro-content-inner">
                                <h2 class="h2">E2.1.8</h2>
                                <p class="lead">TOP ONLINE FASHION</p>
                                <br />
                                <div><a href="{{ url('shop') }}" class="btn btn-md btn-black-line first">COLLECTION</a><span class="btn-space-10 xs-hidden"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>



            <!--Slide-->

            <li data-slide="light-slide">
                <div class="slide-bg-image overlay-dark dark-bg parallax parallax-section1" data-background-img="{{asset('images/model-2.jpg') }}">
                    <div class="js-Slide-fullscreen-height container">
                        <div class="intro-content">
                            <div class="intro-content-inner">
                                <h2 class="h2">E2.1.8</h2>
                                <p class="lead">TOP ONLINE FASHION</p>
                                <br />
                                <div><a href="{{ url('shop') }}" class="btn btn-md btn-black-line first">COLLECTION</a><span class="btn-space-10 xs-hidden"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    </div>
    <!-- End Hero Slider Section -->
</section>

</div>

<div class="container-fluid">
    <div class="row">
        <div class=" home-mobile-div col-12 d-md-none footer">
            <h1 class="text-center mt-5">E2.1.8</h1>
            <br>
            <br>
            <h2 class="text-center mt-2">Top Fashion</h2>
            <br>
            <h4 class="text-center"><a href="{{ url('shop') }}">SHOP</h4></a>

        </div>
    </div>
</div>
<!-- End Intro Section -->

<!-- END CONTENT ---------------------------------------------------------------------------->
@endsection