<!--Alert/Gmaps-->
<div class="modal fade" id="alert-gmaps">
	<div class="modal-dialog modal-dialog-centered text-center">
		<div class="modal-content">	
			<div class="modal-body grey-bg">
				<i class="fa-duotone fa-location-pin-slash icon-xxl danger m-3"></i>
				<h1>Vi beklager!</h1>
				<p class="lead">Det hender at google ikke klarer å finne postnummer som vi trenger for korrekt håndtering av oppdraget.</p>
				<p>Prøv å inkludere husnummer i gateadressen eller tast inn postnummeret nedenfor.</p>
				<div class="input-group mb-3 col-md-6 offset-md-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="zip"><i class="fa-solid fa-location-dot"></i></span>
				  </div>
				  <input type="text" class="form-control" placeholder="0000" aria-label="zip" aria-describedby="zip" pattern="[0-9]*" name="zip">
				</div>
			</div>
			<div class="modal-footer grey-bg justify-content-center">
				<ul class="nav nav-list g-10">
					<li class="nav-item"><a href="#" class="btn btn-light" aria-label="Close" data-dismiss="modal">Cancel</a></li>
					<li class="nav-item"><a href="#" class="btn btn-primary">Lukk</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>