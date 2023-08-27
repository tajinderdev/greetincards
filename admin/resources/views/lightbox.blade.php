@extends('layouts.app')

@section('page-title', 'Lightbox')

@section('head')
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ url("libs/lightbox/magnific-popup.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Magnific Popup is a responsive lightbox & dialog script with focus on performance and
                providing best experience for user with any device.
                <a href="https://dimsemenov.com/plugins/magnific-popup/" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/lightbox/magnific-popup.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/lightbox/jquery.magnific-popup.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Basic example</h4>

            <div class="card">
                <div class="card-body">
                    <a class="image-popup" href="{{ url('assets/images/photo1.jpg') }}">
                        <img style="width:18rem;" src="{{ url('assets/images/photo1.jpg') }}" class="img-fluid"
                             alt="image">
                    </a>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;a class="image-popup" href="big-image.jpg"&gt;
  &lt;img src="small-image.jpg" alt="image"&gt;
&lt;/a&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('.image-popup').magnificPopup({
    type: 'image',
    zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function(openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});</code></pre>
                </div>
            </div>

            <h4>Gallery</h4>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                            <a class="image-popup-gallery-item" href="{{ url('assets/images/photo4.jpg') }}">
                                <img src="{{ url('assets/images/photo4.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                            <a class="image-popup-gallery-item" href="{{ url('assets/images/photo5.jpg') }}">
                                <img src="{{ url('assets/images/photo5.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                            <a class="image-popup-gallery-item" href="{{ url('assets/images/photo6.jpg') }}">
                                <img src="{{ url('assets/images/photo6.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                            <a class="image-popup-gallery-item" href="{{ url('assets/images/photo7.jpg') }}">
                                <img src="{{ url('assets/images/photo7.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                            <a class="image-popup-gallery-item" href="{{ url('assets/images/photo8.jpg') }}">
                                <img src="{{ url('assets/images/photo8.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                            <a class="image-popup-gallery-item" href="{{ url('assets/images/photo9.jpg') }}">
                                <img src="{{ url('assets/images/photo9.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row"&gt;
    &lt;div class="col-md-2 m-b-15"&gt;
        &lt;a class="image-popup-gallery-item" href="big-image.jpg"&gt;
            &lt;img src="small-image.jpg" class="img-fluid" alt="image"&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-md-2 m-b-15"&gt;
        &lt;a class="image-popup-gallery-item" href="big-image.jpg"&gt;
            &lt;img src="small-image.jpg" class="img-fluid" alt="image"&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-md-2 m-b-15"&gt;
        &lt;a class="image-popup-gallery-item" href="big-image.jpg"&gt;
            &lt;img src="small-image.jpg" class="img-fluid" alt="image"&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-md-2 m-b-15"&gt;
        &lt;a class="image-popup-gallery-item" href="big-image.jpg"&gt;
            &lt;img src="small-image.jpg" class="img-fluid" alt="image"&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-md-2 m-b-15"&gt;
        &lt;a class="image-popup-gallery-item" href="big-image.jpg"&gt;
            &lt;img src="small-image.jpg" class="img-fluid" alt="image"&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-md-2 m-b-15"&gt;
        &lt;a class="image-popup-gallery-item" href="big-image.jpg"&gt;
            &lt;img src="small-image.jpg" class="img-fluid" alt="image"&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">let magnificPopupGalleryConfig = {
    type: 'image',
    gallery: {
        enabled: true
    },
    zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function(openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
};

$('.image-popup-gallery-item').magnificPopup(magnificPopupGalleryConfig);</code></pre>
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
    <!-- Lightbox -->
    <script src="{{ url("libs/lightbox/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ url("dist/js/examples/lightbox.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
