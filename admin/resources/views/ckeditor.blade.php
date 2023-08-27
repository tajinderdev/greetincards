@extends('layouts.app')

@section('page-title', 'CKEditor')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">
                CKEditor 5 provides every type of WYSIWYG editing solution imaginable. <a
                    href="https://ckeditor.com/ckeditor-5/" target="_blank">Plugin
                    page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="libs/ckeditor5/ckeditor.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Demo</h4>

            <div class="card">
                <div class="card-body">
                    <div id="editor">
                        <p>Here goes the initial content of the editor.</p>
                    </div>
                </div>
                <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="editor"&gt;
    &lt;p&gt;Here goes the initial content of the editor.&lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div data-label="INCLUDED FILES" class="demo-code-preview">
                    <pre><code class="language-js">ClassicEditor.create(document.querySelector('#editor'))</code></pre>
                </div>
            </div>

            <h4>Customized Demo</h4>

            <div class="card">
                <div class="card-body">
                    <div id="customized-editor">
                        <p>Here goes the initial content of the editor.</p>
                    </div>
                </div>
                <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-js">ClassicEditor.create(document.querySelector('#customized-editor'), {
    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
    heading: {
        options: [
            {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
            {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
            {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'}
        ]
    }
})</code></pre>
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
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>

    <!-- CKEditor -->
    <script src="{{ url("libs/ckeditor5/ckeditor.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/ckeditor.js") }}"></script>
@endsection
