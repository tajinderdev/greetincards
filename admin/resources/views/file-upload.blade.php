@extends('layouts.app')

@section('page-title', 'File Upload')

@section('head')
    <!-- Dropzone -->
    <link rel="stylesheet" href="{{ url("libs/dropzone/dropzone.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">
            <p class="lead">
                DropzoneJS is an open source library that provides drag’n’drop file uploads with image
                previews.
                <a href="https://www.dropzonejs.com/" target="_blank">Plugin page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Css --&gt;
&lt;link rel="stylesheet" href="libs/dropzone/dropzone.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/dropzone/dropzone.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Demo</h4>
            <p>The typical way of using dropzone is by creating a form element with the class <code>dropzone</code>:</p>

            <div class="card">
                <div class="card-body">
                    <form action="/file-upload" class="dropzone"></form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form action="/file-upload" class="dropzone"&gt;
  ...
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <p>That’s it. Dropzone will find all form elements with the class dropzone, automatically attach itself to it, and upload files dropped into it to the specified <code>action</code> attribute. The uploaded files can be handled just as if there would have been a html input like this:</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="file" name="file" /&gt;</code></pre>
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
    <!-- Dropzone -->
    <script src="{{ url("libs/dropzone/dropzone.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
