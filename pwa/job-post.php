<!DOCTYPE html><?php 
$title = "Job Post"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$isPRO_job = true;
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#3FC698">
		<title>Minsmåjobb | <?php echo $title ?></title>
		<!-- Bootstrap -->
		<link href="../css/bootstrap-4.3.1.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/updates.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
		<link href="../css/custom-style.css" rel="stylesheet">
		<link href="../css/pwa.css" rel="stylesheet">
		<link href="../css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/skn0ayd.css">
		<script src="https://kit.fontawesome.com/a335a36105.js"></script>
		<link rel="stylesheet" href="../vendor/slick/slick.css">
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.css">
	</head>
	<body class="page job-post pwa-body no-back">
		<?php if ($hasnavbar == true){include('template-parts/navigation.php');}?>
		<div class="modal fade" id="employerRating">
			<div class="modal-dialog" style="max-width: 810px">
				<div class="modal-content">
					<div class="modal-body">
						<div class="container-fluid form-content">
							<div class="row">
								<div class="col-md-4 order-md-1 info">
<!--									<div class="user-info d-flex flex-wrap">-->
									<div class="user-info">
										<div class="d-flex pwa">
											<div class="profile-picture position-relative align-self-start">
												<img src="../images/no-profile-pic.jpg" alt="">
											</div>
											<div class="rating-info">
												<h1>Stine Tveit</h1>
												<div class="r-updated white">
													<ul class="ratinglist list-unstyled">
														<li><img src="../images/rating/white/rating-10.svg" alt=""></li>
														<li><img src="../images/rating/white/rating-10.svg" alt=""></li>
														<li><img src="../images/rating/white/rating-10.svg" alt=""></li>
														<li><img src="../images/rating/white/rating-03.svg" alt=""></li>
														<li><img src="../images/rating/white/rating-00.svg" alt=""></li>
														<li class="rating-number">3.3</li>
													</ul>
												</div>
												<div class="reviews-number small-text"><i class="fa-solid fa-comment"></i> 45 reviews</div>
												<!--<p><small>Responce rate: Good <i class="fas fa-check"></i></small></p>-->
											</div>
											<button type="button" class="close" aria-label="Close" data-dismiss="modal">
												<i class="fa-regular fa-circle-xmark"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="col-md-8 order-md-2 form">
									<h1>Stine’s Ratings</h1>
									<div class="ratingfilter" style="width: 100%;">
