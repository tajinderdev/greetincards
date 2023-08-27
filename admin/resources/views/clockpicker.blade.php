@extends('layouts.app')

@section('page-title', 'Clock picker')

@section('head')
    <!-- Clockpicker -->
    <link rel="stylesheet" href="{{ url("libs/clockpicker/bootstrap-clockpicker.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">
                A clock-style timepicker for Bootstrap (or jQuery). <a href="http://weareoutman.github.io/clockpicker/" target="_blank">Demo page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/clockpicker/bootstrap-clockpicker.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/clockpicker/bootstrap-clockpicker.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Example</h4>

            <div class="card">
                <div class="card-body">
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" placeholder="09:30" aria-describedby="button-addon1">
                        <button class="btn btn-light" type="button" id="button-addon1">
                            <i class="bi bi-clock"></i>
                        </button>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="input-group clockpicker"&gt;
    &lt;input type="text" class="form-control" value="09:30"  aria-describedby="button-addon1"&gt;
    &lt;button class="btn btn-light" type="button" id="button-addon1"&gt;
        &lt;i class="bi bi-clock"&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('.clockpicker').clockpicker();</code></pre>
                </div>
            </div>

            <h4>Auto close</h4>
            <p>You must add the <code>autoclose:true</code> attribute.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group clockpicker-autoclose">
                        <input type="text" class="form-control" placeholder="09:30" aria-describedby="button-addon2">
                        <button class="btn btn-light" type="button" id="button-addon2">
                            <i class="bi bi-clock"></i>
                        </button>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('.clockpicker-autoclose').clockpicker({
    autoclose: true
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
    <!-- Clockpicker -->
    <script src="{{ url("libs/clockpicker/bootstrap-clockpicker.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/clockpicker.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
