@extends('layouts.app')

@section('page-title', 'Spinners')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Indicate the loading state of a component or page with Bootstrap spinners, built
                entirely with HTML, CSS, and no JavaScript.</p>

            <h4>Border spinner</h4>
            <p>Use the border spinners for a lightweight loading indicator.</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="spinner-border" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Colors</h5>
            <p>The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can
                customize the color with text color utilities. You can use
                any of our text color utilities on the standard spinner.</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-border text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="spinner-border text-primary" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-secondary" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-success" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-danger" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-warning" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-info" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-light" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-border text-dark" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Growing spinner</h4>
            <p>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin,
                it does repeatedly grow!</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-grow" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="spinner-grow" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Once again, this spinner is built with <code>currentColor</code>, so you can easily change its appearance
                with text color utilities. Here it is in blue, along with the supported variants.</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="spinner-grow text-primary" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-secondary" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-success" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-danger" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-warning" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-info" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-light" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow text-dark" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Alignment</h4>
            <p>Spinners in Bootstrap are built with <code>rem</code>s, <code>currentColor</code>, and <code>display:
                    inline-flex</code>. This means they can easily be resized, recolored, and quickly aligned.</p>

            <h5>Margin</h5>
            <p>Use margin utilities like <code>.m-5</code> for easy spacing.</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="spinner-border m-5" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Placement</h5>
            <p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where
                you need them in any situation.</p>

            <h6>Flex</h6>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-flex justify-content-center"&gt;
  &lt;div class="spinner-border" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <strong>Loading...</strong>
                        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-flex align-items-center"&gt;
  &lt;strong&gt;Loading...&lt;/strong&gt;
  &lt;div class="spinner-border ms-auto" role="status" aria-hidden="true"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h6>Floats</h6>

            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="spinner-border float-end" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="clearfix"&gt;
  &lt;div class="spinner-border float-end" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h6>Text align</h6>

            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="text-center"&gt;
  &lt;div class="spinner-border" role="status"&gt;
    &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Size</h4>
            <p>Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that
                can quickly be used within other components.</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="spinner-border spinner-border-sm" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow spinner-grow-sm" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Or, use custom CSS or inline styles to change the dimensions as needed.</p>

            <div class="card">
                <div class="card-body">
                    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Buttons</h4>
            <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may
                also swap the text out of the spinner element and utilize button text as needed.</p>

            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="visually-hidden">Loading...</span>
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button class="btn btn-primary" type="button" disabled&gt;
  &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary" type="button" disabled&gt;
  &lt;span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        <span class="visually-hidden">Loading...</span>
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button class="btn btn-primary" type="button" disabled&gt;
  &lt;span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
&lt;/button&gt;
&lt;button class="btn btn-primary" type="button" disabled&gt;
  &lt;span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;</code></pre>
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
