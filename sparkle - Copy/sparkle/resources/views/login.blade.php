<!doctype html>
<html lang="zxx" class="theme-light">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/viewer.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Sparkle Kids</title>

    <link rel="icon" type="image/png" href="assets/img/title-logo.png">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Login Area -->
    <section class="login-area">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="login-image">
                    <img src="assets/img/blog/bg1.png" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="login-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="login-form">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/sparklelogo-removebg.png" class="black-logo"
                                            alt="image"></a>
                                    <a href="/"><img src="assets/img/sparklelogo-removebg.png" class="white-logo"
                                            alt="image"></a>
                                </div>

                                <h3>Welcome back</h3>
                                <p>New to Sparkle Kids? <a href="/register">Sign up</a></p>
                                @if (Session::has('fail'))
                                <div class="alert alert-info">{{ Session::get('fail') }}</div>
                                @endif
                                <form method="post" action="user_login">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email address"
                                            class="form-control">
                                        @error('email')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Your password"
                                            class="form-control">
                                        @error('password')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                        @if (Session::has('pass-fail'))
                                        <div class="alert alert-info">{{ Session::get('pass-fail') }}</div>
                                        @endif
                                    </div>


                                    <button type="submit">Login</button>

                                    <!-- <div class="forgot-password">
                                        <a href="#">Forgot Password?</a>
                                    </div> -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->



    <!-- Links of JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/viewer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>