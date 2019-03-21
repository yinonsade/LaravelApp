<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>e22 admin panel</title>
  @include('inc.css_header')
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
</head>

<body>
  <div class="wraper crm_bg_img">
    {{-- top navbar --}}
    <div class="container-fluid">
      <div class="row bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark   m-auto">
          <a class="navbar-brand  mr-0 text-center" href="{{ url('cms/dashboard') }}"><button class="btn3d btn btn-default btn-lg">Admin Panel</button></a>

          <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-5">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/dashboard') }}"><button class="btn btn-primary btn-lg btn3d">Dashboard</button> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/menu') }}"> <button class="btn btn-primary btn-lg btn3d">Menu</button> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/content') }}"><button class="btn btn-primary btn-lg btn3d">Content</button> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/categories') }}"><button class="btn btn-primary btn-lg btn3d">Categories</button> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/products') }}"><button class="btn btn-primary btn-lg btn3d">Products</button> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/orders') }}"><button class="btn btn-primary btn-lg btn3d">Orders</button></a>
              </li>
              <li class="nav-item">
                <a _blank class="nav-link text-white" href="{{ url('') }}"><button class="btn btn-success btn-sm btn3d">Back to site</button></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white" href="{{ url('user/logout') }}"><button class="btn btn-danger btn-sm btn3d">Log-out</button></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>




    <main role="main" class="col-12 px-4 crm_bg">
      @yield('main_cms_content')
      <div class="row">
        <div class=" col-sm-12 col-md-8 border-top">
  @include('inc.error_messages')
        </div>
      </div>
    </main>
  </div>
  @include('inc.js_footer_cms')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>



  <script>
    $('#article').summernote({ 
      height: 200 });
  </script>
  <div class="fixed-bottom bg-light text-dark text-center ">
    created by <b>YINON-SADE</b> {{date('Y')}} © <a></a>

  </div>

</body>

</html>