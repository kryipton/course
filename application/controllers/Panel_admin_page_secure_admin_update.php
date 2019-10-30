<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_secure_admin_update extends MY_Controller{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["user"] = $this->Model_for_core->core_get_where_row(array("id" =>1), "users");

        $this->load->view("admin/admin_update/whole_page", $data);
    }

    public function update()
    {
        $usr = strip_tags($this->input->post("usr"));
        $psw = strip_tags($this->input->post("psw"));

        if (!empty($usr) && !empty($psw)){

            $this->Model_for_core->core_update(array("id" => 1), "users", array("username" => $usr, "password" => md5($psw)));
            redirect(base_url("panel_admin_page_secure_logout_secure_controller_action"));

        }else{
            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("panel_admin_page_secure_admin_update_secure_controller"));
        }


    }

}