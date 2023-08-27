@extends('layouts.app')

@section('page-title', 'Forms')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Examples and usage guidelines for form control styles, layout options, and custom
                components for creating a wide variety of forms.</p>

            <h4>Overview</h4>

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form&gt;
  &lt;div class="mb-3"&gt;
    &lt;label for="exampleInputEmail1" class="form-label"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"&gt;
    &lt;div id="emailHelp" class="form-text"&gt;We'll never share your email with anyone else.&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="mb-3"&gt;
    &lt;label for="exampleInputPassword1" class="form-label"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
  &lt;/div&gt;
  &lt;div class="mb-3 form-check"&gt;
    &lt;input type="checkbox" class="form-check-input" id="exampleCheck1"&gt;
    &lt;label class="form-check-label" for="exampleCheck1"&gt;Check me out&lt;/label&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Form text</h4>
            <p>Block-level or inline-level form text can be created using <code>.form-text</code>.</p>
            <p>Form text below inputs can be styled with <code>.form-text</code>. If a block-level element will be
                used, a top margin is added for easy spacing from the inputs above.</p>

            <div class="card mb-4">
                <div class="card-body">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control"
                           aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                        spaces, special characters, or emoji.
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;label for="inputPassword5" class="form-label"&gt;Password&lt;/label&gt;
&lt;input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"&gt;
&lt;div id="passwordHelpBlock" class="form-text"&gt;
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Inline text can use any typical inline HTML element (be it a <code>&lt;span&gt;</code>, <code>&lt;small&gt;</code>,
                or something else) with nothing more than the .form-text class.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                   aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">
                              Must be 8-20 characters long.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="row g-3 align-items-center"&gt;
  &lt;div class="col-auto"&gt;
    &lt;label for="inputPassword6" class="col-form-label"&gt;Password&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"&gt;
  &lt;/div&gt;
  &lt;div class="col-auto"&gt;
    &lt;span id="passwordHelpInline" class="form-text"&gt;
      Must be 8-20 characters long.
    &lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled forms</h4>
            <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions and make it
                appear lighter.</p>

            <div class="card mb-4">
                <div class="card-body">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..."
                           disabled>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled&gt;</code></pre>
                </div>
            </div>

            <p>Add the disabled attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within.
                Browsers treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>,
                and
                <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled,
                preventing both keyboard and mouse interactions on them.</p>

            <p>However, if your form also includes custom button-like elements such as <code>&lt;a class="btn btn-*"&gt;...&lt;/a&gt;</code>,
                these will only be given a style of <code>pointer-events: none</code>, meaning they are still
                focusable
                and operable using the keyboard. In this case, you must manually modify these controls by adding
                <code>tabindex="-1"</code>
                to prevent them from receiving focus and <code>aria-disabled="disabled"</code> to signal their state
                to
                assistive technologies.</p>

            <div class="card">
                <div class="card-body">
                    <form>
                        <fieldset disabled>
                            <legend>Disabled fieldset example</legend>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Disabled input</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                       placeholder="Disabled input">
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                        Can't check this
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form&gt;
  &lt;fieldset disabled&gt;
    &lt;legend&gt;Disabled fieldset example&lt;/legend&gt;
    &lt;div class="mb-3"&gt;
      &lt;label for="disabledTextInput" class="form-label"&gt;Disabled input&lt;/label&gt;
      &lt;input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
      &lt;label for="disabledSelect" class="form-label"&gt;Disabled select menu&lt;/label&gt;
      &lt;select id="disabledSelect" class="form-select"&gt;
        &lt;option&gt;Disabled select&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
      &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled&gt;
        &lt;label class="form-check-label" for="disabledFieldsetCheck"&gt;
          Can't check this
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
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
