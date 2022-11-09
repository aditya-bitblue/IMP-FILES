<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BitBlue</title>
    <!-- Stylesheets -->
    <link href="user/css/bootstrap.css" rel="stylesheet">
    <link href="user/css/style.css" rel="stylesheet">
    <link href="user/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Color Switcher Mockup -->
    <link href="user/css/color-switcher-design.css" rel="stylesheet">
    <link rel="shortcut icon" href="user/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="user/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body class="hidden-bar-wrapper">
    <div class="page-wrapper">
        <!--CheckOut Page-->
        <div class="checkout-page">
            <div class="auto-container">
                <!--Checkout Details-->
                <div class="checkout-form">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <!--Column-->
                            <div class="service-block-three rounded-0 ">
                                <!-- <div class="inner-box wow fadeInUp " data-wow-delay="0ms" data-wow-duration="1500ms"> -->
                                <div class="checkout-title">
                                    <img src="user/images/target.png" class="icon" />
                                    <h2>Admin Registration</h2>
                                </div>
                                <form action="{{route('register-user')}}" method="POST" autocomplete="off">
                                    <div class="row clearfix">
                                        @csrf
                                        @if(Session::has('success'))
                                        <div class="alert alert-success">{{Session::get('success')}}</div>
                                        @endif
                                        @if(Session::has('fail'))
                                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                        @endif


                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">User Name<sup>*</sup></div>
                                            <input type="text" name="name" value="" placeholder="demo">
                                            <span class="text-danger">@error ('name') {{$message}} @enderror</span>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email<sup>*</sup></div>
                                            <input type="email" name="email" value="" placeholder="demo@gmail.com">
                                            <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Password<sup>*</sup></div>
                                            <input type="password" name="password" value="" placeholder="password lenght should be atleast min 8 and max 12">
                                            <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <h6>You Already have an account?<a href="login" class="href"> Login Here</a></h6>

                                        </div>
                                        <div class="text-center">
                                            <!-- <button type="submit" name="registration" class="theme-btn btn-style-two"><span class="txt">Register</span></button> -->
                                            <button type="submit" name="registration" class="btn btn-primary"><span class="txt">Register</span></button>
                                        </div>
                                    </div>
                                </form>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="">
                                <div class="image titlt" data-tilt data-tilt-max="1">
                                    <img style="border-radius: 25px;" src="user/images/resource/about-1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Checkout Details-->
            </div>
        </div>
        <!--End CheckOut Page-->
    </div>
    <!--End pagewrapper-->

    <script src="user/js/jquery.js"></script>
    <script src="user/js/popper.min.js"></script>
    <script src="user/js/bootstrap.min.js"></script>
    <script src="user/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="user/js/jquery.fancybox.js"></script>
    <script src="user/js/appear.js"></script>
    <script src="user/js/parallax.min.js"></script>
    <script src="user/js/tilt.jquery.min.js"></script>
    <script src="user/js/jquery.paroller.min.js"></script>
    <script src="user/js/owl.js"></script>
    <script src="user/js/wow.js"></script>
    <script src="user/js/nav-tool.js"></script>
    <script src="user/js/jquery-ui.js"></script>
    <script src="user/js/jquery.bootstrap-touchspin.js"></script>
    <script src="user/js/script.js"></script>
    <script src="user/js/color-settings.js"></script>

</body>

</html>