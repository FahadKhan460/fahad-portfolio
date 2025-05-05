<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icard - Personal Portfolio</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- plugin -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
</div>
<!-- preloader area end -->
<!-- Menu toggle Icon Start -->
<div class="toggle-icon">
    <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- Menu toggle Icon End -->
<!-- Main Website wrapper start -->
<div id="main">
    <!--Main-Menu Area Start-->
    <x-sidebar></x-sidebar>
    <!--Main-Menu Area Start-->

    <!--Hero Area Start-->
    <x-home></x-home>
    <!--Hero Area End-->

    <!-- About Area Start -->
    <x-about></x-about>
    <!-- About Area End -->

    <!-- Resume Area Start -->
    <x-resume></x-resume>
    <!-- Resume Area End -->

    <!-- Portfolio Area Start -->
    <x-portfolio></x-portfolio>
    <!-- Portfolio Area End -->

    <!-- Blog List  Area Start -->
    <x-blog></x-blog>
    <!-- Blog List  Area End -->

    <!-- Contact Us Area Start -->
    <x-contact></x-contact>
    <!-- Contact Us Area End -->
</div>
<!-- Main Website wrapper End -->

<!-- Blog Modal Start-->
<div class="modal fade" id="blogmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="blog-details">
                    <div class="blog-content">
                        <div class="feature-image">
                            <img src="assets/images/b1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title">
                                By an outlived insisted procured improved am. Paid hill fine ten now love even leaf.
                            </h3>
                            <ul class="post-meta">
                                <li>
                                    <a href="index.html#">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Alex Jole</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>
												February 21, 2019
											</span>
                                    </a>
                                </li>

                            </ul>
                            <p>
                                Now for manners use has company believe parlors. Least nor party who wrote while did. Excuse formed as
                                is agreed admire so on result parish. Put use set uncommonly announcing and travelling. Allowance
                                sweetness direction to as necessary. Principle oh explained excellent do my suspected conveying in.
                            </p>
                            <p>
                                Least nor party who wrote while did. Excuse formed as is agreed admire so on result parish. Put use
                                set
                                uncommonly announcing and travelling.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Blog Modal End-->

<!-- Main jquery and all jquery plugin hear -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/circel.js') }}"></script>
<script src="{{ asset('assets/js/typed.min.js') }}"></script>
<script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
