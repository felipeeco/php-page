<div class="modal fade" id="inspectionModal" tabindex="-1" role="dialog" aria-labelledby="inspectionModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header gradient-bg">
				<h5 class="modal-title" id="inspectionModalLabel"><i class="fas fa-file-search"></i>  Avtale om befaring</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
			</button>
			</div>
			<div class="modal-body grey-bg">
				<p>Bruk chatten til å diskutere tidspunkt som passer for begge parter og skriv dette inn i feltene nedenfor. Du vil automatisk få nødvendig kontaktinfirmasjon når oppdragsgiver bekrefter tid og sted for befaringen.</p>
				<form action="">
					<div class="form-row">
						<div class="col-md-4 mb-3">
							<label for="date">Date</label>
							<div class="input-group">
								<input type="date" class="form-control" placeholder="Date" aria-label="Date" aria-describedby="date">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2"><i class="fa-regular fa-calendar-days"></i></span>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="time">Time</label>
							<div class="input-group">
									<select class="custom-select" id="time">
										<option value="08:00">08:00</option>
										<option value="08:30" >08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
									</select>
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-clock"></i></span>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="expirationTime">Expiration time</label>
							<div class="input-group">
									<select class="custom-select" id="expirationTime">
										<option value="3 hours">3 hours</option>
										<option value="6 hours" >6 hours</option>
										<option value="9 hours" >9 hours</option>
										<option value="12 hours" >12 hours</option>
										<option value="24 hours" >24 hours</option>
										<option value="48 hours" >48 hours</option>
									</select>
								<div class="input-group-append">
									<span class="input-group-text"><i class="fa-solid fa-hourglass-clock"></i></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4 mb-3">
							<label for="Postnr">Postnr</label>
							<div class="input-group">
							 	<input type="text" class="form-control" placeholder="0000" aria-label="zip" aria-describedby="zip" pattern="[0-9]*" name="zip">
								<div class="input-group-append">
									<span class="input-group-text" id="zip"><i class="fa-solid fa-location-dot"></i></span>
								</div>
							</div>
						</div>
						<div class="col-md-8 mb-3">
							<label for="Postnr">Sted</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="city" Value="Oslo" aria-label="city" aria-describedby="city" name="city" disabled>
								<div class="input-group-append">
									<span class="input-group-text" id="city"><i class="fa-solid fa-house"></i></span>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="form-info mt-3"><i class="fa-regular fa-circle-exclamation"></i> Full adresse kan utveksles etter at befaring er bekreftet</div>
				<div class="form-group">
					<div class="form-check form-check-inline align-items-baseline mr-0">
						<input class="form-check-input position-relative" style="top:5px" type="checkbox" id="inspectionRules" value="inspectionRules">
						<label class="form-check-label" for="inspectionRules">I understand that if the helper confirm within the given expiration time you are bounded by the agreement and need to pay the helper a cancellation fee of <span class="maingreen">#inspection fee#</span>. Please don’t give the job to anyone before all invited helpers have been on inspection.</label>
					</div>
				</div>
			</div>
			<div class="modal-footer grey-bg">
				<button type="submit" class="btn btn-primary w-100">Be om bekreftelse</button>
			</div>
		</div>
	</div> 
</div>