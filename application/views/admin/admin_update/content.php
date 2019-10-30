
<div class="content">
    <div class="module c_module">

<!--        modulun contenti-->
        <div class="module-body">

            <h4 style="margin-left: 25px">Admin Update</h4>

            <form action="<?php echo base_url("panel_admin_page_secure_admin_update_secure_controller_update")?>" method="post">
                <div class="col s3 center row">

                    <div class="input-field col s3">
                        <input required name = "usr" id="username" type="text" class="validate" value="<?php echo $user["username"]?>">
                        <label for="username">Yeni username</label>
                    </div>

                    <div class="input-field col s3">
                        <input required name = "psw" id="pass" type="password" class="validate">
                        <label for="pass">Yeni password</label>
                    </div>
                    <br><br>

                </div>

                <div style="margin-left: 10px" class="input-field col s12">
                    <button type="submit" class="btn ">Yenilə</button>
                </div>
            </form>

        </div>
<!--        modulun contenti-->

    </div>
</div>




