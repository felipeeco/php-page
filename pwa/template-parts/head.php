<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?> | Minsmåjobb</title>
	<meta name="theme-color" content="#3FBCB5">
	<!-- Bootstrap -->
	<link href="../css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/pwa.css" rel="stylesheet">
	<link href="../css/animation.css" rel="stylesheet">
	<link rel="stylesheet" href="../vendor/slick/slick.css">
	<link rel="stylesheet" href="https://use.typekit.net/skn0ayd.css">
	<!--locally load all Font Awesome styles -->
	<link href="../css/all.css" rel="stylesheet">
	<!--<script src="https://kit.fontawesome.com/a335a36105.js" crossorigin="anonymous"></script>NOT USING KIT ANYMORE-->
</head>
<body class="pwa-body <?php echo ($body_class);?>">
	<?php if ($loggin == true){
		include ('template-parts/side-navigation.php');
	} else if ($loggin == false){
		include ('template-parts/side-navigation-notloggedin.php');
	}
	?>
	<?php if ($hasnavbar == true){include('template-parts/navigation.php');}?>
	<?php/* if ($headerContent == false){include('template-parts/navigation.php');}else{include('template-parts/navigation.php');}*/?>
	
	<header id="page-header" class="<?php echo ($header_class);?>">
		<div class="d-flex justify-content-<?php if ($headerSingle == true){echo('center');}else{echo('between');}?>">
			<div class="d-flex justify-content-between">
				<?php if(empty($hasback)){}else{echo('<a href="'.$backURL.'" class="d-flex align-items-center"><i class="fa-solid fa-chevron-left" style=font-size:24px></i></a>');}?>
				<?php if (empty($heading_pwa)) {
						if ($loggin == true){
							echo '<a href="dashboard.php">';
						}else{
							echo '<a href="welcome.php">';
						}
					  	echo '<img src="../images/logo.svg" alt="" class="logo">';
						echo'</a>';
					}else{
						echo ('<h1 class="text-white">');
						echo ($heading_pwa);
						echo ('</h1>');
					} 
				?>
			</div>
			<div class="text-right <?php if ($headerSingle == true){echo('d-none');}else{echo('d-block');}?>">
				<?php if ($loggin == true){
					echo ('<a href="#" role="button" id="dropdownNotification" class="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell position-relative"><span class="new-notification"></span></i></a>');
					include('template-parts/notifications.php');
				}?>
				<a href="javascript:;" aria-label="Toggle navigation" onclick="openNav()" class=""><i class="far fa-bars"></i></a>
			</div>
		</div>
	</header>