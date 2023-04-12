<!--estimate-or-inspect-->
<!--el ID y el nombre del archivo seran los mismo = estimate-or-inspects-->
<div class="modal fade" id="estimate-or-inspect">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">	
			<div class="modal-header gradient-bg pb-3">
				<h5 class="modal-title"><i class="fa-solid fa-circle-exclamation"></i> Estimate or inspect</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
			</div>
			<div class="modal-body grey-bg">
				<ul class="nav nav-pills" id="pills-tab" role="tablist"	>
				  <li class="nav-item">
					<a class="nav-link active" id="pills-discuss-job-tab" data-toggle="pill" href="#pills-discuss-job" role="tab" aria-controls="pills-discuss-job" aria-selected="true">Discuss the job</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="pills-inspection-tab" data-toggle="pill" href="#pills-inspection" role="tab" aria-controls="pills-inspection" aria-selected="true">Request an inspection</a>
				  </li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-discuss-job" role="tabpanel" aria-labelledby="pills-discuss-job-tab">
						<div class="form-info white my-3">Choose this if the job can be discussed in the chat without need of inspection.</div>
						<p class="mb-4">This option is for jobs where inspection is not needed. Save yourself for inspection fees by not agreeing to direct communication before or after you got the job.</p>
						<div class="d-flex"> 
							<div class="mr-3">
								<h6>No job, no fee</h6>
								<p class="mb-0">If you don't get the job and direct communication with job owner is not initiated. </p>
							</div>
							<span class="job-price">0.-</span>
						</div>
						<hr>
						<div class="d-flex">
							<div class="mr-3">
								<h6>Inspection fee if don't get the job</h6>
								<p class="mb-0">If you for some reason need to communicate with the employer outside our chat.</p>
							</div>
							<span class="job-price">45.-</span>
						</div>
						<hr>
						<div class="d-flex">
							<div class="mr-3">
								<h6>If you get the job</h6>
								<p class="mb-0">Fee if you get the job (Inspection fee will never come on top of this fee). </p>
							</div>
							<span class="job-price">75.-</span>
						</div>
					</div>

					<div class="tab-pane fade" id="pills-inspection" role="tabpanel" aria-labelledby="pills-inspection-tab">
						<div class="form-info white my-3">This choice is if you have to see the job before agree on price.</div>
						<p class="mb-4">Requesting inspection will let you write about yourself or your company. If the job owner wants you to come and inspect the job the chat will be opened and you can freely exchange contact information and go on inspection.</p>
						<div class="d-flex"> 
							<div class="mr-3">
								<h6>Request is denied/ unanswered</h6>
								<p class="mb-0">If you don't get the job and direct communication with job owner is not initiated. </p>
							</div>
							<span class="job-price">0.-</span>
						</div>
						<hr>
						<div class="d-flex">
							<div class="mr-3">
								<h6>Inspection fee if don't get the job</h6>
								<p class="mb-0">If the job owner accept your request to inspect the job, this fee will be deducted if you dont get the job.</p>
							</div>
							<span class="job-price">45.-</span>
						</div>
						<hr>
						<div class="d-flex">
							<div class="mr-3">
								<h6>If you get the job</h6>
								<p class="mb-0">Fee if you get the job (Inspection fee will never come on top of this fee). </p>
							</div>
							<span class="job-price">75.-</span>
						</div>
	
					</div>
				</div>
			</div>
			<div class="modal-footer grey-bg">
				<a href="#" class="btn btn-light" aria-label="Close" data-dismiss="modal"><i class="fas fa-times" style="font-weight: normal"></i> Cancel</a>
				<a href="#" class="btn btn-primary" id="discuss-job-btn" data-toggle="modal" data-target=""> Discuss the Job</a>
				<!---show when the other tap is active--><a href="#" class="btn btn-primary d-none" id="request-inspection-btn"> Request an inspection</a>
			</div>
		</div>
	</div>
</div>
