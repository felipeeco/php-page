<!--estimate-or-inspect-->
<!--el ID y el nombre del archivo seran los mismo = estimate-or-inspects-->
<div class="modal fade" id="send-estimate-pro">
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">	
			<div class="modal-header gradient-bg pb-3">
				<h5 class="modal-title"><i class="fa-solid fa-pro"></i> Send an estimate</h5>
				<button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle" style="font-weight: normal" aria-hidden="true"></i></button>
			</div>
			<div class="modal-body grey-bg">
				<form class="needs-validation" novalidate>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Write about your expertice and whats included in the estimate.</label>
						<textarea class="form-control white" id="exampleFormControlTextarea1" rows="3" placeholder="Your message here..."></textarea>
					</div>
					<div class="form-row mb-3">
						<div class="col-md-6 align-items-center g-10">
							<label for="total-price" class="">Prisforslag:</label>
							<div class="input-group">
							 	<input type="text" class="form-control" placeholder="" aria-label="total-price" aria-describedby="total-price" pattern="[0-9]*" name="total-price" required>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="total-price">Kr.</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 align-items-center g-10">
							<label for="expected-time" class="">Forventet tidsbruk:</label>
							<div class="input-group  align-content-start flex-grow-1">
							 	<input type="text" class="form-control" placeholder="" aria-label="expected-time" aria-describedby="expected-time" pattern="[0-9]*" name="expected-time" required>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="expected-time">Tim.</span>
								</div>
							</div>
						</div>

					</div>
					<div class="form-row">
						<div class="col-md-6 align-items-center g-10">
							<label for="total-price" class="">Oppdragsgebyr:</label>
							<div class="input-group">
							 	<input type="text" class="form-control" value="500" aria-label="total-price" aria-describedby="total-price" pattern="[0-9]*" name="total-price" disabled>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="total-price">Kr.</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 align-items-center g-10">
							<label for="expected-time" class=""><strong>Prisforslag:</strong></label>
							<div class="input-group  align-content-start flex-grow-1">
							 	<input type="text" class="form-control font-weight-bold" value="5355" aria-label="expected-time" aria-describedby="expected-time" pattern="[0-9]*" name="expected-time" disabled>
								<div class="input-group-append">
									<span class="input-group-text maingreen" id="expected-time">Kr.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-info d-block mt-3 mb-0">Timepris <strong>kr. 535,50 ink.</strong> oppdragsgebyret.</div>
					<hr>
					<div class="alert-secondary mt-2 mb-4 p-2">
						This job require professional help and you sent the price suggestion in behalf of your company <strong>Company name <i class="fa-solid fa-pro"></i></strong>. It is not possible to apply as a private person on this job.
					</div>
					<div class="form-info mb-0">Remember that exchanging any information with intention of direct contact with employer before you get the job will be considered inspection and the Inspection fee uf 55- will be deducted. Save yourself for unnecessary cost by holding back contact information, full name or company name until inspection is agreed or till after you are awarded the job.</div>
			</div>
			<div class="modal-footer grey-bg">
				<a href="#" class="btn btn-light" aria-label="Close" data-dismiss="modal"><i class="fas fa-times" style="font-weight: normal"></i> Cancel</a>
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