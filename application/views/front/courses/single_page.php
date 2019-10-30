<?php $this->load->view("front/includes/header_all")?>


<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("kurslar"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->



<!--* Services*-->
<section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">
        <div class="course-detail">
            <div class="row">
                <div class="col-md-8 col-sm-12">


                    <section style="top: 0"  id="newsletter">
                        <div class="newsletter-inner">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="news-content">
                                        <h5 class="mar-0" style="color: #444444">
                                            <?php
                                                if ($this->session->userdata("dil") == "az"){
                                                    echo $course["name_az"];
                                                }
                                                elseif ($this->session->userdata("dil") == "en"){
                                                    echo $course["name_en"];
                                                }
                                                elseif ($this->session->userdata("dil") == "ru"){
                                                    echo $course["name_ru"];
                                                }
                                            ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mailpoet_form" style="padding-top: 0">
                                       <div class="button">
                                           <a href="#c_apply" class="mt_btn_purple"><?php echo $this->lang->line("muraciet"); ?>Muraciet</a>

                                           <?php if($course["file_name"] != "Məlumat Yoxdur") {?>
                                               <a  download href="<?php echo base_url("uploads/courses/$course[file_name]")?>" class="mt_btn_purple"><?php echo $this->lang->line("kataloq yukle"); ?>kataloq yukle</a>
                                           <?php }?>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="post_img">
                        <img style="width: 100%;" src="<?php echo base_url("uploads/courses/").$course["img"] ?>"  alt="">
                    </div>

                    <div class="course-tabs">
                        <div class="nav-content-c">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">istirakcilar</a></li>
                                <li><a data-toggle="tab" href="#menu1">kurs haqqinda</a></li>
                                <li><a data-toggle="tab" href="#menu2">proqram</a></li>
                                <li><a data-toggle="tab" href="#menu3">muellimler</a></li>
                                <li><a data-toggle="tab" href="#menu4">is tecrubesi</a></li>
                            </ul>

                            <div class="tab-content">

<!--                                istirakcilar-->
                                <div id="home" class="tab-pane fade in active">
                                    <div class="post_body">
                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $course["persons_az"];
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo $course["persons_en"];
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo $course["persons_ru"];
                                        }

                                        ?>
                                    </div>
                                </div>

<!--                                haqqinda-->
                                <div id="menu1" class="tab-pane fade">
                                    <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo $course["desc_az"];
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $course["desc_en"];
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $course["desc_ru"];
                                    }

                                    ?>




                                </div>


<!--                                proqram-->
                                <div id="menu2" class="tab-pane fade">
                                    <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo $course["program_az"];
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $course["program_en"];
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $course["program_ru"];
                                    }

                                    ?>
                                </div>


<!--                                muellimler-->
                                <div id="menu3" class="tab-pane fade">
                                    <div class="advisor-main">

                                        <?php foreach ($teachers as $teacher) {?>

                                            <div class="advisor-author">
                                                <div class="advisor-img">
                                                    <img src="<?php echo base_url("uploads/teachers/").$teacher["img"] ?>" alt="Instructor">
                                                </div>
                                                <div class="advisor-name">
                                                    <h3>
                                                        <?php

                                                        if ($this->session->userdata("dil") == "az"){
                                                            echo $teacher["name_az"];
                                                        }elseif ($this->session->userdata("dil") == "en"){
                                                            echo $teacher["name_en"];
                                                        }elseif ($this->session->userdata("dil") == "ru"){
                                                            echo $teacher["name_ru"];
                                                        }

                                                        ?>
                                                    </h3>
                                                    <span style="margin-bottom:12px"> <?php

                                                        if ($this->session->userdata("dil") == "az"){
                                                            echo $course["name_az"];
                                                        }elseif ($this->session->userdata("dil") == "en"){
                                                            echo $course["name_en"];
                                                        }elseif ($this->session->userdata("dil") == "ru"){
                                                            echo $course["name_ru"];
                                                        }

                                                        ?> </span>


                                                    <a  style="color: white; margin-top: 20px!important;" href="<?php

                                                    if ($this->session->userdata("dil") == "az"){
                                                        echo base_url("az/Teacher_single/").$teacher['id'];
                                                    }
                                                    elseif ($this->session->userdata("dil") == "en"){
                                                        echo base_url("en/Teacher_single/").$teacher['id'];
                                                    }
                                                    elseif ($this->session->userdata("dil") == "ru"){
                                                        echo base_url("ru/Teacher_single/").$teacher['id'];
                                                    }



                                                    ?>" tabindex="0"><?php echo $this->lang->line("etrafli"); ?></a>

                                                </div>
                                            </div>

                                        <?php }?>


                                    </div>
                                </div>

