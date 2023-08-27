@extends('layouts.app')

@section('page-title', 'List group')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">List groups are a flexible and powerful component for displaying a series of content.
                Modify and extend them to support just about any content within.</p>

            <h4>Basic example</h4>
            <p>The most basic list group is an unordered list with list items and the proper classes. Build upon it
                with the options that follow, or with your own CSS as needed.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Active items</h4>
            <p>Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item active" aria-current="true"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled items</h4>
            <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled.
                Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully
                disable their click events (e.g., links).</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item disabled" aria-disabled="true"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Links and buttons</h4>
            <p>Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group
                items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We
                separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s
                or <code>&lt;div&gt;</code>s) don’t provide a click or tap affordance.</p>
            <p>Be sure to <strong>not use the standard <code>.btn</code> classes here</strong>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    Cras justo odio
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                                   aria-disabled="true">Vestibulum at eros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active" aria-current="true"&gt;
    Cras justo odio
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>With <code>&lt;button&gt;</code>s, you can also make use of the <code>disabled</code> attribute instead
                of the <code>.disabled</code> class. Sadly, <code>&lt;a&gt;</code>s don’t support the disabled
                attribute.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                    Cras justo odio
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac
                                    facilisis in
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac
                                    consectetur ac
                                </button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum
                                    at eros
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;button type="button" class="list-group-item list-group-item-action active" aria-current="true"&gt;
    Cras justo odio
  &lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;Vestibulum at eros&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Flush</h4>
            <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group
                items edge-to-edge in a parent container (e.g., cards).</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group list-group-flush"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Horizontal</h4>
            <p>Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to
                horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl|xxl}</code>
                to make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently
                <strong>horizontal list groups cannot be combined with flush list groups.</strong></p>
            <p><strong>ProTip:</strong> Want equal-width list group items when horizontal? Add
                <code>.flex-fill</code> to each list group item.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-sm">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-md">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-lg">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-xl">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-xxl">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group list-group-horizontal"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-sm"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-md"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-lg"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-xl"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-xxl"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Contextual classes</h4>
            <p>Use contextual classes to style list items with a stateful background and color.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">Dapibus ac facilisis in</li>

                                <li class="list-group-item list-group-item-primary">A simple primary list group item
                                </li>
                                <li class="list-group-item list-group-item-secondary">A simple secondary list group
                                    item
                                </li>
                                <li class="list-group-item list-group-item-success">A simple success list group item
                                </li>
                                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                <li class="list-group-item list-group-item-warning">A simple warning list group item
                                </li>
                                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;

  &lt;li class="list-group-item list-group-item-primary"&gt;A simple primary list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-secondary"&gt;A simple secondary list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-success"&gt;A simple success list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-danger"&gt;A simple danger list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-warning"&gt;A simple warning list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-info"&gt;A simple info list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-light"&gt;A simple light list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-dark"&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>Contextual classes also work with <code>.list-group-item-action</code>. Note the addition of the hover
                styles here not present in the previous example. Also supported is the <code>.active</code> state; apply
                it to indicate an active selection on a contextual list group item.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>

                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A
                                    simple primary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A
                                    simple secondary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A
                                    simple success list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A
                                    simple danger list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A
                                    simple warning list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple
                                    info list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A
                                    simple light list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple
                                    dark list group item</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/a&gt;

  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-primary"&gt;A simple primary list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-secondary"&gt;A simple secondary list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-success"&gt;A simple success list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-danger"&gt;A simple danger list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-warning"&gt;A simple warning list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-info"&gt;A simple info list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-light"&gt;A simple light list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-dark"&gt;A simple dark list group item&lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>With badges</h4>
            <p>Add badges to any list group item to show unread counts, activity, and more with the help of some
                utilities.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Cras justo odio
    &lt;span class="badge bg-primary rounded-pill"&gt;14&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Dapibus ac facilisis in
    &lt;span class="badge bg-primary rounded-pill"&gt;2&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Morbi leo risus
    &lt;span class="badge bg-primary rounded-pill"&gt;1&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Custom content</h4>
            <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of flexbox
                utilities.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active" aria-current="true"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Checkboxes and radios</h4>
            <p>Place Bootstrap’s checkboxes and radios within list group items and customize as needed. You can use
                them without <code>&lt;label&gt;</code>s, but please remember to include an <code>aria-label</code>
                attribute and value for accessibility.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Cras justo odio
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Dapibus ac facilisis in
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Morbi leo risus
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Porta ac consectetur ac
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Vestibulum at eros
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>And if you want <code>&lt;label&gt;</code>s as the <code>.list-group-item</code> for large hit areas, you
                can do that, too.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Cras justo odio
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Dapibus ac facilisis in
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Morbi leo risus
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Porta ac consectetur ac
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Vestibulum at eros
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Cras justo odio
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Dapibus ac facilisis in
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Morbi leo risus
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Porta ac consectetur ac
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Vestibulum at eros
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>JavaScript behavior</h4>
            <p>Use the tab JavaScript plugin—include it individually or through the compiled
                <code>bootstrap.js</code> file—to extend our list group to create tabbable panes of local content.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                   data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                   data-bs-toggle="list" href="#list-profile" role="tab"
                                   aria-controls="profile">Profile</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                   data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                   data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                     aria-labelledby="list-home-list">Home content...
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                     aria-labelledby="list-profile-list">Profile content...
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                     aria-labelledby="list-messages-list">Message content...
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                     aria-labelledby="list-settings-list">Settings content...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Cras justo odio
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Dapibus ac facilisis in
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Morbi leo risus
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Porta ac consectetur ac
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Vestibulum at eros
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
