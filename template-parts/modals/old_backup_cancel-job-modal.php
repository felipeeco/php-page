<!--CANCEL JOB MODAL-->
<div class="modal fade" id="cancel-job" tabindex="-1" role="dialog" aria-labelledby="cancel-jobLabel" aria-hidden="true">
	<div class="modal-dialog px-0  message-employer-modal">
		<div class="modal-content">
			<div class="modal-header px-3 px-md-5 pt-3 pt-md-5">
				<h5 class="modal-title" id="inspectionModalLabel"><i class="fas fa-slash overlay"></i><i class="fas fa-briefcase mr-3"></i> Cancel job</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="far fa-times-circle" style="color:#9B9B9B6F"></i></span>
				</button>
			</div>
			<form action="" class="pt-4" id="awardUser-form">
				<div class="modal-body">
					<div class="px-3 px-md-5">
						<div id="publish-job">
							<p>You are free to cansel your job at any time, however if you agreed with one of our helpers to do the job, you are oblicated to award the helper. See useragreement for more information.</p>
						</div>
						<p>If you agreed the job with one of these helpers please award below</p>
					</div>
					<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2 px-3 px-md-5">
						<div class="d-flex align-items-center">
							<img src="images/samples/7842e668c271f5b74dad2128f4097db5dc3f5.png" class="user">
							<div class="rating-info">
								<div class="personal-info">
									<span class="name">Fredrik Lien</span>
								</div>
								<div class="ratign">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="awardlabel">
							<input type="checkbox" id="user1" name="awardUser" value="user1">
							<label for="user1"><span class="selected"><i class="fas fa-check"></i> Selected</span> <span class="default">Award</span></label>
						</div>
					</div>
					<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2 px-3 px-md-5">
						<div class="d-flex align-items-center">
							<img src="images/samples/profile-sample-4.png" class="user">
							<div class="rating-info">
								<div class="personal-info">
									<span class="name">Tom Knudsen</span>
								</div>
								<div class="ratign">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="awardlabel">
							<input type="checkbox" id="user2" name="awardUser" value="user2">
							<label for="user2"><span class="selected"><i class="fas fa-check"></i> Selected</span> <span class="default">Award</span></label>
						</div>
					</div>
					<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2 px-3 px-md-5">
						<div class="d-flex align-items-center">
							<img src="images/samples/profile-sample-8.png" class="user">
							<div class="rating-info">
								<div class="personal-info">
									<span class="name">Stine Tveit</span>
								</div>
								<div class="ratign">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="awardlabel">
							<input type="checkbox" id="user3" name="awardUser" value="user3">
							<label for="user3"><span class="selected"><i class="fas fa-check"></i> Selected</span> <span class="default">Award</span></label>
						</div>
					</div>
				</div>

				<div class="modal-footer d-block text-center">
					<div>
						<button type="button" data-dismiss="modal" class="btn btn-danger show"><i class="fas fa-times"></i> Cancel</button>
					</div>
					<div>
						<button type="submit" class="btn btn-primary d-none px-4"><i class="fas fa-check"></i> Award Fredrik Lien</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>