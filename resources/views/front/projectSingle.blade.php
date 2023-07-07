 <x-layouts.main>

     <!-- start breadcrumb area -->
   <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Portfolio Details</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index.html" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="#" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Portfolio Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- project details image area -->
<div class="rts-project-details-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="big-bg-porduct-details">
                    <img src={{asset('storage/'.$project->image)}} alt="Business_Finbiz">

                </div>
            </div>
        </div>
        <div class="row mt--70 mb--50">
            <div class="col-12">
                <div class="product-details-main-inner">
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">{{$project->name}}</h3>
                    <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"> {{$project->description}} </p>

                </div>
            </div>
        </div>


    </div>
</div>
<!-- project details image area end -->

</x-layouts.main>
