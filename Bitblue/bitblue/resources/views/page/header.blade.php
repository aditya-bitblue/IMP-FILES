<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BitBlue Technology</title>
    <!-- Stylesheets -->
    <link href="./user/css/bootstrap.css" rel="stylesheet">
    <link href="./user/css/style.css" rel="stylesheet">
    <link href="./user/css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="./user/css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./user/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<style>
    .toggal {
        padding-top: 27px;
        font-size: 30px;
        color: aliceblue;
        text-align: end;
    }

    @media screen and (min-width: 767px) {
        .toggal {
            display: none !important;
        }
    }



    .toggalscroll {
        padding-top: 27px;
        font-size: 30px;
        color: black;
        text-align: end;
    }

    @media screen and (min-width: 767px) {
        .toggalscroll {
            display: none !important;
        }
    }

    @media screen and (max-width: 500px) {
        .sticky-icon {
            right: -4% !important;
        }
    }


    .sticky-icon {
        z-index: 999;
        position: fixed;
        top: 20%;
        right: -1%;
        width: 220px;
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(160px, 0px);
        border-radius: 50px 0px 0px 50px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        text-transform: uppercase;
        padding: 8px;
        font-size: 18px;
        font-family: 'Oswald', sans-serif;
        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #FFF;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    /*.search_icon a:hover i  {
	transform:rotate(360deg);}*/
    .Facebook {
        background-color: #0080ff;
        color: #FFF;
    }

    .Youtube {
        background-color: #ff0007;
        color: #FFF;
    }

    .Twitter {
        background-color: #00a9ff;
        color: #FFF;
    }

    .Instagram {
        background-color: #ff0000;
        color: #FFF;
    }

    .Google {
        background-color: #ff1d00;
        color: #FFF;
    }

    .Phone {
        background-color: #28ff11;
        color: #FFF;
    }

    .Linkedin {
        background-color: #0077b5;
        color: #FFF;
    }

    .Whatsapp {
        background-color: #0b7300;
        color: #FFF;
    }

    .sticky-icon a i {
        background-color: #FFF;
        height: 30px;
        width: 30px;
        color: #000;
        text-align: center;
        line-height: 30px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    .sticky-icon a i.fa-facebook-f {
        background-color: #FFF;
        color: #2C80D3;
    }

    .sticky-icon a i.fa-google-plus-g {
        background-color: #FFF;
        color: #d34836;
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #FD1D1D;
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #fa0910;
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #53c5ff;
    }

    .sticky-icon a i.fa-linkedin {
        background-color: #FFF;
        color: #0077b5;
    }

    .sticky-icon a i.fa-phone-alt {
        background-color: #FFF;
        color: #28ff11;
    }

    .sticky-icon a i.fa-whatsapp {
        background-color: #FFF;
        color: #0b7300;
    }

    .fas fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    }

    .company {
        font-size: 30px;
        color: #1c3874 !important;
    }

    .go479755742 {
        display: none !important;
    }

    .app-service-img {
        height: 325px !important;
        width: 371px !important;
    }

    .web-service-img {
        height: 300px !important;
        width: 210px !important;
    }

    .sdc-img {
        height: 90px !important;
        width: 110px !important;
        padding: 15px;
    }

    .sdc-title {
        font-style: italic;
        font-size: 14px;
        line-height: 1.4em !important;
        font-family: "Fira Sans", Georgia, Cambria, "Times New Roman", Times, serif;
    }

    .about-heading {
        font-style: italic;
        font-size: 22px;
        color: black;
        line-height: 1.4em !important;
        font-family: "Fira Sans", Georgia, Cambria, "Times New Roman", Times, serif;
    }

    .about-title {
        font-size: 20px;
        color: #000;
        line-height: 1.4em !important;
        font-family: "Fira Sans", Georgia, Cambria, "Times New Roman", Times, serif;
    }

    .pd-title {
        font-style: italic;
        font-size: 8px;
        line-height: 1.4em !important;
        font-family: "Fira Sans", Georgia, Cambria, "Times New Roman", Times, serif;
    }

    .sdc-p {
        padding: 15px;
        /* font-style: italic; */
    }

    .header__accent {
        color: #ff4e00;
    }

    .insta,
    .face,
    .whata,
    .linkd,
    .twt,
    .yout,
    .call {
        color: #fff;
    }

    .insta:hover {
        color: #ff0000;
    }

    .face:hover {
        color: #0080ff;
    }

    .whata:hover {
        color: #0077b5;
    }

    .linkd:hover {
        color: #0077b5;
    }

    .twt:hover {
        color: #00a9ff;
    }

    .yout:hover {
        color: #ff0007;
    }

    .call:hover {
        color: #28ff11;
    }
