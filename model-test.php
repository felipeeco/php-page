<!DOCTYPE html>
<?php
$title = 'Edit job';
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page new-job no-back';
$load_ratingModal = false;
?>
<?php include ('template-parts/head.php')?>
</div>

 <?php /*
<?php include ('template-parts/modals/cancel-job-modal.php'); ?>
<?php include ('template-parts/modals/desktop-rating-modal.php'); ?>
<?php include ('template-parts/modals/success-rating-modal.php'); ?>
<?php include ('template-parts/modals/password-change.php'); ?>
<?php include ('template-parts/modals/job-type-selector.php'); ?>
<?php include ('template-parts/modals/add-funds-modal.php'); ?>
<?php include ('template-parts/modals/job-employer-rating.php'); ?>
<?php include ('template-parts/modals/register-company-modal.php'); ?>
<?php include ('template-parts/modals/send-offer-modal.php'); ?>
<?php include ('template-parts/modals/company-confirmed.php'); ?>

*/ ?>
 

<?php include ('template-parts/modals/chat/reportUserModal.php'); ?>

 





<div class="newjob-content">
	<div class="container">
		<br>
		<br>
		<br>
			

 			<?php /*
<a href="#" class="" role="button" data-toggle="modal" data-target="#cancel-job">cancel-job-modal</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#exampleModal">desktop-rating-modal</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#rating-sent">success-rating-modal</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#password-change">password-change</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#exampleModalCenter">job-type-selector</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#add-funds">add-funds-modal</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#employerRating">job-employer-rating</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#registerCompany">register-company-modal</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#send-offer">send-offer-modal</a> <br>
<a href="#" class="" role="button" data-toggle="modal" data-target="#companyConfirmed">company-confirmed</a> <br>
*/ ?>



 


	<br>
		<br>
		<br>

<?php /*
<a href="#" class="" role="button" data-toggle="modal" data-target="#publish-job-2">publish-job</a> <br>


<a href="#" class="" role="button" data-toggle="modal" data-target="#Seinvitertehjelpere">Se inviterte hjelpere</a> <br>

*/ ?>


<?php /*
<a href="#" class="" role="button" data-toggle="modal" data-target="#fundssuggestions">funds suggestions</a> <br>


<a href="#" class="" role="button" data-toggle="modal" data-target="#hireHelper">hire Helper</a> <br>

<a href="#" class="" role="button" data-toggle="modal" data-target="#inviteHelper">invite Helper</a> <br>
*/ ?>




<a href="#" class="" role="button" data-toggle="modal" data-target="#payment-option-modal">Strex confirm</a> <br>

<a href="#" class="" role="button" data-toggle="modal" data-target="#payment-option-modal-1">Price estimate - mobile desing</a> <br>

<br>
<br>
<br>
<hr>
<br>



<a href="#" class="" role="button" data-toggle="modal" data-target="#reportUserModal">reportUserModal</a> <br>
					
			
			
		<br>
		<br>
		<br>
	</div>
</div>


<?php include ('template-parts/footer.php')?>



<div class="modal fade sendofferModal " id="payment-option-modal"  aria-modal="true">

