<!doctype html>
<?php 
//PWA
$title = 'Flora&#39;s Profile';
$loggin = true;
$hasnavbar = false;
$hasback = true;
$backURL = 'browse-helper.php'; // where the backbutton directs
$heading_pwa = $title;
$body_class = 'helperview bg-grey';
//USER INFORMARTION
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
//HELPER INFORMATION
//$helperName = 'Stine Tveit';
$helperName = 'Flora Della Rosa Santiagarra';
$helperPictureURI = '../images/samples/7842e668c271f5b7428f4097db5dc3f5.png';
$userBadge = 'PRO'; //PRO, BUSINESS, EMPTY
?>
<?php include ('template-parts/head.php')?>
<div class="position-fixed bottom-0 contact-fixed-btn">
	<a href="javascript:;" data-toggle="modal" class="btn btn-primary action-contact-a-helper"><strong>Kontakt</strong> kr. 210.- / h </a>
</div>
<!--PAGE CONTENT-->
		<!--RATINGS CONTENT GOES HERE-->
		<div class="container d-flex mt-3 mb-3 g-10 short-wrap">
			<?php include('template-parts/helper-profile.php') ?>
			<div class="contact-profile-btn"><a href="javascript:;" data-toggle="modal" class="btn btn-primary action-contact-a-helper">Kontakt </a></div></div>
		</div>
		<div class="container helper-panels">
			<div class="row">
				<div class="col-4 p-1">
					<div class="box">
						<div><!--neeeded for vertical aligment-->
							<h3>Her er jeg</h3>
							<p>NESTTUN <small>2.97 km fra deg</small></p>
						</div>
					</div>
				</div>
				<div class="col-4 p-1">
					<div class="box">
						<div>
							<h3>Active</h3>
							<p><small>2 timersiden</small></p>
						</div>
					</div>
				</div>
				<div class="col-4 p-1">
					<div class="box">
						<div>
							<h3>Helper ID</h3>
							<p>#8088</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4 p-1">
					<div class="box">
						<div class="div">
							<h3>Oppdrag<br>Søkt</h3>
							<p>44</p>
						</div>
					</div>
				</div>
				<div class="col-4 p-1">
					<div class="box">
						<div>
							<h3>Oppdrag<br>Fått</h3>
							<p>13</p>
						</div>
					</div>
				</div>
				<div class="col-4 p-1">
					<div class="box">
						<div><h3>Ønsket timebetaling</h3>
						<p>kr. 210.-</p>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-4">
			<h3>Om meg</h3>
			<p>Service innstilt 40 åring med diverse erfaring. For tiden 50 % permittert pga Covid -19 fra nåværende jobb, så kan derfor ta på meg noen små jobber :-)</p>
		</div>
		<div class="">
			<?php include ('template-parts/helper-view-contents.php')?>
		</div>
		<?php include ('template-parts/myjs.php')?>
  </body>
</html>