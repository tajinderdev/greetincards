@extends('layouts.app')

@section('page-title', 'Floating labels')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Create beautifully simple form labels that float over your input fields.</p>

            <h4>Example</h4>
            <p>Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code>
                elements in <code>.form-floating</code> to
                enable floating labels with Bootstrap’s textual form fields. A <code>placeholder</code> is required
                on each <code>&lt;input&gt;</code>
                as our method of CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element.
                Also note that
                the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g.,
                <code>~</code>).</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-floating mb-3"&gt;
  &lt;input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"&gt;
  &lt;label for="floatingInput"&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-floating"&gt;
  &lt;input type="password" class="form-control" id="floatingPassword" placeholder="Password"&gt;
  &lt;label for="floatingPassword"&gt;Password&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>When there’s a <code>value</code> already defined, <code>&lt;label&gt;</code>s will automatically
                adjust to their floated position.</p>

            <div class="card">
                <div class="card-body">
                    <form class="form-floating">
                        <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com"
                               value="test@example.com">
                        <label for="floatingInputValue">Input with value</label>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="form-floating"&gt;
  &lt;input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com"&gt;
  &lt;label for="floatingInputValue"&gt;Input with value&lt;/label&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <p>Form validation styles also work as expected.</p>

            <div class="card">
                <div class="card-body">
                    <form class="form-floating">
                        <input type="email" class="form-control is-invalid" id="floatingInputInvalid"
                               placeholder="name@example.com" value="test@example.com">
                        <label for="floatingInputInvalid">Invalid input</label>
                    </form>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;form class="form-floating"&gt;
  &lt;input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com"&gt;
  &lt;label for="floatingInputInvalid"&gt;Invalid input&lt;/label&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <h4>Textareas</h4>
            <p>By default, <code>&lt;textarea&gt;</code>s with <code>.form-control</code> will be the same height as
                <code>&lt;input&gt;</code>s.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                                  id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-floating"&gt;
  &lt;textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"&gt;&lt;/textarea&gt;
  &lt;label for="floatingTextarea"&gt;Comments&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>To set a custom height on your <code>&lt;textarea&gt;</code>, do not use the <code>rows</code>
                attribute.
                Instead, set an explicit <code>height</code> (either inline or via custom CSS).</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                  style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-floating"&gt;
  &lt;textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"&gt;&lt;/textarea&gt;
  &lt;label for="floatingTextarea2"&gt;Comments&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Selects</h4>
            <p>Other than <code>.form-control</code>, floating labels are only available on
                <code>.form-selects</code>. They work in the same way, but unlike <code>&lt;input&gt;</code>s,
                they’ll always show the <code>&lt;label&gt;</code> in its floated state.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-floating"&gt;
  &lt;select class="form-select" id="floatingSelect" aria-label="Floating label select example"&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;label for="floatingSelect"&gt;Works with selects&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Layout</h4>
            <p>When working with the Bootstrap grid system, be sure to place form elements within column
                classes.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid"
                                       placeholder="name@example.com" value="mdo@example.com">
                                <label for="floatingInputGrid">Email address</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid"
                                        aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelectGrid">Works with selects</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="row g-2"&gt;
  &lt;div class="col-md"&gt;
    &lt;div class="form-floating"&gt;
      &lt;input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com"&gt;
      &lt;label for="floatingInputGrid"&gt;Email address&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md"&gt;
    &lt;div class="form-floating"&gt;
      &lt;select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example"&gt;
        &lt;option selected&gt;Open this select menu&lt;/option&gt;
        &lt;option value="1"&gt;One&lt;/option&gt;
        &lt;option value="2"&gt;Two&lt;/option&gt;
        &lt;option value="3"&gt;Three&lt;/option&gt;
      &lt;/select&gt;
      &lt;label for="floatingSelectGrid"&gt;Works with selects&lt;/label&gt;
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