<div class="modal-dialog modal-lg">
	<div class="modal-content">
				<div class="modal-body">
			<div class="container-fluid form-content">
				<div class="row">
					<div class="col-md-5 order-md-1 info gradient-bg">
						<h3>Strex oppsett</h3>
						<hr>
						<div class="ad-sample">
							<h4> </h4>
							<ul class="list-unstyled alerts">
								 


								
							</ul>
						</div>
					</div>
					<div class="col-md-7 order-md-2 form">
						<h1><svg xmlns="http://www.w3.org/2000/svg" width="38.138" height="29.226" viewBox="0 0 38.138 29.226">  <g id="Grupo_188" data-name="Grupo 188" transform="translate(-10.2 -18)">    <path id="Trazado_168" data-name="Trazado 168" d="M24.305,18h6.467c1.866,0,3.776.043,5.642.087.955.043,1.91.087,2.864.174a4.859,4.859,0,0,1,2.864,1.085,5.009,5.009,0,0,1,1.779,3.342c.043.3.043.564.087.868.13,1.128.13,2.3.174,3.472.043,2.474.043,4.9,0,7.378a7.692,7.692,0,0,0-2-.651c0-1.476.043-2.995,0-4.47H12.24c0,2.257,0,4.557.043,6.814.043.825.043,1.693.13,2.517a3.285,3.285,0,0,0,.043.651,3.24,3.24,0,0,0,1.649,2.3,2.181,2.181,0,0,0,1.042.26c.174,0,.347.043.521.043.694.043,1.389.087,2.127.13q5.013.13,10.025.13c2.43,0,4.817,0,7.248-.087a5.861,5.861,0,0,0,1.042,2c-2.127.043-4.253.087-6.38.087-3.125,0-6.293,0-9.418-.043-1.476-.043-2.951-.043-4.427-.174-.347,0-.651-.087-1-.087a4.868,4.868,0,0,1-3.038-1.432,5.185,5.185,0,0,1-1.432-3.342,7.1,7.1,0,0,0-.087-.955c-.087-1.649-.13-3.3-.13-4.9V29.414a1.75,1.75,0,0,0,0-.477c0-.911,0-1.779.043-2.691.043-1,.043-1.953.174-2.951a5.26,5.26,0,0,1,1.866-3.906A4.592,4.592,0,0,1,15.148,18.3c1.085-.087,2.213-.13,3.3-.174,1.823-.043,3.646-.087,5.512-.087A.955.955,0,0,1,24.305,18m-6.467,2.127c-.825.043-1.649.043-2.474.13a2.8,2.8,0,0,0-.868.13,2.96,2.96,0,0,0-1.562,1.345,3.236,3.236,0,0,0-.434,1.649c-.043.434-.087.868-.087,1.3H42.142a6.475,6.475,0,0,0-.087-.911c0-.174-.043-.3-.043-.477a3.187,3.187,0,0,0-1.042-2.344,2.578,2.578,0,0,0-1.649-.694c-.174,0-.347-.043-.521-.043-.651-.043-1.3-.087-1.953-.087-1.693-.043-3.342-.087-5.034-.087-1.866,0-3.732-.043-5.642,0C23.35,20.04,20.573,20.04,17.838,20.127Z" fill="#465b61"></path>    <path id="Trazado_169" data-name="Trazado 169" d="M24.659,55.249a7,7,0,0,1,2.127.087,1.179,1.179,0,0,1,.911.521,1.516,1.516,0,0,1,.217.564,3.226,3.226,0,0,1,.13,1.128,7.011,7.011,0,0,1-.087,1.345l-.13.521a1.015,1.015,0,0,1-.694.694c-.174.043-.3.043-.477.087a2.867,2.867,0,0,1-1.042.13,6.57,6.57,0,0,1-1.3-.087c-.217-.087-.434-.043-.608-.13a1.1,1.1,0,0,1-.651-1,7.707,7.707,0,0,1-.087-2,6.429,6.429,0,0,1,.13-.825,1.08,1.08,0,0,1,.738-.868c.13-.043.3-.043.477-.087A.468.468,0,0,1,24.659,55.249Z" transform="translate(-7.211 -21.061)" fill="#465b61"></path>    <path id="Trazado_170" data-name="Trazado 170" d="M76.985,57.881a7.375,7.375,0,0,1,3.857.7,6.851,6.851,0,0,1,3.1,3.035,7.113,7.113,0,0,1-6.828,10.369A7.111,7.111,0,0,1,73,70.21a6.789,6.789,0,0,1-1.96-2.845,6.993,6.993,0,0,1,2.4-8.093,6.659,6.659,0,0,1,3.541-1.391m0,3.1v3.1H74.076v1.707h2.908v3.351h1.834V65.785h2.908V64.077H78.818v-3.1Z" transform="translate(-36.402 -24.773)" fill="#465b61"></path>  </g></svg> Avtale om faktura</h1>
						<form action="javascript:;" autocomplete="on" style="margin-top: 30px" class="credit-card" id="offer-info-popup">  
						
						
						      <input type="hidden" value="11471" name="user_id">  <input type="hidden" value="18242" name="job_id">  <input type="hidden" value="when-get-job" name="payment_job_type">  <input type="hidden" value="0" name="invite_id">  <input type="hidden" value="strex" name="payment_option_type">  <input type="hidden" value="Y" name="acceptInfo"> 						
							<input type="hidden" name="job_id" id="job_id" value="18242">
							
							<div class="form-group">
								<label for="message_from_helper">
								
								Inngå en Strexavtale for bedre oversikt og enklere bruk
