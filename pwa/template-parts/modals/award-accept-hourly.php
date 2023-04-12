<!--Default-->
<div class="modal fade" id="award-accept-hourly">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">	
			<div class="modal-header grey-bg ">
				<h5 class="modal-title"><i class="fas fa-check" style="font-weight: bolder"></i> Accept job</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
			</div>
			<div class="modal-body grey-bg pt-0 pb-0">
				<p>You are offered the job <strong>#Job title#</strong>. Please check if details is as agreed</p>

					<div class="d-flex align-items-center g-20 mb-3">
						<div class="total-price-col">
							<h6 for="total-price-input" class="m-0">Agreed hourly price</h6>
							<span class="d-inline-block job-price white-bg mb-2 mt-2 p-2 rounded">450 Kr. /t</span>
						</div>
						<div class="timer-col">
							<h6 for="total-price-input" class="m-0">Agreed hours</h6>
							<span class="d-inline-block job-price white-bg mb-2 mt-2 p-2 rounded">10 tim</span>
						</div>
						
					</div>
					<div class="form-group">
						<h6>Agreement details</h6>
						<textarea class="form-control white-bg border-0 rounded" id="exampleFormControlTextarea2" rows="3" placeholder="Write agreement here…" disabled>Agreement as communicated in chat. (Chat log will be used for documentation in case of conflict)</textarea>
					</div>
					<div class="alert alert-danger" role="alert">Accept the job only if you accept the price and details</div>
			</div>
			<div class="modal-footer grey-bg">
					<a href="#" class="btn btn-danger" aria-label="Close" data-dismiss="modal"><i class="fas fa-times"></i> Deny</a>
					<a href="#" class="btn btn-primary">Confirm <i class="fas fa-check"></i></a>
			</div>
		</div>
	</div>
</div>