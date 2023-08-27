@extends('layouts.app')

@section('page-title', 'Morsis')

@section('head')
    <!-- Morsis -->
    <link rel="stylesheet" href="{{ url("libs/charts/morsis/morris.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 bd-content">

            <p class="lead">
                Morsis is a popular open source library that helps us to plot data in web applications.
                <a href="https://morrisjs.github.io/morris.js/" target="_blank">Demo page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/charts/morsis/morris.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/charts/morsis/raphael-2.1.4.min.js"&gt;&lt;/script&gt;
&lt;script src="libs/charts/morsis/morris.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="bar-chart" style="height: 250px;"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="line-chart" style="height: 250px;"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="stacked" style="height: 250px;"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="area-chart" style="height: 250px;"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="pie-chart" style="height: 250px;"></div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Morsis -->
    <script src="{{ url("libs/charts/morsis/raphael-2.1.4.min.js") }}"></script>
    <script src="{{ url("libs/charts/morsis/morris.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/charts/morsis.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
