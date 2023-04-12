<!doctype html>
<?php 
//PWA
$title = 'Mine oppdrag';
$loggin = true;
$hasnavbar = false;
$header_class = 'overlayed';
$heading_pwa = $title;
$hasback = true;
if ($loggin == true){
	$backURL = 'dashboard.php';
}else{
	$backURL = 'welcome.php';
}
//usercontent
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
	<!--- Here's where the filter options ends-->
	<div class="iffilteron" id="small-jobs_wrapper">
		<div class="white-box">
			<div class="container">

				<div class="grey-space">
					<ul class="nav nav-tabs" id="small-jobs-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="employer-jobs-tab" data-toggle="pill" href="#employer-jobs" role="tab"><i class="fas fa-user-tie"></i>As an employer</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="helper-jobs-tab" data-toggle="pill" href="#helper-jobs" role="tab"><i class="fas fa-hand-paper"></i> As a helper</a>
						</li>
					</ul>
				</div>
					
				<div class="tab-content" id="pills-content_small-jobs">
					<div class="tab-pane fade show active" id="employer-jobs" role="tabpanel" aria-labelledby="employer-jobs-tab">
						<ul class="nav nav-pills nav-fill" id="employer-nav-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="active-jobs-tab" data-toggle="pill" href="#active-jobs" role="tab">Active  <div class="unreadedmessages-alert">3</div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="expired-jobs-tab" data-toggle="pill" href="#expired-jobs" role="tab">Expired <div class="unreadedmessages-alert">3</div></a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="active-jobs" role="tabpanel" aria-labelledby="active-jobs-tab">
								<div class="display-results">
									<div  data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-02.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Liming av ark og liming av flere ark....</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>W: Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="expired-jobs" role="tabpanel" aria-labelledby="expired-jobs-tab">
								<div class="display-results">
									<div  data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-02.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>ExpiredLiming av ark og liming av flere ark....</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-end"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-end"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="helper-jobs" role="tabpanel" aria-labelledby="helper-jobs-tab">
						<!-- is not helper -->
						<div class="become-helper-infogram">
							<div class="middle">
								<img src="../images/samples/profile-sample-1.png" alt="Profile Picturei" class="picture-holder" width="130px">
								<img src="../images/helper-icon.png" alt="" width="38px" class="helper-badge">
								<h1>Bli en hjelper!</h1>
								<p>Du er for øyeblikket ikke registrert som en hjelper men du kan enkelt registrere deg og hjelpe andre på våre nettsider.</p>
								<a href="#" class="btn btn-primary">Registrer deg som hjelper</a>
							</div>
						</div>
						<!-- is a helper 
						<ul class="nav nav-pills nav-fill" id="helper-nav-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="offered-jobs-tab" data-toggle="pill" href="#offered-jobs" role="tab">Offered  <div class="unreadedmessages-alert">3</div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="won-jobs-tab" data-toggle="pill" href="#won-jobs" role="tab">Won <div class="unreadedmessages-alert">3</div></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="lost-jobs-tab" data-toggle="pill" href="#lost-jobs" role="tab">Lost <div class="unreadedmessages-alert">3</div></a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="offered-jobs" role="tabpanel" aria-labelledby="offered-jobs-tab">
								<div class="display-results">
									<div  data-toggle="modal" data-target="#my-job-modal-help-offered" class="results-wrapper d-flex">
										<img src="../images/samples/sample-02.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Liming av ark og liming av flere ark....</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expires</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="won-jobs" role="tabpanel" aria-labelledby="won-jobs-tab">
								<div class="display-results">
									<div  data-toggle="modal" data-target="#my-job-modal-help-offered-won" class="results-wrapper d-flex">
										<img src="../images/samples/sample-02.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Liming av ark og liming av flere ark....</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-won" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-won" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-won" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-won" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="lost-jobs" role="tabpanel" aria-labelledby="lost-jobs-tab">
								<div class="display-results">
									<div  data-toggle="modal" data-target="#my-job-modal-help-offered-lost" class="results-wrapper d-flex">
										<img src="../images/samples/sample-02.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Liming av ark og liming av flere ark....</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-lost" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-lost" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-lost" class="results-wrapper d-flex">
										<img src="../images/samples/sample-03.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>Bring some boxes to my aunt Jemina</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
								<div class="display-results">
									<div data-toggle="modal" data-target="#my-job-modal-help-offered-lostx" class="results-wrapper d-flex">
										<img src="../images/gardening.jpg" alt="" class="img-rounded">
										<div class="filsonfont ml-3">
											<h2>HELP! With my garden</h2>
											<p class="mb-0 text-dark filsonfont">Job expired</p>
											<span class="maingreen"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</span>
										</div>
									</div>
								</div>
							</div>
						</div>-->
					</div>
			
				</div>
				
			</div>
		</div>
	</div>
	<div class="modal jobDetailModal fade" id="my-job-modal">
		<div class="modal-dialog modal-dialog-scrollable ">
			<div class="modal-content">
				<div class="modal-header d-flex align-items-center p-0">
					<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
						<div class="job-detail-slider">
							<img src="../images/samples/sample-05.png" alt="">
							<img src="../images/samples/sample-03.jpg" alt="">
							<img src="../	images/samples/sample-03.png" alt="">
						</div>
						<div class="px-4">
							<h2 class="title mt-2">Bring some boxes to my aunt Jemina</h2>
							<section>
								<div class="d-flex my-3 align-items-center">
									<h3 class="section-title mb-0"><i class="fa-solid fa-hand maingreen"></i> Helpers Interested</h3>
									<div class="line-title"></div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex">
										<img src="../images/samples/profile-sample.png" alt="">
										<div class="rating-info ml-2">
											<span class="section-title">Stacy Estrada</span>
											<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex">
										<img src="../images/samples/profile-sample-1.png" alt="">
										<div class="rating-info ml-2">
											<span class="section-title">Stacy Estrada</span>
											<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex">
										<img src="../images/samples/profile-sample-2.png" alt="">
										<div class="rating-info ml-2">
											<span class="section-title">Stacy Estrada</span>
											<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
							</section>
							<section>
								<div class="d-flex mt-4 mb-3 align-items-center">
									<h3 class="section-title mb-0"><i class="fa-solid fa-envelope-open-text maingreen"></i> Invited</h3>
									<div class="line-title"></div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<img src="../images/samples/profile-sample.png" alt="">
										<div class="ml-2">
											<span class="section-title">Stacy Estrada</span>
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
							</section>
						</div>
				
						<section class="white-box pt-4 px-4 jobDetail-info">
							<div class="d-flex">
								<p class="data-name">Pris</p>
								<p class="data-info"><i class="fas fa-money-bill-wave-alt"></i> 1200 kr.</p>
							</div>
							<div class="d-flex">
								<p class="data-name">Place</p>
								<p class="data-info"><i class="fas fa-map-marker-alt"></i> Vestland</p>
							</div>
							<div class="d-flex">
								<p class="data-name">Visinger</p>
								<p class="data-info"><i class="fas fa-eye"></i> 15</p>
							</div>
							<div class="d-flex">
								<p class="data-name">Utløper</p>
								<p class="data-info"><i class="fa-regular fa-hourglass-start"></i> 10.10.2020</p>
							</div>
							<div class="alert-info d-flex mt-3">
								<i class="fa-light fa-eyes mr-2"></i>
								<span>Everyone can see and contact you on this job</span>
							</div>
							<ul class="form-footer nav justify-content-between">
								<li><a class="btn btn-grey" href="#"><i class="far fa-trash-alt" aria-hidden="true"></i> Cancel Job</a></li>
								<li><a class="btn btn-primary" href="#">Edit Job <i class="far fa-edit" aria-hidden="true"></i></a></li>
							</ul>
						</section>	
					
				</div>
			</div>
		</div>
	</div>


	<div class="modal jobDetailModal fade" id="my-job-modal2">
		<div class="modal-dialog modal-dialog-scrollable ">
			<div class="modal-content">
				<div class="modal-header d-flex align-items-center p-0">
					<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
						<div class="job-detail-slider">
							<img src="../images/samples/sample-05.png" alt="">
							<img src="../images/samples/sample-03.jpg" alt="">
							<img src="../	images/samples/sample-03.png" alt="">
						</div>
						<div class="px-4">
							<h2 class="title mt-2">Bring some boxes to my aunt Jemina</h2>
							<section>
								<div class="d-flex my-3 align-items-center">
									<h3 class="section-title mb-0"><i class="fa-solid fa-hand maingreen"></i> Helpers Interested</h3>
									<div class="line-title"></div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex">
										<img src="../images/samples/profile-sample.png" alt="">
										<div class="rating-info ml-2">
											<span class="section-title">Stacy Estrada</span>
											<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex">
										<img src="../images/samples/profile-sample-1.png" alt="">
										<div class="rating-info ml-2">
											<span class="section-title">Stacy Estrada</span>
											<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex">
										<img src="../images/samples/profile-sample-2.png" alt="">
										<div class="rating-info ml-2">
											<span class="section-title">Stacy Estrada</span>
											<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
							</section>
							<section>
								<div class="d-flex mt-4 mb-3 align-items-center">
									<h3 class="section-title mb-0"><i class="fa-solid fa-envelope-open-text maingreen"></i> Invited</h3>
									<div class="line-title"></div>
								</div>
								<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<img src="../images/samples/profile-sample.png" alt="">
										<div class="ml-2">
											<span class="section-title">Stacy Estrada</span>
										</div>
									</div>
									<div>
										<a href="#" class="maingreen mr-3 mb-1 d-inline-block"><i class="fa-regular fa-user"></i></a>
										<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
									</div>
								</div>
							</section>
						</div>
				
						<section class="white-box pt-4 px-4 jobDetail-info">
							<div class="d-flex">
								<p class="data-name">Pris</p>
								<i class="fa-regular fa-money-bill-wave-alt"></i> <!-- this structure allow the text break properly-->
								<p class="data-info">1200 kr.</p>
							</div>
							<div class="d-flex">
								<p class="data-name">Place</p>
								<i class="fa-regular fa-map-marker-alt"></i>
								<p class="data-info">Vestland</p>
							</div>
							<div class="d-flex">
								<p class="data-name">Visinger</p>
								<i class="fa-regular fa-eye"></i>
								<p class="data-info">15</p>
							</div>
							<div class="d-flex">
								<p class="data-name">Utløper</p>
								<i class="fa-regular fa-hourglass-start"></i>
								<p class="data-info">10.10.2020</p>
							</div>
							<div class="alert-info d-flex mt-3">
								<i class="far fa-eyes"></i>
								<span>Everyone can see and contact you on this job</span>
							</div>
							<ul class="form-footer nav justify-content-between">
								<li><a class="btn btn-grey" href="#"><i class="far fa-trash-alt" aria-hidden="true"></i> Cancel Job</a></li>
								<li><a class="btn btn-primary" href="#">Edit Job <i class="far fa-edit" aria-hidden="true"></i></a></li>
							</ul>
						</section>	
					
				</div>
			</div>
		</div>
	</div>
	<div class="modal jobDetailModal fade" id="my-job-modal-help-offered">
			<div class="modal-dialog modal-dialog-scrollable ">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center p-0">
						<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
							<i class="fas fa-times"></i>
						</button>
					</div>
					<div class="modal-body">
							<div class="job-detail-slider">
								<img src="../images/samples/sample-05.png" alt="">
								<img src="../images/samples/sample-03.jpg" alt="">
								<img src="../	images/samples/sample-03.png" alt="">
							</div>
							<div class="px-4">
								<h2 class="title mt-2">Need to deliver my products</h2>
								<section>
									<div class="d-flex my-3 align-items-center">
										<h3 class="section-title mb-0"><i class="fa-solid fa-user-tie maingreen"></i> Oppdragsgiver</h3>
										<div class="line-title"></div>
									</div>
									<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
										<div class="d-flex">
											<img src="../images/samples/profile-sample.png" alt="">
											<div class="rating-info ml-2">
												<span class="section-title">Jack Smith</span>
												<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
											</div>
										</div>
										<div>
											<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
										</div>
									</div>
								</section>
							</div>

							<section class="white-box pt-4 px-4 jobDetail-info">
								<div class="d-flex">
									<p class="data-name">Pris</p>
									<i class="fa-regular fa-money-bill-wave-alt"></i>
									<p class="data-info">1200 kr.</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Sted</p>
									<i class="fa-regular fa-map-marker-alt"></i>
									<p class="data-info">Vestland</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Utløper</p>
									<i class="fa-regular fa-eye"></i>
									<p class="data-info">15</p>
								</div>
								<div class="d-flex">
									<p class="data-name">JobID</p>
									<i class="fa-regular fa-hourglass-start"></i>
									<p class="data-info">10.10.2020</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Interesserte</p>
									<i class="fa-regular fa-hand-paper"></i>
									<p class="data-info">3</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Type</p>
									<i class="fa-regular fa-user"></i>
									<p class="data-info">Professional Wanted</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Befaring</p>
									<i class="fa-regular fa-file-search"></i>
									<p class="data-info">Not needed</p>
								</div>

								<div class="alert-info d-flex mt-3">
									<i class="fa-light fa-tag mr-2"></i>
									<span>Oppdragsgebyret kr. #fee# <br>er belastet.</span>
								</div>
								<ul class="form-footer nav justify-content-between">
									<li><a class="btn btn-grey" href="#"><i class="far fa-arrow-rotate-left" aria-hidden="true"></i> Trekk tilbake</a></li>
									<li><a class="btn btn-primary" href="#">Gå til chat  <i class="far fa-comment-arrow-up-right" aria-hidden="true"></i></a></li>
								</ul>
							</section>	

					</div>
				</div>
			</div>
		</div>
	<!--JOBS WON-->
	<div class="modal jobDetailModal fade" id="my-job-modal-help-offered-won">
			<div class="modal-dialog modal-dialog-scrollable ">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center p-0">
						<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
							<i class="fas fa-times"></i>
						</button>
					</div>
					<div class="modal-body">
							<div class="job-status won">
								<i class="fa-solid fa-trophy-star icon"></i>
								<div class="info-text-status">
									<p><strong>Du fikk dette oppdraget!</strong><br>Husk å vurdere oppdragsgiver når jobben er utført!</p>
								</div>
							</div>
							<!--<div class="job-status lost">
								<i class="fa-solid fa-handshake-slash icon"></i>
								<div class="info-text-status">
									<p><strong>Du fikk ikke oppdraget!</strong><br>Rapporter til oss om du ikke føler det slik. <i class="fa-solid fa-chevron-right"></i></p>
								</div>
							</div>-->
							<div class="job-detail-slider">
								<img src="../images/samples/sample-05.png" alt="">
								<img src="../images/samples/sample-03.jpg" alt="">
								<img src="../	images/samples/sample-03.png" alt="">
							</div>
							<div class="px-4">
								<h2 class="title mt-2">Need to deliver my products</h2>
								<section>
									<div class="d-flex my-3 align-items-center">
										<h3 class="section-title mb-0"><i class="fa-solid fa-user-tie maingreen"></i> Oppdragsgiver</h3>
										<div class="line-title"></div>
									</div>
									<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
										<div class="d-flex">
											<img src="../images/samples/profile-sample.png" alt="">
											<div class="rating-info ml-2">
												<span class="section-title">Jack Smith</span>
												<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
											</div>
										</div>
										<div>
											<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
										</div>
									</div>
								</section>
							</div>

							<section class="white-box pt-4 px-4 jobDetail-info">
								<div class="d-flex">
									<p class="data-name">Pris</p>
									<i class="fa-regular fa-money-bill-wave-alt"></i>
									<p class="data-info">1200 kr.</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Sted</p>
									<i class="fa-regular fa-map-marker-alt"></i>
									<p class="data-info">Vestland</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Utløper</p>
									<i class="fa-regular fa-eye"></i>
									<p class="data-info">15</p>
								</div>
								<div class="d-flex">
									<p class="data-name">JobID</p>
									<i class="fa-regular fa-hourglass-start"></i>
									<p class="data-info">10.10.2020</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Interesserte</p>
									<i class="fa-regular fa-hand-paper"></i>
									<p class="data-info">3</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Type</p>
									<i class="fa-regular fa-user"></i>
									<p class="data-info">Professional Wanted</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Befaring</p>
									<i class="fa-regular fa-file-search"></i>
									<p class="data-info">Not needed</p>
								</div>

								<div class="alert-info d-flex mt-3">
									<i class="fa-light fa-tag mr-2"></i>
									<span>Oppdragsgebyret kr. #fee# <br>er belastet.</span>
								</div>
								<ul class="form-footer nav justify-content-between">
									<li><a class="btn btn-danger" href="#"><i class="far fa-flag" aria-hidden="true"></i> Rapporter</a></li>
									<li><a class="btn btn-warning" href="#">Gi karakter <i class="fa-solid fa-star" aria-hidden="true"></i></a></li>
								</ul>
							</section>	

					</div>
				</div>
			</div>
		</div>

