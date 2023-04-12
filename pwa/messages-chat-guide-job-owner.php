<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-->
<!doctype html>
<?php 
$title = "Meldinger"; /*PAGE TITLE*/
?>
<?php include ('template-parts/chat/inside-chat-header.php')?>  
<!-- Chat content -->    
		<ul class="chat-content"  id="chat-content-data">
            <li style="width:100%">
               <div class="msj macro counter-offer">
                <div class="avatar"><img class="img-circle" style="width:100%;" src="../images/samples/sample_profile_3.png" /></div>
                    <div class="text text-l">
                        <div class=" contract-info">
                            <div class="counter-offer-title">
                                <p>You have received an offer</p>
                            </div>
                            <div class="counter-offer-content">
                                <p>Hi, my name is Marcin, I can help you for 900 enough. I have a van car that is perfect for this job. I have a man to help. NB. Has received good references. Regards Marcin</p>
                                <p><i class="fas fa-suitcase"></i> <strong>Hente 3-seters sofa</strong></p>
                                <p><i class="fas fa-comments-dollar"></i> <strong>Offer price</strong> <span class="price-info"><span class="price">900.- kr</span> <span class="counter-price"><i class="fas fa-chevron-up"></i> 100</span></span></p>
                                
                                <p>No guarantee that <strong>Abby</strong> will do the job for this price but you can contact the helper and discuss both the assignment and price</p>
                                <div>

                                    <a href="#" class="btn btn-danger"><i class="fas fa-ban"></i> Reject offer</a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-check"></i> Open contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</li>
			
			<li style="width:100%">
				<div class="msj macro counter-offer">
				 <div class="avatar"><img class="img-circle" style="width:100%;" src="../images/samples/profile-sample-2 2.png" /></div>
					 <div class="text text-l">
						 <div class=" contract-info">
							 <div class="counter-offer-title">
								 <p>Information about Tom Knudsen</p>
							 </div>
							 <div class="counter-offer-content">
								 <p>HI, im a 27 yearold male that have good expedence on this kind… Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								 <p><i class="fas fa-suitcase"></i> <strong>I am free all week after 12:00 except thursday.</strong></p>
								 <p>Contact the helper and discuss both the assignment and Price.</p>
								 <div>
 
									 <a href="#" class="btn btn-danger"><i class="fas fa-ban"></i> Reject offer</a>
									 <a href="#" class="btn btn-primary"><i class="fas fa-check"></i> Open contact</a>
								 </div>
							 </div>
						 </div>
					 </div>
				 </div>
			 </li>
        </ul>
		<div class="input-chat chat-input" id="bottomChat">
			<div class="msj-rta macro">                        
				<div class="text text-r">
					<textarea data-resizemobile name="message" id="message" placeholder="Skriv din melding her..." class=""></textarea>
				</div> 
				<div>
					<div class="footer-btn mobile-footer-btn">
						<button type="button" class="btn_upload_attachment"><i class="far fa-paperclip" data-toggle="tooltip" data-placement="top" title="" data-container=".chat-input" aria-hidden="true" data-original-title="Send a File"></i><span class="sr-only">Send a File</span></button>
						<input type="file" class="form-control-file hide  upload_attachment" id="upload_attachment" data-id="101" image-name="upload_attachment">
						<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="footer-menu-dropdown"><i class="far fa-times" data-toggle="tooltip" data-placement="top" title="" data-container=".chat-input" aria-hidden="true" data-original-title="More Options"></i><span class="sr-only">More Options</span></button>
						<div class="dropdown-menu" id="footer-dropdown" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(175px, -169px, 0px);">
							<button type="button" class="btn_readContract" id="readContractBtn">Contract <i class="fal fa-file-signature" aria-hidden="true"></i></button>
							<button type="button" class=" action-triggeraction-1 "  id="deleteContractBtn"><span>Slett kontakt</span> <i class="fal fa-ban" aria-hidden="true"></i></button>
							<button type="button" class="btn_readContract"  id="reportUserBtn">Report User  <i class="fal fa-exclamation-circle" aria-hidden="true"></i></button>
							<button type="button" type="button" data-toggle="modal" data-target="#inspectionModal" id="inspectionBtn">Inspection
								<i class="fal fa-file-search" aria-hidden="true"></i></button>
						</div>
						<a href="javascript:;" class="enter-msg send-msg">
							<span class=" glyphicon glyphicon-share-alt"><i class=" fas fa-paper-plane" aria-hidden="true"></i></span>
						</a>
					</div>
					
				</div>
			</div>
			<div class="message-footer" id="action-message-footer" >
				<i class="far fa-comment-alt-exclamation" aria-hidden="true"></i>
				<p>Vi minner om at denne jobben har et befaringsgebyr kr. 29.- som vil bli belastet dersom kontakt avtales
				utenfor chatten. Unngå unødvendige gebyrer og del kun kontaktinformasjon når befaring er nødvendig. </p>
			</div>
			
			                
		</div>
	</div>  

	<div class="modal fade" id="inspectionModal" tabindex="-1" role="dialog" aria-labelledby="inspectionModalLabel" aria-hidden="true">
		<div class="modal-dialog px-3  message-employer-modal">
			<div class="modal-content">
				<div class="modal-header px-0 pt-3">
					<h5 class="modal-title d-flex" id="inspectionModalLabel" style="line-height: 1;">
						<div>
							<i class="fas fa-toolbox"></i><i class="fas fa-walking upper"></i> 
						</div>
						Inspection <br> agreement
					</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="far fa-times-circle" style="color:#9B9B9B6F "></i></span>
				</button>
				</div>
				<form action="" >
				<div class="modal-body">
					<div id="publish-job">
						<p>Use the chat to !nd a date and time for the inspection and enter the agreed time below to make a binding agreement. You will automaticly receive the needed contact information when the <strong>helper username</strong> confirm the agreement.</p>
						<hr>
					</div>
					<div class="form-row">
						<div class="col-6">
							<label for="date">Date</label>
							<div class="input-group group-append">
								<input id="date" name="date" class="dateInput" type="text" placeholder="10/05/2021" />
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
								</div>
							</div>
						</div>

						<div class="col-6">
								<label for="time">Time</label>
								<div class="input-group group-append">
									<select id="time" name="time" class="form-control">
										<option value="08:00">08:00</option>
										<option value="08:30" >08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
									</select>
									<span class="input-group-text"><i class="fas fa-clock"></i></span>
								</div>
							</div>

						<div class="col-6 my-2">
							<label for="expirationTime">Expiration time</label>
							<div class="input-group group-append">
								<select id="expirationTime" name="expirationTime" class="form-control">
									<option value="3 hours">3 hours</option>
									<option value="6 hours" >6 hours</option>
									<option value="9 hours" >9 hours</option>
									<option value="12 hours" >12 hours</option>
									<option value="24 hours" >24 hours</option>
									<option value="48 hours" >48 hours</option>
								</select>
								<span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-6 my-2">
							<label for="zipcode">Zip code</label>
							<div class="input-group group-append b-all">
								<input type="text" name="zipcode" id="zipcode" class="form-control" value="523M32">
							</div>
						</div>
						<div class="col-6 my-2">
							<label for="state">State</label>
							<div class="input-group group-append b-all">
								<input type="text" name="state'" id="state'" class="form-control" placeholder="Møre og Romsdal" disabled>
							</div>
						</div>
					</div>
				</div>
				<p class="mb-0">Full address can be excanged after con!rmation</p>
				
				<div class="form-group">
					<div class="form-check form-check-inline align-items-baseline mr-0">
						<input class="form-check-input position-relative" style="top:5px" type="checkbox" id="inspectionRules" value="inspectionRules">
						<label class="form-check-label" for="inspectionRules">I understand that if the helper confirm within the given expiration time you are bounded by the agreement and need to pay the helper a cancellation fee of <span class="maingreen">#inspection fee#</span>. Please don’t give the job to anyone before all invited helpers have been on inspection.</label>
					</div>
				</div>
					<div class="modal-footer  pt-0">
					<button type="submit" class="btn btn-primary px-4"> Send for confirmation</button>
				</div>
			</div>
		</div> 
	</div>


	<div class="modal fade" id="calculatorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="greybox-holder job-calculator pb-3">
					<div class="title d-flex">
						<p><i class="fas fa-calculator mr-2"></i> Job Calculator</p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fal fa-times"></i>
						</button>
					</div>

					<form  class="calculator-form">
						<div class="calculator-form">

							<div class="form-group form-row">
								<label for="expense" class="col-7 col-form-label">Your expenses</label>
								<div class="col-5 input-group">
								<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="expense" value="500">
								<div class="input-group-append">
									<div class="input-group-text">.- kr</div>
								</div>
								</div>
							</div>
							<div class="form-group form-row">
									<label for="hourlyPayment" class="col-7 col-form-label">Wanted hourly payment</label>
									<div class="col-5 input-group">
										<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="hourlyPayment" value="250">
										<div class="input-group-append">
											<div class="input-group-text">.- kr</div>
										</div>
									</div>
							</div>
							<div class="form-group form-row">
								<label for="estimatedHours" class="col-7 col-form-label ">Estimated used hours</label>
								<div class="col-5 input-group numberInput">
								<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="estimatedHours" value="3">
								<div class="input-group-append">
									<div class="input-group-text">hours</div>
								</div>
								</div>
							</div>
							<div class="form-group form-row jobfee">
								<label for="jobFee" id="toggleTooltip" class="col-7 col-form-label">Job fee <i class="fal fa-info-circle"></i>
									<div class="feeToltip">
										<h5>Job fee</h5> 
										<p>Job fee is automatically calculated and will sometime be too low or too high for the actual job. However the fee is the same for all helpers that are interested in this job.</p>
										<p>Always include the job fee in your calculation so you get your expenses covered by the job owner if you get the job</p>
									</div>
								</label>
								<div class="col-5 input-group">
								<input type="number" inputmode="numeric" pattern="[0-9]*" class="form-control" id="jobFee" value="355" disabled>
								<div class="input-group-append">
									<div class="input-group-text">.- kr</div>
								</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary my-2"><i class="fas fa-calculator"></i> Calculate</button>
							
							<div class="correctJobFee mb-2">
								<p>Correct price for this job is:</p>
								<p class="price">1605 <span>.- kr</span></p>
							</div>
							
							
							
							<small class="d-block text-center" style="color:#9A9A9A;">Remember to always include the job fee in your estimate.</small>
						</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	  </div>
