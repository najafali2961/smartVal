<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-faqs w-100">
                    <div class="img mb-4 mb-sm-0"
                        style="background-image: url('{{ asset('assets/images/about-2.jpg') }}');"></div>
                    <div class="img img-2 mb-4 mb-sm-0"
                        style="background-image: url('{{ asset('assets/images/about-1.jpg') }}');"></div>
                </div>
            </div>

            <div class="col-lg-6 pl-lg-5">
                <div class="heading-section mb-5 mt-5 mt-lg-0">
                    <span class="subheading">@lang('app.faqs')</span>
                    <h2 class="mb-3">@lang('app.frequently_asked_questions')</h2>
                    <p>@lang('app.faq_intro')</p>
                </div>

                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">

                    {{-- FAQ 1 --}}
                    <div class="card">
                        <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                                <button href="#collapseOne"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <p class="mb-0">@lang('app.faq_q1')</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>

                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>@lang('app.faq_q1_list.0')</li>
                                    <li>@lang('app.faq_q1_list.1')</li>
                                    <li>@lang('app.faq_q1_list.2')</li>
                                    <li>@lang('app.faq_q1_list.3')</li>
                                    <li>@lang('app.faq_q1_list.4')</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    {{-- FAQ 2 --}}
                    <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseTwo"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <p class="mb-0">@lang('app.faq_q2')</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>

                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>@lang('app.faq_q1_list.0')</li>
                                    <li>@lang('app.faq_q1_list.1')</li>
                                    <li>@lang('app.faq_q1_list.2')</li>
                                    <li>@lang('app.faq_q1_list.3')</li>
                                    <li>@lang('app.faq_q1_list.4')</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    {{-- FAQ 3 --}}
                    <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseThree"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <p class="mb-0">@lang('app.faq_q3')</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>

                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>@lang('app.faq_q1_list.0')</li>
                                    <li>@lang('app.faq_q1_list.1')</li>
                                    <li>@lang('app.faq_q1_list.2')</li>
                                    <li>@lang('app.faq_q1_list.3')</li>
                                    <li>@lang('app.faq_q1_list.4')</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    {{-- FAQ 4 --}}
                    <div class="card">
                        <div class="card-header p-0" id="headingFour" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseFour"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                    data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <p class="mb-0">@lang('app.faq_q4')</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>

                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
                            <div class="card-body py-3 px-0">
                                <p>@lang('app.faq_q4_answer')</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
