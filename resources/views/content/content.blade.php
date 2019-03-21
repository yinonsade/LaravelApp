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

<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            @foreach ($contents as $content)

            <div class="col-md-12">
                <h3>{{ $content->title }}</h3>
                <p class="lead">{!! $content->article !!}</p>

            </div>
            @endforeach
        </div>

    </div>
</section>





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