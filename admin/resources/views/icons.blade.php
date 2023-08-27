@extends('layouts.app')

@section('page-title', 'Icons')

@section('head')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url("dist/icons/font-awesome/css/font-awesome.min.css") }}" type="text/css">

    <!-- Themify icons -->
    <link rel="stylesheet" href="{{ url("dist/icons/themify-icons/themify-icons.css") }}" type="text/css">

    <!-- Weather icons -->
    <link rel="stylesheet" href="{{ url("dist/icons/weather/css/weather.min.css") }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead"><strong>Vetra</strong>, includes icon fonts for you to use. To use the icons, you can follow the steps below.</p>

            <h4>Font Awesome</h4>

            <p>To use these icons, you must add them to the page. Click <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">here</a> to find more icons that
                you can use.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="dist/icons/font-awesome/css/font-awesome.min.css" type="text/css"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-info-circle"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-user-o"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-smile-o"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-truck"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-file"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-yoast"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-window-minimize"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-download"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-xing"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-warning"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-upload"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-database"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-vimeo"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-envelope-open-o"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;i class="fa fa-info-circle"&gt;&lt;/i&gt;</code></pre>
                </div>
            </div>

            <h4>Themify icons</h4>

            <p>To use these icons, you must add them to the page. Click <a href="https://themify.me/themify-icons" target="_blank">here</a> to find more icons that you can
                use.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="dist/icons/themify-icons/themify-icons.css" type="text/css"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-hand-open"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-facebook"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-menu"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-agenda"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-face-sad"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-check"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-close"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-angle-left"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-bell"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-blackboard"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-apple"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-alert"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-book"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-gallery"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-key"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-settings"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-crown"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="ti-mouse-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;i class="ti-gallery"&gt;&lt;/i&gt;</code></pre>
                </div>
            </div>

            <h4>Weather icons</h4>

            <p>To use these icons, you must add them to the page. Click <a href="https://themes-pixeden.com/font-demos/the-icons-set/weather/" target="_blank">here</a> to
                find more icons that you can use.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="dist/icons/weather/css/weather.min.css" type="text/css"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-thermometer-1-f"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-cloud-down"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-drop"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-eclipse-1"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-fog-1"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-hail-1"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-heavy-hail-night"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-moon-1"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-partly-cloudy-1"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-umbrella"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-wind-2"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-moon-last-quarter-f"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-sun-horizon-1-f"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-drizzle-f"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-partly-cloudy-1-f"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-wind-cone-f"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-full-moon-3"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-6">
                            <div class="demo-icon-list">
                                <i class="pe-is-w-moon-sea"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;i class="pe-is-w-umbrella"&gt;&lt;/i&gt;</code></pre>
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