<!--JOBS LOST-->
	<div class="modal jobDetailModal fade" id="my-job-modal-help-offered-lost">
			<div class="modal-dialog modal-dialog-scrollable ">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center p-0">
						<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
							<i class="fas fa-times"></i>
						</button>
					</div>
					<div class="modal-body">
							<div class="job-status lost">
								<i class="fa-solid fa-handshake-slash icon"></i>
								<div class="info-text-status">
									<p><strong>Du fikk ikke oppdraget!</strong><br>Rapporter til oss om du ikke føler det slik. <i class="fa-solid fa-chevron-right"></i></p>
								</div>
							</div>
							<div class="job-detail-slider">
								<img src="../images/samples/sample-05.png" alt="">
								<img src="../images/samples/sample-03.jpg" alt="">
								<img src="../	images/samples/sample-03.png" alt="">
							</div>
							<div class="px-4">
								<h2 class="title mt-2">Need to deliver my products</h2>
								<section>
									<div class="d-flex my-3 align-items-center">
										<h3 class="section-title mb-0"><i class="fa-solid fa-user-tie maingreen"></i> Oppdragsgiver</h3>
										<div class="line-title"></div>
									</div>
									<div class="helper-wrapper mb-3 d-flex flex-wrap align-items-center justify-content-between">
										<div class="d-flex">
											<img src="../images/samples/profile-sample.png" alt="">
											<div class="rating-info ml-2">
												<span class="section-title">Jack Smith</span>
												<!-- RATING COMES HERE-->
											<div class="r-updated small">
												<ul class="ratinglist list-unstyled">
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
											</div>
										</div>
										<div>
											<a href="#" class="maingreen"><i class="fa-regular fa-comment"></i></a>
										</div>
									</div>
								</section>
							</div>

							<section class="white-box pt-4 px-4 jobDetail-info">
								<div class="d-flex">
									<p class="data-name">Pris</p>
									<i class="fa-regular fa-money-bill-wave-alt"></i>
									<p class="data-info">1200 kr.</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Sted</p>
									<i class="fa-regular fa-map-marker-alt"></i>
									<p class="data-info">Vestland</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Utløper</p>
									<i class="fa-regular fa-eye"></i>
									<p class="data-info">15</p>
								</div>
								<div class="d-flex">
									<p class="data-name">JobID</p>
									<i class="fa-regular fa-hourglass-start"></i>
									<p class="data-info">10.10.2020</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Interesserte</p>
									<i class="fa-regular fa-hand-paper"></i>
									<p class="data-info">3</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Type</p>
									<i class="fa-regular fa-user"></i>
									<p class="data-info">Professional Wanted</p>
								</div>
								<div class="d-flex">
									<p class="data-name">Befaring</p>
									<i class="fa-regular fa-file-search"></i>
									<p class="data-info">Not needed</p>
								</div>

								<div class="alert-info d-flex mt-3">
									<i class="fa-light fa-tag mr-2"></i>
									<span>Oppdragsgebyret kr. #fee# <br>er belastet.</span>
								</div>
								<ul class="form-footer nav justify-content-between">
									<li><a class="btn btn-danger" href="#"><i class="far fa-flag" aria-hidden="true"></i> Rapporter</a></li>
									<li><a class="btn btn-light" href="#">Lukk <i class="fa-solid fa-times" aria-hidden="true"></i></a></li>
								</ul>
							</section>	

					</div>
				</div>
			</div>
		</div>
	<?php include ('template-parts/myjs.php')?>
	<script>
	$(document).ready(function(){
		$('.job-detail-slider').slick({
			dots: true,
			arrows: false,
			// autoplay: true,
			autoplaySpeed: 8000,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
			});
		});

		$(window).on('shown.bs.modal', function() { 
			$('.job-detail-slider').slick('setPosition');
		});
	</script>	
</body>
</html>
