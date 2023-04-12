<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
$title = "Welcome"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = true; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
	<div class="landing pwa">
		<div class="container">
			<div class="text-holder">
				<h1>Kommer snart!</h1>
				<h2>Få hjelp med med de små jobbene du ikke rekker å gjøre selv.</h2>
			</div>
			<a href="#" class="btn btn-primary">Logg inn eller registrer deg</a>
		</div>
	</div>
	<div class="white-box">
		<div class="container">
			<h1>Andre har lagt ut</h1>
			<ul class="joblist">
				<?php include ('template-parts/job-list-samples.php')?>
			</ul>
		</div>
		<div class="container ratings-home ratings-list">
			<div class="header-rating">
				<i class="fa-solid fa-star"></i>
				<h3>Vi er stolte over våre brukeres tilbakemeldinger</h3>
			</div>
			<div class="">
			<?php
			$reviewLayout = '<div class="">
								<div class="white-box">
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
	</div>
	<?php include ('template-parts/myjs.php')?>
	<script>
	var cw = $('.image-holder').width();
		$('.image-holder').css({
			'height': cw + 'px'
		});
	</script>
</body>
</html>
