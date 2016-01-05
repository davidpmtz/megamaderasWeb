<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>MegaMaderas</title>

	<meta name="description" content="Insert Your Site Description" />

	<!-- Mobile Specifics -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>

	<!-- Mobile Internet Explorer ClearType Technology -->
	<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

	<!-- Bootstrap -->
	<link href="{{asset('_include/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Main Style -->
	<link href="{{asset('_include/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/principal.css')}}" rel="stylesheet">

	<!-- Supersized -->
	<link href="{{asset('_include/css/supersized.css')}}" rel="stylesheet">
	<link href="{{asset('_include/css/supersized.shutter.css')}}" rel="stylesheet">

	<!-- FancyBox -->
	<link href="{{asset('_include/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">

	<!-- Font Icons -->
	<link href="{{asset('_include/css/fonts.css')}}" rel="stylesheet">

	<!-- Shortcodes -->
	<link href="{{asset('_include/css/shortcodes.css')}}" rel="stylesheet">

	<!-- Responsive -->
	<link href="{{asset('_include/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link href="{{asset('_include/css/responsive.css')}}" rel="stylesheet">

	<!-- Supersized -->
	<link href="{{asset('_include/css/supersized.css')}}" rel="stylesheet">
	<link href="{{asset('_include/css/supersized.shutter.css')}}" rel="stylesheet">

	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

	<!-- Fav Icon -->
	<link rel="shortcut icon" href="#">

	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="144x144" href="#">
</head>
<body>
	<div class="ole">
	<section id="jSplash">
		<div id="circle"></div>
	</section>
	</div>
	<!-- End of Splash Screen -->
	<!-- Header -->
	<header>
	    <div class="sticky-nav">
	    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

	        <div id="logo">
	        	<a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
	        </div>

	        <nav id="menu">
	        	<ul id="menu-nav">
	            	<li class="current"><a id="inicio">Inicio</a></li>
	                <li><a id="productos">Nuestros Productos</a></li>
	                <li><a id="nosotros">Acerca de nosotros</a></li>
	                <li><a id="contacto">Contactanos</a></li>
	            </ul>
	        </nav>
				</div>
		</header>
<!-- End Header -->
					<!-- Homepage Slider -->
					<div id="home-slider">
					  <div class="overlay"></div>
					  <div class="slider-text">
					  </div>
						<div class="control-nav">
					    <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
					    <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
					    <ul id="slide-list"></ul>
					        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
					    </div>
					</div>
					<!-- End Homepage Slider -->

					<div id="work" class="page" style="display:none">

					  <!-- Our Work Section -->
					  	<div class="container">
					      	<!-- Title Page -->
					          <div class="row">
					              <div class="span12">
					                  <div class="title-page">
					                      <h2 class="title">Nuestros Productos</h2>
					                  </div>
					              </div>
					          </div>
					          <!-- End Title Page -->
					          <!-- Portfolio Projects -->
					          <div class="row">
					          	<div class="span3">
					              	<!-- Filter -->
					                  <nav id="options" class="work-nav">
					                      <ul id="filters" class="option-set" data-option-key="filter">
					                        <li class="type-work">CATEGORIAS DE PRODUCTO</li>
					                          <li><a href="#filter" data-option-value="*" class="selected">Todos Los Productos</a></li>
					                          <li><a href="#filter" data-option-value=".video">Cimbra</a></li>
					                          <li><a href="#filter" data-option-value=".photography">Herrajes</a></li>
					                          <li><a href="#filter" data-option-value=".design">Maderas</a></li>
					                      </ul>
					                  </nav>
					                  <!-- End Filter -->
					              </div>
					              <div class="span9">
					              	<div id="productosm" class="row">
					              	</div>
					              </div>
					          </div>
					          <!-- End Portfolio Projects -->
					      </div>
					  <!-- End Our Work Section -->

					</div>
					<div id="about" class="page-alternate" style="display:none">
					</div>
					<div id="contact" class="page" style="display:none">
					</div>
					<!-- Socialize -->
					<div id="social-area" class="page" style="padding:50px;">
						<div class="container">
					    	<div class="row">
					            <div class="span12">
					                <nav id="social">
					                    <ul>
					                        <li><a href="https://twitter.com/" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
					                        <li><a href="https://www.facebook.com/" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
					                        <li><a href="https://plus.google.com/" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
					                        <li><a href="http://www.linkedin.com/in/" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
					                    </ul>
					                </nav>
					            </div>
					        </div>
					    </div>
					</div>
					<!-- End Socialize -->

					<!-- Footer -->
					<footer>
						<p class="credits">&copy;2015 Mega-Maderas. <a class="credits2" title="Brushed | Responsive One Page Template">Es un desarrolo </a> de <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">J-MED Enterprise</a></p>
					</footer>
					<!-- End Footer -->

					<!-- Back To Top -->
					<a id="back-to-top" href="#">
						<i class="font-icon-arrow-simple-up"></i>
					</a>
@yield('content')

@yield('js')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = 'f71cd350e0a2909f8bbb417ef623274ef167b349';
  window.smartsupp||(function(d) {
  	var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  	s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  	c.type='text/javascript';c.charset='utf-8';c.async=true;
  	c.src='//www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
  })(document);
  </script>
<script> src='http://maps.googleapis.com/maps/api/js'></script>
<script src="_include/js/modernizr.js"></script>


<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
