@extends('layouts.app')

@section('page-title', 'Pagination')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for showing pagination to indicate a series of related
                content exists across multiple pages.</p>

            <h4>Overview</h4>
            <p>We use a large block of connected links for our pagination, making links hard to miss and easily
                scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen
                readers can announce the number of available links. Use a wrapping <code>&lt;nav&gt;</code> element
                to identify it as a navigation section to screen readers and other assistive technologies.</p>
            <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a
                descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For
                example, if the pagination component is used to navigate between a set of search results, an
                appropriate label could be <code>aria-label="Search results pages"</code>.</p>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="Page navigation example"&gt;
  &lt;ul class="pagination"&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h4>Working with icons</h4>
            <p>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide
                proper screen reader support with <code>aria</code> attributes.</p>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="Page navigation example"&gt;
  &lt;ul class="pagination"&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#" aria-label="Previous"&gt;
        &lt;span aria-hidden="true"&gt;&laquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#" aria-label="Next"&gt;
        &lt;span aria-hidden="true"&gt;&raquo;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled and active states</h4>
            <p>Pagination links are customizable for different circumstances. Use <code>.disabled</code> for links
                that appear un-clickable and <code>.active</code> to indicate the current page.</p>
            <p>While the <code>.disabled</code> class uses <code>pointer-events: none</code> to <em>try</em> to
                disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized
                and doesn’t account for keyboard navigation. As such, you should always add
                <code>tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their
                functionality.</p>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="...">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="..."&gt;
  &lt;ul class="pagination"&gt;
    &lt;li class="page-item disabled"&gt;
      &lt;a class="page-link" href="#" tabindex="-1" aria-disabled="true"&gt;Previous&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item active" aria-current="page"&gt;
      &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h4>Sizing</h4>
            <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="...">
                        <ul class="pagination pagination-lg mb-0">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="..."&gt;
  &lt;ul class="pagination pagination-lg"&gt;
    &lt;li class="page-item active" aria-current="page"&gt;
      &lt;span class="page-link"&gt;1&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="..."&gt;
  &lt;ul class="pagination pagination-sm"&gt;
    &lt;li class="page-item active" aria-current="page"&gt;
      &lt;span class="page-link"&gt;1&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h4>Alignment</h4>
            <p>Change the alignment of pagination components with flexbox utilities.</p>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="Page navigation example"&gt;
  &lt;ul class="pagination justify-content-center"&gt;
    &lt;li class="page-item disabled"&gt;
      &lt;a class="page-link" href="#" tabindex="-1" aria-disabled="true"&gt;Previous&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav aria-label="Page navigation example"&gt;
  &lt;ul class="pagination justify-content-end"&gt;
    &lt;li class="page-item disabled"&gt;
      &lt;a class="page-link" href="#" tabindex="-1" aria-disabled="true"&gt;Previous&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
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
