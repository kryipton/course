<div class="nav" style="background-color: #238c80">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i style="font-size: 30px" class="fas fa-bars"></i></a>
        </div>
    </div>

</div>



<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="https://materializecss.com/images/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="<?php echo base_url("public/admin/images/admin.png")?>"></a>
            <a href="#name"><span class="white-text name">Admin admin</span></a>
            <a href="#email"><span class="white-text email">admin@gmail.com</span></a>
        </div>
    </li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_courses_secure_controller")?>">Kurslarmız</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_partners_secure_controller")?>">Əməkdaşlarımız</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_alumni_secure_controller")?>">Məzunlarımız</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_teachers_secure_controller")?>">Müəllimlərimiz</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_events_secure_controller")?>">Tədbirlər</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_about_secure_controller")?>">Haqqımızda</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_contact_secure_controller")?>">Əlaqə</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_apply_secure_controller")?>">Müraciətlər</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_admin_update_secure_controller")?>">Admin Yeniləmə</a></li>
    <li><a class="waves-effect" href="<?php echo base_url("panel_admin_page_secure_logout_secure_controller_action")?>">Çıxış</a></li>

</ul>
