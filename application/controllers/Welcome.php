<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller{

    private $table_name= "";
    private $upload_path= "";
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "car";
        $this->upload_path = "uploads/img/";
    }

    public function index()
    {
        $label_name_and_input_name = array(
          "Ad"    => "name",
          "Brend" => "brand",
          "Zaman" => "date",
          "Sekil" => "file",//burda eger sekil olacaqsa name mutleq file olmalidi gelecekde belke duzeltdim
        );
        $input_name_type = array(
          "name" => "text",
          "brand" => "editor",
          "date" => "date",
          "file" => "file",
        );
        $select_name_and_table_name = array(
            "car_name.Masının tablesi" => "car.name", //solda select tag inputunun name i sagda tablenin adi ve tabledeki columnun adi aralarinda noqte qoymaq lazimdi burda inputun namei ele tabelin neymidir adi az dilinde versen yaxsi gorsener
//          bunun sol terefinde noqteden qabaq inputun adi olur o ad hemcinin tabledeki adla eyni olmalidi noqteden sora ise labelin adidir
        );
        $action_link_update = base_url("Welcome/update/");
        $action_link_create = base_url("Welcome/add/");

        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create, $action_link_update, $select_name_and_table_name);
        $data["get_data_link"] = base_url("Welcome/get_data");

        $this->load->view('admin/page1/whole_page', $data);
    }

    public function get_data()
    {
        $field_names = array(//burda tablenin butun fieldleri ardicil yazilir hansinin gorsenmesini isdemirsense css de display none verirsen fso numunesi content.php de var
            0=>'id',
            1=>'name',
            2=>'brand',
            3=>'date',
            4=>'img',
            5=>'car_name',
        );
        $additional_links = array(
          "Galereya" =>  base_url("Welcome/asd/"),//burda linkin axirindaki id ni yazmiriq js nen ozu kod eliyir onu
          "Qiymetler" =>  base_url("Welcome/sdf/"),
          "Qiymetler2" =>  base_url("Welcome/ssdf/"),
        );
        $table_name = $this->table_name;
        $get_data_for_update_modal_link = base_url("Welcome/get_data_for_update/");
        $row_delete_link = base_url("Welcome/delete/");
        $upload_path = $this->upload_path;
        $this->data_table($field_names,$additional_links ,$table_name, $upload_path, $get_data_for_update_modal_link, $row_delete_link);


//        print_r("<pre>");
//
//        $result_array = $this->db->get("employees")->result_array();
//        $result = $this->db->get("employees")->result();
//
//
//        //        menim duzeltdiyim kodlar
//        foreach ($result_array as $key => $item) {
//            $item = array_values($item);
//            array_unshift($item , '<input type="checkbox" id="'. $item[0] .'">');
//            $count = 0;
//            foreach ($item as $k=>$v){
//                if (substr($v, -4) == ".jpg" || substr($v, -4) == ".png" || substr($v, -4) == ".jpeg"){
//                    $item[$k] = '<img width="100px" height ="100px" style="object-fit:contain; height:100px!important; width:100px!important" src="' . base_url($upload_path) . $v .'" alt="Sekil">';
//                }else{
//                    if (strlen($v) > 15 && $count != 0){
//                        $v = substr($v, 0, 15) . "...";
//                    }
//                    $item[$k] = '<span class="c_update_link" >' . $v . '</span>';
//                }
//                $count++;
//            }
//
//            $data[] = $item;
//        }
//        foreach ($data as $element => $val) {
//
//            foreach ($additional_links as $name => $link){
//                $val[] = '<a data-href="'. $link .'" href="'. $link .'" class="btn btn-primary c_other_link">'. $name .'</a>';
//                $data[$element] = $val;
//            }
//
//            $val[] = '<a class="btn btn-primary mr-1 c_row_update " data-updatelink = "' . $get_data_for_update_modal_link . '" onclick="document.querySelector(\'.dialog\').classList.add(\'open\')" ><i class="fas fa-wrench" style="font-size: 15px"></i></a> <a  data-deletelinkold = "' . $row_delete_link . '" data-deletelink = "' . $row_delete_link . '" class="btn btn-danger mr-1 c_row_delete"><i style="font-size: 15px" class="fas fa-trash"></i></a>';
//            $data[$element] = $val;
//
//        }
////        menim duzeltdiyim kodlar
//
//        print_r($data);

    }

    public function add()
    {
        $inputs_array = array(
            "name" => "name",
            "brand" => "(editor)brand",//eger input editordusa ve db ya strip tag olmadan oturmasini istiyirikse onda qabaqina (editor) yaziriq
            "date" => "date",
            "img" => "img_name",
            "car_name" => "car_name",
        );
        $inputs_img_name = "file";
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $table_name = $this->table_name;
        $upload_path = $this->upload_path;

        $this->insert_db_img($inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);
    }

    public function get_data_for_update()
    {
        $id = strip_tags($this->input->post("my_data"));

        $where = array(
            "id" => $id,
        );
        $table_name = $this->table_name;
        $label_name_and_input_name = array(
            "Ad"    => "name",//inputun nameleri tabledki column nameleri ile eyni olmalidi onsuz onun ferqi yoxdu kim neyniyir inputun namesini :D
            "Brend" => "brand",
            "Zaman" => "date",
            "Sekil" => "file",//burda eger sekil olacaqsa name mutleq file olmalidi gelecekde belke duzeltdim
        );
        $input_name_type = array(
            "name" => "text",
            "brand" => "editor",//update modalda editorun namei avtomatik name + "_editor" olur onu update eliyende name olaraq burdakini yazin
            "date" => "date",
            "file" => "file",
        );
        $select_name_and_table_name = array(
            "car_name.Masının tablesi" => "car.name", //solda select tag inputunun name i sagda tablenin adi ve tabledeki columnun adi aralarinda noqte qoymaq lazimdi burda inputun namei ele tabelin neymidir adi az dilinde versen yaxsi gorsener
//          bunun sol terefinde noqteden qabaq inputun adi olur o ad hemcinin tabledeki adla eyni olmalidi noqteden sora ise labelin adidir
        );

        echo $this->update_view($where,$table_name,$label_name_and_input_name, $input_name_type, $select_name_and_table_name);

    }

    public function update($id)
    {
        $where =array(
            "id" => $id,
        );
        $inputs_array = array(
            "name" => "name",
            "brand  " => "(editor)brand_editor",//burda editor olan inputun nameinin qabaqina "_editor" yazilmalidi eks halda kod islemez
            "date" => "date",
            "img" => "img_name",
            "car_name" => "car_name",
        );
        $inputs_img_name = "file";
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $table_name = $this->table_name;
        $upload_path = $this->upload_path;

        $this->update_db_img($where, $inputs_array, $inputs_img_name, $success_link, $error_link, $upload_path ,$table_name);
    }

    public function delete($id)
    {

        $where = array(
          "id"=> $id,
        );
        $success_link = base_url("Welcome/index");
        $error_link = base_url("Welcome/index");
        $upload_path = $this->upload_path;
        $table_name = $this->table_name;
        $img_column_name = "img";
        $this->delete_db_img($where, $success_link, $error_link, $upload_path, $table_name, $img_column_name);


    }



}