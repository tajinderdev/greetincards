@extends('layouts.app')

@section('page-title', 'Form Controls')

@section('head')
<!-- Prism -->
<link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

<div class="row">
    <div class="order-2 order-lg-1 col-lg-9 bd-content">
        <p class="lead">Give textual form controls like <code>&lt;input&gt;</code>s and
            <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.</p>
            <h4>Example</h4>
            
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="mb-3"&gt;
                        &lt;label for="exampleFormControlInput1" class="form-label"&gt;Email address&lt;/label&gt;
                        &lt;input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"&gt;
                        &lt;/div&gt;
                        &lt;div class="mb-3"&gt;
                        &lt;label for="exampleFormControlTextarea1" class="form-label"&gt;Example textarea&lt;/label&gt;
                        &lt;textarea class="form-control" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;
                        &lt;/div&gt;</code></pre>
                    </div>
                </div>
                
                <h4>Sizing</h4>
                <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                
                <div class="card">
                    <div class="card-body">
                        <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg"
                        aria-label=".form-control-lg example">
                        <input class="form-control mb-3" type="text" placeholder="Default input"
                        aria-label="default input example">
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                        aria-label=".form-control-sm example">
                    </div>
                    <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example"&gt;
                            &lt;input class="form-control" type="text" placeholder="Default input" aria-label="default input example"&gt;
                            &lt;input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example"&gt;</code></pre>
                        </div>
                    </div>
                    
                    <h4>Disabled</h4>
                    <p>Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove
                        pointer events.</p>
                        
                        <div class="card">
                            <div class="card-body">
                                <input class="form-control mb-3" type="text" placeholder="Disabled input"
                                aria-label="Disabled input example" disabled>
                                <input class="form-control" type="text" placeholder="Disabled readonly input"
                                aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled&gt;
                                    &lt;input class="form-control" type="text" placeholder="Disabled readonly input" aria-label="Disabled input example" disabled readonly&gt;</code></pre>
                                </div>
                            </div>
                            
                            <h4>Readonly</h4>
                            <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s
                                value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.
                            </p>
                            
                            <div class="card">
                                <div class="card-body">
                                    <input class="form-control" type="text" placeholder="Readonly input here..."
                                    aria-label="readonly input example" readonly>
                                </div>
                                <div class="demo-code-preview">
                                    <pre><code class="language-html">&lt;input class="form-control" type="text" placeholder="Readonly input here..." aria-label="readonly input example" readonly&gt;</code></pre>
                                </div>
                            </div>
                            
                            <h4>Readonly plain text</h4>
                            <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s
                                value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.
                            </p>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="demo-code-preview">
                                    <pre><code class="language-html">&lt;div class="mb-3 row"&gt;
                                        &lt;label for="staticEmail" class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
                                        &lt;div class="col-sm-10"&gt;
                                        &lt;input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com"&gt;
                                        &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="mb-3 row"&gt;
                                        &lt;label for="inputPassword" class="col-sm-2 col-form-label"&gt;Password&lt;/label&gt;
                                        &lt;div class="col-sm-10"&gt;
                                        &lt;input type="password" class="form-control" id="inputPassword"&gt;
                                        &lt;/div&gt;
                                        &lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <form class="row g-3">
                                            <div class="col-auto">
                                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                                                value="email@example.com">
                                            </div>
                                            <div class="col-auto">
                                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary">Confirm identity</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="demo-code-preview">
                                        <pre><code class="language-html">&lt;form class="row g-3"&gt;
                                            &lt;div class="col-auto"&gt;
                                            &lt;label for="staticEmail2" class="visually-hidden"&gt;Email&lt;/label&gt;
                                            &lt;input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com"&gt;
                                            &lt;/div&gt;
                                            &lt;div class="col-auto"&gt;
                                            &lt;label for="inputPassword2" class="visually-hidden"&gt;Password&lt;/label&gt;
                                            &lt;input type="password" class="form-control" id="inputPassword2" placeholder="Password"&gt;
                                            &lt;/div&gt;
                                            &lt;div class="col-auto"&gt;
                                            &lt;button type="submit" class="btn btn-primary mb-3"&gt;Confirm identity&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;/form&gt;</code></pre>
                                        </div>
                                    </div>
                                    
                                    <h4>File input</h4>
                                    
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Default file input example</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                                <input class="form-control" type="file" id="formFileDisabled" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFileSm" class="form-label">Small file input example</label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>
                                            <div>
                                                <label for="formFileLg" class="form-label">Large file input example</label>
                                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                                            </div>
                                        </div>
                                        <div class="demo-code-preview">
                                            <pre><code class="language-html">&lt;div class="mb-3"&gt;
                                                &lt;label for="formFile" class="form-label"&gt;Default file input example&lt;/label&gt;
                                                &lt;input class="form-control" type="file" id="formFile"&gt;
                                                &lt;/div&gt;
                                                &lt;div class="mb-3"&gt;
                                                &lt;label for="formFileMultiple" class="form-label"&gt;Multiple files input example&lt;/label&gt;
                                                &lt;input class="form-control" type="file" id="formFileMultiple" multiple&gt;
                                                &lt;/div&gt;
                                                &lt;div class="mb-3"&gt;
                                                &lt;label for="formFileDisabled" class="form-label"&gt;Disabled file input example&lt;/label&gt;
                                                &lt;input class="form-control" type="file" id="formFileDisabled" disabled&gt;
                                                &lt;/div&gt;
                                                &lt;div class="mb-3"&gt;
                                                &lt;label for="formFileSm" class="form-label"&gt;Small file input example&lt;/label&gt;
                                                &lt;input class="form-control form-control-sm" id="formFileSm" type="file"&gt;
                                                &lt;/div&gt;
                                                &lt;div&gt;
                                                &lt;label for="formFileLg" class="form-label"&gt;Large file input example&lt;/label&gt;
                                                &lt;input class="form-control form-control-lg" id="formFileLg" type="file"&gt;
                                                &lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                        
                                        <h4>Color</h4>
                                        
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="exampleColorInput" class="form-label">Color picker</label>
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                                                title="Choose your color">
                                            </div>
                                            <div class="demo-code-preview">
                                                <pre><code class="language-html">&lt;div class="mb-3"&gt;
                                                    &lt;label for="exampleColorInput" class="form-label"&gt;Color picker&lt;/label&gt;
                                                    &lt;input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color"&gt;
                                                    &lt;/div&gt;</code></pre>
                                                </div>
                                            </div>
                                            
                                            <h4>Datalists</h4>
                                            
                                            <div class="card">
                                                <div class="card-body">
                                                    <label for="exampleDataList" class="form-label">Datalist example</label>
                                                    <input class="form-control" list="datalistOptions" id="exampleDataList"
                                                    placeholder="Type to search...">
                                                    <datalist id="datalistOptions">
                                                        <option value="San Francisco">
                                                            <option value="New York">
                                                                <option value="Seattle">
                                                                    <option value="Los Angeles">
                                                                        <option value="Chicago">
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="demo-code-preview">
                                                                        <pre><code class="language-html">&lt;label for="exampleDataList" class="form-label"&gt;Datalist example&lt;/label&gt;
                                                                            &lt;input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..."&gt;
                                                                            &lt;datalist id="datalistOptions"&gt;
                                                                            &lt;option value="San Francisco"&gt;
                                                                            &lt;option value="New York"&gt;
                                                                            &lt;option value="Seattle"&gt;
                                                                            &lt;option value="Los Angeles"&gt;
                                                                            &lt;option value="Chicago"&gt;
                                                                            &lt;/datalist&gt;</code></pre>
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
