<!doctype html>
<?php 
// PWA
$title = 'Logg In';
$loggin = false	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = true;
$backURL = 'welcome.php';
//$heading_pwa = $title;
$body_class = 'login bg-gradient';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<?php include ('../template-parts/forms/log-in-form.php')?>
</div>
<?php include ('template-parts/myjs.php')?>
</body>
</html>