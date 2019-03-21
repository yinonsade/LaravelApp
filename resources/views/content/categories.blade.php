@extends('master') 
@section('main_content')


<!-- Shop Item -->
<section class="inner-intro bg-image overlay-dark parallax parallax-background1" data-background-img="{{asset('images/model-4.jpg') }}">
    <div class="container">
        <div class="row title">
            <h2 class="h2">Shop By categories</h2>

        </div>
    </div>
</section>
<!-- End Intro Section -->
<div class="container">
    <!-- Sort List -->
    <div class="row mt-5 mb-5 text-center">
        <div class="col-md-12 shop-filter">

            <a href={{url( 'shop')}}>
                          <a href={{url( 'shop/all-products')}}>
                              <button class="btn btn-sm btn-black-line">All products</button></a>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-5 mt-3">
            <div class="item-box">
                <!-- Shop item images -->
                <div class="shop-item">
                    <div class="item-img">
                        <img src="{{asset('images/' . $category['cimage']) }}" alt="{{$category['ctitle'] }} category image" />
                    </div>
                    <div class="item-mask">
                        <div class="item-mask-detail">
                            <div class="item-mask-detail-ele">
                                <a class="btn btn-line-xs btn-white-line" href="{{ url('shop/' . $category['curl']) }}">View Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Shop item images -->

                <!-- Shop item info -->
                <div class="shop-item-info">
                    <h4 class="shop-item-name">{{$category['ctitle'] }}</h4>
                    <h6 class="shop-item-name">{!! $category['carticale'] !!}</h6>
                </div>
                <!-- Shop item info -->

            </div>

        </div>
        @endforeach


    </div>
</div>
@endsection