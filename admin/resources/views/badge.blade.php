@extends('layouts.app')

@section('page-title', 'Badge')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for badges, our small count and labeling component.</p>

            <h4>Example</h4>
            <p>Badges scale to match the size of the immediate parent element by using relative font sizing and em
                units. As of v5, badges no longer have focus or hover styles for links.</p>

            <div class="card">
                <div class="card-body">
                    <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                    <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                    <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                    <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                    <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                    <h6>Example heading <span class="badge bg-secondary">New</span></h6>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;h1&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                </div>
            </div>

            <p>Badges can be used as part of links or buttons to provide a counter.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary">
                        Notifications <span class="badge bg-secondary">4</span>
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-primary"&gt;
  Notifications &lt;span class="badge bg-secondary"&gt;4&lt;/span&gt;
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <p>Note that depending on how they are used, badges may be confusing for users of screen readers and similar
                assistive technologies. While the styling of badges provides a visual cue as to their purpose, these
                users will simply be presented with the content of the badge. Depending on the specific situation, these
                badges may seem like random additional words or numbers at the end of a sentence, link, or button.</p>
            <p>Unless the context is clear (as with the “Notifications” example, where it is understood that the “4” is
                the number of notifications), consider including additional context with a visually hidden piece of
                additional text.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary">
                        Profile <span class="badge bg-secondary">9</span>
                        <span class="visually-hidden">unread messages</span>
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-primary"&gt;
  Profile &lt;span class="badge bg-secondary"&gt;9&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;unread messages&lt;/span&gt;
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h4>Background colors</h4>
            <p>Use our background utility classes to quickly change the appearance of a badge. Please note that when
                using Bootstrap’s default <code>.bg-light</code>, you’ll likely need a text color utility like
                <code>.text-dark</code> for proper styling. This is because background utilities do not set anything
                but <code>background-color</code>.</p>

            <div class="card">
                <div class="card-body">
                    <span class="badge bg-primary">Primary</span>
                    <span class="badge bg-secondary">Secondary</span>
                    <span class="badge bg-success">Success</span>
                    <span class="badge bg-danger">Danger</span>
                    <span class="badge bg-warning text-dark">Warning</span>
                    <span class="badge bg-info text-dark">Info</span>
                    <span class="badge bg-light text-dark">Light</span>
                    <span class="badge bg-dark">Dark</span>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;span class="badge bg-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge bg-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge bg-success"&gt;Success&lt;/span&gt;
&lt;span class="badge bg-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge bg-warning text-dark"&gt;Warning&lt;/span&gt;
&lt;span class="badge bg-info text-dark"&gt;Info&lt;/span&gt;
&lt;span class="badge bg-light text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge bg-dark"&gt;Dark&lt;/span&gt;</code></pre>
                </div>
            </div>

            <h4>Pill badges</h4>
            <p>Use the <code>.rounded-pill</code> utility class to make badges more rounded with a larger <code>border-radius</code>.
            </p>

            <div class="card">
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Primary</span>
                    <span class="badge rounded-pill bg-secondary">Secondary</span>
                    <span class="badge rounded-pill bg-success">Success</span>
                    <span class="badge rounded-pill bg-danger">Danger</span>
                    <span class="badge rounded-pill bg-warning text-dark">Warning</span>
                    <span class="badge rounded-pill bg-info text-dark">Info</span>
                    <span class="badge rounded-pill bg-light text-dark">Light</span>
                    <span class="badge rounded-pill bg-dark">Dark</span>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;span class="badge rounded-pill bg-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge rounded-pill bg-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge rounded-pill bg-success"&gt;Success&lt;/span&gt;
&lt;span class="badge rounded-pill bg-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge rounded-pill bg-warning text-dark"&gt;Warning&lt;/span&gt;
&lt;span class="badge rounded-pill bg-info text-dark"&gt;Info&lt;/span&gt;
&lt;span class="badge rounded-pill bg-light text-dark"&gt;Light&lt;/span&gt;
&lt;span class="badge rounded-pill bg-dark"&gt;Dark&lt;/span&gt;</code></pre>
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
