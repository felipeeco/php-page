<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php echo $title ?> | Minsmåjobb - Hjelp til alle typer småjobber - I hele Norge</title>
		<meta name="theme-color" content="#3FBCB5" media="(prefers-color-scheme: light)">
		<meta name="theme-color" content="#3FBCB5" media="(prefers-color-scheme: dark)">
		<!-- Bootstrap -->	
		<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
		<link href="css/all.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
<!--		<link href="css/pwa.css" rel="stylesheet">-->
		<link href="css/animation.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/skn0ayd.css">
		<script src="https://kit.fontawesome.com/a335a36105.js"></script>
		
	</head>
<body class="<?php echo ($body_class);?>">
	<!-- Rating Modal -->
	<?php if ($load_ratingModal == true){
		include('../template-parts/modals/desktop-rating-modal.php');
	}
	?>
	<div class="landing <?php if ($header_padding == true){echo('mb-4');}else{echo('mb-0');} ?>">
	<?php include('template-parts/navigaton.php')?>