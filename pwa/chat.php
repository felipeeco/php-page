<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-->
<!doctype html>
<?php 
$title = "Meldinger"; /*PAGE TITLE*/
?>
<?php include ('template-parts/chat/inside-chat-header.php')?>  
<style>
</style>
<div class="modal fade" tabindex="-1" id="welcomeModal">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header gradient-bg pt-5">
        <h5 class="modal-title m-auto d-block text-center"><i class="fa-solid fa-comment-exclamation icon-xxl white d-block m-auto"></i> Chat rules</h5>
      </div>
      <div class="modal-body gradient-bg">
        <ul class="custom-list-chat-rules">
			<li class="ban">Det strengt forbudt å utveksle kontaktinformasjon i chatten før befaring eller avtale om oppdrag er bekreftet av begge parter.</li>  
			<li class="Plus-circle">Oppdrag og befaringer avtales under <i class="fa-regular fa-circle-plus"></i> ikonet.</li>
			<li class="user-slash">Brudd på regelverket kan resultere i tap av bruksrett.</li>
			<li class="comment-exclamation">Chattreglene finner du alltid øverst i chatten.</li>
		</ul>
		<div class="form-check m-auto form-check-lg white" style="width: 200px	">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">Skjul i 30 dager</label>
		</div>
      </div> 
      <div class="modal-footer gradient-bg">        
        <button type="button" class="btn btn-light btn-lg" data-dismiss="modal" aria-label="Close">Skjønner</button>
      </div>
    </div>
  </div>
</div>

<!--Default-->
<div class="modal fade" id="profile">
	<div class="modal-dialog text-center">
		<div class="modal-content">	
			<div class="modal-header grey-bg pt-5 pb-0">
				<div class=" employer-details" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 0px;gap: 10px;">
                    <div class=" profile-picture 1122">
                        <div class="picture-holder user-3246" style="background-image:url(https://minsmajobb.no/assets/uploads/Eirik-1675801962.png);width: 90px;height: 90px;border: 1px solid lightgrey;">
                            <div class="onlineholder">
                                <div class="indicator-off"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" rating-info">
                        <div class="personal-info 22-col m-0">
                            <a href="javascript:;" class="action-popup-rating" data-user_id="3347">
							<span class="name">EirikHjelper</span></a>
                        </div>
						<a href="javascript:;" class="action-popup-rating" data-user_id="3347">
                        <div class="r-updated"><ul class="ratinglist list-unstyled small-text 11"><li><img src="../images/rating/green/rating-10.svg" alt=""></li><li><img src="../images/rating/green/rating-10.svg" alt=""></li><li><img src="../images/rating/green/rating-10.svg" alt=""></li><li><img src="../images/rating/green/rating-10.svg" alt=""></li><li><img src="../images/rating/green/rating-10.svg" alt=""></li><li class="rating-number">5.0</li></ul></div><div class="reviews-number small-text"><i class="fa-solid fa-comment"></i> 9 Vurderinger</div>						</a>
                    </div>
                </div>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
			</div>
			<div class="modal-body grey-bg">
				<div class="form-info white">Oppdragsgiver mobilnummer vil vise her om du får jobben</div>
				<br>
				<p class="text-left top-p">OM SMÅJOBBEN</p>
				<ul class="list-group">
					<li class="list-group-item">
            <i class="fa-solid fa-broom"></i>
              Rengjøre Tesla model S for salg
            </a>
          </li>
					<li class="list-group-item">
            <i class="fa-solid fa-money-bill-wave"></i>
						kr.&nbsp;220/time                         
          </li>
					<li class="list-group-item">
            <i class="fa-solid fa-clock"></i>
						Tidspunkt avtales                        
          </li>
					<li class="list-group-item btn-map-info-popup " data-id="28613">
            <i class="fa-solid fa-location-dot"></i> Åpne kart 
          </li>
				</ul>
				<p class="text-left bottom-p">Dersom kontaktinformasion ikke er delt kan du trekke tilbake tilbudet om hjelp</p>
			</div>
		</div>
	</div>
