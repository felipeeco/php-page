<!DOCTYPE html>
<?php
$title = 'Kundeservice';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page kundeservice no-back dark';
$load_ratingModal = false;
$insert_scrtip = '<script>$( "#faqAccordion .card-header .btn" ).mouseover(function(){$(this).click();});</script>';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<!-- body code goes here -->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pb-5">
						<div class="intro-content pb-5">
							<h1><i class="fas fa-headset"></i> <?php echo ($title);?></h1>
							<br><br>
							<div class="whitebox" style=" overflow: hidden; margin: auto;">
								<form action="" style="overflow: hidden">
									<div class="form-group form-row">
										<div class="col-md-6"><label for="name">Your name</label><input name="name" type="text" placeholder="Contact name"></div>
										<div class="col-md-6"><label for="email">Email</label><input name="email" type="email" placeholder="Contact Email"></div>
									</div>
									<div class="form-group">
										<label for="comments">How can we help you?</label>
										<textarea name="comments" id="" cols="30" rows="3" placeholder="Please describe here your concern"></textarea>
									</div>
									<button class="btn btn-primary" style="float: right; clear: both; margin: 10px auto 0; display: block" id="send">Send message</button>
								</form>
								<!--
								<div class="confirmtext">
									<div class="icon"><i class="fas fa-check-circle"></i></div>
									<h2>Report sent!</h2>
									<p>Thanks for helping us to improve this platform.</p>
								</div>
								-->
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
			<div class="faq-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 mx-auto">
							<div class="intro-content">
								<h1 class="mt-2 mt-lg-0"><i class="fas fa-question-square"></i> Frequently asked questions</h1>
								<br><br>
								<div class="accordion mb-5" id="faqAccordion">
									<div class="card">
									<div class="card-header" id="headingOne">
										<h2 class="mb-0">
										<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											What are your fees
										</button>
										</h2>
									</div>
								
									<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
										<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
									</div>
									<div class="card">
									<div class="card-header" id="headingTwo">
										<h2 class="mb-0">
										<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Are only small jobs allowed here?
										</button>
										</h2>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
										<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
									</div>
									<div class="card">
									<div class="card-header" id="headingThree">
										<h2 class="mb-0">
										<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											How do I register as a helper
										</button>
										</h2>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
										<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												How do Vipps work?
											</button>
										</h2>
										</div>
										<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												How do Strex work?
											</button>
										</h2>
										</div>
										<div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												How do I delite my account
											</button>
										</h2>
										</div>
										<div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
										</div>
									</div>
								</div>

								<div class="row pt-5">
									<div class="col-md-5">
										<div class="qr-code">
											<img src="images/qr-code.svg" class="img-fluid" alt="">
											<hr>
											<p>Download our app</p>
											<div class="qr-code-btn d-lg-flex justify-content-between">
												<a href="#"><img src="images/btn-apple.svg" alt=""></a>
												<a href="#"><img src="images/btn-google.svg" alt=""></a>
											</div>
										</div>
									</div>
									<div class="col-md-7 qr-text mt-4 mt-md-0">
										<h2>How are we doing so far?</h2>
										<p>Our service is in many ways an construction place where our concept is still taking form. We hope you like how we are doing so far. We are far form done developing and improving our site. There is always a improvement waiting to happend arround the corner. </p>
										<p>Course of frequently improvements and updates we hope for your understanding that bugs and “child-desices” might occure now and then. We hope that you will quickly let us know when things dont work as expected and be asured that our customer service is here to assist you when things go wrong. </p>
										<p>If you are a helper you can read more about our “Fair fee” goals and why our service function like it does <a href="#">here</a>.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container information-wrapper pb-5">
				<div class="row">
					<div class="col-md-7">
						<h4><i class="fas fa-comment-alt-lines mr-3"></i>We use <span>SMS</span> notifications</h4>
						<div class="d-flex">
							<div class="icon"><img src="images/icons/phone.svg" alt=""><i class="fas fa-comment-alt-music"></i></div>
							<h6>Maybe add us as a contact in your phone and give us a cool, easy to recognice <strong>SMS</strong> sound when you receive notifications from us?</h6>
						</div>

						<div class="d-flex flex-wrap mt-4">
							<div>
								<p class="border-bottom mb-1 mr-3"><strong>Line 1:</strong> 979 00 001 Dedicated system messages </p>
								<p class="border-bottom mb-1 mr-3"><strong>Line 2:</strong> 979 00 002 Job related notifications </p>
								<p class="border-bottom mb-1 mr-3"><strong>Line 3:</strong> 979 00 003 Job related notifications</p>
							</div>
							<div>
								<p class="border-bottom mb-0 mr-3"><strong>Line 4:</strong> 979 00 004 Job related notifications </p>
								<p class="border-bottom mb-0 mr-3"><strong>Line 5:</strong> 979 00 005 Job related notifications</p>
							</div>
						</div>

					</div>
					<div class="col-md-5 mt-4 mt-md-0">
						
						<div class="d-flex mb-3">
							<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="75.252" height="66.735" viewBox="0 0 75.252 66.735">  <g id="apposlogo" transform="translate(-373.811 -1035.868)">    <g id="Grupo_65" data-name="Grupo 65" transform="translate(373.811 1035.868)">      <path id="Trazado_1" data-name="Trazado 1" d="M87.942,188.636a18.255,18.255,0,0,0-18.235,18.235V225.1H74.59V206.871a13.353,13.353,0,1,1,13.353,13.353H79.758l-4.308,4.88H87.942a18.234,18.234,0,1,0,0-36.468" transform="translate(-50.316 -188.636)" fill="#389cd6"/>      <path id="Trazado_2" data-name="Trazado 2" d="M82.4,193.41a7.8,7.8,0,0,0-7.81,7.81v11.716l5.533-4.244A7.811,7.811,0,1,0,82.4,193.41m0,11.714a3.9,3.9,0,1,1,3.907-3.9,3.886,3.886,0,0,1-3.907,3.9" transform="translate(-45.208 -183.645)" fill="#389cd6"/>      <path id="Trazado_3" data-name="Trazado 3" d="M64.512,215H60.687c.46-2.821,2.444-4.2,5.954-4.2,4.2,0,6.329,1.381,6.415,4.2v5.177c0,4.2-2.53,6.069-6.646,6.357-3.651.288-6.183-1.409-6.183-4.776.086-3.653,2.733-4.631,6.588-5.005,1.638-.2,2.473-.689,2.473-1.524-.086-.863-.892-1.293-2.473-1.293-1.352,0-2.1.344-2.3,1.064m4.833,5.005v-1.411a16.6,16.6,0,0,1-3.05.923c-1.524.286-2.3,1.006-2.3,2.127a1.7,1.7,0,0,0,1.927,1.784,3.146,3.146,0,0,0,3.424-3.422" transform="translate(-60.227 -165.465)" fill="#389cd6"/>      <path id="Trazado_4" data-name="Trazado 4" d="M71.226,230.274a1.677,1.677,0,0,1-1.9,1.9H67.4V217.615c.2-4.543,2.561-6.787,7.135-6.787q7.078,0,7.075,7.681c0,5.177-2.013,7.853-6.069,8a4.748,4.748,0,0,1-4.314-2.358Zm3.25-7.192c2.07,0,3.136-1.469,3.222-4.4,0-3.078-1.092-4.6-3.279-4.6s-3.222,1.524-3.193,4.6c.115,2.933,1.18,4.4,3.25,4.4" transform="translate(-52.729 -165.435)" fill="#389cd6"/>      <path id="Trazado_5" data-name="Trazado 5" d="M79.044,230.274a1.677,1.677,0,0,1-1.9,1.9H75.219V217.615c.2-4.543,2.559-6.787,7.135-6.787q7.075,0,7.075,7.681c0,5.177-2.015,7.853-6.069,8a4.749,4.749,0,0,1-4.316-2.358Zm3.252-7.192c2.07,0,3.136-1.469,3.22-4.4,0-3.078-1.092-4.6-3.277-4.6s-3.224,1.524-3.2,4.6c.115,2.933,1.18,4.4,3.252,4.4" transform="translate(-44.553 -165.435)" fill="#389cd6"/>      <path id="Trazado_6" data-name="Trazado 6" d="M96.817,218.711c0,5.236-2.328,7.881-6.932,7.881s-6.9-2.645-6.9-7.881c0-5.294,2.3-7.912,6.9-7.912s6.932,2.618,6.932,7.912m-9.951,0c.029,2.964,1.035,4.459,2.99,4.459s2.935-1.555,2.964-4.574c0-2.964-.978-4.431-2.935-4.431-2.013,0-3.019,1.524-3.019,4.545" transform="translate(-36.438 -165.465)" fill="#389cd6"/>      <path id="Trazado_7" data-name="Trazado 7" d="M97.512,223.485c1.612,0,2.418-.46,2.418-1.438,0-.775-1.325-1.409-3.942-1.87-3.367-.6-5.091-2.1-5.12-4.488,0-3.279,2.587-4.833,6.067-4.891a7.6,7.6,0,0,1,4.662,1.295,4.833,4.833,0,0,1,1.812,3.712h-2.416a1.667,1.667,0,0,1-1.7-.951c-.258-.661-1.035-1.035-2.3-1.035-1.5,0-2.244.4-2.244,1.18s.978,1.381,2.962,1.753c2.59.52,4.287,1.18,5.122,1.957a3.774,3.774,0,0,1,1.064,2.7c0,3.739-2.933,5.12-6.963,5.12a7.212,7.212,0,0,1-4.772-1.352,4.619,4.619,0,0,1-1.728-3.94h3.913c.086,1.667,1.3,2.242,3.164,2.242" transform="translate(-28.646 -165.465)" fill="#389cd6"/>    </g>  </g></svg></div>
							<div class="information ml-4">
								<p>
									Min småjobb er utviklet og driftet av appos. <br>
									Org. nr. <a href="tel:921522436">921522436</a><br>
									Spørsmål om konsept: <a href="mailto:post@appos.no">post@appos.no</a>
								</p>
							</div>
						</div>
						<div class="d-flex">
							<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="60.163" height="48.157" viewBox="0 0 60.163 48.157">  <g id="Grupo_387" data-name="Grupo 387" transform="translate(-415.564 -344.394)">    <path id="Trazado_45" data-name="Trazado 45" d="M471.531,344.394l-51.772,3.97a4.207,4.207,0,0,0-4.2,4.2v29a4.207,4.207,0,0,0,4.2,4.2l12.1.928,5.929-11.466h0a11.67,11.67,0,1,1,4.882,2.641l-4.441,9.313-2.414,4.71c-.176.4.062.872.67.577l8.549-4.764,26.5,2.031a4.208,4.208,0,0,0,4.2-4.2V348.589A4.208,4.208,0,0,0,471.531,344.394Z" transform="translate(0 0)" fill="#3fc698"/>    <circle id="Elipse_12" data-name="Elipse 12" cx="6.396" cy="6.396" r="6.396" transform="translate(436.528 366.51) rotate(-45)" fill="#3fc698"/>  </g></svg></div>
							<div class="information ml-4">
								<p>
									Kundeservice MinSmåjobb <a href="mailto:post@minsmajobb.no">post@minsmajobb.no</a><br>
									<strong>Postadresse: </strong><br>
									Jacob Kjødes veg 7 5232 Paradis
								</p>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
			<?php include ('template-parts/footer.php')?>