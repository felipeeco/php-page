<!DOCTYPE html>
<?php
$title = 'Welcome';
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$body_class = 'page no-back';
$load_ratingModal = false;
?>
<?php include ('template-parts/head.php')?>
		</div><!--END OF DIV CLASS LANDING-->
<div class="alerts container">

<h2>Alerts</h2>
	<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  This is a secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  This is a warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  This is a info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  This is a light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  This is a dark alert—check it out!
</div>
</div>
		<!--ON SCREEN RATING-->
		<div class="container mt-5 bm-5">
			<!--		THE FORM INFO-->
<div class="form-info default">
	<i class="fa-solid fa-flag icon-md"></i>
	<p class="m-0">Grunnprofil blir brukt når du legger ut oppdrag på våre nettsider. Kun fornavnet ditt viser for andre og får varsel på SMS og e-post når hjelpere tar kontakt.</p>
</div>
<div class="form-info light">
	<i class="fa-solid fa-flag icon-md"></i>
	<p class="m-0">Grunnprofil blir brukt når du legger ut oppdrag på våre nettsider. Kun fornavnet ditt viser for andre og får varsel på SMS og e-post når hjelpere tar kontakt.</p>
</div>
<div class="form-info dark">
	<i class="fa-solid fa-flag icon-md"></i>
	<p class="m-0">Grunnprofil blir brukt når du legger ut oppdrag på våre nettsider. Kun fornavnet ditt viser for andre og får varsel på SMS og e-post når hjelpere tar kontakt.</p>
