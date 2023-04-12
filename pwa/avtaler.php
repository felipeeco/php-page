<!doctype html>
<?php 
// PWA
$title = 'Avtaler';
$iconCode = 'handshake';
$loggin = true	; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = false;
$hasback = true;
$heading_pwa = $title;
$body_class = 'bg-grey';
$backURL = 'dashboard.php';
//DYNAMIC INFO
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = '../images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
<div class="content mt-4 mb-5">
	<div class="container">
		<p>Her finner du alle avtaler gjort hos oss.</p>
		<div class="form-group mt-4">
			<div class="">
				<div class="">
					<label for="" style="margin: 0 10px 0 0;"><p style="color: var(--dark)" class="m-1">Select a Date Range:</p></label>
					<div id="reportrange" class="" style="background: #fff; cursor: pointer; padding: 10px; border: none; width:auto; border-radius: 20px;border: 1px solid rgba(112, 112, 112, 0.26);">
						<i class="fa-regular fa-calendar-days" style="color: var(--green); padding-left: 5px;"></i>&nbsp;
						<span></span><i class="fa-regular fa-chevron-down" style="color: var(--grey); float: right; margin: 4px 5px 0px 0px;"></i>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="reports-table">
			<div class="white-box p-3 mb-3" style="border-radius: 20px;">
				<table class="reports-table w-100 mb-3" cellpadding="3">
					<tr>
						<th class="w-25">Signed</th>
						<td>04.11.2021</td>
					</tr>
					<tr>
						<th>Oppdrag</th>
						<td><span>Washing house close to the yard where i user to lived with my dog</span></td>
					</tr>
					<tr>
						<th>Price agreed</th>
						<td>590.-</td>
					</tr>
				</table>
				<div class="actions d-flex">
					<a href="#" class="d-block w-100 text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a>
				</div>
			</div>
			<div class="white-box p-3 mb-3" style="border-radius: 20px;">
				<table class="reports-table w-100 mb-3" cellpadding="3">
					<tr>
						<th class="w-25">Signed</th>
						<td>04.11.2021</td>
					</tr>
					<tr>
						<th>Oppdrag</th>
						<td><span>Washing house close to the yard where i user to lived with my dog</span></td>
					</tr>
					<tr>
						<th>Price agreed</th>
						<td>590.-</td>
					</tr>
				</table>
				<div class="actions d-flex">
					<a href="#" class="d-block w-100 text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a>
				</div>
			</div>
			<div class="white-box p-3 mb-3" style="border-radius: 20px;">
				<table class="reports-table w-100 mb-3" cellpadding="3">
					<tr>
						<th class="w-25">Signed</th>
						<td>04.11.2021</td>
					</tr>
					<tr>
						<th>Oppdrag</th>
						<td><span>Washing house close to the yard where i user to lived with my dog</span></td>
					</tr>
					<tr>
						<th>Price agreed</th>
						<td>590.-</td>
					</tr>
				</table>
				<div class="actions d-flex">
					<a href="#" class="d-block w-100 text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a>
				</div>
			</div>
			
			
			
		</div>
	</div>
</div>
</div>
<?php include ('template-parts/myjs.php')?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script type="text/javascript">
	$(function() {
		var start = moment().subtract(29, "days");
		var end = moment();

		function cb(start, end) {
			$("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
		}

		$("#reportrange").daterangepicker({
			startDate: start,
			endDate: end,
			ranges: {
			   "Today": [moment(), moment()],
			   "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
			   "Last 7 Days": [moment().subtract(6, "days"), moment()],
			   "Last 30 Days": [moment().subtract(29, "days"), moment()],
			   "This Month": [moment().startOf("month"), moment().endOf("month")],
			   "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}, cb);

		cb(start, end);
	});
	</script>
	<script>
		$('a.toggler').click(function() {
            $(this).find('i').toggleClass('fa-chevron-up');
        });
	</script>
</body>
</html>