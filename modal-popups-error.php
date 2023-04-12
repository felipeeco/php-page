<!DOCTYPE html>
<?php
$title = 'Modal Errors';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back';
$load_ratingModal = false;
//DYNAMIC CONTENT MY PROFILE
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$has_profile_picture = true;
$profilePicter_URI = 'images/samples/profile-sample-1.png';
//HELPER INFORMAITON

?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		
<!--Default-->
<div class="modal fade" id="alert">
	<div class="modal-dialog modal-dialog-centered text-center">
		<div class="modal-content">	
		<div class="modal-body">
			<i class="fas fa-question-circle icon-xxl green pb-3" style="font-weight: bolder"></i>
			<h4>Do you really want to do this?</h4>
			<p>There’s no way to know what’s gonna happen if you do this choice</p>
			</div>
			<div class="modal-footer justify-content-center">
				<ul class="nav nav-list g-10">
					<li class="nav-item"><a href="#" class="btn btn-light" aria-label="Close" data-dismiss="modal"><i class="fas fa-times" style="font-weight: normal"></i> Don’t Do it</a></li>
					<li class="nav-item"><a href="#" class="btn btn-primary"><i class="fas fa-check" style="font-weight: normal"></i>  Do it</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!--Strex – 1-->
<div class="modal fade" id="strex1">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header gradient-bg">
				<h5 class="modal-title"><i class="fa-duotone fa-comment-dollar"></i>  Please select your preferred fee</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal"></i></button>
			</div>	
			<div class="modal-body grey-bg">
				<p>Please read the following choices. It is important how do you communicate with the job owner.</p>
				<div class="subscrition-options">
					<div class="radio-buttons">
						<label class="custom-radio">
							<input type="radio" name="radio ">
							<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#gratis_modal">
								<div class="head-title d-flex mb-2">
									<div class="label d-flex g-5"><i class="fa-solid fa-message-dollar"></i><h4>Fee when you get a job only </h4></div>
									<div class="current checked ml-auto d-none"><span>Selection</span> <i class="fa-solid fa-circle-check"></i></div>
									<div class="current uncheked ml-auto"><i class="fa-regular fa-circle"></i></div>
								</div>
								<p>We will charge you only if you are a word job, but you are not allowed to exchange any contact information in the chat before you awarded. Contact information like number phone full name email social media links and so on will result in the fee being charged without any exceptions. This will also include if you agree to meet on an address in the chat. You must ask job owner to award you before you can exchange any kind of contact information or agreed to meet</p>
							</div>
						</label>
					</div>
					<div class="radio-buttons">
						<label class="custom-radio">
							<input type="radio" name="radio ">
							<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#varsling_modal">
								<div class="head-title d-flex mb-2">
									<div class="label d-flex g-5"><i class="fa-solid fa-file-magnifying-glass"></i><h4>Inspection/open chat </h4></div>
									<div class="current checked ml-auto d-none"><span>Selection</span> <i class="fa-solid fa-circle-check"></i></div>
									<div class="current uncheked ml-auto"><i class="fa-regular fa-circle"></i></div>
								</div>
								<p>This means that you want help from companies and professionals. This is normally the right choice for jobs valued over 6000.- and always the right choise when the job require professionals by you or the Norwegian law. Please notice that some professionals have a minimum hourly pay by the law.</p>
							</div>
						</label>
					</div>
				  </div>
			</div>
			<div class="modal-footer grey-bg">
				<a href="#" class="btn btn-primary pull-right">Next  <i class="fas fa-chevron-right" style="font-weight: bolder"></i></a>
			</div>
		</div>
	</div>
