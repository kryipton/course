<?php class CoursesWebPageController extends CI_Controller
{


    public $parent_folder = "";
    public $sub_folder = "";

    public function __construct(){

        parent::__construct();

        $this->parent_folder = "front";
        $this->sub_folder = "courses";




        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);


        $this->load->model("CourseModel");
        $this->load->model("TeacherModel");

    }

    public function index()
    {

        //--------------pagination start------------
        $this->load->library('pagination');

        $config["base_url"]    = base_url($this->uri->segment(1) . "/Courses");
        $config["total_rows"]  = $this->CourseModel->get_courses_counts();
        $config["uri_segment"] = 3;
        $config["per_page"]    = 9;

        $config["num_links"] = 4;
        $config['full_tag_open']    = "<ul class='pagination'>";
        $config['full_tag_close']   = "</ul>";


        $config['first_link'] = '&lt;&lt;';
        $config['first_tag_open'] = '<li class="prev">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '&gt;&gt;';
        $config['last_tag_open'] = '<li >';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = ' &gt; ';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = ' &lt; ';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['courses']= $this->CourseModel->get_data($config["per_page"], $page);


        $data['links']  = $this->pagination->create_links();
        //--------------pagination end------------

        $this->load->model("Model_for_core");
        $data['graduates']= $this->Model_for_core->core_get("alumni");
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }

    public function single_page($lang, $id)
    {
/*             for courses*/
        $where = [
            'id' => $id
        ];

        $data['course']= $this->CourseModel->get_data_single($where);
        $data['courses']= $this->CourseModel->get_recent_data();

/*            for teacher*/
        $where2 = [
            'course_id' => $id
        ];
        $teacher= $this->TeacherModel->get_teacher_id($where2);

        $where3 = [
            'id' => $teacher['teacher_id'],
        ];




        //        menim hissem

        $all_teacher_for_courses = $this->TeacherModel->get_all_teachers_from_course(array("course_id" => $id));

        $all_teacher_ids = [];

        if (!empty($all_teacher_for_courses)){

            foreach ($all_teacher_for_courses as $item){
                $all_teacher_ids[] = $item["teacher_id"];
            }

        }

        $data['teachers']= $this->TeacherModel->get_all_teachers_for_course($all_teacher_ids);
        //        menim hissem





        $this->load->model("Model_for_core");
        $data['graduates']= $this->Model_for_core->core_get("alumni");

        $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
    }

    public function cv($lang, $id)
    {
        $course = $this->CourseModel->get_data_single(array("id" => $id));

        $name_surname = strip_tags($this->input->post("name_surname"));
        $email = strip_tags($this->input->post("email"));
        $phone = strip_tags($this->input->post("phone"));
        $text = strip_tags($this->input->post("text"));


        if (!empty($name_surname) && !empty($email) && !empty($phone)){

            $data = array(
                "name_surname" => $name_surname,
                "email" => $email,
                "phone" => $phone,
                "text" => $text,
                "course_name" => $course["name_az"],
            );

            $this->CourseModel->insert_apply($data);

            // 3dile uygunlasdirmaq lazimdir
            if ($lang == "az"){
                $this->session->set_flashdata("success", "Mesajiniz gonderildi");
            }elseif ($lang == "en"){
                $this->session->set_flashdata("success", "Mesajiniz gonderildi");
            }elseif ($lang == "ru"){
                $this->session->set_flashdata("success", "Mesajiniz gonderildi");
            }
            redirect(base_url("$lang/Course_single/$id"));


        }else{

            // 3dile uygunlasdirmaq lazimdir
            if ($lang == "az"){
                $this->session->set_flashdata("alert", "Xeta Bas verdi");
            }elseif ($lang == "en"){
                $this->session->set_flashdata("alert", "Xeta Bas verdi");
            }elseif ($lang == "ru"){
                $this->session->set_flashdata("alert", "Xeta Bas verdi");
            }
            redirect(base_url("$lang/Course_single/$id"));
        }

    }



}