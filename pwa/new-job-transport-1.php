<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
$title = "New Transport Job"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'page new-job no-back';
$heading_pwa = '<h1 class="text-white mt-1"><i class="fas fa-shipping-fast mr-2" aria-hidden="true"></i> New Transport Job</h1>';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
		<div class="newjob-content transport">
			<div class="progress-panel">
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="container">
				<form action="" class="squared-form">
					<div class="form-group">
						<label for="job-title">Headlinee</label>
						<input type="text" name="job-title" id="" placeholder="Ex. Help with Painting">
					</div>
					<div class="form-group">
						<label for="Description">Job description</label>
						<textarea class="form-control" id="Description" rows="3" placeholder="Describe the assignment as well as possible…"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Add Photos 
							<div class="holder"><div class="pic-upload"></div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div><div class="pic-upload unactive"></div></div></label>
						<input type="file" class="form-control-file hide" id="exampleFormControlFile1">
					</div>
					<div class="form-group">
						<label for="time">Is it urgent?</label>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#urgent-modal">How urgent is this job? <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="dateUrgent" />
					</div>
					
					<div class="form-group">
						<label for="time">What’s needed for the job?</label>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#needed-modal">Select <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="neededJob" />
					</div>
					
					<div class="form-group">
						<label for="time">Where?</label>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#where-modal">Select <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="whereJob" />
					</div>
					<ul class="form-footer nav justify-content-between">
						<li><a class="btn btn-outline-danger" href="welcome.php"><i class="fas fa-trash-alt"></i> Cancel</a></li>
						<li><a class="btn btn-primary" href="new-job-transport-2.php">Next <i class="fas fa-chevron-right"></i></a></li>
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
								<h2 class="title"><i class="far mr-1 fa-question-circle"></i> What’s needed for the job?</h2>
								<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="formOptions mt-4">
								<div class="form-option">
									<input type="radio" name="neededJob" value="bag" id="bag">
									<label for="bag">A bag</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="smallcar" id="smallcar">
									<label for="smallcar">Small car</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="van" id="van">
									<label for="van">A van or hanger</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="bigvan" id="bigvan">
									<label for="bigvan">Big van</label>
								</div>
								<div class="form-option">
									<input type="radio" name="neededJob" value="dontknow" id="dontknow">
									<label for="dontknow">I don’t know</label>
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