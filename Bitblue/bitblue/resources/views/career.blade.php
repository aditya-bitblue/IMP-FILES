@include('./page/header')
<style>
    .btn-primary {
        color: #fff;
        background-color: #1c3874;
        border-color: #0d6efd;
    }

    .service-block-three .inner-box {
        position: relative;
        padding: 34px 30px;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
        background-color: #ffffff;
    }
</style>
<!-- Page Title Section -->
<section class="page-title" style="background-image: url(user/images/main-slider/image-2.jpg)">
    <div class="pattern-layer-one" style="background-image: url(user/images/main-slider/pattern-1.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(user/images/background/pattern-17.png)"></div>
    <div class="pattern-layer-three" style="background-image: url(user/images/background/pattern-18.png)"></div>
    <div class="pattern-layer-four" style="background-image: url(user/images/icons/cross-icon.png)"></div>
    <div class="auto-container">
        <h2>Career</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{asset('/')}}">home</a></li>
            <li>Career</li>
        </ul>
    </div>
</section>
<!-- End Page Title Section -->

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Steps Towards Career</div>
            <h2>Join Our Team</h2>
            <div class="text">Do you find a passion in solving business problems utilizing modern technolgies?<br> We are building products for future with a mission to tap the mobile market .Come Join Us!!</div>
        </div>

        <div class="row">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title fs-5">We are always looking for people who can make a difference at Bitblue and are passionate about technology. If you don't find any open position below, you can still apply with your resume.

                    </div>
                </div>
            </div>
            <div class="contact-form">
                @if (Session::has('fail'))
                <div class="alert alert-info">{{ Session::get('fail') }}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-info">{{ Session::get('success') }}</div>
                @endif

                <!--Contact Form-->
                <form method="post" enctype="multipart/form-data" action="jobapply">
                    @csrf
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Candidate Name</label>
                            <input type="text" name="candidateName" placeholder="Candidate Name" required>
                            @error('candidateName')
                            <p class="danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Candidate Image</label>
                            <input type="file" name="candidateImage" class="form-control" style="line-height: 20px;" required>
                            @error('candidateImage')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Apply for -->
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="form-group">
                                <label class="control-label">Apply for</label>
                                <select class="form-select" name="designation">
                                    <option value="">Select</option>
                                    <option value="Software Developer">Software Developer</option>
                                    <option value="Hardware/Network Engineer">Hardware/Network Engineer</option>
                                    <option value="Marketing Executive">Marketing Executive</option>
                                    <option value="Technical Support Engineer">Technical Support Engineer</option>
                                    <option value="Business Developer">Business Developer</option>
                                    <option value="Android Developer">Android Developer</option>
                                    <option value="Accountant">Accountant</option>
                                </select>
                            </div>
                            @error('designation')
                            <p class="danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <!-- Gender -->
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Select Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="">Select your Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            @error('gender')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- DOB -->

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="form-group">
                                <label for="dob">Date of birth</label>
                                <input type="date" name="dob" id="dob" class="form-control">
                                <!-- <div class="help-block with-errors"></div> -->
                                <!-- @error('dob')
                                <p style="color:red;" class="error">{{ $message }}</p>
                                @enderror -->
                            </div>
                            @error('dob')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Phone number</label>
                            <input type="text" name="phonenumber" placeholder="Your Phone" required>
                            @error('phonenumber')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" required>
                            @error('email')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- qualification -->

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Qualification</label>
                            <input type="text" name="qualification" placeholder="eg: BTech / BE" required>
                            @error('qualification')
                            <p class="danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Programming languages Known</label>
                            <input type="text" name="languages" placeholder="eg: PHP / SQL etc" required>
                            @error('languages')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- resume -->
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="form-group">
                                <label for="resume">Upload resume</label>
                                <input type="file" name="resume" id="resume" class="form-control" data-error="Upload your resume">
                                @error('resume')
                                <p class="danger">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="resume">Message</label>
                            <textarea name="message" placeholder="Message"></textarea>
                            @error('message')
                            <p class="danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                            <button class="theme-btn btn-style-three" type="submit">Submit Now</button>
                        </div>

                    </div>
                </form>

                <br />
                <br />
                <br />

                <!--End Contact Form -->
            </div>
            <!-- <div class="col-sm-4">
                <div class="service-block-three rounded-0 ">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box d-flex ">
                            <div class="col-sm-3">
                                <img src="user/images/app-development.png" class="icon" />
                            </div>
                            <div class="col-sm-9">
                                <h5><a href="jobapply1">Software Developer</a></h5>
                            </div>
                        </div>

                        <div class="text  my-3">We are looking for developers who can build interesting use cases utilizing modern technologies.</div>
                        <h6><a href="jobapply1">Eligibility: BE/BTech/MCA</a></h6>
                        <div class="icon-box text-center  ">
                            <div class="">
                                <a href="jobapply1"><button class="btn btn-primary my-2 btn-sm">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="service-block-three rounded-0 ">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box d-flex ">
                            <div class="col-sm-3">
                                <img src="user/images/circuit-board.png" class="icon" />
                            </div>
                            <div class="col-sm-9">
                                <h5><a href="jobapply2">Hardware/Network Engineer</a></h5>
                            </div>
                        </div>


                        <div class="text my-3">Do you like hacking inside networks and computer systems? We need you to manage our IT infrastructure.</div>
                        <h6><a href="jobapply2">Eligibility: BE/BTech/MCA</a></h6>
                        <div class="icon-box text-center  ">
                            <div class="">
                                <a href="jobapply2"><button class="btn btn-primary my-2 btn-sm">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service-block-three rounded-0 ">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box d-flex ">
                            <div class="col-sm-3">
                                <img src="user/images/analytics.png" class="icon" />
                            </div>
                            <div class="col-sm-9">
                                <h5><a href="jobapply3">Marketing Executive</a></h5>
                            </div>
                        </div>

                        <div class="text my-3">Do you have the go-getter attitude? If yes, then we are looking for rockstars like you to join us.</div>
                        <h6><a href="jobapply3">Eligibility: Graduate/BBA/MBA</a></h6>
                        <div class="icon-box text-center  ">
                            <div class="">
                                <a href="jobapply3"><button class="btn btn-primary my-2 btn-sm">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>
<!-- End Contact Info Section -->


<!-- End Contact Form Section -->
@include('./page/footer')