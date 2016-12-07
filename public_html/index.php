<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="x-ua-compatible" content="ie-edge"/>

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
		<!-- link to flickity CSS-->
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

		<!--my css file-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!-- Link to font-awesome cdn-->
		<script src="https://use.fontawesome.com/9ae9d99d69.js"></script>

		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

		<!-- link to flickity JS -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/1.0.5/jquery.mobile-events.min.js"></script>

		<script type="text/javascript">jQuery(document).ready(function($) {
				$('.popup-gallery').magnificPopup({
					delegate: 'a',
					type: 'image',
					tLoading: 'Loading image #%curr%...',
					mainClass: 'mfp-img-mobile',
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return item.el.attr('title') + '<small>by Greg Bloom</small>';
						}
					}
				});
			});
		</script>

		<style>@import url('https://fonts.googleapis.com/css?family=Arvo|Bungee');</style>


		<title>Greg Bloom Photography</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<main>
				<div class="fluid-container">
					<nav class="navbar navbar-inverse">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
								<ul class="nav navbar-nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#contact">Contact Me</a></li>
								</ul>
							</div>
					</nav>
					<!-- begin title section -->
					<div class="titleBackground" id="title">
						<img src="img/photos/butterfly-min.jpg" class="img-responsive verticalAlign" alt="" />
						<div class="col-xs-12 col-md-6 col-md-offset-6 text-center">
							<h1 class="titleHeading">Greg Bloom</h1>
							<p class="heading">Photographer</p>
						</div>
					</div>
					<!-- begin about me section -->

						<div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1 section" id="about">
							<h1 class="heading">About Me</h1>
							<p class="bodyText">Hi I'm Greg, a New Mexico-based photographer.</p>
						</div>
					<!-- begin gallery section -->
						<div class="col-xs-11 col-md-11 col-xs-offset-1 col-md-offset-1 sectionAlt" id="gallery">
							<h1 class="heading">Gallery</h1>
						</div>
						<div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1">
							<div class="main-carousel popup-gallery" data-flickity='{ "cellAlign": "center", "contain": true, "dragThreshold": 10, "adaptiveHeight": true, "lazyLoad": true}'>
								<div class="carousel-cell">
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/bee-min.jpg" class="thumbnail"

												title="Bee on a Flower">
												<img src="img/photos/thumbs/bee-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/bumblebee-min.jpg" class="thumbnail"

												title="Bumblebee on a Flower">
												<img src="img/photos/thumbs/bumblebee-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/burning-sky-min.jpg" class="thumbnail"

												title="Burning Sky">
												<img src="img/photos/thumbs/burning-sky-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/camel-rock-min.jpg" class="thumbnail"

												title="Camel Rock">
												<img src="img/photos/thumbs/camel-rock-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/dont-look-at-me-min.jpg" class="thumbnail"

												title="Don't Look at Me!">
												<img src="img/photos/thumbs/dont-look-at-me-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/flame-up-min.jpg" class="thumbnail"

												title="Flame-Up">
												<img src="img/photos/thumbs/flame-up-tn.jpg"/>
											</a>
										</div>
									</div>
								</div>
								<div class="carousel-cell">
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/grand-canyon-sunrise-1-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 1">
												<img src="img/photos/thumbs/grand-canyon-sunrise-1-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/grand-canyon-sunrise-2-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 2">
												<img src="img/photos/thumbs/grand-canyon-sunrise-2-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/grand-canyon-sunrise-3-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 3">
												<img src="img/photos/thumbs/grand-canyon-sunrise-3-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/grand-canyon-sunrise-4-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 4">
												<img src="img/photos/thumbs/grand-canyon-sunrise-4-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/grand-canyon-sunrise-5-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 5">
												<img src="img/photos/thumbs/grand-canyon-sunrise-5-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/grand-canyon-sunrise-6-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 6 ">
												<img src="img/photos/thumbs/grand-canyon-sunrise-6-tn.jpg"/>
											</a>
										</div>
									</div>
								</div>
								<div class="carousel-cell">
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/hummingbird-fight-min.jpg" class="thumbnail"

												title="Hummingbird Fight">
												<img src="img/photos/thumbs/hummingbird-fight-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/half-rainbow-min.jpg" class="thumbnail"

												title="Half-Rain Half-Bow">
												<img src="img/photos/thumbs/half-rainbow-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/moonlight-ojo-min.jpg" class="thumbnail"

												title="Moonlight over Ojo Caliente">
												<img src="img/photos/thumbs/moonlight-ojo-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-6 col-md-6">
											<a href="img/photos/slot-canyon-min.jpg" class="thumbnail"

												title="Slot Canyon">
												<img src="img/photos/thumbs/slot-canyon-tn.jpg"/>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- begin contact me section -->
					<div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-1" id="contact">
						<h1 class="heading">Contact Me</h1>
						<p>Thank you for visiting my site! If you would like to get in touch with me, please use this contact
							form.</p>
					</div>
					<div class="col-xs-11 col-md-4 col-xs-offset-1">
						<div class="input-group formSpacing">
							<span class="input-group-addon" id="nameInput"><i class="fa fa-user-circle"></i></span>
							<input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
						</div>
						<div class="input-group formSpacing">
							<span class="input-group-addon" id="emailInput"><i class="fa fa-envelope"></i></span>
							<input type="text" class="form-control" placeholder="example@email.com"
									 aria-describedby="basic-addon1">
						</div>
						<div class="input-group formSpacing">
							<span class="input-group-addon" id="commentInput"><i class="fa fa-comments"></i></span>
							<input type="text" class="form-control" placeholder="Questions/Comments?"
									 aria-describedby="basic-addon1">
						</div>
						<button type="button" class="btn btn-default" id="submitButton">Submit</button>
					</div>
			</main>
		</div>
		<!-- begin footer-->
		<footer>
			<div class="container">
				<div class="row text-center">
					<div class="col-xs-4 col-md-4">
						<a href="https://twitter.com/gbloomDev"><i class="fa fa-twitter fa-3x"></i></a>
					</div>
					<div class="col-xs-4 col-md-4">
						<a href="https://500px.com/gbloom2010"><i class="fa fa-500px fa-3x"></i></a>
					</div>
					<div class="col-xs-4 col-md-4">
						<a href="https://www.linkedin.com/in/gregbloomdev"><i class="fa fa-linkedin-square fa-3x"></i></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>