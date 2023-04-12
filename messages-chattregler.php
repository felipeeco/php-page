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
        $("#chattregler").modal("show");
    });
</script>'
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
<?php include ('template-parts/modals/chat/chattregler.php')?>
		<div class="content messages">
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
										<div class="alert alert-success" role="alert"  data-toggle="modal" data-target="#chattregler"><i class="fas fa-shield-check"></i> <strong>Unngå unodvendig gebyr</strong> <a href=""><i class="fas fa-chevron-right"></i></a></div>
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
									<div class="profile-information d-flex" >
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
											<!-- RATING COMES HERE-->
											<div class="r-updated">
												<ul class="ratinglist list-unstyled small-text">
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-10.svg" alt=""></li>
													<li><img src="images/rating/green/rating-03.svg" alt=""></li>
													<li><img src="images/rating/green/rating-00.svg" alt=""></li>
													<li class="rating-number">3.3</li>
												</ul>
											</div>
											<div class="reviews-number small-text"><i class="fa-solid fa-comment"></i> 45 reviews</div>
											<!-- end of the rating-->
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
									<div class="d-flex counter-offer-btn">
										<a href="#" class="btn btn-danger mr-2"><i class="far fa-times-circle"></i> Deny</a>
										<a href="#" class="btn btn-primary"><i class="fas fa-check"></i> Accept</a>
									</div>
								</div>
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
<?php include ('template-parts/footer.php')?>