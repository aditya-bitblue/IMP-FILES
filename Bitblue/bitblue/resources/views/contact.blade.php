@include('./page/header')

<!-- Page Title Section -->
<section class="page-title" style="background-image: url(user/images/main-slider/image-2.jpg)">
    <div class="pattern-layer-one" style="background-image: url(user/images/main-slider/pattern-1.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(user/images/background/pattern-17.png)"></div>
    <div class="pattern-layer-three" style="background-image: url(user/images/background/pattern-18.png)"></div>
    <div class="pattern-layer-four" style="background-image: url(user/images/icons/cross-icon.png)"></div>
    <div class="auto-container">
        <h2>Contact Us</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!-- End Page Title Section -->

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Follow Our Info</div>
            <h2>Contact Information</h2>
            <div class="text">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. <br> We will be happy to answer your questions.</div>
        </div>
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="info-box">
                        <div class="box-inner">
                            <div class="icon flaticon-clock"></div>
                            09:00am to 6:30pm <br> Sunday Closed
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="info-box">
                        <div class="box-inner">
                            <div class="icon flaticon-pin"></div>
                            G1, Oswal Nagri, Building No. 2A,<br>
                            Opp. Muthoot Finance, Next to Central Park,<br>
                            Nalasopara East - 401209.
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="info-box">
                        <div class="box-inner">
                            <div class="icon flaticon-phone-call"></div>
                            <a href="tel:+918828020600   ">+918828020600 </a>
                            <a href="mailto:contact@bitbluetech.com">contact@bitbluetech.com</a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <ul class="social-box">
                        <span>Our Socials Links <i>Print this page to PDF for the complete set of vectors.</i></span>
                        <li class="facebook"><a class="fab fa-facebook-f" href="https://www.facebook.com/Bitbluetech/"></a></li>
                        <li class="twitter"><a class="fab fa-twitter" href="https://twitter.com/Bitbluetech01"></a></li>
                        <li class="linkedin"><a href="https://www.linkedin.com/profile/view?id=AAIAABp1IgQBWW6B--9JineoON_6Esqf-n8mP4I&trk=nav_responsive_tab_profile" class="fab fa-linkedin"></a></li>
                        <li class="pinterest"><a href="https://www.youtube.com/channel/UCc5Jlj24LE5cUThIaVihREA" class="fab fa-youtube-play"></a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Map Boxed -->
        <div class="map-boxed">
            <!-- Map Outer -->
            <div class="map-outer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6432276511478!2d72.81596691438207!3d19.427815145869154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a968f74946d1%3A0x3c519eb00d53168c!2sBitblue%20Technology!5e0!3m2!1sen!2sin!4v1664196143955!5m2!1sen!2sin" width="100%" height="560px" style="border:0;" frameborder="0 allowfullscreen="" loading=" lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>

    </div>
</section>
<!-- End Contact Info Section -->

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Don’t Hasitate To Contact With us</div>
            <h2>Now Very Easy</h2>
            <div class="text">For more information on our products, services, or careers, please fill this form.</div>
        </div>
        <div class="inner-container">

            <!-- Contact Form -->
            <div class="contact-form">
                @if (Session::has('fail'))
                <div class="alert alert-info">{{ Session::get('fail') }}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-info">{{ Session::get('success') }}</div>
                @endif

                <!--Contact Form-->
                <form method="post" action="contactus">
                    @csrf
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-user-2"></span>
                            <input type="text" name="username" placeholder="Your Name" required>
                            @error('username')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-phone-call"></span>
                            <input type="text" name="phone" placeholder="Your Phone" required>
                            @error('phone')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-big-envelope"></span>
                            <input type="email" name="email" placeholder="Email" required>
                            @error('email')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-notepad"></span>
                            <input type="text" name="subject" placeholder="Subject" required>
                            @error('subject')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <span class="icon flaticon-message"></span>
                            <textarea name="message" placeholder="Message"></textarea>
                            @error('message')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                            <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Submit Now</span></button>
                        </div>

                    </div>
                </form>

                <!--End Contact Form -->
            </div>

        </div>
    </div>
</section>

<!-- End Contact Form Section -->
@include('./page/footer')