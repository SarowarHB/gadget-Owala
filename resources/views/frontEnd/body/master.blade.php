<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/responsive.css')}}">

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        @include('frontEnd.body.header')

        <!-- Main Content -->

        @yield('content')

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div
                            class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                            <div class="newsletter_title_container">
                                <div class="newsletter_icon"><img src="{{asset('frontend/images/send.png')}}" alt="">
                                </div>
                                <div class="newsletter_title">Sign up for Newsletter</div>
                                <div class="newsletter_text">
                                    <p>...and receive %20 coupon for first shopping.</p>
                                </div>
                            </div>
                            <div class="newsletter_content clearfix">
                                <form action="#" class="newsletter_form">
                                    <input type="email" class="newsletter_input" required="required"
                                        placeholder="Enter your email address">
                                    <button class="newsletter_button">Subscribe</button>
                                </form>
                                <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        @include('frontEnd.body.footer')

    </div>

    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>


<script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
   </script>  

   <script>  
       $(document).on("click", "#delete", function(e){
           e.preventDefault();
           var link = $(this).attr("href");
              swal({
                title: "Are you Want to delete?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                     window.location.href = link;
                } else {
                  swal("Safe Data!");
                }
              });
          });
  </script>
</body>

</html>
