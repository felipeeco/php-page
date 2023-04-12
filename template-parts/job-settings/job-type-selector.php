<?php if ($current_selection == ('empty')){
	//empty selection
	echo('
	<button class="btn custom-select unselected" data-toggle="modal" data-target="#exampleModalCenter">
		<div class="head-title d-flex mb-2 ">
			<div class="label d-flex g-5"><i class="fa-regular fa-circle-exclamation"></i><h6>Select a type of project</h6></div>
			<i class="fa-solid fa-chevron-right ml-auto"></i>
		</div>
	</button>
	');
} else if ($current_selection == ('error')){
//	ERROR
	echo('
	<button class="btn custom-select error" data-toggle="modal" data-target="#exampleModalCenter">
		<div class="head-title d-flex mb-2">
			<div class="label d-flex g-5"><i class="fa-regular fa-circle-exclamation"></i><h6>Select a type of project</h6><span class="danger">*You must select a job type before publishing.</span></div>
			<i class="fa-solid fa-chevron-right ml-auto"></i>
		</div>
	</button>
');
} else if ($current_selection == ('selected')){
//	SELECTED JOB
	echo('
	<button class="btn custom-select" data-toggle="modal" data-target="#exampleModalCenter">
		<div class="head-title d-flex">
			<div class="label d-flex g-5"><i class="fa-solid fa-suitcase"></i><h6>This is a small job</h6></div>
			<div class="current checked ml-auto"><span>Selected Job Type</span> <i class="fa-solid fa-circle-check"></i></div>
			<i class="fa-solid fa-chevron-right"></i>
		</div>
	</button>
	');
}
?>