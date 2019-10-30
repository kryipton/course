<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_secure_login_page extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_for_core");
    }

    public function index()
    {
        if (empty($this->session->userdata("user"))){
            $this->load->view('admin/login/whole_page');
        }else{
            redirect(base_url("panel_admin_page_secure_courses_secure_controller"));
        }

    }

    public function login()
    {
        if (empty($this->session->userdata("user"))){
            $usr = strip_tags($this->input->post("usr"));
            $psw = strip_tags($this->input->post("psw"));

            if (!empty($usr) && !empty($psw)){

                $user = $this->Model_for_core->core_get_where_row(
                    array(
                        "username" => $usr,
                        "password" => md5($psw),
                    ),
                    "users");

                if (!empty($user)){

                    $this->session->set_userdata("user", $user["id"]);
                    $this->session->set_flashdata("success", "Daxil oldunuz");
                    redirect(base_url("panel_admin_page_secure_courses_secure_controller"));
                }else{
                    $this->session->set_flashdata("alert", "İstifadəci adı vəya Şifrə yanlışdır");
                    redirect(base_url("panel_admin_page_secure_login_secure_controller"));
                }

            }else{
                $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
                redirect(base_url("panel_admin_page_secure_login_secure_controller"));
            }

        }else{
            redirect(base_url("panel_admin_page_secure_courses_secure_controller"));
        }
    }

    public function logout()
    {
        if (!empty($this->session->userdata("user"))){
            $this->session->unset_userdata("user");
            $this->session->set_flashdata("success", "Çıxıldı");
            redirect(base_url("panel_admin_page_secure_login_secure_controller"));
        }else{
            redirect(base_url("panel_admin_page_secure_login_secure_controller"));
        }
    }


}