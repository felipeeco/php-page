<!--
NEW SCREEN April 2022
- PWA Rating Screen
-->
<!doctype html>
<?php 
$title = "Rate User"; /*PAGE TITLE*/
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'bg-grey position-fixed';
$headerSingle = true; /*USES NO BUTTONS IN THE HEADER*/

//DYNAMIC CONTENT
$userName = 'Sandi';
$userPictureURI = 'https://dev.buildwebsite.co.in/assets/uploads/Soonam-1649317222.png';
$jobName = 'Pussing og maling av trapp';
$jobPictureURI = '../images/samples/sample-01.jpg';
?>
<?php include ('template-parts/head.php')?>
<style>
.rating {
  --dir: right;
  --fill: #3FC698;
  --fillbg: rgba(100, 100, 100, 0.15);
  --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
  --star: url('data:image/svg+xml,<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.56 17.93"><path d="M193.08,246.86l5,.74a1.13,1.13,0,0,1,.94,1.29,1.16,1.16,0,0,1-.32.63l-3.66,3.59.87,5.15a1.14,1.14,0,0,1-1.64,1.18L189.81,257l-4.51,2.41a1.14,1.14,0,0,1-1.19-.08,1.11,1.11,0,0,1-.45-1.1l.87-5.15-3.67-3.54a1.11,1.11,0,0,1-.27-1.16,1.12,1.12,0,0,1,.9-.76l5-.74,2.26-4.65a1.13,1.13,0,0,1,1.5-.5,1.15,1.15,0,0,1,.5.5Z" transform="translate(-180.53 -241.64)"/></svg>');
  /*--star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');*/
  --stars: 5;
  --starsize: 3rem;
  --symbol: var(--star);
  --value: 1;
  --w: calc(var(--stars) * var(--starsize));
  --x: calc(100% * (var(--value) / var(--stars)));
  block-size: var(--starsize);
  inline-size: var(--w);
  position: relative;
  touch-action: manipulation;
  -webkit-appearance: none;
}
[dir="rtl"] .rating {
  --dir: left;
}
.rating::-moz-range-track {
  background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
  block-size: 100%;
  mask: repeat left center/var(--starsize) var(--symbol);
}
.rating::-webkit-slider-runnable-track {
  background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
  block-size: 100%;
  mask: repeat left center/var(--starsize) var(--symbol);
  -webkit-mask: repeat left center/var(--starsize) var(--symbol);
}
.rating::-moz-range-thumb {
  height: var(--starsize);
  opacity: 0;
  width: var(--starsize);
}
.rating::-webkit-slider-thumb {
  height: var(--starsize);
  opacity: 0;
  width: var(--starsize);
  -webkit-appearance: none;
}
.rating, .rating-label {
  display: block;
  font-family: ui-sans-serif, system-ui, sans-serif;
}
.rating-label {
  margin-block-end: 1rem;
}

/* NO JS */
.rating--nojs::-moz-range-track {
  background: var(--fillbg);
}
.rating--nojs::-moz-range-progress {
  background: var(--fill);
  block-size: 100%;
  mask: repeat left center/var(--starsize) var(--star);
}
.rating--nojs::-webkit-slider-runnable-track {
  background: var(--fillbg);
}
.rating--nojs::-webkit-slider-thumb {
  background-color: var(--fill);
  box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
  opacity: 1;
  width: 1px;
}
[dir="rtl"] .rating--nojs::-webkit-slider-thumb {
  box-shadow: var(--w) 0 0 var(--w) var(--fill);
}
</style>
<!--PAGE CONTENT-->
<?php include ('template-parts/modals/success-rating-modal.php')?>
<?php include ('template-parts/modals/confirm-rating-modal.php')?>

<div class="container mt-4 text-center">
	<h1 style="line-height: 23px;" class="mb-3 text-center"><strong>Bente! <i class="fa-solid fa-circle-check" style="color: var(--green)"></i></strong><br> <small>Hvordan var <?php echo ($userName);?>’s hjelp</small></h1>
	<p>Gi <strong><?php echo ($userName);?></strong> din ærlige tilbakemelding. Vurderinger skal kun gis etter påbegynt eller utført arbeid. Avstå fra å gi vurdering om du ikke har en reell erfaring fra ditt møte med <strong><?php echo ($userName);?></strong></p>
</div>
<div class="scroll-me">
<div class="floating-rating-overlay white-box">
	<div class="container">
	<div class="picture-holder user-4322321" style="background-image: url(<?php echo($userPictureURI)?>); width: 85px; height: 85px;"></div>
	<br>
	<form>
		<label class="rating-label"></strong>
		  <input
			class="rating m-auto"
			max="6"
			oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
			step="1"
			style="--stars:5;--value:0"
			type="range"
			value="2">
		</label>
		<div class="form-group">
			<h3 class="text-center mb-1"><small>Write a review to <?php echo ($userName);?></small></h3>
			<textarea class="form-control" name="message" id="message_rating" type="text" placeholder="Gi <?php echo ($userName);?> din ærlige tilbakemelding"></textarea>
		</div>
		<button type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#rating-sent">Gi karakter</button>
		<a href="#" class="my-3 d-block text-center">I'll do it later</a>
	</form>
	<div class="result d-flex mb-4">
		<div class="job image mr-3 d-block">
			<div class="wrap"><img src="<?php echo($jobPictureURI)?>" alt=""></div>
		</div>
		<div class="job-information">
			<h1><?php echo($jobName);?></h1>
			<div class="information">
				<div class="info description"><p>I forbindelse med at vi ønsker å gjøre en flott hage mer barnevennlig og let…</p></div>
			</div>
		</div>
	</div>
	<div class="disclaimer mb-5">
		<p><i class="fa-regular fa-circle-info"></i> Om oppdraget ikke ble noe av, eller du av andre grunner ikke ønsker å gi en vurdering kan du klikke <a href="#">her</a></p>	
		<br>
	</div>
</div>
</div>
</div>
<?php include ('template-parts/myjs.php')?>
<script type="text/javascript">/*$(window).on("load", function() {$("#confirm-rating").modal("show");});*/</script>
</body>
</html>