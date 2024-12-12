@extends('layout')

@section('content')

<!-- Heroslider Area -->
<div class="heroslider-area" data-bgimage="{{asset('images/bg/bg-image-5.webp') }}" data-black-overlay="3">

    <!-- Heroslider Slider -->
    <div class="heroslider-slider heroslider-animated tm-slider-dots tm-slider-dots-left" data-white-overlay="7">

        <!-- Heroslider Single -->
        <div class="heroslider-singleslider d-flex align-items-center">
            {{-- <div class="container">
                <div class="row justify-center align-items-center">
                    <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1">
                        <div class="heroslider-content">
                            <h1>Pain makes People change</h1>
                            <p>Massage has a positive effect on
                                every
                                medical condition we have looked
                                at massage is to work and act on the body with pressure.</p>
                            <a href="about-us.html" class="tm-button">About
                                Us</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12 order-1 order-md-2">
                        <div class="heroslider-image">
                            <svg viewBox="0 0 665 645">
                                <defs>
                                    <pattern id="attachedImage1" height="100%" width="100%" patternContentUnits="objectBoundingBox">
                                        <image xlink:href="{{asset('images/heroslider/heroslider-image-1.jpg') }}" preserveAspectRatio="none" width="1" height="1"></image>
                                    </pattern>
                                </defs>
                                <path fill="url(#attachedImage1)" d="M277.030,1.101 C452.838,-10.886 534.393,78.587 579.557,198.565 C624.722,318.542 691.616,359.832 645.425,497.920 C599.233,636.008 432.396,654.275 367.205,638.129 C302.015,621.984 234.375,580.155 153.191,548.742 C32.427,502.014 2.584,440.527 0.176,379.950 C-3.230,294.260 41.806,284.689 56.287,190.747 C73.638,78.186 139.502,10.477 277.030,1.101 Z"></path>
                            </svg>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!--// Heroslider Single -->

        <!-- Heroslider Single -->
        {{-- <div class="heroslider-singleslider d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12">
                        <div class="heroslider-image heroslider-image-left">
                            <svg viewBox="0 0 665 645">
                                <defs>
                                    <pattern id="attachedImage2" height="100%" width="100%" patternContentUnits="objectBoundingBox">
                                        <image xlink:href="{{asset('images/heroslider/heroslider-image-2.jpg') }}" preserveAspectRatio="none" width="1" height="1"></image>
                                    </pattern>
                                </defs>
                                <path fill="url(#attachedImage2)" d="M277.030,1.101 C452.838,-10.886 534.393,78.587 579.557,198.565 C624.722,318.542 691.616,359.832 645.425,497.920 C599.233,636.008 432.396,654.275 367.205,638.129 C302.015,621.984 234.375,580.155 153.191,548.742 C32.427,502.014 2.584,440.527 0.176,379.950 C-3.230,294.260 41.806,284.689 56.287,190.747 C73.638,78.186 139.502,10.477 277.030,1.101 Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="heroslider-content">
                            <h1>Pain makes People change</h1>
                            <p>Massage has a positive effect on
                                every
                                medical condition we have looked
                                at massage is to work and act on the body with pressure.</p>
                            <a href="about-us.html" class="tm-button">About
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--// Heroslider Single -->

        <!-- Heroslider Single -->
        {{-- <div class="heroslider-singleslider d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1">
                        <div class="heroslider-content">
                            <h1>Pain makes People change</h1>
                            <p>Massage has a positive effect on
                                every
                                medical condition we have looked
                                at massage is to work and act on the body with pressure.</p>
                            <a href="about-us.html" class="tm-button">About
                                Us</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12 order-1 order-md-2">
                        <div class="heroslider-image">
                            <svg viewBox="0 0 665 645">
                                <defs>
                                    <pattern id="attachedImage3" height="100%" width="100%" patternContentUnits="objectBoundingBox">
                                        <image xlink:href="{{asset('images/heroslider/heroslider-image-3.jpg') }}" preserveAspectRatio="none" width="1" height="1"></image>
                                    </pattern>
                                </defs>
                                <path fill="url(#attachedImage3)" d="M277.030,1.101 C452.838,-10.886 534.393,78.587 579.557,198.565 C624.722,318.542 691.616,359.832 645.425,497.920 C599.233,636.008 432.396,654.275 367.205,638.129 C302.015,621.984 234.375,580.155 153.191,548.742 C32.427,502.014 2.584,440.527 0.176,379.950 C-3.230,294.260 41.806,284.689 56.287,190.747 C73.638,78.186 139.502,10.477 277.030,1.101 Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--// Heroslider Single -->

    </div>
    <!--// Heroslider Slider -->

</div>
<!--// Heroslider Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- Features Area -->
    {{-- <div class="tm-section features-area bg-white tm-padding-section">
        <div class="container">
            <div class="row justify-content-center mt-30-reverse">

                <!-- Single Feature -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-feature text-center wow fadeInUp">
                        <span class="tm-feature-icon">
                            <i class="flaticon-spa"></i>
                        </span>
                        <span class="tm-feature-backicon">
                            <i class="flaticon-spa"></i>
                        </span>
                        <h5>Massage Therapy</h5>
                        <p>Massage therapy is the manipulation of the soft tissues of the body including
                            muscles, connective tissue, tendons, ligaments and joints.</p>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-feature text-center wow fadeInUp">
                        <span class="tm-feature-icon">
                            <i class="flaticon-physical"></i>
                        </span>
                        <span class="tm-feature-backicon">
                            <i class="flaticon-physical"></i>
                        </span>
                        <h5>Physio Therapy</h5>
                        <p>Physiotherapists spend years studying how the body works, how injuries impact
                            performance &amp; how to recover and repair injured tissues.</p>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-feature text-center wow fadeInUp">
                        <span class="tm-feature-icon">
                            <i class="flaticon-acupuncture"></i>
                        </span>
                        <span class="tm-feature-backicon">
                            <i class="flaticon-acupuncture"></i>
                        </span>
                        <h5>Acupuncture</h5>
                        <p>Acupuncture is a form of alternative medicine
                            in which thin needles are inserted into the
                            body. It is a key component of medicine.</p>
                    </div>
                </div>
                <!--// Single Feature -->

            </div>
        </div>
    </div> --}}
    <!--// Features Area -->

    <!-- About Us -->
    <div class="tm-section about-us-area bg-grey">
        <div class="about-image" data-bgimage="{{asset('images/others/about-image-1.jpg') }}" data-overlay="1">
            <div class="tm-videobutton">
                <a data-fancybox="" href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                    <span><i class="flaticon-play-button"></i></span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="about-content tm-padding-section">
                        <h2><span><span class="color-theme">About</span> Us</span></h2>
                        <p>We at GGTC thrive to offer an epitome of healthy products in line with a redefining palate that caters and serves for a well-nourished Humankind. We practice integrity, commitment and love in every step of the process which could be of selection, quality, high standards, hygiene so on and so forth.</p>
                        <p>Our goal is to uplift the concept of health, its importance, maintenance and endurance that could be an inheritance to generations to come, an exemplary to a healthy society. While it is important to build, create and strive for excellence, we also place the appropriate emphasis on mutual responsibility and highlight its centrality in our growth as a society. </p>
                        <div class="about-contentbottom">
                            <a href="about-us.html" class="tm-button">Read more</a>
                            <a href="tel:+918105423535" class="tm-callbutton">
                                <span class="tm-callbutton-icon"><i class="zmdi zmdi-phone-in-talk"></i></span>
                                <h3>+91-8105423535</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// About Us -->

    <!-- Services Area -->
    {{-- <div class="tm-section services-area tm-padding-section bg-white">
        <span class="bg-shape-left"><img src="{{asset('images/icons/bg-shape-1.png') }}" alt="background shape"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-30-reverse">

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-service text-center wow fadeInUp">
                        <div class="tm-service-inner">
                            <span class="tm-service-icon">
                                <i class="flaticon-rehabilitation"></i>
                            </span>
                            <span class="tm-service-backicon">
                                <i class="flaticon-rehabilitation"></i>
                            </span>
                            <h5><a href="service-details.html">Sports Rehabilitation</a></h5>
                            <p>Aromatherapy uses plant materials and arom
                                atic plant oils, including essential oils. It can
                                be offered as a complementary therapy.</p>
                            <a href="service-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-service text-center wow fadeInUp">
                        <div class="tm-service-inner">
                            <span class="tm-service-icon">
                                <i class="flaticon-physiotherapy"></i>
                            </span>
                            <span class="tm-service-backicon">
                                <i class="flaticon-physiotherapy"></i>
                            </span>
                            <h5><a href="service-details.html">Home Care Physiotherapy</a></h5>
                            <p>Physiotherapists spend years studying how the body works, how injuries impact
                                performance &amp; how to recover and repair injured tissues.</p>
                            <a href="service-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-service text-center wow fadeInUp">
                        <div class="tm-service-inner">
                            <span class="tm-service-icon">
                                <i class="flaticon-aromatherapy-spa-treatment"></i>
                            </span>
                            <span class="tm-service-backicon">
                                <i class="flaticon-aromatherapy-spa-treatment"></i>
                            </span>
                            <h5><a href="service-details.html">Aroma Therapy</a></h5>
                            <p>Aromatherapy uses plant materials and arom
                                atic plant oils, including essential oils. It can
                                be offered as a complementary therapy.</p>
                            <a href="service-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-service text-center wow fadeInUp">
                        <div class="tm-service-inner">
                            <span class="tm-service-icon">
                                <i class="flaticon-rehabilitation-1"></i>
                            </span>
                            <span class="tm-service-backicon">
                                <i class="flaticon-rehabilitation-1"></i>
                            </span>
                            <h5><a href="service-details.html">Physiotherapy</a></h5>
                            <p>A personal injury from vehicle accident trauma is common many times effects of
                                an vehicle
                                injury are delayed or subtle.</p>
                            <a href="service-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-service text-center wow fadeInUp">
                        <div class="tm-service-inner">
                            <span class="tm-service-icon">
                                <i class="flaticon-spa-1"></i>
                            </span>
                            <span class="tm-service-backicon">
                                <i class="flaticon-spa-1"></i>
                            </span>
                            <h5><a href="service-details.html">Relaxation Massage</a></h5>
                            <p>This type of massage treatment is strictly for the purposes of rest and
                                relaxation. massage
                                technique is not designed for therapy.</p>
                            <a href="service-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-12 mt-30">
                    <div class="tm-service text-center wow fadeInUp">
                        <div class="tm-service-inner">
                            <span class="tm-service-icon">
                                <i class="flaticon-accident"></i>
                            </span>
                            <span class="tm-service-backicon">
                                <i class="flaticon-accident"></i>
                            </span>
                            <h5><a href="service-details.html">Vehicle Injury Treatment</a></h5>
                            <p>A personal injury from vehicle accident trauma is common many times effects of
                                an vehicle
                                injury are delayed or subtle.</p>
                            <a href="service-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Service -->

            </div>
        </div>
    </div> --}}
    <!--// Services Area -->

    <!-- Call To Action -->
    {{-- <div class="tm-section call-to-action-area tm-padding-section" data-bgimage="{{asset('images/bg/call-to-action-bg.jpg') }}" data-overlay="8">
        <div class="container">
            <div class="tm-cta">
                <div class="tm-cta-content">
                    <h3>New Patient Special Offer</h3>
                    <h2>For your convenience, you can book your appointment</h2>
                </div>
                <div class="tm-cta-button">
                    <a href="#" class="tm-button tm-button-white">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!--// Call To Action -->

    <!-- Pricing Area -->
    {{-- <div class="tm-section pricing-benifits-area bg-grey tm-padding-section" data-bgimage="{{asset('images/bg/pricing-bg.jpg') }}" data-white-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-pricing-left">
                        <h2><span><span class="color-theme">Benefits</span> of</span><br>
                            Registered Massage Therapy</h2>
                        <p>There are remarkable benefits to be achieved through regular massage
                            therapy treatments from a R
                            egistered Massage Therapist. Massage therapy
                            can be an important part of your health maintenance plan.</p>

                        <ul class="nav" id="bstab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="bstab1-area1-tab" data-toggle="tab" href="#bstab1-area1" role="tab" aria-controls="bstab1-area1" aria-selected="true">Reducing or
                                    eliminating pain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bstab1-area2-tab" data-toggle="tab" href="#bstab1-area2" role="tab" aria-controls="bstab1-area2" aria-selected="false">Improving
                                    joint mobility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bstab1-area3-tab" data-toggle="tab" href="#bstab1-area3" role="tab" aria-controls="bstab1-area3" aria-selected="false">Circulatory
                                    problems</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bstab1-area4-tab" data-toggle="tab" href="#bstab1-area4" role="tab" aria-controls="bstab1-area3" aria-selected="false">Improving
                                    lymphatic drainage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bstab1-area5-tab" data-toggle="tab" href="#bstab1-area5" role="tab" aria-controls="bstab1-area3" aria-selected="false">Reducing
                                    muscular tension</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bstab1-area6-tab" data-toggle="tab" href="#bstab1-area6" role="tab" aria-controls="bstab1-area3" aria-selected="false">Post-surgical
                                    rehabilitation</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tm-pricing-right">
                        <h2>Therapy <span class="color-theme">Rates</span></h2>
                        <p>New and returning clients are encouraged to book a massage appointment
                            online by clicking the book an appointment button</p>

                        <div class="tab-content" id="bstab1-ontent">
                            <div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel" aria-labelledby="bstab1-area1-tab">
                                <h5 class="tm-pricing-name">Rates (Reducing or eliminating pain)</h5>
                                <div class="tm-pricing-priceboxes tm-slider-dots tm-slider-dots-vertical">
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>45 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>60 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>90 <span>minutes</span></h2>
                                        <h3>$120.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>120 <span>minutes</span></h2>
                                        <h3>$160.00</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">
                                <h5 class="tm-pricing-name">Rates (Improving joint mobility)</h5>
                                <div class="tm-pricing-priceboxes tm-slider-dots tm-slider-dots-vertical">
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>45 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>60 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>90 <span>minutes</span></h2>
                                        <h3>$120.00</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bstab1-area3" role="tabpanel" aria-labelledby="bstab1-area3-tab">
                                <h5 class="tm-pricing-name">Rates (Circulatory problems)</h5>
                                <div class="tm-pricing-priceboxes tm-slider-dots tm-slider-dots-vertical">
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>45 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>60 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bstab1-area4" role="tabpanel" aria-labelledby="bstab1-area4-tab">
                                <h5 class="tm-pricing-name">Rates (Improving lymphatic drainage)</h5>
                                <div class="tm-pricing-priceboxes tm-slider-dots tm-slider-dots-vertical">
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>45 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>60 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bstab1-area5" role="tabpanel" aria-labelledby="bstab1-area5-tab">
                                <h5 class="tm-pricing-name">Rates (Reducing muscular tension)</h5>
                                <div class="tm-pricing-priceboxes tm-slider-dots tm-slider-dots-vertical">
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>45 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>60 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bstab1-area6" role="tabpanel" aria-labelledby="bstab1-area6-tab">
                                <h5 class="tm-pricing-name">Rates (Post-surgical rehabilitation)</h5>
                                <div class="tm-pricing-priceboxes tm-slider-dots tm-slider-dots-vertical">
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>45 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>60 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>30 <span>minutes</span></h2>
                                        <h3>$65.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>90 <span>minutes</span></h2>
                                        <h3>$75.00</h3>
                                    </div>
                                    <div class="tm-pricing-pricebox">
                                        <h2>120 <span>minutes</span></h2>
                                        <h3>$90.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--// Pricing Area -->

    <!--  Products Area -->
    <div class="tm-section products-area tm-padding-section bg-white">
        <span class="bg-shape-right"><img src="{{asset('images/icons/bg-shape-2.png') }}" alt="background shape"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Welcome to our shop</h2>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                    </div>
                </div>
            </div>
            <div class="row product-slider-active tm-slider-arrow tm-slider-arrow-hovervisible">

                <!-- Single Product -->
                <div class="col">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <a class="tm-product-imagelink" href="product-details.html">
                                <img src="{{asset('images/product/product-image-1.jpg') }}" alt="product image">
                            </a>
                            <ul class="tm-product-actions">
                                <li><button type="button" data-fancybox="" data-src="#tm-product-quickview"><i class="zmdi zmdi-eye"></i></button></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title"><a href="product-details.html">Cosmetology Essential
                                    oil</a></h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                            <h6 class="tm-product-price">$99.99 <del>$120.00</del></h6>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <a class="tm-product-imagelink" href="product-details.html">
                                <img src="{{asset('images/product/product-image-2.jpg') }}" alt="product image">
                            </a>
                            <ul class="tm-product-actions">
                                <li><button type="button" data-fancybox="" data-src="#tm-product-quickview"><i class="zmdi zmdi-eye"></i></button></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title"><a href="product-details.html">Lavender oil Aroma</a></h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                            <h6 class="tm-product-price">$99.99</h6>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <a class="tm-product-imagelink" href="product-details.html">
                                <img src="{{asset('images/product/product-image-3.jpg') }}" alt="product image">
                            </a>
                            <ul class="tm-product-actions">
                                <li><button type="button" data-fancybox="" data-src="#tm-product-quickview"><i class="zmdi zmdi-eye"></i></button></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title"><a href="product-details.html">Jojoba oil Carrie</a></h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                            <h6 class="tm-product-price">$99.99</h6>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <a class="tm-product-imagelink" href="product-details.html">
                                <img src="{{asset('images/product/product-image-4.jpg') }}" alt="product image">
                            </a>
                            <ul class="tm-product-actions">
                                <li><button type="button" data-fancybox="" data-src="#tm-product-quickview"><i class="zmdi zmdi-eye"></i></button></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title"><a href="product-details.html">White Bamboo Massage</a></h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                            <h6 class="tm-product-price">$99.99</h6>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <a class="tm-product-imagelink" href="product-details.html">
                                <img src="{{asset('images/product/product-image-5.jpg') }}" alt="product image">
                            </a>
                            <ul class="tm-product-actions">
                                <li><button type="button" data-fancybox="" data-src="#tm-product-quickview"><i class="zmdi zmdi-eye"></i></button></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title"><a href="product-details.html">Essential oils</a></h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                            <h6 class="tm-product-price">$99.99</h6>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <a class="tm-product-imagelink" href="product-details.html">
                                <img src="{{asset('images/product/product-image-6.jpg') }}" alt="product image">
                            </a>
                            <ul class="tm-product-actions">
                                <li><button type="button" data-fancybox="" data-src="#tm-product-quickview"><i class="zmdi zmdi-eye"></i></button></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                <li><a href="cart.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title"><a href="product-details.html">Cosmetic product</a></h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                            <h6 class="tm-product-price">$99.99</h6>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

            </div>
        </div>
    </div>
    <!--//  Products Area -->

    <!-- Testimonial Area -->
    <div class="tm-section testimonial-area tm-padding-section bg-grey">
        <div class="bg-animated-shape">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>What Our Customers Say</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-active tm-slider-arrow-2">

                <!-- Testimonial Single -->
                <div class="tm-testimonial-slideritem">
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <div class="tm-testimonial-authorimage">
                                <img src="{{asset('images/authors/author-image-1.jpg') }}" alt="author image">
                            </div>
                            <div class="tm-testimonial-authorinfo">
                                <h5>Penny Beaird</h5>
                                <h6>Financer</h6>
                            </div>
                        </div>
                        <div class="tm-testimonial-content">
                            <p>I started seeing Dr. Robinson on the recommendation of my massage therapist.
                                Massage
                                therapy is the science of movement and function. Massage therapy will help
                                anybody
                                who experiences difficulty with movement strength and pain.</p>
                            <div class="tm-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Testimonial Single -->

                <!-- Testimonial Single -->
                <div class="tm-testimonial-slideritem">
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <div class="tm-testimonial-authorimage">
                                <img src="{{asset('images/authors/author-image-2.jpg') }}" alt="author image">
                            </div>
                            <div class="tm-testimonial-authorinfo">
                                <h5>Ludie Cremin</h5>
                                <h6>Supervisor</h6>
                            </div>
                        </div>
                        <div class="tm-testimonial-content">
                            <p>Quae iusto consequatur consectetur velit at nulla et enim debitis. Eligendi modi
                                consectetur laudantium. Ut quis nobis numquam omnis suscipit eum est omnis.
                                Explicabo ipsum accusamus consectetur animi laudantium quia.</p>
                            <div class="tm-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Testimonial Single -->

                <!-- Testimonial Single -->
                <div class="tm-testimonial-slideritem">
                    <div class="tm-testimonial">
                        <div class="tm-testimonial-author">
                            <div class="tm-testimonial-authorimage">
                                <img src="{{asset('images/authors/author-image-3.jpg') }}" alt="author image">
                            </div>
                            <div class="tm-testimonial-authorinfo">
                                <h5>Ottilie Wisoky</h5>
                                <h6>Marketer</h6>
                            </div>
                        </div>
                        <div class="tm-testimonial-content">
                            <p>Molestias dicta non laboriosam eum ut eos et. Dignissimos temporibus sit quis
                                aut itaque vel. Maiores a est. Id ut aspernatur aliquam cumque aut ut alias
                                accusamus. Minus aperiam fugiat tempora aut repellendus voluptatem debitis
                                sequi.</p>
                            <div class="tm-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span><i class="zmdi zmdi-star"></i></span>
                                <span><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Testimonial Single -->

            </div>
        </div>
    </div>
    <!--// Testimonial Area -->

    <!-- Appointment Information Area -->
    <div class="tm-section appointment-information-area tm-padding-section bg-white">
        <span class="bg-shape-2"><img src="{{asset('images/icons/bg-shape-3.png') }}" alt="background shape"></span>
        <div class="container">
            <div class="row mt-50-reverse">
                <div class="col-lg-6 mt-50">
                    <div class="tm-information">
                        <div class="tm-information-timing">
                            <h5>Opening Hours</h5>
                            <ul>
                                <li>Monday - Friday <span>12:00 - 17:00</span></li>
                                <li>Saturday <span>15:00 - 18:00</span></li>
                                <li>Sunday <span>Closed</span></li>
                            </ul>
                        </div>
                        <div class="tm-information-contact">
                            <h5>Contact Details</h5>
                            <ul>
                                <li><b>Address </b>Golden Gate Trading Centre No.32, Bagalur post, Bagalur Yelahanka Taluk, Bangalore North 562149</li>
                                <li><b>Phone </b>918105423535</li>
                                <li><b>Email </b>contacts@milletsmove.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-50">
                    <div class="tm-appointment">
                        <h2>Reach Out To Us</h2>
                        <form action="#" class="tm-form">
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" required="required" placeholder="Name*">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="email" required="required" placeholder="Email*">
                                </div>
                                <div class="tm-form-field">
                                    <input type="text" required="required" placeholder="Subject*">
                                </div>
                                <div class="tm-form-field">
                                    <textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Appointment Information Area -->

    <!-- Latest Blog Area -->
    {{-- <div class="tm-section latest-blog-area tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Our Latest News</h2>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-active tm-slider-dots">

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/blog-image-1.jpg') }}" alt="blog image">
                            </a>
                            <span class="tm-blog-date">18 Nov, 2019</span>
                        </div>
                        <div class="tm-blog-bottom">
                            <div class="tm-blog-meta">
                                <span><a href="blog.html"><i class="zmdi zmdi-account"></i> Admin</a></span>
                                <span><a href="blog-details.html"><i class="zmdi zmdi-comments"></i> Comments (0)</a></span>
                                <span><a href="blog.html"><i class="zmdi zmdi-folder"></i> Services</a></span>
                            </div>
                            <h5 class="tm-blog-title"><a href="blog-details.html">Suffering With Back Pain</a></h5>
                            <p>Back pain is a common reason for absence from work. One of the most important
                                things you can do for back pain prevention is to get up and get moving.</p>
                            <a href="blog-details.html" class="tm-button tm-button-dark">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/blog-image-2.jpg') }}" alt="blog image">
                            </a>
                            <span class="tm-blog-date">18 Nov, 2019</span>
                        </div>
                        <div class="tm-blog-bottom">
                            <div class="tm-blog-meta">
                                <span><a href="blog.html"><i class="zmdi zmdi-account"></i> Admin</a></span>
                                <span><a href="blog-details.html"><i class="zmdi zmdi-comments"></i> Comments (0)</a></span>
                                <span><a href="blog.html"><i class="zmdi zmdi-folder"></i> Services</a></span>
                            </div>
                            <h5 class="tm-blog-title"><a href="blog-details.html">Positive Effects Of Massage Therapy</a></h5>
                            <p>Back pain is a common reason for absence from work. One of the most important
                                things you can do for back pain prevention is to get up and get moving.</p>
                            <a href="blog-details.html" class="tm-button tm-button-dark">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/blog-image-3.jpg') }}" alt="blog image">
                            </a>
                            <span class="tm-blog-date">18 Nov, 2019</span>
                        </div>
                        <div class="tm-blog-bottom">
                            <div class="tm-blog-meta">
                                <span><a href="blog.html"><i class="zmdi zmdi-account"></i> Admin</a></span>
                                <span><a href="blog-details.html"><i class="zmdi zmdi-comments"></i> Comments (0)</a></span>
                                <span><a href="blog.html"><i class="zmdi zmdi-folder"></i> Services</a></span>
                            </div>
                            <h5 class="tm-blog-title"><a href="blog-details.html">Benefits Of Massage Therapy</a></h5>
                            <p>Back pain is a common reason for absence from work. One of the most important
                                things you can do for back pain prevention is to get up and get moving.</p>
                            <a href="blog-details.html" class="tm-button tm-button-dark">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/blog-image-4.jpg') }}" alt="blog image">
                            </a>
                            <span class="tm-blog-date">18 Nov, 2019</span>
                        </div>
                        <div class="tm-blog-bottom">
                            <div class="tm-blog-meta">
                                <span><a href="blog.html"><i class="zmdi zmdi-account"></i> Admin</a></span>
                                <span><a href="blog-details.html"><i class="zmdi zmdi-comments"></i> Comments (0)</a></span>
                                <span><a href="blog.html"><i class="zmdi zmdi-folder"></i> Services</a></span>
                            </div>
                            <h5 class="tm-blog-title"><a href="blog-details.html">Techniques used in Physiotherapy</a></h5>
                            <p>Back pain is a common reason for absence from work. One of the most important
                                things you can do for back pain prevention is to get up and get moving.</p>
                            <a href="blog-details.html" class="tm-button tm-button-dark">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/blog-image-5.jpg') }}" alt="blog image">
                            </a>
                            <span class="tm-blog-date">18 Nov, 2019</span>
                        </div>
                        <div class="tm-blog-bottom">
                            <div class="tm-blog-meta">
                                <span><a href="blog.html"><i class="zmdi zmdi-account"></i> Admin</a></span>
                                <span><a href="blog-details.html"><i class="zmdi zmdi-comments"></i> Comments (0)</a></span>
                                <span><a href="blog.html"><i class="zmdi zmdi-folder"></i> Services</a></span>
                            </div>
                            <h5 class="tm-blog-title"><a href="blog-details.html">Suffering With Back Pain</a></h5>
                            <p>Back pain is a common reason for absence from work. One of the most important
                                things you can do for back pain prevention is to get up and get moving.</p>
                            <a href="blog-details.html" class="tm-button tm-button-dark">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/blog/blog-image-6.jpg') }}" alt="blog image">
                            </a>
                            <span class="tm-blog-date">18 Nov, 2019</span>
                        </div>
                        <div class="tm-blog-bottom">
                            <div class="tm-blog-meta">
                                <span><a href="blog.html"><i class="zmdi zmdi-account"></i> Admin</a></span>
                                <span><a href="blog-details.html"><i class="zmdi zmdi-comments"></i> Comments (0)</a></span>
                                <span><a href="blog.html"><i class="zmdi zmdi-folder"></i> Services</a></span>
                            </div>
                            <h5 class="tm-blog-title"><a href="blog-details.html">Suffering With Back Pain</a></h5>
                            <p>Back pain is a common reason for absence from work. One of the most important
                                things you can do for back pain prevention is to get up and get moving.</p>
                            <a href="blog-details.html" class="tm-button tm-button-dark">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

            </div>
        </div>
    </div> --}}
    <!--// Latest Blog Area -->

</main>
<!--// Main Content -->

@endsection