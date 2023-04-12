<!DOCTYPE html>
<?php
$title = 'Mine oppdrag';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back';
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = 'images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<?php include ('template-parts/modals/repost_job.php'); ?>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-3 profile-information centered">
						<?php include ('template-parts/user-profile.php');?>
					</div>
					<div class="col-md-9 my-jobs">
						<h1 class="title"><?php echo ($title)?></h1>
						<div class="d-flex my-jobs-type">
							<h2><i class="fas fa-user-tie"></i> As an employer</h2>
							<h2><i class="fas fa-hand-paper"></i> As a helper</h2>
						</div>
						<ul class="nav nav-pills nav-pills-sm mb-4 mt-4" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Active <div class="unreadedmessages-alert">3</div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Expired jobs <div class="unreadedmessages-alert">3</div></a>
							</li>
							 <li class="nav-pill-divider"></li>
							<li class="nav-item">
								<a class="nav-link" id="pills-offered-tab" data-toggle="pill" href="#pills-offered" role="tab" aria-controls="pills-offered" aria-selected="false">Offered help <div class="unreadedmessages-alert">3</div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-won-tab" data-toggle="pill" href="#pills-won" role="tab" aria-controls="pills-won" aria-selected="false">Won <div class="unreadedmessages-alert">3</div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-lost-tab" data-toggle="pill" href="#pills-lost" role="tab" aria-controls="pills-lost" aria-selected="false">Lost help <div class="unreadedmessages-alert">3</div></a>
							</li>
						</ul>
						
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active active-jobs" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="display-results">
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Bring this to my house</h1>
											<div class="information">
												<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a></div>
												<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Transport</a></div>
												<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>As soon as possible</a></div>
											</div>
											<p class="price">1250 kr</p>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="edit-job-transport.html" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Job</a>
											<div class="text-center text-md-right active-job-info">
												<div class="d-flex justify-content-end my-2">
													<div class="job-data badge">Visits <b>43</b></div>
													<div class="job-data badge mx-2">Interested <b>3</b></div>
													<div class="job-data badge ">Invited <b>1</b></div>
												</div>
												<p class="expiration-date mb-1"><i class="fas fa-business-time maingreen"></i> Expires <b>10.05.2021</b></p>
												<p>You can invite helpers by browsing <a href="#">helper profiles</a></p>
											</div>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information">
												<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a></div>
												<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
												<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>23/07/19</a></div>
											</div>
											<p class="price">1250 kr</p>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="edit-job-washing.html" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Job</a>
											<div class="text-center text-md-right active-job-info">
												<div class="d-flex justify-content-end my-2">
													<div class="job-data badge">Visits <b>43</b></div>
													<div class="job-data badge mx-2">Interested <b>3</b></div>
													<div class="job-data badge ">Invited <b>1</b></div>
												</div>
												<p class="danger-text mb-0"><i class="fas fa-user-lock"></i> This job accessible by invited helpers only</p>
												<a href="#" role="button" data-toggle="modal" data-target="#invited-helpers">See Invited Helpers</a>
												<p class="expiration-date my-1"><i class="fas fa-business-time maingreen"></i> Expires <b>10.05.2021</b></p>
											</div>

											

										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Do other thing in here</h1>
											<div class="information">
												<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a></div>
												<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Other</a></div>
												<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>22/06/19</a></div>
											</div>
											<p class="price">1250 kr</p>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="edit-job.html" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Job</a>
											<div class="text-center text-md-right active-job-info">
												<div class="d-flex justify-content-end my-2">
													<div class="job-data badge">Visits <b>43</b></div>
													<div class="job-data badge mx-2">Interested <b>3</b></div>
													<div class="job-data badge ">Invited <b>1</b></div>
												</div>
												<p class="expiration-date mb-1"><i class="fas fa-business-time maingreen"></i> Expires <b>10.05.2021</b></p>
												<p>You can invite helpers by browsing <a href="#">helper profiles</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade expired-jobs" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<div class="display-results">
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-5">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a></div>
												<div class="info location"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
												<div class="info date"><a href="#" class="date-link"><i class="fas fa-check-circle"></i>3rd June 2019</a></div>
											</div>
											<div class="d-flex align-items-center flex-wrap">
												<p class="price">1250 kr</p>
												<div class="ml-2">
													<div class="job-data badge">Visits <strong>43</strong></div>
													<div class="job-data badge mx-2">Interested <b>3</b></div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-4">
											<span class="views"><div class="profileimage user-4322321"></div> <a href="#">Gabi</a> completed this job</span>
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-redo-alt"></i> Re post this job</a>
											<div class="d-flex justify-content-center">
												<a href="#" class="mr-3 modal-link" role="button" data-toggle="modal" data-target="#contact-helpers"><i class="fal fa-users"></i>Contact</a>
												<a href="#" class="modal-link pink" role="button" data-toggle="modal" data-target="#delete-job"><i class="fal fa-trash-alt"></i>Delete job</a>
											</div>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-5">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a></div>
												<div class="info location"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
												<div class="info date"><a href="#" class="date-link"><i class="fas fa-check-circle"></i>3rd June 2019</a></div>
											</div>
											<div class="d-flex align-items-center flex-wrap">
												<p class="price">1250 kr</p>
												<div class="ml-2">
													<div class="job-data badge">Visits <strong>43</strong></div>
													<div class="job-data badge mx-2">Interested <b>3</b></div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-4">
											<span class="views"><div class="profileimage user-4322321"></div> <a href="#">Gabi</a> completed this job</span>
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-redo-alt"></i> Re post this job</a>										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-5">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a></div>
												<div class="info location"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
												<div class="info date"><a href="#" class="date-link"><i class="fas fa-check-circle"></i>3rd June 2019</a></div>
											</div>
											<div class="d-flex align-items-center flex-wrap">
												<p class="price">1250 kr</p>
												<div class="ml-2">
													<div class="job-data badge">Visits <strong>43</strong></div>
													<div class="job-data badge mx-2">Interested <b>3</b></div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-4">
											<span class="views"><div class="profileimage user-4322321"></div> <a href="#">Gabi</a> completed this job</span>
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-redo-alt"></i> Re post this job</a>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade pills-offered" id="pills-offered" role="tabpanel" aria-labelledby="pills-offered-tab">
								<div class="display-results">
									<div class="row result  pink-tooltip">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info date" ><a href="#" class="date-link" data-toggle="tooltip" data-container=".pink-tooltip" data-placement="bottom" title="Job expires"  ><i class="fas fa-hourglass-start" ></i></i>10.10.2020</a></div>
												<div class="info category"><a href="" class="caegory-btn"   data-toggle="tooltip" data-placement="bottom" title="Competitors"><i class="fas fa-users"></i> 3</a></div>
												<div class="info location green-tooltip"><a href="#" class="address" data-container=".green-tooltip" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
											</div>
											<div class="d-flex info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Released in  <span>3 Days</span></p>
											</div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-comment"></i> Chat</a>
											<a href="#" class="btn btn-secondary" role="button"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Bring some boxes to my daug...</h1>
											<div class="information flex flex-wrap">
												<div class="info date"><a href="#" class="date-link"  data-container=".pink-tooltip" data-toggle="tooltip" data-placement="bottom"   title="Job expires"><i class="fas fa-hourglass-start"></i>10.10.2020</a></div>
												<div class="info category"><a href="" class="caegory-btn"   data-toggle="tooltip" data-placement="bottom" title="Competitors"><i class="fas fa-users"></i> 3</a></div>
												<div class="info location"><a href="#" class="address" data-toggle="tooltip" data-placement="bottom" title="Fee" ><i class="fas fa-comment-dollar"></i> 59.-</a></div>
											</div>
											<div class="d-flex info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Released in  <span>3 Days</span></p>
											</div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-comment"></i> Chat</a>
											<a href="#" class="btn btn-secondary" role="button"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>HELP! With my garden</h1>
											<div class="information flex flex-wrap">
												<div class="info date"><a href="#" class="date-link" data-toggle="tooltip" data-placement="bottom" title="Job expires"><i class="fas fa-hourglass-start"></i>10.10.2020</a></div>
												<div class="info category"><a href="" class="caegory-btn"  data-toggle="tooltip" data-placement="bottom" title="Competitors"><i class="fas fa-users"></i> 3</a></div>
												<div class="info location"><a href="#" class="address" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
											</div>
											<div class="d-flex info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Released in  <span>3 Days</span></p>
											</div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-comment"></i> Chat</a>
											<a href="#" class="btn btn-secondary" role="button"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade pills-won" id="pills-won" role="tabpanel" aria-labelledby="pills-won-tab">
								<div class="display-results">
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="date-link" data-toggle="tooltip" data-placement="bottom" title="Value"><i class="fas fa-money-bill-wave-alt" ></i> 1200 kr.</a></div>
												<div class="info fee"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
												<div class="info category"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Date"><i class="fas fa-calendar-check"></i> 05.10.2020</a></div>
											</div>
											<div class="d-flex info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Status: <span>Collected</span></p>
											</div>
											<div class="info-owner"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Job owner"><i class="fas fa-user-tie"></i> carter.lambert</a></div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-comment"></i> Chat <span>12 days left <i class="fal fa-clock"></i></span></a>
											<a href="#" class="btn btn-secondary btn-rate" role="button"><i class="fas fa-star"></i> Rate the user!</a>
											
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>I forgot My Keys</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="date-link"  data-toggle="tooltip" data-placement="bottom" title="Value"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a></div>
												<div class="info fee"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
												<div class="info category"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Date"><i class="fas fa-calendar-check"></i> 05.10.2020</a></div>
											</div>
											<div class="d-flex info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Status: <span>Collected</span></p>
											</div>
											<div class="info-owner"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Job owner"><i class="fas fa-user-tie"></i> carter.lambert</a></div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-comment"></i> Chat <span>12 days left <i class="fal fa-clock"></i></span></a>
											<div class="rating-info">
												<div class="ratign">
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
													<p>Your rating at this job</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="date-link" data-toggle="tooltip" data-placement="bottom" title="Value"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a></div>
												<div class="info fee"><a href=""  data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
												<div class="info category"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Date"><i class="fas fa-calendar-check"></i> 05.10.2020</a></div>
											</div>
											<div class="d-flex info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Status: <span>Collected</span></p>
											</div>
											<div class="info-owner"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Job owner"><i class="fas fa-user-tie"></i> carter.lambert</a></div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-primary expired" role="button" data-toggle="modal" data-target="#repost_job"><i class="fas fa-comment-slash"></i> Chat expired</a>
											<div class="rating-info">
												<div class="ratign">
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
													<p>Your rating at this job</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade pills-lost" id="pills-lost" role="tabpanel" aria-labelledby="pills-lost-tab">
								<div class="display-results">
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="date-link" data-toggle="tooltip" data-placement="bottom" title="Value"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a></div>
												<div class="info category"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
												<div class="info"><a href="#" class="address" data-toggle="tooltip" data-placement="bottom" title="Date"><i class="fas fa-calendar-check"></i> 05.10.2020</a></div>
											</div>
											<div class="d-flex information info-job">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Status: <span>Freed</span></p>
											</div>
											<div class="information info-owner"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Job owner"><i class="fas fa-user-tie"></i> carter.lambert</a></div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#repost_job"><i class="fal fa-trash-alt"></i> Delete</a>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="date-link" data-toggle="tooltip" data-placement="bottom" title="Value"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a></div>
												<div class="info category"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
												<div class="info"><a href="#" class="address" data-toggle="tooltip" data-placement="bottom" title="Date"><i class="fas fa-calendar-check"></i> 05.10.2020</a></div>
											</div>
											<div class="d-flex info-job information">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Status: <span>Freed</span></p>
											</div>
											<div class="info-owner information"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Job owner"><i class="fas fa-user-tie"></i> carter.lambert</a></div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#repost_job"><i class="fal fa-trash-alt"></i> Delete</a>
										</div>
									</div>
									<div class="row result">
										<div class="col-md-4 col-lg-3 image">
											<div class="wrap"><img src="images/samples/sample-02.jpg" alt=""></div>
										</div>
										<div class="col-md-8 col-lg-6">
											<h1>Washing house</h1>
											<div class="information flex flex-wrap">
												<div class="info location"><a href="#" class="date-link" data-toggle="tooltip" data-placement="bottom" title="Value"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</a></div>
												<div class="info category"><a href="" class="caegory-btn" data-toggle="tooltip" data-placement="bottom" title="Fee"><i class="fas fa-comment-dollar"></i> 59.-</a></div>
												<div class="info"><a href="#" class="address" data-toggle="tooltip" data-placement="bottom" title="Date"><i class="fas fa-calendar-check"></i> 05.10.2020</a></div>
											</div>
											<div class="d-flex info-job information">
												<p>Transaction ID: <span>1266735621</span></p>
												<p>Status: <span>Freed</span></p>
											</div>
											<div class="info-owner information"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Job owner"><i class="fas fa-user-tie"></i> carter.lambert</a></div>
										</div>
										<div class="col-md-12 col-lg-3">
											<a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#repost_job"><i class="fal fa-trash-alt"></i> Delete</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="how-does-it-work">
			<div class="container">
				
				<div class="legal">
					<p><strong class="highlight">Finnsmåjobb</strong> er for privatpersoner som hjelper privatpersoner. Skattereglene er klare for denne type arbeid og du kan betale for småjobber uten å betale skatt.</p>
					<ul class="list-unstyled">
						<li>* Maks 6000.- til den samme personen pr. år</li>
						<li>* Maks 60 000.- totalt pr. år</li>
						<li>* Arbeidet må utføres ved hjemmet eller fritidsbolig.</li>
					</ul>
					<p>Les mer på: <a href="https://www.skatteetaten.no/person/skatt/hjelp-til-riktig-skatt/arbeid-trygd-og-pensjon/hobby-ekstrainntekt-og-smajobber/smajobber-og-tjenester/" target="_blank">skatteetaten.no</a></p>
				</div>
			</div>
		</div>
				<?php include ('template-parts/footer.php')?>