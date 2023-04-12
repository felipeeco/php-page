<!doctype html>
<?php 
// PWA
$title = 'Innstillinger';
$loggin = true	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = true;
$backURL = 'dashboard.php';
$heading_pwa = $title;
$body_class = 'bg-grey';
$os_type = 'ios';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<!--		 gratis Modal -->
<div class="modal fade rateus-modal mobile-modal" id="gratis_modal" tabindex="-1" aria-labelledby="gratis_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" id="bottom-modal">
	<div class="modal-content">
	  <div class="modal-body text-center">
		  <div class="white-box">
			  	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
			  	<i class="fa-solid fa-envelope circle-me outter"></i>
			  	<br>
				<h1 class="text-center">Gratis</h1>
			 	<div class="current checked d-block mr-auto ml-auto mt-2 mb-3" style="width: 140px;"><span style="vertical-align:baseline;">Current Plan</span> <i class="fa-solid fa-circle-check m-1"></i></div>
				<p>Fungerer for de aller fleste og er det beste valget for deg som ser etter noe å gjøre av og til.</p>
				<p>Det er ingen abonnementskostnader og du betaler kun for de oppdrag du får og de befaringer du avtaler.</p>
				<p>Vi varsler deg på e-post om nye oppdrag daglig.</p>
		  </div>
	  </div>
	</div>
  </div>
</div>
<!--		 varsling Modal -->
<div class="modal fade rateus-modal mobile-modal" id="varsling_modal" tabindex="-1" aria-labelledby="varsling_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" id="bottom-modal">
	<div class="modal-content">
	  <div class="modal-body text-center">
		  <div class="white-box">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
			  	<i class="fa-solid fa-comment-sms circle-me outter"></i>
			  	<br>
				<h1 class="text-center">SMS varsling</h1>
				<p>Passer for deg som er aktiv og ønsker kontakt med oppdragsgiver med en gang nye oppdrag legges ut. Rask respons resulterer ofte i rask avtale.</p>
				<div class="subs-info-price text-center m-4">
					<h4 class="price w-100 m-0 bigger-3">199.-</h4>
					<p class="m-1">pr. mnd. (ubegrenset SMS)</p>
				</div>
			  <p><small>(For at ikke noen få betalende hjelpere skal overkjøre de med grats medlemsskap begrenser vi til 1 abonnement pr. postnummer. Det kan derfor oppstå kø/ventetid på noen postnummer)</small></p>
			  <a href="#" class="btn btn-primary">Oppgrader</a>
		  </div>
	  </div>
	</div>
  </div>
</div>
<!--		 Proff Modal -->
<div class="modal fade rateus-modal mobile-modal" id="proff_modal" tabindex="-1" aria-labelledby="proff_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" id="bottom-modal">
	<div class="modal-content">
	  <div class="modal-body text-center">
		  <div class="white-box">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
			  	<i class="fa-solid fa-user-tie circle-me outter"></i>
			  	<br>
				<h1 class="text-center">Proff</h1>
				<p>Alt inkludert. Ingen befaring/ eller oppdragsgebyr. Faktura sendes etterskuddsvis hver måned til deg eller ditt firma. Øyblikkelig SMS-varsling når nye oppdrag legges ut. Oppdragsgiver får informasjon om at du er en seriøs og anbefalt hjelper*</p>
				<div class="subs-info-price text-center m-4">
					<h4 class="price w-100 m-0 bigger-3">750.-</h4>
					<p class="m-1">pr. mnd. (ubegrenset SMS)</p>
				</div>
			  <p><small>(*Profesjonell er forbeholdt 10 personer/ bedrifter pr. fylke. - Det er et krav at snittkarakter er 4 eller mer og du kan miste plassen din dersom snittkarakteren går under 4. )</small></p>
			  <a href="#" class="btn btn-primary">Oppgrader</a>
		  </div>
	  </div>
	</div>
  </div>
</div>



