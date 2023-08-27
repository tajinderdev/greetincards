@extends('layouts.auth')

@section('page-title', 'Account Verified')

@section('content')

    <div class="form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="card py-0 py-lg-4">
                        <div class="row">
                            <div class="col align-items-center justify-content-between flex-column text-center">
                                <figure class="mb-5">
                                    <img width="120" src="{{ url('assets/images/logo.svg') }}" alt="logo">
                                </figure>
                                <div class="display-8 mb-4">Congratulations 😉</div>
                                <p class="mb-4">Your account has been activated. Enjoy the freedom now.</p>
                                <div class="row my-5">
                                    <div class="col-3 m-auto">
                                        <img class="img-fluid" src="{{ url('assets/svg/congratulations.svg') }}" alt="...">
                                    </div>
                                </div>
                                <button class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
