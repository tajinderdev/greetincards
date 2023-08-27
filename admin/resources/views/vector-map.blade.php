@extends('layouts.app')

@section('page-title', 'Vector Map')

@section('head')
    <!-- Vector map -->
    <link rel="stylesheet" href="{{ url("libs/vmap/jqvmap.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">JQVMap is a jQuery plugin that renders Interactive, Clickable Vector Maps. <a
                    href="https://www.10bestdesign.com/jqvmap/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/vmap/jqvmap.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/vmap/jquery.vmap.min.js"&gt;&lt;/script&gt;

&lt;!-- Map to use --&gt;
&lt;script src="libs/vmap/maps/jquery.vmap.world.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>World Map</h4>

            <div class="card">
                <div class="card-body">
                    <div id="vmap_world_en" class="bg-white" style="height: 400px;"></div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div id="vmap" style="height: 400px;"&gt;&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('#vmap').vectorMap({
    map: 'world_en',
    backgroundColor: '#fff',
    color: '#ffffff',
    hoverOpacity: 0.7,
    borderColor: '#fff',
    selectedColor: '#666666',
    enableZoom: false,
    showTooltip: true,
    scaleColors: ['#C8EEFF', '#006491'],
    normalizeFunction: 'polynomial',
});</code></pre>
                </div>
            </div>

            <h4>Custom Region</h4>

            <div class="card">
                <div class="card-body">
                    <div id="vmap_usa_en" class="bg-white" style="height: 400px;"></div>
                </div>
            </div>

            <p>Add this to your page:</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;script src="libs/vmap/maps/jquery.vmap.usa.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div id="vmap" style="height: 400px;"&gt;&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('#vmap').vectorMap({
    map: 'usa_en',
    backgroundColor: '#fff',
    color: '#ffffff',
    hoverOpacity: 0.7,
    borderColor: '#fff',
    selectedColor: '#666666',
    enableZoom: false,
    showTooltip: true,
    scaleColors: ['#C8EEFF', '#006491'],
    normalizeFunction: 'polynomial',
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
    <!-- Vector map -->
    <script src="{{ url("libs/vmap/jquery.vmap.min.js") }}"></script>
    <script src="{{ url("libs/vmap/maps/jquery.vmap.world.js") }}"></script>
    <script src="{{ url("libs/vmap/maps/jquery.vmap.usa.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/vmap.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
