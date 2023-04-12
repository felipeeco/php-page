<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
//PWA
$title = "New Transport Job"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'page new-job no-back bg-grey';
$heading_pwa = '<h1 class="text-white mt-1"><i class="fas fa-shipping-fast mr-2" aria-hidden="true"></i> New Transport Job</h1>';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
		<div class="newjob-content transport">
			<div class="progress-panel">
				<div class="progress">
					<div class="progress-bar" role="progressbar"  aria-valuenow="100" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar"style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar"  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="container">
				<h1 class="mb-3">Payment</h1>
				<?php 
					//call payment type pills
					include ('../template-parts/job-settings/payment-type-template.php');
					//for test only
					$current_selection = 'empty'; //other variables| error | selected | empty
					include ('../template-parts/job-settings/job-type-selector.php');
					//call the selector modal
					include ('../template-parts/modals/job-type-selector.php');
				?>
				<div class="form-check mt-4">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				  <label class="form-check-label" for="flexCheckDefault">
					<strong>This job requires 	an inspection</strong>
					<p>This means that you only want inquiries from helpers who can come for an inspection</p>
				  </label>
				</div>
				<hr>
				<ul class="form-footer nav justify-content-between">
					<li><a class="btn btn-outline-light	" href="new-job-transport-2.php"><i class="fas fa-chevron-left"></i> Previous</a></li>
					<li><a class="btn btn-primary" href=""><i class="fas fa-check"></i> Post Work</a></li>
				</ul>
			</div>
		</div>
		<?php include ('template-parts/myjs.php')?>
  </body>
</html>