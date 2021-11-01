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

    <title>Gadget Owala Login</title>

    <!-- vendor css -->
    <link href="{{asset('backend/assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/starlight.css')}}">
</head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Gadget <span class="tx-info tx-normal">Owala</span></div>
        <div class="tx-center mg-b-60">New Member Registration</div>

        <form method="POST" action="{{ route('new.User.register') }}">
            @csrf

        <div class="form-group">
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter your Name">
        </div><!-- form-group -->

        <div class="form-group">
          <input type="email" id="email"  name="email"  class="form-control" placeholder="Enter your Email" :value="old('email')" required>
        </div><!-- form-group -->

        <div class="form-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter your Password"  required autocomplete="new-password" >
        </div><!-- form-group -->

        <div class="form-group">
          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder=" ReEnter your Password"  required autocomplete="new-password">
        </div><!-- form-group -->
        
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>

        <div class="mg-t-40 tx-center">Already have an account? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend/assets/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/assets/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/assets/lib/bootstrap/bootstrap.js')}}"></script>

    

  </body>
</html>
