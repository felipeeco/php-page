<!--Default-->
<div class="modal fade" id="award-agreement">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">	
			<div class="modal-header gradient-bg">
				<h5 class="modal-title"><i class="fas fa-file-signature" style="font-weight: bolder"></i> Agreement</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
			</div>
			<div class="modal-body grey-bg">
				<div class="d-flex mb-3">
					<ul class="nav nav-pills" id="pills-tab" role="tablist"	>
					  <li class="nav-item">
						<a class="nav-link active" id="total-price-tab" data-toggle="pill" href="#total-price" role="tab" aria-controls="total-price" aria-selected="true">Total price</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="hourly-price-tab" data-toggle="pill" href="#hourly-price" role="tab" aria-controls="hourly-price" aria-selected="true">Hourly price</a>
					  </li>
					</ul>
					<div class="form-info white my-3 d-block" style="display: flex;flex-direction: row;align-items: center;padding: 0px 10px;gap: 10px;"><i class="far fa-info-circle"></i>Agreed price must be entered</div>
				</div>
				<div class="tab-content" id="pills-tab-content">
					<div class="tab-pane fade show active" id="total-price" role="tabpanel" aria-labelledby="total-price-tab">
						<form action="">
							<div class="d-flex align-items-center g-10">
								<label for="total-price-input" class="m-0">Enter agreed total price:</label>
								<div class="input-group w-25">
									<input type="text" class="form-control" placeholder="0.00" aria-label="total-price-input" aria-describedby="total-price-input" pattern="[0-9]*" name="total-price-input" required>
									<div class="input-group-append">
										<span class="input-group-text maingreen" id="total-price-input">Kr.</span>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="hourly-price" role="tabpanel" aria-labelledby="hourly-price-tab">
						<form action="">
							<div class="form-row">
								<div class="col-6 align-items-center g-10">
									<label for="total-price-input-hourly" >Agreed hourly price</label>
									<div class="input-group w-75">
										<input type="text" class="form-control" placeholder="0.00" aria-label="total-price-input-hourly" aria-describedby="total-price-input-hourly" pattern="[0-9]*" name="total-price-input-hourly" required>
										<div class="input-group-append">
											<span class="input-group-text maingreen" id="total-price-input-hourly">Kr./t</span>
										</div>
									</div>
								</div>
								<div class="custom-chevron-right col-1"></div>
								<div class="col-5 align-items-center g-10">
									<label for="agreed-hours" >Agreed hours</label>
									<div class="input-group w-50">
										<input type="text" class="form-control" placeholder="0" aria-label="agreed-hours" aria-describedby="agreed-hours" pattern="[0-9]*" name="agreed-hours" required>
										<div class="input-group-append">
											<span class="input-group-text maingreen" id="agreed-hours">T.</span>
										</div>
									</div>
								</div>
								
							</div>
						</form>
					</div>
					<hr>
					<div class="additionalinfo">
						<label for="validationServer03">Street address included house number for job start</label>
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="inputGroupPrepend3"><i class="fa-solid fa-location-dot"></i></span>
							</div>
							<input type="text" class="form-control" id="validationServer03" placeholder="eg. 34 St." required>
						</div>
						<br>
						 <div class="form-row">
							<div class="col-md-4">
							  <label for="validationDefault05">Zip</label>
							  <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
							</div>
							 <div class="col-md-8">
							  <label for="validationDefault04">State</label>
							  <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
							</div>
						  </div>
						
					</div>
					<hr>
					<div class="form-group">
						<label for="exampleFormControlTextarea2">Describe agreement</label>
						<textarea class="form-control white" id="exampleFormControlTextarea2" rows="3" placeholder="Write agreement here…"></textarea>
					</div>
					<div class="alert alert-danger" role="alert"><strong>#username#</strong> will be awarded if he or she confirm the agreement</div>
				</div>
			</div>
			<div class="modal-footer grey-bg">
					<a href="#" class="btn btn-light" aria-label="Close" data-dismiss="modal"><i class="fas fa-chevron-left"></i> Back</a>
					<a href="#" class="btn btn-primary">Next <i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</div>