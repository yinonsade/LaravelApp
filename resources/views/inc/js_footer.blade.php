<script src="{{asset('lib/mazel/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.fitvids.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.viewportchecker.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.stellar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.colorbox-min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/isotope.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/masonry.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.fs.tipper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('lib/mazel/js/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/mazel/js/plugin/jquery.flexslider.js')}}" type="text/javascript"></script>ֿ
<script src="{{asset('lib/mazel/js/plugin/smoothproducts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!--Main App Js File -->
<script src="{{asset('js/app.js') }}"></script>







</body>


@if(Session::has('toastrpos'))
<script>
  @if(Session::has('toastrpos'))
toastr.options.positionClass = "{{ Session::get('toastrpos') }}";

@else
toastr.options.positionClass = "toast-bottom-center";
@endif
toastr.success("{{ Session::get('sm')}}");

</script>
@endif