@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Category Form</h1>
    <a href="{{ url('cms/categories/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/categories/' . $item['id'] )}}" enctype="multipart/form-data" method="POST" autocomplete="off"
      novalidate="novalidate">
      <input type="hidden" name="item_id" value="{{ $item['id'] }}"> @csrf {{ method_field('PUT') }}
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ $item['ctitle'] }}" class="form-control origin-text" type="text" name="title" id="title">
      </div>

      <div class="form-group">
        <label for="url"> <span class="text-danger">*</span> Url</label>
        <input value="{{ @item['curl'] }}" class="form-control target-text" type="text" name="url" id="url">
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{ $item['carticale'] }}</textarea>
      </div>
      <label for="image">Change Category Image</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input name="image" type="file" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>

      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Update">
    </form>
  </div>
</div>
@endsection