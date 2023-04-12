<!--
Name: Menu Sidebar
Status: User Logged In
-->
<div id="mySidenav" class="sidenav <?php if ($loggin == false){echo ('not-logged-in');}?>" style="width: 100%">
	<div class="nav-profile">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
	</div>
	<!--CALLING THE SAME LOG IN LAYOUT WITH NO LABELS-->
	<div class="loggin-pwa-sidenav">
		<h1>Hey you!</h1>
		<p>Log in or register for free</p>
		<form action="dashboard.php">
			<div class="form-group ">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-at"></i></span>
					</div>
					<input type="text" name="emailormobile" id="" placeholder="Epost / Mobil" class="form-control">
				</div>
			</div>
			<div class="form-group ">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-lock"></i></span>
					</div>
					<input type="password" name="Password" id="" placeholder="Passord" class="form-control">
				</div>
			</div>
			<div class="form-group ">
				<button type="submit" class="btn btn-primary">Logg inn</button>
				<div class="form-group form-check">
					<label class="form-check-label text-center" for="exampleCheck1">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					&nbsp;Husk meg på denne maskinen</label>
				</div>
			</div>
		</form><br>
		<div class="d-flex login-links justify-content-around">
			<a href="#">Glemt passordet?</a>
			<a href="register.html" class="newaccount">Registrer ny bruker</a>
		</div>
	</div>
	<hr>
	<ul class="navbar-nav mr-auto nav-light">
		<li class="nav-item"><a href="" class="nav-link">Om oss</a></li>
		<li class="nav-item"><a href="" class="nav-link">Våre vurderinger</a></li>
		<li class="nav-item"><a href="" class="nav-link">Tjenesteavtale</a></li>
		<li class="nav-item"><a href="" class="nav-link">Kundeservice</a></li>
	</ul>
</div>