<div class="tab-content" id="pills-content_small-jobs">
<div class="tab-pane fade show active" id="employer-jobs" role="tabpanel" aria-labelledby="employer-jobs-tab">

	<ul class="nav nav-pills nav-fill" id="employer-nav-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link text-center active" id="active-jobs-tab" data-toggle="pill" href="#active-jobs" role="tab">Vurderinger</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-center" id="expired-jobs-tab" data-toggle="pill" href="#expired-jobs" role="tab">Mine tjenester</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane fade show active" id="active-jobs" role="tabpanel" aria-labelledby="active-jobs-tab">
			<!--TESTIMONIALS-->
				<?php include('../template-parts/rating/ratingfilter.php')?>
				<div class="ratings-list white-box p-4">
				<?php
					$reviewLayout = '<div class="">
								<div class="pb-2 mb-2">
									<div class="d-flex g-5">
										<div class="">
											<img src="../images/samples/profile-sample-3.png" alt="">
										</div>
										<div class="">
											<div class="ratign">
												<i class="fa-solid fa-star checked"></i>
												<i class="fa-solid fa-star checked"></i>
												<i class="fa-solid fa-star checked"></i>
												<i class="fa-solid fa-star checked"></i>
												<i class="fa-solid fa-star"></i>
											</div>
											<h2 class="name"><a href="#">Cleaning house</a></h2>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<p>This is one of the best employers on the platform!, thanks for the opportunity and being such a kind person!</p>
											<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
										</div>
									</div>
								</div>
							</div><hr>';
				echo str_repeat($reviewLayout, 4); 
				?>
				</div>
				<?php include ('template-parts/pagination.php')?>
		</div>
		<div class="tab-pane fade" id="expired-jobs" role="tabpanel" aria-labelledby="expired-jobs-tab">
			<div class="side-helper-info-container">
			<div class="helper-job-list">
				<h2>I can help you with:</h2>
				<ul>
					<li><i class="fas fa-seedling"></i> Transport</li>
					<li>Hente &amp; levere</li>
					<li>Flytting</li>
					<li>Bortkjøring</li>
					<li>Bærehjelp</li>
				</ul>
				<ul>
					<li><i class="fas fa-broom"></i> Rengjøring</li>
					<li>Vaskehjelp</li>
					<li>Flyttevask</li>
				</ul>
				<br style="clear:both;"/>
				<ul>
					<li><i class="fas fa-seedling"></i> Hagearbeid</li>
					<li>Planter &amp; hage</li>
					<li>Grave &amp; bære</li>
					<li>Snømåking</li>
				</ul>
				<ul>
					<li><i class="fas fa-car"></i> Bil &amp; Båt</li>
					<li>Vedlikehold</li>
					<li>Lakk &amp; maling</li>
					<li>Reparasjoner</li>
					<li>Feilsøking</li>
				</ul>
				<br style="clear:both;"/>
				<ul>
					<li><i class="fas fa-hammer"></i> Håndverker</li>
					<li>Tapet &amp; Maling</li>
					<li>Mur &amp; flis</li>
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
				</ul><br style="clear:both;"/>
				<ul> 
					<li><i class="fas fa-graduation-cap"></i> Utdanning</li>
					<li>Leksehjelp</li>
					<li>Kurs &amp; kultur</li>
					<li>Øvelseskjøring</li>
				</ul>
				<ul>
					<li><i class="fas fa-laptop-code"></i> Data</li>
					<li>Hardware</li>
					<li>Web &amp; IT</li>
					<li>Software</li>
					<li>Foto &amp; Video</li>
					<li>Grafisk design</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>

</div>