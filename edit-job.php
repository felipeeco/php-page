<!DOCTYPE html>
<?php
$title = 'Edit job';
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page new-job no-back';
$load_ratingModal = false;
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<?php include ('template-parts/modals/cancel-job-modal.php')?>
		<div class="newjob-content">
			<div class="container">
				<div class="row">
					<div class="col-md-5 hero-image">
						<h1><i class="fas fa-plus-circle"></i> Publish a job: Any Category other then Washing &amp; transpor</h1>
					</div>
					<div class="col-md-7 job-form">
						<div class="whitebox">
							<div class="closing-suggestions">
								<span>Didn’t the job happened  after all? <a href="#" class="" role="button" data-toggle="modal" data-target="#cancel-job">Click here</a> to cancel it</span>
							</div>
							<div>
								<div class="form-group">
									<label for="job-title">Job title</label>
									<input type="text" name="job-title" id="" placeholder="Ex. Help with Painting" value="Pre Filled Name of the Project">
								</div>
								<div class="form-group">
									<label for="Description">Description</label>
									<textarea class="form-control" id="Description" rows="3" placeholder="Please let the people know how will the work be done and what they need to complete it.">Pre filled description of the project</textarea>
								</div>
								<div class="form-group">
									<label for="exampleFormControlFile1">Images <small id="emailHelp" class="form-text text-muted">Do you have a image that illustrate well what you want done? - Please upload it.</small><div class="holder"><div class="pic-upload uploaded imgid-234323"><a href="#" class="delete"><i class="fas fa-times-circle"></i></a></div><div class="pic-upload unactive"></div><div class="pic-upload"></div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div></div></label>
									<input type="file" class="form-control-file hide" id="exampleFormControlFile1">
								</div>
								<div class="form-row form-group">
									<div class="col-md-6">
										<label for="time">Time</label>
										<select name="time" id="">
											<option value="Is it urgent?" disabled >Is it urgent?</option>
											<option value="As soon as possible/ergant" selected>As soon as possible/ergant</option>
											<option value="Before a date">Before a date</option>
											<option value="On a date">On a date</option>
											<option value="To be agreed">To be agreed</option>
										</select>
									</div>
									<div class="col-md-6">
										<label for="dateStart">Date</label>
										<input id="datepicker" placeholder="Select a New Date" type="date"/>
									</div>
								</div>
								<div class="form-group">	
									<label for="">Type of ...</label>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
									  <label class="form-check-label" for="exampleRadios1">Sub Category 1</label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" >
									  <label class="form-check-label" for="exampleRadios2">Sub Category 2</label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" >
									  <label class="form-check-label" for="exampleRadios3">Sub Category 3</label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" >
									  <label class="form-check-label" for="exampleRadios4">Sub Category 4</label>
									</div>
									
								</div>
								<div class="form-group">
									<h1>Where? <i class="fas fa-map-marker-alt"></i></h1>
									<small id="fromHelp" class="form-text text-muted">Provide where is the place to be washed.</small>
									<div class="form-row">
										<div class="col-md-6">
											<label for="ZipCode">Zip Code</label>
											<input type="text" name="ZipCode" placeholder="A-0000">
										</div>
										<div class="col-md-6">
											<label for="ZipCode">Street Address</label>
											<input type="text" name="ZipCode" placeholder="RD.0000">
										</div>
									</div>
								</div>
								<div class="form-info grey-bg"><i class="fa-regular fa-circle-exclamation"></i>We use google maps to show the route of transportation. <strong>Please enter correct information</strong></div>
								<br>
								<h1>Payment</h1>
								<?php 
									//call payment type pills
									include ('template-parts/job-settings/payment-type-template.php');
									//for test only
									$current_selection = 'selected'; //other variables| error | selected | empty
									include ('template-parts/job-settings/job-type-selector.php');
									//call the selector modal
									include ('template-parts/modals/job-type-selector.php');
								?>
								<div class="form-check mt-4">
								  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								  <label class="form-check-label" for="flexCheckDefault">
									<strong>This job requires 	an inspection</strong>
									<p>This means that you only want inquiries from helpers who can come for an inspection</p>
								  </label>
								</div>
								<hr>
								<ul class="nav justify-content-end">
									<li><a class="btn btn-light" href="new-job-transport-2.php">Cancel</a></li>
									<li><a class="btn btn-primary" href="" role="button" data-toggle="modal" data-target="#publish-job">Publish</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php include ('template-parts/footer.php')?>