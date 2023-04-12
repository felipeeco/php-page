<div class="modal fade" id="inspectionModal" tabindex="-1" role="dialog" aria-labelledby="inspectionModalLabel" aria-hidden="true">
<div class="modal-dialog px-3  message-employer-modal">
	<div class="modal-content">
		<div class="modal-header px-0 pt-3">
			<h5 class="modal-title d-flex" id="inspectionModalLabel" style="line-height: 1;">
				<div>
					<i class="fas fa-toolbox"></i><i class="fas fa-walking upper"></i> 
				</div>
				Inspection <br> agreement
			</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"><i class="far fa-times-circle" style="color:#9B9B9B6F "></i></span>
		</button>
		</div>
		<form action="" >
		<div class="modal-body">
			<div id="publish-job">
				<p>Use the chat to !nd a date and time for the inspection and enter the agreed time below to make a binding agreement. You will automaticly receive the needed contact information when the <strong>helper username</strong> confirm the agreement.</p>
				<hr>
			</div>
			<div class="form-row">
				<div class="col-6 col-xs-12">
					<label for="date">Date</label>
					<div class="input-group group-append">
						<input id="date" name="date" class="dateInput" type="text" placeholder="10/05/2021" />
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</div>
					</div>
				</div>

				<div class="col-6 col-xs-12">
						<label for="time">Time</label>
						<div class="input-group group-append">
							<select id="time" name="time" class="form-control">
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
							<span class="input-group-text"><i class="fas fa-clock"></i></span>
						</div>
					</div>

				<div class="col-6 my-2 col-xs-12">
					<label for="expirationTime">Expiration time</label>
					<div class="input-group group-append">
						<select id="expirationTime" name="expirationTime" class="form-control">
							<option value="3 hours">3 hours</option>
							<option value="6 hours" >6 hours</option>
							<option value="9 hours" >9 hours</option>
							<option value="12 hours" >12 hours</option>
							<option value="24 hours" >24 hours</option>
							<option value="48 hours" >48 hours</option>
						</select>
						<span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-6 my-2">
					<label for="zipcode">Zip code</label>
					<div class="input-group group-append b-all">
						<input type="text" name="zipcode" id="zipcode" class="form-control" value="523M32">
					</div>
				</div>
				<div class="col-6 my-2">
					<label for="state">State</label>
					<div class="input-group group-append b-all">
						<input type="text" name="state'" id="state'" class="form-control" placeholder="Møre og Romsdal" disabled>
					</div>
				</div>
			</div>
		</div>
		<p class="mb-0">Full address can be excanged after con!rmation</p>

		<div class="form-group">
			<div class="form-check form-check-inline align-items-baseline mr-0">
				<input class="form-check-input position-relative" style="top:5px" type="checkbox" id="inspectionRules" value="inspectionRules">
				<label class="form-check-label" for="inspectionRules">I understand that if the helper confirm within the given expiration time you are bounded by the agreement and need to pay the helper a cancellation fee of <span class="maingreen">#inspection fee#</span>. Please don’t give the job to anyone before all invited helpers have been on inspection.</label>
			</div>
		</div>
			<div class="modal-footer  pt-0">
			<button type="submit" class="btn btn-primary px-4"> Send for confirmation</button>
		</div>
	</div>
</div> 
</div>
	
