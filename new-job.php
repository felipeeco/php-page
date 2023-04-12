<!DOCTYPE html>
<?php
$title = 'Publish a job: Transport';
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page new-job no-back';
$load_ratingModal = false;
$insert_scrtip ='';

/**LAYOUT**/
$custom_field_row = 'w-100 d-flex flex-row align-items-end p-0 g-10';
$custom_field_row_flex_start = 'w-100 d-flex flex-row align-items-start p-0 g-10';
$custom_field_row_flex_end = 'w-100 d-flex flex-row align-items-end p-0 g-10';
$custom_field_fill = 'mb-3 flex-grow-1';
$custom_greypanel = 'col-md-4 grey-bg p-4';
$switch_greybox = 'grey-bg w-100 py-3 px-5 rounded';


?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<?php include ('template-parts/modals/publish-job.php');?>
<div class="newjob-content gradient-bg py-5">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-10">
				<div class="d-flex g-10 flex-row align-items-center">
					<div class="icon">
						<i class="fa-duotone fa-circle-plus icon-xxl"></i>
					</div>
					<div class="heading-content d-flex flex-column align-items-start white">
						<h1>Let us know what you need done</h1>
						<p class="m-0">Find people to help you in what you need done in no time!, you will be ble to pick a helper that fits your needs, pelase give as much detail as you can, this helps getting better helpers and more accurate estimates if needed.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-10">
			<div class="setting-grid mb-5">
				<div id="job-category" class="row">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-shapes"></i> Type of job</h5>
						<p><small>This will help users to find the right cateogry for your job post</small></p>
					</div>
					<div class="col-md-8 p-4">
						<div class="<?php echo($custom_field_row)?>">
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
							<div class="mb-3 flex-grow-0">
								<i class="fa-solid fa-circle-check green icon-xl"></i>
							</div>
						</div>
					</div>
				</div>
				<div id="job-setup" class="row">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-pen-field"></i> Set Up your Job</h5>
						<p><small>Helper will see the heading in a prominet way among other ads, try to make it look short and self explanatory</small></p>
					</div>
					<div class="col-md-8 p-4">
						<div class="<?php echo($custom_field_row)?>">
							<div class="<?php echo($custom_field_fill)?>">
								<label for="job-title">Set a Name</label>
								<input type="text" class="form-control form-control-lg" name="job-title" placeholder="I want help with..." aria-describedby="setnamefeedback">
								<div id="setnamefeedback" class="invalid-feedback">
									You must set a name
								</div>
							</div>
						</div>
						<div class="<?php echo($custom_field_row)?>">
							<div class="<?php echo($custom_field_fill)?>">
								<label for="descripiton">What do you need help with?</label>
								<textarea name="descripiton" class="form-control" id="" cols="30" rows="5" placeholder="Please describe what you need done with rich detail, this will help you find the best helper for the job you need done" aria-describedby="helpwithfeedback"></textarea>	
								<div id="helpwithfeedback" class="invalid-feedback">
									Please describe what you need
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="job-deadline" class="row">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-calendar-lines-pen"></i> When you need it done?</h5>
						<p><small>Let the helpes know when you need the job done, this will help them plan in case they have other jobs going</small></p>
					</div>
					<div class="col-md-8 p-4">
						<div class="<?php echo($custom_field_row_flex_start)?> align-items-start">
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
								<label for="date">What do you need help with?</label>
								<input type="date" class="form-control" name="date" aria-describedby="datefeedback">
								<div id="datefeedback" class="invalid-feedback">
									You must pick a date
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="job-location" class="row">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-location-dot"></i> Location Details</h5>
						<p><small>Let the helpes know when you need the job done, this will help them plan in case they have other jobs going</small></p>
					</div>
					<div class="col-md-8 p-4">
						<div class="<?php echo($custom_field_row)?>">
							<div class="custom-control custom-switch <?php echo($switch_greybox)?>">
								<input type="checkbox" class="custom-control-input" id="customSwitch1">
								<label class="custom-control-label" for="customSwitch1">Is something to be transported to or from another country?</label>
							</div>
						</div>
						<br>
						<div class="<?php echo($custom_field_row)?>">
							<label for="Fit">What is to be transported fits in a:</label>
						</div>
						<small id="transtypefeedback" style="color: var(--danger); display:none;">Please select a transportation type</small>
						<div id="transport-type" class="cards-options <?php echo($custom_field_row)?>">
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
						<div class="<?php echo($custom_field_row)?>">
							<label for="where">Where will it be transported?</label>
						</div>
						<small id="deliverfeedback" style="color: var(--danger); display:none;">Please select delivery type</small>
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
						<div class="<?php echo($custom_field_row_flex_end)?>">
							<div class="mb-0 flex-grow-1">
								<label for="from">From <p class="m-0"><small>Enter an address where the job is to be carried out.</small></p></label>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
								  </div>
								  <input name="address-start" type="text" class="form-control" placeholder="Type a “from” address" aria-label="from" aria-describedby="saddressfeedback">
								</div>
							</div>
							<div class="mb-3 flex-grow-0">
								<button class="btn btn-light"><i class="fa-regular fa-right-left m-0"></i></button>
							</div>
							<div class="mb-0 flex-grow-1">
								<label for="to">To <p class="m-0"><small>Write the address where the goods are to be delivered</small></p></label>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
								  </div>
								  <input name="address-end" type="text" class="form-control" placeholder="Type a “to” address" aria-label="to" aria-describedby="daddressfeedback">
								</div>
							</div>
						</div>
						<div class="<?php echo($custom_field_row)?>">
							<img src="images/samples/map-placeholder.png"alt="" class="w-100">
						</div>
					</div>
				</div>
				<div id="job-payment" class="row">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-money-check-dollar-pen"></i> Payment</h5>
						<p><small>Choose whether you want to post the job at a fixed price, hourly payment or whether you want an offer.</small></p>
					</div>
					<div class="col-md-8 p-4">
						<div class="">
							<?php include ('template-parts/job-settings/payment-type-template.php'); ?>
						</div>
					</div>
				</div>
				<div id="job-type" class="row">
					<div class="<?php echo($custom_greypanel)?>">
						<h5><i class="fa-solid fa-suitcase"></i> Type of Job</h5>
						<p><small>Chosing the right type of jon will help you have better results, do you need professionals helping you instead?</small></p>
					</div>
					<div class="col-md-8 p-4">
						<?php include('template-parts/job-settings/subscrition-options.php') ?>
						<div class="<?php echo($custom_field_row)?>">
							<div class="custom-control custom-switch <?php echo($switch_greybox)?>">
							  <input type="checkbox" class="custom-control-input" id="customSwitch2">
							  <label class="custom-control-label" for="customSwitch2">Inspection is required.<p class="m-0"><small>Only select when an inspection is absolutely necessary to agree on a price and execution of the assignment.</small></p></label>
							</div>
						</div>
						<div class="form-info dark mt-3">
							<i class="fa-solid fa-triangle-exclamation icon-md"></i>
							<p class="m-0">Grunnprofil blir brukt når du legger ut oppdrag på våre nettsider. Kun fornavnet ditt viser for andre og får varsel på SMS og e-post når hjelpere tar kontakt.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="<?php echo($custom_greypanel)?>">
