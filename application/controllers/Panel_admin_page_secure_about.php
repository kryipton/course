<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_secure_about extends MY_Controller{

    private $table_name= "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $update_link = "";
    private $add_link = "";
    private $delete_link = "";
    private $get_data_for_update_modal_link = "";
    private $success_link = "";
    private $error_link = "";
    private $get_data_link = "";
    private $input_name_type ="";


    public function __construct()
    {
        parent::__construct();
        $this->table_name = "about";
        $this->label_name_and_input_name = array(
            "Azərbaycanca haqqında" => "desc_az",
            "Ingiliscə haqqında" => "desc_en",
            "Rusca haqqında" => "desc_ru",
        );
        $this->input_name_type = array(
            "desc_az" => "editor",
            "desc_en" => "editor",
            "desc_ru" => "editor",
        );
        $this->update_link                    = base_url("panel_admin_page_secure_about_secure_controller_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->add_link                       = base_url("panel_admin_page_secure_about_secure_controller_add/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->delete_link                    = base_url("panel_admin_page_secure_about_secure_controller_delete/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->get_data_for_update_modal_link = base_url("panel_admin_page_secure_about_secure_controller_get_data_for_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->success_link                   = base_url("panel_admin_page_secure_about_secure_controller/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->error_link                     = base_url("panel_admin_page_secure_about_secure_controller/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->get_data_link                  = base_url("panel_admin_page_secure_about_secure_controller_get_data/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
    }

    public function index()
    {
        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type = $this->input_name_type;
        $select_name_and_table_name = array();//eger select yoxdusa bos qoya bilerik
        $action_link_update =  $this->update_link;
        $action_link_create = $this->add_link;

        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create, $action_link_update, $select_name_and_table_name);
        $data["get_data_link"] = $this->get_data_link;

        $this->load->view('admin/about/whole_page', $data);
    }

    public function get_data()
    {
        $field_names = array(//burda tablenin butun fieldleri ardicil yazilir hansinin gorsenmesini isdemirsense css de display none verirsen fso numunesi content.php de var
            0=>'id',
            1=>'desc_az',
            2=>'desc_ru',
            3=>'desc_en',
        );
        $additional_links = array();
        $table_name = $this->table_name;
        $get_data_for_update_modal_link = $this->get_data_for_update_modal_link;
        $row_delete_link =  $this->delete_link;
        $upload_path = $this->upload_path;
        $this->data_table($field_names,$additional_links ,$table_name, $upload_path, $get_data_for_update_modal_link, $row_delete_link);

    }

    public function add()
    {
        $inputs_array = array(
            "desc_az" => "(editor)desc_az",
            "desc_en" => "(editor)desc_en",
            "desc_ru" => "(editor)desc_ru",
        );
        $success_link = $this->success_link;
        $error_link =  $this->error_link;
        $table_name = $this->table_name;

        $this->insert_db($inputs_array, $success_link, $error_link ,$table_name);

    }

    public function get_data_for_update()
    {
        $id = strip_tags($this->input->post("my_data"));//bu deyisilmir

        $where = array(
            "id" => $id,
        ); //bu deyisilmir ama isdesen dyise bilersen
        $table_name = $this->table_name;
        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type = $this->input_name_type;
        $select_name_and_table_name = array();

        echo $this->update_view($where,$table_name,$label_name_and_input_name, $input_name_type, $select_name_and_table_name);

    }

    public function update($id)
    {
        $where =array(
            "id" => $id,
        );
        $inputs_array = array(
            "desc_az" => "(editor)desc_az_editor",
            "desc_en" => "(editor)desc_en_editor",
            "desc_ru" => "(editor)desc_ru_editor",

        );
        $success_link = $this->success_link;
        $error_link =  $this->error_link;
        $table_name = $this->table_name;

        $this->update_db($where, $inputs_array, $success_link, $error_link ,$table_name);
    }

    public function delete($id)
    {

        $where = array(
          "id"=> $id,
        );
        $success_link = $this->success_link;
        $error_link = $this->error_link;
        $table_name = $this->table_name;
        $this->delete_db($where, $success_link, $error_link, $table_name);


    }



}