<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Gadget Owala</title>

    <!-- vendor css -->
    <link href="{{asset('backend/assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/starlight.css')}}">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Gadget Owala</a></div>
   
    @include('admin.body.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.body.header')
    <!-- ########## END: HEAD PANEL ########## -->

    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Gadget Owala</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

          @yield('content')

        </div><!-- sl-pagebody -->

      
       
    </div><!-- sl-mainpanel -->

    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('backend/assets/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/assets/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/assets/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('backend/assets/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('backend/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('backend/assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/assets/lib/d3/d3.js')}}"></script>
    <script src="{{asset('backend/assets/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backend/assets/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('backend/assets/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/assets/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/assets/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/assets/lib/flot-spline/jquery.flot.spline.js')}}"></script>

    <script src="{{asset('backend/assets/js/starlight.js')}}"></script>
    <script src="{{asset('backend/assets/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>

    
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
