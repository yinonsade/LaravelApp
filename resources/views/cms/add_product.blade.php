@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Add Product Form</h1>
    <a href="{{ url('cms/products/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/products')}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <div class="form-group mt-2">
        <label for="categories-id"><span class="text-danger">*</span> Category </label>
        <select class="form-control" name="categorie_id" id="categorie-id">
            <option value="">Choose Category...</option>
            @foreach ($categories as $item)
          <option @if( old('categories_id') == $item['id'] ) selected="selected"      
          @endif value="{{ $item['id'] }}"> {{ $item['ctitle'] }}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ old('title') }}" class="form-control origin-text" type="text" name="title" id="title">
      </div>

      <div class="form-group">
        <label for="url"> <span class="text-danger">*</span> Url</label>
        <input value="{{ old('url') }}" class="form-control target-text" type="text" name="url" id="url">
      </div>
      <div class="form-group">
        <label for="price"> <span class="text-danger">*</span> Price</label>
        <input value="{{ old('price') }}" class="form-control" type="text" name="price" id="price">
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
      </div>

      <div class="form-group">
        <label for="size"><span class="text-danger">*</span>Sizes</label>
        <input value="{{ old('size') }}" class="form-control" type="text" name="size" id="size">

      </div>
      <div class="form-group">
        <label for="size"><span class="text-danger">*</span>Colors</label>
        <input value="{{ old('color') }}" class="form-control" type="text" name="color" id="color">
      </div>

      <label for="image">Product Main Image</label>
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
      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Save">
    </form>
  </div>
</div>
@endsection