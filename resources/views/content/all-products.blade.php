@extends('master') 
@section('main_content')


<!-- Shop Item -->


<section class="inner-intro bg-image overlay-dark parallax parallax-background1 " data-background-img="{{asset('images/model-2.jpg') }}">

  <div class="container">
    <div class="row title">
      <h2 class="h2">All products</h2>
    </div>
  </div>
</section>
<!-- End Intro Section -->
<a href="#" id="scroll" style="display: none;"><span></span></a>
<div class="container">
  <!-- Sort List -->
  <div class="row mt-5 mb-5 text-center">
    <div class="col-md-6 shop-filter">
      <p class="mb-2"><strong>Sort by Price:</strong> </p>
      <a href={{url( 'shop/all-products')}}>
            <button class="btn btn-sm btn-black-line mr-2">Random</button></a>
      <a href={{url( 'shop/all-products?ob=2')}}>
              <button class="btn btn-md btn-black-line mr-2">High->Low</button></a>
      <a href={{url( 'shop/all-products?ob=1')}}>
                <button class="btn btn-md btn-black-line">Low->High</button></a>
    </div>
    <div class="col-md-6 shop-filter">
      <p class="mb-2"><strong>Shop by Category:</strong> </p>
      @foreach ($categories as $category)
      <a href={{ url( 'shop/' . $category[ 'curl']) }}>
        <button class="btn btn-md btn-black-line mr-2">{{$category['ctitle'] }}</button>
      </a> @endforeach
    </div>
  </div>
</div>
<hr>
<!-- End Sort List -->



<section class="">
  <div class="container">
    <div class="row">
      <div class="owl-carousel item4-carousel nf-carousel-theme o-flow-hidden">
        @foreach ($allProducts as $product)

        <div class="item">
          <div class="nf-col-padding">
            <div class="item-box">
              <!-- Shop item images -->
              <div class="shop-item">
                <div class="item-img">
                  <img src="{{asset('images/' . $product->pimage) }}" />
                </div>
                <div class="item-mask">
                  <div class="item-mask-detail">
                    <div class="item-mask-detail-ele">
                      <a href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}" class="btn btn-line-xs btn-white-line"><i class="fa fa-shopping-bag"></i>More..</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Shop item images -->

              <!-- Shop item info -->
              <div class="shop-item-info">
                <a href="shop-detail.html">
                  <h6 class="shop-item-name">{{$product->ptitle }}</h6>
                </a>
                <div class="shop-item-price"><span>${{$product->price}}</span></div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- End Item4 Slider -->

<div class="row">
  @foreach ($allProducts as $product)
  <div class="col-md-4 mb-5 mt-3">
    <div class="item-box">
      <!-- Shop item images -->
      <div class="shop-item">
        <div class="item-img">
          <img src="{{asset('images/' . $product->pimage) }}" alt="{{$product->ptitle }} product image">
        </div>
        <div class="item-mask">
          <div class="item-mask-detail">
            <div class="item-mask-detail-ele">
              <a class="btn btn-line-xs btn-white-line text-white" href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}">More details</a>              @if(! Cart::get($product->id) )
              <a class="btn btn-line-xs btn-white-line text-white add-to-cart-btn" data-id="{{ $product->id }}"><i class="fa fa-shopping-bag"></i>Add To Bag</a>              @else
              <a href="{{url('shop/checkout')}}" class="btn btn-line-xs btn-white-line btn-white-line"><i class="fa fa-shopping-cart"></i>Check out</a>              @endif

            </div>
          </div>
        </div>
      </div>
      <!-- End Shop item images -->

      <!-- Shop item info -->
      <div class="shop-item-info">
        <h4 class="shop-item-name">{{$product->ptitle}}</h4>
        <h6 class="shop-item-name">{!! $product->particle !!}</h6>
        <div class="shop-item-price"><span>$ {{$product->price}}</span></div>
      </div>
    </div>
    <!-- Shop item info -->


  </div>
  @endforeach


</div>
</div>
@endsection