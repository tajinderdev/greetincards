@extends('layouts.app')

@section('page-title', 'Checks and radios')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
    @endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Create consistent cross-browser and cross-device checkboxes and radios with our
                completely rewritten checks component.</p>

            <h4>Checks</h4>
            <p>Create consistent cross-browser and cross-device checkboxes and radios with our completely rewritten
                checks component.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultFlexCheckDefault">
                        <label class="form-check-label" for="defaultFlexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Checked checkbox
                        </label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="checkbox" value="" id="defaultFlexCheckDefault"&gt;
  &lt;label class="form-check-label" for="defaultFlexCheckDefault"&gt;
    Default checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked&gt;
  &lt;label class="form-check-label" for="flexCheckChecked"&gt;
    Checked checkbox
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Disabled</h5>
            <p>Add the <code>disabled</code> attribute and the associated <code>&lt;label&gt;</code>s are
                automatically styled to match with a lighter color to help indicate the input’s state.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                        <label class="form-check-label" for="flexCheckDisabled">
                            Disabled checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked
                               disabled>
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            Disabled checked checkbox
                        </label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled&gt;
  &lt;label class="form-check-label" for="flexCheckDisabled"&gt;
    Disabled checkbox
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled&gt;
  &lt;label class="form-check-label" for="flexCheckCheckedDisabled"&gt;
    Disabled checked checkbox
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Radios</h4>

            <div class="card">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Default radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                               checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Default checked radio
                        </label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"&gt;
  &lt;label class="form-check-label" for="flexRadioDefault1"&gt;
    Default radio
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked&gt;
  &lt;label class="form-check-label" for="flexRadioDefault2"&gt;
    Default checked radio
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Disabled</h5>
            <p>Add the <code>disabled</code> attribute and the associated <code>&lt;label&gt;</code>s are
                automatically styled to match with a lighter color to help indicate the input’s state.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                               disabled>
                        <label class="form-check-label" for="flexRadioDisabled">
                            Disabled radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                               id="flexRadioCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Disabled checked radio
                        </label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled&gt;
  &lt;label class="form-check-label" for="flexRadioDisabled"&gt;
    Disabled radio
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
  &lt;input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled&gt;
  &lt;label class="form-check-label" for="flexRadioCheckedDisabled"&gt;
    Disabled checked radio
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Switches</h4>
            <p>A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a
                toggle switch. Switches also support the <code>disabled</code> attribute.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                            input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                            input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                            input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked
                               disabled>
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch
                            checkbox input</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check form-switch"&gt;
  &lt;input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"&gt;
  &lt;label class="form-check-label" for="flexSwitchCheckDefault"&gt;Default switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch"&gt;
  &lt;input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked&gt;
  &lt;label class="form-check-label" for="flexSwitchCheckChecked"&gt;Checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch"&gt;
  &lt;input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled&gt;
  &lt;label class="form-check-label" for="flexSwitchCheckDisabled"&gt;Disabled switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch"&gt;
  &lt;input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled&gt;
  &lt;label class="form-check-label" for="flexSwitchCheckCheckedDisabled"&gt;Disabled checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Inline</h4>
            <p>Group checkboxes or radios on the same horizontal row by adding <code>.form-check-inline</code> to
                any <code>.form-check</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check form-check-inline"&gt;
  &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"&gt;
  &lt;label class="form-check-label" for="inlineCheckbox1"&gt;1&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
  &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"&gt;
  &lt;label class="form-check-label" for="inlineCheckbox2"&gt;2&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
  &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled&gt;
  &lt;label class="form-check-label" for="inlineCheckbox3"&gt;3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                               value="option3" disabled>
                        <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="form-check form-check-inline"&gt;
  &lt;input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"&gt;
  &lt;label class="form-check-label" for="inlineRadio1"&gt;1&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
  &lt;input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"&gt;
  &lt;label class="form-check-label" for="inlineRadio2"&gt;2&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
  &lt;input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled&gt;
  &lt;label class="form-check-label" for="inlineRadio3"&gt;3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Without labels</h4>
            <p>Omit the wrapping <code>.form-check</code> for checkboxes and radios that have no label text.
                Remember to still provide some form of accessible name for assistive technologies (for instance,
                using <code>aria-label</code>). </p>

            <div class="card">
                <div class="card-body">
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>

                    <div>
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value=""
                               aria-label="...">
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;div&gt;
  &lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."&gt;
