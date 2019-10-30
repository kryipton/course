<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome2 extends MY_Controller{

    private $table_name= "";
    private $upload_path= "";
    private $label_name_and_input_name ="";
    private $input_name_type ="";

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "employees";
        $this->upload_path = "uploads/employee/";
        $this->label_name_and_input_name = array(
            "tarix"    => "birth_date",
            "ad" => "first_name",
            "soyad" => "last_name",
            "cinsi" => "gender",//burda eger sekil olacaqsa name mutleq file olmalidi gelecekde belke duzeltdim
            "tarix2" => "hire_date",//burda eger sekil olacaqsa name mutleq file olmalidi gelecekde belke duzeltdim
        );
        $this->input_name_type = array(
            "birth_date" => "date",
            "first_name" => "text",
            "last_name" => "text",
            "gender" => "editor",
            "hire_date" => "date",
        );
    }

    public function index()
    {
        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type =  $this->input_name_type;
        $action_link_update = base_url("Welcome2/update/");
        $action_link_create = base_url("Welcome2/add/");
        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create, $action_link_update);

        $this->load->view('admin/page2/whole_page', $data);
    }

    public function get_data()
    {
        $field_names = array(
            0=>'id',
            1=>'birth_date',
            2=>'first_name',
            3=>'_last_name',
            4=>'gender',
            5=>'hire_date',
        );
        $additional_links = array(
          "Galereya" =>  base_url("asd/"),//burda linkin axirindaki id ni yazmiriq js nen ozu kod eliyir onu
        );
        $table_name = $this->table_name;
        $get_data_for_update_modal_link = base_url("Welcome2/get_data_for_update/");
        $row_delete_link = base_url("Welcome2/delete/");
        $upload_path = $this->upload_path;
        $this->data_table($field_names,$additional_links ,$table_name, $upload_path, $get_data_for_update_modal_link, $row_delete_link);

    }

    public function add()
    {
        $inputs_array = array(
            "birth_date" => "birth_date",
            "first_name" => "first_name",//eger input editordusa ve db ya strip tag olmadan oturmasini istiyirikse onda qabaqina (editor) yaziriq
            "last_name" => "last_name",
            "gender" => "(editor)gender",
            "hire_date" => "hire_date",
        );
        $success_link = base_url("Welcome2/index");
        $error_link = base_url("Welcome2/index");
        $table_name = $this->table_name;

        $this->insert_db($inputs_array, $success_link, $error_link ,$table_name);
    }

    public function get_data_for_update()
    {
        $id = strip_tags($this->input->post("my_data"));
        $where = array(
            "id" => $id,
        );
        $table_name = $this->table_name;
        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type =  $this->input_name_type;
        echo $this->update_view($where,$table_name,$label_name_and_input_name, $input_name_type);

    }

    public function update($id)
    {
        $where =array(
            "id" => $id,
        );
        $inputs_array = array(
            "birth_date" => "birth_date",
            "first_name  " => "first_name",
            "last_name" => "last_name",
            "gender" => "(editor)gender_editor",//burda editor olan inputun nameinin qabaqina "_editor" yazilmalidi eks halda kod islemez
            "hire_date" => "hire_date",
        );
        $success_link = base_url("Welcome2/index");
        $error_link = base_url("Welcome2/index");
        $table_name = $this->table_name;
        $this->update_db($where, $inputs_array, $success_link, $error_link ,$table_name);
    }

    public function delete($id)
    {
        $where = array(
          "id"=> $id,
        );
        $success_link = base_url("Welcome2/index");
        $error_link = base_url("Welcome2/index");
        $table_name = $this->table_name;
        $this->delete_db($where, $success_link, $error_link, $table_name);
    }



}