</style>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader">
            <div class="box"></div>
        </div> -->

        <!-- Main Header-->
        <header class="main-header header-style-one">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="">
                            <div class="logo pull-left mt-1"><a href="/"><img src="./user/images/logobit.png" alt="" title="">
                                </a>
                                <span class="company"><b>BITBLUE</b></span>&nbsp;&nbsp;<span class="text-danger fs-2 "><b>TECHNOLOGY</b></span>
                            </div>
                            <div class="mobile-nav-toggler toggalscroll">
                                <span style="font-weight: 700 !important;" class="icon flaticon-menu"></span>
                            </div>
                        </div>
                    </div>


                    <div class="nav-outer clearfix">

                        <!--Mobile Navigation Toggler-->
                        <!-- <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div> -->
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">

                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix pull-right mt-2" id="navbarSupportedContent">
                                <ul class="navigation clearfix ">
                                    <li class=""><a href="/"><b>Home</b></a>

                                    </li>
                                    <li class=""><a href="about-us"><b>About</b></a>
                                        <!-- <ul>
                                            <li><a href="about-us">About Us</a></li>

                                        </ul> -->
                                    </li>
                                    <li id="services" class="dropdown"><a><b>Services</b></a>

                                        <div class="hides dropdown">
                                            <ul>
                                                <li><a href="mobappdevelopment"><span class="color-layer"></span>Mobile App Development</a></li>
                                                <li><a href="webappdevelopment"><span class="color-layer"></span>Web App Development</a></li>
                                                <li><a href="Softwaredevelopmentconsulting"><span class="color-layer"></span>Software development consulting</a></li>
                                                <li><a href="ProductDesign"><span class="color-layer"></span>Product Design</a></li>
                                                <li><a href="StartupDNA"><span class="color-layer"></span>Startup DNA</a></li>
                                                <li><a href="MachineLearningAI"><span class="color-layer"></span>Machine Learning & AI</a></li>
                                                <li><a href="DedicatedProductTeam"><span class="color-layer"></span>Dedicated Product Team</a></li>
                                                <li><a href="TeamAugmentation"><span class="color-layer"></span>Team Augmentation</a></li>
                                            </ul>
                                        </div>

                                        <ul>


                                            <li><a href="mobappdevelopment"><span class="color-layer"></span>Mobile App Development</a></li>
                                            <li><a href="webappdevelopment"><span class="color-layer"></span>Web App Development</a></li>
                                            <li><a href="Softwaredevelopmentconsulting"><span class="color-layer"></span>Software development consulting</a></li>
                                            <li><a href="ProductDesign"><span class="color-layer"></span>Product Design</a></li>
                                            <li><a href="StartupDNA"><span class="color-layer"></span>Startup DNA</a></li>
                                            <li><a href="MachineLearningAI"><span class="color-layer"></span>Machine Learning & AI</a></li>
                                            <li><a href="DedicatedProductTeam"><span class="color-layer"></span>Dedicated Product Team</a></li>
                                            <li><a href="TeamAugmentation"><span class="color-layer"></span>Team Augmentation</a></li>
                                        </ul>
                                    </li>
                                    <li id="products" class="dropdown"><a><b>Product</b></a>
                                        <div class="hidep dropdown">
                                            <ul>
                                                <li><a href="dextro">Dextro</a></li>
                                                <li><a href="pabulum">Pabulum</a></li>
                                                <li><a href="hospo">Hospo</a></li>
                                                <li><a href="bithome">Bithome</a></li>
                                                <li><a href="digitalmarketing">Digital Marketing</a></li>
                                                <li><a href="bitpay">Bitpay</a></li>
                                                <!-- <li><a href="mobileapplication">Mobile Application</a></li>
                                            <li><a href="webdevelopment">Web Development</a></li> -->
                                            </ul>

                                        </div>
                                        <ul>
                                            <li><a href="dextro">Dextro</a></li>
                                            <li><a href="pabulum">Pabulum</a></li>
                                            <li><a href="hospo">Hospo</a></li>
                                            <li><a href="bithome">Bithome</a></li>
                                            <li><a href="digitalmarketing">Digital Marketing</a></li>
                                            <li><a href="bitpay">Bitpay</a></li>
                                            <!-- <li><a href="mobileapplication">Mobile Application</a></li>
                                            <li><a href="webdevelopment">Web Development</a></li> -->
                                        </ul>
                                    </li>

                                    <li class=""><a href="career"><b>Career</b></a>
                                        <!-- <ul>
                                            <li><a href="shop.html">Our Products</a></li>
                                            <li><a href="shop-single.html">Product Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="account.html">Account</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-classic.html">Blog Classic</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="aboutnew">Blog Single</a></li>
                                            <li><a href="not-found.html">Not Found</a></li>
                                            <li><a href="login">login</a></li>
                                            <li><a href="registration">registration</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="contact"><b>Contact us</b></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="#" title=""><img src="./user/images/logobit.png" alt="" title=""><span class="company"><b>BITBLUE</b></span>&nbsp;&nbsp;<span class="text-danger fs-2 "><b>TECHNOLOGY</b></span></a>
                    </div>
                    <div class=" ">
                        <div class="mobile-nav-toggler toggalscroll"><span class="icon flaticon-menu " style="font-weight: 700;"></span></div>
                    </div>

                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->

                        <!-- Main Menu End-->


                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">


                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="#"><img src="./user/images/bbw-logo-small.png" alt="" title=""></a></div>
                    <div class="menu-outer">

                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
        <div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <!--Start Sticky Icon-->
            <div class="sticky-icon">
                <a href="#" class="Instagram"><i class="fab fa-instagram"></i> Instagram </a>
                <a href="https://www.facebook.com/Bitbluetech/" class="Facebook"><i class="fab fa-facebook-f"> </i> Facebook </a>
                <!-- <a href="https://aboutme.google.com/u/0/?referer=gplus" class="Google"><i class="fab fa-google-plus-g"> </i> Google + </a> -->
                <a href="https://www.youtube.com/" class="Youtube"><i class="fab fa-youtube"></i> Youtube </a>
                <a href="https://twitter.com/Bitbluetech01" class="Twitter"><i class="fab fa-twitter"> </i> Twitter </a>
                <a href="https://www.linkedin.com/profile/view?id=AAIAABp1IgQBWW6B--9JineoON_6Esqf-n8mP4I&trk=nav_responsive_tab_profile" class="Linkedin"><i class="fab fa-linkedin"> </i> Linkedin </a>
                <a href="tel:+918828020600" class="Phone"><i class="fas fa-phone-alt"> </i> Call </a>
                <a href="https://wa.me/8828020600" class="Whatsapp"><i class="fab fa-whatsapp"> </i> Whatsapp </a>
            </div>
            <!--End Sticky Icon-->
        </div>