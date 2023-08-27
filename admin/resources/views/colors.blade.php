@extends('layouts.app')

@section('page-title', 'Colors')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Convey meaning through color with a handful of color utility classes. Includes support
                for styling links with hover states, too.</p>

            <h4>Color</h4>
            <p>Colorize text with color utilities. If you want to colorize links, you can use the
                <code>.link-*</code> helper classes which have <code>:hover</code> and <code>:focus</code> states.
            </p>

            <div class="card">
                <div class="card-body">
                    <p class="text-primary">.text-primary</p>
                    <p class="text-secondary">.text-secondary</p>
                    <p class="text-success">.text-success</p>
                    <p class="text-danger">.text-danger</p>
                    <p class="text-warning bg-dark">.text-warning</p>
                    <p class="text-info bg-dark">.text-info</p>
                    <p class="text-light bg-dark">.text-light</p>
                    <p class="text-dark">.text-dark</p>
                    <p class="text-body">.text-body</p>
                    <p class="text-muted">.text-muted</p>
                    <p class="text-white bg-dark">.text-white</p>
                    <p class="text-black-50">.text-black-50</p>
                    <p class="text-white-50 bg-dark">.text-white-50</p>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;p class="text-primary"&gt;.text-primary&lt;/p&gt;
&lt;p class="text-secondary"&gt;.text-secondary&lt;/p&gt;
&lt;p class="text-success"&gt;.text-success&lt;/p&gt;
&lt;p class="text-danger"&gt;.text-danger&lt;/p&gt;
&lt;p class="text-warning bg-dark"&gt;.text-warning&lt;/p&gt;
&lt;p class="text-info bg-dark"&gt;.text-info&lt;/p&gt;
&lt;p class="text-light bg-dark"&gt;.text-light&lt;/p&gt;
&lt;p class="text-dark"&gt;.text-dark&lt;/p&gt;
&lt;p class="text-body"&gt;.text-body&lt;/p&gt;
&lt;p class="text-muted"&gt;.text-muted&lt;/p&gt;
&lt;p class="text-white bg-dark"&gt;.text-white&lt;/p&gt;
&lt;p class="text-black-50"&gt;.text-black-50&lt;/p&gt;
&lt;p class="text-white-50 bg-dark"&gt;.text-white-50&lt;/p&gt;</code></pre>
                </div>
            </div>

            <h4>Background color</h4>

            <p>Similar to the contextual text color classes, easily set the background of an element to any contextual
                class. Background utilities <strong>do not set <code>color</code></strong>, so in some cases you’ll want
                to use <code>.text-*</code> utilities.</p>

            <div class="card">
                <div class="card-body">
                    <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                    <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                    <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                    <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                    <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                    <div class="p-3 mb-2 bg-info text-dark">.bg-info</div>
                    <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                    <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                    <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                    <div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="p-3 mb-2 bg-primary text-white"&gt;.bg-primary&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-secondary text-white"&gt;.bg-secondary&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-success text-white"&gt;.bg-success&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-danger text-white"&gt;.bg-danger&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-warning text-dark"&gt;.bg-warning&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-info text-dark"&gt;.bg-info&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-light text-dark"&gt;.bg-light&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-dark text-white"&gt;.bg-dark&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-white text-dark"&gt;.bg-white&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-transparent text-dark"&gt;.bg-transparent&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Custom Background color</h4>

            <div class="card">
                <div class="card-body">
                    <div class="p-3 mb-2 bg-blue text-white">.bg-blue</div>
                    <div class="p-3 mb-2 bg-indigo text-white">.bg-indigo</div>
                    <div class="p-3 mb-2 bg-purple text-white">.bg-purple</div>
                    <div class="p-3 mb-2 bg-pink text-white">.bg-pink</div>
                    <div class="p-3 mb-2 bg-orange text-white">.bg-orange</div>
                    <div class="p-3 mb-2 bg-yellow text-dark">.bg-yellow</div>
                    <div class="p-3 mb-2 bg-teal text-dark">.bg-teal</div>
                    <div class="p-3 mb-2 bg-cyan text-dark">.bg-cyan</div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="p-3 mb-2 bg-blue text-white"&gt;.bg-blue&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-indigo text-white"&gt;.bg-indigo&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-purple text-white"&gt;.bg-purple&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-pink text-white"&gt;.bg-pink&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-orange text-white"&gt;.bg-orange&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-yellow text-dark"&gt;.bg-yellow&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-teal text-dark"&gt;.bg-teal&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-cyan text-dark"&gt;.bg-cyan&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Background gradient</h4>
            <p>By adding a <code>.bg-gradient</code> class, a linear gradient is added as background image to the
                backgrounds. This gradient starts with a semi-transparent white which fades out to the bottom.</p>
            <p>Do you need a gradient in your custom CSS? Just add <code>background-image:
                    var(--bs-gradient);</code>.</p>

            <div class="card">
                <div class="card-body">
<div class="p-3 mb-2 bg-primary bg-gradient text-white">.bg-primary.bg-gradient</div>
<div class="p-3 mb-2 bg-secondary bg-gradient text-white">.bg-secondary.bg-gradient</div>
<div class="p-3 mb-2 bg-success bg-gradient text-white">.bg-success.bg-gradient</div>
<div class="p-3 mb-2 bg-danger bg-gradient text-white">.bg-danger.bg-gradient</div>
<div class="p-3 mb-2 bg-warning bg-gradient text-dark">.bg-warning.bg-gradient</div>
<div class="p-3 mb-2 bg-info bg-gradient text-dark">.bg-info.bg-gradient</div>
<div class="p-3 mb-2 bg-light bg-gradient text-dark">.bg-light.bg-gradient</div>
<div class="p-3 mb-2 bg-dark bg-gradient text-white">.bg-dark.bg-gradient</div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="p-3 mb-2 bg-primary bg-gradient text-white"&gt;.bg-primary.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-secondary bg-gradient text-white"&gt;.bg-secondary.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-success bg-gradient text-white"&gt;.bg-success.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-danger bg-gradient text-white"&gt;.bg-danger.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-warning bg-gradient text-dark"&gt;.bg-warning.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-info bg-gradient text-dark"&gt;.bg-info.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-light bg-gradient text-dark"&gt;.bg-light.bg-gradient&lt;/div&gt;
&lt;div class="p-3 mb-2 bg-dark bg-gradient text-white"&gt;.bg-dark.bg-gradient&lt;/div&gt;</code></pre>
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