</body>
	<?php include ('template-parts/myjs.php')?>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap-tour-standalone.min.js"></script>
	<script>

				// Instance the tour
				var tourJobOwner = new Tour({
				name: 'jobOwnerTour',
				steps: [
				
					{
						element: "#readContractBtn",
						content: "Når du blir enig med en hjelper må du velge hjelperen her før kontaktinformasjon deles",
						placement: "top",
						smartPlacement: true,
						backdrop: true,
						backdropPadding: 10,
						backdropContainer: 'body',
					}, 
					{
						element: "#deleteContractBtn",
						content: "Om dere blir enig om å være uenig, sletter du hjelperen her",
						placement: "top",
						smartPlacement: true,
						backdrop: true,
						backdropPadding: 10,
						backdropContainer: 'body',
					},
					{
						element: "#reportUserBtn",	
						content: "Ufin kommunikasjon, regelbrudd eller andre kritikkverdige forhold rapporteres her",
						placement: "top",
						smartPlacement: true,
						backdrop: true,
						backdropPadding: 10,
						backdropContainer: 'body',
					},
					{
						element: "#inspectionBtn",	
						content: "Kontaktinformasjon i chatten er forbudt, og befaring skal avtales her",
						placement: "top",
						smartPlacement: true,
						backdrop: true,
						backdropPadding: 10,
						backdropContainer: 'body',
						
					},
					{
						content: "Kontaktinformasjon i chatten resulterer i forpliktende avtaler og er strengt forbudt. Du finner våre chattregler på toppen av chatten til enhver tid",
						orphan: true,
						smartPlacement: true,
						backdrop: true,
						backdropContainer: 'body',
						template: `<div class='popover tour final'>
							<i class='fas fa-times close-icon' data-role='end'></i>
							<h3 class='popover-title'></h3>
							<div class='popover-content'></div>
							<div class="popover-input form-check"><input type='checkbox' class="form-check-input" id='popover-check'><label>Ikke vis igjen</label></div>
							<div class='popover-navigation'>
								<button class='btn btn-end' data-role='end'>Åpne chat</button>
							</div>
						</div>`
					},
				],
				storage: false,
				template: `<div class='popover tour' >
					<div class='arrow'></div>
					<h3 class='popover-title'></h3>
					<div class='popover-content'></div>
					<div class='popover-navigation'>
						<button class='btn btn-before' data-role='prev'>Forrige</button>
						<button class='btn btn-next' data-role='next'>Neste</button>
					</div>
					<button class='btn btn-end' data-role='end'>End tour</button>
					<div class="tour-header">
					<h2><i class="fad fa-comment-exclamation"></i>Viktig <br> Informasjon</h2>
					<button class="btn btn-end-header" data-role="end">Hopp over</button>
					 </div>
				</div>`,
				onStart: function (tour) {
					if(!localStorage.jobOwnerTour_end) {
						$('#footer-dropdown').addClass('show');
					}
				},
				onEnd: function (tour) {
					$('#footer-dropdown').removeClass('show');
				}
			});
				// Initialize the tour
				tourJobOwner.init();

				// Start the tour
				tourJobOwner.start();
				
	


			



	</script>


	<script> // NEW SCRIPT ABRIL 2021
		$('#date').datepicker({
			uiLibrary: 'bootstrap4'
		});
	</script>

	<script>
		//Custom Number Input

		$('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fas fa-chevron-up"></i></div><div class="quantity-button quantity-down"><i class="fas fa-chevron-down"></i></div></div>').insertAfter('.numberInput input');
    $('.numberInput').each(function() {
      var spinner = $(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });


	</script>


    <script>
		
		window.addEventListener("load", function(event) {
    
    function chatSizing() {
        var chatScreen = document.getElementById('chat-content-data'); 
        var bottomChat = document.getElementById('bottomChat').offsetHeight;
        if(bottomChat == 0) {
            chatScreen.style.paddingBottom = '180px';
            initialChatHeight = '120px';
        } else {
            chatScreen.style.paddingBottom = bottomChat + 'px';
            initialChatHeight =  bottomChat + 'px';
        }
    }
    chatSizing();


    $.each($('textarea[data-resizemobile]'), function() {
        this.addEventListener('keyup', function (e) {
			this.style.height = 0;
			var resizing;
			var bottomChat = document.getElementById('bottomChat').offsetHeight;

			if(this.scrollHeight < 180) {
				resizing = bottomChat + this.scrollHeight - 60 + 'px';
			} else {
				resizing = bottomChat + 120 + 'px';;
			}
			
			this.style.height = this.scrollHeight + 'px';
			
			var chatArea =  document.getElementById('chat-content-data'); 
			chatArea.style.paddingBottom = resizing;
			chatArea.scrollTop = chatArea.scrollHeight;
			
			if(this.offsetHeight < 30 ) {
				document.getElementById('chat-content-data').style.paddingBottom = bottomChat + 'px';
			}

    }, false);
	});
});
$('.send-msg').on('click', function(){
		document.getElementById('chat-content-data').style.paddingBottom = initialChatHeight;
	});

	$("#footer-menu-dropdown").on('click', function(){
    $(this).toggleClass('opened');

    if($("#footer-dropdown").hasClass('show')) {
		$(this).removeClass('opened');
	}
});

$("#footer-dropdown button").on('click', function(){
    $("#footer-menu-dropdown").removeClass('opened');
})

$(document).mouseup(function(e) {

    if($("#footer-dropdown").hasClass('show')) {
        $("#footer-menu-dropdown").removeClass('opened');
    }
});
	</script>
</html>
