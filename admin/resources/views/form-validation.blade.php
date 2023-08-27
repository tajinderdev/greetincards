@extends('layouts.app')

@section('page-title', 'Form Validation')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Provide valuable, actionable feedback to your users with HTML5 form validation, via
                browser default behaviors or custom styles and JavaScript.</p>

            <h4>Custom styles</h4>
            <p>For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean
                attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips,
                but still provides access to the form validation APIs in JavaScript. Try to submit the form below;
                our JavaScript will intercept the submit button and relay feedback to you. When attempting to
                submit, you’ll see the <code>:invalid</code> and <code>:valid</code> styles applied to your form
                controls.</p>
            <p>Custom feedback styles apply custom colors, borders, focus styles, and background icons to better
                communicate feedback. Background icons for <code>&lt;select&gt;</code>s are only available with
                <code>.form-select</code>, and not <code>.form-control</code>.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername"
                                       aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">State</label>
                            <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row g-3 needs-validation" novalidate&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationCustom01" class="form-label"&gt;First name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationCustom01" value="Mark" required&gt;
    &lt;div class="valid-feedback"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationCustom02" class="form-label"&gt;Last name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationCustom02" value="Otto" required&gt;
    &lt;div class="valid-feedback"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationCustomUsername" class="form-label"&gt;Username&lt;/label&gt;
    &lt;div class="input-group has-validation"&gt;
      &lt;span class="input-group-text" id="inputGroupPrepend"&gt;@&lt;/span&gt;
      &lt;input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required&gt;
      &lt;div class="invalid-feedback"&gt;
        Please choose a username.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6"&gt;
    &lt;label for="validationCustom03" class="form-label"&gt;City&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationCustom03" required&gt;
    &lt;div class="invalid-feedback"&gt;
      Please provide a valid city.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;label for="validationCustom04" class="form-label"&gt;State&lt;/label&gt;
    &lt;select class="form-select" id="validationCustom04" required&gt;
      &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="invalid-feedback"&gt;
      Please select a valid state.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;label for="validationCustom05" class="form-label"&gt;Zip&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationCustom05" required&gt;
    &lt;div class="invalid-feedback"&gt;
      Please provide a valid zip.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck" required&gt;
      &lt;label class="form-check-label" for="invalidCheck"&gt;
        Agree to terms and conditions
      &lt;/label&gt;
      &lt;div class="invalid-feedback"&gt;
        You must agree before submitting.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;button class="btn btn-primary" type="submit"&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-js">// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()</code></pre>
                </div>
            </div>

            <h4>Browser defaults</h4>
            <p>Not interested in custom validation feedback messages or writing JavaScript to change form behaviors?
                All
                good, you can use the browser defaults. Try submitting the form below. Depending on your browser and
                OS,
                you’ll see a slightly different style of feedback.</p>
            <p>While these feedback styles cannot be styled with CSS, you can still customize the feedback text
                through
                JavaScript.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefaultUsername" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                <input type="text" class="form-control" id="validationDefaultUsername"
                                       aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault04" class="form-label">State</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault05" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row g-3"&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationDefault01" class="form-label"&gt;First name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationDefault01" value="Mark" required&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationDefault02" class="form-label"&gt;Last name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationDefault02" value="Otto" required&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationDefaultUsername" class="form-label"&gt;Username&lt;/label&gt;
    &lt;div class="input-group"&gt;
      &lt;span class="input-group-text" id="inputGroupPrepend2"&gt;@&lt;/span&gt;
      &lt;input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6"&gt;
    &lt;label for="validationDefault03" class="form-label"&gt;City&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationDefault03" required&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;label for="validationDefault04" class="form-label"&gt;State&lt;/label&gt;
    &lt;select class="form-select" id="validationDefault04" required&gt;
      &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;label for="validationDefault05" class="form-label"&gt;Zip&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationDefault05" required&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required&gt;
      &lt;label class="form-check-label" for="invalidCheck2"&gt;
        Agree to terms and conditions
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;button class="btn btn-primary" type="submit"&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Server side</h4>
            <p>We recommend using client-side validation, but in case you require server-side validation, you can
                indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>.
                Note
                that <code>.invalid-feedback</code> is also supported with these classes.</p>
            <p>For invalid fields, ensure that the invalid feedback/error message is associated with the relevant
                form
                field using <code>aria-describedby</code> (noting that this attribute allows more than one
                <code>id</code> to be referenced, in case the field already points to additional form text).</p>
            <p>To fix <a href="https://github.com/twbs/bootstrap/issues/25110">issues with border radii</a>, input
                groups require an additional <code>.has-validation</code> class.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="validationServer01" class="form-label">First name</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark"
                                   required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer02" class="form-label">Last name</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto"
                                   required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServerUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                <input type="text" class="form-control is-invalid" id="validationServerUsername"
                                       aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationServer03" class="form-label">City</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03"
                                   aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationServer04" class="form-label">State</label>
                            <select class="form-select is-invalid" id="validationServer04"
                                    aria-describedby="validationServer04Feedback" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div id="validationServer04Feedback" class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationServer05" class="form-label">Zip</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05"
                                   aria-describedby="validationServer05Feedback" required>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                                       aria-describedby="invalidCheck3Feedback" required>
                                <label class="form-check-label" for="invalidCheck3">
                                    Agree to terms and conditions
                                </label>
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row g-3"&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationServer01" class="form-label"&gt;First name&lt;/label&gt;
    &lt;input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required&gt;
    &lt;div class="valid-feedback"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationServer02" class="form-label"&gt;Last name&lt;/label&gt;
    &lt;input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required&gt;
    &lt;div class="valid-feedback"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="validationServerUsername" class="form-label"&gt;Username&lt;/label&gt;
    &lt;div class="input-group has-validation"&gt;
      &lt;span class="input-group-text" id="inputGroupPrepend3"&gt;@&lt;/span&gt;
      &lt;input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required&gt;
      &lt;div id="validationServerUsernameFeedback" class="invalid-feedback"&gt;
        Please choose a username.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6"&gt;
    &lt;label for="validationServer03" class="form-label"&gt;City&lt;/label&gt;
    &lt;input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required&gt;
    &lt;div id="validationServer03Feedback" class="invalid-feedback"&gt;
      Please provide a valid city.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;label for="validationServer04" class="form-label"&gt;State&lt;/label&gt;
    &lt;select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required&gt;
      &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
    &lt;div id="validationServer04Feedback" class="invalid-feedback"&gt;
      Please select a valid state.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;label for="validationServer05" class="form-label"&gt;Zip&lt;/label&gt;
    &lt;input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required&gt;
    &lt;div id="validationServer05Feedback" class="invalid-feedback"&gt;
      Please provide a valid zip.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required&gt;
      &lt;label class="form-check-label" for="invalidCheck3"&gt;
        Agree to terms and conditions
      &lt;/label&gt;
      &lt;div id="invalidCheck3Feedback" class="invalid-feedback"&gt;
        You must agree before submitting.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;button class="btn btn-primary" type="submit"&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Supported elements</h4>
            <p>Validation styles are available for the following form controls and components:</p>
            <ul>
                <li><code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s with <code>.form-control</code>
                    (including up to one <code>.form-control</code> in input groups)
                </li>
                <li><code>&lt;select&gt;</code>s with <code>.form-select</code></li>
                <li><code>.form-check</code>s</li>
            </ul>

            <div class="card">
                <div class="card-body">
                    <form class="was-validated">
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Textarea</label>
                            <textarea class="form-control is-invalid" id="validationTextarea"
                                      placeholder="Required example textarea" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message in the textarea.
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                            <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked"
                                   required>
                            <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked"
                                   required>
                            <label class="form-check-label" for="validationFormCheck3">Or toggle this other
                                radio</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>

                        <div class="mb-3">
                            <select class="form-select" required aria-label="select example">
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback">Example invalid select feedback</div>
                        </div>

                        <div class="mb-3">
                            <input type="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="was-validated"&gt;
  &lt;div class="mb-3"&gt;
    &lt;label for="validationTextarea" class="form-label"&gt;Textarea&lt;/label&gt;
    &lt;textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required&gt;&lt;/textarea&gt;
    &lt;div class="invalid-feedback"&gt;
      Please enter a message in the textarea.
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-check mb-3"&gt;
    &lt;input type="checkbox" class="form-check-input" id="validationFormCheck1" required&gt;
    &lt;label class="form-check-label" for="validationFormCheck1"&gt;Check this checkbox&lt;/label&gt;
    &lt;div class="invalid-feedback"&gt;Example invalid feedback text&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="form-check"&gt;
    &lt;input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required&gt;
    &lt;label class="form-check-label" for="validationFormCheck2"&gt;Toggle this radio&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="form-check mb-3"&gt;
    &lt;input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required&gt;
    &lt;label class="form-check-label" for="validationFormCheck3"&gt;Or toggle this other radio&lt;/label&gt;
    &lt;div class="invalid-feedback"&gt;More example invalid feedback text&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="mb-3"&gt;
    &lt;select class="form-select" required aria-label="select example"&gt;
      &lt;option value=""&gt;Open this select menu&lt;/option&gt;
      &lt;option value="1"&gt;One&lt;/option&gt;
      &lt;option value="2"&gt;Two&lt;/option&gt;
      &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="invalid-feedback"&gt;Example invalid select feedback&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="mb-3"&gt;
    &lt;input type="file" class="form-control" aria-label="file example" required&gt;
    &lt;div class="invalid-feedback"&gt;Example invalid form file feedback&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="mb-3"&gt;
    &lt;button class="btn btn-primary" type="submit" disabled&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Tooltips</h4>
            <p>If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for
                <code>.{valid|invalid}-tooltip</code>
                classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position:
                    relative</code> on it for tooltip positioning. In the example below, our column classes have
                this
                already, but your project may require an alternative setup.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="text" class="form-control" id="validationTooltipUsername"
                                       aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationTooltip03" required>
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip04" class="form-label">State</label>
                            <select class="form-select" id="validationTooltip04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip05" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="validationTooltip05" required>
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row g-3 needs-validation" novalidate&gt;
  &lt;div class="col-md-4 position-relative"&gt;
    &lt;label for="validationTooltip01" class="form-label"&gt;First name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationTooltip01" value="Mark" required&gt;
    &lt;div class="valid-tooltip"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4 position-relative"&gt;
    &lt;label for="validationTooltip02" class="form-label"&gt;Last name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationTooltip02" value="Otto" required&gt;
    &lt;div class="valid-tooltip"&gt;
      Looks good!
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4 position-relative"&gt;
    &lt;label for="validationTooltipUsername" class="form-label"&gt;Username&lt;/label&gt;
    &lt;div class="input-group has-validation"&gt;
      &lt;span class="input-group-text" id="validationTooltipUsernamePrepend"&gt;@&lt;/span&gt;
      &lt;input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required&gt;
      &lt;div class="invalid-tooltip"&gt;
        Please choose a unique and valid username.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6 position-relative"&gt;
    &lt;label for="validationTooltip03" class="form-label"&gt;City&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationTooltip03" required&gt;
    &lt;div class="invalid-tooltip"&gt;
      Please provide a valid city.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3 position-relative"&gt;
    &lt;label for="validationTooltip04" class="form-label"&gt;State&lt;/label&gt;
    &lt;select class="form-select" id="validationTooltip04" required&gt;
      &lt;option selected disabled value=""&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="invalid-tooltip"&gt;
      Please select a valid state.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3 position-relative"&gt;
    &lt;label for="validationTooltip05" class="form-label"&gt;Zip&lt;/label&gt;
    &lt;input type="text" class="form-control" id="validationTooltip05" required&gt;
    &lt;div class="invalid-tooltip"&gt;
      Please provide a valid zip.
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;button class="btn btn-primary" type="submit"&gt;Submit form&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

        </div>
        <div class="order-1 order-lg-2 col-lg-3">
            <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                <nav id="TableOfContents"></nav>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/form-validation.js") }}"></script>
@endsection
