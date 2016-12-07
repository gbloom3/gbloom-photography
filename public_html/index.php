<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge"/>

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

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!-- Link to font-awesome cdn-->
		<script src="https://use.fontawesome.com/9ae9d99d69.js"></script>

		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

		<!-- link to flickity JS -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

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
									<li><a href="#contact">Contact</a></li>
								</ul>
							</div>
					</nav>
					<!-- begin title section -->
					<div class="titleBackground" id="title">
						<img src="img/photos/butterfly-min.jpg" class="img-responsive verticalAlign" alt="" />
						<div class="col-xs-12 col-md-6 col-md-offset-6 text-center">
							<h1 class="titleHeading">Greg Bloom</h1>
							<p class="subtitleHeading">Photographer</p>
						</div>
					</div>
					<!-- begin about me section -->
						<div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1" id="about">
							<h1 class="heading">About</h1>
							<p class="bodyText"> Greg is an amateur photographer with a passion for capturing images of beautiful insects,
								flowers, landscapes, and other wonders of nature. Basically, Greg enjoys photographing
								nature to understand the world better. He strongly believes photographing nature reminds
								us all to protect and preserve the environment.
							</p>
							<p class="bodyText">
								Greg is willing to invest some time to capture and frame the common behavior
								of subjects such as birds and butterflies. Magnification is important to allow
								the observer to enjoy subject poses which the naked eye can barely glance at.
								He uses a Nikon D3200 camera with a 16-300mm Lens, adjusting exposure to the occasion.
							</p>
							<p class="bodyText">
								Greg is an active member of the New Mexico based Enchanted Lens Club
								since 2014 and won first prize for his “Butterfly on a Flower” photograph in the New
								Mexico State Fair in 2015.
							</p>
						</div>
					<!-- begin gallery section -->
						<div class="col-xs-11 col-md-11 col-xs-offset-1 col-md-offset-1" id="gallery">
							<h1 class="heading">Gallery</h1>
						</div>
						<div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1">
							<div class="main-carousel popup-gallery" data-flickity='{ "cellAlign": "right", "contain": true, "dragThreshold": 10, "adaptiveHeight": true, "imagesLoaded": true}'>
								<div class="carousel-cell">
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/bee-min.jpg"
												class="thumbnail"
												title="Bee on a Flower">
												<img src="img/photos/thumbs/bee-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/bumblebee-min.jpg"
												class="thumbnail"
												title="Bumblebee on a Flower">
												<img src="img/photos/thumbs/bumblebee-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/burning-sky-min.jpg"
												class="thumbnail"
												title="Burning Sky">
												<img src="img/photos/thumbs/burning-sky-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/camel-rock-min.jpg"
												class="thumbnail"
												title="Camel Rock">
												<img src="img/photos/thumbs/camel-rock-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/dont-look-at-me-min.jpg"
												class="thumbnail"
												title="Don't Look at Me!">
												<img src="img/photos/thumbs/dont-look-at-me-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/flame-up-min.jpg"
												class="thumbnail"
												title="Flame-Up">
												<img src="img/photos/thumbs/flame-up-tn.jpg"/>
											</a>
										</div>
									</div>
								</div>
								<div class="carousel-cell">
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/grand-canyon-sunrise-1-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 1">
												<img src="img/photos/thumbs/grand-canyon-sunrise-1-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/grand-canyon-sunrise-2-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 2">
												<img src="img/photos/thumbs/grand-canyon-sunrise-2-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/grand-canyon-sunrise-3-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 3">
												<img src="img/photos/thumbs/grand-canyon-sunrise-3-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/grand-canyon-sunrise-4-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 4">
												<img src="img/photos/thumbs/grand-canyon-sunrise-4-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/grand-canyon-sunrise-5-min.jpg"
												class="thumbnail"
												title="Grand Canyon Sunrise 5">
												<img src="img/photos/thumbs/grand-canyon-sunrise-5-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
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
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/hummingbird-fight-min.jpg"
												class="thumbnail"
												title="Hummingbird Fight">
												<img src="img/photos/thumbs/hummingbird-fight-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/half-rainbow-min.jpg"
												class="thumbnail"
												title="Half-Rain Half-Bow">
												<img src="img/photos/thumbs/half-rainbow-tn.jpg"/>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-5 col-md-5 col-xs-offset-1 col-md-offset-1">
											<a href="img/photos/moonlight-ojo-min.jpg"
												class="thumbnail"
												title="Moonlight over Ojo Caliente">
												<img src="img/photos/thumbs/moonlight-ojo-tn.jpg"/>
											</a>
										</div>
										<div class="col-xs-5 col-md-5">
											<a href="img/photos/slot-canyon-min.jpg"
												class="thumbnail"
												title="Slot Canyon">
												<img src="img/photos/thumbs/slot-canyon-tn.jpg"/>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- begin contact me section -->
					<div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-1" id="contact">
						<h1 class="heading">Like what you see?</h1>
						<p class="bodyText">If you’re interested in any of the wonders of the great outdoors captured by Greg Bloom, please feel free to contact him through this contact
							form.</p>
					</div>
					<div class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-0">
					<form id="contact-form" class="bodyText" action="php/mailer.php" method="post">
						<div class="form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha col-xs-10 col-md-5" data-sitekey="6Ld7Hw4UAAAAANmcKuVzxmEKrn4W2d59U885v-iu"></div>
						<div class="col-xs-10 col-md-5 col-md-offset-1">
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</div>
					</form>

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
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