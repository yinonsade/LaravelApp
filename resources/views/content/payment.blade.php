@extends('master') 
@section('main_content')



<!-- Intro Section -->
<section class="inner-intro bg-image overlay-light parallax parallax-background1" data-background-img="{{asset('images/about.jpg')}}">
  <div class="container">
    <div class="row title m-auto">
      <h2 class="h2">Payment and Shipping</h2>
    </div>
  </div>
</section>
<!-- End Intro Section -->
<div class="container-fluid mb-5">
  <div class="row text-center">
    <div class="col-md-4 Pricing-box highlight mt-3 ">
      <h2>Payment and terms</h2>
      <a class="btn btn-md btn-black mt-5" href="{{url('terms')}}" target="_blank">
        <p class="text-white">Read Terms and Condtions</p>
      </a><br>

      <button class="btn btn-md btn-black mt-5 mb-4" id="agree" onclick="agree()"><p class="text-white">i agree to terms and conditions</p> </button>


      <hr>
      <div class=" text-center mt-5">
        <div id="paypal-button"></div>
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script>
          function agree(){
            paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
              sandbox: 'Ae0SYamNvjwPhN4joUpdWSYpkySav5WAliw8hj883VZmPC4VgqbxBF_O1bRHyV-m2n3oBiHLXeJdnKj2',
              production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
              size: 'large',
              color: 'gold',
              shape: 'pill',
            },
        
            // Enable Pay Now checkout flow (optional)
            commit: true,
        
            // Set up a payment
            payment: function(data, actions) {
              return actions.payment.create({
                transactions: [{
                  amount: {
                    total: '{{$paymentTotal}}',
                    currency: 'USD'
                  }
                }]
              });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
              return actions.payment.execute().then(function() {
                // Show a confirmation message to the buyer
                window.alert('Thank you for your purchase!');
                window.location.replace("{{ url( 'shop/order') }}");
              });
            }
          }, '#paypal-button');
        };
        </script>
      </div>

    </div>
    <div class="col-md-8 mt-3">

      <div class="Pricing-box highlight">
        <h2>Total & Shiping</h2>

        @foreach ($getProfile as $info)

        <div class="spacing-box">

          <h3>Hey, {{$info->name}}</h3>
          <h4>Your shiping address is:</h4>
          <h5>{{ $info->aname }},{{ $info->aline1 }},{{ $info->aline2 }},{{ $info->acity}},<br>{{ $info->aregion }},{{ $info->apostalcode
            }},{{ $info->acountry }}</h5>
          <a class="btn btn-md btn-black" href="{{url('user/profile?rn=shop/payment')}}">
            <p class="text-white">Change your details</p>
          </a>

        </div>
        @endforeach
        <hr>
        <div class="price-title">
          <h4>Your items</h4>
        </div>
        <hr /> @foreach ($cart as $item)
        <div class="pricing-features spacing-grid">
          <h3>{{$item['price'] }} $ <strong>x</strong> {{ $item['quantity'] }}</h3>

          <div class="price-tenure text-dark">{{$item['name'] }}</div>
          @endforeach

        </div>
        <h4>TOTAL + FREE Shipping</h4>

        <h4>{{$paymentTotal}} $</h4>

        <hr />
        <div class="spacing-grid">
          <a href="{{url('shop/checkout')}}" class="btn btn-md">Back to cart</a>

        </div>
      </div>

    </div>
  </div>

</div>
@endsection