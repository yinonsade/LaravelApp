@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Menu Form</h1>
    <a href="{{ url('cms/menu/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/menu/' . $item['id'] )}}" method="POST" autocomplete="off" novalidate="novalidate">
      <input type="hidden" name="item_id" value="{{ $item['id'] }}"> @csrf {{ method_field('PUT') }}
      <div class="form-group">
        <label for="link"> <span class="text-danger">*</span> Link</label>
        <input value="{{ $item['link'] }}" class="form-control origin-text" type="text" name="link" id="link">
      </div>
      <div class="form-group">
        <label for="url"> <span class="text-danger">*</span> Url</label>
        <input value="{{ $item['url'] }}" class="form-control target-text" type="text" name="url" id="url">
      </div>
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ $item['title'] }}" class="form-control" type="text" name="title" id="title">
      </div>
      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Update">
    </form>
  </div>
</div>
@endsection