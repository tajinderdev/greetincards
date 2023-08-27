@extends('layouts.app')

@section('page-title', 'Input group')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Easily extend form controls by adding text, buttons, or button groups on either side of
                textual inputs, custom selects, and custom file inputs.</p>

            <h4>Basic example</h4>
            <p>Place one add-on or button on either side of an input. You may also place one on both sides of an
                input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;span class="input-group-text" id="basic-addon1"&gt;@&lt;/span&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"&gt;
  &lt;span class="input-group-text" id="basic-addon2"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;

&lt;label for="basic-url" class="form-label"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group mb-3"&gt;
  &lt;span class="input-group-text" id="basic-addon3"&gt;https://example.com/users/&lt;/span&gt;
  &lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;span class="input-group-text"&gt;$&lt;/span&gt;
  &lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
  &lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"&gt;
  &lt;span class="input-group-text"&gt;@&lt;/span&gt;
  &lt;input type="text" class="form-control" placeholder="Server" aria-label="Server"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
  &lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Wrapping</h4>
            <p>Input groups wrap by default via <code>flex-wrap: wrap</code> in order to accommodate custom form
                field validation within an input group. You may disable this with <code>.flex-nowrap</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                               aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group flex-nowrap"&gt;
  &lt;span class="input-group-text" id="addon-wrapping"&gt;@&lt;/span&gt;
  &lt;input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Sizing</h4>
            <p>Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will
                automatically resize—no need for repeating the form control size classes on each element.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-lg">
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group input-group-sm mb-3"&gt;
  &lt;span class="input-group-text" id="inputGroup-sizing-sm"&gt;Small&lt;/span&gt;
  &lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;span class="input-group-text" id="inputGroup-sizing-default"&gt;Default&lt;/span&gt;
  &lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"&gt;
&lt;/div&gt;

&lt;div class="input-group input-group-lg"&gt;
  &lt;span class="input-group-text" id="inputGroup-sizing-lg"&gt;Large&lt;/span&gt;
  &lt;input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Checkboxes and radios</h4>
            <p>Place any checkbox or radio option within an input group’s addon instead of text.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input" type="checkbox" value=""
                                   aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>

                    <div class="input-group">
                        <div class="input-group-text">
                            <input class="form-check-input" type="radio" value=""
                                   aria-label="Radio button for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with radio button">
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;div class="input-group-text"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input"&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with checkbox"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;div class="input-group-text"&gt;
    &lt;input class="form-check-input" type="radio" value="" aria-label="Radio button for following text input"&gt;
  &lt;/div&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with radio button"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Multiple inputs</h4>
            <p>While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only
                available for input groups with a single <code>&lt;input&gt;</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group">
                        <span class="input-group-text">First and last name</span>
                        <input type="text" aria-label="First name" class="form-control">
                        <input type="text" aria-label="Last name" class="form-control">
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group"&gt;
  &lt;span class="input-group-text"&gt;First and last name&lt;/span&gt;
  &lt;input type="text" aria-label="First name" class="form-control"&gt;
  &lt;input type="text" aria-label="Last name" class="form-control"&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Multiple addons</h4>
            <p>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                        <input type="text" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;span class="input-group-text"&gt;$&lt;/span&gt;
  &lt;span class="input-group-text"&gt;0.00&lt;/span&gt;
  &lt;input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"&gt;
  &lt;span class="input-group-text"&gt;$&lt;/span&gt;
  &lt;span class="input-group-text"&gt;0.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Button addons</h4>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                        <input type="text" class="form-control" placeholder=""
                               aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                               aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <input type="text" class="form-control" placeholder=""
                               aria-label="Example text with two button addons">
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                               aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;button class="btn btn-outline-secondary" type="button" id="button-addon1"&gt;Button&lt;/button&gt;
  &lt;input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"&gt;
  &lt;button class="btn btn-outline-secondary" type="button" id="button-addon2"&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
  &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
  &lt;input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons"&gt;
  &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
  &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Buttons with dropdowns</h4>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown
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
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="input-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action before</a></li>
                            <li><a class="dropdown-item" href="#">Another action before</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
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
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
  &lt;button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
  &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action before&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action before&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons"&gt;
  &lt;button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;Dropdown&lt;/button&gt;
  &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Segmented buttons</h4>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
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
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
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
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;button type="button" class="btn btn-outline-secondary"&gt;Action&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with segmented dropdown button"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;input type="text" class="form-control" aria-label="Text input with segmented dropdown button"&gt;
  &lt;button type="button" class="btn btn-outline-secondary"&gt;Action&lt;/button&gt;
  &lt;button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"&gt;
    &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Custom forms</h4>
            <p>Input groups include support for custom selects and custom file inputs. Browser default versions of
                these are not supported.</p>

            <h5>Custom select</h5>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <select class="form-select" id="inputGroupSelect03"
                                aria-label="Example select with button addon">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect04"
                                aria-label="Example select with button addon">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;label class="input-group-text" for="inputGroupSelect01"&gt;Options&lt;/label&gt;
  &lt;select class="form-select" id="inputGroupSelect01"&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;select class="form-select" id="inputGroupSelect02"&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;label class="input-group-text" for="inputGroupSelect02"&gt;Options&lt;/label&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
  &lt;select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon"&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon"&gt;
    &lt;option selected&gt;Choose...&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
  &lt;/select&gt;
  &lt;button class="btn btn-outline-secondary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Custom file input</h5>

            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button
                        </button>
                        <input type="file" class="form-control" id="inputGroupFile03"
                               aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>

                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04"
                               aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button
                        </button>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="input-group mb-3"&gt;
  &lt;label class="input-group-text" for="inputGroupFile01"&gt;Upload&lt;/label&gt;
  &lt;input type="file" class="form-control" id="inputGroupFile01"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;input type="file" class="form-control" id="inputGroupFile02"&gt;
  &lt;label class="input-group-text" for="inputGroupFile02"&gt;Upload&lt;/label&gt;
&lt;/div&gt;

&lt;div class="input-group mb-3"&gt;
  &lt;button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03"&gt;Button&lt;/button&gt;
  &lt;input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload"&gt;
&lt;/div&gt;

&lt;div class="input-group"&gt;
  &lt;input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload"&gt;
  &lt;button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"&gt;Button&lt;/button&gt;
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
