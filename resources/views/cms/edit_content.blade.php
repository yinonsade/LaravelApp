@extends('cms.cms_master') 
@section('main_cms_content')

<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit Content Form</h1>
    <a href="{{ url('cms/content/') }}"> <button class="mt-3 mb-3 btn btn-primary btn-lg btn3d"> <i class="fas fa-arrow-circle-left"></i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <form action="{{ url('cms/content/' . $item['id'] )}}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf {{ method_field('PUT') }}
      <div class="form-group mt-2">
        <label for="menu-id"><span class="text-danger">*</span> Menu Link </label>
        <select class="form-control" name="menu_id" id="menu-id">
          @foreach ($menu as $row)
        <option @if( $item['menu_id'] == $row['id'] ) selected="selected"      
        @endif value="{{ $row['id'] }}"> {{ $row['link'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="title"> <span class="text-danger">*</span> Title</label>
        <input value="{{ $item['title'] }}" class="form-control" type="text" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{ $item['article'] }}</textarea>
      </div>
      <input type="submit" class="btn btn-success btn-lg btn3d btn-block" type="submit" value="Update">
    </form>
  </div>
</div>
@endsection