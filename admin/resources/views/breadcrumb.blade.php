@extends('layouts.app')

@section('page-title', 'Breadcrumb')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Indicate the current page’s location within a navigational hierarchy that automatically
                adds separators via CSS.</p>

            <h4>Example</h4>
            <p>Use an ordered or unordered list with linked list items to create a minimally styled breadcrumb. Use
                our utilities to add additional styles as desired.</p>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h4>Dividers</h4>
            <p>Dividers are automatically added in CSS through <a
                    href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"><code>::before</code></a> and
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"><code>content</code></a>. They
                can be changed by modifying a local CSS custom property <code>--bs-breadcrumb-divider</code>, or
                through the <code>$breadcrumb-divider</code> Sass variable — and
                <code>$breadcrumb-divider-flipped</code> for its RTL counterpart, if needed. We default to our Sass
                variable, which is set as a fallback to the custom property. This way, you get a global divider that
                you can override without recompiling CSS at any time.</p>

            <div class="card">
                <div class="card-body">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: '&gt;';" aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <p>When modifying via Sass, the <a href="https://sass-lang.com/documentation/modules/string#quote">quote</a>
                function is required to generate the quotes around a string. For example, using <code>&gt;</code> as the
                divider, you can use this:</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-css">$breadcrumb-divider: quote("&gt;");</code></pre>
                </div>
            </div>

            <p>It’s also possible to use an <strong>embedded SVG icon</strong>. Apply it via our CSS custom property, or
                use the Sass variable.</p>

            <div class="card">
                <div class="card-body">
                    <nav
                        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-css">$breadcrumb-divider: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E");</code></pre>
                </div>
            </div>

            <p>You can also remove the divider setting <code>--bs-breadcrumb-divider: '';</code> (empty strings in CSS
                custom properties counts as a value), or setting the Sass variable to <code>$breadcrumb-divider:
                    none;</code>.</p>

            <div class="card">
                <div class="card-body">
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                        <pre><code class="language-css">$breadcrumb-divider: none;</code></pre>
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
