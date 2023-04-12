<!--
UPDATES DEC 2022
-new transport layout
-->
<!doctype html>
<?php 
$title = "New Transport Job"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'page no-back';


/***/

/**LAYOUT**/
$custom_field_column = 'w-100 d-flex flex-column justify-content-start align-items-start g-10';
$custom_field_row = 'w-100 d-flex flex-row justify-content-start align-items-start g-10';
$custom_field_fill = 'w-100 mb-3';
$custom_greypanel = 'w-100';
$switch_greybox = 'grey-bg w-100 py-3 px-5 rounded';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
<div class="newjob-content py-5 gradientwatermark-bg">
	<div class="container">
		<div class="justify-content-md-center">
			<div class="d-flex g-10 flex-row align-items-center">
				<div class="heading-content d-flex flex-column align-items-start white">
					<h1>Let us know what you need done</h1>
					<p class="m-0">Find people to help you in what you need done in no time!, you will be ble to pick a helper that fits your needs, pelase give as much detail as you can, this helps getting better helpers and more accurate estimates if needed.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="">
	<div class=" justify-content-md-center">
		<div class="">
			<div class="setting-grid rounded-top p-4">
				<div id="job-category" class="mb-4">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-shapes"></i> Type of job</h5>
						<p><small>This will help users to find the right cateogry for your job post</small></p>
					</div>
					<div class="">
						<div class="<?php echo($custom_field_column)?>">
							<div class="<?php echo($custom_field_fill)?>">
							  <label for="validationTooltip01">Category</label>
							  	<select name="" id="" class="custom-select">
									<option value="Transport" selected>Transport</option>
									<option value="Husarbeid" >Husarbeid</option>
									<option value="Hagearbeid" >Hagearbeid</option>
									<option value="Bil & sykkel" >Bil &amp; sykkel</option>
									<option value="Håndverker" >Håndverker</option>
									<option value="Personlig" >Personlig</option>
									<option value="Utdanning" >Utdanning</option>
									<option value="Data" >Data</option>
									<option value="Tekstil & søm" >Tekstil &amp; søm</option>
									<option value="Velvære" >Velvære</option>
									<option value="Event" >Event</option>
									<option value="Økonomi" >Økonomi</option>
									<option value="Båt & scooter" >Båt &amp; scooter</option>
									<option value="Bemanning" >Bemanning</option>
								</select>
							</div>
							<div class="<?php echo($custom_field_fill)?>">
							  <label for="validationTooltip01">Category Type</label>
							  	<select name="" id="" class="custom-select">
									<option value="Hente & levere" selected>Hente &amp; levere</option>
									<option value="Flytting" >Flytting</option>
									<option value="Bortkjøring" >Bortkjøring</option>
									<option value="Bærehjelp" >Bærehjelp</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div id="job-setup" class="mb-4">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-pen-field"></i> Set Up your Job</h5>
						<p><small>Helper will see the heading in a prominet way among other ads, try to make it look short and self explanatory</small></p>
					</div>
					<div class="w-100">
						<div class="<?php echo($custom_field_column)?>">
							<div class="<?php echo($custom_field_fill)?>">
								<label for="job-title">Set a Name</label>
								<input type="text" class="form-control form-control-lg" name="job-title" placeholder="I want help with...">
							</div>
						</div>
						<div class="<?php echo($custom_field_column)?>">
							<div class="<?php echo($custom_field_fill)?>">
								<label for="descripiton">What do you need help with?</label>
								<textarea name="descripiton" class="form-control" id="" cols="30" rows="5" placeholder="Please describe what you need done with rich detail, this will help you find the best helper for the job you need done"></textarea>	
							</div>
						</div>
					</div>
				</div>
				<div id="job-deadline" class="mb-4">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-calendar-lines-pen"></i> When you need it done?</h5>
						<p><small>Let the helpes know when you need the job done, this will help them plan in case they have other jobs going</small></p>
					</div>
					<div class="">
						<div class="<?php echo($custom_field_column)?>">
							<div class="<?php echo($custom_field_fill)?>">
								<label for="time">Is it urgent?</label>
								<select name="time" class="custom-select">
									<option value="2">Det haster!</option>
									<option value="3" selected>Før en dato</option>
									<option value="4">På en dato</option>
									<option value="5">Etter avtale</option>
								</select>
							</div>
							<div class="<?php echo($custom_field_fill)?>">
								<label for="Date">When do you need help?</label>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1" style="min-width: 40px;"><i class="fa-solid fa-calendar-alt"></i></span>
								  </div>
								  <input name="date" type="date" class="form-control form-control-date" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="job-location" class="mb-4">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-location-dot"></i> Location Details</h5>
						<p><small>Let the helpes know when you need the job done, this will help them plan in case they have other jobs going</small></p>
					</div>
					<div class="">
						<div class="<?php echo($custom_field_column)?>">
							<div class="custom-control custom-switch <?php echo($switch_greybox)?>">
							  <input type="checkbox" class="d-none custom-control-input" id="customSwitch1">
							  <label class="custom-control-label" for="customSwitch1">Is something to be transported to or from another country?</label>
							</div>
						</div>
						<br>
						<div class="<?php echo($custom_field_column)?>">
							<label for="Fit">What is to be transported fits in a:</label>
						</div>
						<small id="transtypefeedback" style="color: red; display:none;">Please select a transportation type</small>
						<div id="transport-type" class="cards-options d-flex flex-row align-items-start g-10">
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="fit">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-block-question icon-xl green"></i>
									<p><small>Unsure</small></p>
								</div>
							</label>
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="fit">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-bag-shopping icon-xl green"></i>
									<p><small>Box or bag</small></p>
								</div>
							</label>
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="fit">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-car icon-xl green"></i>
									<p><small>Small car</small></p>
								</div>
							</label>
						</div>
						<div id="transport-type" class="cards-options d-flex flex-row align-items-start g-10">
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="fit">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-van-shuttle icon-xl green"></i>
									<p><small>Station wagon or SUV</small></p>
								</div>
							</label>
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="fit">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-truck-front icon-xl green"></i>
									<p><small>Trailer or van</small></p>
								</div>
							</label>
						</div>
						<br>
						<div class="<?php echo($custom_field_column)?>">
							<label for="where">Where will it be transported?</label>
						</div>
						<small id="deliverfeedback" style="color: red; display:none;">Please select delivery type</small>
						<div id="deliver-type" class="cards-options <?php echo($custom_field_row)?>">
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="where">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-route icon-xl green"></i>
									<p><small>From one address to another</small></p>
								</div>
							</label>
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="where">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-location-smile icon-xl green"></i>
									<p><small>Optional delivery location</small></p>
								</div>
							</label>
							<label class="custom-radio <?php echo($custom_field_fill)?>">
								<input type="radio" name="where">
								<div class="white-box selected rounded d-flex flex-column align-items-center p-2 g-10 justify-content-center">
									<i class="fa-light fa-location-pin-lock icon-xl green"></i>
									<p><small>Performed at one address</small></p>
								</div>
							</label>
						</div>
						<hr>
						<div class="<?php echo($custom_field_column)?>">
							<div class="w-100">
								<label for="from">From <p class="m-0"><small>Enter an address where the job is to be carried out.</small></p></label>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1" style="min-width: 40px;"><i class="fa-solid fa-location-dot"></i></span>
								  </div>
								  <input name="address-start" type="text" class="form-control form-control-lg" placeholder="Type a “from” address" aria-label="from" aria-describedby="saddressfeedback">
								  <!--<div id="saddressfeedback" class="invalid-feedback">
									Enter starter address please
								  </div>-->
								</div>
							</div>
							<div class="w-100">
								<button class="btn btn-light btn-sm"><i class="fa-regular fa-arrow-up-arrow-down m-0"></i></button>
							</div>
							<div class="w-100">
								<label for="to">To <p class="m-0"><small>Write the address where the goods are to be delivered</small></p></label>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1" style="min-width: 40px;"><i class="fa-solid fa-location-dot"></i></span>
								  </div>
								  <input name="address-end" type="text" class="form-control form-control-lg" placeholder="Type a “to” address" aria-label="to" aria-describedby="daddressfeedback">
								  <!--<div id="daddressfeedback" class="invalid-feedback">
									Enter destination address please
								  </div>-->
								</div>
							</div>
						</div>
						<div class="<?php echo($custom_field_column)?> mb-3">
							<img src="../images/samples/map-placeholder.png"alt="" class="w-100">
						</div>
					</div>
				</div>
				<div id="job-payment" class="mb-4 pb-4">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-money-check-dollar-pen"></i> Payment</h5>
						<p><small>Choose whether you want to post the job at a fixed price, hourly payment or whether you want an offer.</small></p>
					</div>
					<div class="">
						<div class="">
							<?php include ('../template-parts/job-settings/payment-type-template.php'); ?>
						</div>
					</div>
				</div>
				<div id="job-type" class="mb-4">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-suitcase"></i> Type of Job</h5>
						<p><small>Chosing the right type of jon will help you have better results, do you need professionals helping you instead?</small></p>
					</div>
					<div class="">
						<?php include('../template-parts/job-settings/subscrition-options.php') ?>
						<div class="<?php echo($custom_field_column)?>">
							<div class="custom-control custom-switch <?php echo($switch_greybox)?>">
							  <input type="checkbox" class="d-none custom-control-input" id="customSwitch2">
							  <label class="custom-control-label" for="customSwitch2">Inspection is required.<p class="m-0"><small>Only select when an inspection is absolutely necessary to agree on a price and execution of the assignment.</small></p></label>
							</div>
						</div>
						<div class="form-info dark mt-3">
							<i class="fa-solid fa-triangle-exclamation icon-md"></i>
							<p class="m-0">Grunnprofil blir brukt når du legger ut oppdrag på våre nettsider. Kun fornavnet ditt viser for andre og får varsel på SMS og e-post når hjelpere tar kontakt.</p>
						</div>
					</div>
				</div>
				<div class="mb-4">
					<div class="<?php echo($custom_greypanel)?>">
