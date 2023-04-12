<!doctype html>
<?php 
// PWA
$title = 'Mine vurderinger';
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
		<?php include('../template-parts/rating/ratingfilter.php')?>
			<div class="ratings-list white-box p-4">
			<?php
				$reviewLayout = '<div class="">
							<div class="pb-2 mb-2">
								<div class="d-flex g-5">
									<div class="">
										<img src="../images/samples/profile-sample-3.png" alt="">
									</div>
									<div class="">
										<div class="ratign">
											<i class="fa-solid fa-star checked"></i>
											<i class="fa-solid fa-star checked"></i>
											<i class="fa-solid fa-star checked"></i>
											<i class="fa-solid fa-star checked"></i>
											<i class="fa-solid fa-star"></i>
										</div>
										<h2 class="name"><a href="#">Cleaning house</a></h2>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p>This is one of the best employers on the platform!, thanks for the opportunity and being such a kind person!</p>
										<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
									</div>
								</div>
							</div>
						</div><hr>';
			echo str_repeat($reviewLayout, 4); 
			?>
			</div>
			<?php include ('template-parts/pagination.php')?>
	</div>
</div>
</div>
<?php include ('template-parts/myjs.php')?>
</body>
</html>