<!--
DESIGN SYSTEM WITH ALL THE DESIGN ELEMENTS NEEDED
-->
<!doctype html>
<?php 
$title = "Welcome"; /*PAGE TITLE*/
$loggin = false; /*TEST: SHOW ELEMENTS WHEN USER LOGGED IN OR NOT*/
$hasnavbar = true; /*LOAD THE BOTTOM NAVIGATION BAR IF NEEDED*/
$body_class = "grey-bg";
?>
<?php include ('template-parts/head.php')?>
<!--PAGE CONTENT-->
<div class="container mt-5 bm-5">
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
	<code>Buttons</code>
	<button type="button" class="btn btn-primary">Primary</button>
	<button type="button" class="btn btn-secondary">Secondary</button>
	<button type="button" class="btn btn-success">Success</button>
	<button type="button" class="btn btn-danger">Danger</button>
	<button type="button" class="btn btn-warning">Warning</button>
	<button type="button" class="btn btn-info">Info</button>
	<button type="button" class="btn btn-light">Light</button>
	<button type="button" class="btn btn-dark">Dark</button>

	<button type="button" class="btn btn-link">Link</button>
	</div>
	<?php include ('template-parts/myjs.php')?>
</body>
</html>
