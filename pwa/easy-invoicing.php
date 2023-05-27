<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
$title = "Easy Invoicing"; /*PAGE TITLE*/
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = "gradient-bg";
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
//dicount cards launched?
$discountsLaunched = false;
$os_type = 'ios';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
<div class="d-flex fixed-bottom dark-bg p-3 g-10">
	<a href="javascript:;" class="btn btn-outline-light btn-lg"><i class="fa-solid fa-circle-info"></i>Information </a>
	<a href="javascript:;" class="btn btn-primary btn-lg"><i class="fa-solid fa-check"></i>Register</a>
</div>
	<div class="easy-invoicing-pwa">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="../images/easy-invoicing/example-image.svg" alt="people" width="100%">
				</div>
				<div class="col-md-8">
					<img src="../images/easy-invoicing/logo.svg" alt="logo" class='easy-invoicing-logo'>
					<h1>Faktuer uten a starte eget firma</h1>
					<p class="lead"><strong>MinSmajobb</strong> ogg <strong>EasyFreelance</strong> har inngått et samarbeid for å gjøre det enkelt for deg som ikke har din egen virksomhet å fakturere oppdragsgivere. Det tar bare noen få minutter å registrere en konto og sende din første faktura. Med EasyFreelance kan du være trygg på at skatter og avgifter blir håndtert, og at du vil motta din utbetaling som lønn på din konto. Det beste av alt? Alt skjer automatisk, slik at du kan bruke mer tid på å fokusere på dine oppdrag.</p>
				</div>
			</div>
			<div class="row py-5">
				<div class="col-12 box-video mx-auto text-center mb-5">
					<h1 class="mb-4">Se hvordan det fungerer?</h1>
					<iframe width="100%" height="345" src="https://www.youtube.com/embed/Bk8Ll0qaA48?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
		</div>
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
				$('#soacialModal').modal('show');
			});
		
		
	</script>
</body>
</html>
