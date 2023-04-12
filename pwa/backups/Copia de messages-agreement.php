<!--
UPDATES April 2022
-PHP integration to call the same side navigation html across pages
-->
<!doctype html>
<?php 
$title = "Meldinger"; /*PAGE TITLE*/
?>
<?php include ('template-parts/chat/inside-chat-header.php')?>  
<!-- Chat content -->
		<ul class="chat-content"  id="chat-content-data">
			<li style="width:100%">
				<div class="msj macro counter-offer ml-0" style="width: 100%;">
					  <div class="text text-l">
							<div class="contract-info">
								 <div class="counter-offer-content inspection">
									<h6>Fredrik Lien</h6>
									<p>Have suggested a new date for inspection  <br><span><i class="fas fa-calendar-alt mr-0"></i> 10.05.2021 at 10:00</span></p>
									<div class="d-flex">
										<a href="#" data-toggle="modal"  data-dismiss="modal" data-target="#acceptContract" class="btn btn-primary"><i class="fas fa-check"></i> Accept</button>
										<a href="#" class="btn btn-secondary ml-2"><i class="fas fa-edit"></i> Change</a>
									</div>
								</div>
								<div class="counter-offer-bottom">
									<p><i class="fas fa-hourglass-end"></i> Invitation expires in <strong>4</strong> hours</p>
								</div>
							</div>
					  </div>
				 </div>
			</li>
			
			<li style="width:100%">
				<div class="msj macro counter-offer ml-0" style="width: 100%;">
					  <div class="text text-l">
							<div class="contract-info">
								 <div class="counter-offer-content inspection">
									 <div class="d-flex">
										<span><i class="fas fa-badge-check mr-2" style="font-size: 20px;"></i></span>
										<div>
											<h6>Inspection Agreed</h6>
											<p class="mb-0">
												An inspection is agreed with <strong>Charlie Smith</strong>
											</p>
											<p class="my-1 d-flex flex-wrap justify-space-between">
												<span class=" mr-2"><i class="fas fa-calendar-alt"></i> 10.05.2021 at 10:00.</span>
												<span><i class="fas fa-phone-alt"></i> 999 999 999</span>
											</p>
											<p class="mb-0">You can now communicate directly and exchange full address for inspection.</p>
										</div>
									</div>
								</div>
								
							</div>
					  </div>
				 </div>
			</li>
        </ul>
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
});
	</script>
</html>
