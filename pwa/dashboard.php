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
	<div class="landing nopic pwa d-flex align-items-end" style="height: calc(100vh - 290px); ">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="m-0">Velkommen, <?php echo ($userName)?>.</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="imageToolsBg"></div>
					<div class="section-block profile" id="changeImage" style="background-image:url(<?php if (empty($profilePicter_URI)){echo('../images/no-profile-pic.jpg');}else{echo($profilePicter_URI);} ?>)">
					</div>
					<div class="imageTools">
						<div class="profileImg-form">
							<form action="" method="">
								<label for="profile-img"><i class="fas fa-upload"></i> Upload from files</label><input type="file" id="profile-img" style="opacity: 0;display: none;">
								<a href=""><i class="fas fa-camera"></i> Take a Picture</a>
								<button class="btn btn-delete text-left"><i class="fas fa-trash-alt"></i> Delete Picture</button>
								<a href="#" id="cancelProfileImg">Cancel</a>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6">
					<a href="javascript:;" aria-label="Toggle navigation" onclick="openNav()" class="">
						<div class="section-block">
							<div class="w-100">
								<i class="fa-light fa-user"></i>
								<span class="icon messaage settings"></span>
								<h1>Min Konto</h1>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-6"><a href="my-jobs.php">
					<div class="section-block">
						<div class="w-100">
							<i class="fa-light fa-briefcase"></i>
							<span class="notification-alert">3</span><!--CLASS NAME CHANGED V6.1-->
							<h1>Mine Oppdrag</h1>
						</div>
					</div>
					</a>
				</div>
				<div class="col-6"><a href="vurderinger.php">
					<div class="section-block">
					<div class="w-100">
						<i class="fa-light fa-star"></i>
						<span class="icon create-a-job">
						</span>
						<h1>Mine vurderinger</h1>
					</div>
					</div>
						</a>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="section-block">
						<div class="w-100">
							<i class="fa-light fa-comment"></i>
							<span class="notification-alert">3</span><!--CLASS NAME CHANGED V6.1-->
							<h1>Messages</h1>
						</div>
					</div>
				</div>
				<div class="col-6"><a href="betalinger.php">
					<div class="section-block">
						<div class="w-100">
							<i class="fa-light fa-money-bill-wave"></i>
							<span class="icon browse">
							</span>
							<h1>Betalinger</h1>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>

<div class="member-deals text-center white-bg fixed-bottom w-100 bottom-0 p-4" style="border-radius: 30px 30px 0 0; z-index: 9;">
	<div class="container">
		<div class="row">
		  <div class="col-12">
			<div class="collapse show multi-collapse" id="multiCollapseExample1">
			  <div class="">
				<i class="fa-solid fa-angle-up icon-xl" style="color: var(--secondary-light)"></i>
				<p class="m-0" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><i class="fa-solid fa-tag green "></i> Click for member deals</p>
				<!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Open</button>-->
			  </div>
			</div>
		  </div>
		  <div class="col-12">
			<div class="collapse multi-collapse" id="multiCollapseExample2">
			  <div class="w-100">
				<i class="fa-solid fa-angle-down icon-xl w-100" style="color: var(--secondary-light)" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="true" aria-controls="multiCollapseExample1 multiCollapseExample2"></i>
				<img src="../images/pwa/benefits-image.png" alt="" class="m-auto" width="128">
				  
				  <?php if ($discountsLaunched == true){
						include ('template-parts/dashboard/benefits.php');
					}else{
						include ('template-parts/dashboard/pre-launch.php');
						}?>
				  
				  <!-----
				  <h1>Member benefits</h1>
				  <p>We are working in benefits you get as a member with us. Svelect a company to get access to the deal.</p>
				  <div class="brands-panel">
					<div class="row pb-3">
						<div class="col"><a href="#" class="brand-p" style="background-image: url('../images/pwa/sample/byggmakker-logo-2.png')" id="brand-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#stept-1"></a></div>
						<div class="col"><a href="#" class="brand-p" style="background-image: url('../images/pwa/sample/H&M-Logo.svg.png')" id="brand-2"></a></div>
						<div class="col"><a href="#" class="brand-p" style="background-image: url('../images/pwa/sample/Ikea_logo.svg.png')" id="brand-3"></a></div>
					</div>
					  <div class="row pb-5">
						<div class="col"><a href="#" class="brand-p" style="background-image: url('../images/pwa/sample/byggmakker-logo-2.png')" id="brand-1"></a></div>
						<div class="col"><a href="#" class="brand-p" style="background-image: url('../images/pwa/sample/H&M-Logo.svg.png')" id="brand-2"></a></div>
						<div class="col"><a href="#" class="brand-p" style="background-image: url('../images/pwa/sample/Ikea_logo.svg.png')" id="brand-3"></a></div>
					</div>

				  </div>
				  <!------->
				  
			  </div>
			</div>
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
