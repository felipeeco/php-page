<!DOCTYPE html>
<?php
$title = 'Publish a job: Transport';
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page new-job no-back';
$load_ratingModal = false;
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<?php include ('template-parts/modals/publish-job.php');?>
<div class="newjob-content transport">
	<div class="container">
		<div class="row">
			<div class="col-md-5 hero-image">
				<h1><i class="fas fa-plus-circle"></i> <?php echo $title?></h1>
			</div>
			<div class="col-md-7 job-form">
				<div class="whitebox">
					<div class="progress-panel">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<h1>Almost finish!</h1>
					<p>Only a few choices remain.  Think extra carefully about which price is right for the job or ask for a quote if you do not know.</p>
					<?php 
						//call payment type pills
						include ('template-parts/job-settings/payment-type-template.php');
						//for test only
						$current_selection = 'empty'; //other variables| error | selected | empty
						include ('template-parts/job-settings/job-type-selector.php');
						//call the selector modal
						include ('template-parts/modals/job-type-selector.php');
					?>
					<div class="form-check mt-4">
					  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					  <label class="form-check-label" for="flexCheckDefault">
						<strong>This job requires an inspection</strong>
						<p>This means that you only want inquiries from helpers who can come for an inspection</p>
					  </label>
					</div>
					<hr>
					<ul class="nav justify-content-end g-10">
						<li><a class="btn btn-light" href="new-job-transport-2.php">Back</a></li>
						<li><a class="btn btn-primary" href=""  role="button" data-toggle="modal" data-target="#publish-job">Publish</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php include ('template-parts/footer.php')?>