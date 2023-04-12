<!--estimate-or-inspect-->
<!--el ID y el nombre del archivo seran los mismo = estimate-or-inspects-->
<div class="modal fade" id="send-estimate-pro">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">	
			<div class="modal-header grey-bg p-3">
				<h5 class="modal-title"><i class="fa-solid fa-pro"></i> Send an estimate</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
			</div>
			<div class="modal-body grey-bg pt-0">
				<form class="needs-validation" novalidate>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Write about your expertice and whats included in the estimate.</label>
						<textarea class="form-control white" id="exampleFormControlTextarea1" rows="3" placeholder="Your message here..."></textarea>
					</div>
					<div class="container">
						<div class="row align-items-center mb-2">
							<label for="total-price" class="m-0 p-0 col-6">Prisforslag:</label>
							<div class="input-group col-6 p-0">
							 	<input type="text" class="form-control" placeholder="" aria-label="total-price" aria-describedby="total-price" pattern="[0-9]*" name="total-price" required>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="total-price">Kr.</span>
								</div>
							</div>
						</div>
						<div class="row align-items-center mb-2">
							<label for="expected-time" class="m-0 p-0 col-6">Forventet tidsbruk:</label>
							<div class="input-group col-6 p-0">
							 	<input type="text" class="form-control" placeholder="" aria-label="expected-time" aria-describedby="expected-time" pattern="[0-9]*" name="expected-time" required>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="expected-time">Tim.</span>
								</div>
							</div>
						</div>
						<hr>
						<div class="row align-items-center mb-2">
							<label for="total-price" class="m-0 p-0 col-6">+ Oppdragsavgift:</label>
							<div class="input-group col-6 p-0">
							 	<input type="text" class="form-control" value="355" aria-label="total-price" aria-describedby="total-price" pattern="[0-9]*" name="total-price" disabled>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="total-price">Kr.</span>
								</div>
							</div>
						</div>
						<div class="row align-items-center mb-2">
							<label for="total-price" class="m-0 p-0 col-6"><strong>Prisforslag til kunde</strong></label>
							<div class="input-group col-6 p-0">
							 	<input type="text" class="form-control font-weight-bold" value="5355" aria-label="total-price" aria-describedby="total-price" pattern="[0-9]*" name="total-price" disabled>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="total-price">Kr.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-info mb-0 mt-3 d-block">Timepris <strong>kr. 535,50 ink.</strong> oppdragsgebyret.</div>
					<hr>
					<div class="alert-secondary mt-2 mb-4 p-2">
						This job require professional help and you sent the price suggestion in behalf of your company <strong>Company name <i class="fa-solid fa-pro"></i></strong>. It is not possible to apply as a private person on this job.
					</div>
					<div class="form-info mb-0">Remember that exchanging any information with intention of direct contact with employer before you get the job will be considered inspection and the Inspection fee uf 55- will be deducted. Save yourself for unnecessary cost by holding back contact information, full name or company name until inspection is agreed or till after you are awarded the job.</div>
			</div>
			<div class="modal-footer grey-bg">
				<button type="submit" class="btn btn-primary"><i class="fa-solid fa-pro"></i> Send Estimate</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>