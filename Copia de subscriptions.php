<!DOCTYPE html>
<?php
$title = 'Subscription';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page no-back';
$load_ratingModal = false;
$insert_scrtip = "<script>
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
	</script>";
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 helper form profile-settings-form">
						<div class="row">
							<div class="col-lg-6 col-md-8 mx-auto">
								<ul class="nav nav-pills mb-4 mt-4 justify-content-center" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-subscriptions-tab" data-toggle="pill" href="#pills-subscriptions" role="tab" aria-controls="pills-subscriptions" aria-selected="true">Subscriptions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-notifications-tab" data-toggle="pill" href="#pills-notifications" role="tab" aria-controls="pills-notifications" aria-selected="true">Notifications</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">Payment Options</a>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active active-jobs" id="pills-subscriptions" role="tabpanel" aria-labelledby="pills-subscriptions-tab">
								<div class="row">
									<div class="col mx-auto">
										<div class="form-info grey-bg w-100 text-center"><i class="fal fa-info-circle"></i>You can change your subscriptions and notifications here.</div>
									</div>
								</div>	
								<div class="row">
									<div class="col-lg-4 mb-4">
										<div class="subscription-card inactive">
											<div class="card-header">
												<i class="fas fa-envelope"></i>
												<h3>Featured</h3>
											</div>
											<div class="card-body">
											  <p>This is the basic choice. We notify you about new jobs every day arround 11 o`clock.</p>
											  <p>This is good enough for most helpers that want a job now and then. Unselect this if you dont want the free daily notifications in your inbox.</p>
											  <a href="#" class="btn btn-primary" ><i class="fas fa-check"></i> Current</a>
											</div>
										  </div>
									</div>
									<div class="col-lg-4 mb-4">
										<div class="subscription-card">
											<div class="card-header">
												<i class="fas fa-sms"></i>
												<h3>Instant SMS Notifications</h3>
											</div>
											<div class="card-body">
												<p>Get instant notifications to your phone and respond quicker to emplyers. Quick responce often result in getting the job.</p>
												<p class="price">149.-</p>
												<p>/ month included unlimited SMS´s</p>
												<p class="muted">(Will be renewed every month until you uncheck. Billed by Strex.)</p>
											  <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#subscription-modal"><i class="fas fa-sms"></i> Upgrade SMS Noti</button>
											</div>
										  </div>
									</div>
									<div class="col-lg-4 mb-4">
										<div class="subscription-card">
											<div class="card-header position-relative">
												<i class="fas fa-user-tie"></i>
												<h3>Professional</h3>
												<span class="premium-label"><i class="fas fa-star"></i></span>
											</div>
											<div class="card-body">
												<p>If you are active and order help on many jobs you may save money by subscribe to a one fee each month that includes unlimited access to all jobs and bypass the payment option when contact on jobs.</p>
												<p class="price">499.-</p>
												<p>/ month and include unlimited jobs and inspections</p>
												<p class="muted">(Will be renewed every month untill you uncheck. Billed by Strex.)</p>
											  <a href="#" class="btn btn-primary"><i class="fas fa-user-tie"></i> Upgrade Professional</a>
											</div>
										  </div>
									</div>
									
								</div>
						
							</div>
							<div class="tab-pane fade expired-jobs" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab">
								<div class="col-12 mt-5">
										<div class="subscription-info">
											<form action="" class="spaced mt-4">
												<div class="form-group">
													<h1><i class="fas fa-user-cog"></i> Your subscription settings</h1>
													<p>Eighter we notify you on SMS or e-mail we will use the below settings to notify you only about jobs that you may be interrested in.</p>
													<label for="range">Select your radius for notifications</label>
													<p class="mb-0">You will be notified about new jobs in below radius from The address road</p>
													<p>(Change address in profile settings)</p>
													<div class="range-holder col-md-7 mr-auto ml-0">
														<div class="range">
															<input type="range" min="1" max="3" steps="1" value="1" name="range">
														</div>
													<ul class="range-labels">
														<li>0km</li>
														<li class="active selected">20km</li>
														<li>100km</li>
													</ul>
													</div>
												</div>

												<div class="form-group type-jobs">
													<h1><i class="fas fa-suitcase"></i> Type of jobs</h1>
													<p class="mb-0">Please select only the type of jobs that interrest you to get relevant notifications.</p>
													<div class="form-row mt-0">
														<div class="col-md-3 col-6">
															<h2 for="">Transport</h2>  
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck1">
																<label class="form-check-label" for="profileSettingsCheck1"><span>Hente & levere</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck2" checked>
																<label class="form-check-label" for="profileSettingsCheck2"><span>Flytting</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck3">
																<label class="form-check-label" for="profileSettingsCheck3"><span>Bortkjøring</span></label>
															</div>

															<h2 for="">Oppussing</h2>     
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck4">
																<label class="form-check-label" for="profileSettingsCheck4"><span>Tapet & Maling</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck5">
																<label class="form-check-label" for="profileSettingsCheck5"><span>Mur & flisg</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck6">
																<label class="form-check-label" for="profileSettingsCheck6"><span>Snekker & montering</span></label>
															</div>

															<h2 for="">Tekstil & Søm</h2>        
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck7" checked>
																<label class="form-check-label" for="profileSettingsCheck7"><span>Klær</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck8">
																<label class="form-check-label" for="profileSettingsCheck8"><span>Skotøy</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck9" checked>
																<label class="form-check-label" for="profileSettingsCheck9"><span>Interiør</span></label>
															</div>
														</div>

														<div class="col-md-3 col-6"> 
															<h2 for="">Rengjøring</h2>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck10">
																<label class="form-check-label" for="profileSettingsCheck10"><span>Vaskehjelp</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck11">
																<label class="form-check-label" for="profileSettingsCheck11"><span>Flyttevask</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck12">
																<label class="form-check-label" for="profileSettingsCheck12"><span>Fasadevask</span></label>
															</div>

															<h2 for="">Personlig</h2>   
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck25">
																<label class="form-check-label" for="profileSettingsCheck25"><span>Barnepass</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck26" checked>
																<label class="form-check-label" for="profileSettingsCheck26"><span>Dyrepass</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck27">
																<label class="form-check-label" for="profileSettingsCheck27"><span>Aktivitetspartner</span></label>
															</div>

															<h2 for="">Velvære</h2>     
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck28">
																<label class="form-check-label" for="profileSettingsCheck28"><span>Hårklipp & farge</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck29">
																<label class="form-check-label" for="profileSettingsCheck29"><span>Sminke og negler</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck30">
																<label class="form-check-label" for="profileSettingsCheck30"><span>Massasje & terapi</span></label>
															</div>
														</div>

														<div class="col-md-3 col-6">   
															<h2 for="">Hagearbeid</h2>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck13">
																<label class="form-check-label" for="profileSettingsCheck13"><span>Planting & hagestell</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck14">
																<label class="form-check-label" for="profileSettingsCheck14"><span>Graving og bæring</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck15">
																<label class="form-check-label" for="profileSettingsCheck15"><span>Snømåking</span></label>
															</div>

															<h2 for="">Utdanning</h2>   
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck16">
																<label class="form-check-label" for="profileSettingsCheck16"><span>Leksehjelp</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck17">
																<label class="form-check-label" for="profileSettingsCheck17"><span>Kurs & kultur</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck18">
																<label class="form-check-label" for="profileSettingsCheck18"><span>Øvelseskjøring</span></label>
															</div>
														</div>

														<div class="col-md-3 col-6">   
															<h2 for="">Bil &amp; Båt</h2>   
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck19">
																<label class="form-check-label" for="profileSettingsCheck19"><span>Rens & polering</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck20">
																<label class="form-check-label" for="profileSettingsCheck20"><span>Lakk & maling</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck21">
																<label class="form-check-label" for="profileSettingsCheck21"><span>Feilsøking</span></label>
															</div>

															<h2 for="">Data</h2>      
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck22">
																<label class="form-check-label" for="profileSettingsCheck22"><span>Hardware</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck23">
																<label class="form-check-label" for="profileSettingsCheck23"><span>Web & IT</span></label>
															</div>
															<div class="form-group form-check">
																<input type="checkbox" class="form-check-input" id="profileSettingsCheck24">
																<label class="form-check-label" for="profileSettingsCheck24"><span>Software</span></label>
															</div>
														</div>
													</div>
												</div>

											</form>
										</div>
									</div>
							</div>
							<div class="tab-pane fade expired-jobs" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
								<div class="row">
										<div class="form-info grey-bg w-100 text-center"><i class="fal fa-info-circle"></i>Set your payment choises here.</div>
								</div>	
								<form action="">

									<div class="row">
										<div class="col-md-6 mb-4">
											<div class="form-group form-check payment-check checked disabled">
												<input type="checkbox" class="form-check-input" id="vippsPayment" name="vippsPayment" checked disabled>
												<label class="form-check-label" for="vippsPayment">
													<div>
														<img src="images/vipps-logo.svg" alt="">
														<p>Vipps is always available and cant be unchecked. When you use Vipps we need to reserve the fee so it can be charged if you go on inspection or get a job.</p> 
														<p>Reservation is always freed if you dont get the job or agree on direct contact with employer.</p>
													</div>
												</label>
											</div>		
										</div>
										<div class="col-md-6 mb-4">
											<div class="form-group form-check payment-check">
												<input type="checkbox" class="form-check-input" id="strexPayment" name="strexPayment">
												<label class="form-check-label" for="strexPayment">
													<div>
														<img src="images/strex-logo.png" width="70" alt="" class="strex-logo">
														<img src="images/strex-logo.svg" width="70" alt="" class="strex-logo active">
														<p>Strex is a payment solution where you get the fees on your phone bill.</p> 
														<p>This is practical and no the benefit over Vipps is that no money will be locked up in your account. Strex is needed to use our paid subscriptions.</p>
													</div>
												</label>
											</div>		
										</div>
										
									</div>
								</form>

									
							</div>
							
						</div>
						
							
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="modal fade subscription-modal" id="subscription-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-modalLabel" aria-hidden="true">
			<div class="modal-dialog p-0 message-employer-modal" >
				<div class="modal-content">
					<div class="modal-header d-block">
						<h5 class="modal-title text-center" id="readContractLabel"> Subscribe</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
						</button>
					</div>
					<div class="modal-body">

						<span class="icon-center"><i class="fas fa-sms"></i></span>
						<p>Please confirm that you activate the subscription to receive instant SMS notifications when new jobs are posted. </p>
						<p>The cost is <span>149.- / month</span> and will automatically be renewed the #day of month # “until you cancel the subscription.</p>
						<p><strong><i class="fas fa-receipt"></i> The fee will be charged on your phone bill</strong></p>
						<button type="button" class="btn btn-primary"><i class="fas fa-sms"></i> Upgrade SMS Noti</button>
					</div>
				</div>
			</div> 
		</div>

		<div class="modal fade subscription-modal" id="subscription-sms-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-sms-modalLabel" aria-hidden="true">
			<div class="modal-dialog p-0 message-employer-modal" >
				<div class="modal-content">
					<div class="modal-header d-block">
						
						<h5 class="modal-title text-center" id="readContractLabel"><img src="images/strex-logo-white.png" alt="" width="105"> setup</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<p class="pt-5">Before you can activate subscriptions you need to actívate Strex. Your subscription fee will then come on your monthly phone bill.</p>
						<p>We have sent you a <span>SMS with a code.</span></p>
						<p>By entering the code below you confirm that we can charge your phone bill with our fees.</p>
						<div class="content-bg">
							<form action="">
								<div class="form-group">
									<label for="sms-code">Enter your code here</label>
									<input type="password" id="sms-code" name="sms-code">
									<p>If you didnt get the SMS you may want to check if your phone sunscription is barred for Strex payments.</p>
								</form>
							</div>
						</div>
						<button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Activate Strex</button>
					</div>
				</div>
			</div> 
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<h5>Do</h5>
						<ul class="list-unstyled">
							<li><a href="">Publish a job</a></li>
							<li><a href="">Browse jobs</a></li>
							<li><a href="">Messages</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>Explore</h5>
						<ul class="list-unstyled">
							<li><a href="">Our service</a></li>
							<li><a href="">Customer care</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Connect</h5>
						<ul class="list-unstyled">
							<li>
								<ul class="list-inline">
									<li class="list-inline-item social_facebook"><a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="23.5" height="23.5" viewBox="0 0 23.5 23.5">
										  <g id="Facebook" transform="translate(0)">
											<path id="Trazado_31" data-name="Trazado 31" d="M21.3,0H2.2A2.2,2.2,0,0,0,0,2.2V21.3a2.2,2.2,0,0,0,2.2,2.2H12.6V14.4H9.5V10.9h3.1V8.2c0-3,1.8-4.7,4.5-4.7h2.8V6.9H18c-1.5,0-1.7.7-1.7,1.7v2.3h3.5l-.5,3.5H16.2v9.1h5.1a2.2,2.2,0,0,0,2.2-2.2V2.2A2.2,2.2,0,0,0,21.3,0Z" fill="#fff"/>
										  </g>
										</svg></a>

									</li>
									<li class="list-inline-item social_twitter"><a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="25.1" height="20.366" viewBox="0 0 25.1 20.366">
										  <g id="twitter" transform="translate(-42 -1.445)">
											<g id="twitter-icon">
											  <path id="Trazado_32" data-name="Trazado 32" d="M67.1,3.8a10.3,10.3,0,0,1-3,.8,5.2,5.2,0,0,0,2.3-2.9A10.3,10.3,0,0,1,63.1,3a5.2,5.2,0,0,0-8.8,4.7A14.6,14.6,0,0,1,43.7,2.3a5.2,5.2,0,0,0,1.6,6.9A5.1,5.1,0,0,1,43,8.5a5.2,5.2,0,0,0,4.1,5.1,5.2,5.2,0,0,1-2.3.1,5.2,5.2,0,0,0,4.8,3.6A10.4,10.4,0,0,1,42,19.5a14.7,14.7,0,0,0,22.6-13,10.5,10.5,0,0,0,2.5-2.7Z" fill="#fff"/>
											</g>
										  </g>
										</svg></a>
									</li>
									<li class="list-inline-item social_instagram"><a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" width="22.265" height="22.876" viewBox="0 0 22.265 22.876">
										  <g id="Instagram_mono" data-name="Instagram mono" transform="translate(11.133 11.438)">
											<g id="Instagram_mono-2" data-name="Instagram mono" transform="translate(-11.133 -11.438)">
											  <path id="Trazado_34" data-name="Trazado 34" d="M15.787,22.876H6.478A6.5,6.5,0,0,1,0,16.4V6.478A6.5,6.5,0,0,1,6.478,0h9.309a6.5,6.5,0,0,1,6.478,6.478V16.4A6.493,6.493,0,0,1,15.787,22.876Zm0-1.714A4.783,4.783,0,0,0,20.551,16.4V6.478a4.783,4.783,0,0,0-4.764-4.764H6.478A4.783,4.783,0,0,0,1.714,6.478V16.4a4.783,4.783,0,0,0,4.764,4.764Z" fill="#fff"/>
											  <path id="Trazado_35" data-name="Trazado 35" d="M117.859,115.434a6.13,6.13,0,1,1-1.8-4.339A6.13,6.13,0,0,1,117.859,115.434Zm-6.163-4.01a4.015,4.015,0,1,0,4.015,4.015A4.015,4.015,0,0,0,111.7,111.424Z" transform="translate(-100.559 -104.082)" fill="#fff"/>
											  <circle id="Elipse_6" data-name="Elipse 6" cx="1.451" cy="1.451" r="1.451" transform="translate(15.945 3.671)" fill="#fff"/>
											</g>
										  </g>
										</svg></a>

									</li>
								</ul>
							</lis
							><li><a href="mailto:contact@finnsmajobb.no" class="mail">contact@finnsmajobb.no</a></li>
						</ul>
					</div>
					<div class="col-md-5">
						<div class="logo-footer">
							<svg xmlns="http://www.w3.org/2000/svg" width="170.235" height="78.378" viewBox="0 0 170.235 78.378">
							  <g id="logofooter" transform="translate(-599.106 -1804.953)">
								<path id="Trazado_100" data-name="Trazado 100" d="M13.689-18.9H3.429a1.188,1.188,0,0,0-1.323,1.3V-1.3A1.188,1.188,0,0,0,3.429,0H5.1A1.168,1.168,0,0,0,6.4-1.3V-7.668h6.183a1.188,1.188,0,0,0,1.3-1.323V-9.72a1.168,1.168,0,0,0-1.3-1.3H6.4v-4.266h7.29a1.168,1.168,0,0,0,1.3-1.3V-17.6A1.168,1.168,0,0,0,13.689-18.9Zm5.967,3.375a2.252,2.252,0,0,0,2.511-2.16,2.226,2.226,0,0,0-2.511-2.187,2.212,2.212,0,0,0-2.511,2.187A2.252,2.252,0,0,0,19.656-15.525ZM18.873,0h1.566a1.188,1.188,0,0,0,1.323-1.3V-12.582a1.188,1.188,0,0,0-1.323-1.3H18.873a1.168,1.168,0,0,0-1.3,1.3V-1.3A1.168,1.168,0,0,0,18.873,0Zm7.56,0h1.593a1.168,1.168,0,0,0,1.3-1.3V-7.074c0-2.592,1.485-3.7,2.916-3.7s2.187,1.134,2.187,3.078v6.4a1.168,1.168,0,0,0,1.3,1.3h1.566A1.188,1.188,0,0,0,38.61-1.3v-6.7c0-3.267-1.35-6.183-5.076-6.183a4.245,4.245,0,0,0-4.212,2.511v-.918a1.168,1.168,0,0,0-1.3-1.3H26.433a1.168,1.168,0,0,0-1.3,1.3V-1.3A1.168,1.168,0,0,0,26.433,0ZM43.065,0h1.593a1.168,1.168,0,0,0,1.3-1.3V-7.074c0-2.592,1.485-3.7,2.916-3.7s2.187,1.134,2.187,3.078v6.4a1.168,1.168,0,0,0,1.3,1.3h1.566a1.188,1.188,0,0,0,1.323-1.3v-6.7c0-3.267-1.35-6.183-5.076-6.183a4.245,4.245,0,0,0-4.212,2.511v-.918a1.168,1.168,0,0,0-1.3-1.3H43.065a1.168,1.168,0,0,0-1.3,1.3V-1.3A1.168,1.168,0,0,0,43.065,0ZM63.126.3c3,0,5.589-1.431,5.589-4.347-.054-1.7-1.08-3.24-3.942-4.185l-1.728-.648c-.729-.243-1.269-.54-1.269-1.134a1.261,1.261,0,0,1,1.4-1.188,1.848,1.848,0,0,1,1.35.513,1.453,1.453,0,0,0,1.566.513l.756-.189c.891-.216,1.3-.918.756-1.7a5,5,0,0,0-4.428-2.106c-3,0-5.157,1.782-5.157,4.374,0,2.511,2.484,3.564,3.915,4.023l1.7.594c.891.324,1.3.621,1.3,1.215,0,.729-.729,1.215-1.782,1.215a2.7,2.7,0,0,1-2.079-.81c-.567-.567-.891-.918-1.62-.729l-.837.189c-.837.216-1.269.81-.864,1.62C58.671-.621,60.669.3,63.126.3ZM72.468,0h1.593a1.168,1.168,0,0,0,1.3-1.3V-7.155c0-2.592,1.269-3.618,2.511-3.618s1.971,1.053,1.971,3V-1.3a1.168,1.168,0,0,0,1.3,1.3h1.593a1.168,1.168,0,0,0,1.3-1.3V-7.29c.054-2.538,1.323-3.483,2.484-3.483,1.242,0,2,1.053,2,3V-1.3A1.168,1.168,0,0,0,89.8,0h1.566a1.188,1.188,0,0,0,1.323-1.3V-7.965c0-3.267-1.512-6.21-5.1-6.21a4.734,4.734,0,0,0-4.455,2.4,4.309,4.309,0,0,0-4.023-2.4,3.8,3.8,0,0,0-3.753,2.511v-.918a1.168,1.168,0,0,0-1.3-1.3H72.468a1.168,1.168,0,0,0-1.3,1.3V-1.3A1.168,1.168,0,0,0,72.468,0Zm29.214.3a5.062,5.062,0,0,0,4.455-2.241V-1.3a1.168,1.168,0,0,0,1.3,1.3h1.593a1.168,1.168,0,0,0,1.3-1.3V-12.582a1.168,1.168,0,0,0-1.3-1.3h-1.593a1.168,1.168,0,0,0-1.3,1.3v.675a5.025,5.025,0,0,0-4.455-2.268c-3.888,0-6.669,3.159-6.669,7.236C95.013-2.835,97.794.3,101.682.3Zm.972-3.348c-2.187,0-3.456-1.728-3.456-3.888,0-2.133,1.269-3.888,3.456-3.888a3.575,3.575,0,0,1,3.537,3.888A3.575,3.575,0,0,1,102.654-3.051ZM116.8-15.525a2.252,2.252,0,0,0,2.511-2.16,2.226,2.226,0,0,0-2.511-2.187,2.212,2.212,0,0,0-2.511,2.187A2.252,2.252,0,0,0,116.8-15.525Zm-3.132,21.9c2.349,0,5.157-1,5.157-5.238V-12.582a1.168,1.168,0,0,0-1.3-1.3h-1.566a1.168,1.168,0,0,0-1.3,1.3V1.674c0,1-.459,1.593-1.3,1.593-.675,0-1.134-.378-1.134-.891V2.214c0-.27-.189-.486-.567-.486h-1.917a.629.629,0,0,0-.675.513,2.323,2.323,0,0,0-.027.432C109.053,5.238,111.24,6.372,113.67,6.372ZM129.06.3a7.382,7.382,0,0,0,7.7-7.236,7.382,7.382,0,0,0-7.7-7.236,7.382,7.382,0,0,0-7.695,7.236A7.366,7.366,0,0,0,129.06.3Zm0-3.375a3.725,3.725,0,0,1-3.726-3.834,3.731,3.731,0,0,1,3.726-3.861,3.748,3.748,0,0,1,3.726,3.861A3.741,3.741,0,0,1,129.06-3.078ZM147.825.3c3.915,0,6.7-3.132,6.7-7.236,0-4.077-2.781-7.236-6.7-7.236a5.01,5.01,0,0,0-4.428,2.268v-6.318a1.188,1.188,0,0,0-1.323-1.3h-1.566a1.168,1.168,0,0,0-1.3,1.3V-1.3a1.168,1.168,0,0,0,1.3,1.3h1.566A1.188,1.188,0,0,0,143.4-1.3v-.648A5.047,5.047,0,0,0,147.825.3Zm-.945-3.348c-2.16,0-3.537-1.674-3.564-3.888.027-2.214,1.4-3.888,3.564-3.888s3.456,1.755,3.456,3.888C150.336-4.779,149.04-3.051,146.88-3.051ZM165.645.3c3.915,0,6.7-3.132,6.7-7.236,0-4.077-2.781-7.236-6.7-7.236a5.01,5.01,0,0,0-4.428,2.268v-6.318a1.188,1.188,0,0,0-1.323-1.3h-1.566a1.168,1.168,0,0,0-1.3,1.3V-1.3a1.168,1.168,0,0,0,1.3,1.3h1.566a1.188,1.188,0,0,0,1.323-1.3v-.648A5.047,5.047,0,0,0,165.645.3ZM164.7-3.051c-2.16,0-3.537-1.674-3.564-3.888.027-2.214,1.4-3.888,3.564-3.888s3.456,1.755,3.456,3.888C168.156-4.779,166.86-3.051,164.7-3.051Z" transform="translate(597 1876.96)" fill="#3fc698"/>
								<g id="Elipse_3" data-name="Elipse 2" transform="translate(695.975 1852.421)" fill="none" stroke="#3fc698" stroke-width="2">
								  <circle cx="3.719" cy="3.719" r="3.719" stroke="none"/>
								  <circle cx="3.719" cy="3.719" r="2.719" fill="none"/>
								</g>
								<path id="Trazado_45_2" data-name="Trazado 45" d="M460.372,344.394l-41.45,3.179a3.369,3.369,0,0,0-3.359,3.359v23.219a3.369,3.369,0,0,0,3.359,3.359l9.687.743,4.747-9.18h0a9.343,9.343,0,1,1,3.909,2.115l-3.556,7.456-1.933,3.771c-.141.32.05.7.536.462l6.844-3.814,21.215,1.626a3.369,3.369,0,0,0,3.36-3.359V347.753A3.369,3.369,0,0,0,460.372,344.394Z" transform="translate(243.436 1460.559)" fill="#3fc698"/>
								<circle id="Elipse_12_3" data-name="Elipse 12" cx="5.121" cy="5.121" r="5.121" transform="translate(675.784 1822.66) rotate(-45)" fill="#3fc698"/>
							  </g>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</footer>

<?php include('template-parts/footer.php')?>