<!DOCTYPE html>
<?php
$title = 'Browse Helpers';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back browse';
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$has_profile_picture = true;
$profilePicter_URI = 'images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<!-- New Ribbon Code 16 DEC 2019-->
		<div class="add-msg">
			<i class="fa-solid fa-rabbit-running"></i><p> Når det haster kan det være en god løsning å kontakte en hjelper direkte.</p>
		</div>
		<div class="content search-job-page">
			<div class="search-job-form">
				<div class="container">
					<div class="row">
						<div class="col-4 d-flex">
							<i class="fad fa-map-marker-alt"></i>
							<form class="job-location-form w-100">
								<div class="form-group">
									<label for="location">Select a Location</label>
									<input type="text" name="location" id="map_page_geo_address_desk" class="map-page-geo-address-desk" placeholder="Skriv gate eller sted" value="Oslo, Noruega">
								</div>
							</form>
						</div>
						<div class="col-8">
							<div  class="d-flex">
								<div class="job-location-info pr-4">
									<h2>Move the bar to change the area of the search</h2>
									<p>Whithin <span id="valueDistance"></span> km from <strong>Jacon kjødes veg 7, 5232 Parad...</strong></p>
									<div class="range">
										<input type="range" min="1" max="100" value="50" class="slider" id="distanceRange">
									</div>
								</div>

								<form class="job-name-form">
									<div class="form-group">
										<label for="Search">Search By Name</label>
										<input type="text" name="Search" placeholder="Search">
										<button type="button" class="search-btn"><i class="fas fa-search" aria-hidden="true"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 d-none d-md-block position-relative pr-0">
						<div class="job-seach-aside">
							<ul class="nav flex-column grey-green-icon mb-3">
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fas fa-suitcase"></i>Jobs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="#"><i class="fal fa-hand-paper"></i> Helpers</a>
								</li>
							</ul>
							<div class="filter-form">
								<div class="form-group mb-0"><label for="">Type of job</label></div>
								<div class="accordion" id="accordionExample">
								<div class="filter-group">
									<div class="filter-title" id="headingOne">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Transport
										</button>
									</h2>
									</div>
									<div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="filter-body form-group">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="defaultCheck1">
											<label for="defaultCheck1" class="form-check-label">Frakt</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="defaultCheck2">
											<label for="defaultCheck2" class="form-check-label">Flytting</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="defaultCheck3">
											<label for="defaultCheck3" class="form-check-label">Bortkjøring</label>
										</div>
									</div>
									</div>
								</div>
								<div class="filter-group">
									<div class="filter-title" id="headingTwo">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Washing
										</button>
									</h2>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="filter-body form-group">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Husvask">
											<label for="Husvask" class="form-check-label">Husvask</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Flyttevask">
											<label for="Flyttevask" class="form-check-label">Flyttevask</label>
										</div>
									</div>
									</div>
								</div>
								<div class="filter-group">
									<div class="filter-title" id="headingThree">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Gardening
										</button>
									</h2>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="filter-body form-group">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Planting">
											<label for="Planting" class="form-check-label">Planting og hagestell</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Graving">
											<label for="Graving" class="form-check-label">Graving og utearbeid</label>
										</div>
									</div>
									</div>
								</div>
									<div class="filter-group">
									<div class="filter-title" id="headingThree">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Car assistance
										</button>
									</h2>
									</div>
									<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="filter-body form-group">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Maling">
											<label for="Maling" class="form-check-label">Maling</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Snekring">
											<label for="Snekring" class="form-check-label">Snekring</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="Reparasjon">
											<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="vedlikehold">
											<label for="vedlikehold" class="form-check-label">vedlikehold</label>
										</div>
									</div>
									</div>
								</div>
								</div>
								
							</div>
						</div>
						<div class="job-seach-aside-bottom"></div>
					</div>
					<div class="col-lg-9 results search-col-9">
						<div class="d-md-block">
							<!--NEW TOGGLE ACTIVE HELPERS-->
							<!-- Default checked -->
							<div class="grey-box helper-active-filter">
								<div class="image-icon">
									<img src="images/helpers-filter.png" alt="" class="featured">
								</div>
								<div class="controls-toggle">
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
										<label class="custom-control-label" for="customSwitch1">Viser <span>Hjelpere aktive siste  <i class="fa-regular fa-calendar-circle-user"></i> 90 dager.</span></label>
									</div>
									<p>Fjern haken for å se alle hjelpere med en hjelperprofil.</p>
								</div>
							</div>
							<div class="job-search-inputs d-flex align-items-center">
								<p>Showing</p>
								<div class="alert alert-secondary d-flex" role="alert">
									<i class="fas fa-map-marker-alt"></i>
									<p>Oslo Within 50 km from <span>Oslo</span></p>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="far fa-times"></i>
									</button>
								</div>
								<div class="alert alert-secondary d-flex" role="alert">
									<i class="fas fa-search"></i>
									<p>Clean</p>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="far fa-times"></i>
									</button>
								</div>
								<div class="dropdown ml-auto">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Sort by <strong>Newest</strong>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
									  <button class="dropdown-item" type="button">Older</button>
									  <button class="dropdown-item" type="button">More Money</button>
									  <button class="dropdown-item" type="button">Other</button>
									</div>
								  </div>
							</div>
							<!-- <div class="col-md-9">
								<form action="" class="search">
									<div class="form-row form-group">
										<div class="col-11">
											<input type="text" placeholder="Search for a job here, example “wash car”">
										</div>
										<div class="col-1">
											<button type="button" class="search-btn"><i class="fas fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-3">
								<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Sort by <strong>Newest</strong>
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<button class="dropdown-item" type="button">Older</button>
									<button class="dropdown-item" type="button">More Money</button>
									<button class="dropdown-item" type="button">Other</button>
								  </div>
								</div>
							</div> -->
						</div>
						<div class="container">
						<div class="row mobile-filters d-lg-none">
							<div class="col-6">
								<a href="#" class="btn btn-transparent drop" data-toggle="modal" data-target="#filterlocationmodal">Location <i class="fas fa-chevron-down"></i></a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-transparent drop" data-toggle="modal" data-target="#filtertypemodal">Job Type <i class="fas fa-chevron-down"></i></a>
							</div>
						</div>
						</div>
						<!--CONTENT-->
						<div class="display-results helpergrid">
							<div class="row">
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity idle">Active <strong>2 Hours Ago</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-1.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>
												Stine Tveit Stine Tveit
												<img src="images/icons/pro-badge.svg" alt="Pro Badge" class="profile-badge"/>
												<span class="profile-badge-tooltip pro-badge">Fagmann</span>
											</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="profile-helper-view.html" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity active-now"><strong>Active Now</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-2.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>
												Stine Tveit
												<img src="images/icons/business-badge.svg" alt="Business Badge" class="profile-badge"/>
												<span class="profile-badge-tooltip buss-badge">Bedrift</span>
											</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity active-now"><strong>Active Now</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-3.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity active-now"><strong>Active Now</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-4.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity active-now"><strong>Active Now</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-5.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity active-now"><strong>Active Now</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-6.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity idle">Active <strong>2 Hours Ago</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-7.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity idle">Active <strong>2 Hours Ago</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-8.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="helper-info">
										<div class="helper-activity idle">Active <strong>2 Hours Ago</strong></div>
										<div class="helper-image">
											<img src="images/samples/profile-sample-9.png" alt="">
											<div class="onlineholder"><div class="indicator-on"></div></div>
										</div>
										<div class="helper-grid-rating">
											<!-- RATING COMES HERE-->
											<div class="r-updated d-flex">
												<ul class="ratinglist list-unstyled mx-auto">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<!-- end of the rating-->
										</div>
										<div class="helper-name">
											<h1>Stine Tveit</h1>
										</div>
										<div class="helper-location">
											<a href="#"><i class="fas fa-map-marker-alt"></i> Oslo</a>
										</div>
										<div class="helper-services-oferred">
											<i class="fas fa-shipping-fast"></i>
											<i class="fas fa-broom"></i>
											<i class="fas fa-seedling"></i>
										</div>
										<div class="helper-bio-resume">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean </p>
											<!--<a href="#">Read more</a>-->
										</div>
										<div class="hourly-rate">
											<span>Hourly Rate <strong>34kr</strong></span>
										</div>
										<div class="action">
											<a href="" class="btn btn-primary">Hire</a>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
<!--						FINISH CONTENT-->
					</div>
				</div>
			</div>
		</div>
		<?php include ('template-parts/footer.php')?>