<!-- Modal -->
	<div class="modal fade" id="acceptContract" tabindex="-1" role="dialog" aria-labelledby="acceptContractModalLabel" aria-hidden="true" >
		<div class="modal-dialog  message-employer-modal px-4">
			<div class="modal-content">
				<div class="modal-header pt-4 px-0">
					<h5 class="modal-title d-flex" id="acceptContractModalLabel" style="line-height: 1;">
						<div><i class="fas fa-handshake"></i><i class="fas fa-walking upper"></i> </div>
						Confirm <br> Inspection</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="far fa-times-circle" style="color:#9B9B9B6F "></i></span>
				</button>
				</div>
				<form action="" >
				<div class="modal-body">
					<div id="publish-job">
						<p class="pb-3 border-bottom">When you confirm the agreement you will receive mobile number for further direct communication.</p>
					</div>
					<label for="state">The location of the inspection is:</label>
						<div class="input-group group-append mb-2">
							<input type="text" name="state" id="state" class="form-control" value="5232 PARADIS" disabled>
							<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
						</div>
						<p>Full address can be excanged after confirmation</p>
					<div class="form-row">
						<div class="col-6 col-xs-12">
							<label for="dateConfirm">Date</label>
							<div class="input-group group-append">
								<input id="dateConfirm" name="dateConfirm" class="dateInput" type="text" value="10/05/2021" disabled />
								<div class="input-group-append">
									<span class="input-group-text text-light"><i class="fas fa-calendar-alt"></i></span>
								</div>
							</div>
						</div>

						<div class="col-6 col-xs-12">
							<label for="time">Time</label>
							<div class="input-group group-append">
								<select id="time" name="time" class="form-control" disabled>
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
								<span class="input-group-text text-light"><i class="fas fa-clock"></i></span>
							</div>
						</div>
						<div class="col-12 mt-2">
							<p>This time don’t fit me. <a href="#">Suggest another time</a>.</p>
						</div>

					</div>
				</div>
				
				
				<div class="form-group">
					<div class="form-check form-check-inline align-items-baseline mr-0">
						<input class="form-check-input position-relative" style="top:5px" type="checkbox" id="confirmInspectionCheckbox" value="confirmInspectionCheckbox">
						<label class="form-check-label" for="confirmInspectionCheckbox">I understand that I am responsable for follow up the agreement after confirming. I can clamin am cansellation fee of <span>#unspection fee#</span> if employer cansel the inspection without you to blame and this fee will cover Minsmajobb´s inspection fee.</label>
					</div>
				</div>
					<div class="modal-footer">
					<button type="submit" class="btn btn-primary px-4"> Confirm agreement</button>
				</div>
			</div>
		</div> 
	</div>
	
	
<div class="modal fade" id="calculatorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="greybox-holder job-calculator pb-3">
					<div class="title d-flex">
						<p><i class="fas fa-calculator mr-2"></i> Job Calculator</p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fal fa-times"></i>
						</button>
					</div>

					<form action="" class="calculator-form">

						<div class="form-group form-row">
							<label for="expense" class="col-7 col-form-label">Your expenses</label>
							<div class="col-5 input-group">
							<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="expense" value="500">
							<div class="input-group-append">
								<div class="input-group-text">.- kr</div>
							</div>
							</div>
						</div>
						<div class="form-group form-row">
							<label for="hourlyPayment" class="col-7 col-form-label">Wanted hourly payment</label>
							<div class="col-5 input-group">
							<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="hourlyPayment" value="250">
							<div class="input-group-append">
								<div class="input-group-text">.- kr</div>
							</div>
							</div>
						</div>
						<div class="form-group form-row">
							<label for="estimatedHours" class="col-7 col-form-label ">Estimated used hours</label>
							<div class="col-5 input-group numberInput">
							<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="estimatedHours" value="3">
							<div class="input-group-append">
								<div class="input-group-text">hours</div>
							</div>
							</div>
						</div>
						<div class="form-group form-row jobfee">
							<label for="jobFee" id="toggleTooltip" class="col-7 col-form-label">Job fee <i class="fal fa-info-circle"></i>
								<div class="feeToltip">
									<h5>Job fee</h5> 
									<p>Job fee is automatically calculated and will sometime be too low or too high for the actual job. However the fee is the same for all helpers that are interested in this job.</p>
									<p>Always include the job fee in your calculation so you get your expenses covered by the job owner if you get the job</p>
								</div>
							</label>
							<div class="col-5 input-group">
							<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="jobFee" value="355" disabled>
							<div class="input-group-append">
								<div class="input-group-text">.- kr</div>
							</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary my-2"><i class="fas fa-calculator"></i> Calculate</button>
						
						<div class="correctJobFee mb-2">
							<p>Correct price for this job is:</p>
							<p class="price">1605 <span>.- kr</span></p>
						</div>
					
						
						<small class="d-block text-center" style="color:#9A9A9A;">Remember to always include the job fee in your estimate.</small>
					</form>
				</div>

			</div>
		</div>
	  </div>