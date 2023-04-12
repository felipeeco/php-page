<!doctype html>
<!--V 2.1
+ PHP integration for loading the same side navigation navigation.php
-->
<?php 
$title = "Sok Hjelpere";
$loggin = false;
$hasnavbar = true;
$hasback = false;
$heading_pwa = '<i class="fa-solid fa-magnifying-glass text-white"></i> Sok';
$active_helper_filer = true;
$body_class = 'bg-grey'; /*only for helpers*/
$current_page = 'Hjelpere'; /*add active class to tab*/
if ($loggin == true){
	$backURL = 'dashboard.php';
}else{
	$backURL = 'welcome.php';
}
?>
<?php include ('template-parts/head.php')?>
<!--FILTER MODALS-->
<?php 
include ('template-parts/browse/modals/activeHelpersModal.php');
include ('template-parts/browse/modals/sorteringModal.php');
include('template-parts/browse/modals/typeJobModal.php');
include('template-parts/browse/modals/searchModal.php');
?>
<!-- PAGE CONTENT -->
<?php include ('template-parts/browse/tabs.php')?>
	<div class="search-job-form pb-0">
		<?php include ('template-parts/browse/state-filter.php') ?><!--CALL THE STATE FILTER HTML-->
		<?php include ('template-parts/browse/filer-list.php') ?><!--CALL THE FILTER LIST HTML-->
	</div>		
	<div class="pb-3">
		<div class="container">
			<ul class="helperslist <?php if ($hasnavbar == true){echo('mb-5 pb-5');}?>">
				<li class="helpers text-center">
				<div class="helper-info">
					<div class="helper-activity idle">Active <strong>2 Hours Ago</strong></div>
					<div class="helper-image">
						<a href="helper-profile.php">
							<img src="../images/samples/7842e668c271f5b7428f4097db5dc3f5.png" alt="">
							<div class="onlineholder"><div class="indicator-on recent"></div></div>
						</a>
					</div>
					<div class="helper-name">
						<h1>Ole andreas dell'astradda</h1>
					</div>
					<!-- RATING COMES HERE-->
					<div class="r-updated d-flex">
						<ul class="ratinglist list-unstyled mx-auto">
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
							<li class="rating-number">3.3</li>
						</ul>
					</div>
					<div class="helper-location">
						<span href="javascript:;" class="helper-location-txt"><i class="fa-duotone fa-location-dot"></i> Vestland</span>
					</div>
					<div class="helper-services-oferred oferred-2">
						<i class="fas fa-shipping-fast" aria-hidden="true"></i><i class="fas fa-hammer" aria-hidden="true"></i> 
					</div>
					<div class="hourly-rate">
						<span>Timebetaling <strong>Avtales</strong></span>
					</div>
					</div>
				</li>
				<li class="helpers text-center">
				<div class="helper-info">
					<div class="helper-activity active-now"><strong>Active Now</strong></div>
					<div class="helper-image">
						<a href="helper-profile.php">
							<img src="../images/samples/7842e668c271f5b7428f4097db5dc3f5.png" alt="">
							<div class="onlineholder"><div class="indicator-on"></div></div>
						</a>
					</div>
					<div class="helper-name">
						<h1>Zak</h1>
					</div>
					<!-- RATING COMES HERE-->
					<div class="r-updated d-flex">
						<ul class="ratinglist list-unstyled mx-auto">
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li class="rating-number">5.0</li>
						</ul>
					</div>
					<div class="helper-location">
						<span href="javascript:;" class="helper-location-txt"><i class="fa-duotone fa-location-dot"></i> DRAMMEN</span>
					</div>
					<div class="helper-services-oferred oferred-2">
						<i class="fas fa-shipping-fast" aria-hidden="true"></i><i class="fas fa-hammer" aria-hidden="true"></i> 
					</div>
					<div class="hourly-rate">
						<span>Timebetaling <strong>Avtales</strong></span>
					</div>
					</div>
				</li>
				<li class="helpers text-center">
				<div class="helper-info">
					<div class="helper-activity unactive">Active <strong>Yesterday</strong></div>
					<div class="helper-image">
						<a href="helper-profile.php">
							<img src="../images/samples/7842e668c271f5b7428f4097db5dc3f5.png" alt="">
						</a>
						<div class="onlineholder"><div class="indicator-off"></div></div>
					</div>
					<div class="helper-name">
						<h1>SRHjelper</h1>
					</div>
					<!-- RATING COMES HERE-->
					<div class="r-updated d-flex">
						<ul class="ratinglist list-unstyled mx-auto">
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li class="rating-number">5.0</li>
						</ul>
					</div>
					<div class="helper-location">
						<span href="javascript:;" class="helper-location-txt"><i class="fa-duotone fa-location-dot"></i> Vestland</span>
					</div>
					<div class="helper-services-oferred oferred-2">
						<i class="fas fa-shipping-fast" aria-hidden="true"></i><i class="fas fa-hammer" aria-hidden="true"></i> 
					</div>
					<div class="hourly-rate">
						<span>Timebetaling <strong>Avtales</strong></span>
					</div>
					</div>
				</li>
				<li class="helpers text-center">
				<div class="helper-info">
					<div class="helper-activity active-now"><strong>Active Now</strong></div>
					<div class="helper-image">
						<a href="helper-profile.php">
							<img src="https://minsmajobb.no/assets/uploads//JanrogerHaugen-1581242922.png" alt="">
						</a>
						<div class="onlineholder"><div class="indicator-on"></div></div>
					</div>
					<div class="helper-name">
						<h1>IKEAMONTOR</h1>
					</div>
					<!-- RATING COMES HERE-->
					<div class="r-updated d-flex">
						<ul class="ratinglist list-unstyled mx-auto">
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-10.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-03.svg" alt=""></li>
							<li><img src="../images/rating/green/rating-00.svg" alt=""></li>
							<li class="rating-number">3.3</li>
						</ul>
					</div>
					<div class="helper-location">
						<span href="javascript:;" class="helper-location-txt"><i class="fa-duotone fa-location-dot"></i> FJELLHA...</span>
					</div>
					<div class="helper-services-oferred oferred-2">
						<i class="fas fa-shipping-fast" aria-hidden="true"></i><i class="fas fa-hammer" aria-hidden="true"></i> 
					</div>
					<div class="hourly-rate">
						<span>Timebetaling <strong>kr. 499</strong></span>
					</div>
					</div>
				</li>
				<?php include ('template-parts/pagination.php')?>
			</ul>
		</div>
	</div>
	<?php include ('template-parts/myjs.php')?>
	<script>
