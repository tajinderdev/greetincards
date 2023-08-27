@extends('layouts.app')

@section('page-title', 'Dropdowns')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Toggle contextual overlays for displaying lists of links and more with the Bootstrap
                dropdown plugin.</p>

            <h4>Examples</h4>
            <p>Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <code>.dropdown</code>,
                or another element that declares <code>position: relative;</code>. Dropdowns can be triggered from
                <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements to better fit your potential needs.
                The examples shown here use semantic <code>&lt;ul&gt;</code> elements where appropriate, but custom
                markup is supported.</p>

            <h5>Single button</h5>
            <p>Any single <code>.btn</code> can be turned into a dropdown toggle with some markup changes. Here’s
                how you can put them to work with either <code>&lt;button&gt;</code> elements:</p>

            <div class="card">
                <div class="card-body">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="dropdown"&gt;
  &lt;button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropdown button
  &lt;/button&gt;
  &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>And with <code>&lt;a&gt;</code> elements:</p>

            <div class="card">
                <div class="card-body">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="dropdown"&gt;
  &lt;a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropdown link
  &lt;/a&gt;

  &lt;ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>The best part is you can do this with any button variant, too:</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Primary
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Secondary
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Success
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Info
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Danger
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Action
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Split button</h5>
            <p>Similarly, create split button dropdowns with virtually the same markup as single button dropdowns,
                but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown
                caret.</p>
            <p>We use this extra class to reduce the horizontal <code>padding</code> on either side of the caret by
                25% and remove the <code>margin-left</code> that’s added for regular button dropdowns. Those extra
                changes keep the caret centered in the split button and provide a more appropriately sized hit area
                next to the main button.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group me-1">
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Example split danger button --&gt;
&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-danger"&gt;Action&lt;/button&gt;
  &lt;button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Sizing</h4>
            <p>Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>

            <div class="card">
                <div class="card-body">
                    <!-- Large button groups (default and split) -->
                    <div class="btn-group me-1">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Large button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg" type="button">
                            Large split button
                        </button>
                        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Large button groups (default and split) --&gt;
&lt;div class="btn-group"&gt;
  &lt;button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Large button
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group"&gt;
  &lt;button class="btn btn-secondary btn-lg" type="button"&gt;
    Large split button
  &lt;/button&gt;
  &lt;button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group me-1">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Small button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm" type="button">
                            Small split button
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group"&gt;
  &lt;button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Small button
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="btn-group"&gt;
  &lt;button class="btn btn-secondary btn-sm" type="button"&gt;
    Small split button
  &lt;/button&gt;
  &lt;button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Directions</h4>

            <h5>Dropup</h5>
            <p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</p>

            <div class="card">
                <div class="card-body">
                    <!-- Default dropup button -->
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Dropup
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <!-- Split dropup button -->
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary">
                            Split dropup
                        </button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Default dropup button --&gt;
&lt;div class="btn-group dropup"&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropup
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Split dropup button --&gt;
&lt;div class="btn-group dropup"&gt;
  &lt;button type="button" class="btn btn-secondary"&gt;
    Split dropup
  &lt;/button&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Dropright</h5>
            <p>Trigger dropdown menus at the right of the elements by adding <code>.dropend</code> to the parent
                element.</p>

            <div class="card">
                <div class="card-body">
                    <!-- Default dropend button -->
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Dropright
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <!-- Split dropend button -->
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary">
                            Split dropend
                        </button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropright</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Default dropend button --&gt;
&lt;div class="btn-group dropend"&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropright
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Split dropend button --&gt;
&lt;div class="btn-group dropend"&gt;
  &lt;button type="button" class="btn btn-secondary"&gt;
    Split dropend
  &lt;/button&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropright&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Dropleft</h5>
            <p>Trigger dropdown menus at the left of the elements by adding <code>.dropstart</code> to the parent
                element.</p>

            <div class="card">
                <div class="card-body">
                    <!-- Default dropstart button -->
                    <div class="btn-group dropstart">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Dropstart
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <!-- Split dropstart button -->
                    <div class="btn-group">
                        <div class="btn-group dropstart" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropstart</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-secondary">
                            Split dropstart
                        </button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;!-- Default dropstart button --&gt;
