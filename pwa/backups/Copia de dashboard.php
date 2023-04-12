<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
$title = "Dashboard"; /*PAGE TITLE*/
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = true; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
	<!-- rating modals -->
	<?php if ($os_type == 'ios'){
		include ('template-parts/modals/ios-modal.php'); //iOS modal path
	} else if ($os_type == 'android'){
		include ('template-parts/modals/android-modal.php'); //Andoird Modal path
	}
	?>
	<!-- end rating modals -->
	<div class="landing nopic pwa">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="imageToolsBg"></div>
					<div class="section-block profile" id="changeImage" style="background-image:url(<?php if (empty($profilePicter_URI)){echo('../images/no-profile-pic.jpg');}else{echo($profilePicter_URI);} ?>)">
						<h2>Welcome back</h2>
						<h1><?php echo ($userName)?></h1>
					</div>
					<div class="imageTools">
						<div class="profileImg-form">
							<form action="" method="">
								<label for="profile-img"><i class="fas fa-upload"></i> Upload from files</label><input type="file" id="profile-img" style="opacity: 0;display: none;">
								<a href=""><i class="fas fa-camera"></i> Take a Picture</a>
								<button class="btn btn-delete"><i class="fas fa-trash-alt"></i> Delete Picture</button>
								<a href="#" id="cancelProfileImg">Cancel</a>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6">
					<a href="javascript:;" aria-label="Toggle navigation" onclick="openNav()" class="">
					<div class="section-block">
						<i class="fa-light fa-user"></i>
						<span class="icon messaage settings"></span>
						<h1>Min Konto</h1>
					</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-6"><a href="my-jobs.php">
					<div class="section-block">
						<i class="fa-light fa-briefcase"></i>
						<span class="notification-alert">3</span><!--CLASS NAME CHANGED V6.1-->
						<h1>Mine Oppdrag</h1>
					</div></a>
				</div>
				<div class="col-6"><a href="vurderinger.php">
					<div class="section-block">
						<i class="fa-light fa-star"></i>
						<span class="icon create-a-job">
						</span>
						<h1>Mine vurderinger</h1>
					</div></a>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="section-block">
						<i class="fa-light fa-comment"></i>
						<span class="notification-alert">3</span><!--CLASS NAME CHANGED V6.1-->
						<h1>Messages</h1>
					</div>
				</div>
				<div class="col-6"><a href="betalinger.php">
					<div class="section-block">
						<i class="fa-light fa-money-bill-wave"></i>
						<span class="icon browse">
						</span>
						<h1>Betalinger</h1>
					</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container ratings-home ratings-list">
		<div class="header-rating">
			<i class="fa-solid fa-star"></i>
			<h3>Vi er stolte over våre brukeres tilbakemeldinger</h3>
		</div>
		<div class="">
		<?php
		$reviewLayout = '<div class="">
							<div class="dark-box">
								<div class="d-flex g-5">
									<div class="">
										<img src="../images/samples/profile-sample-3.png" alt="">
									</div>
									<div class="">
										<div class="ratign">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
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
						</div>';
		echo str_repeat($reviewLayout, 3); 
		?>
		</div>
		<a href="reviews-page.php" class="readmore text-end ml-auto">Read more reviews <i class="fa-solid fa-chevron-right"></i></a>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php include ('template-parts/myjs.php')?>
	<script>

		$('#changeImage').on('click', function() {
			imageTools();
		});

		$('#cancelProfileImg').on('click', function(){
			imageTools();
		});

		function imageTools() {
			$('.imageTools').toggleClass('active');
			$('.section-block.profile').toggleClass('active');
			$('.imageToolsBg').toggleClass('active');
		}

		
			$(window).on('load', function() {
				$('#exampleModal').modal('show');
			});
		
	</script>
</body>
</html>
