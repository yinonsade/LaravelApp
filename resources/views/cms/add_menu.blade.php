@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Add Menu Form</h1>
    <a href="{{ url('cms/menu/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/menu')}}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <div class="form-group">
        <label for="link"> <span class="text-danger">*</span> Link</label>
        <input value="{{ old('link') }}" class="form-control origin-text" type="text" name="link" id="link">
      </div>
      <div class="form-group">
        <label for="url"> <span class="text-danger">*</span> Url</label>
        <input value="{{ old('url') }}" class="form-control target-text" type="text" name="url" id="url">
      </div>
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ old('title') }}" class="form-control" type="text" name="title" id="title">
      </div>
      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Save">
    </form>
  </div>
</div>
@endsection