&lt;/div&gt;

&lt;div&gt;
  &lt;input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..."&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Toggle buttons</h4>
            <p>Create button-like checkboxes and radio buttons by using <code>.btn</code> styles rather than <code>.form-check-label</code>
                on the <code>&lt;label&gt;</code> elements.</p>

            <h5>Checkbox toggle buttons</h5>
            <p>Create button-like checkboxes and radio buttons by using <code>.btn</code> styles rather than <code>.form-check-label</code>
                on the <code>&lt;label&gt;</code> elements.</p>

            <div class="card">
                <div class="card-body">
                    <input type="checkbox" class="btn-check" id="btn-check">
                    <label class="btn btn-primary" for="btn-check">Single toggle</label>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;input type="checkbox" class="btn-check" id="btn-check"&gt;
&lt;label class="btn btn-primary" for="btn-check"&gt;Single toggle&lt;/label&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <input type="checkbox" class="btn-check" id="btn-check-2" checked>
                    <label class="btn btn-primary" for="btn-check-2">Checked</label>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;input type="checkbox" class="btn-check" id="btn-check-2" checked&gt;
&lt;label class="btn btn-primary" for="btn-check-2"&gt;Checked&lt;/label&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <input type="checkbox" class="btn-check" id="btn-check-3" disabled>
                    <label class="btn btn-primary" for="btn-check-3">Disabled</label>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;input type="checkbox" class="btn-check" id="btn-check-3" disabled&gt;
&lt;label class="btn btn-primary" for="btn-check-3"&gt;Disabled&lt;/label&gt;</code></pre>
                </div>
            </div>

            <h5>Radio toggle buttons</h5>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <input type="radio" class="btn-check" name="options" id="option1" checked>
                        <label class="btn btn-secondary" for="option1">Checked</label>

                        <input type="radio" class="btn-check" name="options" id="option2">
                        <label class="btn btn-secondary" for="option2">Radio</label>

                        <input type="radio" class="btn-check" name="options" id="option3" disabled>
                        <label class="btn btn-secondary" for="option3">Disabled</label>

                        <input type="radio" class="btn-check" name="options" id="option4">
                        <label class="btn btn-secondary" for="option4">Radio</label>
                    </div>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;input type="radio" class="btn-check" name="options" id="option1" checked&gt;
&lt;label class="btn btn-secondary" for="option1"&gt;Checked&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options" id="option2"&gt;
&lt;label class="btn btn-secondary" for="option2"&gt;Radio&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options" id="option3" disabled&gt;
&lt;label class="btn btn-secondary" for="option3"&gt;Disabled&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options" id="option4"&gt;
&lt;label class="btn btn-secondary" for="option4"&gt;Radio&lt;/label&gt;</code></pre>
                </div>
            </div>

            <h5>Outlined styles</h5>
            <p>Different variants of <code>.btn</code>, such at the various outlined styles, are supported.</p>

            <div class="card">
                <div class="card-body">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined">
                    <label class="btn btn-outline-primary mb-3" for="btn-check-outlined">Single toggle</label><br>

                    <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked>
                    <label class="btn btn-outline-secondary mb-3" for="btn-check-2-outlined">Checked</label><br>

                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                           checked>
                    <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>

                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                          >
                    <label class="btn btn-outline-danger ms-2" for="danger-outlined">Danger radio</label>
                </div>
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;input type="checkbox" class="btn-check" id="btn-check-outlined"&gt;
&lt;label class="btn btn-outline-primary" for="btn-check-outlined"&gt;Single toggle&lt;/label&gt;&lt;br&gt;

&lt;input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked&gt;
&lt;label class="btn btn-outline-secondary" for="btn-check-2-outlined"&gt;Checked&lt;/label&gt;&lt;br&gt;

&lt;input type="radio" class="btn-check" name="options-outlined" id="success-outlined" checked&gt;
&lt;label class="btn btn-outline-success" for="success-outlined"&gt;Checked success radio&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"&gt;
&lt;label class="btn btn-outline-danger" for="danger-outlined"&gt;Danger radio&lt;/label&gt;</code></pre>
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
