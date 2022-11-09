@include('header')

<div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li>Contact</li>
            </ul>
            <h2>Contact Us</h2>
        </div>
    </div>
</div>

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <br />
            <br />
            <br />
            <span class="sub-title">Contact Us</span>
            <h2>Drop us Message for any Query</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>

        <div class="contact-form">
            @if (Session::has('success'))
            <div class="alert alert-info">{{ Session::get('success') }}</div>
            @endif
            <form id="contactForm" method="post" action="contactform">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                            <div class="help-block with-errors"></div>
                            @error('name')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                            @error('email')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                            @error('phone_number')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                            @error('subject')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                            @error('message')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send
                                Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
<!-- End Contact Area -->



@include('footer')