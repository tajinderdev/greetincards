@extends('layouts.app')

@section('page-title', 'Avatar')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <h4>Basic example</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar">
                        <img src="{{ url('assets/images/user/man_avatar5.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="avatar"&gt;
   &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Shapes</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar me-1">
                        <img src="{{ url('assets/images/user/man_avatar5.jpg') }}" alt="image">
                    </div>
                    <div class="avatar me-1">
                        <img src="{{ url('assets/images/user/man_avatar2.jpg') }}" class="rounded" alt="image">
                    </div>
                    <div class="avatar">
                        <img src="{{ url('assets/images/user/women_avatar5.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="avatar"&gt;
    &lt;img src="avatar.jpg" alt="avatar"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
    &lt;img src="avatar.jpg" class="rounded" alt="avatar"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
    &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Sizes</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar avatar-xl me-1">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar avatar-lg me-1">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar avatar-sm">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="avatar avatar-xl"&gt;
   &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
   &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
   &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
   &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Text</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar avatar-xl me-1">
                        <span class="avatar-text rounded-circle">A</span>
                    </div>
                    <div class="avatar avatar-lg me-1">
                        <span class="avatar-text rounded-circle">B</span>
                    </div>
                    <div class="avatar me-1">
                        <span class="avatar-text rounded-circle">C</span>
                    </div>
                    <div class="avatar avatar-sm">
                        <span class="avatar-text rounded-circle">D</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="avatar avatar-xl"&gt;
  &lt;span class="avatar-text rounded-circle"&gt;A&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
  &lt;span class="avatar-text rounded-circle"&gt;B&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
  &lt;span class="avatar-text rounded-circle"&gt;C&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
  &lt;span class="avatar-text rounded-circle"&gt;D&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Link</h4>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <a href="#" class="avatar me-2">
                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}" class="rounded-circle" alt="image">
                        </a>
                        <a href="#" class="avatar">
                            <span class="avatar-text rounded-circle">A</span>
                        </a>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;a href="#" class="avatar"&gt;
    &lt;img src="{{ url('avatar.jpg') }}" class="rounded-circle" alt="image"&gt;
&lt;/a&gt;

&lt;a href="#" class="avatar"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;A&lt;/span&gt;
&lt;/a&gt;</code></pre>
                </div>
            </div>

            <h4>Colors</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar avatar-primary me-1">
                        <span class="avatar-text rounded-circle">P</span>
                    </div>
                    <div class="avatar avatar-secondary me-1">
                        <span class="avatar-text rounded-circle">S</span>
                    </div>
                    <div class="avatar avatar-success me-1">
                        <span class="avatar-text rounded-circle">S</span>
                    </div>
                    <div class="avatar avatar-danger me-1">
                        <span class="avatar-text rounded-circle">D</span>
                    </div>
                    <div class="avatar avatar-warning me-1">
                        <span class="avatar-text rounded-circle">W</span>
                    </div>
                    <div class="avatar avatar-info me-1">
                        <span class="avatar-text rounded-circle">I</span>
                    </div>
                    <div class="avatar avatar-light me-1">
                        <span class="avatar-text rounded-circle">L</span>
                    </div>
                    <div class="avatar avatar-dark">
                        <span class="avatar-text rounded-circle">D</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="avatar avatar-primary me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;P&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-secondary me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;S&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-success me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;S&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-danger me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;D&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-warning me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;W&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-info me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;I&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-light me-1"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;L&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-dark"&gt;
    &lt;span class="avatar-text rounded-circle"&gt;D&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>State icon</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar me-1 avatar-state-primary">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar avatar-state-secondary">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-success">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-danger">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-warning">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-info">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-light">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-dark">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="avatar avatar-state-primary"&gt;
    &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="avatar me-1 avatar-xl avatar-state-primary">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-lg avatar-state-primary">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-state-primary">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="avatar me-1 avatar-sm avatar-state-primary">
                        <img src="{{ url('assets/images/user/man_avatar1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="avatar avatar-xl avatar-state-primary"&gt;
    &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Avatar group</h4>

            <div class="card">
                <div class="card-body">
                    <div class="avatar-group">
                        <div class="avatar avatar-success">
                            <span class="avatar-text rounded-circle">E</span>
                        </div>
                        <div class="avatar">
                            <img src="{{ url('assets/images/user/man_avatar5.jpg') }}" class="rounded-circle" alt="avatar">
                        </div>
                        <div class="avatar avatar-danger">
                            <span class="avatar-text rounded-circle">S</span>
                        </div>
                        <div class="avatar">
                            <img src="{{ url('assets/images/user/women_avatar3.jpg') }}" class="rounded-circle" alt="avatar">
                        </div>
                        <div class="avatar avatar-primary">
                            <span class="avatar-text rounded-circle">C</span>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="avatar-group"&gt;
    &lt;div class="avatar avatar-success"&gt;
        &lt;span class="avatar-text rounded-circle"&gt;E&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
        &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
    &lt;/div&gt;
    &lt;div class="avatar avatar-danger"&gt;
        &lt;span class="avatar-text rounded-circle"&gt;S&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
        &lt;img src="avatar.jpg" class="rounded-circle" alt="avatar"&gt;
    &lt;/div&gt;
    &lt;div class="avatar avatar-primary"&gt;
        &lt;span class="avatar-text rounded-circle"&gt;C&lt;/span&gt;
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
