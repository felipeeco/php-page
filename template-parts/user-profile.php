<div class="profile-picture">
	<div class="picture-holder" id="picture-holder" style="background-image: url('<?php if (empty($profilePicter_URI)){echo('images/no-profile-pic.jpg');}else{echo($profilePicter_URI);} ?>');"></div>
	<div class="imageTools position-relative">	
		<a href="javascript:;" class="addpicture"><i class="fas fa-camera" aria-hidden="true"></i></a>
		<input type="file" class="form-control-file hide  profile_image_upload2" id="image_upload_101" data-id="101" image-name="profile_image">
		<input type="file" class="form-control-file hide  profile_image_upload2" id="image_upload_102" data-id="101" accept="image/*" image-name="profile_image" capture=""> 
		<div class="profileImg-form" style="right:20px;top:20px">
			<form action="javascript:;" method="post">
				<label for="profile-img" class="action-addpicture"><i class="fas fa-upload" aria-hidden="true"></i> Last opp fil</label> 
				<a href="javascript:;" class="action-takepicture"><i class="fas fa-camera" aria-hidden="true"></i> Ta et bilde</a> 
				<button class="btn btn-delete action-remove-profile-image" style="display:none;"><i class="fas fa-trash-alt" aria-hidden="true"></i> Slett bilde</button> 
			</form>
		</div>
	</div>
	<div id="img_job_error"></div>
</div>
<div class="rating-info">
	<!-- RATING COMES HERE-->
	<div class="personal-info">
		<span class="number"><?php echo($userName) ?></span>
		<a href="mailto:<?php echo($userEmail) ?>" class="mail"><?php echo($userEmail) ?></a>
	</div>
	<div class="r-updated d-flex">
		<ul class="ratinglist list-unstyled mx-auto">
			<li><img src="images/rating/green/rating-10.svg" alt=""></li>
			<li><img src="images/rating/green/rating-10.svg" alt=""></li>
			<li><img src="images/rating/green/rating-10.svg" alt=""></li>
			<li><img src="images/rating/green/rating-05.svg" alt=""></li>
			<li><img src="images/rating/green/rating-00.svg" alt=""></li> 
			<li class="rating-number">3.5</li>
		</ul>
	</div>
	<div class="reviews-number"><i class="fa-solid fa-comment"></i> 2 vurderinger</div>
	<!-- end of the rating-->	   
</div>