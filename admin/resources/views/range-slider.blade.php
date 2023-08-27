@extends('layouts.app')

@section('page-title', 'Range Slider')

@section('head')
    <!-- Range slider -->
    <link rel="stylesheet" href="{{ url("libs/range-slider/css/ion.rangeSlider.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Easy to use, flexible and responsive range slider with skin support. <a
                    href="http://ionden.com/a/plugins/ion.rangeSlider/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/range-slider/css/ion.rangeSlider.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/range-slider/js/ion.rangeSlider.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Example</h4>
            <p>Set min value, max value and start point</p>

            <div class="card">
                <div class="card-body">
                    <input type="text" id="demo_1">
                </div>
                <div data-label="HTML" class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" id="demo_1"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$("#demo_1").ionRangeSlider({
    min: 100,
    max: 1000,
    from: 550,
    skin: "round"
});</code></pre>
                </div>
            </div>

            <h4>Prefix</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" id="demo_2">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-js">$("#demo_2").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "$",
    skin: "round"
});</code></pre>
                </div>
            </div>

            <h4>Step</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" id="demo_3">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-js">$("#demo_3").ionRangeSlider({
    type: "double",
    grid: true,
    min: -1000,
    max: 1000,
    from: -500,
    to: 500,
    step: 100
});</code></pre>
                </div>
            </div>

            <h4>Fractional</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" id="demo_4">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-js">$("#demo_4").ionRangeSlider({
    type: "double",
    grid: true,
    min: -12.8,
    max: 12.8,
    from: -3.2,
    to: 3.2,
    step: 0.1,
    skin: "round"
});</code></pre>
                </div>
            </div>

            <p>Values array could be anything, even strings</p>

            <div class="card">
                <div class="card-body">
                    <input type="text" id="demo_5">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    grid: true,
    from: new Date().getMonth(),
    values: [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ],
    skin: "round"
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
    <!-- Range slider -->
    <script src="{{ url("libs/range-slider/js/ion.rangeSlider.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/range-slider.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
