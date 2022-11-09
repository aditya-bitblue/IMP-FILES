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
        <h2>Applying for {{$position}}</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{asset('/')}}">home</a></li>
            <li><a href="career">Career</a></li>
            <li> {{$position}}</li>
        </ul>
    </div>
</section>
<!-- End Page Title Section -->

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="container">
            <div class="card col-sm-8 p-3">
                <div class="col-sm-">
                    <div class="row">

                        <form accept-charset="UTF-8" action="#" method="POST" enctype="multipart/form-data" target="_blank">
                            <div class="row">
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label for="exampleInputName">Full Name</label>
                                        <input type="text" name="fullname" class="form-control" id="exampleInputName" placeholder="Enter your name and surname" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" required="required">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-label">Telephone</label>
                                        <input class="form-control" name="tel" type="tel" value="" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-label">Qualification</label>
                                        <input class="form-control" name="tel" type="text" value="" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label for="example-tel-input" class="form-label">Appling For</label>
                                        <input class="form-control" name="tel" type="text" value="{{$position}}" id="example-tel-input" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label for="dob" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group ">
                                        <label for="inputCity">City</label>
                                        <input type="text" name="city" class="form-control" id="inputCity" placeholder="Mumbai">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group ">
                                        <label for="inputCity">State</label>
                                        <input type="text" name="state" class="form-control" id="inputCity" placeholder="Maharashtra">
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group ">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" name="zip" class="form-control" id="inputZip" placeholder="400060">
                                    </div>
                                </div>


                                <div class="col-sm-6 mt-2">
                                    <div class="form-group ">
                                        <label class="mr-4">Upload your CV:</label>
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-3">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Section -->


<!-- End Contact Form Section -->
@include('./page/footer')