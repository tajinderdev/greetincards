@extends('layouts.app')

@section('page-title', 'Tables')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">Documentation and examples for opt-in styling of tables (given their prevalent use in
                JavaScript plugins) with Bootstrap.</p>

            <h4>Basic example</h4>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First&lt;/th&gt;
      &lt;th&gt;Last&lt;/th&gt;
      &lt;th&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th&gt;3&lt;/th&gt;
      &lt;td colspan="2"&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h4>Variants</h4>
            <p>Use contextual classes to color tables, table rows or individual cells.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Class</th>
                                <th>Heading</th>
                                <th>Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>Default</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-primary">
                                <th>Primary</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-secondary">
                                <th>Secondary</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-success">
                                <th>Success</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-danger">
                                <th>Danger</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-warning">
                                <th>Warning</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-info">
                                <th>Info</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-light">
                                <th>Light</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-dark">
                                <th>Dark</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;!-- On tables --&gt;
&lt;table class="table-primary"&gt;...&lt;/table&gt;
&lt;table class="table-secondary"&gt;...&lt;/table&gt;
&lt;table class="table-success"&gt;...&lt;/table&gt;
&lt;table class="table-danger"&gt;...&lt;/table&gt;
&lt;table class="table-warning"&gt;...&lt;/table&gt;
&lt;table class="table-info"&gt;...&lt;/table&gt;
&lt;table class="table-light"&gt;...&lt;/table&gt;
&lt;table class="table-dark"&gt;...&lt;/table&gt;

&lt;!-- On rows --&gt;
&lt;tr class="table-primary"&gt;...&lt;/tr&gt;
&lt;tr class="table-secondary"&gt;...&lt;/tr&gt;
&lt;tr class="table-success"&gt;...&lt;/tr&gt;
&lt;tr class="table-danger"&gt;...&lt;/tr&gt;
&lt;tr class="table-warning"&gt;...&lt;/tr&gt;
&lt;tr class="table-info"&gt;...&lt;/tr&gt;
&lt;tr class="table-light"&gt;...&lt;/tr&gt;
&lt;tr class="table-dark"&gt;...&lt;/tr&gt;

&lt;!-- On cells (`td` or `th`) --&gt;
&lt;tr&gt;
  &lt;td class="table-primary"&gt;...&lt;/td&gt;
  &lt;td class="table-secondary"&gt;...&lt;/td&gt;
  &lt;td class="table-success"&gt;...&lt;/td&gt;
  &lt;td class="table-danger"&gt;...&lt;/td&gt;
  &lt;td class="table-warning"&gt;...&lt;/td&gt;
  &lt;td class="table-info"&gt;...&lt;/td&gt;
  &lt;td class="table-light"&gt;...&lt;/td&gt;
  &lt;td class="table-dark"&gt;...&lt;/td&gt;
&lt;/tr&gt;</code></pre>
                </div>
            </div>

            <h4>Accented tables</h4>

            <h5>Striped rows</h5>
            <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the
                <code>&lt;tbody&gt;</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-striped"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <p>These classes can also be added to table variants:</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-dark table-striped"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-success table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-success table-striped"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h5>Hoverable rows</h5>
            <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-hover"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-dark table-hover"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <p>These hoverable rows can also be combined with the striped variant:</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-striped table-hover"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h5>Active tables</h5>
            <p>Highlight a table row or cell by adding a <code>.table-active</code> class.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table-active">
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table"&gt;
  &lt;thead&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr class="table-active"&gt;
      ...
    &lt;/tr&gt;
    &lt;tr&gt;
      ...
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th&gt;3&lt;/th&gt;
      &lt;td colspan="2" class="table-active"&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h4>Table borders</h4>
            <h5>Bordered tables</h5>
            <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-bordered"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <p>Border color utilities can be added to change colors:</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-bordered border-primary"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h5>Tables without borders</h5>
            <p>Add <code>.table-borderless</code> for a table without borders.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-borderless"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-dark table-borderless">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-dark table-borderless"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h4>Small tables</h4>
            <p>Add <code>.table-sm</code> to make any <code>.table</code> more compact by cutting all cell
                <code>padding</code> in half.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table table-sm"&gt;
  ...
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h4>Anatomy</h4>
            <h5>Table head</h5>
            <p>Similar to tables and dark tables, use the modifier classes <code>.table-light</code> or <code>.table-dark</code>
                to make <code>&lt;thead&gt;</code>s appear light or dark gray.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table"&gt;
  &lt;thead class="table-light"&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table"&gt;
  &lt;thead class="table-dark"&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h5>Table foot</h5>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Footer</th>
                                <td>Footer</td>
                                <td>Footer</td>
                                <td>Footer</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table"&gt;
  &lt;thead&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
  &lt;tfoot&gt;
    ...
  &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h5>Captions</h5>
            <p>A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers
                to find a table and understand what it’s about and decide if they want to read it.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <caption>List of users</caption>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table"&gt;
  &lt;caption&gt;List of users&lt;/caption&gt;
  &lt;thead&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <p>You can also put the <code>&lt;caption&gt;</code> on the top of the table with <code>.caption-top</code>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table caption-top">
                            <caption>List of users</caption>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;table class="table caption-top"&gt;
  &lt;caption&gt;List of users&lt;/caption&gt;
  &lt;thead&gt;
    ...
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                </div>
            </div>

            <h4>Always responsive</h4>
            <p>Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.</p>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Heading</th>
                                <th>Heading</th>
                                <th>Heading</th>
                                <th>Heading</th>
                                <th>Heading</th>
                                <th>Heading</th>
                                <th>Heading</th>
                                <th>Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <th>Cell</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <th>Cell</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <th>Cell</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;div class="table-responsive"&gt;
  &lt;table class="table"&gt;
    ...
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Javascript Responsive Table</h4>
            <p>For mobile-compatible tables, add the <code>.table-responsive-stack</code> class.</p>

            <div class="alert alert-info alert-with-border alert-dismissible" role="alert">
                <i class="ti-alert"></i> Open your browser in mobile mode.
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped table-responsive-stack">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Taste</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Apple</td>
                            <td>Green and Red</td>
                            <td>Sweet and Tart</td>
                        </tr>
                        <tr>
                            <td>Banana</td>
                            <td>Yellow</td>
                            <td>Sweet and Mushy</td>
                        </tr>
                        <tr>
                            <td>Mango</td>
                            <td>Yellowish Green</td>
                            <td>Tangy</td>
                        </tr>
                        <tr>
                            <td>Orange</td>
                            <td>Orange</td>
                            <td>Sweet and Tangy</td>
                        </tr>
                        <tr>
                            <td>Blueberry</td>
                            <td>Blue</td>
                            <td>Mild Sweetness</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;table class="table table-bordered table-striped table-responsive-stack"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Name&lt;/th&gt;
      &lt;th&gt;Color&lt;/th&gt;
      &lt;th&gt;Taste&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Apple&lt;/td&gt;
      &lt;td&gt;Green and Red&lt;/td&gt;
      &lt;td&gt;Sweet and Tart&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Banana&lt;/td&gt;
      &lt;td&gt;Yellow&lt;/td&gt;
      &lt;td&gt;Sweet and Mushy&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Mango&lt;/td&gt;
      &lt;td&gt;Yellowish Green&lt;/td&gt;
      &lt;td&gt;Tangy&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Orange&lt;/td&gt;
      &lt;td&gt;Orange&lt;/td&gt;
      &lt;td&gt;Sweet and Tangy&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Blueberry&lt;/td&gt;
      &lt;td&gt;Blue&lt;/td&gt;
      &lt;td&gt;Mild Sweetness&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
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
