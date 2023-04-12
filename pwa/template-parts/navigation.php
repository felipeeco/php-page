<div class="box-bar-desk box-bar d-sm-none hide-msg-panel">
	<div class="container">
		<div class="row">
			<div class="col-3"><a href="legg-ut-et-oppdrag.php" class="link <?php if ($title == 'Legg ut et oppdrag'){echo'active';}?>"><i class="fa-light fa-circle-plus"></i><span class="text">Legg ut oppdrag</span></a></div>
			<div class="col-3"><a href="messages.php" class="link <?php if ($title == 'Meldinger'){echo'active';}?>"><i class="fa-light fa-comment"></i><span class="text">Meldinger<span class="notification-num"></span></span></a></div>
			<div class="col-3"><a href="browse-job.php" class="link <?php if ($title == 'Sok Oppdrag' || $title == 'Sok Hjelpere'){echo'active';}?>"><i class="fa-light fa-magnifying-glass"></i><span class="text">Søk</span></a></div>
			<div class="col-3">
				<a href="<?php if($loggin == true){ echo('dashboard.php');} else if ($loggin == false) { echo('../log-in.php');}?>" class="link <?php if ($title == 'Dashboard'){echo'active';}?>">
					<i class="fa-light fa-user"></i>
					<span class="text">
						<?php if($loggin == true){ echo('Hjem');} else if ($loggin == false) { echo('Logg inn');}?>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>