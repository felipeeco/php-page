<!DOCTYPE html>
<?php
$title = 'Welcome';
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'home';
$load_ratingModal = false;
?>
<?php include ('template-parts/head.php')?>
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<h1>Get help with the small jobs you dont get the time to do yourself.</h1>
						<a class="btn btn-primary white" href="#" role="button" data-toggle="modal" data-target="#pre-register-form"><i class="fas fa-plus-circle"></i> Publish a Small Job</a>
					</div>
				</div>
			</div>
		</div><!--END OF DIV CLASS LANDING-->
		<!--ON SCREEN RATING-->
		<div class="container ratings-home ratings-list">
			<div class="header-rating">
				<h3>Vi er stolte over våre brukeres tilbakemeldinger</h3>
				<a href="reviews-page.php" class="readmore text-end ml-auto">Read more reviews <i class="fa-solid fa-chevron-right"></i></a>
			</div>
			<div class="row">
				<?php $reviewLayout = '<div class="col-md-4">
					<div class="white-box">
						<div class="d-flex g-5">
							<div class="">
								<img src="images/samples/profile-sample-3.png" alt="">
							</div>
							<div class="">
								<div class="ratign">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
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
				</div>';
				echo str_repeat($reviewLayout, 3); 
				?>
			</div>
		</div>
		<div class="container">
			<?php include ('template-parts/willing-to-work-list.php');?>
		</div>
		<div class="how-does-it-work">
			<div class="container">
				<h1>How does it work?</h1>
				<h2>Just follow this simple 3 steps</h2>
				<div class="row process">
					<div class="col-md-4 step">
						<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="47.357" height="69.941" viewBox="0 0 47.357 69.941">  <g id="Grupo_12" data-name="Grupo 12" transform="translate(-376.626 -1518.134)">    <path id="Trazado_21" data-name="Trazado 21" d="M60.719,81.442l7.608-7.607H60.719Z" transform="translate(348.53 1503.679)" fill="none"/>    <path id="Trazado_22" data-name="Trazado 22" d="M50.9,66.106A2.086,2.086,0,0,1,52.99,64.02H65.638V42.049a2.312,2.312,0,0,0-2.309-2.309H52.565c-.025.039-.056.074-.081.113-.125.19-.26.374-.4.554-.06.078-.117.159-.179.235a9.244,9.244,0,0,1-.65.717l-2.811,2.811a4.079,4.079,0,0,1-.648.529c-.062.041-.13.065-.194.1a2.626,2.626,0,0,1-.94.4c-.118.034-.234.081-.354.1a4,4,0,0,1-.469.045c-.108.008-.215.031-.324.031h0a4.175,4.175,0,0,1-.594-.057c-.064-.009-.129-.007-.194-.018a4.181,4.181,0,0,1-.587-.172c-.06-.021-.123-.029-.181-.053a4.2,4.2,0,0,1-.582-.3c-.046-.028-.1-.044-.14-.073a4.129,4.129,0,0,1-.652-.527L40.16,41.75l-6.074,6.074a2.086,2.086,0,0,1-2.951-2.95l5.135-5.135H28.933a2.312,2.312,0,0,0-2.309,2.309v34.4a2.312,2.312,0,0,0,2.309,2.309H50.9V66.106Zm7.979-22.07a2.154,2.154,0,0,1,2.945,0,2.086,2.086,0,1,1-2.946,2.955,2.073,2.073,0,0,1-.609-1.477A2.1,2.1,0,0,1,58.883,44.036ZM37.995,66.166H32.611a2.086,2.086,0,1,1,0-4.173h5.384a2.086,2.086,0,0,1,0,4.173Zm-5.384-7.511a2.086,2.086,0,1,1,0-4.173H49.052a2.086,2.086,0,1,1,0,4.173Z" transform="translate(354.173 1509.321)" fill="none"/>    <path id="Trazado_23" data-name="Trazado 23" d="M61.637,18.7l2.921,2.917c.007.007.012.016.018.023l.242.242A.834.834,0,1,0,66,20.7l-6.946-6.948a.835.835,0,0,0-1.181,1.181Z" transform="translate(349.042 1513.662)" fill="none"/>    <path id="Trazado_24" data-name="Trazado 24" d="M42.7,33.05l5.032,5.04,2.79-2.821a5.221,5.221,0,0,0,1.106-1.6,5.372,5.372,0,0,0,.5-2.285,5.728,5.728,0,0,0-.055-.783,2.086,2.086,0,0,1,.592-1.761l4.539-4.54-1.157-1.157-2.316-2.312L49.191,25.37a2.089,2.089,0,0,1-1.762.591,5.6,5.6,0,0,0-.78-.054,5.481,5.481,0,0,0-3.886,1.611l-2.806,2.814L42.6,32.965C42.629,32.994,42.667,33.019,42.7,33.05Z" transform="translate(351.966 1512.45)" fill="none"/>    <path id="Trazado_25" data-name="Trazado 25" d="M62.5,30.4H53.213a9.747,9.747,0,0,0,.057-1.051c0-.091,0-.184,0-.275l4.085-4.085a5,5,0,0,0,5.64-8.066L56.044,9.974a5,5,0,0,0-8.066,5.642L43.891,19.7a9.537,9.537,0,0,0-7.111,2.829l-2.809,2.818a4.111,4.111,0,0,0-.622,5.055H28.108a6.489,6.489,0,0,0-6.482,6.482v34.4a6.489,6.489,0,0,0,6.482,6.482H52.162a2.088,2.088,0,0,0,1.476-.611L68.373,62.415c.01-.01.015-.023.024-.033a2.064,2.064,0,0,0,.3-.4c.026-.045.05-.09.073-.137a2.056,2.056,0,0,0,.174-.487c0-.006,0-.011,0-.017a2.1,2.1,0,0,0,.04-.4V36.881A6.489,6.489,0,0,0,62.5,30.4ZM54.249,63.024h0Zm-2.336-50.1a.836.836,0,0,1,1.181,0l6.946,6.948a.834.834,0,1,1-1.181,1.179l-.242-.242c-.007-.008-.012-.016-.018-.023L55.679,17.87,51.914,14.1A.835.835,0,0,1,51.914,12.925ZM39.728,25.477a5.481,5.481,0,0,1,3.886-1.611,5.6,5.6,0,0,1,.78.054,2.088,2.088,0,0,0,1.762-.591L50.7,18.793l2.316,2.312,1.157,1.157L49.633,26.8a2.087,2.087,0,0,0-.592,1.761,5.719,5.719,0,0,1,.055.783,5.359,5.359,0,0,1-.5,2.285,5.236,5.236,0,0,1-1.106,1.6L44.7,36.05l-5.032-5.04c-.033-.033-.071-.056-.105-.087L36.922,28.29ZM25.8,71.276v-34.4a2.312,2.312,0,0,1,2.309-2.309h7.337l-5.135,5.135a2.086,2.086,0,0,0,2.951,2.95l6.074-6.074,2.423,2.425a4.176,4.176,0,0,0,.652.527c.045.029.1.046.14.073a4.153,4.153,0,0,0,.582.3c.059.023.122.033.181.053a4.215,4.215,0,0,0,.587.172c.063.013.129.009.194.018a4.2,4.2,0,0,0,.594.057h0c.108,0,.215-.023.324-.031a4.414,4.414,0,0,0,.469-.045c.12-.023.235-.07.354-.1a4.205,4.205,0,0,0,.414-.123,4.054,4.054,0,0,0,.526-.276c.063-.037.132-.061.194-.1A4.164,4.164,0,0,0,47.619,39l2.811-2.811a9.431,9.431,0,0,0,.65-.717c.063-.076.119-.157.179-.235.139-.18.274-.365.4-.554.026-.038.056-.073.081-.113H62.5a2.312,2.312,0,0,1,2.309,2.309V58.853H52.163a2.086,2.086,0,0,0-2.086,2.086V73.585H28.107A2.311,2.311,0,0,1,25.8,71.276Z" transform="translate(355 1509.623)" fill="#42c699"/>    <path id="Trazado_26" data-name="Trazado 26" d="M51.912,59.493a2.086,2.086,0,0,0-2.086-2.086H33.384a2.086,2.086,0,1,0,0,4.173H49.826A2.086,2.086,0,0,0,51.912,59.493Z" transform="translate(353.399 1506.397)" fill="#42c699"/>    <path id="Trazado_27" data-name="Trazado 27" d="M38.769,66.407H33.384a2.086,2.086,0,0,0,0,4.173h5.384a2.086,2.086,0,0,0,0-4.173Z" transform="translate(353.399 1504.908)" fill="#42c699"/>    <path id="Trazado_28" data-name="Trazado 28" d="M66.636,48.337a2.084,2.084,0,0,0,1.469-3.564,2.154,2.154,0,0,0-2.945,0,2.1,2.1,0,0,0,0,2.955A2.112,2.112,0,0,0,66.636,48.337Z" transform="translate(347.896 1508.585)" fill="#42c699"/>  </g></svg></div>
						<h4>Publish a Job</h4>
						<p>Describe what you need help to do, and set a price for the job. Publishing a job is simple and free.</p>
					</div>
					<div class="col-md-4 step">
						<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49.152" height="80" viewBox="0 0 49.152 80"><defs><lineargradient id="linear-gradient" x1="-7.475" y1="0.236" x2="14.1" y2="0.656" gradientUnits="objectBoundingBox">      <stop offset="0" stop-color="#42c699"/>      <stop offset="1" stop-color="#3fb6c6"/>    </linearGradient>  </defs>  <g id="Grupo_11" data-name="Grupo 11" transform="translate(-20.723 -2.55)">    <path id="Trazado_9" data-name="Trazado 9" d="M69.794,61.986,68.119,55.62A11.012,11.012,0,0,0,58.9,47.41l-4.021-.586L53.71,43.389A16.9,16.9,0,0,0,60.328,33.5c1.173-.586,3.016-2.094,3.016-5.948,0-2.764-.419-4.44-1.424-5.278a2.956,2.956,0,0,0-1.843-.921,53.279,53.279,0,0,0,.754-8.293c-.168-4.272-2.262-7.037-5.529-5.948A26.944,26.944,0,0,0,35.95,2.927c.168.419.586,1.843.754,2.513a10.238,10.238,0,0,0-4.943-1.005,11.2,11.2,0,0,0-.168,6.7c-.67,1.927-1.089,6.367-1.005,10.22a2.819,2.819,0,0,0-1.927.838c-1.005.921-1.424,2.6-1.424,5.361,0,3.77,1.843,5.278,2.932,5.948a16.9,16.9,0,0,0,6.618,9.885l-1.173,3.435-3.937.586a10.912,10.912,0,0,0-9.215,8.21l-1.675,6.367A2.425,2.425,0,0,0,21.206,64a2.1,2.1,0,0,0,1.759.838h8.712a14.861,14.861,0,0,1,13.655-8.88,15.089,15.089,0,0,1,13.655,8.88H67.7A2.227,2.227,0,0,0,69.459,64,2.449,2.449,0,0,0,69.794,61.986ZM37.877,48.164l1.173-3.435a14.309,14.309,0,0,0,6.2,1.424,13.947,13.947,0,0,0,6.115-1.424l1.173,3.435A12.189,12.189,0,0,1,37.877,48.164Zm7.372-4.607c-6.115,0-11.393-4.691-12.65-11.225a1.468,1.468,0,0,0-1.005-1.089c-.168,0-1.759-.586-1.759-3.686,0-2.681.5-3.267.67-3.518h.168c.084.754.251,1.424.335,2.011a.536.536,0,0,0,.586.419h1.089a.721.721,0,0,0,.67-.67,15.826,15.826,0,0,1,2.178-9.969c3.435,1.508,10.053,4.44,19.435.084,2.429,3.267,2.346,8.21,2.178,9.969a.647.647,0,0,0,.586.67h.921a.56.56,0,0,0,.586-.5,19.658,19.658,0,0,0,.335-2.011.628.628,0,0,1,.419.084c.168.168.67.754.67,3.435,0,3.1-1.592,3.6-1.759,3.686A1.249,1.249,0,0,0,57.9,32.331C56.642,38.782,51.364,43.557,45.249,43.557Z" transform="translate(0 0)" fill="url(#linear-gradient)"/>    <circle id="Elipse_3" data-name="Elipse 3" cx="2.262" cy="2.262" r="2.262" transform="translate(38.212 23.451)" fill="#42c699"/>    <circle id="Elipse_4" data-name="Elipse 4" cx="2.262" cy="2.262" r="2.262" transform="translate(47.762 23.451)" fill="#42c699"/>    <path id="Trazado_10" data-name="Trazado 10" d="M52.312,40.527c-1.257,1.424-5.278,1.424-6.534,0a.935.935,0,0,0-1.34-.084.833.833,0,0,0-.084,1.257,6.174,6.174,0,0,0,4.691,1.843A6.174,6.174,0,0,0,53.736,41.7a1.018,1.018,0,0,0-.084-1.34A.944.944,0,0,0,52.312,40.527Z" transform="translate(-3.795 -6.102)" fill="#42c699"/>    <circle id="Elipse_5" data-name="Elipse 5" cx="11.5" cy="11.5" r="11.5" transform="translate(34.239 59.55)" fill="url(#linear-gradient)"/>    <path id="Trazado_30" data-name="Trazado 30" d="M500.287,305.3l-6.514,6.514-3.567-3.565-1.906,1.906,3.565,3.565v0l1.906,1.906,8.422-8.422Z" transform="translate(-449.907 -239.214)" fill="#fff"/>  </g></svg></div>
						<h4>Choose a Helper</h4>
						<p>Helpers will contact you, and you can communicate with each helper. When you have decided the right helper you simply agree on time and place.</p>
					</div>
					<div class="col-md-4 step">
						<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="51.6" height="58.673" viewBox="0 0 51.6 58.673"><defs><lineargradient id="linear-gradient" x1="-14.329" y1="0.759" x2="6.584" y2="0.587" gradientUnits="objectBoundingBox">      <stop offset="0" stop-color="#42c699"/>      <stop offset="1" stop-color="#3fb6c6"/>    </linearGradient>  </defs>  <path id="Trazado_29" data-name="Trazado 29" d="M34,2.5h0A25.789,25.789,0,0,0,8.2,28.3V57.618A3.543,3.543,0,0,0,13.94,60.4l7.777-6.357H34A25.769,25.769,0,1,0,34,2.5ZM45.727,26.942l-4.753,4.629a.984.984,0,0,0-.247.741l1.111,6.419a1.169,1.169,0,0,1-1.728,1.234l-5.864-3.086a.787.787,0,0,0-.741,0L27.766,39.9a1.2,1.2,0,0,1-1.728-1.234l1.111-6.543a.848.848,0,0,0-.247-.741L22.273,26.88a1.2,1.2,0,0,1,.679-2.037l6.543-.926a.892.892,0,0,0,.617-.432l2.9-5.8a1.224,1.224,0,0,1,2.16,0l2.9,5.925a.743.743,0,0,0,.617.432l6.419.926A1.159,1.159,0,0,1,45.727,26.942Z" transform="translate(-8.2 -2.5)" fill="url(#linear-gradient)"/></svg></div>
						<h4>Rate your Helper</h4>
						<p>Describe what you need help to do, and set a price for the job. Publishing a job is simple and free.</p>
					</div>
				</div>
				<hr>
				<?php include('template-parts/legal-information-footer.php'); ?>
			</div>
		</div>
	<?php include ('template-parts/footer.php')?>