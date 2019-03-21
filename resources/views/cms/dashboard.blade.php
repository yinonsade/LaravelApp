@extends('cms.cms_master') 
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 m-auto">Dashboard</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 text-center"></div>
    <h2>welcome to Admin Panel</h2>
    <h3>chose a category from menu to start edit your site</h3>
  </div>
</div>

<hr>
<div class="col-12">
  <h2>Site Preview:</h2>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{ url('') }}"></iframe>
  </div>
</div>


</div>
@endsection