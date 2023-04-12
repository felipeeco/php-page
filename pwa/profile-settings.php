<!doctype html>
<?php 
// PWA
$title = 'Profil Settings';
$loggin = true	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = true;
$backURL = 'dashboard.php';
$heading_pwa = $title;
$body_class = 'bg-grey';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<div class="content">
	<div class="container d-flex mt-3 mb-3 g-10">
		<?php include ('template-parts/user-profile.php');?>
	</div>
	<div class="container">
		<div class="tab-content" id="pills-content_small-jobs">
			<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active pb-0 text-center" id="pills-employer-tab" data-toggle="pill" href="#pills-employer" role="tab" aria-controls="pills-employer" aria-selected="true">Employer Profile</a>
				</li>
				<li class="nav-item ml-md-4">
					<a class="nav-link pb-0 text-center" id="pills-helper-tab" data-toggle="pill" href="#pills-helper" role="tab" aria-controls="pills-helper" aria-selected="false">Helper Profile</a>
				</li>
				
			</ul>
		</div>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active active-jobs" id="pills-employer" role="tabpanel" aria-labelledby="pills-employer-tab">
				<?php include ('../template-parts/forms/employer-profile-form.php');?>
			</div>
			<div class="tab-pane fade expired-jobs" id="pills-helper" role="tabpanel" aria-labelledby="pills-helper-tab">
				<?php include ('../template-parts/forms/helper-profile-form.php');?>
			</div>
		</div>
	</div>
</div>
</div>
<?php include ('template-parts/myjs.php')?>
</body>
</html>