</div><!--Strex – 2-->
<div class="modal fade" id="strex2">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header gradient-bg">
				<h5 class="modal-title"><i class="fa-duotone fa-comment-dollar"></i> Payment options</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal"></i></button>
			</div>	
			<div class="modal-body grey-bg">
				<div class="subscrition-options">
					<div class="radio-buttons">
						<label class="custom-radio">
							<input type="radio" name="radio ">
							<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#gratis_modal">
								<div class="head-title d-flex mb-2">
									<div class="label d-flex g-5"><h4><img src="images/strex-logo.png" alt="Strex" width="70"><div class="sr-only">Strex</div></h4></div>
									<div class="current checked ml-auto d-none"><span>Selection</span> <i class="fa-solid fa-circle-check"></i></div>
									<div class="current uncheked ml-auto"><i class="fa-regular fa-circle"></i></div>
								</div>
								<p>Face will be clicked and sent it to you on your monthly phone bill. This normally require a phone subscription</p>
							</div>
						</label>
					</div>
					<div class="radio-buttons">
						<label class="custom-radio">
							<input type="radio" name="radio ">
							<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#varsling_modal">
								<div class="head-title d-flex mb-2">
									<div class="label d-flex g-5"><img src="images/vipps-logo.svg" alt="Vipps"><div class="sr-only">Vipps</div></div>
									<div class="current checked ml-auto d-none"><span>Selection</span> <i class="fa-solid fa-circle-check"></i></div>
									<div class="current uncheked ml-auto"><i class="fa-regular fa-circle"></i></div>
								</div>
							</div>
						</label>
					</div>
				  </div>
			</div>
			<div class="modal-footer grey-bg">
				<a href="#" class="btn btn-light"><i class="fas fa-chevron-left" style="font-weight: bolder"></i> Back</a>
				<a href="#" class="btn btn-primary">Next  <i class="fas fa-chevron-right" style="font-weight: bolder"></i></a>
			</div>
		</div>
	</div>
</div><!--Strex – 3-->
<div class="modal fade" id="strex3">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header gradient-bg">
				<h5 class="modal-title"><i class="fa-duotone fa-comment-dollar"></i> Strex Set Up</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal"></i></button>
			</div>	
			<div class="modal-body grey-bg">
				<div class="row">
					<div class="col-lg-2 d-none d-lg-block text-right"><i class="fa-solid fa-comment-sms icon-xxl green"></i></div>
					<div class="col-lg-10">
						<p>It was shortly get an SMS from Strex. Please follow the instructions in a SMS before you continue</p>
						<p>This process is only needed this first time, and next time you open contact on a job this is Don without any confirmation SMS from Strex</p>
						<p>Continue when you reply the  Strex SMS</p>
					</div>
				</div>
			</div>
			<div class="modal-footer grey-bg">
				<a href="#" class="btn btn-light"><i class="fas fa-chevron-left" style="font-weight: bolder"></i> Back</a>
				<a href="#" class="btn btn-primary">Next  <i class="fas fa-chevron-right" style="font-weight: bolder"></i></a>
			</div>
		</div>
	</div>
</div><!--Strex – 4-->
		<div class="modal fade" id="strex4">
			
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
						<h2 class="text-center font-weight-normal">Vi beklager!</h2>
						<p class="text-dark">
							Det hender at google ikke klarer å finne
							postnummer som vi trenger for korrekt
							håndtering av oppdraget.
						</p>

						<p>
							Prøv å inkludere husnummer i gateadressen
							eller tast inn postnummeret nedenfor.
						</p>

						<div class="form-row">
							<div class="col-md-8  offset-md-2 ">
								<input type="text" name="get_zipcode" id="get_zipcode" placeholder="0000" class="form-control">
							</div>
						</div>

					</div>
					<div class="modal-footer d-block text-center">
						<!-- data-toggle="modal" data-dismiss="modal" -->
						<a class="btn btn-primary w-auto py-3 action-zipcode-submit" href="javascript:;" postal_code_idsearch="tr_to_address" postal_code_input="tr_to_zipcode">Lukk</a>
					</div>
				</div>
		
		</div>
			</div>
		</div><!--Strex – 5-->
