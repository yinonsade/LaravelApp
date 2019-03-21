@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Add Content Form</h1>
    <a href="{{ url('cms/content/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/content')}}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <div class="form-group mt-2">
        <label for="menu-id"><span class="text-danger">*</span> Menu Link </label>
        <select class="form-control" name="menu_id" id="menu-id">
          <option value="">Choose menu link...</option>
          @foreach ($menu as $item)
        <option @if( old('menu_id') == $item['id'] ) selected="selected"      
        @endif value="{{ $item['id'] }}"> {{ $item['link'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ old('title') }}" class="form-control" type="text" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
      </div>
      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Save">
    </form>
  </div>
</div>
@endsection