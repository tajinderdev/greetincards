@extends('layouts.app')

@section('page-title', 'Alerts')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Provide contextual feedback messages for typical user actions with the handful of
                available and flexible alert messages.</p>

            <h4>Examples</h4>
            <p>Alerts are available for any length of text, as well as an optional close button. For proper styling,
                use one of the eight <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>).
                For inline dismissal, use the alerts JavaScript plugin.</p>

            <div class="card">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert—check it out!
                    </div>
                    <div class="alert alert-dark mb-0" role="alert">
                        A simple dark alert—check it out!
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="alert alert-primary" role="alert"&gt;
  A simple primary alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-secondary" role="alert"&gt;
  A simple secondary alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-success" role="alert"&gt;
  A simple success alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-danger" role="alert"&gt;
  A simple danger alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-warning" role="alert"&gt;
  A simple warning alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-info" role="alert"&gt;
  A simple info alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-light" role="alert"&gt;
  A simple light alert—check it out!
&lt;/div&gt;
&lt;div class="alert alert-dark" role="alert"&gt;
  A simple dark alert—check it out!
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Link color</h5>
            <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any
                alert.</p>

            <div class="card">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                        if you like.
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a
                        click if you like.
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                        if you like.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                        if you like.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                        if you like.
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-dark mb-0" role="alert">
                        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="alert alert-primary" role="alert"&gt;
  A simple primary alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-secondary" role="alert"&gt;
  A simple secondary alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-success" role="alert"&gt;
  A simple success alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-danger" role="alert"&gt;
  A simple danger alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-warning" role="alert"&gt;
  A simple warning alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-info" role="alert"&gt;
  A simple info alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-light" role="alert"&gt;
  A simple light alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class="alert alert-dark" role="alert"&gt;
  A simple dark alert with &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Additional content</h5>
            <p>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>

            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success mb-0" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to
                            run a bit longer so that you can see how spacing within an alert works with this kind of
                            content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                            tidy.</p>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="alert alert-success" role="alert"&gt;
  &lt;h4 class="alert-heading"&gt;Well done!&lt;/h4&gt;
  &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
  &lt;hr&gt;
  &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Dismissing</h5>
            <p>Using the alert JavaScript plugin, it’s possible to dismiss any alert inline. Here’s how:</p>
            <ul>
                <li>Be sure you’ve loaded the alert plugin, or the compiled Bootstrap JavaScript.</li>
                <li>Add a close button and the <code>.alert-dismissible</code>
                    class, which adds extra padding to the right of the alert and positions the close button.
                </li>
                <li>On the close button, add the <code>data-bs-dismiss="alert"</code> attribute, which triggers the
                    JavaScript functionality. Be sure to use the <code>&lt;button&gt;</code> element with it for
                    proper behavior across all devices.
                </li>
                <li>To animate alerts when dismissing them, be sure to add the <code>.fade</code> and
                    <code>.show</code> classes.
                </li>
            </ul>
            <p>You can see this in action with a live demo:</p>

            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="alert alert-warning alert-dismissible fade show" role="alert"&gt;
  &lt;strong&gt;Holy guacamole!&lt;/strong&gt; You should check in on some of those fields below.
  &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
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