<div class="modal fade" id="strex5">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-dialog  message-employer-modal px-4  popup-3 ">
		<div class="modal-content">
			<div class="modal-header pt-4 px-0">
				<h5 class="modal-title" id="inspectionModalLabel"><i class="fas fa-toolbox" aria-hidden="true"></i><i class="fas fa-walking upper" aria-hidden="true"></i> Avtale om befaring</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><i class="far fa-times-circle" aria-hidden="true"></i></span>
			</button>
			</div>
			
			 
						 
			
			<form action="javascript:;" id="popupForm" data-gtm-form-interact-id="0">
			<div class="modal-body">
				<div id="publish-job">
										<p>Bruk chatten til å diskutere tidspunkt som passer for begge parter
og skriv dette inn i feltene nedenfor. Du vil automatisk få nødvendig
kontaktinfirmasjon når oppdragsgiver bekrefter tid og sted for befaringen.</p>
										
				</div>
				<div class="form-row">

					<div class="col-4">
						<label for="date">Dato</label>
						<div class="input-group group-append">
							<div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
							<input value="17.08.2022" id="inspection_date" name="inspection_date" class="dateInput form-control hasDatepicker" autocomplete="off" type="text" placeholder="02.08.2022" data-type="datepicker" data-guid="bb1d09fc-ba2b-4102-6347-afd4fa0dea23" data-datepicker="true" role="input"><span class="input-group-append" role="right-icon"><button class="btn btn-outline-secondary border-left-0" type="button"><i class="gj-icon">event</i></button></span></div>
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-calendar-alt" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
					 
					
					<div class="col-4">
							<label for="time">Tidspunkt</label>
							<div class="input-group group-append">
								<select id="time" name="inspection_time" class="form-control" data-gtm-form-interact-field-id="0">
																			<option value="06:00">06:00</option>
																				<option value="06:30">06:30</option>
																				<option value="07:00">07:00</option>
																				<option value="07:30">07:30</option>
																				<option value="08:00">08:00</option>
																				<option selected="" value="08:30">08:30</option>
																				<option value="09:00">09:00</option>
																				<option value="09:30">09:30</option>
																				<option value="10:00">10:00</option>
																				<option value="10:30">10:30</option>
																				<option value="11:00">11:00</option>
																				<option value="11:30">11:30</option>
																				<option value="12:00">12:00</option>
																				<option value="12:30">12:30</option>
																				<option value="13:00">13:00</option>
																				<option value="13:30">13:30</option>
																				<option value="14:00">14:00</option>
																				<option value="14:30">14:30</option>
																				<option value="15:00">15:00</option>
																				<option value="15:30">15:30</option>
																				<option value="16:00">16:00</option>
																				<option value="16:30">16:30</option>
																				<option value="17:00">17:00</option>
																				<option value="17:30">17:30</option>
																				<option value="18:00">18:00</option>
																				<option value="18:30">18:30</option>
																				<option value="19:00">19:00</option>
																				<option value="19:30">19:30</option>
																				<option value="20:00">20:00</option>
																				<option value="20:30">20:30</option>
																				<option value="21:00">21:00</option>
																				<option value="21:30">21:30</option>
																				<option value="22:00">22:00</option>
																				<option value="22:30">22:30</option>
																				<option value="23:00">23:00</option>
																				<option value="23:30">23:30</option>
																				<option value="00:00">00:00</option>
																		</select>
								<span class="input-group-text"><i class="fas fa-clock" aria-hidden="true"></i></span>
							</div>
						</div>

					<div class="col-4">
						<label for="expirationTime">Svarfrist</label>
						<div class="input-group group-append">
							<select id="expirationTime" name="expiration_time" class="form-control">
								<option value="1">1 time</option>
								<option value="3">3 timer</option>
								<option selected="" value="6">6 timer</option>
								<option value="12">12 timer</option>
								<option value="24">24 timer</option>
							</select>
							<span class="input-group-text"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
						</div>
					</div>
					
										
										
					<div class="col-4 my-3">
						<label for="zipcode">Postnr.</label>
						<div class="input-group group-append b-all 2 3">
							<input type="text" name="zipcode" id="zipcode" class="form-control zipcode-get-state2" value="0182">
						</div>
					</div>
					<div class="col-8 my-3">
						<label for="state">Sted</label>
						<div class="input-group group-append b-all">
							<input type="text" name="state" id="state" class="form-control" placeholder="Møre og Romsdal" readonly="" value="Oslo">
						</div>
					</div>
				</div>
			</div>
			<p class="">Full adresse kan utveksles etter at
