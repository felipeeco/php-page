<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-removed bootstrap .row in the review, because is causing horizontal scroll
-->
<!doctype html>
<?php 
$title = "Dashboard"; /*PAGE TITLE*/
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = "gradient-bg";
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
//dicount cards launched?
$discountsLaunched = false;
$os_type = 'ios';
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
	<!-- rating modals -->
	<?php if ($os_type == 'ios'){
		include ('template-parts/modals/ios-modal.php'); //iOS modal path
	} else if ($os_type == 'android'){
		include ('template-parts/modals/android-modal.php'); //Andoird Modal path
	}
	?>
<!-- MODAL CONTENT SAMPLE STARTS HERE -->
<!-- Modal -->
<div class="modal fade" id="stept-1" tabindex="-1" aria-labelledby="stept-1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stept-1Label"><i class="fa-solid fa-tag"></i> BYGMAKKER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="../images/pwa/sample/byggmakker-logo-2.png" alt="" class="brand-image m-auto w-50 d-block">
		  <h5>30% on all ordinary products</h5>
		  <p>Scan the barcode when you pay for your products</p>
		  <img src="../images/pwa/sample/barcode-sample.png" alt="" class="bar-code w-80 d-block m-auto">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" type="button" class="btn btn-primary" data-toggle="modal" data-target="#stept-2" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="stept-2" tabindex="-1" aria-labelledby="stept-2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100" id="stept-2Label"><i class="fa-solid fa-check"></i> Did you do a purchase?</h5>
      </div>
      <div class="modal-body text-center">
		<div class="card grey-bg mb-4">
			<ul class="list-group list-group-flush">
				<li class="list-group-item d-flex align-items-center"><label for="Your ID" class="m-0">Your ID:</label><h5 class="green flex-grow-1 text-right">#66531</h5></li>
				<li class="list-group-item d-flex align-items-center"><label for="Date of purchase:" class="m-0">Date of purchase:</label><h5 class="flex-grow-1 text-right">10.12.2022</h5></li>
				<li class="list-group-item d-flex align-items-center"><label for="Aproxinate time:" class="m-0">Aproxinate time:</label><h5 class="flex-grow-1 text-right">18:30</h5></li>
			</ul>
		</div>
		<p>You can enter the aprox amount you paid.</p>
		<p>This helps us maintain this deal or make a even better deal for our userrs in the future.</p>
		<div class="input-group input-group-lg mb-3">
			<input type="text" class="form-control" placeholder="0.00" aria-label="Amount Paid" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<span class="input-group-text" id="basic-addon2">Kr.</span>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">I didn't Buy</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Finish</button>
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
<!-- END MODAL CONTENT SAMPLE -->
	<!-- end rating modals -->
	<div class="landing nopic pwa d-flex easy-invoicing-pwa" style="height: calc(100vh - 290px); ">
		<div class="container">
			<div class="row">
				<div class='col-12 text-center main-image'>
					<img src="../images/easy-invoicing/example-image.png" alt="slide">
				</div>
				<div class='col-12 text-left description-box'>
					<img src="../images/easy-invoicing/logo.svg" alt="logo" class='easy-invoicing-logo'>
					<h1>Faktuer uten a starte eget firma</h1>
					<p>
                        <strong>MinSmajobb</strong> ogg <strong>EasyFreelance</strong> har
                            Start ved å velge en kategoriÅ legge ut et oppdrag er enkelt og gratis. 
                            Start ved å velge en kategoriÅ legge ut et oppdrag er enkelt og gratis. 
                            Start ved å velge en kategoriÅ legge ut et oppdrag er enkelt og gratis. 
                            Start ved å velge en kategoriÅ legge ut et oppdrag er enkelt og gratis. 
                            Start ved å velge en kategoriÅ legge ut et oppdrag er enkelt og gratis. 
                            Start ved å velge en kategoriÅ legge ut et oppdrag er enkelt og gratis. 
                            Start ved å velge en kategori.
                    </p>
				</div>
				<div class='col-12 text-left video-box'>
					<h3>Se hvordan det fungerer?</h3>
                    <iframe width="100%" height="196" src="https://www.youtube.com/embed/Bk8Ll0qaA48?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class='col-12 text-left call-to-action'>
					<a href="javascript:;" class="btn btn-transparent">
                        <i class="fa-solid fa-circle-info"></i>
                        Information
                    </a>
					<a href="javascript:;" class="btn btn-primary">
                        <i class="fa-solid fa-check"></i>
                    	Register
                    </a>
				</div>
			</div>
		</div>
	</div>
	<?php include ('template-parts/myjs.php')?>
	<script>

		$('#changeImage').on('click', function() {
			imageTools();
		});

		$('#cancelProfileImg').on('click', function(){
			imageTools();
		});

		function imageTools() {
			$('.imageTools').toggleClass('active');
			$('.section-block.profile').toggleClass('active');
			$('.imageToolsBg').toggleClass('active');
		}

		
			$(window).on('load', function() {
				$('#soacialModal').modal('show');
			});
		
		
	</script>
</body>
</html>
