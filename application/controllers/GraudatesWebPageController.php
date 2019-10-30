<?php class GraudatesWebPageController extends CI_Controller
{


    public $parent_folder = "";
    public $sub_folder = "";

    public function __construct(){

        parent::__construct();

        $this->load->model("Model_for_core");
        if(empty($this->Model_for_core->core_get("alumni"))){
            redirect(base_url());
        }

        $this->parent_folder = "front";
        $this->sub_folder = "graudates";




        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);


        $this->load->model("CourseModel");
        $this->load->model("TeacherModel");
        $this->load->model("GraudateModel");
    }

    public function index($lang, $course_id)
    {
        $where=[
          'course_id'=> $course_id,
        ];
        $data['graudates']= $this->GraudateModel->get_data($where);

        $this->load->model("Model_for_core");
        $data['graduates']= $this->Model_for_core->core_get("alumni");

        $data['courses']= $this->CourseModel->get_courses_for_home();
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }


    public function single_page($lang, $id)
    {


        $where3 = [
            'id' => $id,
        ];
        $data['graudate']= $this->GraudateModel->get_data_single($where3);

        $data['r_courses']= $this->CourseModel->get_recent_data();

        $where = [
            'id' => $data['graudate']['course_id'],
        ];
        //navbardaki kurslar ucun
        $data['courses']= $this->CourseModel->get_courses_for_home();
        //navbardaki kurslar ucun


        $data['course']= $this->CourseModel->get_data_single($where);


        $this->load->model("Model_for_core");
        $data['graduates']= $this->Model_for_core->core_get("alumni");

        $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
    }




}