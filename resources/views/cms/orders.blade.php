@extends('cms.cms_master') 
@section('main_cms_content')

<?php  $counterA = 1 ?>
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">View site orders</h1>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <table class="table table-bordered table-dark table-responsive-md text-center mt-5 mb-5">
      <thead>
        <tr>
          <th>Number</th>
          <th class="mr-5">User </th>
          <th>Total</th>
          <th>Details</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $item)

        <tr></tr>
        <td>{{$counterA}}</td>
        <td>name: {{ $item->name }}<br><br>
          <p><strong>email: </strong>{{$item->email}}</p>
          <p><strong>address: </strong></p>
          <p>name : {{$item->aname}} |<br> line 1: {{$item->aline1}} |<br> line 2: {{$item->aline2}}|<br> city: {{$item->acity}}
            | regioun: {{$item->aregion}} |<br> zip code: {{$item->apostalcode}} | country: {{$item->acountry}}</p>
          <p><strong> phone: </strong>{{$item->phone}}</p>
        </td>
        <td>{{ $item->total }}</td>
        <td>
          <ul>
            @foreach (unserialize($item->data) as $order )
            <img class="w-25 p-3" src="{{asset( 'images/' . $order['attributes']['image']) }}" alt="">
            <li>{{ $order['name'] }}</li>
            <li>Size:{{ $order['attributes']['size']}}</li>
            <li>Color:{{ $order['attributes']['color']}}</li>
            <li>Price item: ${{ $order['price']}}</li>
            <li> Quantity: {{ $order['quantity'] }}</li> @endforeach
          </ul>
        </td>
        <td> {{ date('d/m/Y'), strtotime($item->created_at) }}</td>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection