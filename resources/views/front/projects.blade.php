<x-layouts.main>
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Portfolio Style 2</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.html" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                        <span> / </span>
                        <a href="#" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Portfolio Style 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="case-study-area case-bg2 nav-style-1 pt--115 pt_md--60 pt_xs--60 pb--115 pb_md--60 pb_xs--60">
        <div class="container">
            <div class="row">
               @foreach ($projects as $project)


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src={{ asset('storage/'.$project->image)}} alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Marketing</h6>
                                <h5 class="fs-20 text-heding3">{{$project->name}}</h5>
                                <p>{{$project->description}}</p>
                            </div>

                            <a href={{route('projectsingle', ['id'=>$project->id])}} class="read-more">Case Details <span class="f-right"><i
                                        class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
</x-layouts.main>
