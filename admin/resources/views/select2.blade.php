@extends('layouts.app')

@section('page-title', 'Select2')

@section('head')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url("libs/select2/css/select2.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Select2 gives you a customizable select box with support for searching, tagging, remote data
                sets, infinite scrolling, and many other highly used options.
                <a href="https://select2.org/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/select2/css/select2.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/select2/js/select2.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Example</h4>

            <div class="card">
                <div class="card-body">
                    <select class="js-example-basic-single">
                        <option>Select</option>
                        <option value="France">France</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Yemen">Yemen</option>
                        <option value="United States">United States</option>
                        <option value="China">China</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bulgaria">Bulgaria</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="select2-example"&gt;
  &lt;option&gt;Select&lt;/option&gt;
  &lt;option value="France"&gt;France&lt;/option&gt;
  &lt;option value="Brazil"&gt;Brazil&lt;/option&gt;
  &lt;option value="Yemen"&gt;Yemen&lt;/option&gt;
  &lt;option value="United States"&gt;United States&lt;/option&gt;
  &lt;option value="China"&gt;China&lt;/option&gt;
  &lt;option value="Argentina"&gt;Argentina&lt;/option&gt;
  &lt;option value="Bulgaria"&gt;Bulgaria&lt;/option&gt;
&lt;/select&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-js">$('.select2-example').select2({
    placeholder: 'Select'
});</code></pre>
                </div>
            </div>

            <h4>Multi-select boxes</h4>

            <div class="card">
                <div class="card-body">
                    <select class="js-example-basic-single" multiple>
                        <option>Select</option>
                        <option value="France">France</option>
                        <option selected value="Brazil">Brazil</option>
                        <option selected value="Yemen">Yemen</option>
                        <option selected value="United States">United States</option>
                        <option value="China">China</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bulgaria">Bulgaria</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="select2-example" multiple&gt;
  &lt;option&gt;Select&lt;/option&gt;
  &lt;option value="France"&gt;France&lt;/option&gt;
  &lt;option value="Brazil"&gt;Brazil&lt;/option&gt;
  &lt;option value="Yemen"&gt;Yemen&lt;/option&gt;
  &lt;option value="United States"&gt;United States&lt;/option&gt;
  &lt;option value="China"&gt;China&lt;/option&gt;
  &lt;option value="Argentina"&gt;Argentina&lt;/option&gt;
  &lt;option value="Bulgaria"&gt;Bulgaria&lt;/option&gt;
&lt;/select&gt;</code></pre>
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
    <!-- Select2 -->
    <script src="{{ url("libs/select2/js/select2.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/select2.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
