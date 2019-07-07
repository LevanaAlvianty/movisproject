<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Movis</title>

	<!-- Font Awesome Icons -->
	<link href="{{asset('landing-page/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	<link href="{{asset('landing-page/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

	<!-- Theme CSS - Includes Bootstrap -->
	<link href="{{asset('landing-page/css/creative.min.css')}}" rel="stylesheet">

	<!-- Carousel -->
	<link href="{{asset('landing-page/css/carousel.css')}}" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
 <!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="background" width=100% src="{{asset('landing-page/img/bg-masthead.jpg')}}" alt="First slide">
			
		</div>
		<div class="carousel-item">
			<img class="background" width=100% src="{{asset('landing-page/img/portfolio/thumbnails/1.jpg')}}" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="background" width=100% src="{{asset('landing-page/img/portfolio/thumbnails/2.jpg')}}" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- end Carousel -->

<div class="carousel-caption">
	<div class="row align-items-center justify-content-center text-center">
		<div class="col-lg-10 align-self-end">
			<h1 class="text-uppercase text-white font-weight-bold">Movis</h1>
			<hr class="divider my-4">
		</div>
		<div class="col-lg-8 align-self-baseline">
			<p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
			<a class="btn btn-outline-primary btn-lg js-scroll-trigger" href="{{route('pegawai.login')}}">LOGIN</a>
		</div>
	</div>							
</div>
 

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('landing-page/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('landing-page/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('landing-page/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('landing-page/js/creative.min.js')}}"></script>

</body>

</html>
