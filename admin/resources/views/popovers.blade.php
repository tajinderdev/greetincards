@extends('layouts.app')

@section('page-title', 'Popovers')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to
                any element on your site.</p>

            <h4>Example</h4>

            <div class="card">
                <div class="card-body ms-auto">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="popover" title="Popover title"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to
                        toggle popover
                    </button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?"&gt;Click to toggle popover&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h5>Four directions</h5>
            <p>Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using
                Bootstrap in RTL.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-secondary me-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="top"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on top
                    </button>

                    <button type="button" class="btn btn-secondary me-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="right"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on right
                    </button>

                    <button type="button" class="btn btn-secondary me-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="bottom"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                    </button>

                    <button type="button" class="btn btn-secondary me-1" data-bs-container="body"
                            data-bs-toggle="popover" data-bs-placement="left"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on left
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;
  Popover on top
&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;
  Popover on right
&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;
  Popover on bottom
&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."&gt;
  Popover on left
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h5>Disabled elements</h5>
            <p>Elements with the <code>disabled</code> attribute aren’t interactive, meaning users cannot hover or
                click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover
                from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> and override the <code>pointer-events</code>
                on the disabled element.</p>
            <p>For disabled popover triggers, you may also prefer <code>data-bs-trigger="hover"</code> so that the
                popover appears as immediate visual feedback to your users as they may not expect to <em>click</em>
                on a disabled element.</p>

            <div class="card">
                <div class="card-body">
                    <span class="d-inline-block" data-bs-toggle="popover" data-bs-content="Disabled popover">
                        <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                    </span>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;span class="d-inline-block" data-bs-toggle="popover" data-bs-content="Disabled popover"&gt;
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
