<!doctype html>
<!--V 2.1
+ PHP integration for loading the same side navigation navigation.php
-->
<?php 
$title = "Finn Oppdrag";
$loggin = false;
$hasnavbar = false;
?>
<?php include ('template-parts/head.php')?>
<!--FILTER MODALS-->
<?php include ('template-parts/modals/sorteringModal.php')?>
<?php include ('template-parts/modals/typeJobModal.php')?>
<?php include ('template-parts/modals/searchModal.php')?>
<!-- PAGE CONTENT -->
	<div id="filter-job-nav">	
		<ul class="nav nav-pills nav-fill mb-0">
			<li class="nav-item">
			  <a class="nav-link active" href="#"><i class="fas fa-suitcase"></i>Oppdrag</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#"><i class="fal fa-hand-paper"></i>Hjelpere</a>
			</li>
		</ul>
	</div>
	<div class="search-job-form pb-0">
		<div class="container">
			<div id="stateNotSelected"> 
				<div>
					<i class="fad fa-map-marker-slash float-left"></i>
					<h2>Vi ser ikke hvor du er</h2>
					<p><a href="#">Logg inn</a> eller fortell oss hvor du er i feltet til høyre.</p>
				</div>
				<div>
					<form class="job-location-form">
						<div class="form-group m-0">
							<input type="text" name="location" placeholder="Skriv gate eller sted">
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
			</div>
			<div class="row d-none" id="stateWasSelected">
				<div class="col-12">
					<div class="job-location-info px-4">
						<div class="text-center">
							<h2>Juster avstand for søket</h2>
							<p>Innen <span id="valueDistance"></span> km fra <strong>Oslo, Norway</strong></p>
						</div>
						<div class="range">
							<input type="range" min="1" max="100" value="50" class="slider" id="distanceRange">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white container mt-4">
			<div class="filter-information filtered py-3 mb-3 border-bottom">
				<h2>Showing </h2>
				<div class="filter-content">
					<button type="button" class="btn filter-btn" data-toggle="modal" data-target="#sorteringModal">
						<i class="fak fa-sort-black"></i>
					</button>
					<button type="button" class="btn filter-btn" data-toggle="modal" data-target="#typeJobModal">
						<i class="fak fa-cat-black"></i>
					</button>
					<button type="button" class="btn filter-btn" data-toggle="modal" data-target="#searchModal">
						<i class="fal fa-search"></i>
					</button>
				</div>
			</div>
			<div class="job-search-inputs">
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fal fa-search"></i>
						<p>Clean</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-shipping-fast"></i>
						<p>2</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-ruler-combined"></i>
						<p>1</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-balance-scale-right"></i>
						<p>1</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-heart"></i>
						<p>1</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-shipping-fast"></i>
						<p>2</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-ruler-combined"></i>
						<p>1</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-balance-scale-right"></i>
						<p>1</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
				<div>
					<div class="alert alert-secondary" role="alert">
						<i class="fas fa-heart"></i>
						<p>1</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="far fa-times"></i>
						</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	






		
	<div class="bg-white pb-3">
		<div class="container">
			<ul class="joblist">
				<li class="job">					
					<div class="row no-gutters">
						<div class="col-4">
							<div class="image-holder">
								<div class="posted-label"><i class="fas fa-calendar-check"></i> Today</div>
								<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
							</div>
						</div>
						<div class="col-8">
							<h2>Washing house</h2>
							<div class="info location"><a href="javascript:;" class="date-link"><i class="fas fa-map-marker-alt"></i>Oslo <span class="distance">15km</span></a></div>
							<div class="info price"><a href="javascript:;" class="date-link"><i class="fas fa-money-bill-wave-alt"></i>1250 kr</a></div>
							<div class="info category"><a href="javascript:;" class="caegory-btn"><i class="fas fa-th-large" aria-hidden="true"></i> Bortkjøring</a></div>
							<div class="info date"><a href="javascript:;" class="date-link"><i class="far fa-calendar-alt"></i><strong>Due to</strong> 10.10.2019</a></div>
						</div>
					</div>
				</li>
				<li class="job">					
					<div class="row no-gutters">
						<div class="col-4">
							<div class="image-holder">
								<div class="posted-label"><i class="fas fa-calendar-check"></i> 2 days ago</div>
								<img src="https://minsmajobb.no/assets/uploads/1589321458-F4B78FCFCC4846268647033380D1C060.png" alt="">
							</div>
						</div>
						<div class="col-8">
							<h2>Washing house</h2>
							<div class="info location"><a href="javascript:;" class="date-link"><i class="fas fa-map-marker-alt"></i>Oslo <span class="distance">15km</span></a></div>
							<div class="info price"><a href="javascript:;" class="date-link"><i class="fas fa-money-bill-wave-alt"></i>1250 kr</a></div>
							<div class="info category"><a href="javascript:;" class="caegory-btn"><i class="fas fa-th-large" aria-hidden="true"></i> Bortkjøring</a></div>
							<div class="info date"><a href="javascript:;" class="date-link"><i class="far fa-calendar-alt"></i><strong>Due to</strong> 10.10.2019</a></div>
						</div>
					</div>
				</li>
				<li class="job">					
					<div class="row no-gutters">
						<div class="col-4">
							<div class="image-holder">
								<div class="posted-label"><i class="fas fa-calendar-check"></i> 3 weeks ago</div>
								<img src="https://minsmajobb.no/assets/uploads/1589326092-20200512191241.jpg" alt="">
							</div>
						</div>
						<div class="col-8">
							<h2>Washing house</h2>
							<div class="info location"><a href="javascript:;" class="date-link"><i class="fas fa-map-marker-alt"></i>Oslo <span class="distance">15km</span></a></div>
							<div class="info price"><a href="javascript:;" class="date-link"><i class="fas fa-money-bill-wave-alt"></i>1250 kr</a></div>
							<div class="info category"><a href="javascript:;" class="caegory-btn"><i class="fas fa-th-large" aria-hidden="true"></i> Bortkjøring</a></div>
							<div class="info date"><a href="javascript:;" class="date-link"><i class="far fa-calendar-alt"></i><strong>Due to</strong> 10.10.2019</a></div>
						</div>
					</div>
				</li>
				<li class="job">					
					<div class="row no-gutters">
						<div class="col-4">
							<div class="image-holder">
								<div class="posted-label"><i class="fas fa-calendar-check"></i> 12 years ago</div>
								<img src="https://minsmajobb.no/assets/uploads/1589326092-20200512191241.jpg" alt="">
							</div>
						</div>
						<div class="col-8">
							<h2>Washing house</h2>
							<div class="info location"><a href="javascript:;" class="date-link"><i class="fas fa-map-marker-alt"></i>Oslo <span class="distance">15km</span></a></div>
							<div class="info price"><a href="javascript:;" class="date-link"><i class="fas fa-money-bill-wave-alt"></i>1250 kr</a></div>
							<div class="info category"><a href="javascript:;" class="caegory-btn"><i class="fas fa-th-large" aria-hidden="true"></i> Bortkjøring</a></div>
							<div class="info date"><a href="javascript:;" class="date-link"><i class="far fa-calendar-alt"></i><strong>Due to</strong> 10.10.2019</a></div>
						</div>
					</div>
				</li>
				
				<br>
				<br>
				<br>
				<br>
			</ul>
		</div>
	</div>
	<?php include ('template-parts/myjs.php')?>
	<script>
		$(function() {                       //run when the DOM is ready
		  $("#filter, .close, .applyfilter").click(function() {  //use a class, since your ID gets mangled
			$(".box-bar").removeClass("d-block");    
			$( ".box-bar" ).slideToggle( "slow" );
			$( ".new-filters" ).slideToggle( "slow" );
			$( ".iffilteron" ).slideToggle( "slow" );
		  });
		});
		
		$(function searchopen() {                       //run when the DOM is ready
		  $("#search, .search-btn").click(function() {  //use a class, since your ID gets mangled
			//$(".box-bar").removeClass("d-block");    
			$( ".search-holder" ).slideToggle( "" );
			 document.getElementById("search-title").focus();
		  });
		});
	</script>
	<script>
	var cw = $('.image-holder').width();
		$('.image-holder').css({
			'height': cw + 'px'
		});
	</script>
	
</body>
</html>
