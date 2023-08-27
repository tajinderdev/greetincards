@extends('layouts.app')

@section('page-title', 'Sweet Alert')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ url("libs/animate/animate.min.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">A beautiful, responsive, customizable, accessible (wai-aria) replacement for javascript's
                popup boxes.
                <a href="https://sweetalert2.github.io/" target="_blank">Demo page</a>.</p>

            <h5>Basic example</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example1">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire('Any fool can use a computer')</code></pre>
                </div>
            </div>

            <h5>A modal with a title, an error icon, a text.</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example2 me-1">Question?</button>
                    <button type="button" class="btn btn-success sweetAlert2-example2-success me-1">Success!</button>
                    <button type="button" class="btn btn-warning sweetAlert2-example2-warning me-1">Warning!</button>
                    <button type="button" class="btn btn-danger sweetAlert2-example2-error me-1">Danger!</button>
                    <button type="button" class="btn btn-info sweetAlert2-example2-info">Info!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire(
    'The Internet?',
    'That thing is still around?',
    'question'
)</code></pre>
                </div>
            </div>

            <h5>A modal with a title, an error icon, a text, and a footer</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example3">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="#">Why do I have this issue?</a>'
})</code></pre>
                </div>
            </div>

            <h5>Custom HTML description and buttons with ARIA labels</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example4">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire({
  title: '&lt;strong&gt;HTML &lt;u&gt;example&lt;/u&gt;&lt;/strong&gt;',
  icon: 'info',
  html:
    'You can use &lt;b&gt;bold text&lt;/b&gt;, ' +
    '&lt;a href="//sweetalert2.github.io"&gt;links&lt;/a&gt; ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '&lt;i class="fa fa-thumbs-up"&gt;&lt;/i&gt; Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '&lt;i class="fa fa-thumbs-down"&gt;&lt;/i&gt;',
  cancelButtonAriaLabel: 'Thumbs down'
})</code></pre>
                </div>
            </div>

            <h5>A dialog with three buttons</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example5">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `Save`,
  denyButtonText: `Don't save`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})</code></pre>
                </div>
            </div>

            <h5>A custom positioned dialog</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example6">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})</code></pre>
                </div>
            </div>

            <h5>Custom animation with</h5>

            <p>Add this to your page:</p>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;link rel="stylesheet" href="libs/animate/animate.min.css" type="text/css"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example7">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire({
  title: 'Custom animation with Animate.css',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})</code></pre>
                </div>
            </div>

            <h5>A confirm dialog, with a function attached to the "Confirm"-button...</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example8">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})</code></pre>
                </div>
            </div>

            <h5>Chaining modals (queue) example</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example9">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">Swal.mixin({
  input: 'text',
  confirmButtonText: 'Next &rarr;',
  showCancelButton: true,
  progressSteps: ['1', '2', '3']
}).queue([
  {
    title: 'Question 1',
    text: 'Chaining swal2 modals is easy'
  },
  'Question 2',
  'Question 3'
]).then((result) => {
  if (result.value) {
    const answers = JSON.stringify(result.value)
    Swal.fire({
      title: 'All done!',
      html: `
        Your answers:
        <code>${answers}</code>
      `,
      confirmButtonText: 'Lovely!'
    })
  }
})</code></pre>
                </div>
            </div>

            <h5>Dynamic queue example</h5>

            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary sweetAlert2-example10">Try me!</button>
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-js">const ipAPI = '//api.ipify.org?format=json'

Swal.queue([{
  title: 'Your public IP',
  confirmButtonText: 'Show my public IP',
  text:
    'Your public IP will be received ' +
    'via AJAX request',
  showLoaderOnConfirm: true,
  preConfirm: () => {
    return fetch(ipAPI)
      .then(response => response.json())
      .then(data => Swal.insertQueueStep(data.ip))
      .catch(() => {
        Swal.insertQueueStep({
          icon: 'error',
          title: 'Unable to get your public IP'
        })
      })
  }
}])</code></pre>
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
    <!-- Examples -->
    <script src="{{ url("dist/js/examples/sweet-alert.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
