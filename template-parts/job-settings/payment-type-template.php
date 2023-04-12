<!-- Nav tabs -->
						<ul class="nav nav-pills" id="myTab" role="tablist">
						  <li class="nav-item">
							<a class="nav-link active" id="totalt-tab" data-toggle="tab" href="#totalt" role="tab" aria-controls="totalt" aria-selected="true">Totalt</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" id="time-tab" data-toggle="tab" href="#time" role="tab" aria-controls="time" aria-selected="false">Pr. time</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" id="tilbud-tab" data-toggle="tab" href="#tilbud" role="tab" aria-controls="tilbud" aria-selected="false">Tilbud ønskes</a>
						  </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade show pt-4 active" id="totalt" role="tabpanel" aria-labelledby="totalt-tab">
								<div class="row">
									<label for="" class="col-6  col-md-5col-form-label">Enter your total cost here:</label>
									<div class="input-group mb-4 col-6 col-md-4">
										<input name="totalcost" type="decimal" inputmode="decimal" class="form-control form-control-lg text-right" aria-label="Amount" placeholder="0.00" aria-describedby="totalcostfeedback">
										<div class="input-group-append">
											<span class="input-group-text">Kr.</span>
										</div>
									</div>
									<div id="totalcostfeedback" class="invalid-feedback">
											Enter total cost correctly
									</div>
								</div>
								<div class="form-info bg-grey">Sett en fastpris for oppdraget. Godt betalte jobber får god og rask respons. Husk at hjelperen bruker tid og kanskje har kostnader med å komme seg til og fra jobbstedet. Fagfolk og hjelpere med god kompetanse ønsker ofte høyere betaling.</div>
							</div>
							<div class="tab-pane fade pt-4" id="time" role="tabpanel" aria-labelledby="time-tab">
								<div class="row">
									<label for="" class="col-7 col-sm-5 col-form-label">Timepris:</label>
									<div class="col-5 col-sm-3">
										<div class="input-group mb-3">
											<input type="decimal" inputmode="decimal" class="form-control" id="autoSizingInputGroup" placeholder="0.00">
											<div class="input-group-append">
												<div class="input-group-text">Kr.</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<label for="" class="col-7 col-sm-5 col-form-label">Forventet antall timer:</label>
									<div class="col-5 col-sm-3">
										<div class="input-group mb-3">
											<input type="decimal" inputmode="decimal" class="form-control" id="autoSizingInputGroup" placeholder="0">
											<div class="input-group-append">
												<div class="input-group-text">Tim.</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-info bg-grey">Sett en fastpris for oppdraget. Godt betalte jobber får god og rask respons. Husk at hjelperen bruker tid og kanskje har kostnader med å komme seg til og fra jobbstedet. Fagfolk og hjelpere med god kompetanse ønsker ofte høyere betaling.</div>
							</div>
							<div class="tab-pane fade pt-4" id="tilbud" role="tabpanel" aria-labelledby="tilbud-tab">
								<div class="row">
									<label for="" class="col-7 col-sm-5 col-form-label">Minimum cost:</label>
									<div class="col-5 col-sm-3">
										<div class="input-group mb-3">
											<input type="decimal" inputmode="decimal" class="form-control" id="autoSizingInputGroup" placeholder="0.00">
											<div class="input-group-append">
												<div class="input-group-text">Kr.</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<label for="" class="col-7 col-sm-5 col-form-label">Maximum cost:</label>
									<div class="col-5 col-sm-3">
										<div class="input-group mb-3">
											<input type="decimal" inputmode="decimal" class="form-control" id="autoSizingInputGroup" placeholder="0.00">
											<div class="input-group-append">
												<div class="input-group-text">Kr.</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-info bg-grey">Be om tilbud på oppdraget ditt! - Du må oppgi et budsjett der minstepris er det laveste du anser som realistisk og makspris er det høyeste du ønsker å betale for oppdraget. Hjelpere vil etter beste evne gi deg tilbud innenfor rammene du setter.</div>
							</div>
						</div>