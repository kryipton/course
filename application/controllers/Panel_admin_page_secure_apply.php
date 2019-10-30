<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_secure_apply extends MY_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("CourseModel");
    }

    public function index()
    {
        $data["apply"] = $this->CourseModel->all_applies();
        $this->load->view('admin/apply/whole_page', $data);
    }




}