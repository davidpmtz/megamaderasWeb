<!-- =============================================== -->
<!-- =                                             = -->
<!-- =                JMED 						             = -->
<!-- =             Enterprise                      = -->
<!-- =          										               = -->
<!-- =============================================== -->


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Mega Maderas</title>
	<meta name="description" content="">
	<meta name="author" content=" Made by Keyners">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />


	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- PT Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- Crete Roung -->
	<link href='http://fonts.googleapis.com/css?family=Crete+Round&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="{{asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('css/base.css')}}">
	<link rel="stylesheet" href="{{asset('css/skeleton.css')}}">
	<link rel="stylesheet" href="{{asset('css/layout.css')}}">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
	<script type="text/javascript" src="{{asset('js/validate.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fancybox/jquery.fancybox-1.3.4.pack.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('js/fancybox/jquery.fancybox-1.3.4.css')}}" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
				$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});
	</script>

</head>
<body>


	<header>
		<nav>
			<div class='container'>
				<div class='five columns logo'>
					<a href='#'>Company Logo</a>
				</div>

				<div class='eleven columns'>
					<ul class='mainMenu'>
						<li><a href='index.html' title='Home'>Home</a></li>
						<li><a href='#' title='About us'>About us</a></li>
						<li><a href='#' title='Pricing'>Pricing</a></li>
						<li><a href='#' title='Blog'>Blog</a></li>
						<li><a href='#' title='Portfolio'>Portfolio</a></li>
						<li><a href='contact' title='Contact'>Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class='container'>
			<div class='slogan'>
				<div class='ten columns'>
					<h1>Big catchy title</h1>
					<h2>Bit smaller but still in need slogan</h2>
				</div>

				<div class='six columns'>
					<h4>Offer EXCLUSIVE</h4>
					<p>Nunc rhoncus, erat quis sagittis convallis, arcu tellus tempor felis, sed tempor ipsum lorem vitae dolor. Morbi blandit condimentum lectus, id porta est sagittis et. Integer eget tortor sit amet ante eleifend lacinia quis ut</p>
					<a href='#' class='button medium green'>See the price</a>
				</div>
			</div>
		</div>
	</header>


	<div class='clear'></div>
	<div class='clear'></div>


	<div class='container'>

		<div class='one-third column'>
			<img src="{{asset('images/misc/about_us.png')}}">
			<h3>About Us</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>


		<div class='one-third column'>
			<img src="{{asset('images/misc/team.png')}}">
			<h3>The Team</h3>
			<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur.</p>
		</div>



		<div class='one-third column'>
			<img src="{{asset('images/misc/goals.png')}}">
			<h3>Goals</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

	</div>


	<div class='clear'></div>

	<div class='container focus'>

		<h3>Packages</h3>

		<div class='eight columns'>
			<h4>WRITING</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>

		<div class='eight columns'>
			<h4>PRESENTATION</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>


		<div class='clear'></div>


		<div class='eight columns'>
			<h4>NEGOTIATING</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>

		<div class='eight columns'>
			<h4>GRAMMAR</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>

	</div>




	<footer>
		<div class='container'>

			<div class='eight columns'>
				<h5>Some stuff can go here</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>

			<div class='four columns social'>
				<h5>Social media</h5>
				<a href='#'><img src="images/social/dribbble.png"></a>
				<a href='#'><img src="{{asset('images/social/facebook.png')}}"></a>
				<a href='#'><img src="{{asset('images/social/twitter.png')}}"></a>
				<a href='#'><img src="{{asset('images/social/forrst.png')}}"></a>
			</div>

			<div class='four columns'>
				<h5>Get in touch</h5>
				<p>You can call us at:<br>
					t: 161 - 123 - CALL - NOW</p>
				<p>Or drop us a line on:
					e: <a href='mailto:contact@free.com'>contact@free.com</a></p>
			</div>


		<a id='top' href='#'>&uarr;</a>
		</div>
	</footer>
	<script type="text/javascript">
		var form = $('form');

		$(document).ready(function(){
		    form.validate({
		    	ignore: "",
	            rules: {
	            	'message': {
	                    required: true,
	                },
	            	'name': {
	                    required: true,
	                },
	                'mail': {
	                    required: true,
	                    email: true
	                }
	            },
	            errorPlacement: function(error, element){}

		    });
		  });
	</script>


	<script type="text/javascript">
		var toper = $('a#top');


		$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                toper.fadeIn( 200 );
            } else {
                toper.fadeOut( 200 );
            }
        });

         toper.click(function(){
        	$('html, body').animate({scrollTop:0}, 500);
        	return false;
    	});
	</script>


</body>
</html>
