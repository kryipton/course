<?php
class   GraudateModel extends  CI_Model
{

    public function get_data($where)
    {
        return $this->db->order_by("id", "DESC")->where($where)->get("alumni")->result_array();
    }

    public function get_data_single($where)
    {
        return $this->db->where($where)->get("alumni")->row_array();
    }











    public function get_teachers_for_home()
    {
        return $this->db->order_by("id", "DESC")->get("teachers")->result_array();
    }
}
