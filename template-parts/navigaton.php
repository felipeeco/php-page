<nav class="navbar navbar-expand-lg container top">
	<a class="navbar-brand" href="index.php">
		<img src="images/logo.svg" alt="Minsmåjobb | <?php echo($title) ?>" width="227">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="var-tjeneste.php">Tjenesten</a></li>
			<li class="nav-item"><a class="nav-link" href="reviews-page.php">Våre vurderinger</a></li>
			<li class="nav-item"><a class="nav-link" href="kundeservice.php">Kundeservice</a></li>
			<li class="nav-item login">
			<?php if ($loggin == true){
				echo('
				<div class="dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>Min Konto</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="profile-hjem.php">Hjem<i class="fas fa-home"></i></a>
						<a class="dropdown-item" href="profile-settings.php">Profil <i class="fas fa-user"></i></i></a>
						<a class="dropdown-item" href="subscriptions.php">Innstillinger <i class="fas fa-bell"></i></a>
						<a class="dropdown-item" href="vurderinger.php">Ratings <i class="fas fa-star"></i></a>
						<a class="dropdown-item" href="betalinger.php">Betalinger <i class="fas fa-money-bill-wave"></i></a>
						<a class="dropdown-item" href="avtaler.php">Avtaler <i class="fas fa-handshake"></i></a>
						<a class="dropdown-item" href="#">Log out <i class="fas fa-sign-out-alt"></i></a>
					</div>
				</div>
				');
			} else {
				echo('<a href="log-in.php" class="nav-link"><i class="fas fa-user"></i>Logg Inn</a>');
			}
			?>
			</li>
		</ul>
	</div>
</nav>
<nav class="navbar navbar-expand-lg container loggedin-menu">
	<div class="collapse navbar-collapse" id="navbarSupportedContent2">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="legg-ut-et-oppdrag.php"><i class="fa-regular fa-circle-plus"></i> Legg ut oppdrag</a></li>
			<li class="nav-item"><a class="nav-link" href="browse-helper.php"><i class="fa-regular fa-magnifying-glass"></i> Søk</a></li>
			<?php if ($loggin == true){
				echo('<li class="nav-item"><a href="meldinger.php" class="nav-link"><i class="fa-regular fa-comment"></i>  Meldinger</a></li>');
				echo('<li class="nav-item"><a href="mine-oppdrag.php" class="nav-link"><i class="fa-regular fa-suitcase"></i>  Mine oppdrag</a></li>');
			}?>
		</ul>
	</div>
</nav>