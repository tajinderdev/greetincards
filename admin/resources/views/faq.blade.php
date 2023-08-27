@extends('layouts.app')

@section('page-title', 'FAQ')

@section('content')

    <div class="row my-5">
        <div class="col-lg-6 m-auto">
            <div class="text-center mb-5">
                <div class="display-7">Frequently Asked Questions</div>
            </div>
            <form>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="Search..." autofocus>
                    <button class="btn btn-outline-light" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What do I get with a regular license?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                Can I sell this project?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">All the Lorem Ipsum generators on the Internet tend to repeat
                                predefined chunks as necessary, making this the first true generator on the Internet. It
                                uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                                therefore always free from repetition, injected humour, or non-characteristic words etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                Are the apps paid?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">It uses a dictionary of over 200 Latin words, combined with a
                                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                non-characteristic words etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="heading4">
                                Can I share my account information with others?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">It uses a dictionary of over 200 Latin words, combined with a
                                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                non-characteristic words etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                Can I invite my friend?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">It uses a dictionary of over 200 Latin words, combined with a
                                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                non-characteristic words etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                When will our membership expire?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">It uses a dictionary of over 200 Latin words, combined with a
                                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                non-characteristic words etc.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                How do I delete my subscription?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">It uses a dictionary of over 200 Latin words, combined with a
                                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                non-characteristic words etc.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
