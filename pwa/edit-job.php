<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-->
<!doctype html>
<?php 
$title = "Edit Job"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasback = true;
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'page no-back bg-grey new-job';
$heading_pwa = 'Edit Job';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
		<div class="newjob-content mt-3">
			<div class="container">
				<div class="closing-suggestions">
					<span>Didn’t the job happened  after all? <br><a href="#" class="" role="button" data-toggle="modal" data-target="#cancel-job">Click here</a> to cancel it</span>
				</div>
				<form action="" class="squared-form">
					<div class="form-group">
						<label for="job-title">Overskrift</label>
						<input type="text" name="job-title" id="" placeholder="Ex. Help with Painting" value="AC etterfylle R13A kjølegass">
					</div>
					<div class="form-group">
						<label for="Description">Beskrivelse</label>
						<textarea class="form-control" id="Description" rows="3" placeholder="Describe the assignment as well as possible…">Hei, kan du stoppe evt. lekkaje og etterfylle gass til BMW 730?</textarea>
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Add Photos 
							<div class="holder"><div class="pic-upload"></div><div class="pic-upload uploaded imgid-234323 job-img ajaximg" style="background-image: url('https://minsmajobb.no/assets/uploads/1654577312-2785308464992434819374437271736686778801589n1.jpg');"><a href="javascript:;" class="delete delete-img " data-img="1649763849-aubreyodommabeyITzfgP77DTgunsplash.jpg"><i class="fas fa-times-circle" aria-hidden="true"></i></a> <input type="hidden" value="1649763849-aubreyodommabeyITzfgP77DTgunsplash.jpg" name="image[]"> </div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div></div></label>
						<input type="file" class="form-control-file hide" id="exampleFormControlFile1">
					</div>
					<div class="form-group">
						<label for="time">Is it urgent?</label>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#urgent-modal">How urgent is this job? <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="dateUrgent" />
					</div>
					<div class="form-group">
						<label for="time">Type Bil &amp; Båt</label>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#needed-modal">Select <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="neededJob" />
					</div>
					<div class="form-group">
						<label for="time">Hvor?</label>
						<small class="form-text">Skriv inn en adresse der jobben skal utføres.</small>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#where-modal">Select <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="whereJob" />
					</div>
					<div class="form-group">
						<label for="job-title">Hvor?</label>
						<small class="form-text">Skriv inn en adresse der jobben skal utføres.</small>
						<input type="text" name="location-addess" id="" placeholder="Ex. Oslo" value="0154 Oslo">
					</div>
					<!-- space for the map -->
					<?php echo 'Map Goes here'?>
					<br>
					<div class="form-group">
						<label>Payment</label>
						<small class="form-text">Velg om du vil legge ut jobben til fast pris, timebetaling eller om du ønsker tilbud.</small>
					</div>
					<?php 
						//call payment type pills
						include ('../template-parts/job-settings/payment-type-template.php');
						//for test only
						$current_selection = 'empty'; //other variables| error | selected | empty
						include ('../template-parts/job-settings/job-type-selector.php');
						//call the selector modal
						include ('../template-parts/modals/job-type-selector.php');
					?>
					<div class="form-check mt-4">
					  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					  <label class="form-check-label" for="flexCheckDefault">
						<strong>This job requires 	an inspection</strong>
						<p>This means that you only want inquiries from helpers who can come for an inspection</p>
					  </label>
					</div>
					<hr>
					<ul class="form-footer nav justify-content-between">
						<li><a class="btn btn-outline-light" href="welcome.php"><i class="fas fa-times"></i> Cancel</a></li>
						<li><a class="btn btn-primary" href="new-job-transport-2.php">Save <i class="fas fa-check"></i></a></li>
					</ul>
				</form>
			</div>
		</div>
		<div class="modal" id="urgent-modal">
			<div class="modal-dialog modal-dialog-centered selectFormModal">
				<div class="modal-content">
					<div class="modal-body">
						<div class="white-box p-4">
							<div class="modal-header d-flex align-items-center p-0">
								<h2 class="title"><i class="far mr-1 fa-stopwatch"></i> Is it urgent?</h2>
								<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="formOptions mt-4">
								<h2 id="urgentOption">It's urgent!</h2>
								<div class="addCalendar">
									<h2>Before a date <i class="far fa-calendar-exclamation"></i> </h2>
									<div class="customCalendar">
										<div id="calendarBeforeDate"></div>
									</div>
								</div>
								<div class="addCalendar">
									<h2>On a date <i class="far fa-calendar-star"></i></h2>
									<div class="customCalendar">
										<div id="calendarOnDate"></div>
									</div>
								</div>
								<button type="button" aria-label="Close" data-dismiss="modal" class="btn py-3 btn-primary">Apply changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="needed-modal">
			<div class="modal-dialog modal-dialog-centered selectFormModal">
				<div class="modal-content">
					<div class="modal-body">
						<div class="white-box p-4">
							<div class="modal-header d-flex align-items-center p-0">
								<h2 class="title"><i class="far mr-1 fa-question-circle"></i> Type Bil &amp; Båt</h2>
								<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="formOptions mt-4">
								<div class="form-option">
									<input type="radio" name="neededJob" value="bag" id="bag">
									<label for="bag">Vedlikehold</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="smallcar" id="smallcar">
									<label for="smallcar">Lakk &amp; maling</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="van" id="van">
									<label for="van">Reparasjoner</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="bigvan" id="bigvan">
									<label for="bigvan">Feilsøking</label>
								</div>
								<button type="button" aria-label="Close" data-dismiss="modal" class="btn py-3 btn-primary">Apply changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" id="where-modal">
			<div class="modal-dialog modal-dialog-centered selectFormModal">
				<div class="modal-content">
					<div class="modal-body">
						<div class="white-box p-4">
							<div class="modal-header d-flex align-items-center p-0">
								<h2 class="title"><i class="far mr-1 fa-map-marker-question"></i> Where</h2>
								<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="formOptions mt-4">
								<div class="form-option">
									<input type="radio" name="whereJob" value="within" id="within">
									<label for="within">Within Norwegian borders</label>
								</div>
								<div class="form-option">
									<input type="radio" name="whereJob" value="outside" id="outside">
									<label for="outside">Outside Norwegian borders</label>
								</div>
								<button type="button" aria-label="Close" data-dismiss="modal" class="btn py-3 btn-primary">Apply changes</button>
							</div>
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
  </body>
</html>