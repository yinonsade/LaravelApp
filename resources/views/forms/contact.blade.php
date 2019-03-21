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


<!-- Contact Section -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3>Keep In Touch</h3>
                <p class="lead">E2.1.8</p>
            </div>
        </div>
        <div class="spacer-75"></div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- Contact FORM -->
                <form action="{{ url('contact') }}" method="POST" class="contact-form" id="contact" role="form">
                    {{ @csrf_field() }}
                    <!-- IF MAIL SENT SUCCESSFULLY -->
                    <h6 class="successContent">
                        <i class="fa fa-check left" style="color: #5cb45d;"></i>Your message has been sent successfully.
                    </h6>
                    <!-- END IF MAIL SENT SUCCESSFULLY -->

                    <!-- MAIL SENDING UNSUCCESSFULL -->
                    <h6 class="errorContent">
                        <i class="fa fa-exclamation-circle left" style="color: #e1534f;"></i>There was a problem validating
                        the form please check!
                    </h6>
                    <!-- END MAIL SENDING UNSUCCESSFULL -->

                    <div class="form-field-wrapper">
                        <input class="input-sm form-full" id="form-name" type="text" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="form-field-wrapper">
                        <input class="input-sm form-full" id="form-email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-field-wrapper">
                        <input class="input-sm form-full" id="form-subject" type="text" name="subject" placeholder="Subject">
                    </div>

                    <div class="form-field-wrapper">
                        <textarea class="form-full" id="form-message" rows="7" name="message" placeholder="Your Message" required></textarea>
                    </div>

                    <button class="btn btn-md btn-black form-full" type="submit" id="form-submit" name="submit">Send Message</button>
                </form>
                <!-- END Contact FORM -->
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
@endsection