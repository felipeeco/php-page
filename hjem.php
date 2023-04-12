<!DOCTYPE html>
<?php
$title = 'Hjem';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back';
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$has_profile_picture = true;
$profilePicter_URI = 'images/samples/profile-sample-1.png';
$isHelper = false; /*show differen information under .alert.alert-secondary if is a helper or not*/
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 profile-information centered">
				<?php include ('template-parts/user-profile.php');?>	
			</div>
			<div class="col-md-8 welcome-message">
				<div class="alert alert-secondary">
					<?php if ($isHelper == true){
						echo('
						<h1>Rett bruk av tjenesten!</h1>
						<p>Ikke betal unødvendig gebyr.. - Bruk våre tjenester korrekt!</p>
						<p>Du er ansvarlig for vårt oppdragsgebyr men det er oppdragsgiver som skal betale gebyret til slutt. - Det er derfor viktig at du inkluder vårt gebyr i prisene du oppgir til oppdragsgiver.</p>
						<p>Vår oppdragskalkulator finner du til høyre i chatten eller under <i class="fa-light fa-circle-plus"></i> ikonet dersom du bruker mobiltelefon.</p>
						<div class="d-flex mt-3">
							<a href="#" class="btn btn-primary mr-2"><i class="fa-solid fa-magnifying-glass"></i>Finn en småjobb nå</a>
							<a href="#" class="btn btn-secondary"><i class="fa-solid fa-bell-on"></i>Sjekk innstillinger</a>
						</div>
						');
					}else{
						echo('
						<h1>Finn en hjelper!</h1>
						<p>Visste du at det er helt gratis å legge ut småjobber?</p>
						<p>Lyst å lære spansk? - Få noen til å vaske huset? Transportere noe?</p>
						<p>Nesten alt kan være en småjobb og vi er nesten helt sikre på at vi vet om noen som elsker jobben du hater.</p>
						<div class="d-flex  mt-3">
							<a href="#" class="btn btn-primary mr-2"><i class="fa-regular fa-circle-plus"></i>Legg ut en småjobb nå!</a>
							<a href="register-as-helper.php" class="btn btn-secondary"><i class="fa-regular fa-hand"></i>Registrer deg som hjelper</a>
						</div>
						');
					}
					?>
				</div>
			</div>
		</div>
		<hr class="mt-5">
		<?php include ('template-parts/willing-to-work-list.php');?>
	</div>
</div>
<?php include ('template-parts/footer.php')?>