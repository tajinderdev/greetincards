@extends('layouts.app')

@section('page-title', 'Cards')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Bootstrap’s cards provide a flexible and extensible content container with multiple
                variants and options.</p>

            <h4>About</h4>
            <p>A <strong>card</strong> is a flexible and extensible content container. It includes options for
                headers and footers, a wide variety of content, contextual background colors, and powerful display
                options. If you’re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails.
                Similar functionality to those components is available as modifier classes for cards.</p>

            <h4>Example</h4>
            <p>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of
                control and customization. Built with flexbox, they offer easy alignment and mix well with other
                Bootstrap components. They have no <code>margin</code> by default, so use spacing utilities as
                needed.</p>
            <p>Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width
                to start, so they’ll naturally fill the full width of its parent element. This is easily customized
                with our various sizing options.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                        <div class="card-body">
                            <h5 class="card-titles">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Content types</h4>
            <p>Cards support a wide variety of content, including images, text, list groups, links, and more. Below
                are examples of what’s supported.</p>

            <h5>Body</h5>
            <p>The building block of a card is the <code>.card-body</code>. Use it whenever you need a padded
                section within a card.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            This is some text within a card body.
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card"&gt;
      &lt;div class="card-body"&gt;
        This is some text within a card body.
      &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Titles, text, and links</h5>
            <p>Card titles are used by adding <code>.card-title</code> to a <code>&lt;h*&gt;</code> tag. In the same
                way, links are added and placed next to each other by adding <code>.card-link</code> to an
                <code>&lt;a&gt;</code>
                tag.</p>
            <p>Subtitles are used by adding a <code>.card-subtitle</code> to a <code>&lt;h*&gt;</code> tag. If the
                <code>.card-title</code> and the <code>.card-subtitle</code> items are placed in a
                <code>.card-body</code> item, the card title and subtitle are aligned nicely.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="card mb-0" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;h6 class="card-subtitle mb-2 text-muted"&gt;Card subtitle&lt;/h6&gt;
        &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
        &lt;a href="#" class="card-link"&gt;Card link&lt;/a&gt;
        &lt;a href="#" class="card-link"&gt;Another link&lt;/a&gt;
      &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Images</h5>
            <p><code>.card-img-top</code> places an image to the top of the card. With <code>.card-text</code>, text
                can be added to the card. Text within <code>.card-text</code> can also be styled with the standard
                HTML tags.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card mb-0" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;img src="..." class="card-img-top" alt="..."&gt;
  &lt;div class="card-body"&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>List groups</h5>
            <p>Create lists of content in a card with a flush list group.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card mb-0" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;div class="card-header"&gt;
    Featured
  &lt;/div&gt;
  &lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-footer">
                            Card footer
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="card-footer"&gt;
    Card footer
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Kitchen sink</h5>
            <p>Mix and match multiple content types to create the card you need, or throw everything in there. Shown
                below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;img src="..." class="card-img-top" alt="..."&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
  &lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="card-body"&gt;
    &lt;a href="#" class="card-link"&gt;Card link&lt;/a&gt;
    &lt;a href="#" class="card-link"&gt;Another link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Header and footer</h5>
            <p>Add an optional header and/or footer within a card.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    Featured
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Card headers can be styled by adding <code>.card-header</code> to <code>&lt;h*&gt;</code> elements.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card"&gt;
  &lt;h5 class="card-header"&gt;Featured&lt;/h5&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    Quote
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;blockquote class="blockquote mb-0"&gt;
      &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
      &lt;footer class="blockquote-footer"&gt;Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
    &lt;/blockquote&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card text-center"&gt;
  &lt;div class="card-header"&gt;
    Featured
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="card-footer text-muted"&gt;
    2 days ago
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Sizing</h4>
            <p>Cards assume no specific <code>width</code> to start, so they’ll be 100% wide unless otherwise
                stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities.
            </p>

            <h5>Using grid markup</h5>
            <p>Using the grid, wrap cards in columns and rows as needed.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="col-sm-6"&gt;
    &lt;div class="card"&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
        &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
        &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-sm-6"&gt;
    &lt;div class="card"&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
        &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
        &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Using utilities</h5>
            <p>Use our handful of available sizing utilities to quickly set a card’s width.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card w-75 mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>

                    <div class="card w-50">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card w-75"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Button&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="card w-50"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Button&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Using custom CSS</h5>
            <p>Use custom CSS in your stylesheets or as inline styles to set a width.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Text alignment</h4>
            <p>You can quickly change the text alignment of any card—in its entirety or specific parts—with our text
                align classes.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card mb-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card mb-4 text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card text-end" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card" style="width: 18rem;"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="card text-center" style="width: 18rem;"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="card text-end" style="width: 18rem;"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Navigation</h4>
            <p>Add some navigation to a card’s header (or block) with Bootstrap’s nav components.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                       aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card text-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;ul class="nav nav-tabs card-header-tabs"&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" aria-current="true" href="#"&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1"
                                       aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card text-center"&gt;
  &lt;div class="card-header"&gt;
    &lt;ul class="nav nav-pills card-header-pills"&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Images</h4>
            <p>Cards include a few options for working with images. Choose from appending “image caps” at either end
                of a card, overlaying images with card content, or simply embedding the image in a card.</p>

            <h5>Image caps</h5>
            <p>Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or
                bottom of a card.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card mb-4" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img class="card-img-bottom" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card mb-3"&gt;
  &lt;img src="..." class="card-img-top" alt="..."&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
    &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
    &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
  &lt;/div&gt;
  &lt;img src="..." class="card-img-bottom" alt="..."&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Image overlays</h5>
            <p>Turn an image into a card background and overlay your card’s text. Depending on the image, you may or
                may not need additional styles or utilities.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card text-black-50">
                        <img class="card-img" src="{{ url('assets/images/profile-bg.jpg') }}" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card text-black-50"&gt;
  &lt;img src="..." class="card-img" alt="..."&gt;
  &lt;div class="card-img-overlay"&gt;
    &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
    &lt;p class="card-text"&gt;Last updated 3 mins ago&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Horizontal</h4>
            <p>Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly
                and responsive way. In the example below, we remove the grid gutters with <code>.g-0</code> and use
                <code>.col-md-*</code> classes to make the card horizontal at the <code>md</code> breakpoint.
                Further adjustments may be needed depending on your card content.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="card overflow-hidden" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img class="w-100" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card overflow-hidden mb-3" style="max-width: 540px;"&gt;
  &lt;div class="row g-0"&gt;
    &lt;div class="col-md-5"&gt;
      &lt;img class="w-100" src="..." alt="..."&gt;
    &lt;/div&gt;
    &lt;div class="col-md-7"&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
        &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Card styles</h4>
            <p>Cards include various options for customizing their backgrounds, borders, and color.</p>

            <h5>Background and color</h5>
            <p>Use text and background utilities to change the appearance of a card.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card text-white bg-primary mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-dark bg-warning mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-dark bg-info mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-dark bg-light mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-dark" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card text-white bg-primary mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Primary card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-secondary mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Secondary card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-success mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Success card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-danger mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Danger card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-dark bg-warning mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Warning card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-dark bg-info mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Info card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-dark bg-light mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Light card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-dark mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Dark card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Border</h5>
            <p>Use border utilities to change just the <code>border-color</code> of a card. Note that you can put
                <code>.text-{color}</code> classes on the parent <code>.card</code> or a subset of the card’s
                contents as shown below.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="card border-primary mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-secondary mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-success mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-danger mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-danger">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-warning mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-info mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-light mb-4" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card border-dark" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card border-primary mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body text-primary"&gt;
    &lt;h5 class="card-title"&gt;Primary card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-secondary mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body text-secondary"&gt;
    &lt;h5 class="card-title"&gt;Secondary card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-success mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body text-success"&gt;
    &lt;h5 class="card-title"&gt;Success card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-danger mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body text-danger"&gt;
    &lt;h5 class="card-title"&gt;Danger card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-warning mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Warning card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-info mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Info card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-light mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Light card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-dark mb-3" style="max-width: 18rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body text-dark"&gt;
    &lt;h5 class="card-title"&gt;Dark card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Mixins utilities</h5>
            <p>You can also change the borders on the card header and footer as needed, and even remove their
                <code>background-color</code>
                with <code>.bg-transparent</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card border-success mb-0" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-success">Header</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">Footer</div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card border-success" style="max-width: 18rem;"&gt;
  &lt;div class="card-header bg-transparent border-success"&gt;Header&lt;/div&gt;
  &lt;div class="card-body text-success"&gt;
    &lt;h5 class="card-title"&gt;Success card title&lt;/h5&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="card-footer bg-transparent border-success"&gt;Footer&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Card layout</h4>
            <p>In addition to styling the content within cards, Bootstrap includes a few options for laying out
                series of cards. For the time being, <strong>these layout options are not yet responsive</strong>.
            </p>

            <h5>Card groups</h5>
            <p>Use card groups to render cards as a single, attached element with equal width and height columns.
                Card groups start off stacked and use <code>display: flex;</code> to become attached with uniform
                dimensions starting at the <code>sm</code> breakpoint.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This card has even longer content than the first to
                                    show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card-group"&gt;
  &lt;div class="card"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
      &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
      &lt;p class="card-text"&gt;&lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>When using card groups with footers, their content will automatically line up.</p>

            <div class="card">
                <div class="card-body">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This card has even longer content than the first to show that
                                    equal
                                    height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="card-group"&gt;
  &lt;div class="card"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card-footer"&gt;
      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card-footer"&gt;
      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;img src="..." class="card-img-top" alt="..."&gt;
    &lt;div class="card-body"&gt;
      &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
      &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card-footer"&gt;
      &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h5>Grid cards</h5>
            <p>Use the Bootstrap grid system and its <code>.row-cols</code> classes to control how many
                grid columns (wrapped around your cards) you show per row. For example, here’s
                <code>.row-cols-1</code> laying out the cards on one column, and <code>.row-cols-md-2</code>
                splitting four cards to equal width across multiple rows, from the medium breakpoint up.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row row-cols-1 row-cols-md-2 g-4"&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Change it to <code>.row-cols-3</code> and you’ll see the fourth card wrap.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row row-cols-1 row-cols-md-3 g-4"&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>When you need equal height, add <code>.h-100</code> to the cards. If you want equal heights by default,
                you can set <code>$card-height: 100%</code> in Sass.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row row-cols-1 row-cols-md-3 g-4"&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a short card.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>Just like with card groups, card footers will automatically line up.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ url('assets/images/photo2.jpg') }}" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="row row-cols-1 row-cols-md-3 g-4"&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="card-footer"&gt;
        &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="card-footer"&gt;
        &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col"&gt;
    &lt;div class="card h-100"&gt;
      &lt;img src="..." class="card-img-top" alt="..."&gt;
      &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;
        &lt;p class="card-text"&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="card-footer"&gt;
        &lt;small class="text-muted"&gt;Last updated 3 mins ago&lt;/small&gt;
      &lt;/div&gt;
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

    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
@endsection
