<!DOCTYPE html>
<?php
//DYNAMIC CONTENT
$userName = 'Sandi';
$userPictureURI = 'https://dev.buildwebsite.co.in/assets/uploads/Soonam-1649317222.png';
$jobName = 'Pussing og maling av trapp';
$jobPictureURI = 'images/samples/sample-01.jpg';

$title = 'Rate User';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page rating-page rate no-back';
$load_ratingModal = false;
$insert_scrtip = '<script>$(":radio").change(function() {console.log("New star rating: " + this.value);});</script>
<script type="text/javascript">$(window).on("load", function() {$("#confirm-rating").modal("show");});</script>

'; /*MAKE STARS WORK*/
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<?php include ('template-parts/modals/success-rating-modal.php')?>
<?php include ('template-parts/modals/confirm-rating-modal.php')?>

<div class="container">
	<div class="row">
		<div class="col-md-5" style="display:flex;justify-content:center;align-items:center;">
			<?php include ('template-parts/rating/project-information.php')?>
		</div>
		<div class="col-md-5 offset-md-2">
			<div class="content rate" style="display:flex;justify-content:center;align-items:center;padding: 0;">
				<div class="container">
					<div class="profile-picture">
						<div class="picture-holder user-4322321" style="background-image: url(<?php echo($userPictureURI)?>);"></div>
						<form class="rating mt-2">
						  <label>
							<input type="radio" name="stars" value="1" />
							<span class="icon"><span class="fa fa-star"></span></span>
						  </label>
						  <label>
							<input type="radio" name="stars" value="2" />
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
						  </label>
						  <label>
							<input type="radio" name="stars" value="3" />
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>   
						  </label>
						  <label>
							<input type="radio" name="stars" value="4" />
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
						  </label>
						  <label>
							<input type="radio" name="stars" value="5" />
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
							<span class="icon"><span class="fa fa-star"></span></span>
						  </label>
						</form>
						 <div class="form-group">
							<label for="message_rating"><h4 class="text-center">Write a review to Sandi</h4></label>
							<textarea class="form-control" name="message" id="message_rating" type="text" placeholder="Beskriv opplevelsen" rows="3"></textarea>
						  </div>
						<button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#confirm-rating">Gi karakter</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('template-parts/footer.php')?>