@extends('master') 
@section('main_content')



<!-- Intro Section -->
<section class="inner-intro bg-image overlay-light parallax parallax-background1" data-background-img="{{asset('images/about.jpg')}}">
    <div class="container">
        <div class="row title">
            <h2 class="h2">About Us</h2>

        </div>
    </div>
</section>
<!-- End Intro Section -->


<!-- About Section -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>We Creative digital Studio</h3>
                <p class="lead">Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit cursus. tellus eget condimentum
                    rhoncus sem quam semper libero.</p>
            </div>
            <div class="col-md-6">
                <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                </p>
                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra
                    quis, feugiat a, tellus. Phasellus viverra nulla ut metus.</p>
            </div>
        </div>

    </div>
</section>


<!-- Testimonials -->
<section id="testimonial" class="overlay-dark80 dark-bg ptb ptb-sm-80" style="background-image: url('img/full/25.jpg');"
    data-stellar-background-ratio="0.4">
    <div class="container">
        <div class="owl-carousel testimonial-carousel nf-carousel-theme white">
            <div class="item">
                <div class="testimonial text-center dark-color">
                    <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                    <p class="lead">" I got a dummy for Christmas and started teaching myself. I got books and records and sat in front of
                        the practising. I did my first show in the third grade and just kept going. "
                    </p>
                    <h6 class="quote-author">Jeff Dunham <span style="font-weight: 400;">( Appel Studio )</span></h6>
                </div>
            </div>
            <div class="item">
                <div class="testimonial text-center dark-color">
                    <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                    <p class="lead">" It's true, you can never eat a pet you name. And anyway, I did my first show in the third grade it
                        would be like a ventriloquist eating his dummy. "</p>
                    <h6 class="quote-author">Alexander Theroux <span style="font-weight: 400;">( USA )</span></h6>
                </div>
            </div>
            <div class="item">
                <div class="testimonial text-center dark-color">
                    <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                    <p class="lead">" We're not leaving here without Buster, man. Leave no crash-test dummy behind! "</p>
                    <h6 class="quote-author">Adam Savage <span style="font-weight: 400;">( Artist )</span></h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->



<!-- Statement Section -->
<section class="dark-bg  ptb-60" id="statement">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4 class="mb-15">E22</h4>
                <a href="{{ url('shop') }}" class="btn btn-md btn-white">GO TO SHOP</a>
            </div>
        </div>
    </div>
</section>
<!-- End Statement Section -->

<!-- About Section -->

<!-- End CONTENT ------------------------------------------------------------------------------>
@endsection