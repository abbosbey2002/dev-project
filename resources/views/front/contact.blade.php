<x-layouts.main>

    <div class="row">
        <div class="col-12">
        <div class="appoinment-area-one mt--120 mt_sm--60">
            <div class="row">
                <div class="col-lg-6">
                    <!-- appoinment left area -->
                    <div class="appoinment-left">
                        <div class="title-area">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                Get in touch
                            </span>
                            <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                Have Any Project Plan
                                In Your Mind?
                            </h3>
                            <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                Parturient gravida dis auctor augue vivamus cras pellentesque hac, vametus
                                tortor aptent turpis nam. Etiam integer eros pulvinar fusce justo nam
                                phasellus consequat sagittis parturient.
                            </p>

                           @foreach ($contacts as $contact)
                           <div class="communicate-area mt--30" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                            <img src="assets/images/appoinment/icon/01.svg" alt="creative_icon">
                            <div class="details-area">
                                <span>{{{$contact->type}}} us 24/7:</span>
                                <a href={{$contact->adress}}>{{$contact->adress}}</a>
                            </div>
                        </div>
                           @endforeach
                        </div>
                    </div>
                    <!-- appoinment left area End -->
                </div>
                <div class="col-lg-6">
                    <!-- appoinment-right -->
                    <div class="appoinment-right">
                        <form action="#">
                            <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <label for="name">Your Name*</label>
                                <input type="text" id="name" required>
                            </div>
                            <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                <label for="Email">Your Email*</label>
                                <input type="text" id="Email" required>
                            </div>
                            <div class="single-input mt--20" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                <label for="message">How can we help you?</label>
                                <textarea id="message"></textarea>
                            </div>
                            <button class="rts-btn btn-primary mt--30">Submit Now</button>
                        </form>
                    </div>
                    <!-- appoinment-right End -->
                </div>
            </div>
        </div>
        <div class="appoinment-shape">
            <img class="shape-1 shape" src="assets/images/appoinment/shape/01.png" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
            <img class="shape shape-2" src="assets/images/appoinment/shape/02.png" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
        </div>
    </div>
</div>

</x-layouts.main>
