<!--page job-post no-back-->
<!DOCTYPE html>
<?php
$title = 'Modals Test';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page job-post no-back';
$header_padding = true;
$load_ratingModal = false;
$insert_scrtip = '';
$isPRO_job = true;
$ext_link = '<a href="#"><i class="fa-regular fa-up-right-from-square"></i></a>';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<?php
	
		include ('template-parts/modals/chat/chattregler.php');
		
		//award helpers 26-08-2022

		include ('template-parts/modals/award-helper.php');
		include ('template-parts/modals/award-agreement.php');	
		include ('template-parts/modals/self-service-approval.php');	
		include ('template-parts/modals/award-confirmation.php');	
		include ('template-parts/modals/award-accept-total.php');	
		include ('template-parts/modals/award-accept-hourly.php');	


		include ('template-parts/modals/default.php');
		include ('template-parts/modals/alert.php');
		include ('template-parts/modals/strex1.php');
		include ('template-parts/modals/strex2.php');
		include ('template-parts/modals/strex3.php');
		include ('template-parts/modals/strex4.php');
		include ('template-parts/modals/strex5.php');

		include ('template-parts/modals/invite1.php');
		include ('template-parts/modals/invite2.php');
		include ('template-parts/modals/invite3.php');
		include ('template-parts/modals/invite4.php');
		
		include ('template-parts/modals/alert-gmaps.php');
		include ('template-parts/modals/chat/inspectionModal.php');
		include ('template-parts/modals/repost_job.php');
		include ('template-parts/modals/job-employer-rating.php');
		include ('template-parts/modals/delete_job.php');
		include('pwa/template-parts/browse/modals/jobTypeModal.php');

		// 08.14.2022
		include ('template-parts/modals/estimate-or-inspect.php');
		include ('template-parts/modals/send-estimate.php');
		include ('template-parts/modals/send-estimate-pro.php');

		?>

		
		<div class="content notfound">
			<div class="container" style="height: calc(100vh);">
			<h1>Modal Test</h1>
				<h2>Chat</h2>
				<br>
				<a href="" data-toggle="modal" data-target="#chattregler">chattregler</a><br>
				<h2>Award Helper</h2>
				<a href="" data-toggle="modal" data-target="#award-helper">Award Helper</a><br>
				<a href="" data-toggle="modal" data-target="#award-agreement">Award Agreement</a><br>
				<a href="" data-toggle="modal" data-target="#self-service-approval">Self-service approval</a><br>
				<a href="" data-toggle="modal" data-target="#award-confirmation">Award confirmation</a><br>
				<a href="" data-toggle="modal" data-target="#award-accept-total">Award Accept Total</a><br>
				<a href="" data-toggle="modal" data-target="#award-accept-hourly">Award Accept Hourly</a><br>
				<hr>
				<h2>Estimation Modal</h2>
				<a href="" data-toggle="modal" data-target="#estimate-or-inspect">Estimate or Inspect</a><br>
				<a href="" data-toggle="modal" data-target="#send-estimate">Send Estimate</a><br>
				<a href="" data-toggle="modal" data-target="#send-estimate-pro">Send Estimate (PRO)</a><br>
				<hr>
				<a href="" data-toggle="modal" data-target="#alert-gmaps">google maps error</a><br>
				<a href="" data-toggle="modal" data-target="#inspectionModal">inspectionModal</a><br>
				<a href="" data-toggle="modal" data-target="#repost_job">repost_job</a><br>
				<a href="" data-toggle="modal" data-target="#employerRating">employerRating</a><br>
				<a href="" data-toggle="modal" data-target="#delete_job">delete_job</a><br>
				<a href="" data-toggle="modal" data-target="#jobTypeModal">type_smajob</a><br>
				<hr>
				
				<a href="" data-toggle="modal" data-target="#default">default</a><br>
				<a href="" data-toggle="modal" data-target="#alert">alert</a><br>
				<a href="" data-toggle="modal" data-target="#strex1">strex1</a><br>
				<a href="" data-toggle="modal" data-target="#strex2">strex2</a><br>
				<a href="" data-toggle="modal" data-target="#strex3">strex3</a><br>
				<a href="" data-toggle="modal" data-target="#strex4">strex4</a><br>
				<a href="" data-toggle="modal" data-target="#strex5">strex5</a><br>
				<hr>
				<a href="" data-toggle="modal" data-target="#invite1">invite1</a><br>
				<a href="" data-toggle="modal" data-target="#invite2">invite2</a><br>
				<a href="" data-toggle="modal" data-target="#invite3">invite3</a><br>
				<a href="" data-toggle="modal" data-target="#invite4">invite4</a><br>
			</div>
		</div>
		<?php include ('template-parts/footer.php')?>
