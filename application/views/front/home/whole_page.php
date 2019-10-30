<?php $this->load->view("front/includes/header_home")?>


<!-- Slider -->
<div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First Slide -->
        <div class="item active">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-1.jpg" alt="slider_01" />
            <!-- Left Slide Text Layer -->
            <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                <h3>Welcome To Padhai</h3>
                <h1>Explore the World of Our Graduates</h1>
                <a class="mt_btn_yellow" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Contact');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Contact');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Contact');
                }

                ?>">
                    <?php echo $this->lang->line("elaqe"); ?>
                </a>
            </div><!-- /Left Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

        <!-- Second Slide -->
        <div class="item">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-2.jpg" alt="slider_02" />
            <!-- Right Slide Text Layer -->
            <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                <h3>Welcome To Padhai</h3>
                <h1>Better education for a better world</h1>
                <a class="mt_btn_yellow" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Contact');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Contact');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Contact');
                }

                ?>">
                    <?php echo $this->lang->line("elaqe"); ?>
                </a>            </div><!-- /Right Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

        <!-- Third Slide -->
        <div class="item">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-4.jpg" alt="slider_04" />
            <!-- Center Slide Text Layer -->
            <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                <h3>Welcome To Padhai</h3>
                <h1>Exceptional People, Exceptional Care</h1>
                <a class="mt_btn_yellow" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Contact');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Contact');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Contact');
                }

                ?>">
                    <?php echo $this->lang->line("elaqe"); ?>
                </a>            </div><!-- /Center Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- End Slider -->

<!-- About Courses -->
<div class="edu-courses">
    <div class="container">
        <div class="row panel-grid-banner">
            <div class="col-md-4 col-sm-12">
                <div class="inner-grid text-center">
                    <div class="text-courses">
                        <i class="fa fa-laptop mar-bottom-20"></i>
                        <h3><?php echo $this->lang->line("kurslarimiz"); ?></h3>
                    </div>
                    <div class="courses-content">
                        <a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Courses');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Courses');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Courses');
                        }

                        ?>" class="mt_btn_yellow"><?php echo $this->lang->line("etrafli"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="inner-grid text-center">
                    <div class="text-courses">
                        <i class="fa fa-users mar-bottom-20"></i>
                        <h3><?php echo $this->lang->line("muellimlerimiz"); ?></h3>
                    </div>
                    <div class="courses-content">
                        <a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Teachers');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Teachers');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Teachers');
                        }

                        ?>" class="mt_btn_yellow"><?php echo $this->lang->line("etrafli"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="inner-grid text-center">
                    <div class="text-coursesa">
                        <i class="fa fa-book mar-bottom-20"></i>
                        <h3><?php echo $this->lang->line("tedbirlerimiz"); ?></h3>
                    </div>
                    <div class="courses-content">
                        <a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Events');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Events');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Events');
                        }

                        ?>" class="mt_btn_yellow "><?php echo $this->lang->line("etrafli"); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Courses -->


<!--*Courses*-->
<section class="features-one">
    <div class="container">
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("kurslar"); ?></h3>
        </div>



            <?php
            $counter = 0;

            foreach ($courses as $course) {

                  if ($counter < 6){ ?>


                  <div class="col-md-4 col-sm-6 col-xs-6 item mar-bottom-30">
                        <div class="featured-item" style="height: 198px">
                            <div class="feat-img">
                                <img src="<?php echo base_url("uploads/courses/").$course["img"] ?>"  style="width: 358px; height: 198px; object-fit: cover" alt="">
                                <div class="overlayPort">
                                    <ul class="info text-center list-inline">
                                        <li style="margin-top: 26px;">
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url("az/Course_single/").$course['id'];
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url("en/Course_single/").$course['id'];
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url("ru/Course_single/").$course['id'];
                                            }



                                            ?>" tabindex="0"><?php echo $this->lang->line("etrafli"); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                  <?php }else{break;}?>


            <?php $counter++; } ?>
    </div><!-- /.container -->
</section>
<!--*Courses*-->



<!--Education Event-->
<section class="edu-events">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("gelecek_tedbirler"); ?></h3>
        </div>

        <div class="row">

            <article id="slider">
                <div id="slide" class="slide left">
                    <ul class="active_ul">

                        <?php  $i =0;
                        foreach ($events as $event){ if ($i++ > 5) { break ;}
                        ?>

                        <li class="active">
                            <div class="img" style="background-image:url(<?php echo base_url("uploads/events/$event[img]")?>) ">
                                <div class="c_event_title_div">
                                    <a class="c_event_title" href="<?php


                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url("az/Event_single/$event[id]");
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url("en/Event_single/$event[id]");
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url("ru/Event_single/$event[id]");
                                    }

                                    ?>">
                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo strlen($event["name_az"]) < 94 ? $event["name_az"]  : mb_substr($event["name_az"], 0,94).'...' ;
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo strlen($event["name_en"]) < 94 ? $event["name_en"]  : mb_substr($event["name_en"], 0,94).'...' ;
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo strlen($event["name_ru"]) < 94 ? $event["name_ru"]  : mb_substr($event["name_ru"], 0,94).'...' ;
                                        }

                                        ?>
                                    </a>
                                </div>
                            </div>
                            <div class="blur-content">
                                <div class="blur-img"></div>
                            </div>
                        </li>

                        <?php } ?>


                    </ul>
                </div>

                <div id="thumbnail" class="thumbnail left" style="box-sizing: border-box">
                    <ul class="thumbnail-list" style="box-sizing: border-box">

                        <?php  $i =0;
                        foreach ($events as $event){ if ($i++ > 5) { break ;}
                        ?>

                        <li class="active">
                            <p class="c_event_title" href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url("az/Event_single/").$event['id'];
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url("en/Event_single/").$event['id'];
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url("ru/Event_single/").$event['id'];
                            }



                            ?>">

                                <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo strlen($event["name_az"]) < 155 ? $event["name_az"]  : mb_substr($event["name_az"], 0,155).'...' ;
                                }elseif ($this->session->userdata("dil") == "en"){
                                    echo strlen($event["name_en"]) < 155 ? $event["name_en"]  : mb_substr($event["name_en"], 0,155).'...' ;
                                }elseif ($this->session->userdata("dil") == "ru"){
                                    echo strlen($event["name_ru"]) < 155 ? $event["name_ru"]  : mb_substr($event["name_ru"], 0,155).'...' ;
                                }

                                ?>
                            </p>

                            <p style="float: right;"><?php echo $event["date"]?></p>
                        </li>

                        <?php } ?>


                        <li class="marker"></li>
                    </ul>
                </div>

            </article>


        </div><!-- /.row -->


    </div><!-- /.container -->

</section>
<!--End Education Event-->




<!--*Partners*-->
<section class="features-one">
    <div class="container">
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("partnoyorlar"); ?></h3>
        </div>
        <div class="row  slider slider-ft-course slider-ft-course-new">
            <?php foreach ($partners as $partner) { ?>

                <div class="col-md-2 col-sm-2 col-xs-2 item mar-bottom-30 c_partners">
                    <div class="featured-item">
                        <div class="feat-img">
                            <a href="<?php  echo $partner["link"]; ?>" >
                                <img src="<?php echo base_url("uploads/partners/").$partner["img"] ?>"  style="height: 100px; object-fit: cover" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div><!-- /.container -->
</section>
<!--*EndPapartner*-->

<?php $this->load->view("front/includes/footer")?>


