<!DOCTYPE html>
<?php
$title = 'Betalinger';
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
		<div class="content mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-3 profile-information centered">
						<?php include ('template-parts/user-profile.php');?>	
						<div class="job-count">
							<ul>
								<li><i class="fas fa-briefcase"></i> Jobs got: <span>17</span></li>
								<li><i class="fas fa-briefcase" id="slash-icon"></i> <i class="fas fa-slash"></i> Jobs didn't get: <span>67</span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9 reports-info">
						<h1><i class="fa-solid fa-money-bill-wave"></i> <?php echo($title)?></h1>
						<p>Her finner du status for alle dine betalinger og reservasjoner.</p>
						<form action="">
							<div class="form-group mt-4">
								<div class="">
									<div class="d-flex align-items-center">
										<label for="" style="margin: 0 10px 0 0;">Select a Date Range:</label>
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
									<th>Date</th>
									<th>Title</th>
									<th>Job fee</th>
									<th>Status</th>
									<th>Doc</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>12.10.2020</td>
									<td>Cleaning house</td>
									<td>250.-</td>
									<td class="text-success">Belastet 89.- <i class="fa-regular fa-check"></i></td>
									<td class="actions"><a href="#" class="d-block text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Invoice</a></td>
									<td class="actions"><a href="" class="d-block text-center toggler" data-toggle="collapse" data-target="#demo1" class="accordion-toggle"><i class="fa-regular fa-chevron-down"></i> Details</a></td>
								</tr>
								<tr>
									<td colspan="6" class="inside-table p-0">
										<div class="accordian-body collapse" id="demo1"> 
											<table class="table inside-table">            
												<tr>
													<th>Employer:</th>
													<td>MyName (ID: 44567)</td>
												</tr>
												<tr>
													<th>Transaction id:</th>
													<td>VID-123-1234-12345</td>
												</tr>
												<tr>
													<th>Job ID:</th>
													<td>10577</td>
												</tr>
												<tr>
													<th>Payment method:</th>
													<td>Vipps</td>
												</tr>
												<tr>
													<th>Fee type:</th>
													<td>Inspection fee</td>
												</tr>
												<tr>
													<th>Date of capture:</th>
													<td>16.10.2020</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
								<tr>
									<td>13.10.2020</td>
									<td>Washing House</td>
									<td>59.-</td>
									<td class="text-secondary">Pending <i class="fa-regular fa-clock"></i></td>
									<td class="actions"><a href="#" class="d-block text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Invoice</a></td>
									<td class="actions"><a href="" class="d-block text-center toggler" data-toggle="collapse" data-target="#demo2" class="accordion-toggle"><i class="fa-regular fa-chevron-down"></i> Details</a></td>
								</tr>
								<tr>
									<td colspan="6" class="p-0 inside-table">
										<div id="demo2" class="accordian-body collapse">
											<table class="table inside-table">            
												<tr>
													<th>Employer:</th>
													<td>MyName (ID: 44567)</td>
												</tr>
												<tr>
													<th>Transaction id:</th>
													<td>VID-123-1234-12345</td>
												</tr>
											</table>
											<p class="text-secondary border-top">No one is awarded this job yet. Data will be updated when someone is awarded or the job is expired/ cancelled.</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>17.10.2020</td>
									<td>HELP! With my garden</td>
									<td>120.-</td>
									<td class="text-danger">Cancelled <i class="fa-regular fa-circle-exclamation"></i></td>
									<td class="actions"><a href="#" class="d-block text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Invoice</a></td>
									<td class="actions"><a href="" class="d-block text-center toggler" data-toggle="collapse" data-target="#demo3" class="accordion-toggle"><i class="fa-regular fa-chevron-down"></i> Details</a></td>
								</tr>
								<tr>
									<td colspan="6"  class="p-0 inside-table">
										<div id="demo3" class="accordian-body collapse">
											<table class="table inside-table">            
												<tr>
													<th>Employer:</th>
													<td>MyName (ID: 44567)</td>
												</tr>
												<tr>
													<th>Transaction id:</th>
													<td>VID-123-1234-12345</td>
												</tr>
											</table>
											<p class=" border-top">No one is awarded this job yet. Data will be updated when someone is awarded or the job is expired/ cancelled.</p>
									</div>
									</td>
								</tr>
								<tr>
									<td>17.10.2020</td>
									<td>HELP! With my garden</td>
									<td>120.-</td>
									<td class="text-danger">Cancelled <i class="fa-regular fa-circle-exclamation"></i></td>
									<td class="actions"><a href="#" class="d-block text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Invoice</a></td>
									<td class="actions"><a href="" class="d-block text-center toggler" data-toggle="collapse" data-target="#demo4" class="accordion-toggle"><i class="fa-regular fa-chevron-down"></i> Details</a></td>
								</tr>
								<tr>
									<td colspan="6"  class="p-0 inside-table">
										<div id="demo4" class="accordian-body collapse">
											<table class="table inside-table">            
												<tr>
													<th>Employer:</th>
													<td>MyName (ID: 44567)</td>
												</tr>
												<tr>
													<th>Transaction id:</th>
													<td>VID-123-1234-12345</td>
												</tr>
											</table>
											<p class=" border-top">No one is awarded this job yet. Data will be updated when someone is awarded or the job is expired/ cancelled.</p>
									</div>
									</td>
								</tr>
								<tr>
									<td>17.10.2020</td>
									<td>HELP! With my garden</td>
									<td>120.-</td>
									<td class="text-danger">Cancelled <i class="fa-regular fa-circle-exclamation"></i></td>
									<td class="actions"><a href="#" class="d-block text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Invoice</a></td>
									<td class="actions"><a href="" class="d-block text-center toggler" data-toggle="collapse" data-target="#demo5" class="accordion-toggle"><i class="fa-regular fa-chevron-down"></i> Details</a></td>
								</tr>
								<tr>
									<td colspan="6"  class="p-0 inside-table">
										<div id="demo5" class="accordian-body collapse">
											<table class="table inside-table">            
												<tr>
													<th>Employer:</th>
													<td>MyName (ID: 44567)</td>
												</tr>
												<tr>
													<th>Transaction id:</th>
													<td>VID-123-1234-12345</td>
												</tr>
											</table>
											<p class=" border-top">No one is awarded this job yet. Data will be updated when someone is awarded or the job is expired/ cancelled.</p>
									</div>
									</td>
								</tr>
								<tr>
									<td>17.10.2020</td>
									<td>HELP! With my garden</td>
									<td>120.-</td>
									<td class="text-danger">Cancelled <i class="fa-regular fa-circle-exclamation"></i></td>
									<td class="actions"><a href="#" class="d-block text-center"><i class="fa-regular fa-arrow-down-to-line"></i> Invoice</a></td>
									<td class="actions"><a href="" class="d-block text-center toggler" data-toggle="collapse" data-target="#demo6" class="accordion-toggle"><i class="fa-regular fa-chevron-down"></i> Details</a></td>
								</tr>
								<tr>
									<td colspan="6"  class="p-0 inside-table">
										<div id="demo6" class="accordian-body collapse">
											<table class="table inside-table">            
												<tr>
													<th>Employer:</th>
													<td>MyName (ID: 44567)</td>
												</tr>
												<tr>
													<th>Transaction id:</th>
													<td>VID-123-1234-12345</td>
												</tr>
											</table>
											<p class=" border-top">No one is awarded this job yet. Data will be updated when someone is awarded or the job is expired/ cancelled.</p>
									</div>
									</td>
								</tr>
								
							</tbody>
						</table>
						<?php include ('pwa/template-parts/pagination.php')?>
					</div>
				</div>
			</div>
		</div>
		<?php include ('template-parts/footer.php')?>