@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h3 class="h3">Are You sure that you want to delete this item?</h3>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8 text-center">
    <form action="{{ url('cms/menu/' . $item_id) }}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf {{ method_field('DELETE') }}
      <input class="mt-3 mb-3 btn btn-danger btn-lg btn3d" name="submit" type="submit" value="Delete">
      <a class="mt-3 mb-3 btn btn-success btn-lg btn3d" href="{{ url('cms/menu') }}"> Cancel</a>

    </form>
  </div>
</div>
@endsection