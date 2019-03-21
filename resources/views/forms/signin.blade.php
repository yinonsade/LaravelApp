@extends('master') 
@section('main_content')

<!-- Intro Section -->
<section class="inner-intro bg-image overlay-light parallax parallax-background1" data-background-img="{{asset('images/about.jpg')}}">
    <div class="container">
        <div class="row title">
            <h2 class="h2">Sign in</h2>

        </div>
    </div>
</section>
<!-- End Intro Section -->
<!--Login Section -->
<section id="login-register" class="mt-5 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                <div class="border-box">
                    <h4>Signin to your account</h4>
                    <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                        @csrf
                        <div class="form-field-wrapper">
                            <label for="email">Email address</label>
                            <input value="{{ old('email') }}" type="email" placeholder="Enter your Email" name="email" id="email" class="input-sm form-full">
                        </div>
                        <div class="form-field-wrapper">
                            <label for="password">Choose Password</label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" class="input-sm form-full">
                        </div>

                        <button name="submit" type="submit" class="btn btn-md btn-black">Signin Now</button>
                        <a class="ml-5" href="{{url('user/signup')}}">not registered yet? click here</a> @if(!empty($auth_error))
                        <span class="text-danger">{{ $auth_error }}</span>@endif
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Login Section -->
@endsection