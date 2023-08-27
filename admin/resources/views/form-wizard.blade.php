@extends('layouts.app')

@section('page-title', 'Form Wizard')

@section('head')
    <!-- Form wizard -->
    <link rel="stylesheet" href="{{ url("libs/form-wizard/jquery.steps.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">
                An all-in-one wizard plugin that is extremely flexible, compact and feature-rich. <a
                    href="http://www.jquery-steps.com/Examples" target="_blank">Demo
                    page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Css --&gt;
&lt;link rel="stylesheet" href="libs/form-wizard/jquery.steps.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/form-wizard/jquery.steps.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Content Wizard</h4>
            <p>Below is an example of a basic horizontal form wizard.</p>

            <div class="card">
                <div class="card-body">
                    <div id="wizard1">
                        <h3>Personal Information</h3>
                        <section class="card card-body border mb-0">
                            <h5>Personal Information</h5>
                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                        </section>
                        <h3>Billing Information</h3>
                        <section class="card card-body border mb-0">
                            <h5>Billing Information</h5>
                            <p>Wonderful transition effects.</p>
                        </section>
                        <h3>Payment Details</h3>
                        <section class="card card-body border mb-0">
                            <h5>Payment Details</h5>
                            <p>The next and previous buttons help you to navigate through your content.</p>
                        </section>
                    </div>
                </div>
            </div>

            <div class="card">
                <div data-label="HTML" class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="wizard-example"&gt;
  &lt;h3&gt;Personal Information&lt;/h3&gt;
  &lt;section class="card card-body border mb-0"&gt;
    &lt;h5&gt;Personal Information&lt;/h5&gt;
    &lt;p&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
  &lt;/section&gt;
  &lt;h3&gt;Billing Information&lt;/h3&gt;
  &lt;section class="card card-body border mb-0"&gt;
    &lt;h5&gt;Billing Information&lt;/h5&gt;
    &lt;p&gt;Wonderful transition effects.&lt;/p&gt;
  &lt;/section&gt;
  &lt;h3&gt;Payment Details&lt;/h3&gt;
  &lt;section class="card card-body border mb-0"&gt;
    &lt;h5&gt;Payment Details&lt;/h5&gt;
    &lt;p&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
  &lt;/section&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$('#wizard-example').steps({
    headerTag: 'h3',
    bodyTag: 'section',
    autoFocus: true,
    titleTemplate: '&lt;span class="wizard-index"&gt;#index#&lt;/span&gt; #title#'
});</code></pre>
                </div>
            </div>

            <h4>Basic Form Wizard with Validation</h4>

            <div class="card">
                <div class="card-body">
                    <div id="wizard2">
                        <h3>Personal Information</h3>
                        <section class="card card-body border mb-0">
                            <h5>Personal Information</h5>
                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                            <form id="form1">
                                <div class="mb-3 wd-xs-300">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control" placeholder="First name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div><!-- mb-3 -->
                                <div class="mb-3 wd-xs-300">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control" name="lastname"
                                           placeholder="Enter lastname"
                                           required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div><!-- mb-3 -->
                            </form>
                        </section>
                        <h3>Billing Information</h3>
                        <section class="card card-body border mb-0">
                            <h5>Billing Information</h5>
                            <p>Wonderful transition effects.</p>
                            <form id="form2">
                                <div class="mb-3 wd-xs-300">
                                    <label class="form-control-label">Email: <span
                                            class="tx-danger">*</span></label>
                                    <input id="email" class="form-control" name="email"
                                           placeholder="Enter email address"
                                           type="email" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div><!-- mb-3 -->
                            </form>
                        </section>
                        <h3>Payment Details</h3>
                        <section class="card card-body border mb-0">
                            <h5>Payment Details</h5>
                            <p>The next and previous buttons help you to navigate through your content.</p>
                        </section>
                    </div>
                </div>
                <div data-label="HTML" class="demo-code-preview">
                    <pre><code class="language-html">&lt;div id="wizard-example"&gt;
    &lt;h3&gt;Personal Information&lt;/h3&gt;
    &lt;section class="card card-body border mb-0"&gt;
        &lt;h5&gt;Personal Information&lt;/h5&gt;
        &lt;p&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
        &lt;form id="form1"&gt;
            &lt;div class="mb-3 wd-xs-300"&gt;
                &lt;label&gt;First name&lt;/label&gt;
                &lt;input type="text" class="form-control" placeholder="First name" required&gt;
                &lt;div class="valid-feedback"&gt;
                    Looks good!
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="mb-3 wd-xs-300"&gt;
                &lt;label&gt;Last name&lt;/label&gt;
                &lt;input type="text" class="form-control" name="lastname" placeholder="Enter lastname"
                       required&gt;
                &lt;div class="valid-feedback"&gt;
                    Looks good!
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/section&gt;
    &lt;h3&gt;Billing Information&lt;/h3&gt;
    &lt;section class="card card-body border mb-0"&gt;
        &lt;h5&gt;Billing Information&lt;/h5&gt;
        &lt;p&gt;Wonderful transition effects.&lt;/p&gt;
        &lt;form id="form2"&gt;
            &lt;div class="mb-3 wd-xs-300"&gt;
                &lt;label class="form-control-label"&gt;Email: &lt;span class="tx-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
                &lt;input id="email" class="form-control" name="email" placeholder="Enter email address"
                       type="email" required&gt;
                &lt;div class="valid-feedback"&gt;
                    Looks good!
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/section&gt;
    &lt;h3&gt;Payment Details&lt;/h3&gt;
    &lt;section class="card card-body border mb-0"&gt;
        &lt;h5&gt;Payment Details&lt;/h5&gt;
        &lt;p&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$('#wizard-example').steps({
    headerTag: 'h3',
    bodyTag: 'section',
    autoFocus: true,
    titleTemplate: '&lt;span class="wizard-index"&gt;#index#&lt;/span&gt; #title#',
    onStepChanging: function (event, currentIndex, newIndex) {
        if (currentIndex &lt; newIndex) {
            var form = document.getElementById('form1'),
                form2 = document.getElementById('form2');

            if (currentIndex === 0) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    form.classList.add('was-validated');
                } else {
                    return true;
                }
            } else if (currentIndex === 1) {
                if (form2.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    form2.classList.add('was-validated');
                } else {
                    return true;
                }
            } else {
                return true;
            }
        } else {
            return true;
        }
    }
});</code></pre>
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
    <!-- Form wizard -->
    <script src="{{ url("libs/form-wizard/jquery.steps.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/form-wizard.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
