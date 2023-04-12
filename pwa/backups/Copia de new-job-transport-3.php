<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
$title = "New Transport Job"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'page new-job no-back';
$heading_pwa = '<h1 class="text-white mt-1"><i class="fas fa-shipping-fast mr-2" aria-hidden="true"></i> New Transport Job</h1>';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
		<div class="newjob-content transport">
			<div class="progress-panel">
				<div class="progress">
					<div class="progress-bar" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar"  style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="container">	
				<form action="" class="squared-form">
					<div class="form-group">
						<label>Payment</label>
					</div>
					<ul class="nav nav-pills mb-3 pills-tab-arrows flex-wrap" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="totalt-fields-tab" data-toggle="pill" href="#totalt-fields" role="tab" aria-controls="totalt-fields" aria-selected="true">Totalt</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="prtime-field-tab" data-toggle="pill" href="#prtime-field" role="tab" aria-controls="prtime-field" aria-selected="false">Pr. time</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="tilbud-field-tab" data-toggle="pill" href="#tilbud-field" role="tab" aria-controls="tilbud-field" aria-selected="false">Tilbud ønskes</a>
						</li>
					</ul>
					<div class="tab-content pills-tab-arrows" id="pills-tabContent">
						<div class="tab-pane fade show active" id="totalt-fields" role="tabpanel" aria-labelledby="totalt-fields-tab">
							<div class="form-group d-flex justify-content-between align-items-center">
								<label for="totalpris">Totalpris</label>
								<div class="input-group w-auto">
									<input type="text" pattern="[0-9]*" inputmode="numeric"  id="totalpris" name="totalpris" placeholder="0.00">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2">kr.</span>
									</div>
								</div>
							</div>
							<p>Sett en fastpris for oppdraget. Godt betalte jobber får god og rask respons. Husk at hjelperen bruker tid og kanskje har kostnader med å komme seg til og fra jobbstedet. Fagfolk og hjelpere med god kompetanse ønsker ofte høyere betaling.</p>
						</div>
						<div class="tab-pane fade" id="prtime-field" role="tabpanel" aria-labelledby="prtime-field-tab">
							<div class="form-group d-flex justify-content-between align-items-center">
								<label for="totalpris-time">Totalpris</label>
								<div class="input-group w-auto">
									<input type="text" pattern="[0-9]*" inputmode="numeric"  id="totalpris-time" name="totalpris-time" placeholder="0.00">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2">kr.</span>
									</div>
								</div>
							</div>
							<div class="form-group d-flex justify-content-between align-items-center">
								<label for="forventet-antall" class="w-50">Forventet Antall Timer</label>
								<div class="input-group w-auto">
									<input type="text" pattern="[0-9]*" inputmode="numeric"  id="forventet-antall" name="forventet-antall" placeholder="0">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2">hr.</span>
									</div>
								</div>
							</div>
							<p>Sett en timepris for oppdraget. Oppgi også antall timer du mener at jobben vil ta. Timelønn kan ikke være under kr. 100.- for barn/ privat hjelp. Dersom du ønsker fagfolk eller bedrifter ber vi deg oppgi tariff eller høyere for den bransjen som er relevant.</p>
						</div>
						<div class="tab-pane fade" id="tilbud-field" role="tabpanel" aria-labelledby="tilbud-field-tab">
							<div class="form-group d-flex justify-content-between align-items-center">
								<label for="minstepris">Minstepris</label>
								<div class="input-group w-auto">
									<input type="text" pattern="[0-9]*" inputmode="numeric"  id="minstepris" name="minstepris" placeholder="0.00">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2">kr.</span>
									</div>
								</div>
							</div>
							<div class="form-group d-flex justify-content-between align-items-center">
								<label for="makspris" class="w-50">Makspris</label>
								<div class="input-group w-auto">
									<input type="text" pattern="[0-9]*" inputmode="numeric"  id="makspris" name="makspris" placeholder="0.00">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2">kr.</span>
									</div>
								</div>
							</div>
							<div class="form-check pt-0 checkbox-input"> 
								<input class="form-check-input" type="checkbox" name="hideBudget" id="hideBudget">
									<label class="form-check-label" for="hideBudget">Hide the budget</label>
							</div>
							<p class="filsonfont mt-1"><strong>If select this, the helpers will not see your budget and you might get more etimates not fitting your budget.</strong></p>
							<p>Be om tilbud på oppdraget ditt! - Du må oppgi et budsjett der minstepris er det laveste du anser som realistisk og makspris er det høyeste du ønsker å betale for oppdraget. Hjelpere vil etter beste evne gi deg tilbud innenfor rammene du setter.</p>
						</div>
					</div>

					<div class="form-group">
						<label for="time">Do you require professional?</label>
						<div class="buttonsForm d-flex">
							<div class="form-option">
								<input type="radio" name="professionalRequired" value="no" id="professionalNotRequired" checked>
								<label for="professionalNotRequired">No</label>
							</div>
							<div class="form-option">
								<input type="radio" name="professionalRequired" value="yes" id="professionalRequired">
								<label for="professionalRequired">Yes</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="job-title">Do you require inspection?</label>
						<div class="buttonsForm d-flex">
							<div class="form-option">
								<input type="radio" name="inspectionRequired" value="no" id="inspectionNotRequired" checked>
								<label for="inspectionNotRequired">No</label>
							</div>
							<div class="form-option">
								<input type="radio" name="inspectionRequired" value="yes" id="inspectionRequired">
								<label for="inspectionRequired">Yes</label>
							</div>
						</div>	
					</div>
					<p class="text-danger">I seems this job exceeds the small job rules of payouts. - You can still use a private helper but keep in mind that you have to report the salary to tax department when payout is larger then the allowed limit for small jobs, Also remember that you don’t have any guarantees or rights to complaint on task done by private persons.</p>
	
					<ul class="form-footer nav justify-content-between">
						<li><a class="btn btn-outline-primary" href="new-job-transport-1.html"><i class="fas fa-chevron-left"></i> Previous</a></li>
						<li><a class="btn btn-primary" href="new-job-transport-3.html"><i class="fas fa-check"></i> Post Work</a></li>
					</ul>	
				</form>
			</div>
		</div>
		<?php include ('template-parts/myjs.php')?>
		<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  </body>
</html>