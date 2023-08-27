@extends('layouts.app')

@section('page-title', 'Tooltips')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript
                using CSS3 for animations and data-bs-attributes for local title storage.</p>

            <h4>Examples</h4>
            <p>Hover over the links below to see tooltips:</p>
            <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.
                Directions are mirrored when using Bootstrap in RTL.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Tooltip on top">
                            Tooltip on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Tooltip on right">
                            Tooltip on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Tooltip on bottom">
                            Tooltip on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="Tooltip on left">
                            Tooltip on left
                        </button>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"&gt;
  Tooltip on top
&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"&gt;
  Tooltip on right
&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom"&gt;
  Tooltip on bottom
&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"&gt;
  Tooltip on left
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <p>And with custom HTML added:</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"&gt;
  Tooltip with HTML
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled elements</h4>
            <p>Elements with the <code>disabled</code> attribute aren’t interactive, meaning users cannot focus,
                hover, or click them to trigger a tooltip (or popover). As a workaround, you’ll want to trigger the
                tooltip from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made
                keyboard-focusable using <code>tabindex="0"</code>, and override the <code>pointer-events</code> on
                the disabled element.</p>

            <div class="card">
                <div class="card-body">
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">
                      <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                    </span>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip"&gt;
  &lt;button class="btn btn-primary" style="pointer-events: none;" type="button" disabled&gt;Disabled button&lt;/button&gt;
&lt;/span&gt;</code></pre>
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
