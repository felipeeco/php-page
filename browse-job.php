<!DOCTYPE html>
<?php
$title = 'Browse Jobs';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back browse';
$header_padding = false;
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$has_profile_picture = true;
$profilePicter_URI = 'images/samples/profile-sample-1.png';
$isPRO_job = true;
$jobList = '';

?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<!-- New Ribbon Code 16 DEC 2019-->
		<div class="add-msg">
			<i class="fas fa-trash"></i> <p>Småjobber blir fjernet fra nettsidene med en gang en hjelper er valgt for jobben.</p>
		</div>
		<div class="content search-job-page">
			<div class="search-job-form">
				<div class="container">
					<div class="row" id="stateNotSelected"> 
						<div class="col-4">
							<i class="fad fa-map-marker-slash float-left"></i>
							<h2>We could not locate you</h2>
							<p>Please <a href="#">log in</a> or enter your location to show you nearby Smajobbs</p>
						</div>
						<div class="col-8">
							<div  class="d-flex pl-3">
								<form class="job-location-form">
									<div class="form-group mr-3">	
										<label for="location">Select a Location</label>
										<input type="text" name="location" placeholder="Type or Select a city">
										<div class="dropdown ml-auto">
											<button class="btn dropdown-toggle btn-dropdown" type="button" id="statesList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-chevron-down"></i></button>
											<div class="dropdown-menu" id="stateListSelection" aria-labelledby="statesList">
												<button class="dropdown-item" type="button">Akershus</button>
												<button class="dropdown-item" type="button">Finnmark</button>
												<button class="dropdown-item" type="button">Møre og Romsdal</button>
												<button class="dropdown-item" type="button">Oslo</button>
												<button class="dropdown-item" type="button">Svalbard</button>
												<button class="dropdown-item" type="button">Trøndelag</button>
												<button class="dropdown-item" type="button">Østfold</button>
												<button class="dropdown-item" type="button">Aust agder</button>
												<button class="dropdown-item" type="button">Hedmark</button>
												<button class="dropdown-item" type="button">Nordland</button>
												<button class="dropdown-item" type="button">Rogaland</button>
												<button class="dropdown-item" type="button">Telemark</button>
												<button class="dropdown-item" type="button">Vestfold</button>
												<button class="dropdown-item" type="button">Buskerud</button>
												<button class="dropdown-item" type="button">Hordaland</button>
												<button class="dropdown-item" type="button">Oppland</button>
												<button class="dropdown-item" type="button">Sogn og Fjordane</button>
												<button class="dropdown-item" type="button">Troms</button>
												<button class="dropdown-item" type="button">Vest-Agder</button>
											</div>
										</div>
									</div>
								</form>
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
					<div class="row d-none" id="stateWasSelected">
						<div class="col-4 d-flex">
							<i class="fad fa-map-marker-alt"></i>
							<form class="job-location-form w-100">
								<div class="form-group">
									<label for="location">Select a Location</label>
									<input type="text" name="location" value="Jacon kjødes veg 7, 5232 Paradi...">
									<div class="dropdown ml-auto">
										<button class="btn dropdown-toggle btn-dropdown" type="button" id="statesList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-chevron-down"></i></button>
										<div class="dropdown-menu" id="stateListSelection" aria-labelledby="statesList">
											<button class="dropdown-item" type="button">Akershus</button>
											<button class="dropdown-item" type="button">Finnmark</button>
											<button class="dropdown-item" type="button">Møre og Romsdal</button>
											<button class="dropdown-item" type="button">Oslo</button>
											<button class="dropdown-item" type="button">Svalbard</button>
											<button class="dropdown-item" type="button">Trøndelag</button>
											<button class="dropdown-item" type="button">Østfold</button>
											<button class="dropdown-item" type="button">Aust agder</button>
											<button class="dropdown-item" type="button">Hedmark</button>
											<button class="dropdown-item" type="button">Nordland</button>
											<button class="dropdown-item" type="button">Rogaland</button>
											<button class="dropdown-item" type="button">Telemark</button>
											<button class="dropdown-item" type="button">Vestfold</button>
											<button class="dropdown-item" type="button">Buskerud</button>
											<button class="dropdown-item" type="button">Hordaland</button>
											<button class="dropdown-item" type="button">Oppland</button>
											<button class="dropdown-item" type="button">Sogn og Fjordane</button>
											<button class="dropdown-item" type="button">Troms</button>
											<button class="dropdown-item" type="button">Vest-Agder</button>
										</div>
									</div>
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
					<div class="col-lg-3 d-none d-lg-block position-relative search-col-3">
						<div class="job-seach-aside">
							<ul class="nav flex-column grey-green-icon mb-3">
								<li class="nav-item">
									<a class="nav-link active" href="#"><i class="fas fa-suitcase"></i>Jobs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fal fa-hand-paper"></i> Helpers</a>
								</li>
							</ul>
							<div class="filter-form">
								<div class="form-group mb-0"><label for="">Type of job</label></div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
								  <label class="form-check-label" for="flexCheckDefault">
									<i class="fa-solid fa-rectangle-pro"></i> Professional
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								  <label class="form-check-label" for="flexCheckChecked">
									Small Jobs
								  </label>
								</div>
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
						<div class="d-none d-lg-block">
							<div class="job-search-inputs d-flex g-10 align-items-center">
								<p>Showing</p>
								<div class="filters-scroll">
									<div class="alert alert-secondary d-flex g-5" role="alert">
										<i class="fas fa-map-marker-alt"></i>
										<p>Oslo Within 50 km from <span>Oslo</span></p>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="far fa-times"></i></button>
									</div>
									<div class="alert alert-secondary d-flex g-5" role="alert">
										<i class="fas fa-map-marker-alt"></i>
										<p>Clean <span></span></p>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="far fa-times"></i></button>
									</div>
									<div class="alert alert-secondary d-flex g-5" role="alert">
										<i class="fa-solid fa-rectangle-pro"></i>
										<p>Professional <span></span></p>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="far fa-times"></i></button>
									</div>
									<div class="alert alert-secondary d-flex g-5" role="alert">
										<i class="fa-solid fa-suitcase"></i>
										<p>Smalljobs <span></span></p>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="far fa-times"></i></button>
									</div>
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
						<div class="display-results">
							<div class="row result">
								<div class="col-sm-3 image">
									<a href="job-post.php">
									<div href="#" class="image-holder" style="height:134px;">
										<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
										<div class="posted-label"><i class="fas fa-calendar-check"></i> Ny i dag</div>
										<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
									</div>
									</a>
								</div>
								<div class="col-md-9">
									<a href="job-post.php"><h4 class="m-0">Washing house</h4></a>
									<div class="information flex">
										<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a> | 50 km</div>
										<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
										<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>As soon as possible</a></div>
									</div>
									<div class="job-description">
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to s <a href="#">... Read more &gt;</a></p>
									</div>
									<h4 class="green">Kr. 1500.-</h4>
								</div>
							</div>
							<div class="row result">
								<div class="col-sm-3 image">
									<div href="#" class="image-holder" style="height:134px;">
										<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
										<div class="posted-label"><i class="fas fa-calendar-check"></i> Ny i dag</div>
										<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
									</div>
								</div>
								<div class="col-md-9">
									<h4 class="m-0">Washing house</h4>
									<div class="information flex">
										<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a> | 50 km</div>
										<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
										<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>As soon as possible</a></div>
									</div>
									<div class="job-description">
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
									</div>
									<h4 class="green">Kr. 1500.-</h4>
								</div>
							</div>
							<div class="row result">
								<div class="col-sm-3 image">
									<div href="#" class="image-holder" style="height:134px;">
										<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
										<div class="posted-label"><i class="fas fa-calendar-check"></i> Ny i dag</div>
										<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
									</div>
								</div>
								<div class="col-md-9">
									<h4 class="m-0">Washing house</h4>
									<div class="information flex">
										<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a> | 50 km</div>
										<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
										<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>As soon as possible</a></div>
									</div>
									<div class="job-description">
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
									</div>
									<h4 class="green">Kr. 1500.-</h4>
								</div>
							</div>
							<div class="row result">
								<div class="col-sm-3 image">
									<div href="#" class="image-holder" style="height:134px;">
										<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
										<div class="posted-label"><i class="fas fa-calendar-check"></i> Ny i dag</div>
										<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
									</div>
								</div>
								<div class="col-md-9">
									<h4 class="m-0">Washing house</h4>
									<div class="information flex">
										<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a> | 50 km</div>
										<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
										<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>As soon as possible</a></div>
									</div>
									<div class="job-description">
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
									</div>
									<h4 class="green">Kr. 1500.-</h4>
								</div>
							</div>
							<div class="row result">
								<div class="col-sm-3 image">
									<div href="#" class="image-holder" style="height:134px;">
										<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
										<div class="posted-label"><i class="fas fa-calendar-check"></i> Ny i dag</div>
										<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
									</div>
								</div>
								<div class="col-md-9">
									<h4 class="m-0">This is an example of a incredible long and large text heading for a job in the platform</h4>
									<div class="information flex">
										<div class="info location"><a href="#" class="address"><i class="fas fa-map-marker-alt"></i> Oslo</a> | 50 km</div>
										<div class="info category"><a href="" class="caegory-btn"><i class="fas fa-th-large"></i> Washing</a></div>
										<div class="info date"><a href="#" class="date-link"><i class="far fa-calendar-alt"></i>As soon as possible</a></div>
									</div>
									<div class="job-description">
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
										<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to speak Norwegian and also we want you to work. Payment will be at once you have completaed the task!</p>
									</div>
									<h4 class="green">Kr. 1500.-</h4>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
 <?php include ('template-parts/footer.php')?>