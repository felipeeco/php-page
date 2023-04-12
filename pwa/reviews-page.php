<!doctype html>
<?php 
$title = "Reviews";
$loggin = false;
$hasback = true;
$hasnavbar = false;
$body_class = 'rating-page';
//define back URL file link
if ($loggin == true){
	$backURL = 'dashboard.php';
}else{
	$backURL = 'welcome.php';
}
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
		<header>
			<div class="container">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_ao823ilv.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px; margin:-20px auto -30px"  loop  autoplay></lottie-player>
				<h1>3,065 helpers and employers have reviewed our website</h1>
				<div class="rating-box-intro white-box">
					<div class="overalrating">
						<div class="counts">5/5</div>
						<div class="info-labeled">Averge rating</div>
					</div>
					<div class="detailed-rating">
						<div class="ratign">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
						<span class="supported_info_rating">Based on more than 2K+ reviews</span>
						<h3>Employers &amp; Helpers</h3>
					</div>
				</div>
			</div>
		</header>
		<!--RATINGS CONTENT GOES HERE-->
		<div class="container">
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-md-10 offset-md-1 reviews-holder">
					<h1>Here’s what they say:</h1><br><br>
					<div class="filters">
						<form action="">
							<div class="form-row">
								<div class="form-group col-5">
									<label for="type">Type</label>
									<select name="type" id="">
										<option value="All">All</option>
										<option value="Employers">Employers</option>
										<option value="Helpers">Helpers</option>
									</select>
								</div>
								<div class="form-group col-7">
									<label for="Rating">Rating</label>
									<select name="Rating" id="">
										<option value="All Reviews ">All Reviews </option>
										<option value="5">5 Stars ★★★★★</option>
										<option value="4">4 Stars ★★★★☆</option>
										<option value="3">3 Stars ★★★☆☆</option>
										<option value="2">2 Stars ★★☆☆☆</option>
										<option value="1">1 Star ★☆☆☆☆</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="When">When?</label>
								<select name="When" id="">
									<option value="Since we launched the app">Since we launched the app</option>
									<option value="Last Reviews">Last Reviews</option>
									<option value="This Month">This Month</option>
									<option value="This Year">This Year</option>
									<option value="Last Year">Last Year</option>
								</select>
							</div>
						</form>
					</div>
						<div class="testimonials ratings-full">
							<div class="row">
								<div class="col-md-4 poster-information">
									<img src="../images/samples/profile-sample-1 2.png" alt="" class="profile-picture">
									<div class="information-text">
										<div class="ratign">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										</div>
										<h3 class="name">Hiba B.</h3>
										<a href="#" class="username">@hinab</a>
									</div>
								</div>
								<div class="col testimonial-description">
									<h2 class="name"><a href="#">Cleaning house</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pret ium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 poster-information">
									<img src="../images/samples/profile-sample-1 2.png" alt="" class="profile-picture">
									<div class="information-text">
										<div class="ratign">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										</div>
										<h3 class="name">Hiba B.</h3>
										<a href="#" class="username">@hinab</a>
									</div>
								</div>
								<div class="col testimonial-description">
									<h2 class="name"><a href="#">Cleaning house</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pret ium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 poster-information">
									<img src="../images/samples/profile-sample-1 2.png" alt="" class="profile-picture">
									<div class="information-text">
										<div class="ratign">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										</div>
										<h3 class="name">Hiba B.</h3>
										<a href="#" class="username">@hinab</a>
									</div>
								</div>
								<div class="col testimonial-description">
									<h2 class="name"><a href="#">Cleaning house</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pret ium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 poster-information">
									<img src="../images/samples/profile-sample-1 2.png" alt="" class="profile-picture">
									<div class="information-text">
										<div class="ratign">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										</div>
										<h3 class="name">Hiba B.</h3>
										<a href="#" class="username">@hinab</a>
									</div>
								</div>
								<div class="col testimonial-description">
									<h2 class="name"><a href="#">Cleaning house</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
									<p>Donec quam felis, ultricies nec, pellentesque eu, pret ium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									<span class="date"><i class="fas fa-calendar"></i> Date: 10.10.20</span>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<!--THE FOOTER CONTENT GOES HERE-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<h5>Do</h5>
						<ul class="list-unstyled">
							<li><a href="">Publish a job</a></li>
							<li><a href="">Browse jobs</a></li>
							<li><a href="">Messages</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>Explore</h5>
						<ul class="list-unstyled">
							<li><a href="">Our service</a></li>
							<li><a href="">Customer care</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Connect</h5>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa-brands fa-facebook"></i>Follow us on Facebook</a></li>
						</ul>
					</div>
					<div class="col-md-5">
						<div class="logo-footer">
							<img src="../images/footer-logo.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php include ('template-parts/myjs.php')?>
		<script>
			$( "#thank" ).click(function() {
			$( ".form-content" ).slideToggle( "flast" );
			$( ".thankyou" ).slideToggle( "flast" );
			});
		</script>
  </body>
</html>