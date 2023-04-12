<!doctype html>
<!--V 2.1
PWA
+ PHP integration for loading the same side navigation navigation.php
-->
<?php 
$title = "Sok Oppdrag";
$loggin = true;
$hasback = false;
$hasnavbar = true;
$heading_pwa = '<i class="fa-solid fa-magnifying-glass text-white"></i> Sok';
$active_helper_filer = false;
$current_page = 'Oppdrag'; /*add active class to tab*/
if ($loggin == true){
	$backURL = 'dashboard.php';
}else{
	$backURL = 'welcome.php';
}
?>
<?php include ('template-parts/head.php')?>
<!--FILTER MODALS-->
<?php 
include ('template-parts/browse/modals/sorteringModal.php');
include('template-parts/browse/modals/typeJobModal.php');
include('template-parts/browse/modals/searchModal.php');
include('template-parts/browse/modals/jobTypeModal.php');
?>
<!-- PAGE CONTENT -->
<?php include ('template-parts/browse/tabs.php')?>
	<div class="search-job-form pb-0">
		<?php include ('template-parts/browse/state-filter.php') ?><!--CALL THE STATE FILTER HTML-->
		<?php include ('template-parts/browse/filer-list.php') ?><!--CALL THE FILTER LIST HTML-->
	</div>
	<div class="grey-bg <?php if ($hasnavbar == true){echo('mb-5 pb-5');}?>">
		<div class="container">
			<ul class="joblist">
				<?php include ('template-parts/job-list-samples.php')?>
				<?php include ('template-parts/pagination.php')?>
			</ul>
		</div>
	</div>
	<?php include ('template-parts/myjs.php')?>
	<script>
		$(function() {                       //run when the DOM is ready
		  $("#filter, .close, .applyfilter").click(function() {  //use a class, since your ID gets mangled
//			$(".box-bar").removeClass("d-block");    
//			$( ".box-bar" ).slideToggle( "slow" );
			$( ".new-filters" ).slideToggle( "slow" );
			$( ".iffilteron" ).slideToggle( "slow" );
		  });
		});
		
		$(function searchopen() {                       //run when the DOM is ready
		  $("#search, .search-btn").click(function() {  //use a class, since your ID gets mangled
			//$(".box-bar").removeClass("d-block");    
			$( ".search-holder" ).slideToggle( "" );
			 document.getElementById("search-title").focus();
		  });
		});
	</script>
	<script>
	var cw = $(".image-holder").width();
		$(".image-holder").css({
			"height": cw + "px"
		});
	</script>	
</body>
</html>
