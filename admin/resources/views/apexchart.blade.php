@extends('layouts.app')

@section('page-title', 'Apex Chart')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 bd-content">

            <p class="lead">
                ApexCharts is an open-source modern charting library that helps developers to create
                beautiful and interactive visualizations for web pages. <a
                    href="https://apexcharts.com/" target="_blank">Demo page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="libs/charts/apex/apexcharts.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_demo_1" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_demo_2" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_demo_3" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_demo_4" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_demo_5" style="height: 300px"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div id="apex_chart_demo_6" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div id="apex_chart_demo_7" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Apex Chart -->
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{ url("libs/charts/apex/apexcharts.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/charts/apex.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
