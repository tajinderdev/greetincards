@extends('layouts.app')

@section('page-title', 'Collapse')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Toggle the visibility of content across your project with a few classes and our
                JavaScript plugins.</p>

            <h4>Example</h4>
            <p>Click the buttons below to show and hide another element via class changes:</p>
            <ul>
                <li><code>.collapse</code> hides content</li>
                <li><code>.collapsing</code> is applied during transitions</li>
                <li><code>.collapse.show</code> shows content</li>
            </ul>
            <p>You can use a link with the <code>href</code> attribute, or a button with the
                <code>data-bs-target</code> attribute. In both cases, the <code>data-bs-toggle="collapse"</code> is
                required.</p>

            <div class="card">
                <div class="card-body">
                    <p class="mb-0">
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button"
                           aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                        </a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                        </button>
                    </p>
                    <div class="collapse mt-4" id="collapseExample">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                            ea proident.
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;p&gt;
  &lt;a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"&gt;
    Link with href
  &lt;/a&gt;
  &lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"&gt;
    Button with data-bs-target
  &lt;/button&gt;
&lt;/p&gt;
&lt;div class="collapse" id="collapseExample"&gt;
  &lt;div class="card card-body"&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Multiple targets</h4>
            <p>A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by
                referencing them with a selector in its <code>href</code> or <code>data-bs-target</code> attribute.
                Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if they
                each reference it with their <code>href</code> or <code>data-bs-target</code> attribute</p>

            <div class="card">
                <div class="card-body">
                    <p>
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1"
                           role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first
                            element</a>
                        <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                aria-controls="multiCollapseExample2">Toggle second element
                        </button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target=".multi-collapse" aria-expanded="false"
                                aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements
                        </button>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;p&gt;
  &lt;a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"&gt;Toggle first element&lt;/a&gt;
  &lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"&gt;Toggle second element&lt;/button&gt;
  &lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"&gt;Toggle both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class="row"&gt;
  &lt;div class="col"&gt;
    &lt;div class="collapse multi-collapse" id="multiCollapseExample1"&gt;
      &lt;div class="card card-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="collapse multi-collapse" id="multiCollapseExample2"&gt;
      &lt;div class="card card-body"&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
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
