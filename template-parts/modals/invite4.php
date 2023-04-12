<!--Invite Helper Modal – 1-->
<div class="modal fade" id="invite4">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">	
			<div class="modal-header gradient-bg">
				<h5 class="modal-title"><img src="images/samples/7842e668c271f5b74dad2128f4097db5dc3f5.png" alt="" class="profile">Lag en ny småjobb til <strong>Ole andreas</strong></h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal"></i></button>
			</div>
			<div class="modal-body grey-bg">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
				<div class="subscrition-options">
					<div class="radio-buttons">
						<label class="custom-radio">
							<input type="radio" name="radio ">
							<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#gratis_modal">
								<div class="head-title d-flex">
									<div class="label d-flex g-5"><h4>Shovel snow</h4><?php echo $ext_link?></div>
									<div class="current checked ml-auto d-none"><span>Selection</span> <i class="fa-solid fa-circle-check"></i></div>
									<div class="current uncheked ml-auto"><i class="fa-regular fa-circle"></i></div>
								</div>
							</div>
						</label>
					</div>
					<div class="radio-buttons">
						<label class="custom-radio">
							<input type="radio" name="radio ">
							<div class="white-box selected p-3 mb-3" data-toggle="modal" data-target="#varsling_modal">
								<div class="head-title d-flex">
									<div class="label d-flex g-5"><h4>Take my sofa to my mother bcuz she needs it</h4><?php echo $ext_link?></div>
									<div class="current checked ml-auto d-none"><span>Selection</span> <i class="fa-solid fa-circle-check"></i></div>
									<div class="current uncheked ml-auto"><i class="fa-regular fa-circle"></i></div>
								</div>
							</div>
						</label>
					</div>
				  </div>
				<?php include ('pwa/template-parts/pagination.php')?>
			</div>
			<div class="modal-footer grey-bg">
				<a href="" class="btn btn-light"><i class="fa-solid fa-chevron-left"></i> Back</a>
				<a href="" class="btn btn-primary">Videre <i class="fa-solid fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</div>