<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-added the top bar with the side navigation
-added lottie animation for empty chats
-->
<!doctype html>
<?php 
$title = "Meldinger"; /*PAGE TITLE*/
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = true; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = 'desktop-body page chat no-back';
$heading_pwa = '<i class="fa-solid fa-comment"></i> Meldinger';
$messages_empty = false; /*make true to check how it looks ifmessages are empty*/
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
<?php
	if ($messages_empty == true){
		include ('template-parts/chat/conversations-list-empty.php');
	}else{
		include ('template-parts/chat/conversations-list-sample.php');
	}

?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php include ('template-parts/myjs.php')?>
<script>
	$('.notification-icon').on('click', function() {
		var title = $(this).find(".title");
		var tooltips = $('.tooltipChat');
		tooltips.remove();
		if (!title.length) {
			$(this).append('<span class="tooltipChat">' + $(this).attr("title") + '</span>');
		} else {

			title.remove();
		}
	})
</script>
  </body>
</html>