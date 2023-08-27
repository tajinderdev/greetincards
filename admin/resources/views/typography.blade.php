@extends('layouts.app')

@section('page-title', 'Typography')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for Bootstrap typography, including global settings,
                headings, body text, lists, and more.</p>

            <h4>Headings</h4>
            <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</p>

            <div class="card">
                <div class="card-body">
                    <h1>h1. Bootstrap heading</h1>
                    <h2>h2. Bootstrap heading</h2>
                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;</code></pre>
                </div>
            </div>

            <p><code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font
                styling of a heading but cannot use the associated HTML element.</p>

            <div class="card">
                <div class="card-body">
                    <p class="h1">h1. Bootstrap heading</p>
                    <p class="h2">h2. Bootstrap heading</p>
                    <p class="h3">h3. Bootstrap heading</p>
                    <p class="h4">h4. Bootstrap heading</p>
                    <p class="h5">h5. Bootstrap heading</p>
                    <p class="h6">h6. Bootstrap heading</p>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;p class="h1"&gt;h1. Bootstrap heading&lt;/p&gt;
&lt;p class="h2"&gt;h2. Bootstrap heading&lt;/p&gt;
&lt;p class="h3"&gt;h3. Bootstrap heading&lt;/p&gt;
&lt;p class="h4"&gt;h4. Bootstrap heading&lt;/p&gt;
&lt;p class="h5"&gt;h5. Bootstrap heading&lt;/p&gt;
&lt;p class="h6"&gt;h6. Bootstrap heading&lt;/p&gt;</code></pre>
                </div>
            </div>

            <h4>Display headings</h4>
            <p>Traditional heading elements are designed to work best in the meat of your page content. When you
                need a heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly
                more opinionated heading style.</p>

            <div class="card">
                <div class="card-body">
                    <h1 class="display-1">Display 1</h1>
                    <h1 class="display-2">Display 2</h1>
                    <h1 class="display-3">Display 3</h1>
                    <h1 class="display-4">Display 4</h1>
                    <h1 class="display-5">Display 5</h1>
                    <h1 class="display-6">Display 6</h1>
                    <h1 class="display-7">Display 7</h1>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;h1 class="display-1"&gt;Display 1&lt;/h1&gt;
&lt;h1 class="display-2"&gt;Display 2&lt;/h1&gt;
&lt;h1 class="display-3"&gt;Display 3&lt;/h1&gt;
&lt;h1 class="display-4"&gt;Display 4&lt;/h1&gt;
&lt;h1 class="display-5"&gt;Display 5&lt;/h1&gt;
&lt;h1 class="display-6"&gt;Display 6&lt;/h1&gt;
&lt;h1 class="display-7"&gt;Display 7&lt;/h1&gt;</code></pre>
                </div>
            </div>

            <h4>Lead</h4>
            <p>Make a paragraph stand out by adding <code>.lead</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <p class="lead">
                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                            commodo luctus.
                        </p>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;p class="lead"&gt;
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
&lt;/p&gt;</code></pre>
                </div>
            </div>

            <h4>Inline text elements</h4>
            <p>Styling for common inline HTML5 elements.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <p>You can use the mark tag to
                            <mark>highlight</mark>
                            text.
                        </p>
                        <p>
                            <del>This line of text is meant to be treated as deleted text.</del>
                        </p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p>
                            <ins>This line of text is meant to be treated as an addition to the document.</ins>
                        </p>
                        <p><u>This line of text will render as underlined.</u></p>
                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined.&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code></pre>
                </div>
            </div>

            <h4>Blockquotes</h4>
            <p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote
                    class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as
                the quote.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;blockquote class="blockquote"&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
&lt;/blockquote&gt;</code></pre>
                </div>
            </div>

            <h5>Naming a source</h5>
            <p>The HTML spec requires that blockquote attribution be placed outside the
                <code>&lt;blockquote&gt;</code>. When providing attribution, wrap your
                <code>&lt;blockquote&gt;</code> in a <code>&lt;figure&gt;</code> and use a
                <code>&lt;figcaption&gt;</code> or a block level element (e.g., <code>&lt;p&gt;</code>) with the
                <code>.blockquote-footer</code> class. Be sure to wrap the name of the source work in <code>&lt;cite&gt;</code>
                as well.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <figure>
                            <blockquote class="blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;figure&gt;
  &lt;blockquote class="blockquote"&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;/blockquote&gt;
  &lt;figcaption class="blockquote-footer"&gt;
    Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
  &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                </div>
            </div>

            <h5>Alignment</h5>
            <p>Use text utilities as needed to change the alignment of your blockquote.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;figure class="text-center"&gt;
  &lt;blockquote class="blockquote"&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;/blockquote&gt;
  &lt;figcaption class="blockquote-footer"&gt;
    Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
  &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <figure class="text-end">
                            <blockquote class="blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;figure class="text-end"&gt;
  &lt;blockquote class="blockquote"&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;/blockquote&gt;
  &lt;figcaption class="blockquote-footer"&gt;
    Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
  &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                </div>
            </div>

            <h4>Lists</h4>

            <h5>Unstyled</h5>
            <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only).
                <strong>This only applies to immediate children list items</strong>, meaning you will need to add
                the class for any nested lists as well.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-unstyled"&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
  &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit
    &lt;ul&gt;
      &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
      &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
      &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
      &lt;li&gt;Ac tristique libero volutpat at&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
  &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
  &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Inline</h5>
            <p>Remove a list’s bullets and apply some light <code>margin</code> with a combination of two classes,
                <code>.list-inline</code> and <code>.list-inline-item</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <ul class="list-inline">
                            <li class="list-inline-item">Lorem ipsum</li>
                            <li class="list-inline-item">Phasellus iaculis</li>
                            <li class="list-inline-item">Nulla volutpat</li>
                        </ul>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-inline"&gt;
  &lt;li class="list-inline-item"&gt;Lorem ipsum&lt;/li&gt;
  &lt;li class="list-inline-item"&gt;Phasellus iaculis&lt;/li&gt;
  &lt;li class="list-inline-item"&gt;Nulla volutpat&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Description list alignment</h5>
            <p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic
                mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate
                the text with an ellipsis.</p>

            <div class="card">
                <div class="card-body">
                    <div class="bd-example">
                        <dl class="row">
                            <dt class="col-sm-3">Description lists</dt>
                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                            <dt class="col-sm-3">Euismod</dt>
                            <dd class="col-sm-9">
                                <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                                <p>Donec id elit non mi porta gravida at eget metus.</p>
                            </dd>

                            <dt class="col-sm-3">Malesuada porta</dt>
                            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                            <dt class="col-sm-3">Nesting</dt>
                            <dd class="col-sm-9">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                </dl>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;dl class="row"&gt;
  &lt;dt class="col-sm-3"&gt;Description lists&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;A description list is perfect for defining terms.&lt;/dd&gt;

  &lt;dt class="col-sm-3"&gt;Euismod&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;
    &lt;p&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
    &lt;p&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
  &lt;/dd&gt;

  &lt;dt class="col-sm-3"&gt;Malesuada porta&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;

  &lt;dt class="col-sm-3 text-truncate"&gt;Truncated term is truncated&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;

  &lt;dt class="col-sm-3"&gt;Nesting&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;
    &lt;dl class="row"&gt;
      &lt;dt class="col-sm-4"&gt;Nested definition list&lt;/dt&gt;
      &lt;dd class="col-sm-8"&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
    &lt;/dl&gt;
  &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
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
