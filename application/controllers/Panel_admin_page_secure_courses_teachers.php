<?php

// edileceklerin siyahisinin ardicilliqi
// evvelce ne qurassansa onun tablesini yarat
// 1) viewin icindeki admin papkasinin icindeki seyfelerden biri kopyalanir(hamsinin ici paşdi eynidi)
//      a) viewin icindeki admin papkasinin icindeki yaratdiqin seyfenin icindeki whole pagenin icinde contentin linkin deyisirsen
//      b) viewin icindeki admin papkasinin icindeki yaratdiqin seyfenin icindeki content in icinde tablenin head ve foot unu yazirsan onu yazanda tablenin fieldlerinin sirasina uygun yaz hansinin gorsenmesini isdemesen yuxarida style tagini icinde deyismek olur
// 2) route kopyalanib icindeki course sozunun yerine yeni soz yazilir (diger sozleri deyisme)
// 3) yeni controller yaradilir (yaxsi olarki coursesi kopyalasan)
// 4) controllerin icindeki constructor variableleri deyisdirilir
//      a) $table_name                      -- bu controllerin hansi tableynen isliyecek onu gosteririk
//      b) $upload_path                     -- bu controllerin sekilleri hansi yere yukleyeceyini yaziriq
//      c) $label_name_and_input_name       -- burda arrayin sol terefinde labelin icinde olacaq yazi olur sagda ise inputun name i eger sekil upload olacaqsa onun input name "file" olmalidi tabledeki name ise asagida verirlir (INPUTUN NAME I TABLEDEKI FIELDNAME ILE EYNI OLMALIDI!)
//      d) $update_link                     -- sehifedeki melumatlari hansi linke atib yeniliyecey
//      e) $add_link                        -- sehifedeki melumatlari hansi linke atib elave edecey
//      f) $delete_link                     -- sehifedeki melumatlari hansi linke atib silecey
//      g) $get_data_for_update_modal_link  -- ajaxla rowun melumatlarinin cagirmaq ucun lazim olan link
//      h) $success_link                    -- prosesler success olsa hansi linke atsin  (bu admin panelimizde ikisideele index page atir)
//      j) $error_link                      -- prosesler error olsa hansi linke atsin  (bu admin panelimizde ikisideele index page atir)
//      k) $get_data_link                   -- data table js pluginine ajaxla melumatlarinn getirilmesi ucun lazim olan link
//      l) $input_name_type                 -- burda sol terefde inputun namei labelnamedekiynen eyni olur sadece iki array arasinda core da elaqe yaratmaq ucun ikisindede name verilir (name tabledki fieldle eyni olmalidi) eger sekil upload olacaqsa onun input name "file" olmalidi tabledeki name ise asagida verirlir sag terefde ise inputun type i verilir istenilen type vermek olar elave olaraq editor isdiyirikse ty[e yerine "editor" yaziriq type i select olacaq onu bu array da yazmiriq
//
// 5) $select_name_and_table_name -- eger create ve update modalda select tag olmasini istiyirikse bu arrayi doldururq bunun sol terefinde noqteden evvel select taginin inputunun name i noqteden sora labelin icinde olacaq melumat olur sag terefde ise noqteden evvel select tagine gelecek melumatlarin tablesinin name i noqteden sora ise tablenin hansi fieldi gelecek onu yaziriq
// 6) index metodunun icindeki view() in icindeki pathi deyisirik
// 7) get_data() metodunun icindeki  $field_names in icinde tablenin columnlarini ardicil olaraq yeni sirasi deyismeden hamsini yaziriq hansi column gorsenmesini isdemesek css onu duzeltmekolur kodlari content.php icinde var
// 8) get_data() metodunun icindeki  $additional_links in icinde sol terefde linkin adini yaziriq sag terefde hansi linke atacaq onu yaziriq ama axirina id yazmiriq onu ozu eliyir her rowun idsine uygun meselen  "Qiymetler" =>  base_url("Welcome/sdf/"),)
// 9) add() metodunun icindeki  $inputs_array sol terefde tablenin fieldinin adi sag terfede ise inputun name in adi eger editordusa namein evveline moterize icinde (editor) yaziriqki strip tags vermesin ve eger inputun type i file dise yeni onnan sekil yukluyeceyiyse onun name ini yazmiriq "img_name" yaziriq default ki onu sekilolaraq yuklesin ele onun altinda $inputs_img_name de o inputun name ini veririk (belke bunu gelecekde duzeltdim)
// 10) update() metodunun icindeki  ele add metodundaki kimidi bidene ferq $inputs_array in icinde sag terefdeki inputun name yazanda eger o inputun tipi editordusa qabaqina (editor) yaziriq ve namein sonuna "_editor" yaziriq
// 11) delete() metodunun icinde $img_column_name bize skil olan columnun name ini verir onu yaziriqki unlink() eliyib sekili dbdan ve upload papkasinnan silsin
//elave olaraq core hem sekil ucun hem sekilsiz insert update delete metodlari var hemcinin delete metodu hem tek rowu hemde multi rowu silir o core da dinamik duzeldilib
//view a modallar ele controllerden cagirdigimiz core metodlariynan gedir  oikisini viewda yazmiriq
//view da style taginin icinde hansi rowun gorsenib gorsenmemesini yaziriq
//birde esas mesele yazanda inputlarin name ine fikir ver teacher yoxsa  teachers olmaqina fikri ver cunki ancaq ad sef olanda xeta verecek men basa dusene qeder cox ilisdim


defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_secure_courses_teachers extends MY_Controller{

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

//

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "course_teachers";
        $this->upload_path = "uploads/teachers/";
        $this->label_name_and_input_name = array();
        $this->input_name_type =array();
        $this->update_link                    = base_url("panel_admin_page_secure_courses_secure_controller_teachers_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->add_link                       = base_url("panel_admin_page_secure_courses_secure_controller_teachers_add/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->delete_link                    = base_url("panel_admin_page_secure_courses_secure_controller_teachers_delete/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->get_data_for_update_modal_link = base_url("panel_admin_page_secure_courses_secure_controller_get_data_for_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->success_link                   = base_url("panel_admin_page_secure_courses_secure_controller_teachers/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->error_link                     = base_url("panel_admin_page_secure_courses_secure_controller_teachers/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
        $this->get_data_link                  = base_url("panel_admin_page_secure_courses_secure_controller_teachers_get_data/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez
    }

    public function index($id)
    {

        $label_name_and_input_name = $this->label_name_and_input_name;
        $input_name_type = $this->input_name_type;
        $select_name_and_table_name = array(
            "teacher_id.Müəllimlər" => "teachers.name_az"
        );
        $action_link_update =  $this->update_link . $id;
        $action_link_create = $this->add_link . $id;

        $data["create_modal"] = $this->create_view($label_name_and_input_name,$input_name_type,$action_link_create, $action_link_update, $select_name_and_table_name);
        $data["get_data_link"] = $this->get_data_link . $id;

        $this->load->view('admin/courses/course_teachers/whole_page', $data);
    }

    public function get_data($id)
    {

        $teacher_ids = $this->Model_for_core->core_get_where_result(array("course_id" => $id), "course_teachers");
        $id_array = [];
        foreach ($teacher_ids as $item){
            $id_array[] = $item["teacher_id"];
        }


        $field_names = array(//burda tablenin butun fieldleri ardicil yazilir hansinin gorsenmesini isdemirsense css de display none verirsen fso numunesi content.php de var
            0=>'id',
            1=>'name_az',
            2=>'name_en',
            3=>'name_ru',
            4=>'desc_az',
            5=>'desc_ru',
            6=>'desc_en',
            7=>'img',
        );
        $additional_links = array();
        $table_name = "teachers";
        $get_data_for_update_modal_link = $this->get_data_for_update_modal_link;
        $row_delete_link =  $this->delete_link . $id . "/";
        $upload_path = $this->upload_path;
        $this->data_table_array("id", $id_array, $field_names,$additional_links ,$table_name, $upload_path, $get_data_for_update_modal_link, $row_delete_link);

    }

    public function add($id)
    {
        $inputs_array = array(
            "teacher_id" => "teacher_id",
            "course_id" => "not_input" . $id,
        );
        $success_link = $this->success_link . $id;
        $error_link =  $this->error_link . $id;
        $table_name = $this->table_name;

        $this->insert_db($inputs_array, $success_link, $error_link,$table_name);

    }

    public function delete($course_id, $id)
    {

        $where = array(
          "teacher_id"=> $id,
          "course_id" => $course_id,
        );
        $success_link = $this->success_link . $course_id;
        $error_link = $this->error_link . $course_id;
        $table_name = $this->table_name;
        $this->delete_db($where, $success_link, $error_link, $table_name);


    }




}