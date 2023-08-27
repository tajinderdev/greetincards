@extends('layouts.app')

@section('page-title', 'Chartjs')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 bd-content">

            <p class="lead">
                Chart.js is a popular open source library that helps us to plot data in web
                applications. <a href="https://www.chartjs.org/" target="_blank">Demo
                    page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre>
                        <code class="language-html">
                        &lt;!-- Javascript --&gt;&lt;script src="libs/charts/chartjs/chart.min.js"&gt;&lt;/script&gt;</code>
                    </pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <canvas id="chartjs_one"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <canvas id="chartjs_two"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <canvas id="chartjs_three"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <canvas id="chartjs_four"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <canvas id="chartjs_five"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <canvas id="chartjs_six"></canvas>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Chartjs -->
    <script src="{{ url("libs/charts/chartjs/chart.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/charts/chartjs.js") }}"></script>
    <div class="colors"> <!-- To use theme colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-secondary"></div>
        <div class="bg-info"></div>
        <div class="bg-success"></div>
        <div class="bg-danger"></div>
        <div class="bg-warning"></div>
    </div>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
