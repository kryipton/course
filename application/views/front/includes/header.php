<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Padhai is a creative education html template">

    <title>Padhai - Education HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("public/front/")?>images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("public/front/")?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="<?php echo base_url("public/front/")?>css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="<?php echo base_url("public/front/")?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/front/")?>css/custom.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="<?php echo base_url("public/front/")?>css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/front/")?>css/modal-video-min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/front/")?>css/plugin.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/front/")?>css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">

    <!--Font Icons-->
    <link href="<?php echo base_url("public/front/")?>css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/front/")?>css/flaticon1.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<body>

<!--OPen Animation-->
<!--<div id="preloader">
    <div id="status"></div>
</div>-->
<!--OPen Animation-->



<!--*Header*-->
<header id="inner-navigation">

    <!-- top bar -->
    <div class="topbar-section">
        <div class="container">
            <div class="topbar-inner">
                <div class="top-bar-left pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                        <li><i class="fa fa-envelope"></i> Email: info@sitename.com</li>
                    </ul>
                </div>

                <div class="top-bar-right pull-right">
                    <ul>

                        <li><a href="faq.html"><i class="fa fa-question-circle"></i> Ask a Question</a> </li>
                        <li><a href="register.html">Log In</a></li>
                        <li><a href="register.html">Register</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar start -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

        <div class="container">

            <div class="logo pull-left">
                <h2><a href="index-2.html"><!-- <img  class="logo-img" href="<?php echo base_url("public/front/")?>images/w-logo.png" alt=""> -->Padhai</a></h2>
            </div>

            <div id="navbar" class="navbar-nav-wrapper pull-right">
                <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                    <li class="active">
                        <a href="#"> Ana Sehife </a>
                    </li>
                    <li>
                        <a href="dashboard.html">Haqqimizda</a>

                    </li>
                    <li>
                        <a href="#">Muellimler <i class="fa fa-angle-down"></i></a>
                    </li>
                    <li>
                        <a href="#">Kurslar <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="courses.html">Courses Grid</a></li>
                            <li><a href="courses-slider.html">Courses Slider</a></li>
                            <li class="active"><a href="courses-detail.html">Courses Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Elaqe </a>
                    </li>
                    <li>
                        <div class="header-search">
                            <a href="#" class="search-icon"><i class="fa fa-search"></i></a>
                            <div class="search-box-wrap" style="display: none;">
                                <div class="searchform" role="search">
                                    <form class="search-form" method="get" action="https://cyclonethemes.com/demo/html/padhai/.">
                                        <input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                </div><!-- .searchform -->
                            </div><!-- .search-box-wrap -->
                        </div>
                    </li>
                    <li>
                        <a href="#">dil <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="<?php

                                $segment2 = $this->uri->segment(2);
                                $segment3 = $this->uri->segment(3);
                                $segment4 = $this->uri->segment(4);

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("az/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("az/" . $segment2);
                                }else{
                                    echo base_url("az/Home");
                                }

                                ?>">Az</a>
                            </li>
                            <li>
                                <a href="<?php

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("en/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("en/" . $segment2);
                                }else{
                                    echo base_url("en/Home");
                                }

                                ?>">En</a>
                            </li>
                            <li>
                                <a href="<?php

                                if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                    echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                    echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                }elseif(!empty($this->uri->segment(2))){
                                    echo base_url("ru/" . $segment2);
                                }else{
                                    echo base_url("ru/Home");
                                }

                                ?>">Ru</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>

        <div id="slicknav-mobile"></div>
    </nav>
    <!-- navbar end -->
</header>
<!--* End Header*-->
