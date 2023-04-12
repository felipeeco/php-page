<!DOCTYPE html>
<?php
$title = 'Chat';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page chat no-back';
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$has_profile_picture = true;
$profilePicter_URI = 'images/samples/profile-sample-1.png';
$insert_scrtip = '<script type="text/javascript">
    $(window).on("load", function() {
        $("#").modal("show");
    });
</script>'
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<div class="content messages" style="margin-top: -1.5rem !important;">
			<div class="container">
				<div class="row">
					<div class="col-md-3 mt-3 conversations">
						<div class="contacts-holder scrollable">
							<div class="contact-conversation selected">
								<div class="profile-picture">
									<img src="images/samples/profile-sample-2.png" alt="">
									<i class="fas fa-circle user-status online"></i>
								</div>
								<div class="contact-details">
									<h5>
										Abby
										<img src="images/icons/sm-business-badge.svg" class="profile-badge-sm" alt="Business Bagde" />
										<span class="profile-badge-tooltip buss-badge">Bedrift</span>
									</h5>
								
									<span class="jobtitle">3 - seater sofa</span>
								</div>
								<div class="offer-message">
									<i class="fas fa-comments-dollar"></i>
									<p>900.-</p>
								</div>
							</div>
							<div class="contact-conversation">
								<div class="profile-picture">
									<img src="images/samples/profile-sample.png" alt="">
									<i class="fas fa-circle user-status online"></i>
								</div>
								<div class="contact-details">
									<h5>Michael Bulk</h5>
									<span class="jobtitle">Washing house</span>
								</div>
								<div class="offer-message">
									<i class="fas fa-comments-dollar"></i>
									<p>900.-</p>
								</div>
							</div>
							<div class="contact-conversation">
								<div class="profile-picture">
									<img src="images/samples/profile-sample-2 2.png" alt="">
									<i class="fas fa-circle user-status offline"></i>
								</div>
								<div class="contact-details">
									<h5>
										John 
										<img src="images/icons/sm-pro-badge.svg" class="profile-badge-sm" alt="Professional Bagde" /> 
										<span class="profile-badge-tooltip pro-badge">Fagmann</span>
									
									</h5>
									<span class="jobtitle">3 - seater sofa</span>
								</div>
								<div class="offer-message">
									<i class="fas fa-comments-dollar"></i>
									<p>900.-</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 chatbox">
						<div class="row">
							<div class="col-md-8  chat">
								<div class="chat-screen">
									<div class="bubbles" id="chat-content-data">
									<div class="alert alert-info mt-3" role="alert"><i class="fa-regular fa-circle-exclamation"></i> Avventer svar fra deg. Du kan åpne for kommunikasjon medhjelperen eller avvise tilbudet.</div>     
									<div class="date">
										27 OCT 2018 · 6:10 PM
									</div>          
										
										<div class="bubble outgoing">
											<div class="row">
												<div class="col-sm-1">
													<img src="images/samples/profile-sample.png" alt="" class="avatar">
												</div>
												<div class="col-sm-11">
													<div class="bubble-line counter-offer contract-info">
														<div class="counter-offer-title">
															<p>You have received an offer</p>
														</div>
														<div class="counter-offer-content">
															<p>Hi, my name is Marcin, I can help you for 900 enough. I have a van car that is perfect for this job. I have a man to help. NB. Has received good references. Regards Marcin</p>
															<p><i class="fas fa-suitcase"></i> <strong>Hente 3-seters sofa</strong></p>
															<p><i class="fas fa-comments-dollar"></i> <strong>Offer price</strong> <span class="price">900.- kr</span> <span class="counter-price"><i class="fas fa-chevron-up"></i> 100</span></p>
															
															<p>No guarantee that <strong>Abby</strong> will do the job for this price but you can contact the helper and discuss both the assignment and price</p>
															<div class="d-flex g-5">
															<ul class="nav g-5">
																<li class="nav-item"><a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#reject-offer"><i class="fas fa-ban"></i>Reject offer</a></li>
																<li class="nav-item"><a role="button" class="btn btn-secondary btn-sm"  data-toggle="modal" data-target="#readContract">Open contact</a></li>
															</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="bubble outgoing">
											<div class="row">
												<div class="col-sm-1">
													<img src="images/samples/profile-sample-2 2.png" alt="" class="avatar">
												</div>
												<div class="col-sm-11">
													<div class="bubble-line counter-offer contract-info">
														<div class="counter-offer-title">
															<p>Information about Tom Knudsen</p>
														</div>
														<div class="counter-offer-content">
															<p>HI, im a 27 yearold male that have good expedence on this kind… Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
															<p><i class="fas fa-suitcase"></i> <strong>I am free all week after 12:00 except thursday.</strong></p>
															<p>Contact the helper and discuss both the assignment and Price.</p>
															<ul class="nav g-5">
																<li class="nav-item"><a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#reject-offer"><i class="fas fa-ban"></i>Reject offer</a></li>
																<li class="nav-item"><a role="button" class="btn btn-secondary btn-sm"  data-toggle="modal" data-target="#readContract">Open contact</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<div class="chat-input" id="bottomChat">
										<div class="form-inline">
											<div class="form-group col-sm-12 px-0">
												<textarea data-resizetop name="message" id="message" placeholder="Skriv din melding her..." class=""></textarea>
											</div>
											<div class="footer-btn">
												<button type="button"><i class="far fa-paperclip" data-toggle="tooltip" data-placement="top" title="Send a File" data-container=".chat-input"></i></button>
												<button type="button" class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="footer-menu-dropdown" ><i class="far fa-times" data-toggle="tooltip" data-placement="top" title="More Options" data-container=".chat-input"></i></button>
												<div class="dropdown-menu" id="footer-dropdown">
													<button type="button" data-toggle="modal" data-target="#readContract">Contract <i class="fal fa-file-signature"></i></button>
													<button type="button" data-toggle="modal" data-target="#reportUserModal">Report User <i class="fal fa-exclamation-circle"></i></button>
													<button type="button" data-toggle="modal" data-target="#inspectionModal">Inspection <i class="fal fa-file-search"></i></button>
											  	</div>
											</div>
											<button type="button" class="send-msg"><i class="fas fa-paper-plane"></i></button>
										</div>
										<div class="message-footer">
											<i class="far fa-comment-alt-exclamation"></i>
											<p>All kommunikasjon skal skje pa var chat frem til du har valgt en hjelper. Unntak« dersom berfaring er nødvending. - Ved befaring skal alltid tidspunkt avtales med hjelper hr kontaktinformasjon deles. -Tusen takk for at du følger våre tjenesteregler og bidrar til en hyggelig møteplass for alle
											</p>
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-md-4 pb-5 project-info"  style="overflow-y: scroll; max-height:calc(100vh - 190px)">	
								<div class="greybox-holder nofixed-project pb-3">
									<div class="profile-information d-flex centered" >
										<div class="profile-picture position-relative">
											<img src="images/samples/profile-sample-1.png" alt="">
											<i class="fas fa-circle user-status online"></i>
										</div>
										<div class="rating-info">
											<h1>
												Michael Bulk
												<img src="images/icons/pro-badge.svg" alt="Professional Badge" class="profile-badge" />
												<span class="profile-badge-tooltip pro-badge">Fagmann</span>
											</h1>
											<div class="ratign">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
											</div>
										</div>
									</div>
									<div class="counter-offer-title">
										<p><i class="fas fa-comments-dollar"></i> COUNTEROFFER</p>
									</div>
									<div class="counter-offer-propose">
										<p><strong>You have received a price proposal for the job: <a href="#">Pick up a 3 - seater sofá</a></strong></p>
										<span class="proposal d-flex">
											<i class="fas fa-comments-dollar mr-3"></i>
											<div>
												<span class="price">900.- kr</span> 
												<span class="counter-price"><i class="fas fa-chevron-up"></i> 100</span>
											</div>
										</span>
									</div>
									<div class="text-center px-3">
										<small class="border-top mt-0 pt-2">Om det viser seg at jobben ikke passer deg allikevel kan du trekke tilbake tilbudet om hjelp. Det reserverte gebyret kr. 50 vil da bli frigitt.</small>
									</div>
									<div class="d-flex counter-offer-btn g-5">
										<a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#reject-offer"><i class="fas fa-ban"></i> Reject</a>
										<a href="#" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Accept</a>
									</div>
								</div>
								<br>

								<!-- <div class="greybox-holder nofixed-project pb-3">
									<div class="profile-information d-flex centered" >
										<div class="profile-picture position-relative">
											<img src="images/samples/profile-sample-2 2.png" alt="">
											<i class="fas fa-circle user-status online"></i>
										</div>
										<div class="rating-info">
											<h1>
												Tom
												<img src="images/icons/pro-badge.svg" alt="Professional Badge" class="profile-badge" />
												<span class="profile-badge-tooltip pro-badge">Fagmann</span>
											</h1>
											<div class="ratign">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
											</div>
										</div>
									</div>
									<div class="counter-offer-title">
										<p><i class="fas fa-toolbox"></i> INSPECTION</p>
									</div>
									<div class="counter-offer-propose">
										<p><strong>You have received a price proposal for the job: <a href="#">Pick up a 3 - seater sofá</a></strong></p>
										<span class="proposal d-flex">
											<i class="fas fa-toolbox mr-3"></i>
											<div>
												<span class="price">55.- kr</span> 
											</div>
										</span>
									</div>
									<div class="text-center px-3">
										<small class="border-top mt-0 pt-2">If you think the offer sounds reasonable, you can open a chat and discuss the job with the helper.</small>
									</div>
									<div class="d-flex counter-offer-btn">
										<a href="#" class="btn btn-danger mr-2"><i class="far fa-times-circle"></i> Deny</a>
										<a href="#" class="btn btn-primary"><i class="fas fa-check"></i> Accept</a>
									</div>
								</div> -->

								<div class="greybox-holder job-calculator pb-3">
									<p class="title"><i class="fas fa-calculator"></i> Job Calculator</p>

									<form action="" class="calculator-form">

										<div class="form-group form-row">
											<label for="expense" class="col-sm-5 col-form-label">Your expenses</label>
											<div class="col-sm-7 input-group">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="expense" value="500">
											  <div class="input-group-append">
												<div class="input-group-text">.- kr</div>
											  </div>
											</div>
										</div>
										<div class="form-group form-row">
											<label for="hourlyPayment" class="col-sm-5 col-form-label">Wanted hourly payment</label>
											<div class="col-sm-7 input-group">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="hourlyPayment" value="250">
											  <div class="input-group-append">
												<div class="input-group-text">.- kr</div>
											  </div>
											</div>
										</div>
										<div class="form-group form-row">
											<label for="estimatedHours" class="col-sm-5 col-form-label ">Estimated used hours</label>
											<div class="col-sm-7 input-group numberInput">
											  <input type="number"  inputmode="numeric" pattern="[0-9]*" class="form-control" id="estimatedHours" value="3">
											  <div class="input-group-append">
												<div class="input-group-text">hours</div>
											  </div>
											</div>
										</div>
										<div class="form-group form-row jobfee position-relative">
											<label for="jobFee" id="toggleTooltip" class="col-sm-5 col-form-label">Job fee <i class="fal fa-info-circle" ></i>
												<div class="feeToltip">
													<h5>Job fee</h5> 
													<p>Job fee is automatically calculated and will sometime be too low or too high for the actual job. However the fee is the same for all helpers that are interested in this job.</p>
													<p>Always include the job fee in your calculation so you get your expenses covered by the job owner if you get the job</p>
												</div>
											</label>
											<div class="col-sm-7 input-group">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="jobFee" value="355" disabled>
											  <div class="input-group-append">
												<div class="input-group-text">.- kr</div>
											  </div>
											</div>
										</div>

										<button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calculate</button>

										<div class="correctJobFee">
											<p>Correct price for this job is:</p>
											<p class="price">1605 <span>.- kr</span></p>
										</div>
									</form>
								</div>

								<br>

								<div class="greybox-holder job-calculator pb-3">
									<p class="title"><i class="fas fa-calculator"></i> Job Calculator</p>

									<form action="" class="calculator-form">

										<div class="form-group form-row">
											<label for="expense" class="col-sm-5 col-form-label">Your expenses</label>
											<div class="col-sm-7 input-group">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="expense" value="500">
											  <div class="input-group-append">
												<div class="input-group-text">.- kr</div>
											  </div>
											</div>
										</div>
										<div class="form-group form-row underestimate">
											<label for="hourlyPayment" class="col-sm-5 col-form-label">Wanted hourly payment</label>
											<div class="col-sm-7 input-group">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="hourlyPayment" value="250">
											  <div class="input-group-append">
												<div class="input-group-text">.- kr</div>
											  </div>
											</div>
										</div>
										<div class="form-group form-row">
											<label for="estimatedHours" class="col-sm-5 col-form-label ">Estimated used hours</label>
											<div class="col-sm-7 input-group numberInput">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="estimatedHours" value="3">
											  <div class="input-group-append">
												<div class="input-group-text">hours</div>
											  </div>
											</div>
										</div>
										<div class="form-group form-row jobfee position-relative">
											<label for="jobFee" id="toggleTooltip" class="col-sm-5 col-form-label">Job fee <i class="fal fa-info-circle" ></i>
												<div class="feeToltip">
													<h5>Job fee</h5> 
													<p>Job fee is automatically calculated and will sometime be too low or too high for the actual job. However the fee is the same for all helpers that are interested in this job.</p>
													<p>Always include the job fee in your calculation so you get your expenses covered by the job owner if you get the job</p>
												</div>
											</label>
											<div class="col-sm-7 input-group">
											  <input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="jobFee" value="355" disabled>
											  <div class="input-group-append">
												<div class="input-group-text">.- kr</div>
											  </div>
											</div>
										</div>

										<button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calculate</button>

										<div class="correctJobFee underestimate">
											<p>Correct price for this job is:</p>
											<p class="price">1605 <span>.- kr</span></p>
											<small>Your earnings for this job seems unfailry low</small>
										</div>
									</form>
								</div>

								<small class="d-block text-center">Remember to always include the job fee in your estimate.</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		//include modals
		include ('template-parts/modals/chat/editContract.php');
		include ('template-parts/modals/chat/readContract.php');
		include ('template-parts/modals/chat/inspectionModal.php');
		include ('template-parts/modals/chat/reportUserModal.php');
		include ('template-parts/modals/chat/reject-offer.php');
		?>

		<!-- Modal -->
		<!-- <div class="modal fade" id="inspectionModal" tabindex="-1" role="dialog" aria-labelledby="inspectionModalLabel" aria-hidden="true">
			<div class="modal-dialog  message-employer-modal">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="inspectionModalLabel"><i class="fal fa-file-search"></i> Inspection</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
					</button>
					</div>
					<div class="modal-body">
						<div class="contract-content ">
							<p>Some jobs needs inspection and for this reason exchange of contact information is needed.</p>
							<p>Our role is to exchange contact information between helper and job owner and for this reason we have an inspection fee of 45.- / This fee will not be added to the cost if you get the job, but will be deducted if you dont get the job.</p>
							<p>Make sure you understand the job and expect the pricing to be reasnable and thatjob owner want you to go on inspection before you agree to inspection.</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn  btn-secondary btn-danger"><i class="fas fa-times"></i> Cancel</button>
						<button type="button" class="btn btn-secondary"><i class="fas fa-check"></i> Agree</button>
					</div>
				</div>
			</div> 
		</div> -->



<?php include ('template-parts/footer.php')?>