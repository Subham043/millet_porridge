@extends('layout')

@section('content')

<!-- Heroslider Area -->
<div class="heroslider-area" data-bgimage="{{asset('images/bg/bg-image-10.jpg') }}">

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

    <div class="tm-section about-us-area bg-white tm-padding-section">
        <span class="bg-shape-2"><img src="{{ asset('images/icons/bg-shape-3.png') }}" alt="bg shape 3"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-2 order-lg-1">
                    <div class="about-content about-content-2">
                        <blockquote>
                            <p>“Everything is permissible for me’ – but not everything is beneficial”
                            </p>
                        </blockquote>
                        <h4>(IT TAKES DISCIPLINE TO BE HEALTHY)
                        </h4>
                        <p>Food is one of the best gifts that God has given to us. It fuels our bodies, brings people together around a table, nourishes us, and gives us happiness. Food is not the problem, but our boundaries and issues revolving around food are the problems we face when it comes to eating.</p>
                        <p>A balanced diet reflects our gratitude for the abundance of nourishing foods and our commitment to living in harmony.
                        </p>
                        <p>
                            The principle of balance in healthy eating and making healthy food choices encourages us to adopt a varied and harmonious approach to our dietary choices. Embracing the diversity of plant-based options and prioritizing the quality of our meals, ensure our overall health and wellness. Practicing moderation helps avoid overindulgence and its negative health consequences. It’s all about finding balance in our diets and being mindful of portion sizes.

                        </p>
                        <p>Honouring our bodies certainly includes eating healthy foods that keep them functioning well.
                        </p>
                        <p><i>“Eat your food with gladness, and with a joyful heart.”
                        </i></p>
                        <h4>Not just a Super Grain but Sprouted Again!!!</h4>
                        <p>Millets are a whole grain that’s packed with protein, antioxidants, and nutrients.
                        </p>
                        <p>
                            The super power of millets is not hidden anymore from the world. It has gained its place in the culinary world again.  They have gained significant popularity in recent years due to their extraordinary nutritional benefits. Among various ways to consume millets, sprouting them is a highly recommended method. Sprouting millets enhances their nutritional profile and makes them even more beneficial for our health. For instance, Sprouted Ragi is nutritionally better as the sprouting increases the Iron content by 10 times than normal ragi.
                        </p>
                        <p>
                            Include this magical grain in your diet and take a step forward towards an improved and more sustainable lifestyle.
                        </p>

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
                                    <input type="text" required="required" id="name" name="name" placeholder="Name*">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="email" required="required" id="email" name="email" placeholder="Email*">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" required="required" id="phone" name="phone" placeholder="Phone*">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" required="required" id="subject" name="subject" placeholder="Subject*">
                                </div>
                                <div class="tm-form-field">
                                    <textarea name="message" cols="30" rows="5" required="required" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="tm-form-field">
                                    {!! NoCaptcha::display(['id' => 're_captcha']) !!}
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button" id="submitBtn">Submit</button>
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

@section("javascript")
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript" nonce="{{ csp_nonce() }}">
const validation = new JustValidate('#contact_form', {
                errorFieldCssClass: 'is-invalid',
});
validation
    .addField('#name', [{
                    rule: 'required',
                    errorMessage: 'Name is required',
    },
    ])
    .addField('#email', [{
                    rule: 'required',
                    errorMessage: 'Email is required',
    },
    {
                    rule: 'email',
                    errorMessage: 'Email is invalid',
    },
    ])
    .addField('#phone', [{
                    rule: 'required',
                    errorMessage: 'Phone is required',
    },
    ])
    .addField('#subject', [{
                    rule: 'required',
                    errorMessage: 'Subject is required',
    },
    ])
    .addField('#message', [{
                    rule: 'required',
                    errorMessage: 'Message is required',
    },
    ])
    .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerText = 'Submitting...';
    submitBtn.disabled = true;
    try {
                    const formElement = document.getElementById('contact_form');
                    var formData = new FormData(formElement);

                    const response = await axios.post('{{ route("contact") }}', formData)
                    iziToast.success({
                        title: 'Success',
                        message: response.data.message,
                        position: 'bottomCenter',
                        timeout:6000
                    });
                    event.target.reset();
    } catch (error) {
                    console.log(error)
                    if (error?.response?.data?.errors?.name) {
                                    validation.showErrors({
                                                    '#name': error?.response?.data?.errors?.name[0]
                                    })
                    }
                    if (error?.response?.data?.errors?.email) {
                                    validation.showErrors({
                                                    '#email': error?.response?.data?.errors?.email[0]
                                    })
                    }
                    if (error?.response?.data?.errors?.phone) {
                                    validation.showErrors({
                                                    '#phone': error?.response?.data?.errors?.phone[0]
                                    })
                    }
                    if (error?.response?.data?.errors?.subject) {
                                    validation.showErrors({
                                                    '#subject': error?.response?.data?.errors?.subject[0]
                                    })
                    }
                    if (error?.response?.data?.errors?.message) {
                                    validation.showErrors({
                                                    '#message': error?.response?.data?.errors?.message[0]
                                    })
                    }
                    if (error?.response?.data?.message) {
                                    iziToast.error({
                                        title: 'Error',
                                        message: error?.response?.data?.message,
                                        position: 'bottomCenter',
                                        timeout:6000
                                    });
                    }
    } finally {
                    submitBtn.innerText = `Submit`;
                    submitBtn.disabled = false;
                    grecaptcha.reset();
    }
    });
</script>

@endsection