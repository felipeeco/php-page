<form>
	<div class="form-info grey-bg"><i class="fal fa-info-circle"></i>Your helper profile is used when you o"er help on our site.</div>
	<div class="form-group">
		<label for="name">Helper username</label>
		<div  class="form-text">The username cannot be more then 12 characters..</div>
		<input type="text" maxlength="12" placeholder="TheHelper">
	</div>
	<div class="form-group form-row mt-4">
		<div class="col-md-12 mb-4 mb-md-0">
			<label for="address">Street address</label>
			<div  class="form-text">Its important that your street address is correct so local emplyers see how close you are.</div>
			<input name="address" type="text" value="The Street road 55">
		</div>
		<div class="col-md-6 mb-4 mb-md-0">
			<label for="zip">Zip</label>
			<div  class="form-text">Enter your zip code</div>
			<input name="zip" type="text" placeholder="5555">
		</div>
		<div class="col-md-6">
			<label for="state">Location</label>
			<div  class="form-text">Automaticly detected</div>
			<input name="state" type="text" value="The place">
		</div>
	</div>
	<div class="form-group form-check mt-1 mb-4">
		<input type="checkbox" class="form-check-input" id="profileSettingsCheck">
		<label class="form-check-label" for="profileSettingsCheck">I want my helper profile to be public <span>This means that inplyers can search you up and contact you with jobs.</span></label>
	</div>
	<div id="public-profile-container" class="">
		<form>
			<div class="form-group mb-4 mb-md-0">
				<label for="">Write some information on your public profile</label>
				<div  class="form-text">Use some time here. Make sure that you text shows your skills and make emplyers want to contact you directly. - Contact information in discription is not allowed.</div>
				<textarea class="form-control bg-white" id="" rows="4" ></textarea>
			</div>
			<div class="form-group">
				<label for="lastname">Select the type of work you are interrested in</label>
				<div  class="form-text">Emplyers will see the type of jobs you are interrested in.</div>
			</div>
			<div class="form-row">
				<div class="col-lg-4">
					<h2 for="">Category 1</h2>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck1">
						<label class="form-check-label" for="profileSettingsCheck1"><span>Subcategory 1</span></label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck2">
						<label class="form-check-label" for="profileSettingsCheck2"><span>Subcategory 1</span></label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck3">
						<label class="form-check-label" for="profileSettingsCheck3"><span>Subcategory 1</span></label>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 for="">Category 1</h2>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck4">
						<label class="form-check-label" for="profileSettingsCheck4"><span>Subcategory 2</span></label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck5">
						<label class="form-check-label" for="profileSettingsCheck5"><span>Subcategory 2</span></label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck6">
						<label class="form-check-label" for="profileSettingsCheck6"><span>Subcategory 2</span></label>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 for="">Category 1</h2>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck7">
						<label class="form-check-label" for="profileSettingsCheck7"><span>Subcategory 3</span></label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck8">
						<label class="form-check-label" for="profileSettingsCheck8"><span>Subcategory 3</span></label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="profileSettingsCheck9">
						<label class="form-check-label" for="profileSettingsCheck9"><span>Subcategory 3</span></label>
					</div>
				</div>
			</div>
			<div class="form-group mt-4">
				<div class="row">
					<div class="col-md-7">
						<label for="professionalCompany">Are you a professional or a company?</label>
						<div class="form-text">If so, select your profession in the rolldown</div>
						<div class="position-relative">
							<select class="form-control custom-select" id="report-options">
								<option value="" disabled selected>Rolldown</option>
								<option value="1">Bookkeeper</option>
								<option value="2">Chef</option>
								<option value="3">Builder</option>
								<option value="4">Maker</option>
							</select>
						</div>
					</div>
					<div class="col-md-5 pl-md-0 pr-md-3 mt-3 mt-md-0">
						<label for="hour">Enter your hourly payment</label>
						<div  class="form-text">Empty will show as “To be agreed”</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="hourrate"><i class="fas fa-clock"></i></span>
							</div>
							<input type="text" class="form-control" aria-describedby="hourrate" >
							<div class="input-group-append">
								<span class="input-group-text" id="hourrate">/ time</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<button class="btn btn-primary" type="button">Save Changes</button><br><br>
	</form>