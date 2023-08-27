@extends('layouts.app')

@section('page-title', 'Form Repeater')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Creates an interface to add and remove a repeatable group of input elements. <a
                    href="https://github.com/DubFriend/jquery.repeater" target="_blank">Demo page</a>.</p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="libs/form-repeater/repeater.min.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Repeating Forms</h4>

            <div class="card">
                <div class="card-body">
                    <form class="repeater-1">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="email" class="form-control" name="name" id="name"
                                               placeholder="Enter email id">
                                    </div>
                                    <div class="col-md-3 col-sm-12 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Enter email id">
                                    </div>
                                    <div class="col-md-3 col-sm-12 mb-3">
                                        <label for="profession" class="form-label">Profession</label>
                                        <select name="profession" id="profession" class="form-control">
                                            <option>Select</option>
                                            <option value="FontEnd Developer">Designer</option>
                                            <option value="BackEnd Developer">Developer</option>
                                            <option value="Business Analytics">Tester</option>
                                            <option value="Project Coordinator">Manager</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div><label class="form-label">&nbsp;</label></div>
                                        <button class="btn btn-danger" data-repeater-delete>Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-repeater-create>Add</button>
                    </form>
                </div>
                <div class="demo-code-preview">
                <pre><code class="language-html">&lt;form class="repeater-1"&gt;
    &lt;div data-repeater-list="group-a"&gt;
        &lt;div data-repeater-item&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-3 col-sm-12 mb-3"&gt;
                    &lt;label for="name" class="form-label"&gt;Name&lt;/label&gt;
                    &lt;input type="email" class="form-control" name="name" id="name" placeholder="Enter email id"&gt;
                &lt;/div&gt;
                &lt;div class="col-md-3 col-sm-12 mb-3"&gt;
                    &lt;label for="email" class="form-label"&gt;Email&lt;/label&gt;
                    &lt;input type="email" class="form-control" name="email" id="email" placeholder="Enter email id"&gt;
                &lt;/div&gt;
                &lt;div class="col-md-3 col-sm-12 mb-3"&gt;
                    &lt;label for="profession" class="form-label"&gt;Profession&lt;/label&gt;
                    &lt;select name="profession" id="profession" class="form-control"&gt;
                        &lt;option&gt;Select&lt;/option&gt;
                        &lt;option value="FontEnd Developer"&gt;Designer&lt;/option&gt;
                        &lt;option value="BackEnd Developer"&gt;Developer&lt;/option&gt;
                        &lt;option value="Business Analytics"&gt;Tester&lt;/option&gt;
                        &lt;option value="Project Coordinator"&gt;Manager&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                &lt;div class="col-md-3 col-sm-12"&gt;
                    &lt;div&gt;&lt;label class="form-label"&gt;&nbsp;&lt;/label&gt;&lt;/div&gt;
                    &lt;button class="btn btn-danger" data-repeater-delete&gt;Delete&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="button" class="btn btn-primary" data-repeater-create&gt;Add&lt;/button&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                <pre><code class="language-js">$(document).ready(function () {
    $('.repeater-1').repeater();
});</code></pre>
                </div>
            </div>

            <h4>Alert Repeating</h4>
            <p>An example that warns before the row is deleted.</p>

            <div class="card">
                <div class="card-body">
                    <form class="repeater-2">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                               placeholder="Username">
                                    </div>
                                    <div class="col-md-2 col-sm-12 mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                               placeholder="Enter email id">
                                    </div>
                                    <div class="col-md-2 col-sm-12 mb-3">
                                        <div><label class="form-label">&nbsp;</label></div>
                                        <button type="button" class="btn btn-danger btn-floating" data-repeater-delete>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-repeater-create>Add</button>
                    </form>
                </div>
                <div class="demo-code-preview">
                <pre><code class="language-html">&lt;form class="repeater-2"&gt;
    &lt;button type="button" class="btn btn-primary mb-3" data-repeater-create&gt;Add&lt;/button&gt;
    &lt;div data-repeater-list="group-a"&gt;
        &lt;div data-repeater-item&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-2 col-sm-12 mb-3"&gt;
                    &lt;label for="username" class="form-label"&gt;Username&lt;/label&gt;
                    &lt;input type="text" class="form-control" name="username" id="username" placeholder="Username"&gt;
                &lt;/div&gt;
                &lt;div class="col-md-2 col-sm-12 mb-3"&gt;
                    &lt;label for="phone" class="form-label"&gt;Phone&lt;/label&gt;
                    &lt;input type="text" class="form-control" name="phone" id="phone" placeholder="Enter email id"&gt;
                &lt;/div&gt;
                &lt;div class="col-md-2 col-sm-12 mb-3"&gt;
                    &lt;div&gt;&lt;label class="form-label"&gt;&nbsp;&lt;/label&gt;&lt;/div&gt;
                    &lt;button type="button" class="btn btn-danger btn-floating" data-repeater-delete&gt;
                        Delete
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                <pre><code class="language-js">$('.repeater-2').repeater({
    hide: function (deleteElement) {
        swal({
            title: "Are you sure?",
            text: "Are you sure you want to delete this element?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) =&gt; {
            if (willDelete) {
                $(this).slideUp(deleteElement);
            }
        })
    }
});</code></pre>
                </div>
            </div>

            <h4>Nested Repeating</h4>

            <div class="card">
                <div class="card-body">
                    <form class="nested-repeater">
                        <div data-repeater-list="outer-list">
                            <div class="mb-3" data-repeater-item>
                                <p>Category</p>
                                <div class="d-flex mb-3">
                                    <input type="text" class="form-control" name="text-input"/>
                                    <button class="btn btn-danger flex-shrink-0 ms-3" data-repeater-delete
                                            type="button">
                                        Delete
                                    </button>
                                </div>

                                <!-- innner repeater -->
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <p>Products</p>
                                        <div class="inner-repeater">
                                            <div data-repeater-list="inner-list">
                                                <div class="d-flex mb-3" data-repeater-item>
                                                    <input type="text" class="form-control" name="inner-text-input"/>
                                                    <button class="btn btn-danger flex-shrink-0 ms-3"
                                                            data-repeater-delete type="button">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" data-repeater-create type="button">
                                                Add Product
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" data-repeater-create type="button">
                            Add Category
                        </button>
                    </form>
                </div>
                <div class="demo-code-preview">
                <pre><code class="language-html">&lt;form class="nested-repeater"&gt;
    &lt;div data-repeater-list="outer-list"&gt;
        &lt;div class="mb-3" data-repeater-item&gt;
            &lt;p&gt;Category&lt;/p&gt;
            &lt;div class="d-flex mb-3"&gt;
                &lt;input type="text" class="form-control" name="text-input"/&gt;
                &lt;button class="btn btn-danger flex-shrink-0 ms-3" data-repeater-delete type="button"&gt;
                    Delete
                &lt;/button&gt;
            &lt;/div&gt;

            &lt;!-- innner repeater --&gt;
            &lt;div class="card bg-light"&gt;
                &lt;div class="card-body"&gt;
                    &lt;p&gt;Products&lt;/p&gt;
                    &lt;div class="inner-repeater"&gt;
                        &lt;div data-repeater-list="inner-list"&gt;
                            &lt;div class="d-flex mb-3" data-repeater-item&gt;
                                &lt;input type="text" class="form-control" name="inner-text-input"/&gt;
                                &lt;button class="btn btn-danger flex-shrink-0 ms-3" data-repeater-delete type="button"&gt;
                                    Delete
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;button class="btn btn-primary" data-repeater-create type="button"&gt;
                            Add Product
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-primary" data-repeater-create type="button"&gt;
        Add Category
    &lt;/button&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                <pre><code class="language-js">$('.nested-repeater').repeater({
    repeaters: [{
        selector: '.inner-repeater'
    }]
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
    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>

    <!-- Form repeater -->
    <script src="{{ url("libs/form-repeater/repeater.min.js") }}"></script>

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/form-repeater.js") }}"></script>
@endsection
