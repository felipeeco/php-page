<!DOCTYPE html>
<?php
$title = 'Stine&#39;s Profile';
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
		<div class="content helperview">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-8">
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="helper-info-container">
									<?php include ('template-parts/helper-profile.php');?>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="helper-location">
									<h2>Her er jeg</h2>
									<a href="#"><i class="fas fa-map-marker-alt"></i> Viken, Oslo</a>
									<p>(10km from you)</p>
								</div>
								<div class="helper-info-list">
									<table class="table">
										<tbody>
										  <tr>
											<td>Last Log In</td>
											<td>19.10.2020</td>
										  </tr>
										  <tr>
											<td>Jobs Aplied</td>
											<td>43</td>
										  </tr>
										  <tr>
											<td>Jobs Awarded</td>
											<td>13</td>
										  </tr>
										  <tr>
											<td>Helper ID</td>
											<td>32435</td>
										  </tr>
										</tbody>
									  </table>
								</div>
							</div>
						</div>
						
						<div class="helper-bio-resume float-none mt-3">
							<h3>Om meg</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis Leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
						</div>
						<div class="helper-rating mt-5">
							<h2>What my emplyers say about me:</h2>
							<div class="ratinggrid">
								<div class="row">
									<div class="col-lg-6">
										<div class="row">
											<div class="col-2">
												<img src="images/samples/profile-sample-5.png" alt="" width="100%">
											</div>
											<div class="col-10">
												<div class="ratign">
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="reviewwcontent">
													<h2><a href="#">Amarjit</a></h2>
													<p>Asome job done by this great helper!! Will deffently use again in near future.</p>
													<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.2020</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-2">
												<img src="images/samples/profile-sample-3.png" alt="" width="100%">
											</div>
											<div class="col-10">
												<div class="ratign">
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="reviewwcontent">
													<h2><a href="#">Thea</a></h2>
													<p>Asome job done by this great helper!! Will deffently use again in near future.</p>
													<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-2">
												<img src="images/samples/profile-sample-7.png" alt="" width="100%">
											</div>
											<div class="col-10">
												<div class="ratign">
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="reviewwcontent">
													<h2><a href="#">Jan Kamil</a></h2>
													<p>Asome job done by this great helper!! Will deffently use again in near future.</p>
													<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-2">
												<img src="images/samples/profile-sample-8.png" alt="" width="100%">
											</div>
											<div class="col-10">
												<div class="ratign">
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star checked"></span>
													<span class="fa fa-star"></span>
												</div>
												<div class="reviewwcontent">
													<h2><a href="#">Mari</a></h2>
													<p>Asome job done by this great helper!! Will deffently use again in near future.</p>
													<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-5">
							<?php include ('pwa/template-parts/pagination.php')?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4">
						<div class="side-helper-info-container">
							<div class="helper-cost-info">
								<h3>My hourly cost</h3>	
								<h2>TO BE AGREED</h2>
								
								<p><strong>Do you like my profile?</strong> Send me a job request and we can descuss it on the chat before you award me!</p>
								<a href="" class="btn btn-primary white">Contact me!</a>
							</div>
							
							<div class="position-relative">
								<div class="helper-job-list">
									<h2>I can help you with:</h2>
									<ul>
										<li><i class="fas fa-seedling"></i> Transport</li>
										<li>Hente & levere</li>
										<li>Flytting</li>
										<li>Bortkjøring</li>
										<li>Bærehjelp</li>
									</ul>
									<ul>
										<li><i class="fas fa-broom"></i> Rengjøring</li>
										<li>Vaskehjelp</li>
										<li>Flyttevask</li>
									</ul>
									<ul>
										<li><i class="fas fa-seedling"></i> Hagearbeid</li>
										<li>Planter & hage</li>
										<li>Grave & bære</li>
										<li>Snømåking</li>
									</ul>
									
									<ul>
										<li><i class="fas fa-car"></i> Bil & Båt</li>
										<li>Vedlikehold</li>
										<li>Lakk & maling</li>
										<li>Reparasjoner</li>
										<li>Feilsøking</li>
									</ul>
									<ul>
										<li><i class="fas fa-hammer"></i> Håndverker</li>
										<li>Tapet & Maling</li>
										<li>Mur & flis</li>
										<li>Montering</li>
										<li>Snekker/Tømrer</li>
										<li>Rørlegger</li>
										<li>Elektriker</li>
									</ul>
									<ul>
										<li><i class="fas fa-heart"></i> Personlig</li>
										<li>Barnepass</li>
										<li>Dyrepass</li>
										<li>Aktivitetspartner</li>
									</ul>
									<ul> 
										<li><i class="fas fa-graduation-cap"></i> Utdanning</li>
										<li>Leksehjelp</li>
										<li>Kurs & kultur</li>
										<li>Øvelseskjøring</li>
									</ul>
									<ul>
										<li><i class="fas fa-laptop-code"></i> Data</li>
										<li>Hardware</li>
										<li>Web & IT</li>
										<li>Software</li>
										<li>Foto & Video</li>
										<li>Grafisk design</li>
									</ul>
								</div>
								<div class="full-list-info">+8 more</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<?php include ('template-parts/footer.php')?>