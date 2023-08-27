@extends('layouts.app')

@section('page-title', 'Tags Input')

@section('head')
    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{ url("libs/tagsinput/bootstrap-tagsinput.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">A jquery plugin with user interface for managing tags. <a
                    href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" target="_blank">Demo
                    page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/tagsinput/bootstrap-tagsinput.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/tagsinput/bootstrap-tagsinput.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Example</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" class="form-control tagsinput" placeholder="Tags"
                           value="HTML5, CSS3, JavaScript, Laravel">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" class="form-control tagsinput-example" placeholder="Tags" value="HTML5, CSS3, JavaScript, Laravel"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$("input.tagsinput-example").tagsinput('items');</code></pre>
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
    <!-- Tagsinput -->
    <script src="{{ url("libs/tagsinput/bootstrap-tagsinput.js") }}"></script>
    <script src="{{ url("dist/js/examples/tagsinput.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