<!--
						<h5><i class="fa-solid fa-xxxx"></i> xxxxx</h5>
						<p><small>xxxxx</small></p>
-->
					</div>
					<div class=" d-flex flex-row justify-content-end align-items-center;">
						<a id="next-step" class="btn btn-primary">Next</a>
					</div>
				</div>
				
			</div>
			<div class="intersection sigzag"></div>
			<div class="grey-bg">
				<div class="container">
				<div id="job-preview-card-title" class="row justify-content-md-center pt-5">
					<div class="col">
						<h1>Does it look good?</h1>
						<p>Please review, here's how helps will see your job on our platform</p>
					</div>
				</div>
				<div id="job-preview-card-body" class="row justify-content-md-center">
					<div class="col">
						<div class="display-results py-0">
							<div class="result py-3 m-0">
								<div class="image d-block mb-3">
									<a href="job-post.php">
									<div href="#" class="image-holder" style="height:134px;">
										<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
										<img src="https://minsmajobb.no/assets/uploads/1589362927-50AD81C3024B4A2CB1371B5C4279941E.png" alt="">
									</div>
									</a>
								</div>
								<div class="">
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
						</div>
					</div>	
				</div>
			</div>
			</div>
			<div id="job-post-action" class="justify-content-md-center grey-bg">
				<div class="d-flex flex-column justify-content-end align-items-center" style="padding: 30px 20px;gap: 10px;">
					<a href="" class="btn btn-primary"><i class="fa-solid fa-check"></i> Yes, post my job!</a>
					<div class="disclaimer"><p>By posting you accept Minsmåjobb <a href="">Terms &amp; Conditions</a> </p></div>
				</div>
			</div>
		</div>
	</div>
