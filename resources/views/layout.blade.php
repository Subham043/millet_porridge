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
                                <a href="{{route('home')}}/#contact_form" class="tm-button tm-button-white">Contact Us</a>
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
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/logo/logo.png') }}" alt="dialia logo">
                            </a>
                        </div>
                        <nav class="tm-navigation">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('why_millet')}}">Why Us</a></li>
                                <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                                <li><a href="{{route('term')}}">Terms & Conditions</a></li>
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