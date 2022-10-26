<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{asset('ui/frontend/images/fevicon.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>RUN TIME TERROR</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{asset('ui/frontend/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('ui/frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('ui/frontend/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

<!-- Header Start-->

<x-frontend.partials.header/>

<!-- Header Endd -->




  <!-- Content Start-->

  {{ $slot }}

  <!-- Content End -->




<!-- Footer Start-->

<x-frontend.partials.footer/>

<!-- Footer End-->

  <!-- jQery -->
  <script src="{{asset('ui/frontend/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('ui/frontend/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('ui/frontend/js/custom.js')}}"></script>
  @stack('script')

</body>

</html>
