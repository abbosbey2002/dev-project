<x-layouts.main>
    <!-- header one End -->
    <!-- header one End -->


    <div class="banner-area bg_image--1 bg_image rts-section-gap">
        <div class="container shape-line">
            <div class="row align-items-start pt--100 pt_sm--50 banner-shape-red">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-1 order-1">
                    <div class="banner-one-content-wrapper">
                        <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">All In
                            One Solution For You</span>
                        <h1 class="title-banner" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Build Your Business
                            Easy Solution
                        </h1>
                        <p class="banner-disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            Enim luctus sociis cum quam cubilia penatibus sodales neque tristique tempor dignissim
                            aptent sollicitudin mattis integer magnis
                        </p>
                        <div class="banner-wrapper button" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <a href="#" class="rts-btn btn-primary">Get Started</a>

                            <a href="https://www.youtube.com/embed/KwpA_CvmWV0" class="btn-watch-video fancybox fancybox.iframe ml--25">
                                <span class="icon"></span>
                                <span class="text">Play Video</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2">
                    <div class="banner-shape-area-one">
                        <img src="assets/images/banner/shape/01.png" alt="banner_shape" data-sal-delay="200" data-sal="zoom-in" data-sal-duration="1000">
                    </div>
                    <div class="banner-thumb-1 banner-shape-one">
                        <img src="assets/images/banner/01.png" alt="Creative_banner" data-sal-delay="200" data-sal="zoom-in" data-sal-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our working process area start -->
    <div class="rts-working-process-area rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">How We Work</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our Work Process</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/01.svg" alt="process-logo">
                            <h5 class="title">
                                #1 Design
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/02.svg" alt="process-logo">
                            <h5 class="title">
                                #2 Branding
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/03.svg" alt="process-logo">
                            <h5 class="title">
                                #3 Marketing
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-working-process-one">
                        <div class="inner text-center" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                            <img class="logo" src="assets/images/working-process/logo/04.svg" alt="process-logo">
                            <h5 class="title">
                                #4 Solution
                            </h5>
                            <p class="disc">
                                Tempor lacus sodaleset conub accumsan ornare life
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our working process area end -->

    <!-- counter up area start -->
    <div class="counter-up-area ptb--100 counter-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach ($counters as $count)

                    <div class="counter-up-wrapper-one">
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus">{{$count->experience}}</span></h2>
                            <p class="disc">Years Of Experience</p>
                        </div>
                        <!-- single-counter End -->
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter k-plus">{{$count->project}}</span></h2>
                            <p class="disc">Complete Projects</p>
                        </div>
                        <!-- single-counter End -->
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus">{{$count->client}}</span></h2>
                            <p class="disc">Client Satisfied</p>
                        </div>
                        <!-- single-counter End -->
                        <!-- ingle counter -->
                        <div class="counter-single" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus">{{$count->award}}</span></h2>
                            <p class="disc">Global Award Winning</p>
                        </div>
                        <!-- single-counter End -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- counter up area End -->



    <!-- service-appoinment-area start -->
    <div class="rts-service-area bg-light rts-section-gap service-bg_shape">
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
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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
                        <a href={{route('serviceSingle', ['id'=>$service->id])}}  class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- single service area end -->
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- service-appoinment-area End -->

    <!-- rts-case studies area start -->
    <div class="rts-project-area-one rts-section-gap bg_dark">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area-product">
                        <div class="title-area text-start">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Projects We
                                Have</span>
                            <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our Case
                                Studies</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="shape-image-product">
                        <img src="assets/images/product/shape/01.png" alt="Image_shape" data-sal-delay="350" data-sal="slide-right" data-sal-duration="800">
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- ingle-tab start -->
                            <div class="row g-6">
                                @foreach ($projects as $project)
                                <div class="col-lg-6">
                                    <!-- single -product -->
                                    <div class="single-product-one">
                                        <a class="thumbnail" href={{route('projectsingle', ['id'=>$project->id])}}><img src={{asset('storage/'.$project->image)}} alt="Propduct_images"></a>
                                        <div class="inner-content">
                                            <span>{{$project->deadline}}</span>
                                            <a href="project-details.html">
                                                <h4 class="title">
                                                    {{$project->name}}
                                                </h4>
                                            </a>
                                            <a href={{route('projectsingle', ['id'=>$project->id])}} class="rts-read-more">Learn More<i
                                                    class="far fa-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- single -product End-->
                                </div>
                                @endforeach
                            </div>
                            <!-- ingle-tab end -->
                        </div>
                            <!-- ingle-tab end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-case studies area end -->



</x-layouts.main>
