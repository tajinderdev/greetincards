@extends('layouts.app')

@section('page-title', 'Input Mask')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">A plugin to make masks on form fields. <a
                    href="https://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;script src="libs/input-mask/jquery.mask.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Phone</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" data-input-mask="phone" class="form-control" placeholder="(555) 555-5555">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" data-input-mask="phone" class="form-control" placeholder="(555) 555-5555"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div data-label="HTML" class="demo-code-preview">
                    <pre><code class="language-js">$('[data-input-mask="phone"]').mask('(000) 000-0000');</code></pre>
                </div>
            </div>

            <h4>Date</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" data-input-mask="date" class="form-control" placeholder="2019/12/05">
                </div>
                <div data-label="HTML" class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" data-input-mask="date" class="form-control" placeholder="2019/12/05"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('[data-input-mask="date"]').mask('0000/00/00/');</code></pre>
                </div>
            </div>

            <h4>Time</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" data-input-mask="time" class="form-control" placeholder="12:25:45">
                </div>
                <div data-label="HTML" class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" data-input-mask="time" class="form-control" placeholder="12:25:45"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('[data-input-mask="time"]').mask('00:00:00');</code></pre>
                </div>
            </div>

            <h4>Money</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" data-input-mask="money" class="form-control" placeholder="54,28">
                </div>
                <div data-label="HTML" class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" data-input-mask="money" class="form-control" placeholder="54,28"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code
                            class="language-js">$('[data-input-mask="money"]').mask('#.##0,00', {reverse: true});</code></pre>
                </div>
            </div>

            <h4>Ip Address</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" data-input-mask="ip_address" class="form-control" placeholder="192.168.544.444">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" data-input-mask="ip_address" class="form-control" placeholder="192.168.544.444"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div data-label="JS" class="demo-code-preview">
                    <pre><code
                            class="language-js">$('[data-input-mask="ip_address"]').mask('099.099.099.099');</code></pre>
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
    <!-- Input mask -->
    <script src="{{ url("libs/input-mask/jquery.mask.js") }}"></script>
    <script src="{{ url("dist/js/examples/input-mask.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
