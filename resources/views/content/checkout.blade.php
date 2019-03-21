@extends('master') 
@section('main_content')



<?php $counterA = 1 ?>
<?php $counterB = 1 ?>
<!-- CONTENT --------------------------------------------------------------------------------->
<!-- Intro Section -->
<section class="inner-intro bg-image overlay-dark parallax parallax-background1" data-background-img="{{asset('images/model-3.jpg') }}">
  <div class="container">
    <div class="row title">
      <h2 class="h2">Check Out</h2>

    </div>
  </div>
</section>
<!-- End Intro Section -->
@if($cart)
<!-- Checkout Section -->
<section class="ptb ptb-sm-80">
  <div class="container-fluid">
    <div class="row">
      <div class=" col-sm-12 d-none d-lg-block">
        <table class="table checkout table-border">
          <tr class="gray-bg">
            <th class="hidden-xs">No.</th>
            <th></th>
            <th>Product</th>
            <th class="hidden-xs">Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Color</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
          @foreach ($cart as $item)
          <p></p>

          <tr>
            <td class="hidden-xs">
              {{ $counterB++ }}
            </td>
            <td><img class="cart_img grow" src="{{asset( 'images/' . $item['attributes']['image']) }}" alt=""></td>
            <td>
              <p><a href="">{{ $item['name'] }}</a></p>
            </td>
            <td class="hidden-xs">{{ $item['price'] }} $</td>
            <td class="text-center">
              <a class="update-cart" href="{{url('shop/update-cart?pid=' .$item['id'] . '&op=minus')}}"> <i class="fas fa-minus-circle"></i></a>
              <input size="1" class="text-center" type="text" id="item-quantity" value="{{$item[ 'quantity']}}">
              <a class="update-cart" href="{{url('shop/update-cart?pid=' .$item['id'] . '&op=plus')}}"><i class="fas fa-plus-circle "></i></a>

            </td>
            <td>{{$item['attributes']['size']}}</td>
            <td>{{$item['attributes']['color']}}</td>
            <td>{{ $item['quantity'] * $item['price'] }} $</td>
            <td><a href="{{ url( 'shop/remove-item?pid=' . $item[ 'id'] ) }} "><i class="fa fa-times-circle "></i></a></td>
          </tr>
          @endforeach



        </table>
      </div>

      <div class=" col-sm-12 d-md-none ">
        <table class="table checkout table-border table-responsive">
          <tr class="gray-bg">
            <th class="hidden-xs">No.</th>
            <th>Image</th>
            <th>Product</th>
            <th class="hidden-xs">Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Color</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
          @foreach ($cart as $item)
          <tr>
            <td class="hidden-xs">
              {{ $counterA++ }}
            </td>
            <td><a target="_blank" href="{{asset( 'images/' . $item['attributes']['image']) }}">watch item image</a></td>
            <td>
              <h6><a href="#">{{ $item['name'] }}</a></h6>

            </td>
            <td class="hidden-xs">{{ $item['price'] }} $</td>
            <td class="text-center">
              <a class="update-cart" href="{{url('shop/update-cart?pid=' .$item['id'] . '&op=minus')}}"> <i class="fas fa-minus-circle"></i></a>
              <input size="1" class="text-center" type="text" id="item-quantity" value="{{$item[ 'quantity']}}">
              <a class="update-cart" href="{{url('shop/update-cart?pid=' .$item['id'] . '&op=plus')}}"><i class="fas fa-plus-circle "></i></a>

            </td>
            <td>size</td>
            <td>color</td>
            <td>{{ $item['quantity'] * $item['price'] }} $</td>
            <td><a href="{{ url( 'shop/remove-item?pid=' . $item[ 'id'] ) }} "><i class="fa fa-times-circle "></i></a></td>
          </tr>
          @endforeach



        </table>
      </div>


    </div>
    <div class="row ptb-30 ">
      <div class="col-md-8 ">

      </div>
      <div class="col-md-4 ">

        <a href="{{ url( 'shop/clear-cart')}} "><button class="btn btn-md btn-black float-right float-none-sm ">Clear Bag</button></a>

      </div>
    </div>
    <hr />
    <div class="row ptb-60 ">

      <div class="col-md-4 offset-md-4 ">
        <div class="shop-Cart-totalbox ">
          <h4>Cart Totals</h4>
          <table class="table table-border ">

            <tr class="shop-Cart-totalprice ">
              <th>Total :</th>
              <td>{{ Cart::getTotal()}} $</td>
            </tr>
          </table>
          <a href="{{ url( 'shop/payment') }} "><button class="btn btn-lg btn-color-b form-full ">Order Now<i class="fa fa-chevron-right
                right "></i></button></a>
        </div>
      </div>
    </div>
  </div>
</section>
@else
<h2 class="h2 text-center ">No itmes in the Bag...</h2>
<a href="{{ url( 'shop') }} "><button class="btn btn-lg btn-color-b form-full ">back to shop</button></a> @endif
<!-- End Checkout Section -->

<!-- END CONTENT ---------------------------------------------------------------------------->
@endsection