<div class="col-md-7 helper form profile-settings-form">
	<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active pb-0" id="pills-employer-tab" data-toggle="pill" href="#pills-employer" role="tab" aria-controls="pills-employer" aria-selected="true">Employer Profile</a>
		</li>
		<li class="nav-item ml-md-4">
			<a class="nav-link pb-0" id="pills-helper-tab" data-toggle="pill" href="#pills-helper" role="tab" aria-controls="pills-helper" aria-selected="false">Helper Profile</a>
		</li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active active-jobs" id="pills-employer" role="tabpanel" aria-labelledby="pills-employer-tab">
			<?php include ('template-parts/forms/employer-profile-form.php');?>
		</div>
		<div class="tab-pane fade expired-jobs" id="pills-helper" role="tabpanel" aria-labelledby="pills-helper-tab">
			<?php include ('template-parts/forms/helper-profile-form.php');?>
		</div>
	</div>
</div>