<div class="content">
	<div class="container">
		<div class="tab-content" id="pills-content_small-jobs">
			<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active pb-0 text-center" id="pills-employer-tab" data-toggle="pill" href="#pills-employer" role="tab" aria-controls="pills-employer" aria-selected="true">Abonnement</a>
				</li>
				<li class="nav-item ml-md-4">
					<a class="nav-link pb-0 text-center" id="pills-helper-tab" data-toggle="pill" href="#pills-helper" role="tab" aria-controls="pills-helper" aria-selected="false">Varsling</a>
				</li>
				<li class="nav-item ml-md-4">
					<a class="nav-link pb-0 text-center" id="pills-betalingsvalg-tab" data-toggle="pill" href="#pills-betalingsvalg" role="tab" aria-controls="pills-betalingsvalg" aria-selected="false">Betaling</a>
				</li>
				
			</ul>
		</div>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active active-jobs" id="pills-employer" role="tabpanel" aria-labelledby="pills-employer-tab">
				<?php// include ('../template-parts/forms/employer-profile-form.php');?>
				<div class="form-info left">You can change your subscriptions and notifications here</div>
				<div class="subscrition-options">
					
					<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#gratis_modal">
						<div class="head-title d-flex mb-2">
							<div class="label d-flex g-5"><i class="fa-solid fa-envelope"></i><h3>Gratis</h3></div>
							<div class="current checked ml-auto"><span>Current Plan</span> <i class="fa-solid fa-circle-check"></i></div>
						</div>
						<p>Fungerer for de aller fleste og er det beste valget for deg som ser etter noe å gjøre av og til.</p>
						<a href="#">Read more <i class="fa-regular fa-chevron-right"></i></a>
					</div>
					
					<div class="white-box p-3 mb-3" data-toggle="modal" data-target="#varsling_modal">
						<div class="head-title d-flex mb-2">
							<div class="label d-flex g-5"><i class="fa-solid fa-comment-sms"></i><h3>SMS varsling</h3></div>
							<div class="current ml-auto"><i class="fa-regular fa-circle"></i></div>
						</div>
						<p>Fungerer for de aller fleste og er det beste valget for deg som ser etter...</p>
						<div class="d-flex">
							<a href="#" class="d-block">Read more <i class="fa-regular fa-chevron-right"></i></a>
							<div class="subs-info-price ml-auto text-right">
								<h4 class="price w-100 m-0">199.-</h4>
								<p class="m-0">pr. mnd. (ubegrenset SMS)</p>
							</div>
						</div>
					</div>
					<div class="white-box p-3" data-toggle="modal" data-target="#proff_modal">
						<div class="head-title d-flex mb-2">
							<div class="label d-flex g-5"><i class="fa-solid fa-user-tie"></i><h3>Proff</h3></div>
							<div class="current ml-auto"><i class="fa-regular fa-circle"></i></div>
						</div>
						<p>Alt inkludert. Ingen befaring/ eller oppdragsgebyr. Faktura sendes...</p>
						<div class="d-flex">
							<a href="#" class="d-block">Read more <i class="fa-regular fa-chevron-right"></i></a>
							<div class="subs-info-price ml-auto text-right">
								<h4 class="price w-100 m-0">750.-</h4>
								<p class="m-0">pr. mnd. (ubegrenset SMS)</p>
							</div>
						</div>
					</div>
					<div class="lowerbox-highlight p-2 mb-5 bg-gradient"><i class="fa-solid fa-star"></i> Recommended</div>
				</div>
			</div>
			<div class="tab-pane fade expired-jobs" id="pills-helper" role="tabpanel" aria-labelledby="pills-helper-tab">
				<div class="form-info left">Velg avstand og type oppdrag du ønsker å bli varslet om.</div>
				<h1><i class="fa-solid fa-user-gear green"></i> Your subscription settings</h1>
				<p>Eighter we notify you on SMS or e-mail we will use the below settings to notify you only about jobs that you may be interrested in.</p>
				<hr>
				<h4>Velg avstand for varslinger</h4>
				<p>Beregnes etter luftlinje og ikke kjørestrekning. (Som referanse er Bergen - Oslo 320km luftlinje) (Avstand fra Nesttun, Bergen, Norway Du kan endre adresse i hjelperprofilen)</p>
				<!--PLEASE CODE IT THE SAME WAY YOU'RE DOING IT IN THE LIVE WEBSITE-->
				<div class="range-holder col-md-7 mr-auto ml-0">
					<div class="range">
						<input type="range" min="1" max="500" steps="1" value="351" name="profile_distance" id="profile_distance" data-gtm-form-interact-field-id="0">
					</div>
					<ul class="range-labels">
						<li>0km</li>
						<li class="active selected">128 km</li>
						<li>500km</li>
					</ul>
				</div>
				<hr>
				<h1><i class="fa-solid fa-suitcase green"></i> Type oppdrag</h1>
				<p>Velg bransjer som interesserer deg, eller fjern alle valg dersom du ikke ønsker varsler.</p>
				<div class="filter-form mt-0 mb-4">
					<div class="accordion" id="accordionExample">
						<div class="filter-group">
							<div class="filter-title" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<i class="fas fa-shipping-fast"></i> Transport <span>3</span>
								</button>
							</h2>
							</div>
							<div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="defaultCheck1" checked>
									<label for="defaultCheck1" class="form-check-label">Frakt</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="defaultCheck2" checked>
									<label for="defaultCheck2" class="form-check-label">Flytting</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="defaultCheck3" checked>
									<label for="defaultCheck3" class="form-check-label">Bortkjøring</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<i class="fas fa-broom"></i> Rengjøring
								</button>
							</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Husvask">
									<label for="Husvask" class="form-check-label">Husvask</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Flyttevask">
									<label for="Flyttevask" class="form-check-label">Flyttevask</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<i class="fas fa-seedling"></i> Hagearbeid
								</button>
							</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Planting">
									<label for="Planting" class="form-check-label">Planting og hagestell</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Graving">
									<label for="Graving" class="form-check-label">Graving og utearbeid</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-car"></i> Bil &amp; Båt
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-hammer"></i> Oppussing  <span>1</span>
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-heart"></i> Personlig
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-graduation-cap"></i> Utdanning
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-laptop-code"></i> Data
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-ruler-combined"></i> Tekstil & søm
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-spa"></i> Velvære
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-glass-cheers"></i> Event
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
						<div class="filter-group">
							<div class="filter-title" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<i class="fas fa-balance-scale-right"></i> Økonomi
								</button>
							</h2>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="filter-body form-group">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Maling">
									<label for="Maling" class="form-check-label">Maling</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Snekring">
									<label for="Snekring" class="form-check-label">Snekring</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="Reparasjon">
									<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="vedlikehold">
									<label for="vedlikehold" class="form-check-label">vedlikehold</label>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade expired-jobs" id="pills-betalingsvalg" role="tabpanel" aria-labelledby="pills-betalingsvalg-tab">
				<div class="form-info left">Velg avstand og type oppdrag du ønsker å bli varslet om.</div>	
				<div class="subscrition-options">
					<div class="white-box selected p-3 mb-3">
						<div class="head-title d-flex mb-2">
							<div class="label d-flex g-5"><h1><img src="../images/vipps-logo.svg" alt="" width="77"></h1></div>
							<div class="current checked ml-auto"><span>Active</span> <i class="fa-solid fa-circle-check"></i></div>
						</div>
						<p>Vipps er alltid tilgjengelig når du tar kontakt på oppdrag. Vipps vil reservere oppdragsgebyr på kontoen og frigjøre pengene igjen dersom gebyr ikke skal trekkes.</p>
						<p>Vi anbefaler å bruke Strex for deg som ikke ønsker at penger blir reservert på konto.</p>
						<a href="#">Read more <i class="fa-regular fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="subscrition-options">
					<div class="white-box p-3 mb-3">
						<div class="head-title d-flex mb-2">
							<div class="label d-flex g-5"><h1><img src="../images/strex-logo.svg" alt="" width="77" style="color: black;"></h1></div>
							<div class="current ml-auto"> <i class="fa-regular fa-circle"></i></div>
						</div>
						<p>Vipps er alltid tilgjengelig når du tar kontakt på oppdrag. Vipps vil reservere oppdragsgebyr på kontoen og frigjøre pengene igjen dersom gebyr ikke skal trekkes.</p>
						<p>Vi anbefaler å bruke Strex for deg som ikke ønsker at penger blir reservert på konto.</p>
						<a href="#">Read more <i class="fa-regular fa-chevron-right"></i></a>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
