@extends('layouts.app')

@section('page-title', 'Select')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Customize the native <code>&lt;select&gt;</code>s with custom CSS that changes the
                element’s initial appearance.</p>

            <h4>Default</h4>
            <p>Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to
                trigger the custom styles. Custom styles are limited to the <code>&lt;select&gt;</code>’s initial
                appearance and cannot modify the <code>&lt;option&gt;</code>s due to browser limitations.</p>

            <div class="card">
                <div class="card-body">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="form-select" aria-label="Default select example"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                </div>
            </div>

            <h4>Sizing</h4>
            <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>

            <div class="card">
                <div class="card-body">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class="form-select form-select-sm" aria-label=".form-select-sm example"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                </div>
            </div>

            <p>The <code>multiple</code> attribute is also supported:</p>

            <div class="card">
                <div class="card-body">
                    <select class="form-select" multiple aria-label="multiple select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="form-select" multiple aria-label="multiple select example"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                </div>
            </div>

            <p>As is the <code>size</code> attribute:</p>

            <div class="card">
                <div class="card-body">
                    <select class="form-select" size="3" aria-label="size 3 select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="form-select" size="3" aria-label="size 3 select example"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled</h4>
            <p>Add the <code>disabled</code> boolean attribute on a select to give it a grayed out appearance and
                remove pointer events.</p>

            <div class="card">
                <div class="card-body">
                    <select class="form-select" aria-label="Disabled select example" disabled>
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="form-select" aria-label="Disabled select example" disabled&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
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
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
