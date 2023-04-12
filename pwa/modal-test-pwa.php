<!doctype html>
<?php 
// PWA
$title = 'Modal Test';
$loggin = true	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = false;
$backURL = 'dashboard.php';
$heading_pwa = $title;
$body_class = 'bg-grey';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<?php 
	
	//modalds
	include ('template-parts/modals/chat/reportUserModal.php'); 
	//job estimate
	include ('template-parts/modals/chat/reportUserModal.php'); 
?>
<div class="container mt-5">
	<a href="#" class="" role="button" data-toggle="modal" data-target="#reportUserModal">reportUserModal  - mobile</a> <br>	
</div>

 
 
 <?php include ('template-parts/myjs.php')?>