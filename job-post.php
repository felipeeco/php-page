<!--page job-post no-back-->
<!DOCTYPE html>
<?php
$title = 'job Post';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page job-post no-back';
$load_ratingModal = false;
$insert_scrtip = '
	<script src="vendor/slick/slick.min.js"></script>
	<script src="vendor/magnific-popup/magnific-popup.min.js"></script>
	<link rel="stylesheet" href="vendor/slick/slick.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
	<script src="js/plugins/carouselExampleIndicators.js"></script>
	<script>$(".action-popup-rating").on("click", function(){$("#employerRating").modal("show");});</script>
';
$isPRO_job = false;
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<div class="content mt-4">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-8">
						<?php if ($isPRO_job == 'true'){include ('template-parts/pro-icon-badge.php');};?>
						<div id="job-post-slider">
							<a href="images/samples/sample-05.png"><img src="images/samples/sample-05.png" alt="" data-id="image01"></a>
							<a href="images/samples/sample-03.jpg"><img src="images/samples/sample-03.jpg" alt="" data-id="image01"></a>
							<a href="images/samples/sample-03.png"><img src="images/samples/sample-03.png" alt="" data-id="image01"></a>
						</div>
						<div class="work-descriptopn">
							<a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Viken, Oslo</a>
							<h1>Wash car</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis Leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
						</div>
						<div class="banner-information">
							<div class="iconlottie-animation-panel">
							<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://assets7.lottiefiles.com/packages/lf20_hjfggbrf.json" background="transparent" speed="1" style="width: 60px; height: 60px;" loop  autoplay></lottie-player></div>
							<div class="information-text"><h3>Interessert i dette oppdraget?</h3><p><small>Våre tjenester er tilgjengelig for alle som følger vårt regelverk og er hyggelig, ærlig og forpliktende i sin oppførsel. Tilgang til våre tjenester forbeholder at du setter deg inn i, og følger vårt regelverk.</small></p></div>
							<div class="action"><a href="" class="btn btn-primary" data-toggle="modal" data-target="<?php if ($isPRO_job == 'true'){echo('#registerCompany');}else{echo('#send-offer');}?>">Send tilbud <?php if ($isPRO_job == 'true'){echo('<i class="fa-duotone fa-rectangle-pro"></i>');}?></a></div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 profile-information">
							<div class="employer-details">
								<div class="user-info d-flex flex-wrap">
									<div class="profile-picture position-relative align-self-start">
										<img src="images/no-profile-pic.jpg" alt="">
										<i class="fas fa-circle user-status online" aria-hidden="true"></i>
									</div>
									<div class="rating-info">
										<h1>Stine Tveit</h1>
										<div class="ratign action-popup-rating">
											<span class="fa fa-star checked" aria-hidden="true"></span>
											<span class="fa fa-star checked" aria-hidden="true"></span>
											<span class="fa fa-star checked" aria-hidden="true"></span>
											<span class="fa fa-star checked" aria-hidden="true"></span>
											<span class="fa fa-star" aria-hidden="true"></span>
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
								<ul class="d-flex flex-wrap job-info">
									<li><i class="fas fa-broom"></i> Rengjøring</li>
									<li><i class="fas fa-calendar-alt"></i> Tidspunkt avtales</li>
									<li><i class="fal fa-file-search"></i> Inspection wanted</li>
									<li><span>3</span> Competitions</li>
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
								<ul class="nav flex-column">
									<li class="nav-item"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="<?php if ($isPRO_job == 'true'){echo('#registerCompany');}else{echo('#send-estimate');}?>">Send tilbud <?php if ($isPRO_job == 'true'){echo('<i class="fa-duotone fa-rectangle-pro"></i>');}?></a></li>
									<li class="nav-item mt-3 mb-4"><a href="#" class="btn btn-outline-danger btn-sm"><i class="fas fa-flag"></i> Report</a></li>
								</ul>
								<p class="footer-info">Its complestly free to descuss the job on our chat. Fee Will be deducted only if you get the job or agree to communication outside our chat. - Thanks for supporting our fair fee policy.</p>
							</div>
					</div>
				</div>
			</div>
		</div>
<?php
	//INCLUDE MODALS
	include ('template-parts/modals/send-offer-modal.php');
	include ('template-parts/modals/register-company-modal.php');
	include ('template-parts/modals/add-funds-modal.php');
	include ('template-parts/modals/job-employer-rating.php');
	include ('template-parts/modals/company-confirmed.php');
	include ('template-parts/modals/send-estimate.php');
?>
<?php include ('template-parts/footer.php')?>