</div>
</div>
<?php include ('template-parts/myjs.php')?>
<script>
			var sheet = document.createElement('style'),  
			  $rangeInput = $('.range input'),
			  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

			document.body.appendChild(sheet);

			var getTrackStyle = function (el) {  
			  var curVal = el.value,
				  val = (curVal - 1) * 50,
				  style = '';

			  // Set active label
			  $('.range-labels li').removeClass('active selected');

			  var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');

			  curLabel.addClass('active selected');
			  curLabel.prevAll().addClass('selected');

			  // Change background gradient
			  for (var i = 0; i < prefs.length; i++) {
				style += '.range {background: linear-gradient(to right, #3FC698 0%, #3FC698 ' + val + '%, #fff ' + val + '%, #fff 100%)}';
				style += '.range input::-' + prefs[i] + '{background: linear-gradient(to right, #3FC698 0%, #3FC698 ' + val + '%, #EAEAEA ' + val + '%, #EAEAEA 100%)}';
			  }

			  return style;
			}

			$rangeInput.on('input', function () {
			  sheet.textContent = getTrackStyle(this);
			});

			// Change input value on label click
			$('.range-labels li').on('click', function () {
			  var index = $(this).index();

			  $rangeInput.val(index + 1).trigger('input');

			});


			$('.payment-check #strexPayment').on('change', function() {
				if($(this).is(':checked')) {
					$('#subscription-sms-modal').modal('show')
				}
				$(this).parent().toggleClass('checked');
				$('.strex-logo').toggleClass('active');
			}); 
	
			/*$(window).on('load', function() {
				$('#proff_modal').modal('show');
			});*/
	</script>
</body>
</html>