@extends('layouts.app')

@section('page-title', 'Toasts')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Push notifications to your visitors with a toast, a lightweight and easily customizable
                alert message.</p>

            <h4>Examples</h4>

            <h5>Basic</h5>
            <p>To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use
                <code>display: flex</code>, allowing easy alignment of content thanks to our margin and flexbox
                utilities.</p>
            <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a
                single element to contain your “toasted” content and strongly encourage a dismiss button.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                     preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#007aff"/>
                                </svg>
                                <strong class="me-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
  &lt;div class="toast-header"&gt;
    &lt;img src="..." class="rounded me-2" alt="..."&gt;
    &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
    &lt;small&gt;11 mins ago&lt;/small&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="toast-body"&gt;
    Hello, world! This is a toast message.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Translucent</h5>
            <p>Toasts are slightly translucent, too, so they blend over whatever they might appear over. For
                browsers that support the <code>backdrop-filter</code> CSS property, we’ll also attempt to blur the
                elements under a toast.</p>

            <div class="card">
                <div class="card-body bg-dark">
                    <div class="bd-example">
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                     preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#007aff"/>
                                </svg>
                                <strong class="me-auto">Bootstrap</strong>
                                <small class="text-muted">11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
  &lt;div class="toast-header"&gt;
    &lt;img src="..." class="rounded me-2" alt="..."&gt;
    &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
    &lt;small class="text-muted"&gt;11 mins ago&lt;/small&gt;
    &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="toast-body"&gt;
    Hello, world! This is a toast message.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Stacking</h5>
            <p>You can stack toasts by wrapping them in a toast container, which will vertically add some
                spacing.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="toast-container">
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#007aff"/>
                                    </svg>
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-muted">just now</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    See? Just like this.
                                </div>
                            </div>

                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#007aff"/>
                                    </svg>
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-muted">2 seconds ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Heads up, toasts will stack automatically
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="toast-container"&gt;
  &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="..." class="rounded me-2" alt="..."&gt;
      &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
      &lt;small class="text-muted"&gt;just now&lt;/small&gt;
      &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      See? Just like this.
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="..." class="rounded me-2" alt="..."&gt;
      &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
      &lt;small class="text-muted"&gt;2 seconds ago&lt;/small&gt;
      &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      Heads up, toasts will stack automatically
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Custom content</h5>
            <p>Customize your toasts by removing sub-components, tweaking with utilities, or adding your own markup.
                Here we’ve created a simpler toast by removing the default <code>.toast-header</code>, adding a
                custom hide icon
                from Bootstrap Icons, and using some flexbox utilities to adjust the layout.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="toast show d-flex align-items-center" role="alert" aria-live="assertive"
                             aria-atomic="true">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                            <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="toast d-flex align-items-center" role="alert" aria-live="assertive" aria-atomic="true"&gt;
  &lt;div class="toast-body"&gt;
    Hello, world! This is a toast message.
  &lt;/div&gt;
  &lt;button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Alternatively, you can also add additional controls and components to toasts.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                                <div class="mt-2 pt-2 border-top">
                                    <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
  &lt;div class="toast-body"&gt;
    Hello, world! This is a toast message.
    &lt;div class="mt-2 pt-2 border-top"&gt;
      &lt;button type="button" class="btn btn-primary btn-sm"&gt;Take action&lt;/button&gt;
      &lt;button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast"&gt;Close&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Color schemes</h5>
            <p>Building on the above example, you can create different toast color schemes with our color utilities.
                Here we’ve added
                <code>.bg-primary</code> and <code>.text-white</code> to the <code>.toast</code>, and then added
                <code>.text-white</code> to our close button. For a crisp edge, we remove the default border with
                <code>.border-0</code>.</p>

            <div class="card mb-5">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="toast show d-flex align-items-center text-white bg-primary border-0" role="alert"
                             aria-live="assertive" aria-atomic="true">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                            <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="toast d-flex align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true"&gt;
  &lt;div class="toast-body"&gt;
    Hello, world! This is a toast message.
  &lt;/div&gt;
  &lt;button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Placement</h4>
            <p>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is
                the top middle. If you’re only ever going to show one toast at a time, put the positioning styles
                right on the <code>.toast</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <form>
                            <div class="form-group mb-3">
                                <label for="selectToastPlacement">Toast placement</label>
                                <select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="" selected>Select a position...</option>
                                    <option value="top-0 start-0">Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center</option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                    <option value="top-50 start-50 translate-middle">Middle center</option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select>
                            </div>
                        </form>
                        <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
                            <div class="toast-container position-absolute p-3" id="toastPlacement">
                                <div class="toast show">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                             preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#007aff"/>
                                        </svg>
                                        <strong class="me-auto">Bootstrap</strong>
                                        <small>11 mins ago</small>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;form&gt;
  &lt;div class="form-group mb-3"&gt;
    &lt;label for="selectToastPlacement"&gt;Toast placement&lt;/label&gt;
    &lt;select class="form-select mt-2" id="selectToastPlacement"&gt;
      &lt;option value="" selected&gt;Select a position...&lt;/option&gt;
      &lt;option value="top-0 start-0"&gt;Top left&lt;/option&gt;
      &lt;option value="top-0 start-50 translate-middle-x"&gt;Top center&lt;/option&gt;
      &lt;option value="top-0 end-0"&gt;Top right&lt;/option&gt;
      &lt;option value="top-50 start-0 translate-middle-y"&gt;Middle left&lt;/option&gt;
      &lt;option value="top-50 start-50 translate-middle"&gt;Middle center&lt;/option&gt;
      &lt;option value="top-50 end-0 translate-middle-y"&gt;Middle right&lt;/option&gt;
      &lt;option value="bottom-0 start-0"&gt;Bottom left&lt;/option&gt;
      &lt;option value="bottom-0 start-50 translate-middle-x"&gt;Bottom center&lt;/option&gt;
      &lt;option value="bottom-0 end-0"&gt;Bottom right&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
