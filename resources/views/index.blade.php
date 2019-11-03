
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | {{env('APP_NAME')}}</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">
  <!-- Css -->
  <!-- script css for tin-tuc -->
  <link rel="stylesheet" href="{{ asset('SHOPXUATDU/css/tin-tuc.css') }}">
  <!-- end script css for tin-tuc -->
  <link rel="stylesheet" href="{{ asset('SHOPXUATDU/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('SHOPXUATDU/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('SHOPXUATDU/css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('SHOPXUATDU/css/color.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <!-- jQuery -->
  
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/jquery.min.js') }}"></script>

  <script> 
    // $(function(){
    //   $("#includedMobileSidenav").load("mobile-sidenav.html");
    //   $("#includedHeader").load("header.html");
    // });
    </script>
</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>
  
  <!-- Mobile Sidenav -->    
  @include('layouts.header')


<!--   <link rel="import" href="header.html"> -->

  <main class="main oh" id="main">

        <!-- Navigation -->
    @include('layouts.header-main')

    @yield('content')
    <!-- Hero Slider -->
    


    <!-- Footer -->
    @include('layouts.footer')

    <!-- Shopping bag -->
    <a href="cart.html">
      <div class="shopping-bag">
        <button type="button" class="btn btn-danger btn-circle btn-lg" id="product_count">10</button>
        <img src="{{ url('img/bag.svg') }}">
      </div>
    </a>
 
    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/easing.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/jquery.magnific-popup.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/owl-carousel.min.js') }}"></script>  
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/flickity.pkgd.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/modernizr.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('SHOPXUATDU/js/scripts.js') }}"></script>
  <!-- script hover tintuc -->
  <script src="{{ asset('SHOPXUATDU/js/tintuc.js') }}"></script>   
  @yield('scripts')
  <!-- script hover tintuc -->  
  

</body>
</html>