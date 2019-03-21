@extends('cms.cms_master') 
@section('main_cms_content')
<div class="row">
  <div class="col-12 mt-5">
    <h1 class="h2">Edit site Content</h1>
    <a href="{{ url('cms/content/create') }}"><button class="mt-3 mb-3 btn btn-primary btn-lg btn3d text-white"> <i class="fas fa-plus-circle">Add Content</i></button></a>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <table class="table table-bordered table-dark table-responsive-md text-center mt-5 mb-5">
      <thead>
        <tr>
          <th class="mr-5">Title</th>
          <th>Last Update</th>

          <th>Operation</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($content as $item)
        <tr></tr>
        <td>{{ $item['title'] }}</td>
        <td> {{ date('d/m/Y'), strtotime($item['updated_at']) }}</td>
        <td>
          <a class="mr-2 ml-3 text-white" href="{{url('cms/content/' . $item['id'] . '/edit')}}"><i class="fas fa-pencil-alt"></i> Edit</a>          |
          <a class="ml-2 text-white" href="{{ url('cms/content/' . $item['id']) }}"><i class="fas fa-trash-alt "></i> Delete</a>
        </td> @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection