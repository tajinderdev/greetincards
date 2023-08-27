@extends('layouts.app')

@section('page-title', 'Justgage')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 bd-content">

            <p class="lead">
                JustGage is a handy JavaScript plugin for generating and animating nice & clean gauges.
                <a href="https://justgage.com/" target="_blank">Demo page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="libs/charts/justgage/raphael-2.1.4.min.js"&gt;&lt;/script&gt;
&lt;script src="libs/charts/justgage/justgage.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-4 col-sm-12">
                            <div id="justgage_one" style="height:150px"></div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div id="justgage_two" style="height:150px"></div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div id="justgage_three" style="height:150px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div id="justgage_four" style="height:150px"></div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div id="justgage_five" style="height:150px"></div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div id="justgage_six" style="height:150px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="justgage_seven" style="height:300px"></div>
                        </div>
                        <div class="col-md-6">
                            <div id="justgage_eight" style="height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="justgage_nine" style="height:300px"></div>
                        </div>
                        <div class="col-md-6">
                            <div id="justgage_ten" style="height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Justgage -->
    <script src="{{ url("libs/charts/justgage/raphael-2.1.4.min.js") }}"></script>
    <script src="{{ url("libs/charts/justgage/justgage.js") }}"></script>
    <script src="{{ url("dist/js/examples/charts/justgage.js") }}"></script>
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
