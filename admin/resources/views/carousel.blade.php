@extends('layouts.app')

@section('page-title', 'Carousel')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">A slideshow component for cycling through elements—images or slides of text—like a
                carousel.</p>

            <h4>Example</h4>
            <p>Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional
                utilities or custom styles to appropriately size content. While carousels support previous/next
                controls and indicators, they’re not explicitly required. Add and customize as you see fit.</p>
            <p><strong>The <code>.active</code> class needs to be added to one of the slides</strong> otherwise the
                carousel will not be visible. Also be sure to set a unique id on the <code>.carousel</code> for
                optional controls, especially if you’re using multiple carousels on a single page. Control and
                indicator elements must have a <code>data-bs-target</code> attribute (or <code>href</code> for
                links) that matches the id of the <code>.carousel</code> element.</p>


            <h5>Slides only</h5>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and
                <code>.w-100</code> on carousel images to prevent browser default image alignment.</p>

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-1.jpg') }}" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-2.jpg') }}" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>With controls</h5>
            <p>Adding in the previous and next controls:</p>

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-1.jpg') }}" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-2.jpg') }}" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"&gt;
    &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"&gt;
    &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>With indicators</h5>
            <p>You can also add the indicators to the carousel, alongside the controls, too.</p>

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-1.jpg') }}" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-2.jpg') }}" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"&gt;
  &lt;ol class="carousel-indicators"&gt;
    &lt;li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"&gt;&lt;/li&gt;
    &lt;li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"&gt;&lt;/li&gt;
    &lt;li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"&gt;&lt;/li&gt;
  &lt;/ol&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev"&gt;
    &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next"&gt;
    &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>With captions</h5>
            <p>Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>.
                They can be easily hidden on smaller viewports, as shown below, with optional display utilities. We
                hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with
                <code>.d-md-block</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-1.jpg') }}" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-2.jpg') }}" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                           data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                           data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"&gt;
  &lt;ol class="carousel-indicators"&gt;
    &lt;li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"&gt;&lt;/li&gt;
    &lt;li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"&gt;&lt;/li&gt;
    &lt;li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"&gt;&lt;/li&gt;
  &lt;/ol&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
      &lt;div class="carousel-caption d-none d-md-block"&gt;
        &lt;h5&gt;First slide label&lt;/h5&gt;
        &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
      &lt;div class="carousel-caption d-none d-md-block"&gt;
        &lt;h5&gt;Second slide label&lt;/h5&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
      &lt;div class="carousel-caption d-none d-md-block"&gt;
        &lt;h5&gt;Third slide label&lt;/h5&gt;
        &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev"&gt;
    &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next"&gt;
    &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Crossfade</h5>
            <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of
                a slide.</p>

            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-1.jpg') }}" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="{{ url('assets/images/carousel-2.jpg') }}" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="..." class="d-block w-100" alt="..."&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev"&gt;
    &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next"&gt;
    &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
    &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
  &lt;/a&gt;
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
