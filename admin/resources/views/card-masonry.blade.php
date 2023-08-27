@extends('layouts.app')

@section('page-title', 'Card Masonry')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 bd-content">

            <p class="lead">Integrate <a target="_blank" href="https://masonry.desandro.com/">Masonry</a> with the Bootstrap grid system and cards component.</p>

            <p>Masonry is not included in Bootstrap. Add it by including the JavaScript plugin manually, or using a CDN like so:</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="libs/masonry.pkgd.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <p>By adding <code>data-masonry='{"percentPosition": true }'</code> to the <code>.row</code> wrapper, we can combine the powers of Bootstrap's responsive grid and Masonry's positioning.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row" data-masonry='{"percentPosition": true }'>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <figure class="p-3 mb-0">
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0 text-muted">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0">
                                <img class="img-fluid rounded" src="{{ url('assets/images/photo1.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, officiis.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 bg-primary text-white border-0">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores aspernatur atque aut corporis delectus iure unde voluptas. Doloribus, veniam.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="card-title mb-4">Card title</h6>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto distinctio esse quia quo. Cupiditate delectus dolorum hic nihil quidem quis.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row" data-masonry='{"percentPosition": true }'&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="card mb-4"&gt;
            &lt;div class="card-body"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="card mb-4"&gt;
            &lt;div class="card-body"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="card mb-4"&gt;
            &lt;div class="card-body"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="card mb-4"&gt;
            &lt;div class="card-body"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="card mb-4"&gt;
            &lt;div class="card-body"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="card mb-4"&gt;
            &lt;div class="card-body"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>

    <script src="{{ url('libs/masonry.pkgd.min.js') }}"></script>
@endsection