<!--
						<h5><i class="fa-solid fa-xxxx"></i> xxxxx</h5>
						<p><small>xxxxx</small></p>
-->
					</div>
					<div class="col-md-8 p-4 d-flex flex-row justify-content-end align-items-center;">
						<a id="next-step" class="btn btn-primary">Next</a>
					</div>
				</div>
				
			</div>
			</div>
		</div>
		<div id="job-preview-card-title" class="row justify-content-md-center">
			<div class="col-10">
				<h1>Does it look good?</h1>
				<p>Please review, here's how helps will see your job on our platform</p>
			</div>
		</div>
		<div id="job-preview-card-body" class="row justify-content-md-center mb-3">
			<div class="col-10">
				<div class="display-results py-4">
					<div class="row result white-bg rounded shadow py-3 m-0">
						<div class="col-sm-3 image">
							
							<div href="#" class="image-holder" style="height:134px;">
								<?php if ($isPRO_job == "true"){include ("template-parts/pro-icon-badge.php");};?>
								<!--<div class="posted-label"><i class="fas fa-calendar-check"></i> Ny i dag</div>-->
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
								<p>We are moving and need helt go wash our house as soon as possible. We have 3 bedrooms and a very dirty citchen. - We want you to s <a href="#">... Read more &gt;</a></p>
							</div>
							<h4 class="green">Kr. 1500.-</h4>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div id="job-post-action" class="row justify-content-md-center mb-5">
			<div class="col-10 d-flex flex-row justify-content-end align-items-center" style="padding: 30px 20px;gap: 10px; border-top: 1px solid var(--grey);">
				<div class="disclaimer"><p>By posting you accept Minsmåjobb <a href="" target="_blank">Terms &amp; Conditions</a> </p></div>
				<a href="" class="btn btn-light"><i class="fa-solid fa-pen-to-square"></i> Edit details</a><a href="" class="btn btn-primary"><i class="fa-solid fa-check"></i> Yes, post my job!</a>
			</div>
		</div>
</div>

	<?php include ('template-parts/footer.php')?>