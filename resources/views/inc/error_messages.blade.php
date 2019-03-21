@if ($errors_top && $errors->any())

<div class="container">
  <div class="row">
    <div class="col-6 m-auto">

      <div class="alert alert-danger text-center">
        <h6>Hey, you have some errors:</h6>


        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endif