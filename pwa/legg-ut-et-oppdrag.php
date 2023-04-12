<!doctype html>
<?php 
// PWA
$title = 'Legg ut et oppdrag';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = true;
$hasback = false;
$heading_pwa = '<i class="fa-solid fa-circle-plus"></i> Legg ut et oppdrag';
$body_class = 'bg-grey';
$userName = 'Eirik Risan';
$profilePicter_URI = '../images/samples/profile-sample-9.png';
if ($loggin == true){
	$backURL = 'dashboard.php';
}else{
	$backURL = 'welcome.php';
}
?>
<?php include ('template-parts/head.php')?>
<div class="bg-gradient pb-5">
	<div class="container">
		<h2 class="text-white">Å legge ut et oppdrag er enkelt og gratis. Start ved å velge en kategori</h2>
	</div>
</div>
<div class="container" style="margin-top:-30px; ">
	<?php include('../template-parts/categories-list.php')?>
</div>
</div>
<?php include ('template-parts/myjs.php')?>
</body>
</html>