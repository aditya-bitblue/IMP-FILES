@include('header')

<div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li>Career</li>
            </ul>
            <h2>Career</h2>
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
            <span class="sub-title">Career</span>
            <h2>Work with us !</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>

        <div class="contact-form">
            @if (Session::has('fail'))
            <div class="alert alert-info">{{ Session::get('fail') }}</div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-info">{{ Session::get('success') }}</div>
            @endif
            <form id="contactForm" enctype="multipart/form-data" method="post" action="career_submit">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" id="cname" class="form-control" required data-error="Please enter candidate name" placeholder="Candidate Name">
                            <div class="help-block with-errors"></div>
                            @error('name')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="fathername" id="fathername" class="form-control" required data-error="Please enter Father's name" placeholder="Father Name">
                            <div class="help-block with-errors"></div>
                            @error('fathername')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                            @error('email')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                            @error('phone_number')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="date" name="dob" id="last-name" class="form-control">
                            <div class="help-block with-errors"></div>
                            @error('dob')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">

                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option value="">Select your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="qualification" id="qualification" class="form-control" required data-error="Please enter candidates qualification" placeholder="qualification">
                            <div class="help-block with-errors"></div>
                            @error('qualification')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="file" name="resume" id="resume" class="form-control" data-error="Upload your resume">
                            <label for="resume">Upload resume</label>
                            <div class="help-block with-errors"></div>
                            @error('resume')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                            @error('message')
                            <p style="color:red;" class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Submit</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
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