<!DOCTYPE html><html lang="zxx"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dialia - Registered Massage Therapy HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{asset('images/favicon.png') }}">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico') }}">

    <!-- Google Font (font-family: 'Open Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!-- Google Font (font-family: 'Poppins', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

    <link rel="stylesheet" href="{{asset('css/custom.css') }}">
</head>

<body>

    <!-- Preloader -->
    <div class="tm-preloader">
        <svg width="300" height="300" viewBox="0 0 485 528" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M207.9,515.3H13V9h194.9c53.4,0,100.4,10.6,139.7,31.4c39.7,21.1,70.7,51.2,92,89.5
            c21.1,38,31.9,82.2,31.9,131.2c0,49-10.7,93.3-31.8,131.5v0c-21.3,38.5-52.3,69-92.2,90.5C307.8,504.5,260.9,515.3,207.9,515.3z
            M43,485.3h164.9c48,0,90.1-9.6,125.3-28.5c34.8-18.7,61.7-45.2,80.2-78.6c18.6-33.7,28.1-73.1,28.1-117
            c0-43.9-9.5-83.1-28.1-116.7c-18.5-33.2-45.3-59.3-79.8-77.6C298.6,48.4,256.3,39,207.9,39H43V485.3z M197.8,412.2h-69.6V110h69.6
            c48.7,0,87.4,13.4,115.1,39.9c27.9,26.6,42,64.1,42,111.2c0,47.2-14.1,84.6-42,111.2l0,0C285.2,398.8,246.5,412.2,197.8,412.2z
            M158.2,382.2h39.6c40.7,0,72.5-10.6,94.4-31.6l0,0c22-21,32.7-50.3,32.7-89.5c0-39.2-10.7-68.5-32.7-89.5
            c-21.9-20.9-53.7-31.6-94.4-31.6h-39.6V382.2z"></path>
        </svg>
        <button class="tm-button tm-button-white">Cancel Preloader</button>
    </div>
    <!--// Preloader -->

    <div id="wrapper" class="wrapper">

        <!-- Header Area -->
        <div class="header">

            <!-- Header Top Area -->
            <div class="header-toparea">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-sm-6 col-12">
                            <div class="header-topinfo">
                                <ul>
                                    <li>Email us : <a href="mailto://contacts@milletsmove.com">contacts@milletsmove.com</a></li>
                                    <li>Call us : <a href="tel://+918105423535">918105423535</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="header-topbutton">
                                <a href="#" class="tm-button tm-button-white">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Bottom Area -->
            <div class="header-bottomarea">
                <div class="container">
                    <div class="header-bottominner">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="{{asset('images/logo/logo.png') }}" alt="dialia logo">
                            </a>
                        </div>
                        <nav class="tm-navigation">
                            <ul>
                                <li><a href="about-us.html">Home</a></li>
                                <li><a href="about-us.html">Why Us</a></li>
                                <li><a href="shop.html">Privacy Policy</a></li>
                                <li><a href="shop.html">Terms & Conditions</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-mobilemenu clearfix">
                        <div class="tm-mobilenav"></div>
                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->

        </div>
        <!--// Header Area -->

        @yield('content')

        <!-- Footer Area -->
        <footer class="footer">

            <!-- Footer Widgets -->
            {{-- <div class="footer-toparea tm-padding-section">
                <div class="container">
                    <div class="row widgets footer-widgets">

                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget (Widget Contact) -->
                            <div class="single-widget widget-contact">
                                <h5 class="widget-title">Get In Touch</h5>
                                <ul>
                                    <li><b>Address :</b>Golden Gate Trading Centre No.32, Bagalur post, Bagalur Yelahanka Taluk, Bangalore North 562149</li>
                                    <li><b>Phone :</b><a href="tel:+918105423535">918105423535</a></li>
                                    <li><b>Email :</b><a href="mailto:contacts@milletsmove.com">contacts@milletsmove.com</a></li>
                                </ul>
                                <ul class="widget-contact-social">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!--// Single Widget (Widget Contact) -->
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget (Widget Blog) -->
                            <div class="single-widget widget-recentpost">
                                <h5 class="widget-title">Recent Posts</h5>
                                <ul>
                                    <li>
                                        <a href="blog-details.html" class="widget-recentpost-image">
                                            <img src="{{asset('images/blog/thumbnails/blog-thumbnail-1.jpg') }}" alt="blog thumbnail">
                                        </a>
                                        <div class="widget-recentpost-content">
                                            <h6><a href="blog-details.html">Minor Surgeries of the Foot</a></h6>
                                            <span>August 01, 2019</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-details.html" class="widget-recentpost-image">
                                            <img src="{{asset('images/blog/thumbnails/blog-thumbnail-2.jpg') }}" alt="blog thumbnail">
                                        </a>
                                        <div class="widget-recentpost-content">
                                            <h6><a href="blog-details.html">Assistive Device Program</a></h6>
                                            <span>August 01, 2019</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-details.html" class="widget-recentpost-image">
                                            <img src="{{asset('images/blog/thumbnails/blog-thumbnail-3.jpg') }}" alt="blog thumbnail">
                                        </a>
                                        <div class="widget-recentpost-content">
                                            <h6><a href="blog-details.html">Initial plus treatment</a></h6>
                                            <span>August 01, 2019</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Single Widget (Widget Blog) -->
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Wiget (Widget Quicklinks) -->
                            <div class="single-widget widget-quicklinks">
                                <h5 class="widget-title">Customer services</h5>
                                <ul>
                                    <li><a href="#">Physiotherapy</a></li>
                                    <li><a href="#">Massage Therapy</a></li>
                                    <li><a href="#">Vehicle Injury Treatment</a></li>
                                    <li><a href="#">Acupuncture</a></li>
                                    <li><a href="#">Neurological Rehabilitation</a></li>
                                    <li><a href="#">Custom-Made Orthotics</a></li>
                                </ul>
                            </div>
                            <!--// Single Wiget (Widget Quicklinks) -->
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget (Widget Newsletter) -->
                            <div class="single-widget widget-newsletter">
                                <h5 class="widget-title">Subscribe us</h5>
                                <p>Get Business news, tip and solutions to
                                    your problems from our experts.</p>
                                <form id="tm-mailchimp-form" class="widget-newsletter-form">
                                    <input id="mc-email" type="text" placeholder="Email address" required="required">
                                    <button id="mc-submit" type="submit" class="tm-button"><i class="zmdi zmdi-mail-send"></i></button>
                                </form>
                                <!-- Mailchimp Alerts -->
                                <div class="tm-mailchimp-alerts">
                                    <div class="tm-mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="tm-mailchimp-error"></div>
                                </div>
                                <!--// Mailchimp Alerts -->
                                <img src="{{asset('images/icons/payment-methods.png') }}" alt="payment methods">
                            </div>
                            <!--// Single Widget (Widget Newsletter) -->
                        </div>

                    </div>
                </div>
            </div> --}}
            <!--// Footer Widgets -->

            <!-- Footer -->
            <div class="footer-bottomarea">
                <div class="container">
                    <p class="footer-copyright">Copyright © {{ date('Y') }} by <a href="#">millets porridge</a>. All rights
                        reserved</p>
                </div>
            </div>
            <!--// Footer -->

        </footer>
        <!--// Footer Area -->

        <!-- Product Quickview -->
        <div class="tm-product-quickview" id="tm-product-quickview">
            <div class="container">
                <div class="tm-product-quickview-inner">
                    <div class="tm-prodetails">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12">

                                <!-- Product Details Images -->
                                <div class="tm-prodetails-images">
                                    <div class="tm-prodetails-largeimages">
                                        <div class="tm-prodetails-largeimage">
                                            <img src="{{asset('images/product/product-image-1.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-largeimage">
                                            <img src="{{asset('images/product/product-image-2.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-largeimage">
                                            <img src="{{asset('images/product/product-image-3.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-largeimage">
                                            <img src="{{asset('images/product/product-image-4.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-largeimage">
                                            <img src="{{asset('images/product/product-image-2.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-largeimage">
                                            <img src="{{asset('images/product/product-image-3.jpg') }}" alt="product image">
                                        </div>
                                    </div>
                                    <div class="tm-prodetails-thumbnails">
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{asset('images/product/thumbnail/product-image-1.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{asset('images/product/thumbnail/product-image-2.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{asset('images/product/thumbnail/product-image-3.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{asset('images/product/thumbnail/product-image-4.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{asset('images/product/thumbnail/product-image-2.jpg') }}" alt="product image">
                                        </div>
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{asset('images/product/thumbnail/product-image-3.jpg') }}" alt="product image">
                                        </div>
                                    </div>
                                </div>
                                <!--// Product Details Images -->

                            </div>

                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="tm-prodetails-content">
                                    <h3 class="tm-prodetails-title">Cosmetology Essential oil</h3>
                                    <div class="tm-rating">
                                        <span class="active"><i class="zmdi zmdi-star"></i></span>
                                        <span class="active"><i class="zmdi zmdi-star"></i></span>
                                        <span class="active"><i class="zmdi zmdi-star"></i></span>
                                        <span class="active"><i class="zmdi zmdi-star"></i></span>
                                        <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    </div>
                                    <p class="tm-prodetails-availability">Availalbe: <span>In Stock</span></p>
                                    <div class="tm-prodetails-price">
                                        <span><del>$75.99</del> $59.99</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mi
                                        dolor,
                                        malesuada id metus a, mattis eleifend elit. Nullam pharetra
                                        consequat ex in dapibus. Vestibulum ante.</p>
                                    <div class="tm-prodetails-quantitycart">
                                        <div class="tm-quantitybox">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="tm-button tm-button-dark">Add To Cart<b></b></a>
                                    </div>

                                    <div class="tm-prodetails-categories">
                                        <h6>Categories :</h6>
                                        <ul>
                                            <li><a href="shop.html">Accessories</a></li>
                                            <li><a href="shop.html">Electronics</a></li>
                                            <li><a href="shop.html">White</a></li>
                                        </ul>
                                    </div>

                                    <div class="tm-prodetails-tags">
                                        <h6>Tags :</h6>
                                        <ul>
                                            <li><a href="shop.html">Electronic</a></li>
                                            <li><a href="shop.html">Smartwatch</a></li>
                                        </ul>
                                    </div>

                                    <div class="tm-prodetails-share">
                                        <h6>Share :</h6>
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Product Quickview -->

    </div>

    <!-- Js Files -->
    <script src="{{asset('js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/plugins.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
    <!--// Js Files -->


</body></html>