befaring er bekreftet</p>
			
			<div class="form-group mt-3">
				<div class="form-check form-check-inline align-items-baseline mr-0">
					<input class="form-check-input position-relative" style="top:5px" type="checkbox" id="inspectionRules" name="inspectionRules" value="Y">
					<label class="form-check-label" for="inspectionRules">
					
					Jeg forstår at forpliktende avtale er inngått om oppdragsgiver bekrefter
avtalen innen svarfristen. Du har rett på et avbestillingsgebyr
<span class="maingreen">kr. 2.-</span>. dersom oppdragsgiver avlyser avtalt befaring.
Gebyr returneres ikke dersom du må avlyse befaring.
					
					</label>
				</div>
			</div>
			
			
				<div id="common_error"></div>
			
				<div class="modal-footer">
				<button type="button" class="btn btn-primary px-4 action-update-inspection-req">Be om bekreftelse</button>
			</div>
		</form></div>
	</div>
	</div>
</div><!--Invite Helper Modal – 1-->
<div class="modal fade" id="invite1">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
				<div class="modal-body">
			<div class="white-box information-popup">
				<div class="display-results">
				
					
									
					<div class="row result">
						<div class="col-md-3 image offset-2">
							<div class="wrap"><img src="/assets/uploads/1659357306-istockphoto5158364132048x2048.jpg" alt=""></div>
						</div>
						<div class="col-md-5">
														<h1>hello all jobs </h1>
							<div class="information flex flex-wrap">
																<div class="info location"><a href="javascript:;" class="address"><i class="fas fa-map-marker-alt"></i> Viken</a></div>
								<div class="info category"><a href="javascript:;" class="caegory-btn"><i class="fas fa-th-large"></i> Bil &amp; Båt</a></div>
								<div class="info date"><a href="javascript:;" class="date-link"><i class="fas fa-check-circle"></i> 
								Det haster!								</a></div>
							</div>
							<p class="price">
							kr.&nbsp;536							</p>
						</div>
					</div>
				</div>
								
				<div class="requestInfo-publish">
					<div class="row">
						<div class="col-8 offset-2">
							<hr>
							<h2>Legg ut jobben på nytt!</h2>
							<p>Det er noen data som har gått ut på dato.
Vennligst oppdater informasjonen nedenfor
eller rediger jobb om nødvendig. <a href="https://dev.buildwebsite.co.in/republish?id=18255"><i class="fas fa-edit"></i> Rediger jobb</a></p>
							<form action="">
								<div class="form-row form-group">
									<div class="col-md-6">
										<label for="time">Haster det?</label>
										<select name="time" id="time">
																						<option value="2">Det haster!</option>
																						<option value="3">Før en dato</option>
																						<option value="4">På en dato</option>
																						<option value="5">Etter avtale</option>
																					</select>
									</div>
									<div class="col-md-6 dato-cs" style="display: none;">
										<label for="dateStart">Dato</label>
										<input id="datepicker" readonly="" value="" name="date" placeholder="Klikk og velg dato" type="text" autocomplete="off" class="hasDatepicker">
									</div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12" id="common_error">
						</div>
					</div>
					
				</div>
				
				
				
				
				<div class="buttons inline">
					<a href="javascript:;" data-dismiss="modal" class="btn btn-primary"><i class="fas fa-edit"></i> Avbryt</a>
					<a href="javascript:;" class="btn btn-secondary action-republish-job-confirm" data-job_id="18255" role="button"><i class="fas fa-redo-alt"></i> Legg ut jobben</a>
				</div>
				
			</div>
		</div>
	</div>
	</div>