&lt;/form&gt;
&lt;div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts"&gt;
  &lt;div class="toast-container position-absolute p-3" id="toastPlacement"&gt;
    &lt;div class="toast"&gt;
      &lt;div class="toast-header"&gt;
        &lt;img src="..." class="rounded me-2" alt="..."&gt;
        &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;/div&gt;
      &lt;div class="toast-body"&gt;
        Hello, world! This is a toast message.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>For systems that generate more notifications, consider using a wrapping element so they can easily stack.</p>

            <div class="card">
                <div class="card-body bg-dark">
                    <div aria-live="polite" aria-atomic="true" class="bd-example bd-example-toasts position-relative">
                        <!-- Position it: -->
                        <!-- - `.toast-container` for spacing between toasts -->
                        <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                        <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
                        <div class="toast-container position-absolute top-0 end-0 p-3">

                            <!-- Then put toasts within -->
                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#007aff"/>
                                    </svg>
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-muted">just now</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    See? Just like this.
                                </div>
                            </div>

                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                         preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#007aff"/>
                                    </svg>
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-muted">2 seconds ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Heads up, toasts will stack automatically
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div aria-live="polite" aria-atomic="true" class="position-relative"&gt;
  &lt;!-- Position it: --&gt;
  &lt;!-- - `.toast-container` for spacing between toasts --&gt;
  &lt;!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner --&gt;
  &lt;!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  --&gt;
  &lt;div class="toast-container position-absolute top-0 end-0 p-3"&gt;

    &lt;!-- Then put toasts within --&gt;
    &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
      &lt;div class="toast-header"&gt;
        &lt;img src="..." class="rounded me-2" alt="..."&gt;
        &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
        &lt;small class="text-muted"&gt;just now&lt;/small&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="toast-body"&gt;
        See? Just like this.
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
      &lt;div class="toast-header"&gt;
        &lt;img src="..." class="rounded me-2" alt="..."&gt;
        &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
        &lt;small class="text-muted"&gt;2 seconds ago&lt;/small&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="toast-body"&gt;
        Heads up, toasts will stack automatically
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.</p>

            <div class="card">
                <div class="card-body bg-dark">
                    <!-- Flexbox container for aligning the toasts -->
                    <div aria-live="polite" aria-atomic="true" class="bd-example bd-example-toasts d-flex justify-content-center align-items-center w-100">

                        <!-- Then put toasts within -->
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                     xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                     preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#007aff"/>
                                </svg>
                                <strong class="me-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Flexbox container for aligning the toasts --&gt;
&lt;div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100"&gt;

  &lt;!-- Then put toasts within --&gt;
  &lt;div class="toast" role="alert" aria-live="assertive" aria-atomic="true"&gt;
    &lt;div class="toast-header"&gt;
      &lt;img src="..." class="rounded me-2" alt="..."&gt;
      &lt;strong class="me-auto"&gt;Bootstrap&lt;/strong&gt;
      &lt;small&gt;11 mins ago&lt;/small&gt;
      &lt;button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="toast-body"&gt;
      Hello, world! This is a toast message.
    &lt;/div&gt;
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

    <!-- Examples -->
    <script src="{{ url("dist/js/examples/toast.js") }}"></script>
@endsection
