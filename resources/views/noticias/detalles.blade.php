<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if ($noticia != NULL){{ $noticia->titulo }}@else NO se encontro noticia @endif</title>

    <link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<link rel="stylesheet" href="/css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>


<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
			
				
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="index.html">El Chismosito <sup>pa ti</sup></a></h1>
				</div>

			</div>
		
		</div>

	</header>
    @if($noticia != NULL)
    <div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
            @if($noticia->foto != NULL)
				<figure class="animate-box">
					<img src="{{$noticia->foto}}" alt="Image" class="img-responsive">
				</figure>
                @endif
				<span class="fh5co-meta animate-box"><a href="single.html">{{$noticia->fecha}}</a></span>
				<h2 class="fh5co-article-title animate-box"><a href="single.html">{{$noticia->titulo}}</a></h2>
				<span class="fh5co-meta fh5co-date animate-box">{{$noticia->autor}}</span>
				
				<div class="col-lg-12  col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center content-article">
					<div class="row">
						<div class="col-lg-12cp-r animate-box">
                        <p>{{$noticia->cuerpo}}</p>
						</div>
						
				

					
					
					
				</div>
			</article>
		</div>
	</div>
    @else
        <h1> lo sentimos noticia no encontrada </h1>
    @endif


    <a href="{{route("noticias")}}">Volver a noticias</a>

       
 

    	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>
</html>