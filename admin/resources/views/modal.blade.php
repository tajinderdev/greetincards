@extends('layouts.app')

@section('page-title', 'Modal')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                notifications, or completely custom content.</p>

            <h4>Examples</h4>

            <h5>Modal components</h5>
            <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code>
                have been overridden). Included are the modal header, modal body (required for <code>padding</code>),
                and modal footer (optional). We ask that you include modal headers with dismiss actions whenever
                possible, or provide another explicit dismiss action.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example bd-example-modal">
                        <div class="modal" tabindex="-1">
                            <div class="modal-dialog border">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="modal" tabindex="-1"&gt;
  &lt;div class="modal-dialog"&gt;
    &lt;div class="modal-content"&gt;
      &lt;div class="modal-header"&gt;
        &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="modal-body"&gt;
        &lt;p&gt;Modal body text goes here.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="modal-footer"&gt;
        &lt;button type="button" class="btn btn-danger" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Live demo</h5>
            <p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top
                of the page.</p>

            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"&gt;
  Launch demo modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
  &lt;div class="modal-dialog"&gt;
    &lt;div class="modal-content"&gt;
      &lt;div class="modal-header"&gt;
        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal title&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="modal-body"&gt;
        ...
      &lt;/div&gt;
      &lt;div class="modal-footer"&gt;
        &lt;button type="button" class="btn btn-danger" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Static backdrop</h5>
            <p>When backdrop is set to static, the modal will not close when clicking outside it. Click the button
                below to try it.</p>

            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"&gt;
  Launch static backdrop modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"&gt;
  &lt;div class="modal-dialog"&gt;
    &lt;div class="modal-content"&gt;
      &lt;div class="modal-header"&gt;
        &lt;h5 class="modal-title" id="staticBackdropLabel"&gt;Modal title&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="modal-body"&gt;
        ...
      &lt;/div&gt;
      &lt;div class="modal-footer"&gt;
        &lt;button type="button" class="btn btn-danger" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Understood&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Scrolling long content</h5>
            <p>When modals become too long for the user’s viewport or device, they scroll independent of the page
                itself. Try the demo below to see what we mean.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLong">
                        Launch demo modal
                    </button>

                    <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p>You can also create a scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code>
                to <code>.modal-dialog</code>.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable">
                        Launch demo modal
                    </button>

                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1"
                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Scrollable modal --&gt;
&lt;div class="modal-dialog modal-dialog-scrollable"&gt;
  ...
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Vertically centered</h5>
            <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.</p>

            <div class="card">
                <div class="card-body">
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
                         aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter">
                        Vertically centered modal
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenteredScrollable">
                        Vertically centered scrollable modal
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Vertically centered modal --&gt;
&lt;div class="modal-dialog modal-dialog-centered"&gt;
  ...
&lt;/div&gt;