</div>
		

	<?php include ('template-parts/myjs.php')?>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
		// loadingImage
		$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        
        // Applying the top margin on modal dialog to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    	}
    	// Align modal when it is displayed
		$(".modal").on("shown.bs.modal", alignModal);

		// Align modal when user resize the window
		$(window).on("resize", function(){
			$(".modal:visible").each(alignModal);
		});   
	});
	</script>
	<script>
		function openNav() {
				document.getElementById("mySidenav").classList.add("open");
		  }

		  function closeNav() {
				document.getElementById("mySidenav").classList.remove("open");
		  }
	</script>
	<script>
		// SHOW CALENDAR WHEN SELECTED OPTION
		$(".addCalendar").on('click', function(){
			let calendarWrapper = $(this);
			setTimeout(function() {
				calendarWrapper.toggleClass('selected');	
			}, 300)
			$('.addCalendar').removeClass('selected');
			$('#urgentOption').removeClass('selected');
		});

		$( "#calendarBeforeDate" ).datepicker({
				onSelect: function (selected) {
					var selectedDate = $(this).datepicker('getDate');
					$('#dateUrgent').val(selectedDate)
				}
			});
			$( "#calendarOnDate" ).datepicker({
				onSelect: function (selected) {
					var selectedDate = $(this).datepicker('getDate');
					$('#dateUrgent').val(selectedDate)
				}
			});


		// GET VALUES FROM SELECTED OPTION ON MODALS AND INSERT ON HIDDEN INPUTS ON FORM 
		$("#urgentOption").on("click", function() {
			$('.addCalendar').removeClass('selected');
			$('#datepicker').remove();
			$(this).addClass('selected');
			$('#dateUrgent').val("urgent")
		});

		$("input[name='neededJob'").on('change', function() {
			$("#neededJob").val($(this).val());
		});

		$("input[name='whereJob'").on('change', function() {
			$("#whereJob").val($(this).val());
		});

		</script>

		<script>
		$(document).ready(function() {
			//-- Step cursor
			let step = 0;
			
			//-- Main job registration section
			$('div#job-deadline').hide();
			$('div#job-location').hide();
			$('div#job-payment').hide();
			$('div#job-type').hide();

			//-- Preview card section about registered job
			$('div#job-preview-card-title').hide();
			$('div#job-preview-card-body').hide();
			$('div#job-post-action').hide();

			//-- Deal with showing up step by step based on the "step" vaiable.
			$('a#next-step').click(function() {
				if(step == 0) {
					let isValid = true;
					if($("input[name='job-title']").val() == '') {
						$("input[name='job-title']").addClass('is-invalid');
						isValid = false;
					} else {
						$("input[name='job-title']").removeClass('is-invalid');
					};
					if($("textarea[name='descripiton']").val() == '') {
						$("textarea[name='descripiton']").addClass('is-invalid');
						isValid = false;
					} else {
						$("textarea[name='descripiton']").removeClass('is-invalid');
					}
					
					if(isValid == true) {
						// Showing next step
						$('div#job-deadline').slideDown('slow');
						$('html, body').animate({
							scrollTop: $("div#job-deadline").offset().top
						}, 1000);
						step = 1;
						return;
					}
				} else if(step == 1) {
					let isValid = true;

					if($("input[name='date']").val() == '') {
						$("input[name='date']").addClass('is-invalid');
						isValid = false;
					} else {
						$("input[name='date']").removeClass('is-invalid');
					}

					if(isValid == true) {
						$('div#job-location').slideDown('slow');
						$('html, body').animate({
							scrollTop: $("div#job-location").offset().top
						}, 1000);
						step = 2;
						return;
					}
					// $('html, body').scrollTop( $("div#job-deadline").offset().top );
				} else if(step == 2) {
					let isValid = true;
					let isTransportTypeChecked = 0;
					let isDeliverTypeChecked = 0;
					
					// Checking whether user checked a transportation type
					$("div#transport-type").find("input[type=radio]:checked").map(function() {
						isTransportTypeChecked++;
					});
					if(isTransportTypeChecked == 0) {
						$('small#transtypefeedback').show();
						isValid = false;
					} else {
						$('small#transtypefeedback').hide();
					}
					
					// Checking whether user checked a deliver type
					$("div#deliver-type").find("input[type=radio]:checked").map(function() {
						isDeliverTypeChecked++;
					});
					if(isDeliverTypeChecked == 0) {
						$('small#deliverfeedback').show();
						isValid = false;
					} else {
						$('small#deliverfeedback').hide();
					}

					// Checking whether user registered start address
					if($("input[name='address-start']").val() == '') {
						$("input[name='address-start']").addClass('is-invalid');
						isValid = false;
					} else {
						$("input[name='address-start']").removeClass('is-invalid');
					}
					// Checking whether user registered end address
					if($("input[name='address-end']").val() == '') {
						$("input[name='address-end']").addClass('is-invalid');
						isValid = false;
					} else {
						$("input[name='address-end']").removeClass('is-invalid');
					}

					if(isValid == true) {
						$('div#job-payment').slideDown('slow');
						$('html, body').animate({
							scrollTop: $("div#job-payment").offset().top
						}, 1000);
						step = 3;
						return;
					}
				} else if(step == 3) {
					let isValid = true;

					let value = $("input[name='totalcost']").val();
			
					if($("input[name='totalcost']").val() == '') {
						$("input[name='totalcost']").addClass('is-invalid');
						isValid = false;
					} else {
						if($.isNumeric(value)) {
							$("input[name='totalcost']").removeClass('is-invalid');
						} else {
							$("input[name='totalcost']").addClass('is-invalid');
							isValid = false;
						};
					}
					
					if(isValid == true) {
						$('div#job-type').slideDown('slow');
						$('html, body').animate({
							scrollTop: $("div#job-type").offset().top
						}, 1000);
						step = 4;
						return;
					}
				} else if(step == 4) {
					let isValid = true;
					let isJobTypeChecked = 0;

					// Checking whether user checked a job type
					$("div#job-varients").find("input[type=radio]:checked").map(function() {
						isJobTypeChecked++;
					});
					if(isJobTypeChecked == 0) {
						$('small#jobtypefeedback').show();
						isValid = false;
					} else {
						$('small#jobtypefeedback').hide();
					}

					if(isValid == true) {
						$('div#job-preview-card-title').show();
						$('div#job-preview-card-body').show();
						$('div#job-post-action').show();
						$('html, body').animate({
							scrollTop: $("div#job-preview-card-title").offset().top
						}, 1000);
						return;
					}
				}
			});
		});
		</script>
  </body>
</html>