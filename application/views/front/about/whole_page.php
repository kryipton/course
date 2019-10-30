
<?php $this->load->view("front/includes/header_all")?>


<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2>   <?php echo $this->lang->line("haqqimizda"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->



<!--*About*-->
<section id="mt_about">
    <div class="container">
        <div class="about_services">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-items">
                        <div class="inner-heading">
                            <h3><?php echo $this->lang->line("haqqimizda"); ?></h3>
                        </div>
                        <?php

                        if ($this->session->userdata("dil") == "az"){
                            echo $about["desc_az"];
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo $about["desc_en"];
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo $about["desc_ru"];
                        }

                        ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-edu-bg">
                        <img src="<?php echo base_url("public/front/")?>images/education/about.png" alt="About">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->


<!--* Mission Area*-->
<!--<section id="mission_main" class="mission-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="mission-progress-bar">
                    <div class="inner-heading">
                        <h3>Mission</h3>
                    </div>
                    <div class="progress-wrap">
                        <h5>Known Results</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">95%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Market Research</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">60%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Strategic Consulting</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">90%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Digital Teaching</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">75%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Online Reputation</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--><!--* End Mission Area*-->






<?php $this->load->view("front/includes/footer")?>
