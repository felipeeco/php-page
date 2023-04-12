<!doctype html>
<?php 
// PWA
$title = 'Modal Test';
$loggin = true	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = false;
$backURL = 'dashboard.php';
$pwa = true;
$heading_pwa = $title;
$body_class = 'bg-grey';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<?php 
	
	//award helpers 26-08-2022
	include ('template-parts/modals/award-helper.php');
	include ('template-parts/modals/award-agreement.php');	
	include ('template-parts/modals/award-confirmation.php');	
	include ('template-parts/modals/award-accept-total.php');	
	include ('template-parts/modals/award-accept-hourly.php');
	
	//modalds
	include ('template-parts/modals/chat/reportUserModal.php'); 
	//job estimate
	include ('template-parts/modals/estimate-or-inspect.php');
	include ('template-parts/modals/send-estimate.php');
	include ('template-parts/modals/send-estimate-pro.php');
	include ('../template-parts/modals/job-employer-rating.php');
?>
<div class="container mt-5">
	<a href="" data-toggle="modal" data-target="#employerRating">job-employer-rating</a><br>
	<h2>Award Helper</h2>
	<a href="" data-toggle="modal" data-target="#award-helper">Award Helper</a><br>
	<a href="" data-toggle="modal" data-target="#award-agreement">Award Agreement</a><br>
	<a href="" data-toggle="modal" data-target="#award-confirmation">Award confirmation</a><br>
	<a href="" data-toggle="modal" data-target="#award-accept-total">Award Accept Total</a><br>
	<a href="" data-toggle="modal" data-target="#award-accept-hourly">Award Accept Hourly</a><br>
	<hr>
	<a href="#" class="" role="button" data-toggle="modal" data-target="#reportUserModal">reportUserModal  - mobile</a> <br>	
	<hr>
	<a href="" data-toggle="modal" data-target="#estimate-or-inspect">Estimate or Inspect</a><br>
	<a href="" data-toggle="modal" data-target="#send-estimate">Send Estimate</a><br>
	<a href="" data-toggle="modal" data-target="#send-estimate-pro">Send Estimate (PRO)</a><br>
</div>

 
 
 <?php include ('template-parts/myjs.php')?>