av nettsidene. Ved avtaleinngåelse bekrefter du 
at vi kan belaste påløpte gebyrer på din mobilfaktura. <br><br>

Bekreft avtale ved å taste inn 4-sifret kode sendt på SMS:
								
								</label>
								<input type="text" id="confirm_number" name="confirm_number" class="form-control ">
								
								<input type="hidden" id="transactionId" name="transactionId" value="165962070762ebcd63cd2af9.86154563">
								
								
								
							</div> 
							
					 
							
							<div id="confirm_number_msg"></div>
							
							<button type="button" class="btn btn-primary mr-auto " id="continue_confirm_number">Neste &gt;</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div></div>



<div class="modal fade sendofferModal " id="payment-option-modal-1" aria-modal="true"  >
<div id="send-estimate-modal" class="estimate-inspection-modal"> 

<div class="modal-dialog  p-0 message-employer-modal">
		<div class="modal-content">
			<div class="modal-header d-block text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="far fa-times-circle" aria-hidden="true"></i></span>
				</button>

				<i class="fas fa-comments-alt-dollar icon-header" aria-hidden="true"></i>
				<h5 class="modal-title" id="readContractLabel">Send et prisforslag</h5>
				 
			</div>
			<div class="modal-body">
				<form action="javascript:;" id="offer-info-popup">
					
					<input type="hidden" value="offer" name="offertype">
					<input type="hidden" value="18239" name="job_id">
										
					 
					<div class="form-group px-3 px-md-5">
						<label for="Description">Fortell litt om deg selv og hvorfor du eller ditt
firma er rett for jobben.</label>
						<textarea class="form-control" name="message_from_helper" id="message_from_helper" rows="3" placeholder="F.eks. Jeg har 10 års erfaring og har godt humør, god service og gode priser etc."></textarea>
					</div>
					<div class="form-group position-relative px-3 px-md-5">	
						<label for="">Ditt forslag</label>
						<div class="d-flex form-price align-items-center">
							<input type="text" class="form-control input-white grey-placeholder" name="your_offer" id="your_offer" value="" placeholder="00">
							
							
							<div class="form-check mx-2">
								<input class="form-check-input" type="radio" id="exampleRadios2" checked="" name="price_hourly" value="total_payment">
								<label class="form-check-label" for="exampleRadios2"><i class="fas fa-tag" aria-hidden="true"></i> Pris totalt</label>
							</div>
							
							<div class="form-check ">
								<input class="form-check-input" type="radio" id="exampleRadios1" name="price_hourly" value="per_hour">
								<label class="form-check-label" for="exampleRadios1"><i class="fas fa-hourglass-half" aria-hidden="true"></i> Pris/time</label>
							</div>
							
						</div>
					</div>
					<div class="form-group px-3 px-md-5">
						<input type="text" class="form-control input-grey" placeholder="00" name="expected_hours">
						<span class="form-check d-inline">
							<label for="Description" class="form-check-label working-hours pl-0"><i class="fas fa-clock" aria-hidden="true"></i> Forventet tidsbruk i hele timer.</label>
						</span>
					</div>
					<div class="form-group d-md-flex px-3 px-md-5">
						<div class="form-check ml-2" style="flex: 1;">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="i_am_profesional" value="1">
							<label class="form-check-label" for="inlineCheckbox1">Jeg/vi er fagulært for
oppdraget som skal utføres.</label>
						</div>
											</div>
					<div class="form-middle-info ">
						<i class="fas fa-exclamation" aria-hidden="true"></i>
												<p>
						Kontaktinformasjon i prisforslaget er ikke tillatt og vil resultere i tap av
befaringsgebyr og begrensing av konto. Forslaget er ikke bindende
men skal etter beste evne være korrekt etter tilgjengelig informasjon
i annonsen.
						</p>

					</div>
					<div class="whitebox">
						<ul class="nav justify-content-center m-0">
							<!--
							<li><a class="btn-back close bodyScroll action-estimate-the-job-form-back"   data-id="18239"   ><i class="fas fa-chevron-left" aria-hidden="true"></i> Tilbake</a></li>-->
							<li><button type="button" class="btn-continue btn-offer-funds-option-1 " data-id="18239">Send tilbud</button></li>
						</ul>
					</div>
					
					<div id="funds_option_msg"></div> 
					
				</form>
			</div>
		</div>
	</div> 
