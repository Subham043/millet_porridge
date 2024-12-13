@extends('layout')

@section('content')

<!-- Heroslider Area -->
<div class="heroslider-area" data-bgimage="{{asset('images/bg/bg-image-5.webp') }}">

    <!-- Heroslider Slider -->
    <div class="heroslider-slider heroslider-animated tm-slider-dots tm-slider-dots-left">

        <!-- Heroslider Single -->
        <div class="heroslider-singleslider d-flex align-items-center">
            
        </div>
        <!--// Heroslider Single -->

    </div>
    <!--// Heroslider Slider -->

</div>
<!--// Heroslider Area -->

<!-- Main Content -->
<main class="main-content">

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
                            <a href="{{route('why_millet')}}" class="tm-button">Read more</a>
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

    <!--  Products Area -->
    <div class="tm-section products-area tm-padding-section bg-white">
        {{-- <span class="bg-shape-right"><img src="{{asset('images/icons/bg-shape-2.png') }}" alt="background shape"></span> --}}
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
            <div class="row">

                <!-- Single Product -->
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <div class="tm-product-imagelink">
                                <img src="{{asset('images/product/product-image-1.jpg') }}" alt="product image">
                            </div>
                            <ul class="tm-product-actions">
                                <li><a href="cart.html"><img src="{{asset('images/product/amazon.png') }}" alt=""></i></a></li>
                                <li><a href="cart.html"><img src="{{asset('images/product/flipkart.png') }}" alt=""></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title">Cosmetology Essential
                                    oil</h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <div class="tm-product-imagelink">
                                <img src="{{asset('images/product/product-image-2.jpg') }}" alt="product image">
                            </div>
                            <ul class="tm-product-actions">
                                <li><a href="cart.html"><img src="{{asset('images/product/amazon.png') }}" alt=""></i></a></li>
                                <li><a href="cart.html"><img src="{{asset('images/product/flipkart.png') }}" alt=""></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title">Lavender oil Aroma</h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->

                <!-- Single Product -->
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <div class="tm-product-imagelink">
                                <img src="{{asset('images/product/product-image-3.jpg') }}" alt="product image">
                            </div>
                            <ul class="tm-product-actions">
                                <li><a href="cart.html"><img src="{{asset('images/product/amazon.png') }}" alt=""></i></a></li>
                                <li><a href="cart.html"><img src="{{asset('images/product/flipkart.png') }}" alt=""></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title">Jojoba oil Carrie</h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->
                
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <div class="tm-product-imagelink">
                                <img src="{{asset('images/product/product-image-4.jpg') }}" alt="product image">
                            </div>
                            <ul class="tm-product-actions">
                                <li><a href="cart.html"><img src="{{asset('images/product/amazon.png') }}" alt=""></i></a></li>
                                <li><a href="cart.html"><img src="{{asset('images/product/flipkart.png') }}" alt=""></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title">White Bamboo Massage</h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->
    
                <!-- Single Product -->
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <div class="tm-product-imagelink">
                                <img src="{{asset('images/product/product-image-5.jpg') }}" alt="product image">
                            </div>
                            <ul class="tm-product-actions">
                                <li><a href="cart.html"><img src="{{asset('images/product/amazon.png') }}" alt=""></i></a></li>
                                <li><a href="cart.html"><img src="{{asset('images/product/flipkart.png') }}" alt=""></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title">Essential oils</h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Single Product -->
    
                <!-- Single Product -->
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="tm-product">
                        <div class="tm-product-image">
                            <div class="tm-product-imagelink">
                                <img src="{{asset('images/product/product-image-6.jpg') }}" alt="product image">
                            </div>
                            <ul class="tm-product-actions">
                                <li><a href="cart.html"><img src="{{asset('images/product/amazon.png') }}" alt=""></i></a></li>
                                <li><a href="cart.html"><img src="{{asset('images/product/flipkart.png') }}" alt=""></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-product-content">
                            <h5 class="tm-product-title">Cosmetic product</h5>
                            <div class="tm-product-rating">
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                                <span class="active"><i class="zmdi zmdi-star"></i></span>
                            </div>
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
                        <form action="#" class="tm-form" method="post" id="contact_form">
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

</main>
<!--// Main Content -->

@endsection