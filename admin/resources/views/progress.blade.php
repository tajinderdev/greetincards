@extends('layouts.app')

@section('page-title', 'Progress')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for using Bootstrap custom progress bars featuring support
                for stacked bars, animated backgrounds, and text labels.</p>

            <h4>Basic Examples</h4>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Bootstrap provides a handful of utilities for setting width. Depending on your needs, these may help with
                quickly configuring progress.</p>

            <div class="card">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Labels</h4>
            <p>Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;25%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Height</h4>
            <p>We only set a <code>height</code> value on the <code>.progress</code>, so if you change that value
                the inner <code>.progress-bar</code> will automatically resize accordingly.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress" style="height: 1px;"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress" style="height: 20px;"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Backgrounds</h4>
            <p>Use background utility classes to change the appearance of individual progress bars.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Multiple bars</h4>
            <p>Include multiple progress bars in a progress component if you need.</p>

            <div class="card">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                             aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                             aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
  &lt;div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Striped</h4>
            <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS
                gradient over the progress bar’s background color.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                 aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                 style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                 style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Animated stripes</h4>
            <p>The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to
                <code>.progress-bar</code>
                to animate the stripes right to left via CSS3 animations.</p>

            <div class="card">
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="progress"&gt;
  &lt;div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"&gt;&lt;/div&gt;
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
