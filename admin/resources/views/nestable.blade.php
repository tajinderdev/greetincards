@extends('layouts.app')

@section('page-title', 'Nestable')

@section('head')
    <!-- Nestable -->
    <link rel="stylesheet" href="{{ url("libs/nestable/jquery.nestable.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Drag & drop hierarchical list with mouse and touch compatibility (jQuery
                plugin).
                <a href="https://github.com/RamonSmit/Nestable2/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/nestable/jquery.nestable.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/nestable/jquery.nestable.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic example</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary me-1" data-action="expand-all">Expand All</button>
                        <button type="button" class="btn btn-primary me-1" data-action="collapse-all">Collapse All</button>
                    </div>
                    <div class="dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Item 1</div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle">Item 2</div>
                            </li>
                            <li class="dd-item" data-id="3">
                                <div class="dd-handle">Item 3</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">Item 4</div>
                                    </li>
                                    <li class="dd-item" data-id="5" data-foo="bar">
                                        <div class="dd-nodrag">Item 5</div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-json dd-output">[]</code></pre>
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
    <!-- Nestable -->
    <script src="{{ url("libs/nestable/jquery.nestable.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/nestable.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
