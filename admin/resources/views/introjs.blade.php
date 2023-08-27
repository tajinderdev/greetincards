@extends('layouts.app')

@section('page-title', 'IntroJs')

@section('head')
    <!-- Introjs -->
    <link rel="stylesheet" href="{{ url("libs/introjs/introjs.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 bd-content">

            <p class="lead">Intro.js is a lightweight library for creating step-by-step customer onboarding. <a
                    href="https://introjs.com/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/introjs/introjs.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/introjs/intro.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic example</h4>

            <p>You can create your product tour using <code>data-intro</code> and <code>data-title</code> HTML attributes. Simply add those attributes to your
                elements and call <code>introjJs().start()</code>:</p>

            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary tour-start">Run</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div data-title="Welcome!" data-intro="Intro.js can highlight on elements"&gt;
  ...
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">introJs().start();</code></pre>
                </div>
            </div>

            <p>You can define your tour settings using JSON as well.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">introJs().setOptions({
    steps: [
        {
            title: 'Welcome!',
            element: document.querySelector('div'),
            intro: 'Intro.js can highlight on elements'
        },
        ...
    ]
}).start();</code></pre>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>

    <!-- Intro.js -->
    <script src="{{ url("libs/introjs/intro.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/intro.js") }}"></script>
@endsection
