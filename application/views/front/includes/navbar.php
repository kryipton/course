<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

    <div class="container">

        <div class="logo pull-left">
            <h2><a href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Home');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Home');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Home');
                }

                ?>"><!-- <img  class="logo-img" href="<?php echo base_url("public/front/")?>images/w-logo.png" alt=""> -->Padhai</a></h2>
        </div>

        <div id="navbar" class="navbar-nav-wrapper pull-right">
            <ul class="nav navbar-nav navbar-right" id="responsive-menu">

                <!--Ana sehife-->
                <li <?php if ($this->uri->segment(2)=="Home") { ?>class="active" <?php } ?> >
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Home');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Home');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Home');
                    }

                    ?>"> <?php echo $this->lang->line("ana_sehife"); ?>
                    </a>
                </li>
                <!--Ana sehife-->



                <!--Merkez-->
                <li style="cursor: pointer;">
                    <a><?php echo $this->lang->line("merkez"); ?> <i class="fa fa-angle-down"></i></a>
                    <ul>

                        <!--Haqqimizda-->
                        <li>
                                <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/About');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/About');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/About');
                                }

                                ?>">
                                    <?php echo $this->lang->line("haqqimizda"); ?>
                                </a>
                            </li>
                        <!--Haqqimizda-->



                        <!--Mezunlar-->
                        <li>

                            <?php if(!empty($graduates)){?>

                                <a><?php echo $this->lang->line("mezunlar"); ?></a>
                                <ul>
                                    <?php foreach ($courses as $course) { ?>
                                        <li>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url("az/Graudates/").$course['id'];
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url("en/Graudates/").$course['id'];
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url("ru/Graudates/").$course['id'];
                                            }



                                            ?>">

                                                <?php

                                                if ($this->session->userdata("dil") == "az"){
                                                    echo strlen($course["name_az"]) < 19 ? $course["name_az"]  : substr($course["name_az"], 0,19).'...' ;
                                                }elseif ($this->session->userdata("dil") == "en"){
                                                    echo strlen($course["name_en"]) < 19 ? $course["name_en"]  : substr($course["name_en"], 0,19).'...' ;
                                                }elseif ($this->session->userdata("dil") == "ru"){
                                                    echo strlen($course["name_ru"]) < 19 ? $course["name_ru"]  : substr($course["name_ru"], 0,19).'...' ;
                                                }

                                                ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>

                            <?php } ?>

                        </li>
                        <!--Mezunlar-->

                    </ul>
                </li>
                <!--Merkez-->



                <!--Kurslar-->
                <li <?php if ($this->uri->segment(2)=="Courses") { ?>class="active" <?php } ?>>
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

                    ?>">
                    <?php echo $this->lang->line("kurslar"); ?>

                    </a>

                </li>
                <!--Kurslar-->


                <!--Kurslar-->
                <li <?php if ($this->uri->segment(2)=="Career") { ?>class="active" <?php } ?>>
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Career');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Career');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Career');
                    }

                    ?>">
                        <?php echo $this->lang->line("mezun_karyera"); ?>

                    </a>

                </li>
                <!--Kurslar-->


                <!--Muelllimler-->
                <li <?php if ($this->uri->segment(2)=="Teachers") { ?>class="active" <?php } ?>>
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

                    ?>">
                        <?php echo $this->lang->line("muellimler"); ?>
                    </a>
                </li>
                <!--Muelllimler-->


                <!--Tedbirler-->
                <li <?php if ($this->uri->segment(2)=="Events") { ?>class="active" <?php } ?>  >
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

                    ?>">
                        <?php echo $this->lang->line("tedbirler"); ?>
                    </a>
                </li>
                <!--Tedbirler-->


                <!--Elaqe-->
                <li <?php if ($this->uri->segment(2)=="Contact") { ?>class="active" <?php } ?> >
                    <a href="<?php

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
                </li>
                <!--Elaqe-->


                <!--Dil-->
                <li>
                    <a style="cursor: pointer;"><?php echo $this->lang->line("dil"); ?><i class="fa fa-angle-down"></i></a>
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
                <!--Dil-->

            </ul>
        </div><!--/.nav-collapse -->
    </div>

    <div id="slicknav-mobile"></div>
</nav>
