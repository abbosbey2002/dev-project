<x-layouts.main>

    <div id="anywhere-home"></div>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Services</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.html" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                        <span> / </span>
                        <a href="#" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- service-appoinment-area start -->
    <div class="rts-service-area bg-light rts-section-gap service-bg_shape service-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Services</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Service We
                            Provide</h3>
                    </div>
                </div>
            </div>
            <div class="row g-24 mt--5">
               @foreach ($services as $service)
               <div class="col-lg-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <!-- single service area start -->
                <div class="rts-single-service-one">
                    <div class="icon">
                        <img src={{asset('storage/'.$service->image)}} alt="axela_service">
                    </div>
                    <a href="#">
                        <h5 class="title">
                            {{$service->name}}
                        </h5>
                    </a>
                    <p class="disc">
                        {{$service->description}}
                    </p>
                    <a href={{route('serviceSingle', ['id'=>$service->id])}} class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                </div>
                <!-- single service area end -->
            </div>
               @endforeach
                <div class="col-lg-3" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/02.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Digital Marketing
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/03.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Web Development
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/04.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Technology Solution
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/05.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Business Solution
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/06.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Creative Layout
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/07.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Content strategy
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <!-- single service area start -->
                    <div class="rts-single-service-one">
                        <div class="icon">
                            <img src="assets/images/service/08.svg" alt="axela_service">
                        </div>
                        <a href="#">
                            <h5 class="title">
                                Product Design
                            </h5>
                        </a>
                        <p class="disc">
                            Nisullam congue rhoncus risus dapibus habitant mauris eget ante pharetra.
                        </p>
                        <a href="#" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- service-appoinment-area End -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Simple Easy Quick Steps</span>
                            <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Have any project in <br>your Mind?</h3>
                        </div>
                        <div class="cta-contact-box">
                            <div class="left-side">
                                <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Mail us anytime</p>
                                <a href="#" class="email" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">info@example.com</a>
                            </div>
                            <div class="right-side">
                                <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Call us 24/7</p>
                                <a href="#" class="phone" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">+252-2136.21458</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- rts pricing area start -->
    <div class="pricing-area-h2 rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Price Table</span>
                        <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our Price
                            Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row g-24">
                <div class="col-lg-4">
                    <!-- single pricing start -->
                    <div class="single-pricing-area-h2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-head">
                            <h5 class="title">
                                Price Table
                            </h5>
                        </div>
                        <div class="pricing-body">
                            <h3 class="title">
                                $29 <span>/month</span>
                            </h3>
                            <p class="disc">
                                Sodales curae dictum nisi duis purus sapien cum facilisi odio
                            </p>
                            <div class="feature-area">
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Business Solution</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Expert Consultancy</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Growth Management</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Marketing Expert</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Content Solution</span>
                                </div>
                            </div>
                            <a class="rts-btn btn-secondary" href="#">Get Started</a>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
                <div class="col-lg-4">
                    <!-- single pricing start -->
                    <div class="single-pricing-area-h2 standared" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-head">
                            <h5 class="title">
                                Standard Plan
                            </h5>
                        </div>
                        <div class="pricing-body">
                            <h3 class="title">
                                $59 <span>/month</span>
                            </h3>
                            <p class="disc">
                                Sodales curae dictum nisi duis purus sapien cum facilisi odio
                            </p>
                            <div class="feature-area">
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Business Solution</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Expert Consultancy</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Growth Management</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Marketing Expert</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Content Solution</span>
                                </div>
                            </div>
                            <a class="rts-btn btn-secondary" href="#">Get Started</a>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
                <div class="col-lg-4">
                    <!-- single pricing start -->
                    <div class="single-pricing-area-h2" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-head">
                            <h5 class="title">
                                Premium Plan
                            </h5>
                        </div>
                        <div class="pricing-body">
                            <h3 class="title">
                                $89 <span>/month</span>
                            </h3>
                            <p class="disc">
                                Sodales curae dictum nisi duis purus sapien cum facilisi odio
                            </p>
                            <div class="feature-area">
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Business Solution</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Expert Consultancy</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Growth Management</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Marketing Expert</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Content Solution</span>
                                </div>
                            </div>
                            <a class="rts-btn btn-secondary" href="#">Get Started</a>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->

    <!-- start Footer area -->


</x-layouts.main>
