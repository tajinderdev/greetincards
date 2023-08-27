@extends('layouts.app')

@section('page-title', 'Button group')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Group a series of buttons together on a single line or stack them in a vertical
                column.</p>

            <h4>Basic example</h4>
            <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>These classes can also be added to groups of links, as an alternative to the <code>.nav</code>
                navigation components.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
                        <a href="#" class="btn btn-primary">Link</a>
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group"&gt;
  &lt;a href="#" class="btn btn-primary active" aria-current="page"&gt;Active link&lt;/a&gt;
  &lt;a href="#" class="btn btn-primary"&gt;Link&lt;/a&gt;
  &lt;a href="#" class="btn btn-primary"&gt;Link&lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Mixed styles</h4>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-danger">Left</button>
                        <button type="button" class="btn btn-warning">Middle</button>
                        <button type="button" class="btn btn-success">Right</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic mixed styles example"&gt;
  &lt;button type="button" class="btn btn-danger"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="btn btn-warning"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="btn btn-success"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Outlined styles</h4>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary">Left</button>
                        <button type="button" class="btn btn-outline-primary">Middle</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic outlined example"&gt;
  &lt;button type="button" class="btn btn-outline-primary"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-primary"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-primary"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Checkbox and radio button groups</h4>
            <p>Combine button-like checkbox and radio toggle buttons into a seamless looking button group.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"&gt;
  &lt;input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off"&gt;
  &lt;label class="btn btn-outline-primary" for="btncheck1"&gt;Checkbox 1&lt;/label&gt;

  &lt;input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off"&gt;
  &lt;label class="btn btn-outline-primary" for="btncheck2"&gt;Checkbox 2&lt;/label&gt;

  &lt;input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off"&gt;
  &lt;label class="btn btn-outline-primary" for="btncheck3"&gt;Checkbox 3&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Basic radio toggle button group"&gt;
  &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked&gt;
  &lt;label class="btn btn-outline-primary" for="btnradio1"&gt;Radio 1&lt;/label&gt;

  &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"&gt;
  &lt;label class="btn btn-outline-primary" for="btnradio2"&gt;Radio 2&lt;/label&gt;

  &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off"&gt;
  &lt;label class="btn btn-outline-primary" for="btnradio3"&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Button toolbar</h4>
            <p>Combine sets of button groups into button toolbars for more complex components. Use utility classes
                as needed to space out groups, buttons, and more.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                            <button type="button" class="btn btn-primary">4</button>
                        </div>
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-secondary">5</button>
                            <button type="button" class="btn btn-secondary">6</button>
                            <button type="button" class="btn btn-secondary">7</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-info">8</button>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"&gt;
  &lt;div class="btn-group me-2" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="btn-group me-2" role="group" aria-label="Second group"&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;5&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;6&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;7&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="btn-group" role="group" aria-label="Third group"&gt;
    &lt;button type="button" class="btn btn-info"&gt;8&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Feel free to mix input groups with button groups in your toolbars. Similar to the example above,
                you’ll likely need some utilities though to space things properly.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-outline-secondary">1</button>
                            <button type="button" class="btn btn-outline-secondary">2</button>
                            <button type="button" class="btn btn-outline-secondary">3</button>
                            <button type="button" class="btn btn-outline-secondary">4</button>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text" id="btnGroupAddon">@</div>
                            <input type="text" class="form-control" placeholder="Input group example"
                                   aria-label="Input group example" aria-describedby="btnGroupAddon">
                        </div>
                    </div>

                    <div class="btn-toolbar justify-content-between" role="toolbar"
                         aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="First group">
                            <button type="button" class="btn btn-outline-secondary">1</button>
                            <button type="button" class="btn btn-outline-secondary">2</button>
                            <button type="button" class="btn btn-outline-secondary">3</button>
                            <button type="button" class="btn btn-outline-secondary">4</button>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text" id="btnGroupAddon2">@</div>
                            <input type="text" class="form-control" placeholder="Input group example"
                                   aria-label="Input group example" aria-describedby="btnGroupAddon2">
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"&gt;
  &lt;div class="btn-group me-2" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="input-group"&gt;
    &lt;div class="input-group-text" id="btnGroupAddon"&gt;@&lt;/div&gt;
    &lt;input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon"&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups"&gt;
  &lt;div class="btn-group" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-secondary"&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="input-group"&gt;
    &lt;div class="input-group-text" id="btnGroupAddon2"&gt;@&lt;/div&gt;
    &lt;input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2"&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Sizing</h4>
            <p>Instead of applying button sizing classes to every button in a group, just add
                <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple
                groups.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group btn-group-lg mb-2" role="group" aria-label="Large button group">
                        <button type="button" class="btn btn-outline-dark">Left</button>
                        <button type="button" class="btn btn-outline-dark">Middle</button>
                        <button type="button" class="btn btn-outline-dark">Right</button>
                    </div>
                    <br>
                    <div class="btn-group mb-2" role="group" aria-label="Default button group">
                        <button type="button" class="btn btn-outline-dark">Left</button>
                        <button type="button" class="btn btn-outline-dark">Middle</button>
                        <button type="button" class="btn btn-outline-dark">Right</button>
                    </div>
                    <br>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-outline-dark">Left</button>
                        <button type="button" class="btn btn-outline-dark">Middle</button>
                        <button type="button" class="btn btn-outline-dark">Right</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group btn-group-lg" role="group" aria-label="Large button group"&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group btn-group-sm" role="group" aria-label="Small button group"&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-outline-dark"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Nesting</h4>
            <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus
                mixed with a series of buttons.</p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;

  &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
      Dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu" aria-labelledby="btnGroupDrop1"&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Vertical variation</h4>
            <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong>Split button
                    dropdowns are not supported here.</strong></p>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-dark">Button</button>
                        <button type="button" class="btn btn-dark">Button</button>
                        <button type="button" class="btn btn-dark">Button</button>
                        <button type="button" class="btn btn-dark">Button</button>
                        <button type="button" class="btn btn-dark">Button</button>
                        <button type="button" class="btn btn-dark">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
    &lt;div class="btn-group" role="group"&gt;
      &lt;button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown
      &lt;/button&gt;
      &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
    &lt;div class="btn-group" role="group"&gt;
      &lt;button id="btnGroupVerticalDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown
      &lt;/button&gt;
      &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group" role="group"&gt;
      &lt;button id="btnGroupVerticalDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown
      &lt;/button&gt;
      &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="btn-group" role="group"&gt;
      &lt;button id="btnGroupVerticalDrop4" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"&gt;
        Dropdown
      &lt;/button&gt;
      &lt;ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4"&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off"
                               checked="">
                        <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group"&gt;
   &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked=""&gt;
   &lt;label class="btn btn-outline-danger" for="vbtn-radio1"&gt;Radio 1&lt;/label&gt;
   &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off"&gt;
   &lt;label class="btn btn-outline-danger" for="vbtn-radio2"&gt;Radio 2&lt;/label&gt;
   &lt;input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off"&gt;
   &lt;label class="btn btn-outline-danger" for="vbtn-radio3"&gt;Radio 3&lt;/label&gt;
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
