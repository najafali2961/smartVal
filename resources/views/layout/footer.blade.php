<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="row">

                    <!-- About -->
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">{{ __('app.footer_about_title') }}</h2>
                        <p>{{ __('app.footer_about_text') }}</p>

                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="{{ __('app.footer_twitter') }}">
                                    <span class="fa fa-whatsapp"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="{{ __('app.footer_facebook') }}">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="{{ __('app.footer_instagram') }}">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Links -->
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">

                                    <!-- Services Column -->
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">{{ __('app.footer_services') }}</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('services') }}"
                                                    class="py-1 d-block">{{ __('app.footer_services_link') }}</a></li>



                                        </ul>
                                    </div>

                                    <!-- Discover Column -->
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">{{ __('app.footer_discover') }}</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('home') }}"
                                                    class="py-1 d-block">{{ __('app.footer_home') }}</a></li>
                                            <li><a href="{{ route('about') }}"
                                                    class="py-1 d-block">{{ __('app.footer_about') }}</a></li>
                                            {{-- <li><a href="{{ route('blog') }}"
                                                    class="py-1 d-block">{{ __('app.footer_blog') }}</a></li> --}}


                                        </ul>
                                    </div>

                                    <!-- Resources Column -->
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">{{ __('app.footer_resources') }}</h2>
                                        <ul class="list-unstyled">
                                            {{-- <li><a href="{{ route('cases') }}"
                                                    class="py-1 d-block">{{ __('app.footer_case_studies') }}</a></li> --}}
                                            <li><a href="{{ route('contact') }}"
                                                    class="py-1 d-block">{{ __('app.footer_contact') }}</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>
