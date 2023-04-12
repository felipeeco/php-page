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
					<div class="progress-bar" role="progressbar"  style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar"  style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="container">
				<form action="" class="squared-form">
					<div class="form-group">
						<label for="time">Location</label>
						<a href="#" class="btn-input" role="button" data-toggle="modal" data-target="#location-modal">How urgent is this job? <i class="far fa-chevron-right maingreen" aria-hidden="true"></i></a>
						<input type="hidden" id="locationQnty" />
					</div>
					
					<div class="form-group">
						<label for="job-title">From</label>
						<input type="text" name="fromlocation" id="" placeholder="Ex. Help with Painting">
					</div>
					<div class="form-group">
						<label for="Description">To</label>
						<input type="text" name="tolocation" id="" placeholder="Ex. Help with Painting">
					</div>
					<p class="d-flex"><i class="fal mr-2 fa-info-circle"></i> Make sure the location(s) shows correct on the map before you continue.</p>
					<a href="#" role="button" data-toggle="modal" data-target="#locationNotFound">See location not found alert</a>
					<div id="map" style="height: 400px;"> 
						<br>
						<br>
						<br>
						HERE GOES THE MAP. THIS SPACE HAS A HEIGHT OF 400PX
					</div>
					<ul class="form-footer nav justify-content-between">
						<li><a class="btn btn-outline-light" href="new-job-transport-1.php"><i class="fas fa-chevron-left"></i> Previous</a></li>
						<li><a class="btn btn-primary" href="new-job-transport-3.php">Next <i class="fas fa-chevron-right"></i></a></li>
					</ul>
				</form>
			</div>
		</div>

		<div class="modal fade" id="location-modal">
			<div class="modal-dialog modal-dialog-centered selectFormModal">
				<div class="modal-content">
					<div class="modal-body">
						<div class="white-box p-4">
							<div class="modal-header d-flex align-items-center p-0">
								<h2 class="title"><i class="far mr-1 fa-map-pin"></i> Location</h2>
								<button type="button" class="close m-0" aria-label="Close" data-dismiss="modal">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="formOptions mt-4">
								<div class="form-option">
									<input type="radio" name="locationQnty" value="oneAddress" id="oneAddress">
									<label for="oneAddress">One address</label>
								</div>
								<div class="form-option">
									<input type="radio" name="locationQnty" value="twoAddress" id="twoAddress">
									<label for="twoAddress">Two different addresses</label>
								</div>
								<button type="button" aria-label="Close" data-dismiss="modal" class="btn py-3 btn-primary">Apply</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="locationNotFound">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" aria-label="Close" data-dismiss="modal">
							<i class="far fa-times-circle"></i>
						</button>
					</div>
					<div class="modal-body publish-job-modal gradient-bg">
						<div class="white-box text-center pt-5 border-bottom-0">
							<div class="icon">
								<i class="fad text-danger fa-map-marker-slash"></i>
							</div>
							<h2 class="text-center font-weight-normal">We are sorry!</h2>
							<p class="text-dark">Google didn’t recognize the <b class="text-danger">from address</b> you have entered. Please select the address from the choices that appear when you start entering the address or company name. Try a location near by if you keep getting this error.</p>
						</div>
						<div class="modal-footer d-block text-center">
							<a class="btn btn-primary w-auto py-3" data-toggle="modal" data-dismiss="modal" href="#">Try Again</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php include ('template-parts/myjs.php')?>
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
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>

	$("input[name='neededJob'").on('change', function() {
		$("#locationQnty").val($(this).val());
	});

	$("input[name='whereJob'").on('change', function() {
		$("#whereJob").val($(this).val());
	})
	</script>

  </body>
</html>