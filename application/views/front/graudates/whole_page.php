<?php $this->load->view("front/includes/header_all")?>


<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("mezunlar"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->


<!--*Team*-->
<section id="educate-team" class="section-inner">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("mezunlar"); ?></h3>
        </div>
        <div class="row slider-educteam">
            <?php foreach ( $graudates as $graudate){
                ?>

                <div class="col-md-3 col-sm-6 col-xs-12 item">
                    <div class="team_member mar-bottom-30">
                        <figure class="effect-julia" style=" height: 283.875px; text-align: center ">
                            <img src="<?php echo base_url("uploads/alumni/").$graudate["img"] ?>" style="width: 262.500px; height: 266.875px; object-fit: contain; " alt="team">
                        </figure>
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>         <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo strlen($graudate["desc_az"]) < 99 ? $graudate["desc_az"]  : substr($graudate["desc_az"], 0,99).'...' ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo strlen($graudate["desc_en"]) < 99 ? $graudate["desc_en"]  : substr($graudate["desc_en"], 0,99).'...' ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo strlen($graudate["desc_ru"]) < 99 ? $graudate["desc_ru"]  : substr($graudate["desc_ru"], 0,99).'...' ;
                                    }

                                    ?>
                                </p>
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="<?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo base_url("az/Graudate/").$graudate['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo base_url("en/Graudate/").$graudate['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo base_url("ru/Graudate/").$graudate['id'];
                                        }



                                        ?>" tabindex="0"><?php echo $this->lang->line("etrafli"); ?></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="member_name">
                            <h3>      <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo strlen($graudate["name_az"]) < 35 ? $graudate["name_az"]  : substr($graudate["name_az"], 0,35).'...' ;
                                }elseif ($this->session->userdata("dil") == "en"){
                                    echo strlen($graudate["name_en"]) < 35 ? $graudate["name_en"]  : substr($graudate["name_en"], 0,35).'...' ;
                                }elseif ($this->session->userdata("dil") == "ru"){
                                    echo strlen($graudate["name_ru"]) < 35 ? $graudate["name_ru"]  : substr($graudate["name_ru"], 0,35).'...' ;
                                }

                                ?>
                            </h3>
                        </div>
                    </div>
                </div>

            <?php } ?>





        </div>
    </div>
</section>
<!--* End Team*-->




















<?php $this->load->view("front/includes/footer")?>
