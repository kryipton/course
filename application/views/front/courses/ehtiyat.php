<div class="course-tabs">
    <div class="post_title_eve">
        <h3>
            <?php

            if ($this->session->userdata("dil") == "az"){
                echo $course["name_az"];
            }elseif ($this->session->userdata("dil") == "en"){
                echo $course["name_en"];
            }elseif ($this->session->userdata("dil") == "ru"){
                echo $course["name_ru"];
            }

            ?>
        </h3>
    </div>
    <div class="eve-content">
        <div class="over-view">
            <?php

            if ($this->session->userdata("dil") == "az"){
                echo $course["desc_az"];
            }elseif ($this->session->userdata("dil") == "en"){
                echo $course["desc_en"];
            }elseif ($this->session->userdata("dil") == "ru"){
                echo $course["desc_ru"];
            }

            ?>


            <span> <b><?php echo $this->lang->line("baslama_tarixi"); ?> : </b>        <?php echo $course['start_date']?> </span><br>
            <span> <b><?php echo $this->lang->line("kurs_muddeti"); ?> : </b>        <?php echo $course['whole_month']; ?> </span><br>
            <span> <b><?php  $new_time = date('H:i', strtotime($course['lesson_start_hour'])); $new_time1 = date('H:i', strtotime($course['lesson_end_hour'])) ; echo $this->lang->line("ders_saati"); ?> : </b>        <?php echo $new_time."-".$new_time1  ?> </span><br>
            <span> <b> <?php echo $this->lang->line("telebe_sayi"); ?> : </b>    <?php echo $course['max_student']?> </span>

        </div>
    </div>


    <br>

    <div class="advisor-main">
        <div class="advisor-author">
            <div class="advisor-img">
                <img src="<?php echo base_url("uploads/teachers/").$teacher["img"] ?>" alt="Instructor">
            </div>
            <div class="advisor-name">
                <h3> <?php

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
        <!--                            <div class="advisor-description">-->
        <!--                                <p> --><?php
        //
        //                                    if ($this->session->userdata("dil") == "az"){
        //                                        echo $teacher["desc_az"];
        //                                    }elseif ($this->session->userdata("dil") == "en"){
        //                                        echo $teacher["desc_en"];
        //                                    }elseif ($this->session->userdata("dil") == "ru"){
        //                                        echo $teacher["desc_ru"];
        //                                    }
        //
        //                                    ?>
        <!--                                </p>-->
        <!---->
        <!--                            </div>-->
    </div>

</div>