&lt;!-- Vertically centered scrollable modal --&gt;
&lt;div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"&gt;
  ...
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Tooltips and popovers</h5>
            <p>Tooltips and popovers can be placed within modals as needed. When modals are closed, any tooltips and
                popovers within are also automatically dismissed.</p>

            <div class="card">
                <div class="card-body">
                    <div class="modal fade" id="exampleModalPopovers" tabindex="-1"
                         aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>This <a href="#" role="button" class="btn btn-secondary popover-test"
                                               title="Popover title"
                                               data-bs-content="Popover body content is set in this attribute."
                                               data-bs-container="#exampleModalPopovers">button</a> triggers a popover
                                        on click.</p>
                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p><a href="#" class="tooltip-test" title="Tooltip"
                                          data-bs-container="#exampleModalPopovers">This link</a> and <a href="#"
                                                                                                         class="tooltip-test"
                                                                                                         title="Tooltip"
                                                                                                         data-bs-container="#exampleModalPopovers">that
                                            link</a> have tooltips on hover.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalPopovers">
                        Launch demo modal
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="modal-body"&gt;
  &lt;h5&gt;Popover in a modal&lt;/h5&gt;
  &lt;p&gt;This &lt;a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-bs-content="Popover body content is set in this attribute."&gt;button&lt;/a&gt; triggers a popover on click.&lt;/p&gt;
  &lt;hr&gt;
  &lt;h5&gt;Tooltips in a modal&lt;/h5&gt;
  &lt;p&gt;&lt;a href="#" class="tooltip-test" title="Tooltip"&gt;This link&lt;/a&gt; and &lt;a href="#" class="tooltip-test" title="Tooltip"&gt;that link&lt;/a&gt; have tooltips on hover.&lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Using the grid</h5>
            <p>Utilize the Bootstrap grid system within a modal by nesting <code>.container-fluid</code> within the
                <code>.modal-body</code>. Then, use the normal grid system classes as you would anywhere else.</p>

            <div class="card">
                <div class="card-body">
                    <div class="modal fade" id="gridSystemModal" tabindex="-1" aria-labelledby="gridModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="gridModalLabel">Grids in modals</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid bd-example-row">
                                        <div class="row">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                            <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                Level 1: .col-sm-9
                                                <div class="row">
                                                    <div class="col-8 col-sm-6">
                                                        Level 2: .col-8 .col-sm-6
                                                    </div>
                                                    <div class="col-4 col-sm-6">
                                                        Level 2: .col-4 .col-sm-6
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gridSystemModal">
                        Launch demo modal
                    </button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="modal-body"&gt;
  &lt;div class="container-fluid"&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
      &lt;div class="col-md-4 ms-auto"&gt;.col-md-4 .ms-auto&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-3 ms-auto"&gt;.col-md-3 .ms-auto&lt;/div&gt;
      &lt;div class="col-md-2 ms-auto"&gt;.col-md-2 .ms-auto&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-6 ms-auto"&gt;.col-md-6 .ms-auto&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-sm-9"&gt;
        Level 1: .col-sm-9
        &lt;div class="row"&gt;
          &lt;div class="col-8 col-sm-6"&gt;
            Level 2: .col-8 .col-sm-6
          &lt;/div&gt;
          &lt;div class="col-4 col-sm-6"&gt;
            Level 2: .col-4 .col-sm-6
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Varying modal content</h5>
            <p>Have a bunch of buttons that all trigger the same modal with slightly different contents? Use <code>event.relatedTarget</code>
                and <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes">HTML
                    <code>data-bs-*</code> attributes</a> to vary the contents of the modal depending on which
                button was clicked.</p>
            <p>Below is a live demo followed by example HTML and JavaScript. For more information, <a href="#">read
                    the modal events docs</a> for details on <code>relatedTarget</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalVarying" data-bs-whatever="@mdo">Open modal for @mdo
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalVarying" data-bs-whatever="@fat">Open modal for @fat
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalVarying" data-bs-whatever="@getbootstrap">Open modal for
                            @getbootstrap
                        </button>

                        <div class="modal fade" id="exampleModalVarying" tabindex="-1"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalVaryingLabel">New message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"&gt;Open modal for @mdo&lt;/button&gt;
&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"&gt;Open modal for @fat&lt;/button&gt;
&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"&gt;Open modal for @getbootstrap&lt;/button&gt;

&lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
  &lt;div class="modal-dialog"&gt;
    &lt;div class="modal-content"&gt;
      &lt;div class="modal-header"&gt;
        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;New message&lt;/h5&gt;
        &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="modal-body"&gt;
        &lt;form&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="recipient-name" class="col-form-label"&gt;Recipient:&lt;/label&gt;
            &lt;input type="text" class="form-control" id="recipient-name"&gt;
          &lt;/div&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="message-text" class="col-form-label"&gt;Message:&lt;/label&gt;
            &lt;textarea class="form-control" id="message-text"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class="modal-footer"&gt;
        &lt;button type="button" class="btn btn-danger" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Send message&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                        <pre><code class="language-js">var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})</code></pre>
                </div>
            </div>

            <h5>Change animation</h5>
            <p>The <code>$modal-fade-transform</code> variable determines the transform state of
                <code>.modal-dialog</code> before the modal fade-in animation, the
                <code>$modal-show-transform</code> variable determines the transform of <code>.modal-dialog</code>
                at the end of the modal fade-in animation.</p>
            <p>If you want for example a zoom-in animation, you can set <code>$modal-fade-transform:
                    scale(.8)</code>.</p>

            <h5>Remove animation</h5>
            <p>For modals that simply appear rather than fade in to view, remove the .fade class from your modal
                markup.</p>

            <div class="card">
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="modal" tabindex="-1" aria-labelledby="..." aria-hidden="true"&gt;
  ...
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Optional sizes</h4>
            <p>Modals have three optional sizes, available via modifier classes to be placed on a
                <code>.modal-dialog</code>.
                These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>

            <table class="table">
                <thead>
                <tr>
                    <th>Size</th>
                    <th>Class</th>
                    <th>Modal max-width</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Small</td>
                    <td><code>.modal-sm</code></td>
                    <td><code>300px</code></td>
                </tr>
                <tr>
                    <td>Default</td>
                    <td class="text-muted">None</td>
                    <td><code>500px</code></td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td><code>.modal-lg</code></td>
                    <td><code>800px</code></td>
                </tr>
                <tr>
                    <td>Extra large</td>
                    <td><code>.modal-xl</code></td>
                    <td><code>1140px</code></td>
                </tr>
                </tbody>
            </table>

            <p>Our default modal without modifier class constitutes the “medium” size modal.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalXl">Extra large modal
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalLg">Large modal
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalSm">Small modal
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalXlLabel">Extra large modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalLgLabel">Large modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalSmLabel">Small modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="modal-dialog modal-xl"&gt;...&lt;/div&gt;
&lt;div class="modal-dialog modal-lg"&gt;...&lt;/div&gt;
&lt;div class="modal-dialog modal-sm"&gt;...&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Fullscreen Modal</h4>
            <p>Another override is the option to pop up a modal that covers the user viewport, available via
                modifier classes that are placed on a <code>.modal-dialog</code>.</p>

            <div class="mb-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Class</th>
                        <th>Availability</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><code>.modal-fullscreen</code></td>
                        <td>Always</td>
                    </tr>
                    <tr>
                        <td><code>.modal-fullscreen-sm-down</code></td>
                        <td>Below <code>576px</code></td>
                    </tr>
                    <tr>
                        <td><code>.modal-fullscreen-md-down</code></td>
                        <td>Below <code>768px</code></td>
                    </tr>
                    <tr>
                        <td><code>.modal-fullscreen-lg-down</code></td>
                        <td>Below <code>992px</code></td>
                    </tr>
                    <tr>
                        <td><code>.modal-fullscreen-xl-down</code></td>
                        <td>Below <code>1200px</code></td>
                    </tr>
                    <tr>
                        <td><code>.modal-fullscreen-xxl-down</code></td>
                        <td>Below <code>1400px</code></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreen">Full screen
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreenSm">Full screen below sm
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreenMd">Full screen below md
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreenLg">Full screen below lg
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreenXl">Full screen below xl
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModalFullscreenXxl">Full screen below xxl
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                         aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                         aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-sm-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below
                                        sm</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                         aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below
                                        md</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                         aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-lg-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below
                                        lg</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                         aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-xl-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below
                                        xl</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                         aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-xxl-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4" id="exampleModalFullscreenXxlLabel">Full screen below
                                        xxl</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Full screen modal --&gt;
&lt;div class="modal-dialog modal-fullscreen-sm-down"&gt;
  ...
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
    <script src="{{ url("dist/js/examples/modal.js") }}"></script>
@endsection
