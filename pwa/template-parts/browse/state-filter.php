<div class="container">
	<?php if ($loggin == false){
			echo('
			<div id="stateNotSelected"> 
				<div>
					<i class="fad fa-map-marker-slash float-left"></i>
					<h2>Vi ser ikke hvor du er</h2>
					<p><a href="#">Logg inn</a> eller fortell oss hvor du er i feltet til høyre.</p>
				</div>
				<div>
					<form class="job-location-form">
						<div class="form-group m-0">
							<input type="text" name="location" placeholder="Skriv gate eller sted">
							<div class="dropdown ml-auto">
								<button class="btn dropdown-toggle btn-dropdown" type="button" id="statesList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-chevron-down"></i></button>
								<div class="dropdown-menu" id="stateListSelection" aria-labelledby="statesList">
									<button class="dropdown-item" type="button">Akershus</button>
									<button class="dropdown-item" type="button">Finnmark</button>
									<button class="dropdown-item" type="button">Møre og Romsdal</button>
									<button class="dropdown-item" type="button">Oslo</button>
									<button class="dropdown-item" type="button">Svalbard</button>
									<button class="dropdown-item" type="button">Trøndelag</button>
									<button class="dropdown-item" type="button">Østfold</button>
									<button class="dropdown-item" type="button">Aust agder</button>
									<button class="dropdown-item" type="button">Hedmark</button>
									<button class="dropdown-item" type="button">Nordland</button>
									<button class="dropdown-item" type="button">Rogaland</button>
									<button class="dropdown-item" type="button">Telemark</button>
									<button class="dropdown-item" type="button">Vestfold</button>
									<button class="dropdown-item" type="button">Buskerud</button>
									<button class="dropdown-item" type="button">Hordaland</button>
									<button class="dropdown-item" type="button">Oppland</button>
									<button class="dropdown-item" type="button">Sogn og Fjordane</button>
									<button class="dropdown-item" type="button">Troms</button>
									<button class="dropdown-item" type="button">Vest-Agder</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			');
		}else if ($loggin == true){
			echo('
				<div class="row" id="stateWasSelected">
					<div class="col-12">
						<div class="job-location-info px-4">
							<div class="text-center">
								<h2>Juster avstand for søket</h2>
								<p>Innen <span id="valueDistance"></span> km fra <strong>Oslo, Norway</strong></p>
							</div>
							<div class="range">
								<input type="range" min="1" max="100" value="50" class="slider" id="distanceRange">
							</div>
						</div>
					</div>
				</div>
			');
		}
	?>
	</div>