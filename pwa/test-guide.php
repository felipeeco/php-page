<!doctype html>
<?php 
// PWA
$title = 'Innstillinger';
$loggin = true	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = true;
$backURL = 'dashboard.php';
$heading_pwa = $title;
$body_class = 'bg-grey';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<div class="container mt-5">
	
	<h1>h1 Heading</h1>
	<h2>h2 Heading</h2>
	<h3>h3 Heading</h3>
	<h4>h4 Heading</h4>
	<h5>h5 Heading</h5>
	<h6>h6 Heading</h6>
	<hr>
	<h3>
	  Fancy display heading
	  <small class="text-muted">With faded secondary text</small>
	</h3>
	<hr>
	<h1 class="display-1">Display 1</h1>
	<h1 class="display-2">Display 2</h1>
	<h1 class="display-3">Display 3</h1>
	<h1 class="display-4">Display 4</h1>
	<hr>
	<p class="lead">
	  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
	</p>
	<hr>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
	<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
	<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,</p>
</div>
<?php include ('template-parts/myjs.php')?>
</body>
</html>