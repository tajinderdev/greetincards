@extends('layouts.app')

@section('page-title', 'Rating')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">

    <!-- Rating -->
    <link rel="stylesheet" href="{{ url("libs/rating/rating.min.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">jQuery Bar Rating Plugin works by transforming a standard select field into a rating widget.
                The rating widget can be flexibly styled with CSS.
                <a href="http://nashio.github.io/star-rating-svg/demo/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="libs/rating/jquery.rating.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic Usage</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="rating-example-1"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="rating-example" data-rating="3.5"&gt;&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Running with javascript:</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$(".rating-example").starRating({
    initialRating: 3.5
});</code></pre>
                </div>
            </div>

            <h4>Rounded Star Shape</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="rating-example-2"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">$(".rating-example").starRating({
    initialRating: 3.5,
    starShape: 'rounded',
});</code></pre>
                </div>
            </div>

            <h4>Use Gradients</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="rating-example-3"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">$(".rating-example").starRating({
    initialRating: 3.5,
    useGradient: false,
});</code></pre>
                </div>
            </div>

            <h4>Read Only Mode</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="rating-example-4"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">$(".rating-example").starRating({
    initialRating: 3.5,
    readOnly: true,
});</code></pre>
                </div>
            </div>

            <h4>Use Fullstars</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="rating-example-5"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">$(".rating-example").starRating({
    initialRating: 3,
    useFullStars: true,
});</code></pre>
                </div>
            </div>

            <h4>On Hover Event</h4>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3 d-flex align-items-center">
                        <div class="rating-example-6"></div>
                        <div class="live-rating ms-3">3.5</div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">$(".rating-example-6").starRating({
    initialRating: 3.5,
    disableAfterRate: false,
    onHover: function(currentIndex, currentRating, $el){
        $('.live-rating').text(currentIndex);
    },
    onLeave: function(currentIndex, currentRating, $el){
        $('.live-rating').text(currentRating);
    }
});</code></pre>
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
    <!-- Rating -->
    <script src="{{ url("libs/rating/jquery.rating.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/rating.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