</div>

<div class="meesagesloading" id="meesagesloading-pwa">
	<div class="loading-infoholder" style="margin-top: 50%;">
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 
		<lottie-player src="https://lottie.host/2cfc82b7-397b-4de4-a403-96a767bbe977/3GbvlQlrJi.json" background="transparent" speed="1" style="width: 200px; height: 200px; margin: auto;" loop autoplay></lottie-player>
		<h1 class="dark">refreshing chat...</h1>
	</div>
</div>

<!-- Chat content -->
		<div class="form-info dark" style="margin-top: 88px;position: relative;z-index: 9;border-radius: 0;opacity: 1;"><i class="fa-solid fa-circle-info"></i> <span>Hjelperen blir i kontaktlisten din i 12 dager. Noter nummeret om du forventer at oppdraget tar lengre tid å fullføre. <a href="#">Chat regler</a></span></div>
		<?php include ('template-parts/chat/chat-bubbles.php');?>
		<?php include ('template-parts/chat/chat-input.php');?>
	</div>
	<?php include ('template-parts/chat/chat-modals.php');?>
</body>
	<?php include ('template-parts/myjs.php')?>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script> // NEW SCRIPT ABRIL 2021
		$('#date').datepicker({
			uiLibrary: 'bootstrap4'
		});
		
		$('#dateConfirm').datepicker({
					uiLibrary: 'bootstrap4'
			});
	</script>

	<script>
		//Custom Number Input

		$('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fas fa-chevron-up"></i></div><div class="quantity-button quantity-down"><i class="fas fa-chevron-down"></i></div></div>').insertAfter('.numberInput input');
    $('.numberInput').each(function() {
      var spinner = $(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });


	</script>


    <script>
		
		window.addEventListener("load", function(event) {
    
    function chatSizing() {
        var chatScreen = document.getElementById('chat-content-data'); 
        var bottomChat = document.getElementById('bottomChat').offsetHeight;
        if(bottomChat == 0) {
            chatScreen.style.paddingBottom = '180px';
            initialChatHeight = '120px';
        } else {
            chatScreen.style.paddingBottom = bottomChat + 'px';
            initialChatHeight =  bottomChat + 'px';
        }
    }
    chatSizing();


    $.each($('textarea[data-resizemobile]'), function() {
        this.addEventListener('keyup', function (e) {
			this.style.height = 0;
			var resizing;
			var bottomChat = document.getElementById('bottomChat').offsetHeight;

			if(this.scrollHeight < 180) {
				resizing = bottomChat + this.scrollHeight - 60 + 'px';
			} else {
				resizing = bottomChat + 120 + 'px';;
			}
			
			this.style.height = this.scrollHeight + 'px';
			
			var chatArea =  document.getElementById('chat-content-data'); 
			chatArea.style.paddingBottom = resizing;
			chatArea.scrollTop = chatArea.scrollHeight;
			
			if(this.offsetHeight < 30 ) {
				document.getElementById('chat-content-data').style.paddingBottom = bottomChat + 'px';
			}

    }, false);
	});
});
$('.send-msg').on('click', function(){
		document.getElementById('chat-content-data').style.paddingBottom = initialChatHeight;
	});

	$("#footer-menu-dropdown").on('click', function(){
    $(this).toggleClass('opened');

    if($("#footer-dropdown").hasClass('show')) {
		$(this).removeClass('opened');
	}
});

$("#footer-dropdown button").on('click', function(){
    $("#footer-menu-dropdown").removeClass('opened');
})

$(document).mouseup(function(e) {

    if($("#footer-dropdown").hasClass('show')) {
        $("#footer-menu-dropdown").removeClass('opened');
    }
});/*
		
    $(window).on('load', function() {
        $('#welcomeModal').modal('show');
    });*/

		

	</script>
</html>
