<!DOCTYPE html>
<?php
$title = 'Register as a Helper';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back';
$load_ratingModal = false;
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-4 profile-information centered">
						<?php include ('template-parts/user-profile.php');?>
					</div>
					<div class="col-md-6 helper form">
						<form action="" class="spaced">
							<h1>Register as a helper</h1>
							<p>Register as a helper is easy. Just fill in the following information.</p>
							<div class="form-group">
								<label for="nickname">Wanted Nick name</label>
								<input type="text" placeholder="Nick name display in the job listing ">
							</div>
							<div class="form-group form-row">
								<div class="col-md-9"><label for="address">Street address</label><input name="address" type="text" placeholder="You home address"></div>
								<div class="col-md-3"><label for="addreesNumber">Number</label><input name="addreesNumber" type="text" placeholder="00"></div>
							</div>
							<div class="form-group"><label for="zip">Zip code</label></div>
							<div class="form-group form-row">
								<div class="col-md-3">
									<input name="zip" type="text" placeholder="N-">
								</div>
								<div class="col-md-9">
									<input name="addreesNumber" type="text" placeholder="00000">
								</div>
							</div>
							<div class="form-group">
								<label for="">Do you want to help people and get notifications when jobs are available? - If so, please check categories</label>
								<div class="check-cols">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="cateogry" id="Gardeling" value="Gardeling" >
										<label class="form-check-label" for="Gardeling">Gardeling</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="cateogry" id="Car related" value="Car related" >
										<label class="form-check-label" for="Car related">Car related</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="cateogry" id="Transport" value="Transport" >
										<label class="form-check-label" for="Transport">Transport</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="cateogry" id="Computer tasks" value="Computer tasks" >
										<label class="form-check-label" for="Computer tasks">Computer tasks</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="cateogry" id="Painting" value="Painting" >
										<label class="form-check-label" for="Painting">Painting</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="cateogry" id="Washing" value="Washing" >
										<label class="form-check-label" for="Washing">Washing</label>
									</div>
								</div>
							</div>
							<div class="form-group states">
								<label>In what locations do you want jobs?</label>
								<div class="states check-cols">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Akershus" value="Akershus" >
									<label class="form-check-label" for="Akershus">Akershus</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Aust agder" value="Aust agder" >
									<label class="form-check-label" for="Aust agder">Aust agder</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Buskerud" value="Buskerud" >
									<label class="form-check-label" for="Buskerud">Buskerud</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Finnmark" value="Finnmark" >
									<label class="form-check-label" for="Finnmark">Finnmark</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Hedmark" value="Hedmark" >
									<label class="form-check-label" for="Hedmark">Hedmark</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Hordaland" value="Hordaland" >
									<label class="form-check-label" for="Hordaland">Hordaland</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Møre og Romsdal" value="Møre og Romsdal" >
									<label class="form-check-label" for="Møre og Romsdal">Møre og Romsdal</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Nordland" value="Nordland" >
									<label class="form-check-label" for="Nordland">Nordland</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Oppland" value="Oppland" >
									<label class="form-check-label" for="Oppland">Oppland</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Oslo" value="Oslo" >
									<label class="form-check-label" for="Oslo">Oslo</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Rogaland" value="Rogaland" >
									<label class="form-check-label" for="Rogaland">Rogaland</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Sogn og Fjordane" value="Sogn og Fjordane" >
									<label class="form-check-label" for="Sogn og Fjordane">Sogn og Fjordane</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Svalbard" value="Svalbard" >
									<label class="form-check-label" for="Svalbard">Svalbard</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Telemark" value="Telemark" >
									<label class="form-check-label" for="Telemark">Telemark</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Troms" value="Troms" >
									<label class="form-check-label" for="Troms">Troms</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Trøndelag" value="Trøndelag" >
									<label class="form-check-label" for="Trøndelag">Trøndelag</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Vestfold" value="Vestfold" >
									<label class="form-check-label" for="Vestfold">Vestfold</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Vest-Agder" value="Vest-Agder" >
									<label class="form-check-label" for="Vest-Agder">Vest-Agder</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="state" id="Østfold" value="Østfold" >
									<label class="form-check-label" for="Østfold">Østfold</label>
								</div>
								</div>
							</div>
							<div class="form-group">
								<label for="">Do you want notofications by e-mail or SMS?</label>
								<div class="">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="cateogry" id="email" value="email" >
										<label class="form-check-label" for="email">e-mail (free)</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="cateogry" id="SMS" value="SMS" >
										<label class="form-check-label" for="SMS">SMS (subscription 99.- / month)</label>
									</div>
								</div>
							</div>
							<button class="btn btn-primary mb-5" type="button">Become a helper!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="how-does-it-work">
			<div class="container">
				<div class="legal">
					<p><strong class="highlight">Finnsmåjobb</strong> er for privatpersoner som hjelper privatpersoner. Skattereglene er klare for denne type arbeid og du kan betale for småjobber uten å betale skatt.</p>
					<ul class="list-unstyled">
						<li>* Maks 6000.- til den samme personen pr. år</li>
						<li>* Maks 60 000.- totalt pr. år</li>
						<li>* Arbeidet må utføres ved hjemmet eller fritidsbolig.</li>
					</ul>
					<p>Les mer på: <a href="https://www.skatteetaten.no/person/skatt/hjelp-til-riktig-skatt/arbeid-trygd-og-pensjon/hobby-ekstrainntekt-og-smajobber/smajobber-og-tjenester/" target="_blank">skatteetaten.no</a></p>
				</div>
			</div>
		</div>
		<?php include ('template-parts/footer.php')?>
