@extends('layouts.app')

@section('page-title', 'Buttons')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with
                support for multiple sizes, states, and more.</p>

            <h4>Examples</h4>
            <p>Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a
                few extras thrown in for more control.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary me-1">Primary</button>
                    <button type="button" class="btn btn-secondary me-1">Secondary</button>
                    <button type="button" class="btn btn-success me-1">Success</button>
                    <button type="button" class="btn btn-danger me-1">Danger</button>
                    <button type="button" class="btn btn-warning me-1">Warning</button>
                    <button type="button" class="btn btn-info me-1">Info</button>
                    <button type="button" class="btn btn-light me-1">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>

                    <button type="button" class="btn btn-link">Link</button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-light"&gt;Light&lt;/button&gt;
&lt;button type="button" class="btn btn-dark"&gt;Dark&lt;/button&gt;

&lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h4>Disable text wrapping</h4>
            <p>If you don’t want the button text to wrap, you can add the <code>.text-nowrap</code> class to the
                button. In Sass, you can set <code>$btn-white-space: nowrap</code> to disable text wrapping for each
                button.</p>

            <div>
                <h4>Button tags</h4>
                <p>The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element.
                    However, you can also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code>
                    elements (though some browsers may apply a slightly different rendering).</p>
                <p>When using button classes on <code>&lt;a&gt;</code> elements that are used to trigger in-page
                    functionality (like collapsing content), rather than linking to new pages or sections within the
                    current page, these links should be given a <code>role="button"</code> to appropriately convey their
                    purpose to assistive technologies such as screen readers.</p>
            </div>

            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary me-1" href="#" role="button">Link</a>
                    <button class="btn btn-primary me-1" type="submit">Button</button>
                    <input class="btn btn-primary me-1" type="button" value="Input">
                    <input class="btn btn-primary me-1" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;a class="btn btn-primary" href="#" role="button"&gt;Link&lt;/a&gt;
&lt;button class="btn btn-primary" type="submit"&gt;Button&lt;/button&gt;
&lt;input class="btn btn-primary" type="button" value="Input"&gt;
&lt;input class="btn btn-primary" type="submit" value="Submit"&gt;
&lt;input class="btn btn-primary" type="reset" value="Reset"&gt;</code></pre>
                </div>
            </div>

            <h4>Outline buttons</h4>
            <p>In need of a button, but not the hefty background colors they bring? Replace the default modifier
                classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any
                button.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary me-1">Primary</button>
                    <button type="button" class="btn btn-outline-secondary me-1">Secondary</button>
                    <button type="button" class="btn btn-outline-success me-1">Success</button>
                    <button type="button" class="btn btn-outline-danger me-1">Danger</button>
                    <button type="button" class="btn btn-outline-warning me-1">Warning</button>
                    <button type="button" class="btn btn-outline-info me-1">Info</button>
                    <button type="button" class="btn btn-outline-light me-1">Light</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light"&gt;Light&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h4>Sizes</h4>
            <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional
                sizes.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-lg me-1">Large button</button>
                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-primary btn-lg"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-lg"&gt;Large button&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-sm me-1">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-primary btn-sm"&gt;Small button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-sm"&gt;Small button&lt;/button&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled state</h4>
            <p>Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any <code>&lt;button&gt;</code>
                element. Disabled buttons have <code>pointer-events: none</code> applied to, preventing hover and
                active states from triggering.</p>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-primary me-1" disabled>Primary button</button>
                    <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;button type="button" class="btn btn-lg btn-primary" disabled&gt;Primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-lg" disabled&gt;Button&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div>
                <p>Disabled buttons using the <code>&lt;a&gt;</code> element behave a bit different:</p>
                <ul>
                    <li><code>&lt;a&gt;</code>s don’t support the <code>disabled</code> attribute, so you must add the
                        <code>.disabled</code> class to make it visually appear disabled.
                    </li>
                    <li>Some future-friendly styles are included to disable all <code>pointer-events</code> on anchor
                        buttons.
                    </li>
                    <li>Disabled buttons should include the <code>aria-disabled="true"</code> attribute to indicate the
                        state of the element to assistive technologies.
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg disabled me-1" tabindex="-1" role="button"
                       aria-disabled="true">Primary link</a>
                    <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button"
                       aria-disabled="true">Link</a>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"&gt;Primary link&lt;/a&gt;
&lt;a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"&gt;Link&lt;/a&gt;</code></pre>
                </div>
            </div>

            <h4>Block buttons</h4>
            <p>Create responsive stacks of full-width, “block buttons” like those in Bootstrap 4 with a mix of our
                display and gap utilities. By using utilities instead of button specific classes, we have much
                greater control over spacing, alignment, and responsive behaviors.</p>

            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-grid gap-2"&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Here we create a responsive variation, starting with vertically stacked buttons until the <code>md</code>
                breakpoint, where <code>.d-md-block</code> replaces the <code>.d-grid</code> class, thus nullifying the
                <code>gap-2</code> utility. Resize your browser to see them change.</p>

            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary me-1" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-grid gap-2 d-md-block"&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>You can adjust the width of your block buttons with grid column width classes. For example, for a
                half-width “block button”, use <code>.col-6</code>. Center it horizontally with <code>.mx-auto</code>,
                too.</p>

            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-grid gap-2 col-6 mx-auto"&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we’ve taken our
                previous responsive example and added some flex utilities and a margin utility on the button to right
                align the buttons when they’re no longer stacked.</p>

            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-grid gap-2 d-md-flex justify-content-md-end"&gt;
  &lt;button class="btn btn-primary me-md-2" type="button"&gt;Button&lt;/button&gt;
  &lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
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