&lt;div class="btn-group dropstart"&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Dropstart
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Split dropstart button --&gt;
&lt;div class="btn-group"&gt;
  &lt;div class="btn-group dropstart" role="group"&gt;
    &lt;button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
      &lt;span class="visually-hidden"&gt;Toggle Dropstart&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;!-- Dropdown menu links --&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;button type="button" class="btn btn-secondary"&gt;
    Split dropstart
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Menu alignment</h4>
            <p>By default, a dropdown menu is automatically positioned 100% from the top and along the left side of
                its parent. Add <code>.dropdown-menu-end</code> to a <code>.dropdown-menu</code> to right align the
                dropdown menu. Directions are mirrored when using Bootstrap in RTL, meaning
                <code>.dropdown-menu-end</code> will appear on the left side.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Right-aligned menu example
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <button class="dropdown-item" type="button">Action</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Another action</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    Right-aligned menu example
  &lt;/button&gt;
  &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;&lt;/li&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;&lt;/li&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Responsive alignment</h5>
            <p>If you want to use responsive alignment, disable dynamic positioning by adding the <code>data-bs-display="static"</code>
                attribute and use the responsive variation classes.</p>
            <p>To align <strong>right</strong> the dropdown menu with the given breakpoint or larger, add <code>.dropdown-menu{-sm|-md|-lg|-xl|-xxl}-end</code>.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                            Left-aligned but right aligned when large screen
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li>
                                <button class="dropdown-item" type="button">Action</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Another action</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"&gt;
    Left-aligned but right aligned when large screen
  &lt;/button&gt;
  &lt;ul class="dropdown-menu dropdown-menu-lg-end"&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;&lt;/li&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;&lt;/li&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>To align <strong>left</strong> the dropdown menu with the given breakpoint or larger, add <code>.dropdown-menu-end</code>
                and <code>.dropdown-menu{-sm|-md|-lg|-xl|-xxl}-start</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                            Right-aligned but left aligned when large screen
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                            <li>
                                <button class="dropdown-item" type="button">Action</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Another action</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group"&gt;
  &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"&gt;
    Right-aligned but left aligned when large screen
  &lt;/button&gt;
  &lt;ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;&lt;/li&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;&lt;/li&gt;
    &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p class="mb-5">Note that you don’t need to add a <code>data-bs-display="static"</code> attribute to
                dropdown buttons in
                navbars, since Popper isn’t used in navbars.</p>

            <h4>Menu content</h4>

            <h5>Headers</h5>
            <p>Add a header to label sections of actions in any dropdown menu.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="dropdown-menu"&gt;
  &lt;li&gt;&lt;h6 class="dropdown-header"&gt;Dropdown header&lt;/h6&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Dividers</h5>
            <p>Separate groups of related menu items with a divider.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="dropdown-menu"&gt;
  &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Text</h5>
            <p>Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll
                likely need additional sizing styles to constrain the menu width.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;">
                            <p>
                                Some example text that's free-flowing within the dropdown menu.
                            </p>
                            <p class="mb-0">
                                And this is more example text.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="dropdown-menu p-4 text-muted" style="max-width: 200px;"&gt;
  &lt;p&gt;
    Some example text that's free-flowing within the dropdown menu.
  &lt;/p&gt;
  &lt;p class="mb-0"&gt;
    And this is more example text.
  &lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Forms</h5>
            <p>Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding
                utilities to give it the negative space you require.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <div class="dropdown-menu">
                            <form class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                           placeholder="email@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                                           placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">New around here? Sign up</a>
                            <a class="dropdown-item" href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="dropdown-menu"&gt;
  &lt;form class="px-4 py-3"&gt;
    &lt;div class="mb-3"&gt;
      &lt;label for="exampleDropdownFormEmail1" class="form-label"&gt;Email address&lt;/label&gt;
      &lt;input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
      &lt;label for="exampleDropdownFormPassword1" class="form-label"&gt;Password&lt;/label&gt;
      &lt;input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
      &lt;div class="form-check"&gt;
        &lt;input type="checkbox" class="form-check-input" id="dropdownCheck"&gt;
        &lt;label class="form-check-label" for="dropdownCheck"&gt;
          Remember me
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
  &lt;/form&gt;
  &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
  &lt;a class="dropdown-item" href="#"&gt;New around here? Sign up&lt;/a&gt;
  &lt;a class="dropdown-item" href="#"&gt;Forgot password?&lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <form class="dropdown-menu p-4">
                            <div class="mb-3">
                                <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail2"
                                       placeholder="email@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword2"
                                       placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;form class="dropdown-menu p-4"&gt;
  &lt;div class="mb-3"&gt;
    &lt;label for="exampleDropdownFormEmail2" class="form-label"&gt;Email address&lt;/label&gt;
    &lt;input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com"&gt;
  &lt;/div&gt;
  &lt;div class="mb-3"&gt;
    &lt;label for="exampleDropdownFormPassword2" class="form-label"&gt;Password&lt;/label&gt;
    &lt;input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password"&gt;
  &lt;/div&gt;
  &lt;div class="mb-3"&gt;
    &lt;div class="form-check"&gt;
      &lt;input type="checkbox" class="form-check-input" id="dropdownCheck2"&gt;
      &lt;label class="form-check-label" for="dropdownCheck2"&gt;
        Remember me
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;</code></pre>
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