<!--										<h4>Filter rating</h4>-->
											<div class="">
												<a href="#">
													<div class="row-rating">
														<div class="side-label">
															<div class="stars"><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""></div>
														</div>
														<div class="middle-section">
															<div class="bar-container">
																<div class="bar-5"></div>
															</div>
														</div>
														<div class="side-numbers right">
															<div>150</div>
														</div>
													</div>
												</a>
												<a href="#">
													<div class="row-rating">
														<div class="side-label">
															<div class="stars"><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""></div>
														</div>
														<div class="middle-section">
															<div class="bar-container">
																<div class="bar-5"></div>
															</div>
														</div>
														<div class="side-numbers right">
															<div>150</div>
														</div>
													</div>
												</a>
												<a href="#">
													<div class="row-rating">
														<div class="side-label">
															<div class="stars"><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""></div>
														</div>
														<div class="middle-section">
															<div class="bar-container">
																<div class="bar-5"></div>
															</div>
														</div>
														<div class="side-numbers right">
															<div>150</div>
														</div>
													</div>
												</a>
												<a href="#">
													<div class="row-rating">
														<div class="side-label">
															<div class="stars"><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""></div>
														</div>
														<div class="middle-section">
															<div class="bar-container">
																<div class="bar-5"></div>
															</div>
														</div>
														<div class="side-numbers right">
															<div>150</div>
														</div>
													</div>
												</a>
												<a href="#">
													<div class="row-rating">
														<div class="side-label">
															<div class="stars"><img src="../images/rating/green/rating-10.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""><img src="../images/rating/green/rating-00.svg" alt=""></div>
														</div>
														<div class="middle-section">
															<div class="bar-container">
																<div class="bar-5"></div>
															</div>
														</div>
														<div class="side-numbers right">
															<div>150</div>
														</div>
													</div>
												</a>

										</div>
									</div>
									<div class="ratinggrid">
										<div class="row">
											<div class="">
												<div class="row">
													<div class="col-3">
														<img src="../images/samples/profile-sample-5.png" alt="" width="100%">
													</div>
													<div class="col-9">
														<div class="ratign">
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
														</div>
														<div class="reviewwcontent">
															<h2><a href="#">Cleaning house</a></h2>
															<p>This is one of the best employers on the platform!, thanks for the opportunity and being such a kind person!</p>
															<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.2020</span>
														</div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="row">
													<div class="col-3">
														<img src="../images/samples/profile-sample-3.png" alt="" width="100%">
													</div>
													<div class="col-9">
														<div class="ratign">
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
														</div>
														<div class="reviewwcontent">
															<h2><a href="#">Washing my car after an adventure</a></h2>
															<p>I had troubles getting the job done because always wanted more and more for the same price 🙁</p>
															<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
														</div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="row">
													<div class="col-3">
														<img src="../images/samples/profile-sample-7.png" alt="" width="100%">
													</div>
													<div class="col-9">
														<div class="ratign">
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
														</div>
														<div class="reviewwcontent">
															<h2><a href="#">HELP! With my garden</a></h2>
															<p>Nice fording on his backyard, I loved the tulips 🌷 but I’d like you to considere not extra fork for same price</p>
															<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
														</div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="row">
													<div class="col-3">
														<img src="../images/samples/profile-sample-8.png" alt="" width="100%">
													</div>
													<div class="col-9">
														<div class="ratign">
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
														</div>
														<div class="reviewwcontent">
															<h2><a href="#">Send some left boxes to my ex</a></h2>
															<p>Good communication and all was fast, Id love to work with you again!</p>
															<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="header-pwa">
			<div class="container">
				<nav class="navbar navbar-light bg-light fixed-top">
					<a class="navbar-brand"><i class="fas fa-chevron-left"></i></a>
					<span class="navbar-text"><a href=""><i class="fas fa-ellipsis-h"></i></a></span>
				</nav>
			</div>
		</div> -->
		<div class="job-cnt profile-information">
			<div class="picrure-slider">
				<div class="employer-details">
					<div class="user-info d-flex flex-wrap">
						<a class="goback-nav" href="#"><i class="fas fa-chevron-left"></i></a>
						<div class="profile-picture position-relative align-self-start">
							<img src="../images/no-profile-pic.jpg" alt="">
							<i class="fas fa-circle user-status online" aria-hidden="true"></i>
						</div>
						<div class="rating-info">
							<h1>Stine Tveit</h1>
							<div class="r-updated">
								<ul class="ratinglist list-unstyled">
									<li><img src="../images/rating/white/rating-10.svg" alt=""></li>
									<li><img src="../images/rating/white/rating-10.svg" alt=""></li>
									<li><img src="../images/rating/white/rating-10.svg" alt=""></li>
									<li><img src="../images/rating/white/rating-03.svg" alt=""></li>
									<li><img src="../images/rating/white/rating-00.svg" alt=""></li>
									<li class="rating-number">3.3</li>
								</ul>
							</div>
							<p><small>Based on 3 reviews</small></p>
							<p><small>Responce rate: Good <i class="fas fa-check"></i></small></p>
						</div>
					</div>
					<div class="job-info-container d-flex">
						<div class="job-time">
							<span>NY!</span> 
						</div>
						<!-- <div class="job-time">
							<span>2 <small class="d-block">days</small></span>
							
						</div> -->
						<div class="ml-2">
							<h2>New today!</h2>
							<small>3km from you</small>
						</div>
					</div>
				</div>
				<?php if ($isPRO_job == 'true'){include ('../template-parts/pro-icon-badge.php');};?>
				<div id="job-post-slider">
					<a href="../images/samples/sample-05.png"><img src="../images/samples/sample-05.png" alt="" data-id="image01"></a>
					<a href="../images/samples/sample-03.jpg"><img src="../images/samples/sample-03.jpg" alt="" data-id="image01"></a>
					<a href="../images/samples/sample-03.png"><img src="../	images/samples/sample-03.png" alt="" data-id="image01"></a>
				</div>
			
				<div class="container">
					<div class="work-descriptopn">
						<a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Viken, Oslo</a>
						<h1>Wash car <?php if ($isPRO_job == 'true'){echo('<i class="fa-solid fa-rectangle-pro"></i>');}?></h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis Leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
					</div>

					<ul class="d-flex flex-wrap job-info">
						<li><i class="fas fa-broom"></i> Rengjøring</li>
						<li class="alert-color"><i class="fas fa-calendar-alt"></i> Tidspunkt avtales</li>
						<li><i class="fal fa-file-search"></i> Inspection wanted</li>
						<li class="primary"><span>3</span> Competitions</li>
						<?php if ($isPRO_job == 'true'){echo('<li><i class="fa-solid fa-rectangle-pro"></i> Professional Job</li>');}?>
					</ul>
				</div>

				<div class="payment-information">
					<div class="d-block">
						<p>Betaling</p>
						<h2>TILBUD ØNSKES</h2>
						<h3>Budget: <strong>200.- <i class="fas fa-circle"></i> 5000.-</strong></h3>
					</div>
					<div class="d-none">
						<h3 class="bigger">Timebetaling</h3>
						<h2 class="bigger">500.- /time</h2>
					</div>
					<div class="d-none">
						<h3 class="bigger">Betaling</h3>
						<h2 class="bigger-2">500.-</h2>
					</div>
					<a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="<?php if ($isPRO_job == 'true'){echo('#registerCompany');}else{echo('#send-offer');}?>">Send tilbud <?php if ($isPRO_job == 'true'){echo('<i class="fa-duotone fa-rectangle-pro"></i>');}?></a>
					<a href="#" class="btn btn-outline-danger mb-3"><i class="fas fa-flag"></i> Report</a>
					<p class="footer-info">Its complestly free to descuss the job on our chat. Fee Will be deducted only if you get the job or agree to communication outside our chat. - Thanks for supporting our fair fee policy.</p>
				</div>
			</div>
		</div><br><br><br>
		<?php
			//INCLUDE MODALS
			include ('../template-parts/modals/send-offer-modal.php');
			include ('../template-parts/modals/register-company-modal.php');
			include ('../template-parts/modals/add-funds-modal.php');
			include ('../template-parts/modals/job-employer-rating.php');
			include ('../template-parts/modals/company-confirmed.php');
		?>
	<?php // include ('template-parts/footer.php')?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php include ('template-parts/myjs.php')?>
	<script src="../vendor/slick/slick.min.js"></script>
	<script src="../vendor/magnific-popup/magnific-popup.min.js"></script>
	
	<script>
		$('.carouselExampleIndicators').carousel()

		$('#job-post-slider').slick({
			dots: false,
			autoplay: true,
			autoplaySpeed: 8000,
			prevArrow: '<span class="slider-arrow left"><i class="fas fa-chevron-circle-left"></i></span>',
			nextArrow:'<span class="slider-arrow right"><i class="fas fa-chevron-circle-right"></i></span>',
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
			});

			$('#job-post-slider').magnificPopup({
				type: 'image',
				delegate: 'a',
				gallery:{
					enabled:true,
					arrowMarkup: '<button class="mfp-arrow slider-arrow %dir%"></button>',
					tCounter: '',
				},
				callbacks: {
					buildControls: function() {
					this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
					},
					open: function (){   
						$('.mfp-figure').append('<span class="zoomImg" onclick="magnificZoom()"><i class="fas fa-search-plus"></i></span>')
		            },
  				}
			});

			function magnificZoom() {
				$('.mfp-figure figure').toggleClass('zoom');
				$('.mfp-image-holder .mfp-close').toggleClass('hasZoom');
			}
	</script>
	<script>
//		$(window).on('load', function() {
//				$('#employerRating').modal('show');
//			});
		</script>
  </body>
</html>