</div>	</div>



<?php /*
<div class="modal fade sendofferModal" id="fundssuggestions"  aria-hidden="true">

 
<div id="add-funds-suggestions">

<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header gradient-bg">
			<a class="navbar-brand" href="javascript:;">
				<img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;">
			</a>
			<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"></path>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"></path>  </g></svg>
			</button>
		</div>
		<div class="modal-body">


 <div class="container-fluid form-content">
				<div class="row">
					<div class="col-md-5 order-md-1 info gradient-bg">
						<h3>Betaling</h3>
						<hr>
						<div class="ad-sample">
							<h4>Det er helt gratis dersom du ikke får jobben!</h4>
							<ul class="list-unstyled alerts">
								<li>Vi vil reservere tjenestegebyret
kr. 8 på kontoen din.</li>
								
								 <li>Reservasjon vil gjøre at beløpet blir låst
og ikke lenger er disponibelt på 
kontoen din. Vi trekker det reserverte
beløpet kun om du får jobben eller deler
kontaktinformasjon før du formelt
er valgt som hjelper.</li>

	<li>Pengene blir aldri reservert lengre enn
5-7 dager og det er ingen kostnader
forbundet med dette.</li>

								
							</ul>
						</div>
					</div>
					<div class="col-md-7 order-md-2 form">
						<h1><svg xmlns="http://www.w3.org/2000/svg" width="38.138" height="29.226" viewBox="0 0 38.138 29.226">  <g id="Grupo_188" data-name="Grupo 188" transform="translate(-10.2 -18)">    <path id="Trazado_168" data-name="Trazado 168" d="M24.305,18h6.467c1.866,0,3.776.043,5.642.087.955.043,1.91.087,2.864.174a4.859,4.859,0,0,1,2.864,1.085,5.009,5.009,0,0,1,1.779,3.342c.043.3.043.564.087.868.13,1.128.13,2.3.174,3.472.043,2.474.043,4.9,0,7.378a7.692,7.692,0,0,0-2-.651c0-1.476.043-2.995,0-4.47H12.24c0,2.257,0,4.557.043,6.814.043.825.043,1.693.13,2.517a3.285,3.285,0,0,0,.043.651,3.24,3.24,0,0,0,1.649,2.3,2.181,2.181,0,0,0,1.042.26c.174,0,.347.043.521.043.694.043,1.389.087,2.127.13q5.013.13,10.025.13c2.43,0,4.817,0,7.248-.087a5.861,5.861,0,0,0,1.042,2c-2.127.043-4.253.087-6.38.087-3.125,0-6.293,0-9.418-.043-1.476-.043-2.951-.043-4.427-.174-.347,0-.651-.087-1-.087a4.868,4.868,0,0,1-3.038-1.432,5.185,5.185,0,0,1-1.432-3.342,7.1,7.1,0,0,0-.087-.955c-.087-1.649-.13-3.3-.13-4.9V29.414a1.75,1.75,0,0,0,0-.477c0-.911,0-1.779.043-2.691.043-1,.043-1.953.174-2.951a5.26,5.26,0,0,1,1.866-3.906A4.592,4.592,0,0,1,15.148,18.3c1.085-.087,2.213-.13,3.3-.174,1.823-.043,3.646-.087,5.512-.087A.955.955,0,0,1,24.305,18m-6.467,2.127c-.825.043-1.649.043-2.474.13a2.8,2.8,0,0,0-.868.13,2.96,2.96,0,0,0-1.562,1.345,3.236,3.236,0,0,0-.434,1.649c-.043.434-.087.868-.087,1.3H42.142a6.475,6.475,0,0,0-.087-.911c0-.174-.043-.3-.043-.477a3.187,3.187,0,0,0-1.042-2.344,2.578,2.578,0,0,0-1.649-.694c-.174,0-.347-.043-.521-.043-.651-.043-1.3-.087-1.953-.087-1.693-.043-3.342-.087-5.034-.087-1.866,0-3.732-.043-5.642,0C23.35,20.04,20.573,20.04,17.838,20.127Z" fill="#465b61"></path>    <path id="Trazado_169" data-name="Trazado 169" d="M24.659,55.249a7,7,0,0,1,2.127.087,1.179,1.179,0,0,1,.911.521,1.516,1.516,0,0,1,.217.564,3.226,3.226,0,0,1,.13,1.128,7.011,7.011,0,0,1-.087,1.345l-.13.521a1.015,1.015,0,0,1-.694.694c-.174.043-.3.043-.477.087a2.867,2.867,0,0,1-1.042.13,6.57,6.57,0,0,1-1.3-.087c-.217-.087-.434-.043-.608-.13a1.1,1.1,0,0,1-.651-1,7.707,7.707,0,0,1-.087-2,6.429,6.429,0,0,1,.13-.825,1.08,1.08,0,0,1,.738-.868c.13-.043.3-.043.477-.087A.468.468,0,0,1,24.659,55.249Z" transform="translate(-7.211 -21.061)" fill="#465b61"></path>    <path id="Trazado_170" data-name="Trazado 170" d="M76.985,57.881a7.375,7.375,0,0,1,3.857.7,6.851,6.851,0,0,1,3.1,3.035,7.113,7.113,0,0,1-6.828,10.369A7.111,7.111,0,0,1,73,70.21a6.789,6.789,0,0,1-1.96-2.845,6.993,6.993,0,0,1,2.4-8.093,6.659,6.659,0,0,1,3.541-1.391m0,3.1v3.1H74.076v1.707h2.908v3.351h1.834V65.785h2.908V64.077H78.818v-3.1Z" transform="translate(-36.402 -24.773)" fill="#465b61"></path>  </g></svg> Reserver avgift</h1>
						<form action="javascript:;" autocomplete="on" style="margin-top: 30px" class="credit-card" id="payment-info-offer">  
														<input type="hidden" name="offertype" id="offertype" value="offer">
														<input type="hidden" name="job_id" id="job_id" value="18241">
														<input type="hidden" name="message_from_helper" id="message_from_helper" value="Fortell litt om deg selv og hvorfor du eller ditt firma er rett for jobben. ">
														<input type="hidden" name="your_offer" id="your_offer" value="1000">
														<input type="hidden" name="price_hourly" id="price_hourly" value="total_payment">
														<input type="hidden" name="expected_hours" id="expected_hours" value="10">
														<input type="hidden" name="i_am_profesional" id="i_am_profesional" value="1">
														<input type="hidden" name="payment_option_type" id="payment_option_type" value="vipps">
														<input type="hidden" name="acceptInfo" id="acceptInfo" value="Y">
														
							<div class="form-group">
								<label for="mobile">Skriv inn mobilnummeret du har hos VIPPS.</label>
								<input id="mobile" name="mobile" type="text" class="form-control   none" required="" placeholder="">
							</div>
							<div><p>Beløp som reserveres er kr. 8</p></div>
							 
							
							<div id="payment_msg_offer"></div>
							
							<button type="button" class="btn btn-primary mr-auto btn-add-payment-offer" id="thank">Reserver</button>
						</form>
					</div>
				</div>
			</div>


</div>

</div>
</div></div></div>




<div class="modal fade publish-job-modal" id="publish-job-2"  aria-hidden="true"><div class="modal-dialog">
<div class="modal-content">
	<div class="modal-body">
		<form action="javascript:;" id="self_service_form" data-gtm-form-interact-id="0">

			<div class="white-box">
				<div class="d-flex justify-content-between">
					<div>
						<h3 role="button" class="bodyScroll action-translate-en "><i class="fas fa-globe-europe" aria-hidden="true"></i> Translate to English</h3>
						<h2>Selvbetjent godkjenning</h2>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="far fa-times-circle" aria-hidden="true"></i></span>
					</button>
				</div>

				<p>
Annonsen din publiseres med en gang
du har bekreftet at annonsen følger våre
4 enkle retningslinjer. Klikk “tilbake” for
å gjøre endringer i annonsen din.</p>

				<div class="form-group border-top">
					<div class="form-check form-check-inline mr-0">
						<input class="form-check-input" type="checkbox" id="self_approve_1" name="self_approve_1" value="1" data-gtm-form-interact-field-id="0">
						<label class="form-check-label" for="self_approve_1">Min annonse er for et oppdrag jeg ønsker utført
og IKKE for tjenester jeg ønsker å tilby.</label>
					</div>
					<div class="form-check form-check-inline mr-0">
						<input class="form-check-input" type="checkbox" id="self_approve_2" name="self_approve_2" value="1" data-gtm-form-interact-field-id="1">
						<label class="form-check-label" for="self_approve_2">Jeg forstår at jeg må kommunisere med hjelpere
på chatten frem til jeg har valgt en hjelper, eller
har avtalt tidspunkt for befaring. Min annonse
inneholder derfor ingen informasjon som kan
brukes til å kontakte meg direkte.</label>
					</div>
					
					<div class="form-check form-check-inline mr-0">
						<input class="form-check-input" type="checkbox" id="self_approve_3" name="self_approve_3" value="1" data-gtm-form-interact-field-id="2">
						<label class="form-check-label" for="self_approve_3">Jeg lover å bidra til en hyggelig møteplass og
vil besvare alle henvendelser jeg får på en
hyggelig og respektfull måte.</label>
					</div>
					
					
					<div class="form-check form-check-inline mr-0">
						<input class="form-check-input" type="checkbox" id="self_approve_4" name="self_approve_4" value="1" data-gtm-form-interact-field-id="3">
						<label class="form-check-label" for="self_approve_4">Jeg ber ikke om hjelp til noe som strider
mot Norsk lov.</label>
					</div>
					
					
					
				</div>
			</div>
			<div class="modal-footer d-block text-center">
				<p>Selvbetjent godkjenning bygger på tillit. Missbruk
av våre tjenester kan resultere i tap av bruksrett og
vi ber deg ta kontakt med kundeservice dersom
du er usikker på om ditt oppdrag kan legges ut.</p>

				
				<a class="btn btn-primary action-close-publish-popup" href="javascript:;"><i class="fas fa-exchange-alt" aria-hidden="true"></i>  Tilbake</a>
				
				
					
				<a class="btn btn-danger btn-update-job1" id="action-job-manalApproval" href="javascript:;" style=""><i class="fas fa-eye" aria-hidden="true"></i>Bekreft alle 4 punkter</a>
				<a class="btn btn-outline-primary btn-update-job" id="action-job-selfApproval" style="display: none;" href="javascript:;"><i class="fak fa-yencheck" aria-hidden="true"></i> Legg ut jobb</a>
								
				
			</div>
		</form>
	</div>
</div>
</div>

</div>






<div class="modal fade" id="Seinvitertehjelpere" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog p-0 message-employer-modal">
	<div class="modal-content ">
		<div class="modal-header p-3 px-md-5 pt-md-4">
			<h5 class="modal-title mt-3 mt-md-0"> Du kan invitere 5 hjelpere</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><i class="far fa-times-circle" style="color:#fff" aria-hidden="true"></i></span>
			</button>
		</div>
		<div class="modal-body">
			<div class="px-3 px-md-5" id="awardUser-form">
				<p>Du kan kommunisere med totalt 5 hjelpere på hvert oppdrag.
Du kan kansellere invitasjoner til hjelpere som ikke har besvart
henvendelsen din og heller invitere noen andre. Vær oppmerksom
på om du inviterer 5 hjelpere vil ikke andre interesserte kunne ta
 kontakt på oppdraget.</p>
					
								

				
				<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2">
					<div class="d-flex align-items-center">
						<img src="https://dev.buildwebsite.co.in/assets/uploads/Dineshb-1597044003.png" class="user">
						<div class="personal-info">
							<span class="name">DineshB</span>
							<p class="filsonfont"><i class="fas fa-clock" aria-hidden="true"></i> Avventer svar 01.07.2022</p>
						</div>
					</div>
					<a class="btn btn-danger action-cancle-invite" data-invite_id="122" data-job_id="18237" href="javascript:;"><i class="fas fa-times mr-1" aria-hidden="true"></i> Kanseller</a>
				</div>
				
								

				
				<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2">
					<div class="d-flex align-items-center">
						<img src="https://dev.buildwebsite.co.in/assets/uploads/Fname12-1636626049.png" class="user">
						<div class="personal-info">
							<span class="name">twelvef</span>
							<p class="filsonfont"><i class="fas fa-clock" aria-hidden="true"></i> Avventer svar 01.07.2022</p>
						</div>
					</div>
					<a class="btn btn-danger action-cancle-invite" data-invite_id="123" data-job_id="18237" href="javascript:;"><i class="fas fa-times mr-1" aria-hidden="true"></i> Kanseller</a>
				</div>
				
								

				
				<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2">
					<div class="d-flex align-items-center">
						<img src="https://dev.buildwebsite.co.in/assets/uploads/no-profile-pic.jpg" class="user">
						<div class="personal-info">
							<span class="name">Fname07</span>
							<p class="filsonfont"><i class="fas fa-clock" aria-hidden="true"></i> Avventer svar 01.07.2022</p>
						</div>
					</div>
					<a class="btn btn-danger action-cancle-invite" data-invite_id="126" data-job_id="18237" href="javascript:;"><i class="fas fa-times mr-1" aria-hidden="true"></i> Kanseller</a>
				</div>
				
								
				
								
					<div class="awardUser-container d-flex justify-content-between align-items-center mb-2 py-2">
						<div class="d-flex align-items-center">
							<i class="fal fa-user-plus user" aria-hidden="true"></i>
							<div class="personal-info">
								<span class="name">2 Ledige plasser</span>
							</div>
						</div>
						<a class="btn btn-outline-primary" href="https://dev.buildwebsite.co.in/services"><i class="fas fa-share ml-1" aria-hidden="true"></i> Inviter </a>
					</div>
				
				
								
				
			</div>
		</div>
					
		<div class="modal-footer d-block text-center gradient-bg py-4 mt-2">
		  
			
							<a href="https://dev.buildwebsite.co.in/services" class="btn btn-primary-white px-5"><i class="fas fa-share" aria-hidden="true"></i> Inviter andre </a>
						</div>
	</div>
</div></div>




<div class="modal fade" id="hireHelper" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog 22">
                <div class="modal-content" style="max-width: 801px;margin: 0px auto;">
                    <div class="modal-header gradient-bg">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;">
                        </a>
                        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">
                                <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">
                                    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"></path>
                                    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-content">
                            <div class="success-message bottom-sharp-corner">
                                <div class="white-box">
                                    <h1> Ønsker du å velge twelvef for oppdraget ditt?</h1>
                                </div>
                            </div>
                            
                            <div class="info quick-message-contact gradient-bg">
                                <img src="https://dev.buildwebsite.co.in/assets/uploads/Fname12-1636626049.png" style="height:90px;" alt="">
                                <div class="forminput-message">
                                </div>
								
								 
								
								<p>
Du bekrefter samtidig at oppdraget er ferdig diskutert og
at du aksepterer et avbestillingsgebyr kr. 6.-
om du må kansellere oppdraget.
</p>

<p>
Vær oppmerksom på at andre hjelpere som tok kontakt
vil bli fjernet fra kontaktlisten din.
</p>
								

                                <p class="text-center hire-btn-group d-block">
                                    <a href="javascript:;" data-dismiss="modal" class="btn btn-default">Ikke ennå</a>
                                    <a href="javascript:;" class="btn btn-default action-hire-helper" data-user_id="830" data-job_id="18251" data-helper="Y" id="hire_830_18251" data-first_name="twelvef" data-img="https://dev.buildwebsite.co.in/assets/uploads/Fname12-1636626049.png">Velg twelvef</a>
                                </p>
                                <div class="action-hire-helper-msg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
			
			
			
			
			
			


<div class="modal fade" id="inviteHelper" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">			
<div class="modal-dialog modal-lg">
	<div class="modal-content">	
		<div class="modal-header">
			<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
		</div>
		<div class="modal-body">
				
				
					
				<div class="header">
								
					<h1><img src="https://dev.buildwebsite.co.in/assets/uploads/Kirti-1600295114.png" alt=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kirti</font></font></strong></h1>
				</div>
				<div class="grey-box content-popup">
					<p style="color: #9A9A9A"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					Create a </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">new task</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> just for this helper, or </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">invite</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> the helper to get in touch on a task that you have already posted.
					</font></font></p>
					
					
					
				<div class="btns">			
					<a href="javascript:;" class="btn btn-secondary  btn-service-job" data-type="existing_job"><i class="fas fa-check" style="font-weight: bolder" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Invite</font></font></a>				
					<a href="javascript:;" class="btn btn-primary pull-right btn-service-job" data-type="new_job"><i class="fas fa-plus-circle" style="font-weight: bolder" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New assignment</font></font></a>				
				</div>
				</div>	

			 			
		</div>
	</div>
</div>

</div>

*/ ?>