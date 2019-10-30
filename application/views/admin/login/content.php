<style>
    #login-page {
        width: 500px;
    }

    .card {
        position: absolute;
        left: 50%;
        top: 50%;
        -moz-transform: translate(-50%, -50%)
        -webkit-transform: translate(-50%, -50%)
        -ms-transform: translate(-50%, -50%)
        -o-transform: translate(-50%, -50%)
        transform: translate(-50%, -50%);
    }

    .footer{
        display: none;
    }

    #login-page{
        height: 420px;
        position:absolute!important; /*it can be fixed too*/
        left:0; right:0;
        top:0; bottom:0;
        margin:auto;
    }
</style>

<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
        <form class="login-form" method="post" action="<?php echo base_url("panel_admin_page_secure_login_secure_controller_action")?>">
            <h4 class="center">Admin Panel</h4>
            <div class="row">
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input required name="usr" class="validate" id="email" type="text">
                    <label  for="email" data-error="wrong" data-success="right">İstifadəçi adı</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input required name="psw" id="password" type="password">
                    <label for="password">Şifrə</label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-field col s12">
                    <button href="#" class="btn waves-effect waves-light col s12">Daxil ol</button>
                </div>
            </div>
        </form>
    </div>
</div>