<!--                                is tecrubesi-->
                                <div id="menu4" class="tab-pane fade">

                                    <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo $course["practice_az"];
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $course["practice_en"];
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $course["practice_ru"];
                                    }

                                    ?>

                                </div>

                            </div>

                            <div class="book-seat-now" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="apply-form" id="c_apply">
                                            <h4>Muraciet formu</h4>

                                            <?php if (!empty($this->session->flashdata("alert"))){?>

                                                <div class="alert alert-danger">
                                                    <?php echo $this->session->flashdata("alert")?>
                                                </div>

                                            <?php }elseif (!empty($this->session->flashdata("success"))) { ?>

                                                <div class="alert alert-success">
                                                    <?php echo $this->session->flashdata("success")?>
                                                </div>

                                            <?php }?>

                                            <form action="<?php echo base_url("az/Course_join/$course[id]")?>" method="POST">
                                                <p><input required class="form-control" name="name_surname" type="text" placeholder="Ad soyad"></p>
                                                <p><input required class="form-control" name="phone" type="tel" placeholder="Telefon"></p>
                                                <p><input required class="form-control" name="email" type="email" placeholder="Email"></p>
                                                <p><textarea style="height: 85px" name="text" class="form-control" rows="5" id="comment" placeholder="Mesajiniz"></textarea></p>
                                                <p><input type="submit" value="Gonder" class="submit"></p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="locate-map">
                                            <h4>Location</h4>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145092.25223378316!2d-73.90911109726638!3d40.697319496210085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24369470a592b%3A0x4109d18b6c5c7b05!2sQueens%2C+NY%2C+USA!5e0!3m2!1sen!2snp!4v1551785935214" width="200" height="425" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <!--diger kurslar-->
                <aside class="col-md-4 col-sm-12">

                    <div class="widget widget_recent_entries"><!-- widget list -->
                        <h3 class="blog_heading_border"> <?php echo $this->lang->line("diger_kurslar"); ?> </h3>
                        <ul>
                            <?php foreach ($courses as $recent_course){ ?>
                                <li style="padding-left: 34px">
                                    <div class="event-date text-center text-uppercase">
                                        <h4 class="mar-0">   <span><i class="fa fa-info-circle"></i></span>    </h4>
                                    </div>

                                    <h4>
                                        <a href="<?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo base_url("az/Course_single/").$recent_course['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo base_url("en/Course_single/").$recent_course['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo base_url("ru/Course_single/").$recent_course['id'];
                                        }



                                        ?>">

                                            <?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo strlen($recent_course["name_az"]) < 26 ? $recent_course["name_az"]  : substr($recent_course["name_az"], 0,26).'...' ;
                                            }elseif ($this->session->userdata("dil") == "en"){
                                                echo strlen($recent_course["name_en"]) < 26 ? $recent_course["name_en"]  : substr($recent_course["name_en"], 0,26).'...' ;
                                            }elseif ($this->session->userdata("dil") == "ru"){
                                                echo strlen($recent_course["name_ru"]) < 26 ? $recent_course["name_ru"]  : substr($recent_course["name_ru"], 0,26).'...' ;
                                            }

                                            ?></a>
                                    </h4>
                                   <p> <span><i class="fa fa-clock-o"></i> <?php echo $recent_course['start_date']?></span></p>
                            <?php } ?>

                        </ul>
                    </div><!-- End widget list -->

                </aside>
                <!--diger kurslar-->

            </div>
        </div>
    </div>
</section>
<!--* End Services*-->


<?php $this->load->view("front/includes/footer")?>

