<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
  .invoice-title h2,
  .invoice-title h3 {
    display: inline-block;
  }

  .table>tbody>tr>.no-line {
    border-top: none;
  }

  .table>thead>tr>.no-line {
    border-bottom: none;
  }

  .table>tbody>tr>.thick-line {
    border-top: 2px solid;
  }
</style>

<!------ Include the above in your HEAD tag ---------->
@php $date = date('Y/m/d H:i:s'); 
@endphp
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="invoice-title">
        <h2>E218</h2><br>
        <h2>Invoice| {{$date}} </h2>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-6">
          <address>
    				<strong>Billed To:</strong><br>
          {{$bodyMessage->aname}}<br>
          {{$bodyMessage->aline1}}<br>
          {{$bodyMessage->aline2}}<br>
    {{$bodyMessage->acity}}, {{$bodyMessage->aregion}},<br>
     {{$bodyMessage->apostalcode}} , {{$bodyMessage->acountry}}
    				</address>
        </div>
        <div class="col-xs-6 text-right">
          <address>
                <strong>Shipped To:</strong><br>
              {{$bodyMessage->aname}}<br>
              {{$bodyMessage->aline1}}<br>
              {{$bodyMessage->aline2}}<br>
        {{$bodyMessage->acity}}, {{$bodyMessage->aregion}},<br>
         {{$bodyMessage->apostalcode}} , {{$bodyMessage->acountry}}
                </address>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <address>
    					<strong>Payment Method:</strong><br>
Paypal...
{{$bodyMessage->email}}    				</address>
        </div>
        <div class="col-xs-6 text-right">
          <address>
    					<strong>Order Date:</strong><br>
          {{$bodyMessage->created_at}}<br><br>
    				</address>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Order summary</strong></h3>
        </div>
        <div class="panel-body">
          <!-- foreach ($order->lineItems as $line) or some such thing here -->
          @foreach (unserialize($bodyMessage->data) as $item)
          <h3>Item:</h3>
          <hr>
          <li>{{ $item['name'] }}</li>
          <li>Size:{{ $item['attributes']['size']}}</li>
          <li>Color:{{ $item['attributes']['color']}}</li>
          <li>Price item: ${{ $item['price']}}</li>
          <li> Quantity: {{ $item['quantity'] }}</li>
          <hr> @endforeach
          <h3>Total payout</h3>
          <p>{{$bodyMessage->total}} $</p>



        </div>
      </div>
    </div>
  </div>
</div>

<div container text-center>
  <hr>
  <p>Thank you for shooping with us (c)E2.1.8 www.e218.com</p>
  <hr>
</div>