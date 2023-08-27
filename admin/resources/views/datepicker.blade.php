@extends('layouts.app')

@section('page-title', 'Datepicker')

@section('head')
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ url("libs/datepicker/daterangepicker.css") }}">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url("libs/prism/prism.css") }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">
                A JavaScript component for choosing date ranges, dates and times. <a
                    href="http://www.daterangepicker.com/" target="_blank">Plugin
                    page</a>.
            </p>

            <h4>Usage</h4>
            <p>To use the plugin, you need to add the following files.</p>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="libs/datepicker/daterangepicker.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="libs/datepicker/daterangepicker.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>

            <h4>Single Date Picker</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" name="single-date-picker" class="form-control">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" name="daterangepicker" class="form-control"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code class="language-js">$('input[name="daterangepicker"]').daterangepicker({
   singleDatePicker: true,
   showDropdowns: true
});</code></pre>
                </div>
            </div>

            <h4>Date Range Picker</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" name="simple-date-range-picker" class="form-control">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" name="daterangepicker" class="form-control"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                    <pre><code
                                class="language-js">$('input[name="daterangepicker"]').daterangepicker();</code></pre>
                </div>
            </div>

            <h4>With a Callback</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" name="simple-date-range-picker-callback" class="form-control">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" name="daterangepicker" class="form-control"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                                        <pre><code class="language-js">$('input[name="daterangepicker"]').daterangepicker({
}, function (start, end, label) {
    swal("A new date selection was made", start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'), "success")
});</code></pre>
                </div>
            </div>

            <h4>With time selection</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" name="datetimes" class="form-control">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" name="datetimes" class="form-control"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-js">$('input[name="datetimes"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
        format: 'M/DD hh:mm A'
    }
});</code></pre>
                </div>
            </div>

            <h4>Input Initially Empty</h4>

            <div class="card">
                <div class="card-body">
                    <input type="text" name="datefilter" class="form-control">
                </div>
                <div class="demo-code-preview">
                    <pre><code class="language-html">&lt;input type="text" name="datefilter" class="form-control"&gt;</code></pre>
                </div>
            </div>

            <div class="card">
                <div class="demo-code-preview">
                                <pre><code class="language-js">var datefilter = $('input[name="datefilter"]');
datefilter.daterangepicker({
    autoUpdateInput: false,
    locale: {
        cancelLabel: 'Clear'
    }
});

datefilter.on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
});

$('input.create-event-datepicker').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    autoUpdateInput: false
}).on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY'));
});</code></pre>
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
    <!-- Datepicker -->
    <script src="{{ url("libs/datepicker/daterangepicker.js") }}"></script>
    <script src="{{ url("dist/js/examples/datepicker.js") }}"></script>

    <!-- Prism -->
    <script src="{{ url("libs/prism/prism.js") }}"></script>
@endsection
