<!DOCTYPE html>
<?php
$title = 'Subscription';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page no-back';
$load_ratingModal = false;
$insert_scrtip = "<script>
			
	</script>";
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
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
							<div class="tab-pane fade" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab">
								<div class="form-info grey-bg w-100 text-center"><i class="fal fa-info-circle"></i>You can change your notifications here.</div>
								<div class="mt-1">
									<div class="setting-grid mb-5">
										<div class="row">
											<div class="col-md-4 grey-bg p-4">
												<h4><i class="fa-solid fa-bell-on"></i> Notify me</h4>
												<p>Notifications is sent to your registered e-mail or/ and your registered mobile number. Set all notificaciones to OFF if you no longer want our notifications.</p>
											</div>
											<div class="col-md-8 p-4">
												<div class="form-check form-switch">
													<div class="custom-control custom-switch mb-2">
														<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
														<label class="custom-control-label" for="customSwitch1">Daily e-mail</label>
													</div>
													<div class="custom-control custom-switch mb-2">
														<input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
														<label class="custom-control-label" for="customSwitch2">Instant SMS <small>(Require subscription)</small></label>
													</div>
													<div class="custom-control custom-switch mb-2">
														<input type="checkbox" class="custom-control-input" id="customSwitch3">
														<label class="custom-control-label" for="customSwitch3">Weekly e-mail</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 grey-bg p-4">
												<h4><i class="fa-solid fa-sliders"></i> Profesionality and distance</h4>
												<p>Notifications is sent to your registered e-mail or/ and your registered mobile number. Set all notificaciones to OFF if you no longer want our notifications.</p>
											</div>
											<div class="col-md-8 p-4">
												<div class="form-check form-switch">
													<div class="custom-control custom-switch mb-2">
														<input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
														<label class="custom-control-label" for="customSwitch4"><i class="fa-solid fa-pro"></i> Jobs</label>
													</div>
													<div class="custom-control custom-switch mb-2">
														<input type="checkbox" class="custom-control-input" id="customSwitch5" checked>
														<label class="custom-control-label" for="customSwitch5">Small jobs</label>
													</div>
													<br>
													<h5 class="mb-0">Velg avstand for varslinger</h5>
													<p>I want to get notifications for jobs withing <strong><span id="rangeval">50</span> km</strong> from <a href="#">Oslo <i class="fa-solid fa-location-arrow"></i></a></p>
								<!--
													<div class="range-holder my-5">
														<div class="range">
															<input type="range" min="1" max="3" steps="1" value="1" name="range">
														</div>
														<ul class="range-labels">
															<li>0km</li>
															<li class="active selected">20km</li>
															<li>100km</li>
														</ul>
													</div>
								-->
													<div class="">
													  <form>
														<div class="form-group">
														  <input type="range" class="form-control-range" id="formControlRange" onInput="$('#rangeval').html($(this).val())">
														</div>
													  </form>
													</div>
													<p><small>Beregnes etter luftlinje og ikke kjørestrekning. <br>(Som referanse er Bergen - Oslo 320km luftlinje)<br>(Avstand fra <a href="#">Nesttun</a>, <a href="#">Bergen</a>, <a href="#">Norway</a> Du kan endre adresse i <a href="#">hjelperprofilen</a>)</small></p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 grey-bg p-4">
												<h4><i class="fa-solid fa-suitcase"></i> Type of jobs</h4>
												<p>Check the tope of jobs you want included in your notificaciones.</p>
											</div>
											<div class="col-md-8 p-4">
												<div class="form-row mt-0">
													<div class="col-md-3 col-6">
														<h5>Transport</h5>  
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck1">
															<label class="form-check-label" for="profileSettingsCheck1"><span>Hente &amp; levere</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck2" checked>
															<label class="form-check-label" for="profileSettingsCheck2"><span>Flytting</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck3">
															<label class="form-check-label" for="profileSettingsCheck3"><span>Bortkjøring</span></label>
														</div>
														<br>
														<h5>Oppussing</h5>     
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck4">
															<label class="form-check-label" for="profileSettingsCheck4"><span>Tapet &amp; Maling</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck5">
															<label class="form-check-label" for="profileSettingsCheck5"><span>Mur &amp; flisg</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck6">
															<label class="form-check-label" for="profileSettingsCheck6"><span>Snekker &amp; montering</span></label>
														</div>
								<br>
														<h5>Tekstil &amp; Søm</h5>        
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
														<h5>Rengjøring</h5>
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
								<br>
														<h5>Personlig</h5>   
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
								<br>
														<h5>Velvære</h5>     
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck28">
															<label class="form-check-label" for="profileSettingsCheck28"><span>Hårklipp &amp; farge</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck29">
															<label class="form-check-label" for="profileSettingsCheck29"><span>Sminke og negler</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck30">
															<label class="form-check-label" for="profileSettingsCheck30"><span>Massasje &amp; terapi</span></label>
														</div>
													</div>

													<div class="col-md-3 col-6">   
														<h5>Hagearbeid</h5>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck13">
															<label class="form-check-label" for="profileSettingsCheck13"><span>Planting &amp; hagestell</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck14">
															<label class="form-check-label" for="profileSettingsCheck14"><span>Graving og bæring</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck15">
															<label class="form-check-label" for="profileSettingsCheck15"><span>Snømåking</span></label>
														</div>
								<br>
														<h5>Utdanning</h5>   
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck16">
															<label class="form-check-label" for="profileSettingsCheck16"><span>Leksehjelp</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck17">
															<label class="form-check-label" for="profileSettingsCheck17"><span>Kurs &amp; kultur</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck18">
															<label class="form-check-label" for="profileSettingsCheck18"><span>Øvelseskjøring</span></label>
														</div>
													</div>

													<div class="col-md-3 col-6">   
														<h5>Bil &amp; Båt</h5>   
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck19">
															<label class="form-check-label" for="profileSettingsCheck19"><span>Rens &amp; polering</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck20">
															<label class="form-check-label" for="profileSettingsCheck20"><span>Lakk &amp; maling</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck21">
															<label class="form-check-label" for="profileSettingsCheck21"><span>Feilsøking</span></label>
														</div>
								<br>
														<h5>Data</h5>      
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck22">
															<label class="form-check-label" for="profileSettingsCheck22"><span>Hardware</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck23">
															<label class="form-check-label" for="profileSettingsCheck23"><span>Web &amp; IT</span></label>
														</div>
														<div class="form-group form-check">
															<input type="checkbox" class="form-check-input" id="profileSettingsCheck24">
															<label class="form-check-label" for="profileSettingsCheck24"><span>Software</span></label>
														</div>
													</div>
												</div>
											</div>
										</div>
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

<?php include('template-parts/footer.php')?>