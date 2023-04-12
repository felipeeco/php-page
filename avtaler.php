<!DOCTYPE html>
<?php
$title = 'Avtaler';
$iconCode = 'handshake';
$loggin = true; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page profile no-back bg-grey';
$load_ratingModal = false;
/*THIS FOLLOWING SCRIPT WILL BE LOADED AT THE END OF THE PAGE TO PROPER FUNCTION*/
$insert_scrtip = '
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
		$("a.toggler").click(function() {
            $(this).find("i").toggleClass("fa-chevron-up");
        });
	</script>
	';
//DYNAMIC CONTENT
$userName = 'Chris Evans';
$userEmail = 'chris.evans19@icloud.com';
$profilePicter_URI = 'images/samples/profile-sample-1.png';
?>
<?php include ('template-parts/head.php')?>
</div><!--END OF DIV CLASS LANDING-->
		<div class="content my-5">
			<div class="container">
				<div class="row">
					<div class="col-md-3 profile-information centered">
						<?php include ('template-parts/user-profile.php');?>	
					</div>
					<div class="col-md-9 reports-info">
						<h1><i class="fa-solid fa-<?php echo($iconCode)?>"></i> <?php echo($title)?></h1>
						<p>Her finner du alle avtaler gjort hos oss.</p>
						<form action="">
							<div class="form-group mt-4">
								<div class="">
									<div class="d-flex align-items-center">
										<label for="" style="margin: 0 10px 0 0;">Valg for visning:</label>
										<div id="reportrange" class="" style="background: #fff; cursor: pointer; padding: 10px 15px 10px 10px; border: none; width:auto; border-radius: 20px;border: 1px solid rgba(112, 112, 112, 0.26);">
											<i class="fa-regular fa-calendar-days" style="color: var(--green); padding-left: 5px;"></i>&nbsp;
											<span></span><!--<i class="fa-regular fa-chevron-down" style="color: var(--grey); float: right; margin: 4px 5px 0px 0px;"></i>-->
										</div>
									</div>
								</div>
							</div>
						</form>
						<table class="table reports-table" >
							<thead>
								<tr>
									<th>Signed</th>
									<th>Oppdrag</th>
									<th>Price agreed</th>
									<th>Agreement</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>12.10.2020</td>
									<td>Cleaning house</td>
									<td>250.-</td>
									<td class="actions"><a href="#" class="d-block"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a></td>
								</tr>
								<tr>
									<td>12.10.2020</td>
									<td>Cleaning house</td>
									<td>250.-</td>
									<td class="actions"><a href="#" class="d-block"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a></td>
								</tr>
								<tr>
									<td>12.10.2020</td>
									<td>Cleaning house</td>
									<td>250.-</td>
									<td class="actions"><a href="#" class="d-block"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a></td>
								</tr>
								<tr>
									<td>12.10.2020</td>
									<td>Cleaning house</td>
									<td>250.-</td>
									<td class="actions"><a href="#" class="d-block"><i class="fa-regular fa-arrow-down-to-line"></i> Download Avtaler</a></td>
								</tr>
								
							</tbody>
						</table>
						<?php include ('pwa/template-parts/pagination.php')?>
					</div>
				</div>
			</div>
		</div>
		<?php include ('template-parts/footer.php')?>