@extends('master') 
@section('main_content') @php 
@endphp




<!-- CONTENT --------------------------------------------------------------------------------->
<!-- Intro Section -->
<section class="inner-intro bg-image overlay-dark parallax parallax-background1" data-background-img="{{asset('images/model-3.jpg') }}">
  <div class="container">
    <div class="row title">
      <h2 class="h2">{{$product['ptitle']}}</h2>

    </div>
  </div>
</section>
<!-- End Intro Section -->

<div class="container">
  <!-- Sort List -->
  <div class="row mt-5 mb-5 text-center">
    <div class="col-md-6 shop-filter">
      <p class="mb-2"><strong>Go to:</strong> </p>
      <a href={{ url( 'shop/all-products') }}>
                <button class="btn btn-md btn-black-line">All products</button>
              </a>
      <a href={{ url( 'shop') }}>
                <button class="btn btn-md btn-black-line">Categories page</button>
              </a>
    </div>

    <div class="col-md-6 shop-filter">
      <p class="mb-2"><strong>Shop by Category:</strong> </p>
      @foreach ($categories as $category)
      <a href={{ url( 'shop/' . $category[ 'curl']) }}>
          <button class="btn btn-md btn-black-line">{{$category['ctitle'] }}</button>
        </a> @endforeach
    </div>
  </div>
</div>
<hr>

<!-- Shop Item Detail Section -->
<section id="shop-item" class="ptb ptb-sm-80">
  <div class="container">
    <div class="row ">
      <!-- Shop Item -->
      <div class="col-md-6 mb-sm-60">
        <div class="owl-carousel image-slider o-flow-hidden">

          <div class="item">
            <img src="{{asset('images/' . $product['pimage'])}}" alt="" />
          </div>
          <div class="item">
            <img src="{{asset('images/' . $product['pimage2'])}}" alt="" />
          </div>


        </div>

      </div>
      <!-- End Shop Item -->

      <!-- Shop info -->
      <div class="col-md-6 text-center">
        <div class="shop-detail-info">
          <h4>{{$product['ptitle']}}</h4>
          <div class="shop-item-price mtb-15 ptb-15"><span>${{$product['price']}}</span></div>
          <hr />
          <p class="ptb-15">{!! $product['particle'] !!}</p>

          @if(! Cart::get($product['id']))
          <a data-id="{{ $product['id'] }}" class="btn btn-lg btn-black form-full add-to-cart-btn  text-white"><i class="fa fa-shopping-bag left"></i>Add To Bag</a>          @else
          <a href="{{url('shop/checkout')}}" class="btn btn-lg btn-black form-full text-white"><i class="fa fa-shopping-bag left"></i>Check out</a>          @endif

          <!-- Tab -->
          <div class="tabs mt-15">
            <ul>
              <li><a href="#tabs-1">Size</a></li>
              <li><a href="#tabs-2">Color</a></li>
            </ul>

            <div class="ui-tab-content">
              <!-- Description -->
              <div id="tabs-1">
                <p>please choose your size.</p>
                @if($product['size'])
                <select id="usersize" class="custom-select">
@php
    $tempSize = explode(' ', $product['size']);



















































@endphp
                    @foreach($tempSize as $size) 
          <option value={{$size}}>{{$size}}</option>
          @endforeach
                </select> @else
                <select id="usersize" class="custom-select">
          <option value="s">Small</option>
          <option value="m">Medieum</option>
          <option value="l">Large</option>
          <option value="xl">XLarge</option>
                </select> @endif
              </div>
              <div id="tabs-2">
                @if($product['color'])
                <p>Please choose your color</p>
                <select id="usercolor" class="custom-select">
    @php
        $tempColor = explode(' ', $product['color']);



































































@endphp
                        @foreach($tempColor as $color) 
              <option value={{$color}}>{{$color}}</option>
              @endforeach
                    </select> @else
                <div id="tabs-2">
                  <p>Please choose your color</p>
                  <select id="usercolor" class="custom-select">
                      <option value="As image">As image</option>
                    </select>@endif
                </div>
              </div>

            </div>
          </div>
          <!-- End Tab -->

        </div>
      </div>
      <!-- End Shop info -->
    </div>
  </div>
</section>
<!-- End Shop Item Section -->

<!-- END CONTENT ---------------------------------------------------------------------------->
@endsection