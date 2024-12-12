@extends('layout')

@section('content')

<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{asset('images/bg/breadcrumb-bg.jpg')}}" data-black-overlay="4" style="background-image: url({{asset('images/bg/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="tm-breadcrumb text-center">
            <h2>Why Us</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Why Us</li>
            </ul>
        </div>
    </div>
</div>

<main class="main-content">

    <!-- About Us -->
    <div class="tm-section about-us-area bg-white tm-padding-section">
        <span class="bg-shape-2"><img src="{{ asset('images/icons/bg-shape-3.png') }}" alt="bg shape 3"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-content about-content-2">
                        <h2>Why Millets Move?</h2>
                        <p>Porridge popularly known as Ganji/Kangi is a commonly consumed ancient traditional beverage. This SUPERDRINK is a Treasure Trove of Nutrition comprising of 9 super millets. Imagine sprouting them…right…that’s where Millet Move Porridge comes into picture where we stand out in providing a double nutritious, easily digestible and an easy absorption of nutrient drink.</p>
                        <p>Spiced up with selected herbs and spices gives it an edge in newness and variety in taste not making it monotonous every day. Moreover, the nutrition that comes with these herbs and spices…hmm its Triple Dhamaka…calling for a more delightful, healthier and more beneficial lifestyle. Now, isn’t it simply a nourishing drink? Isn’t it really inviting?
                        </p>

                        <div class="about-contentbottom">
                            <a href="#" class="tm-callbutton">
                                <span class="tm-callbutton-icon"><i class="zmdi zmdi-phone-in-talk"></i></span>
                                <h3>8105423535 </h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-videobox">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 398 358">
                            <defs>
                                <pattern id="attachedImage1" height="100%" width="100%" patternContentUnits="objectBoundingBox">
                                    <image xlink:href="{{ asset('images/heroslider/heroslider-image-1.jpg') }}" preserveAspectRatio="none" width="1" height="1"></image>
                                </pattern>
                            </defs>
                            <path opacity="0.102" fill="rgb(0, 117, 183)" d="M82.843,22.613 C175.233,-23.488 239.443,6.649 290.825,61.522 C342.208,116.395 387.664,123.712 393.707,208.984 C399.750,294.254 313.624,341.741 274.739,347.672 C235.855,353.603 189.875,346.162 138.910,347.419 C63.098,349.289 33.144,322.675 18.231,290.376 C-2.864,244.685 19.343,229.351 6.068,175.158 C-9.838,110.222 10.571,58.677 82.843,22.613 Z"></path>
                            <path fill="url(#attachedImage1)" d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z"></path>
                            <path fill="rgba(0,0,0,0.1)" d="M152.967,0.590 C250.043,-6.027 295.075,43.373 320.013,109.616 C344.951,175.858 381.888,198.656 356.382,274.898 C330.877,351.140 238.755,361.226 202.759,352.311 C166.763,343.397 129.414,320.302 84.587,302.958 C17.905,277.158 1.427,243.209 0.097,209.764 C-1.784,162.451 23.084,157.167 31.080,105.300 C40.661,43.151 77.029,5.768 152.967,0.590 Z"></path>
                        </svg>
                        <div class="tm-videobutton">
                            <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ" data-fancybox="">
                                <span><i class="flaticon-play-button"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// About Us -->

    <div class="tm-section service-details-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="tm-service-details sticky-sidebar"><div class="inner-wrapper-sticky" style="position: relative;">
                        <img class="tm-service-details-image" src="{{ asset('images/blog/blog-image-1.jpg') }}" alt="service details image">
                        <h2>Not just a Super Grain but Sprouted Again!!!</h2>
                        <p>Millets are a whole grain that’s packed with protein, antioxidants, and nutrients.
                        </p>
                        <p>
                            The super power of millets is not hidden anymore from the world. It has gained its place in the culinary world again.  They have gained significant popularity in recent years due to their extraordinary nutritional benefits. Among various ways to consume millets, sprouting them is a highly recommended method. Sprouting millets enhances their nutritional profile and makes them even more beneficial for our health. For instance, Sprouted Ragi is nutritionally better as the sprouting increases the Iron content by 10 times than normal ragi.
                        </p>
                        <p>
                            Include this magical grain in your diet and take a step forward towards an improved and more sustainable lifestyle.
                        </p>
                        <h4>Benefits of SPROUTING:</h4>
                        <ul class="stylish-list">
                            <li><i class="fa fa-hand-o-right"></i> Improves Nutrient Absorption - also helps to increase energy levels, boost metabolism, and improve digestion.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Better Digestibility - for people who have celiac disease or follow a gluten-free diet. Contain a low Glycaemic index.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Increases Antioxidants - reduce inflammation, improved immune function, promote healthy cellular growth.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Supports Weight Loss - vital nutrients such as fibre, protein, and complex carbohydrates that can keep you full and content for longer periods.</li>
                            <li><i class="fa fa-hand-o-right"></i> Availability of Protein - The proteins in sprouted millets are more readily available and quickly absorbed by the body.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Enhances Flavour - slightly sweet, nutty taste, which could make millets more palatable.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Decreased Cooking Time - Sprouted millets cook faster as their texture softens, providing a hassle-free experience.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Probiotic Potential - promoting gut health.
                            </li>
                        </ul>
                        <h6>Takeaway:
                        </h6>
                        <p>Embrace these nutritious superfoods and take a step towards a healthier and more balanced lifestyle
                        </p>
                        <h4>Blend In:</h4>
                        <ul class="stylish-list">
                            <li><i class="fa fa-hand-o-right"></i> Onion:  a nutrient-packed herb/vegetable that contain powerful compounds that may help decrease the risk of heart disease and certain cancers.
                                They have antibacterial properties and promote digestive health, which improve immune function.                                
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Cilantro/Coriander leaves: a is a fragrant, antioxidant-rich herb. Helps lower your blood sugar, fight infections, and promote heart, brain, skin, and digestive health.

                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Moringa: highly nutritious and are an excellent source of many vitamins and minerals such as Protein, Vitamin B6, Vitamin C, Iron, Riboflavin, Vitamin A, Magnesium.

                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Curry Leaves:  a versatile culinary herb, highly flavourful but also packed with beneficial plant compounds. May help improve antioxidant defences in your body. Doing so may likewise fight cancer cells, reduce heart disease risk factors, and protect neurological health.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Ginger: aid digestion, reduce nausea, and help fight the flu and common cold. Gingerol the main bioactive compound in ginger has powerful anti-inflammatory and antioxidant effects. Help manage weight loss, lower cholesterol levels, protect nerve function, and reduce the risk of cancer.

                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Green chilly:  Rich source of calcium and has great iron absorption properties, rich in antioxidants and minerals for healthy hair and skin. It helps in reducing stress and promotes good mood and well-being.

                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Garlic: incredibly nutritious and is rich in Manganese, Vitamin B6, Vitamin C, Selenium, Fiber and trace amounts of various other nutrients. It has the ability to help lower blood pressure and cholesterol levels.

                            </li>
                        </ul>
                        <h4>Taste Enhancers:
                        </h4>
                        <ul class="stylish-list">
                            <li><i class="fa fa-hand-o-right"></i>Himalayan Salt: pink salt from Himalayas, less processed, contain trace nutrients and minerals.
                                
                            </li>
                            <li><i class="fa fa-hand-o-right"></i> Palm Sugar:  mostly used natural sweetener in the traditional diet for years. It is a very good source of iron, potassium, zinc, and magnesium.  It contains inulin, which is a dietary fibre belonging to the group of prebiotics, supporting good gut health by benefiting the good probiotics in the digestive system. Rich in antioxidants, supports digestive and heart health, boost in energy levels.
                            </li>
                        </ul>
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
                    </div></div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sticky-sidebar" style=""><div class="inner-wrapper-sticky" style="position: relative;">
                        <div class="widgets widgets-blog">

                            <!-- Single Widget -->
                            <div class="single-widget widget-contact">
                                <h5 class="widget-title">Get In Touch</h5>
                                <ul>
                                    <li><b>Address :</b>Golden Gate Trading Centre No.32, Bagalur post, Bagalur Yelahanka Taluk, Bangalore North 562149</li>
                                    <li><b>Phone :</b><a href="tel:+918105423535">+918105423535</a></li>
                                    <li><b>Email :</b><a href="mailto:contacts@milletsmove.com">contacts@milletsmove.com</a></li>
                                </ul>
                                <ul class="widget-contact-social">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                        </div>
                    </div></div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection