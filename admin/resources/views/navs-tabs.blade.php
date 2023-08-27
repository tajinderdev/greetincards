@extends('layouts.app')

@section('page-title', 'Navs and tabs')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for how to use Bootstrap’s included navigation
                components.</p>

            <h4>Base nav</h4>

            <div class="card">
                <div class="card-body">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>Classes are used throughout, so your markup can be super flexible. Use <code>&lt;ul&gt;</code>s like
                above, <code>&lt;ol&gt;</code> if the order of your items is important, or roll your own with a <code>&lt;nav&gt;</code>
                element. Because the <code>.nav</code> uses <code>display: flex</code>, the nav links behave the same as
                nav items would, but without the extra markup.</p>

            <div class="card">
                <div class="card-body">
                    <nav class="nav">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav class="nav"&gt;
  &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h4>Available styles</h4>

            <p>Change the style of <code>.nav</code>s component with modifiers and utilities. Mix and match as needed,
                or build your own.</p>

            <h5>Horizontal alignment</h5>
            <p>Change the horizontal alignment of your nav with flexbox utilities. By default, navs are
                left-aligned, but you can easily change them to center or right aligned.</p>
            <p>Centered with <code>.justify-content-center</code>:</p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav justify-content-center"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>Right-aligned with <code>.justify-content-end</code>:</p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav justify-content-end"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Vertical</h5>
            <p>Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                Need to stack them on some viewports but not others? Use the responsive versions (e.g., <code>.flex-sm-column</code>).
            </p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav flex-column"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>As always, vertical navigation is possible without <code>&lt;ul&gt;</code>s, too.</p>

            <div class="card">
                <div class="card-body">
                    <nav class="nav flex-column">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </nav>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;nav class="nav flex-column"&gt;
  &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
&lt;/nav&gt;</code></pre>
                </div>
            </div>

            <h5>Tabs</h5>
            <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed
                interface. Use them to create tabbable regions with our tab JavaScript plugin.</p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Pills</h5>
            <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-pills"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Fill and justify</h5>
            <p>Force your <code>.nav</code>’s contents to extend the full available width one of two modifier
                classes. To proportionately fill all available space with your <code>.nav-item</code>s, use <code>.nav-fill</code>.
                Notice that all horizontal space is occupied, but not every nav item has the same width.</p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Much longer nav link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-pills nav-fill"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Much longer nav link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Using dropdowns</h4>
            <p>Add dropdown menus with a little extra HTML and the dropdowns JavaScript plugin.</p>

            <h5>Tabs with dropdowns</h5>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h5>Pills with dropdowns</h5>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-pills"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;hr class="dropdown-divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>JavaScript behavior</h4>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                               aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                            aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                            helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh
                            mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan
                            aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft
                            beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda
                            labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit
                            sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean
                            shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown,
                            tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                            lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
                            Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown.
                            Pitchfork sustainable tofu synth chambray yr.
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-tabs" id="myTab" role="tablist"&gt;
  &lt;li class="nav-item" role="presentation"&gt;
    &lt;a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item" role="presentation"&gt;
    &lt;a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item" role="presentation"&gt;
    &lt;a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"&gt;Contact&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="myTabContent"&gt;
  &lt;div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>The tabs plugin also works with pills.</p>

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                            aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                            helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh
                            mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan
                            aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft
                            beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda
                            labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit
                            sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean
                            shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown,
                            tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                            lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
                            Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown.
                            Pitchfork sustainable tofu synth chambray yr.
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="nav nav-tabs" id="myTab" role="tablist"&gt;
  &lt;li class="nav-item" role="presentation"&gt;
    &lt;a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item" role="presentation"&gt;
    &lt;a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item" role="presentation"&gt;
    &lt;a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"&gt;Contact&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="myTabContent"&gt;
  &lt;div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"&gt;...&lt;/div&gt;
  &lt;div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>And with vertical pills.</p>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3 flex-shrink-0" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                               role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                               role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                               role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings"
                               role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam
                                sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit
                                est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum
                                dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non
                                laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab">Culpa dolor voluptate do laboris laboris irure
                                reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu
                                veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id
                                veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip
                                labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse
                                anim eiusmod do sint minim consectetur qui.
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">Fugiat id quis dolor culpa eiusmod anim velit
                                excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem
                                Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident
                                Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo
                                est ea veniam consectetur.
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                 aria-labelledby="v-pills-settings-tab">Eu dolore ea ullamco dolore Lorem id cupidatat
                                excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia.
                                Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit
                                consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa
                                ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="d-flex align-items-start"&gt;
  &lt;div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"&gt;
    &lt;a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"&gt;Messages&lt;/a&gt;
    &lt;a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"&gt;Settings&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="tab-content" id="v-pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"&gt;...&lt;/div&gt;
    &lt;div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"&gt;...&lt;/div&gt;
    &lt;div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"&gt;...&lt;/div&gt;
    &lt;div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"&gt;...&lt;/div&gt;
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
@endsection
