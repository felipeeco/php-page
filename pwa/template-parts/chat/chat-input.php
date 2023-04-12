<div class="input-chat">
	<textarea type="text" class="form-control" placeholder="No personal information allowed" autocomplete="off" rows="1" data-autoresize></textarea>
	<button class="more" href="#" role="button" id="chatMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-plus icon-md"></i>
		<div class="dropdown-menu dropdown-menu-right rounded shadow" aria-labelledby="chatMenuLink" style="transform: translateY(-266px);">
			<a class="dropdown-item" href="#">Be om avtale<i class="fas fa-file-signature"></i></a>
			<a class="dropdown-item" href="#">SMS varsel<i class="fas fa-bell"></i></a>
			<a class="dropdown-item" href="#">Avslutt samtale<i class="fas fa-ban"></i></a>
			<a class="dropdown-item" href="#">Rapporter<i class="fas fa-exclamation-circle"></i></a>
			<a class="dropdown-item" href="#">Avtal befaring<i class="fas fa-file-search"></i></a>
			<a class="dropdown-item" href="#">Attach File<i class="fas fa-paperclip"></i></a>
		</div>
	</button>
	<button class="green send"><i class="fa-solid fa-arrow-up icon-md"></i></button>
</div>
<script>
	//resize textarea
	function addAutoResize() {
		document.querySelectorAll('[data-autoresize]').forEach(function (element) {
			element.style.boxSizing = 'border-box';
			var offset = element.offsetHeight - element.clientHeight;
			element.addEventListener('input', function (event) {
			event.target.style.height = 'auto';
			event.target.style.height = event.target.scrollHeight + offset + 'px';
			});
			element.removeAttribute('data-autoresize');
		});
	}
	addAutoResize();
</script>
<!--<div class="input-chat chat-input" id="bottomChat">
	<div class="msj-rta macro">                        
		<div class="text text-r">
			<textarea data-resizemobile name="message" id="message" placeholder="Skriv din melding her..." class=""></textarea>
		</div> 
		<div>
			<div class="footer-btn mobile-footer-btn">
				<button type="button" class="btn_upload_attachment"><i class="far fa-paperclip" data-toggle="tooltip" data-placement="top" title="" data-container=".chat-input" aria-hidden="true" data-original-title="Send a File"></i><span class="sr-only">Send a File</span></button>
				<input type="file" class="form-control-file hide  upload_attachment" id="upload_attachment" data-id="101" image-name="upload_attachment">
				<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="footer-menu-dropdown"><i class="far fa-times" data-toggle="tooltip" data-placement="top" title="" data-container=".chat-input" aria-hidden="true" data-original-title="More Options"></i><span class="sr-only">More Options</span></button>
				<div class="dropdown-menu" id="footer-dropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(38px, 40px, 0px);">
					<button type="button" class="btn_readContract"  data-toggle="modal" data-target="#calculatorModal">Calculator <i class="fal fa-calculator" aria-hidden="true"></i></button>
					<button type="button" class="btn_readContract" data-content="comming">Contract <i class="fal fa-file-signature" aria-hidden="true"></i></button>
					<button type="button" class="btn_readContract" data-content="comming">Report User  <i class="fal fa-exclamation-circle" aria-hidden="true"></i></button>
					<button type="button" type="button" data-toggle="modal" data-target="#inspectionModal">Inspection
						<i class="fal fa-file-search" aria-hidden="true"></i></button>
				</div>
				<a href="javascript:;" class="enter-msg send-msg">
					<span class=" glyphicon glyphicon-share-alt"><i class=" fas fa-paper-plane" aria-hidden="true"></i></span>
				</a>
			</div>

		</div>
	</div>
	<div class="message-footer" id="action-message-footer" >
		<i class="far fa-comment-alt-exclamation" aria-hidden="true"></i>
		<p>Vi minner om at denne jobben har et befaringsgebyr kr. 29.- som vil bli belastet dersom kontakt avtales
		utenfor chatten. Unngå unødvendige gebyrer og del kun kontaktinformasjon når befaring er nødvendig. </p>
	</div>                
</div>-->