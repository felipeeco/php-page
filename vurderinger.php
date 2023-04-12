<!DOCTYPE html>
<?php
$title = 'Mine Vurderunger';
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
					<div class="col-md-6 helper form">
						<h1><?php echo($title);?></h1>
						<div class="ratinggrid">
							<?php $reviewLayout = '<div class="row">
								<div class="col-2">
									<img src="images/samples/profile-sample-2.png" alt="" width="100%">
								</div>
								<div class="col-10">
									<div class="ratign">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
									<div class="reviewwcontent">
										<h2><a href="#">Cleaning house</a></h2>
										<p>Asome job done by this great helper!! Will deffently use again in near future. A+++</p>
										<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.2019</span>
									</div>
								</div>
							</div>';
							echo str_repeat($reviewLayout, 3); 
							?>
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