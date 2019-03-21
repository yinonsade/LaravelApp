<div class="container">
  <div class="row">
    <div class="col-12">


      <h1> hey you have new order! </h1>

      order info:
      <ul>
        <li>user name: {{$bodyMessage->name}}</li>
        <li>of total: {{$bodyMessage->total}}</li>
        <h2>please check your cms in e218 for more info</h2>

        <img style="width:200px, hight:300px;" src="{{asset('images/e22_logo_w.jpg')}}">
        <a href="www.e218.com">
          <h3>go to site</h3>
        </a>
    </div>
  </div>
</div>