<!DOCTYPE html>
<?php
$title = 'Profil Settings';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back';
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$has_profile_picture = true;
$profilePicter_URI = 'images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 profile-information centered">
				<?php include ('template-parts/user-profile.php');?>
			</div>
			<div class="col-md-7 helper form profile-settings-form">
				<ul class="nav nav-pills mb-4 mt-4" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-employer-tab" data-toggle="pill" href="#pills-employer" role="tab" aria-controls="pills-employer" aria-selected="true">Employer Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-helper-tab" data-toggle="pill" href="#pills-helper" role="tab" aria-controls="pills-helper" aria-selected="false">Helper Profile</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active active-jobs" id="pills-employer" role="tabpanel" aria-labelledby="pills-employer-tab">
						<?php include ('template-parts/forms/employer-profile-form.php');?>
					</div>
					<div class="tab-pane fade expired-jobs" id="pills-helper" role="tabpanel" aria-labelledby="pills-helper-tab">
						<?php include ('template-parts/forms/helper-profile-form.php');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="how-does-it-work">
	<div class="container">
		<?php include('template-parts/legal-information-footer.php'); ?>
	</div>
</div>
<?php include ('template-parts/footer.php')?>