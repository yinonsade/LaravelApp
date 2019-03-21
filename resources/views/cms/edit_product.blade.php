@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Product Form</h1>
    <a href="{{ url('cms/products/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/products/' . $item['id'] )}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
      <input type="hidden" name="item_id" value="{{ $item['id'] }}"> @csrf {{ method_field('PUT') }}
      <div class="form-group mt-2">
        <label for="categories-id"><span class="text-danger">*</span> Category </label>
        <select class="form-control" name="categorie_id" id="categorie-id">
            @foreach ($categories as $row)
          <option @if( $item['categorie_id'] == $row['id'] ) selected="selected"      
          @endif value="{{ $row['id'] }}"> {{ $row['ctitle'] }}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ $item['ptitle'] }}" class="form-control origin-text" type="text" name="title" id="title">
      </div>

      <div class="form-group">
        <label for="url"> <span class="text-danger">*</span> Url</label>
        <input value="{{ $item['purl'] }}" class="form-control target-text" type="text" name="url" id="url">
      </div>
      <div class="form-group">
        <label for="price"> <span class="text-danger">*</span> Price</label>
        <input value="{{ $item['price'] }}" class="form-control" type="text" name="price" id="price">
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{ $item['particle'] }}</textarea>
      </div>

      <div class="form-group">
        <label for="size"><span class="text-danger">*</span>Sizes</label>
        <input value="{{ $item['size'] }}" class="form-control" type="text" name="size" id="size">
      </div>

      <div class="form-group">
        <label for="size"><span class="text-danger">*</span>Colors</label>
        <input value="{{ $item['color'] }}" class="form-control" type="text" name="color" id="color">
      </div>

      <label for="image">Change Product Image</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input name="image" type="file" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      <label for="image">Product seconed Image</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input name="image2" type="file" class="custom-file-input" id="image2" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Upload">
    </form>
  </div>
</div>
@endsection