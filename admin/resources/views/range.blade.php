@extends('layouts.app')

@section('page-title', 'Range')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Use our custom range inputs for consistent cross-browser styling and built-in
                customization.</p>

            <h4>Overview</h4>
            <p>Create custom <code>&lt;input type="range"&gt;</code> controls with <code>.form-range</code>. The track
                (the
                background) and thumb (the value) are both styled to appear the same across browsers. As only Edge
                Legacy and Firefox supports “filling” their track from the left or right of the thumb as a means to
                visually indicate progress, we do not currently support it.</p>

            <div class="card">
                <div class="card-body">
                    <label for="customRange1" class="form-label">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;label for="customRange1" class="form-label"&gt;Example range&lt;/label&gt;
&lt;input type="range" class="form-range" id="customRange1"&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled</h4>
            <p>Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove
                pointer events.</p>

            <div class="card">
                <div class="card-body">
                    <label for="disabledRange" class="form-label">Disabled range</label>
                    <input type="range" class="form-range" id="disabledRange" disabled>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;label for="disabledRange" class="form-label"&gt;Disabled range&lt;/label&gt;
&lt;input type="range" class="form-range" id="disabledRange" disabled&gt;</code></pre>
                </div>
            </div>

            <h4>Min and max</h4>
            <p>Range inputs have implicit values for <code>min</code> and <code>max</code>—<code>0</code> and <code>100</code>,
                respectively. You may specify new values for those using the <code>min</code> and <code>max</code>
                attributes.</p>

            <div class="card">
                <div class="card-body">
                    <label for="customRange2" class="form-label">Example range</label>
                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;label for="customRange2" class="form-label"&gt;Example range&lt;/label&gt;
&lt;input type="range" class="form-range" min="0" max="5" id="customRange2"&gt;</code></pre>
                </div>
            </div>

            <h4>Steps</h4>
            <p>By default, range inputs “snap” to integer values. To change this, you can specify a
                <code>step</code> value. In the example below, we double the number of steps by using <code>step="0.5"</code>.
            </p>

            <div class="card">
                <div class="card-body">
                    <label for="customRange3" class="form-label">Example range</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;label for="customRange3" class="form-label"&gt;Example range&lt;/label&gt;
&lt;input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3"&gt;</code></pre>
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
