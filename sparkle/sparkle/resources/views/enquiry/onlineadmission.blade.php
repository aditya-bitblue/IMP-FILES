@include('header');
<!-- <style>
    .form-select {
        display: block !important;
    }
</style> -->

<div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li>Online Admission</li>
            </ul>
            <h2>Online Admission</h2>
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

            <h2>Drop us your information for admission</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>

        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div>

                        <h4>INFORMATION OF CHILD</h4>
                        <br />
                        <div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2 ">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Last Name *</label>
                                        <input type="text" name="lname" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">First Name *</label>
                                        <input type="text" name="fname" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Father Name *</label>
                                        <input type="text" name="father_name" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Aadhar Number *</label>
                                        <input type="text" name="aadhar_number" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Select Gender*</label>
                                        <select class="form-select" name="diff_abled">
                                            <option value="">Select your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Phone Number *</label>
                                        <input type="text" name="phone" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Select Caste*</label>
                                        <select class="form-select" name="diff_abled">
                                            <option value="">Select your caste</option>
                                            <option value="Open">Open</option>
                                            <option value="OBC">OBC</option>
                                            <option value="No">SC</option>
                                            <option value="SC">NT</option>
                                            <option value="OTHER">OTHER</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Sub Caste *</label>
                                        <input type="text" name="sub_caste" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Religion *</label>
                                        <input type="text" name="religion" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Mother Tongue *</label>
                                        <input type="text" name="mother_tongue" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Nationality *</label>
                                        <input type="text" name="nationality" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Date Of birth *</label>
                                        <input type="date" name="dob" id="last-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">In Words *</label>
                                        <input type="text" name="in_words" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Birth Place *</label>
                                        <input type="text" name="birth_place" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Blood Group *</label>
                                        <input type="text" name="blood_group" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                           <label class="control-label" for="first-name">In Words *</label>
                           <input type="text" id="user-name" class="form-control">
                        </div>
                        </div>  -->
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Differently abled *</label>
                                        <select class="form-select" name="diff_abled">
                                            <option value="">Select your Gender</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Correspondance Address *</label>
                                        <input type="text" name="cor_add" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Permanent Address *</label>
                                        <input type="text" name="per_add" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">State *</label>
                                        <input type="text" name="state" id="user-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">District *</label>
                                        <input type="text" name="district" id="user-name" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <br />
                    <br />
                    <h4 class="sidebar-title">ADMISSION TO BE TAKEN FOR</h4>
                    <div class="registration-details-area inner-page-padding">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Student ID *</label>
                                    <input type="text" name="student_id" id="user-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <label class="control-label" for="country">Medium</label>
                                <div class="form-group">
                                    <select class="form-select" name="medium">
                                        <option value="">Select One</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Marathi">Marathi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <label class="control-label" for="country">Standard</label>
                                <div class="form-group">
                                    <select class="form-select" name="std">
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th">7th</option>
                                        <option value="8th">8th</option>
                                        <option value="9th">9th</option>
                                        <option value="10th">10th</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <h4 class="sidebar-title my-4">FAMILY INFORMATION</h4>
                    <div class="registration-details-area inner-page-padding">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Mother / Guardian's Name *</label>
                                    <input type="text" name="mother_name" id="user-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Qualification *</label>
                                    <input type="text" name="mother_qualification" id="pass" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Occupation *</label>
                                    <input type="text" name="mother_occupation" id="first-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="last-name">Office Address *</label>
                                    <input type="text" name="m_off_add" id="last-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="">Father / Guardian's Name *</label>
                                    <input type="text" name="info_father_name" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Qualification *</label>
                                    <input type="text" name="father_qualification" id="pass" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Occupation *</label>
                                    <input type="text" name="father_occupation" id="first-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-2">
                                <div class="form-group">
                                    <label class="control-label" for="last-name">Office Address *</label>
                                    <input type="text" name="f_off_add" id="last-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 m-2">
                                <div class="form-group">
                                    <!-- <label class="control-label" for="first-name">Differently abled *</label> -->
                                    <select class="form-select" name="relative">
                                        <option value="">* Whether any Brother/ Sister of the child is studying in this
                                            school
                                        </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class=" text-center">
                    <div class="pLace-order text-center mt-30">
                        <button class="btn btn-light" type="submit" value="Login">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>
<!-- End Contact Area -->



@include('footer')