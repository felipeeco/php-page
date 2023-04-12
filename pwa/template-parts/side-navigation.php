<!--
Name: Menu Sidebar
Status: User Logged In
-->
<div id="mySidenav" class="sidenav">
	<div class="nav-profile">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="dashboard.php"><img src="<?php if (empty($profilePicter_URI)){echo('../images/no-profile-pic.jpg');}else{echo($profilePicter_URI);} ?>" alt="" width="40"></a>
		<div>
			<h2><?php echo($userName);?></h2> 
			<a href="welcome.php" class="logout"><i class="fas fa-sign-out"></i>Logg ut</a>
		</div>
	</div>

	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="legg-ut-et-oppdrag.php"><i class="fal fa-plus-circle"></i> Legg ut småjobb</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="browse-job.php"><i class="fal fa-search"></i> Søk</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="messages.php"><i class="fal fa-comment"></i> Meldinger</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href=""><i class="fal fa-suitcase"></i> Mine oppdrag</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="profile-settings.php"><i class="fal fa-user"></i> Profil</a>
		</li>
	</ul>

	<hr>

	<ul class="navbar-nav mr-auto nav-light">
		<li class="nav-item">
			<a class="nav-link" href="subscriptions.php">Innstillinger</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="vurderinger.php">Vurderinger</a>
		</li>
		<li class="nav-item   ">
			<a class="nav-link" href="betalinger.php">Betalinger</a>
		</li>
		<li class="nav-item   ">
			<a class="nav-link" href="avtaler.php">Avtaler</a>
		</li>
		
		<li class="nav-item   ">
			<a class="nav-link" href="../var-tjeneste.php">Om Oss</a>
		</li>
		<li class="nav-item   ">
			<a class="nav-link" href="../Tjenesteavtale.php">Tjenesteavtale</a>
		</li>
		<li class="nav-item   ">
			<a class="nav-link" href="../kundeservice.php">Kundeservice</a>
		</li>
	</ul>
</div>