</div><!--Invite Helper Modal – 1-->
<div class="modal fade" id="invite2">

		<div id="employerRating" data="1">
<div class="modal-dialog" style="max-width: 810px">
				<div class="modal-content">
										<div class="modal-body">
						<div class="container-fluid form-content">
						
							 
							<div class="row">
								<div class="col-md-4 order-md-1 info">
 
									<div class="user-info">
										<div class="profile-picture position-relative align-self-start">
											<img src="https://dev.buildwebsite.co.in/assets/uploads//Soonam-1649317222.png" alt="">
										</div>
										<div class="rating-info">
											<h1>Sa</h1>
											
																						<div class="r-updated white">
												<ul class="ratinglist list-unstyled"> 
													<li><img src="/assets/frontend/images/rating/white/rating-10.svg" alt=""></li><li><img src="/assets/frontend/images/rating/white/rating-10.svg" alt=""></li><li><img src="/assets/frontend/images/rating/white/rating-10.svg" alt=""></li><li><img src="/assets/frontend/images/rating/white/rating-10.svg" alt=""></li><li><img src="/assets/frontend/images/rating/white/rating-00.svg" alt=""></li> 
													<li class="rating-number">4.0</li>
												</ul>
											</div>
											<div class="reviews-number small-text"><i class="fa-solid fa-comment"></i> 21 vurderinger</div>
										</div>
										
										
											

										
																				<div class="ratingfilter" style="width: 100%;">
											<h4>Fordeling</h4>
											
												<div class="white-box">
													<a href="#">
														<div class="row-rating">
															<div class="side-label">
																<div class="stars">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																</div>
															</div>
															<div class="middle-section">
																<div class="bar-container">
																	<div class="bar-5" style="width: 52.380952380952%;"></div>
																</div>
															</div>
															<div class="side-numbers right">
																<div>11</div>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="row-rating">
															<div class="side-label">
																<div class="stars">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																</div>
															</div>
															<div class="middle-section">
																<div class="bar-container">
																	<div class="bar-5" style="width: 19.047619047619%;"></div>
																</div>
															</div>
															<div class="side-numbers right">
																<div>4</div>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="row-rating">
															<div class="side-label">
																<div class="stars">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																</div>
															</div>
															<div class="middle-section">
																<div class="bar-container">
																	<div class="bar-5" style="width: 14.285714285714%;"></div>
																</div>
															</div>
															<div class="side-numbers right">
																<div>3</div>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="row-rating">
															<div class="side-label">
																<div class="stars">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																</div>
															</div>
															<div class="middle-section">
																<div class="bar-container">
																	<div class="bar-5" style="width: 9.5238095238095%;"></div>
																</div>
															</div>
															<div class="side-numbers right">
																<div>2</div>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="row-rating">
															<div class="side-label">
																<div class="stars">
																<img src="/assets/frontend/images/rating/green/rating-10.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																<img src="/assets/frontend/images/rating/green/rating-00.svg" alt="">
																</div>
															</div>
															<div class="middle-section">
																<div class="bar-container">
																	<div class="bar-5" style="width: 4.7619047619048%;"></div>
																</div>
															</div>
															<div class="side-numbers right">
																<div>1</div>
															</div>
														</div>
													</a>
													
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8 order-md-2 form">
									<h1>Sa`s vurderinger</h1>
									<hr>
									<div class="ratinggrid">
										<div class="row">
												
											<div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Hello sonam </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 10.06.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Ankita-1625746754.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/779">Ankita</a></h2>
														<p>Hello sonam </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 10.06.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Test 5000 is good </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 21.04.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Hello </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 28.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Hi Sonam </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 25.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Fname12-1636626049.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/830">Fname12</a></h2>
														<p>Helloo </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 25.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Abhi-1597043960.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/800">Abhi</a></h2>
														<p>Hi Soonam Good Job </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 24.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Sunil ne sonam ko 3 rating di </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 07.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Hi Sonam </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 07.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Job owner Sonam is good </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 04.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Good Job Sonam Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 02.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Kirti-1600295114.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/780">Kirti</a></h2>
														<p>Good Exprince </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 02.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Dineshb-1597044003.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/792">Dinesh b</a></h2>
														<p>Always recommdet Sonam Very Good helper  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 02.03.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Hello baad me rating di 003 Rating Tasting Job par admin ne rating di hai003 Rating Tasting Job par admin ne rating di hai003 Rating Tasting Job par admin ne rating di hai 003 Rating Tasting Job par admin ne rating di hai003 Rating Tasting Job par admin ne rating di hai 003 Rating Tasting Job par admin ne rating di hai003 Rating Tasting Job par admin ne rating di hai003 Rating Tasting Job par admin ne rating di hai003 Rating Tasting Job par admin ne rating di hai</p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 18.02.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Dineshb-1597044003.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/792">Dinesh b</a></h2>
														<p>Sonam is good </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 19.01.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Dineshb-1597044003.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/792">Dinesh b</a></h2>
														<p>Hellooo ji </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 10.01.2022</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>helper rating 3</p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 07.12.2021</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>5 rating di hai mobile se job owner ne </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 17.11.2021</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Job owner ne rating di hai or helper ne nahi di hai </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 17.11.2021</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Job owner ne 4 rating di hai </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 17.11.2021</span>
													</div>
												</div>
											</div>
										</div><div class="w-100">
											<div class="row">
												<div class="col-2">
													<img src="https://dev.buildwebsite.co.in/assets/uploads/Sunil-1645164168.png" alt="" width="100%">
												</div>
												<div class="col-10">
													<div class="ratign"><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
													<div class="reviewwcontent">
														<h2><a href="https://dev.buildwebsite.co.in/services/details/789">Sunil</a></h2>
														<p>Poor Job </p>
														<span class="date"><i class="fas fa-calendar" aria-hidden="true"></i> Dato: 17.11.2021</span>
													</div>
												</div>
											</div>
										</div>											
								 
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
</div>
	</div>
</div><!--Invite Helper Modal – 1-->
<div class="modal fade" id="invite3">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">	
		
			<div class="modal-header gradient-bg p-3 px-md-4 pb-5">
				<i class="fas fa-trash-alt overlay"></i><i class="fas fa-minus-circle"></i> 
				<h5 class="modal-title mt-3 mt-md-0" id="inspectionModalLabel">Vil du slette denne jobben fra historikken din?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="far fa-times-circle" style="color:#fff"></i></span>
				</button>
			</div>
			<div class="modal-body">
				
							
			
				<div class="px-3 px-md-4 py-4">
					<div class="d-md-flex job-info">
						<div class="position-relative mr-md-4">
							<img src="/assets/uploads/1659357306-istockphoto5158364132048x2048.jpg" alt="" class="job-img">
							<span class="user-info">
								<img src="https://dev.buildwebsite.co.in/assets/uploads/no-profile-pic.jpg" alt="">
															</span>
						</div>
						<div>
							<div class="personal-info mb-2 mt-3 mt-md-0">
																<span class="name"><b>hello all jobs </b>
									<br>
									</span>
								<span class="name maingreen"><b>
								kr.&nbsp;536								</b></span>
							</div>
							<span class="job-data badge">Besøk <b>16</b></span>
							
							
														<span class="job-data badge ml-2">Interesserte <b>0</b></span>
						</div>
					</div>
					<p>Dersom det var interesserte hjelpere på denne jobben vil
kontaktlisten bli slettet. Sletting påvirker ikke dine mottatte
eller avgitte vurderinger.</p>
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-danger 
						
						action-confirm-delete-job " data-job_id="18255" data-help_id="" data-type="expire"><i class="fal fa-trash-alt"></i> Slett jobb</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--Invite Helper Modal – 1-->
<div class="modal fade" id="invite4">
	<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
		<div class="modal-body white-box" style="padding: 30px !important">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
			<h1>Type småjob</h1>
			<div class="form-options mt-3 mb-5">
				<div class="form-check form-check-lg">
				  <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="statusProfessional" value="1" checked="">
				  <label class="form-check-label" for="flexCheckDefault">
					<i class="fa-solid fa-rectangle-pro"></i> Profesjonelle oppdrag
				  </label>
				</div>
				<div class="form-check form-check-lg">
				  <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="statusSmallJob" value="1" checked="">
				  <label class="form-check-label" for="flexCheckChecked">
					Småjobber
				  </label>
				</div>
			</div>
			<a href="javascript:;" class="btn btn-primary m-a d-block action-btn-apply-filter">Lagre søk</a>
		</div>
	  </div>
	</div>
</div>		
	
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		<div class="content notfound">
			<div class="container" style="height: calc(100vh - 459px);">
			<h1>Modal Test</h1>
				
				<a href="" data-toggle="modal" data-target="#strex4">strex4</a><br>
				<a href="" data-toggle="modal" data-target="#strex5">strex5</a><br>
				<hr>
				<a href="" data-toggle="modal" data-target="#invite1">invite1</a><br>
				<a href="" data-toggle="modal" data-target="#invite2">invite2</a><br>
				<a href="" data-toggle="modal" data-target="#invite3">invite3</a><br>
				<a href="" data-toggle="modal" data-target="#invite4">invite4</a><br>
			
				
			</div>
		</div>
		<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<h5>Handling</h5>
				<ul class="list-unstyled">
					<li><a href="">Legg ut oppdrag</a></li>
					<li><a href="">Finn småjobb</a></li>
					<li><a href="">Meldinger</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<h5>Informasjon</h5>
				<ul class="list-unstyled">
					<li><a href="var-tjeneste.php">Vår tjeneste</a></li>
					<li><a href="">Kundeservice</a></li>
					<li><a href="">Tjenesteavtale</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h5>Sosialt</h5>
				<ul class="list-unstyled">
					<li>
						<ul class="list-inline">
							<li class="list-inline-item social_facebook"><a href="#"><i class="fa-brands fa-facebook"></i>Følg oss på facebook</a></li>
						</ul>
					</li>
				</ul>
				<div class="qr-code-btn d-flex justify-content-between">
					<a href="https://apps.apple.com/no/app/minsm%C3%A5jobb-hjelp-til-sm%C3%A5jobb/id1503012551?itsct=apps_box_badge&amp;itscg=30200" style="" target="_blank"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/no-no?size=250x83&amp;releaseDate=1587081600&h=f4f5db5fe9f272812116e4eedd9ea908" alt="Download on the App Store" style="" width="120px"></a>
					<a href='https://play.google.com/store/apps/details?id=com.minsmajobb&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Tilgjengelig på Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/no_badge_web_generic.png' style="width: 155px; margin: -10px 0 0 0;"/></a>
				</div>
			</div>
			<div class="col-md-3 offset-md-2" style="display:flex;justify-content:center;align-items:center;padding: 0;">
				<div class="logo-footer">
					<img src="images/footer-logo.svg" alt="Minsmåjobb | job Post" class="m-auto d-block">
				</div>
			</div>
		</div>
	</div>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
		
  </body>
</html>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('#myModal').modal('show');
		});
		
		$(document).ready(function(){
			$("input[name='exampleRadios']").click(function(){

				var value = $( this ).val();

						//Remove the class option-checked
				$( ".options-suscription" ).removeClass( "active" );

				switch( value ) {
					case 'option1':
							$( ".options-suscription.one" ).addClass( "active" );
						break;
					case 'option2':
							$( ".options-suscription.two" ).addClass( "active" );
						break;
				}

			});
		});
	</script>
  </body>
</html>