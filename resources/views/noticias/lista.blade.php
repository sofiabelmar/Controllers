<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | El Chismosito</title>

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

    <script src="/js/modernizr-2.6.2.min.js"></script>


</head>
<body style="background-image: url('/images/nes.jpg');   ">



    <header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
			
				
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="index.html">El Chismosito <sup>pa ti</sup></a></h1>
				</div>

			</div>
		
		</div>

	</header>
    
    <div class="container-fluid">
    
		<div class="row fh5co-post-entry">
        @foreach($noticias as $noticia)
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                    <a href="{{route("noticias.detalles",$noticia->id)}}"><img src="{{$noticia->foto}}" alt="Image" class="img-responsive img-rounded"></a>
				</figure>
                <b><a href="{{route("noticias.detalles",$noticia->id)}}">{{ $noticia->autor }}</a></b>
				<h2><a href="{{route("noticias.detalles",$noticia->id)}}">{{ $noticia->titulo }}</a></h2>
				
				<span class="fh5co-meta fh5co-date">{{$noticia->fecha}}</span>
			</article>
            @endforeach
			
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
			

			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>

			<div class="clearfix visible-xs-block"></div>
            
		</div>
        
	</div>



   

    <script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="/js/main.js"></script>
</body>
</html>