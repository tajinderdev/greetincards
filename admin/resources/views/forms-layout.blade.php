@extends('layouts.app')

@section('page-title', 'Form Layout')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Give your forms some structure—from inline to horizontal to custom grid
                implementations—with our form layout options.</p>

            <h4>Example</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Example label</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                               placeholder="Example input placeholder">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Another label</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                               placeholder="Another input placeholder">
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="mb-3"&gt;
  &lt;label for="formGroupExampleInput" class="form-label"&gt;Example label&lt;/label&gt;
  &lt;input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
  &lt;label for="formGroupExampleInput2" class="form-label"&gt;Another label&lt;/label&gt;
  &lt;input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Form grid</h4>
            <p>More complex forms can be built using our grid classes. Use these for form layouts that require
                multiple columns, varied widths, and additional alignment options. <strong>Requires the <code>$enable-grid-classes</code>
                    Sass variable to be enabled</strong> (on by default).</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="col"&gt;
    &lt;input type="text" class="form-control" placeholder="First name" aria-label="First name"&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;input type="text" class="form-control" placeholder="Last name" aria-label="Last name"&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Gutters</h4>
            <p>By adding gutter modifier classes, you can have control over the gutter width in as well the inline
                as block direction. <strong>Also requires the <code>$enable-grid-classes</code> Sass variable to be
                    enabled</strong> (on by default).</p>

            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="row g-3"&gt;
  &lt;div class="col"&gt;
    &lt;input type="text" class="form-control" placeholder="First name" aria-label="First name"&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;input type="text" class="form-control" placeholder="Last name" aria-label="Last name"&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>More complex layouts can also be created with the grid system.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                   placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row g-3"&gt;
  &lt;div class="col-md-6"&gt;
    &lt;label for="inputEmail4" class="form-label"&gt;Email&lt;/label&gt;
    &lt;input type="email" class="form-control" id="inputEmail4"&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6"&gt;
    &lt;label for="inputPassword4" class="form-label"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="inputPassword4"&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;label for="inputAddress" class="form-label"&gt;Address&lt;/label&gt;
    &lt;input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;label for="inputAddress2" class="form-label"&gt;Address 2&lt;/label&gt;
    &lt;input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6"&gt;
    &lt;label for="inputCity" class="form-label"&gt;City&lt;/label&gt;
    &lt;input type="text" class="form-control" id="inputCity"&gt;
  &lt;/div&gt;
  &lt;div class="col-md-4"&gt;
    &lt;label for="inputState" class="form-label"&gt;State&lt;/label&gt;
    &lt;select id="inputState" class="form-select"&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="col-md-2"&gt;
    &lt;label for="inputZip" class="form-label"&gt;Zip&lt;/label&gt;
    &lt;input type="text" class="form-control" id="inputZip"&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input" type="checkbox" id="gridCheck"&gt;
      &lt;label class="form-check-label" for="gridCheck"&gt;
        Check me out
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-12"&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Horizontal form</h4>
            <p>Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using
                the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add
                <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically
                centered with their associated form controls.</p>
            <p>At times, you maybe need to use margin or padding utilities to create that perfect alignment you
                need. For example, we’ve removed the <code>padding-top</code> on our stacked radio inputs label to
                better align the text baseline.</p>

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                           value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        First radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                           value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                           value="option3" disabled>
                                    <label class="form-check-label" for="gridRadios3">
                                        Third disabled radio
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form&gt;
  &lt;div class="row mb-3"&gt;
    &lt;label for="inputEmail3" class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;input type="email" class="form-control" id="inputEmail3"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="row mb-3"&gt;
    &lt;label for="inputPassword3" class="col-sm-2 col-form-label"&gt;Password&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;input type="password" class="form-control" id="inputPassword3"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;fieldset class="row mb-3"&gt;
    &lt;legend class="col-form-label col-sm-2 pt-0"&gt;Radios&lt;/legend&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked&gt;
        &lt;label class="form-check-label" for="gridRadios1"&gt;
          First radio
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2"&gt;
        &lt;label class="form-check-label" for="gridRadios2"&gt;
          Second radio
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="form-check disabled"&gt;
        &lt;input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled&gt;
        &lt;label class="form-check-label" for="gridRadios3"&gt;
          Third disabled radio
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/fieldset&gt;
  &lt;div class="row mb-3"&gt;
    &lt;div class="col-sm-10 offset-sm-2"&gt;
      &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="checkbox" id="gridCheck1"&gt;
        &lt;label class="form-check-label" for="gridCheck1"&gt;
          Example checkbox
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h5>Horizontal form label sizing</h5>
            <p>Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s
                or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and
                <code>.form-control-sm</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                                   placeholder="col-form-label-sm">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                        </div>
                    </div>
                    <div class="row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                                   placeholder="col-form-label-lg">
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="row mb-3"&gt;
  &lt;label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"&gt;Email&lt;/label&gt;
  &lt;div class="col-sm-10"&gt;
    &lt;input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="row mb-3"&gt;
  &lt;label for="colFormLabel" class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
  &lt;div class="col-sm-10"&gt;
    &lt;input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label"&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"&gt;Email&lt;/label&gt;
  &lt;div class="col-sm-10"&gt;
    &lt;input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg"&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Column sizing</h4>
            <p>As shown in the previous examples, our grid system allows you to place any number of
                <code>.col</code>s within a <code>.row</code>. They’ll split the available width equally between
                them. You may also pick a subset of your columns to take up more or less space, while the remaining
                <code>.col</code>s equally split the rest, with specific column classes like <code>.col-sm-7</code>.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-7">
                            <input type="text" class="form-control" placeholder="City" aria-label="City">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" placeholder="State" aria-label="State">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="row g-3"&gt;
  &lt;div class="col-sm-7"&gt;
    &lt;input type="text" class="form-control" placeholder="City" aria-label="City"&gt;
  &lt;/div&gt;
  &lt;div class="col-sm"&gt;
    &lt;input type="text" class="form-control" placeholder="State" aria-label="State"&gt;
  &lt;/div&gt;
  &lt;div class="col-sm"&gt;
    &lt;input type="text" class="form-control" placeholder="Zip" aria-label="Zip"&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Auto-sizing</h4>
            <p>The example below uses a flexbox utility to vertically center the contents and changes
                <code>.col</code> to <code>.col-auto</code> so that your columns only take up as much space as
                needed. Put another way, the column sizes itself based on the contents.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row gy-2 gx-3 align-items-center">
                        <div class="col-auto">
                            <label class="visually-hidden" for="autoSizingInput">Name</label>
                            <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup"
                                       placeholder="Username">
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" for="autoSizingCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row gy-2 gx-3 align-items-center"&gt;
  &lt;div class="col-auto"&gt;
    &lt;label class="visually-hidden" for="autoSizingInput"&gt;Name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe"&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;label class="visually-hidden" for="autoSizingInputGroup"&gt;Username&lt;/label&gt;
    &lt;div class="input-group"&gt;
      &lt;div class="input-group-text"&gt;@&lt;/div&gt;
      &lt;input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;label class="visually-hidden" for="autoSizingSelect"&gt;Preference&lt;/label&gt;
    &lt;select class="form-select" id="autoSizingSelect"&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value="1"&gt;One&lt;/option&gt;
      &lt;option value="2"&gt;Two&lt;/option&gt;
      &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input" type="checkbox" id="autoSizingCheck"&gt;
      &lt;label class="form-check-label" for="autoSizingCheck"&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <p>You can then remix that once again with size-specific column classes.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row gx-3 gy-2 align-items-center">
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeInputName">Name</label>
                            <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
                        </div>
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="specificSizeInputGroupUsername"
                                       placeholder="Username">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                            <select class="form-select" id="specificSizeSelect">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                <label class="form-check-label" for="autoSizingCheck2">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row gx-3 gy-2 align-items-center"&gt;
  &lt;div class="col-sm-3"&gt;
    &lt;label class="visually-hidden" for="specificSizeInputName"&gt;Name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe"&gt;
  &lt;/div&gt;
  &lt;div class="col-sm-3"&gt;
    &lt;label class="visually-hidden" for="specificSizeInputGroupUsername"&gt;Username&lt;/label&gt;
    &lt;div class="input-group"&gt;
      &lt;div class="input-group-text"&gt;@&lt;/div&gt;
      &lt;input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-sm-3"&gt;
    &lt;label class="visually-hidden" for="specificSizeSelect"&gt;Preference&lt;/label&gt;
    &lt;select class="form-select" id="specificSizeSelect"&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value="1"&gt;One&lt;/option&gt;
      &lt;option value="2"&gt;Two&lt;/option&gt;
      &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input" type="checkbox" id="autoSizingCheck2"&gt;
      &lt;label class="form-check-label" for="autoSizingCheck2"&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Inline forms</h4>
            <p>Use the <code>.col-auto</code> class to create horizontal layouts. By adding gutter modifier classes,
                we’ll have gutters in horizontal and vertical directions. The <code>.align-items-center</code>
                aligns the form elements to the middle, making the <code>.form-checkbox</code> align properly.</p>

            <div class="card">
                <div class="card-body">
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                       placeholder="Username">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                            <select class="form-select" id="inlineFormSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="row row-cols-lg-auto g-3 align-items-center"&gt;
  &lt;div class="col-12"&gt;
    &lt;label class="visually-hidden" for="inlineFormInputGroupUsername"&gt;Username&lt;/label&gt;
    &lt;div class="input-group"&gt;
      &lt;div class="input-group-text"&gt;@&lt;/div&gt;
      &lt;input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username"&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="col-12"&gt;
    &lt;label class="visually-hidden" for="inlineFormSelectPref"&gt;Preference&lt;/label&gt;
    &lt;select class="form-select" id="inlineFormSelectPref"&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value="1"&gt;One&lt;/option&gt;
      &lt;option value="2"&gt;Two&lt;/option&gt;
      &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;

  &lt;div class="col-12"&gt;
    &lt;div class="form-check"&gt;
      &lt;input class="form-check-input" type="checkbox" id="inlineFormCheck"&gt;
      &lt;label class="form-check-label" for="inlineFormCheck"&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="col-12"&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
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
@endsection