</div>
			<code>Headings</code>
			<h1>h1. Bootstrap heading</h1>
			<h2>h2. Bootstrap heading</h2>
			<h3>h3. Bootstrap heading</h3>
			<h4>h4. Bootstrap heading</h4>
			<h5>h5. Bootstrap heading</h5>
			<h6>h6. Bootstrap heading</h6>
			<code>Customizing headings</code>
			<h3>
			  Fancy display heading
			  <small class="text-muted">With faded secondary text</small>
			</h3>
			<code>Display headings </code>
			<h1 class="display-1">Display 1</h1>
			<h1 class="display-2">Display 2</h1>
			<h1 class="display-3">Display 3</h1>
			<h1 class="display-4">Display 4</h1>
			<h1 class="display-5">Display 5</h1>
			<h1 class="display-6">Display 6</h1>
			<code>Lead</code>
			<p class="lead">This is a lead paragraph. It stands out from regular paragraphs.</p>
			<p>You can use the mark tag to <mark>highlight</mark> text.</p>
			<p><del>This line of text is meant to be treated as deleted text.</del></p>
			<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
			<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
			<p><u>This line of text will render as underlined.</u></p>
			<p><small>This line of text is meant to be treated as fine print.</small></p>
			<p><strong>This line rendered as bold text.</strong></p>
			<p><em>This line rendered as italicized text.</em></p>
			<code>Naming a source </code>
			<figure>
			  <blockquote class="blockquote">
				<p>A well-known quote, contained in a blockquote element.</p>
			  </blockquote>
			  <figcaption class="blockquote-footer">
				Someone famous in <cite title="Source Title">Source Title</cite>
			  </figcaption>
			</figure>
			<code>List Unlisted</code>
			<ul class="list-unstyled">
			  <li>This is a list.</li>
			  <li>It appears completely unstyled.</li>
			  <li>Structurally, it's still a list.</li>
			  <li>However, this style only applies to immediate child elements.</li>
			  <li>Nested lists:
				<ul>
				  <li>are unaffected by this style</li>
				  <li>will still show a bullet</li>
				  <li>and have appropriate left margin</li>
				</ul>
			  </li>
			  <li>This may still come in handy in some situations.</li>
			</ul>
			<code>inline</code>
			<ul class="list-inline">
			  <li class="list-inline-item">This is a list item.</li>
			  <li class="list-inline-item">And another one.</li>
			  <li class="list-inline-item">But they're displayed inline.</li>
			</ul>
			<hr>
			<code>Forms</code>
			<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<hr>
			<code>Form controls</code>
			<form>
			  <div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Example select</label>
				<select class="form-control" id="exampleFormControlSelect1">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect2">Example multiple select</label>
				<select multiple class="form-control" id="exampleFormControlSelect2">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlTextarea1">Example textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			</form>
			<code>sizes</code>
			<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
			<input class="form-control" type="text" placeholder="Default input">
			<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
			<code>select</code>
			<select class="form-control form-control-lg">
			  <option>Large select</option>
			</select>
			<select class="form-control">
			  <option>Default select</option>
			</select>
			<select class="form-control form-control-sm">
			  <option>Small select</option>
			</select>
			<code>Readonly</code>
			<input class="form-control" type="text" placeholder="Readonly input here..." readonly>
			<code>Read only Plain Text</code>
			<form>
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
				  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
				</div>
			  </div>
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword">
				</div>
			  </div>
			</form>
			<code>Range Inputs</code>
			<form>
			  <div class="form-group">
				<label for="formControlRange">Example Range input</label>
				<input type="range" class="form-control-range" id="formControlRange">
			  </div>
			</form>
			<code>Default (stacked)</code>
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			<label class="form-check-label" for="defaultCheck1">
			Default checkbox
			</label>
			</div>
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
			<label class="form-check-label" for="defaultCheck2">
			Disabled checkbox
			</label>
			</div>
			<hr>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
			  <label class="form-check-label" for="exampleRadios1">
				Default radio
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
			  <label class="form-check-label" for="exampleRadios2">
				Second default radio
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
			  <label class="form-check-label" for="exampleRadios3">
				Disabled radio
			  </label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
			  <label class="form-check-label" for="inlineCheckbox1">1</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
			  <label class="form-check-label" for="inlineCheckbox2">2</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
			  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			  <label class="form-check-label" for="inlineRadio1">1</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			  <label class="form-check-label" for="inlineRadio2">2</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
			  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
			</div>
			<hr>
			<code>Buttons</code><br>
			<button type="button" class="btn btn-primary"><i class="fa-solid fa-flag"></i> Primary</button>
			<button type="button" class="btn btn-secondary"><i class="fa-solid fa-flag"></i> Secondary</button>
			<button type="button" class="btn btn-success"><i class="fa-solid fa-flag"></i> Success</button>
			<button type="button" class="btn btn-danger"><i class="fa-solid fa-flag"></i> Danger</button>
			<button type="button" class="btn btn-warning"><i class="fa-solid fa-flag"></i> Warning</button>
			<button type="button" class="btn btn-info"><i class="fa-solid fa-flag"></i> Info</button>
			<button type="button" class="btn btn-light"><i class="fa-solid fa-flag"></i> Light</button>
			<button type="button" class="btn btn-dark"><i class="fa-solid fa-flag"></i> Dark</button>
			<button type="button" class="btn btn-link"><i class="fa-solid fa-flag"></i> Link</button>
			<br><code>OUTLINE</code><br>
			<button type="button" class="btn btn-outline-primary">Primary</button>
			<button type="button" class="btn btn-outline-secondary">Secondary</button>
			<button type="button" class="btn btn-outline-success">Success</button>
			<button type="button" class="btn btn-outline-danger">Danger</button>
			<button type="button" class="btn btn-outline-warning">Warning</button>
			<button type="button" class="btn btn-outline-info">Info</button>
			<button type="button" class="btn btn-outline-light">Light</button>
			<button type="button" class="btn btn-outline-dark">Dark</button>
			<br><br>
			<code>large</code><br>
				<button type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-flag"></i> Primary</button>
				<button type="button" class="btn btn-secondary btn-lg"><i class="fa-solid fa-flag"></i> Secondary</button>
			<br>
			<code>small</code><br>
				<button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-flag"></i> Primary</button>
				<button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-flag"></i> Secondary</button>
			<br>
			<code>forms</code>
			<form class="needs-validation" novalidate>
			  <div class="form-row">
				<div class="col-md-4 mb-3">
				  <label for="validationTooltip01">First name</label>
				  <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
				  <div class="valid-tooltip">
					Looks good!
				  </div>
				</div>
				<div class="col-md-4 mb-3">
				  <label for="validationTooltip02">Last name</label>
				  <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
				  <div class="valid-tooltip">
					Looks good!
				  </div>
				</div>
				<div class="col-md-4 mb-3">
				  <label for="validationTooltipUsername">Username</label>
				  <div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
					</div>
					<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
				  </div>
				</div>
			  </div>
			  <div class="form-row">
				<div class="col-md-6 mb-3">
				  <label for="validationTooltip03">City</label>
				  <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
				  <div class="invalid-tooltip">
					Please provide a valid city.
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04">State</label>
				  <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
				  <div class="invalid-tooltip">
					Please provide a valid state.
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip05">Zip</label>
				  <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
				</div>
			  </div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-at"></i></span>
			  </div>
			  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
			</div>

			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
			  <div class="input-group-append">
				<span class="input-group-text" id="basic-addon2">@example.com</span>
			  </div>
			</div>

			<label for="basic-url">Your vanity URL</label>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
			  </div>
			  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text">Kr.</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
			  <div class="input-group-append">
				<span class="input-group-text">.00</span>
			  </div>
			</div>

			<div class="input-group">
			  <div class="input-group-prepend">
				<span class="input-group-text">With textarea</span>
			  </div>
			  <textarea class="form-control" aria-label="With textarea"></textarea>
			</div>
			  <button class="btn btn-primary" type="submit">Submit form</button>
			</form>
			<code>validation</code>
			<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">State</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
			<hr>
			<form class="was-validated">
  <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>

  <div class="form-group">
    <select class="custom-select" required>
      <option value="">Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
				
				<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
  <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
</div>
</form>
		</div>
	<?php include ('template-parts/footer.php')?>