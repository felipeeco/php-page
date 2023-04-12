<div class="container mt-4"> <!-- removed the bg-white  class-->
	<div class="filter-information  py-3 mb-0">
		<h2>Showing <span class="d-block">Prof. <?php echo ($current_page)?></span></h2>
		<div class="filter-content">
			<?php if ($active_helper_filer == true){echo ('<button type="button" class="btn filter-btn active calendar-circle-user" data-toggle="modal" data-target="#activeHelpersModal"></button>');}?><!--ONLY SHOWS ON HELPER TAB-->
			<button type="button" class="btn filter-btn active fa-rectangle-pro"  data-toggle="modal" data-target="#jobTypeModal"></button>
			<button type="button" class="btn filter-btn fa-sort" data-toggle="modal" data-target="#sorteringModal"></button>
			<button type="button" class="btn filter-btn active grid-2" data-toggle="modal" data-target="#typeJobModal"><span class="counter">20</span></button>
			<button type="button" class="btn filter-btn magnifying-glass" data-toggle="modal" data-target="#searchModal" id="search-open" ></button>
		</div>
	</div>
</div>