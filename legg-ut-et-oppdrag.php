<!DOCTYPE html>
<?php
$title = 'Legg ut et oppdra';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page new-job cateogries';
$load_ratingModal = false;
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<div class="offset-content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="offset-header">
					<h1><i class="fa-regular fa-circle-plus"></i> Legg ut et oppdrag</h1>
					<h2>Å legge ut et oppdrag er enkelt og gratis. Start ved å velge en kategori</h2>
				</div>
				<?php include('template-parts/categories-list.php')?>
			</div>
		</div>
	</div>
</div>
<?php include ('template-parts/footer.php')?>