//		function openNav() {
//		  document.getElementById("mySidenav").style.width = "320px";
//		}
//
//		function closeNav() {
//		  document.getElementById("mySidenav").style.width = "0";
//		}
//
//		$('#stateListSelection button').on('click', function(){
//			var contentButton = $(this).text();
//			$('#stateNotSelected').addClass('d-none');
//			$('#stateWasSelected').removeClass('d-none');
//		});
//
//		const $valueSpan = $('#valueDistance');
//		const $value = $('#distanceRange');
//		$valueSpan.html($value.val());
//		$value.on('input change', () => {
//			$valueSpan.html($value.val());
//		});
	</script>
	<script>
		let focus = document.getElementById("myTextField").focus();
	</script>
	<script>
		$(function() {                       //run when the DOM is ready
		  $("#filter, .close, .applyfilter").click(function() {  //use a class, since your ID gets mangled
//			$(".box-bar").removeClass("d-block");    
//			$(".box-bar").slideToggle("slow");
			$(".new-filters").slideToggle("slow");
			$(".iffilteron").slideToggle("slow");
		  });
		});
		
		$(function searchopen() {                       //run when the DOM is ready
		  $("#search, .search-btn").click(function() {  //use a class, since your ID gets mangled
			//$(".box-bar").removeClass("d-block");    
			$( ".search-holder" ).slideToggle( "" );
			 document.getElementById("search-title").focus();
			 document.find("#input_clear").focus();
		  });
		});
	</script>
	<script>
	var cw = $('.image-holder').width();
		$('.image-holder').css({
			'height': cw + 'px'
		});
		$('button.clear').hide();
		$('input[name=search]').keyup(function(){
		  if($(this).val().length)
			$('button.clear').show();
		  else
			$('button.clear').hide();
		});
		
		const targetDiv = document.getElementById("btn_clear");
		const btn = document.getElementById("btn_clear");
		btn.onclick = function () {
		  if (targetDiv.style.display !== "none") {
			targetDiv.style.display = "none";
		  } else {
			targetDiv.style.display = "block";
		  }
		};		
	</script>
	<script>
		$('#searchModal').on('shown.bs.modal', function () {
			$('#input_clear').focus();
		})  
	</script>
	<script>
		const acceptsInput = (elem) => {
		  if (!elem) { return false }

		  let tag = elem.tagName
		  return tag == 'INPUT' || tag == 'SELECT' || tag == 'TEXTAREA' || elem.isContentEditable || elem.tabIndex >= 0
		}

		document.addEventListener('touchend', (e) => {
		  let target = e.target
		  let dontDiscardKeyboard = target.classList.contains('do-not-hide-keyboard')

		  // On iOS tapping anywhere doesn’t
		  // automatically discard keyboard
		  if (dontDiscardKeyboard) {
		   e.preventDefault()
		   // DO ACTION HERE
			  $('button.clear').hide();
			  $('#input_clear').val('');
		  } else if (!acceptsInput(target)) {
		   document.activeElement.blur()
		  }
		})
	</script>
</body>
</html>
