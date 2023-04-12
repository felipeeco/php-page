<div class="helper-image">
	<img src="<?php if (empty($profilePicter_URI)){echo('../images/no-profile-pic.jpg');}else{echo($profilePicter_URI);} ?>" alt="<?php echo($userName) ?> Picture" width="80" height="80" class="w-auto">
	<?php if ($userBadge == 'PRO'){
			echo ('<img src="../images/icons/pro-badge.svg" alt="Professional User" class="profile-badge" style="position: relative; margin: -31px auto; transform: translateX(24px);"/><span class="profile-badge-tooltip pro-badge">Fagmann</span>');
		}else if ($userBadge == 'BUSINESS'){
			echo ('<img src="../images/icons/business-badge.svg" alt="Business" class="profile-badge" style="position: relative; margin: -31px auto; transform: translateX(24px);"/><span class="profile-badge-tooltip pro-badge">Business</span>');
		}else{
	}?>	
</div>
<div class="helper-grid-rating text-left">
	<h1 class="helper-name"><?php echo($userName) ?></h1>
	<!-- RATING COMES HERE-->
	<div class="r-updated d-flex">
		<ul class="ratinglist list-unstyled">
			<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
			<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
			<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
			<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
			<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
			<li class="rating-number">3.3</li>
		</ul>
	</div>
	<div class="reviews-number"><i class="fa-solid fa-comment"></i> 45 reviews</div>
	<!-- end of the rating-->
</div>