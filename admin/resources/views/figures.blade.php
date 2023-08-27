@extends('layouts.app')

@section('page-title', 'Figures')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="mb-5">
                <p class="lead">Documentation and examples for displaying related images and text with the figure
                    component in Bootstrap.</p>
            </div>

            <div class="mb-4">
                <p>Anytime you need to display a piece of content—like an image with an optional caption, consider using
                    a
                    <code>&lt;figure&gt;</code>.</p>
                <p>Use the included <code>.figure</code>, <code>.figure-img</code> and <code>.figure-caption</code>
                    classes
                    to provide some baseline styles for the HTML5 <code>&lt;figure&gt;</code> and
                    <code>&lt;figcaption&gt;</code> elements. Images in figures have no explicit size, so be sure to add
                    the
                    <code>.img-fluid</code> class to your <code>&lt;img&gt;</code> to make it responsive.</p>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="row">
                            <div class="col-md-4">
                                <figure class="figure">
                                    <img class="figure-img img-fluid rounded" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;figure class="figure"&gt;
  &lt;img src="..." class="figure-img img-fluid rounded" alt="..."&gt;
  &lt;figcaption class="figure-caption"&gt;A caption for the above image.&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                </div>
            </div>

            <div class="mb-4">
                <p>Aligning the figure’s caption is easy with our text utilities.</p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="row">
                            <div class="col-md-4">
                                <figure class="figure">
                                    <img class="figure-img img-fluid rounded"
                                         src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                    <figcaption class="figure-caption text-end">A caption for the above image.
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;figure class="figure"&gt;
  &lt;img src="..." class="figure-img img-fluid rounded" alt="..."&gt;
  &lt;figcaption class="figure-caption text-end"&gt;A caption for the above image.&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
