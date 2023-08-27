@extends('layouts.app')

@section('page-title', 'Images')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for opting images into responsive behavior (so they never
                become larger than their parent elements) and add lightweight styles to them—all via classes.</p>

            <h4>Responsive images</h4>
            <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. This applies <code>max-width:
                    100%;</code> and <code>height: auto;</code> to the image so that it scales with the parent
                element.</p>

            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" src="{{ url('assets/images/profile-bg.jpg') }}" alt="...">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;img src="..." class="img-fluid" alt="..."&gt;</code></pre>
                </div>
            </div>

            <h4>Image thumbnails</h4>
            <p>In addition to our border-radius utilities, you can use <code>.img-thumbnail</code> to give an image a
                rounded 1px border appearance.</p>

            <div class="card">
                <div class="card-body">
                    <img class="img-thumbnail" style="width: 12rem" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;img src="..." class="img-thumbnail" alt="..."&gt;</code></pre>
                </div>
            </div>

            <h4>Aligning images</h4>
            <p>Align images with the helper float classes or text alignment classes. <code>block</code>-level images
                can be centered using the <code>.mx-auto</code> margin utility class.</p>

            <div class="card">
                <div class="card-body">
                    <img class="rounded float-start" style="width: 12rem" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                    <img class="rounded float-end" style="width: 12rem" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;img src="..." class="rounded float-start" alt="..."&gt;
&lt;img src="..." class="rounded float-end" alt="..."&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <img class="rounded mx-auto d-block" style="width: 12rem" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                </div>
                <div class="demo-code-preview">
                    <pre><code
                            class="language-html">&lt;img src="..." class="rounded mx-auto d-block" alt="..."&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img class="rounded" style="width: 12rem" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="text-center"&gt;
  &lt;img src="..." class="rounded" alt="..."&gt;
&lt;/div&gt;</code></pre>
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
@endsection
