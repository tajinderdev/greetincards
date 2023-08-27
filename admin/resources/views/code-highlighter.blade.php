@extends('layouts.app')

@section('page-title', 'Code Highlighter')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 bd-content">

            <p class="lead">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in
                mind. It’s used in millions of websites, including some of those you visit daily. <a
                    href="https://prismjs.com/" target="_blank">Demo page</a></p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/prism/prism.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/prism/prism.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Examples</h4>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;pre&gt;
    &lt;code class="language-html"&gt;
        Html codes..
    &lt;/code&gt;
&lt;/pre&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;pre&gt;
    &lt;code class="language-css"&gt;
        Css codes..
    &lt;/code&gt;
&lt;/pre&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;pre&gt;
    &lt;code class="language-js"&gt;
        Javascript codes..
    &lt;/code&gt;
&lt;/pre&gt;</code></pre>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
