<?php
 class Model_for_core extends CI_Model{

//==============================================Core ucun lazim olan functionlar========================================

    public function core_get($table_name)
    {
        return $this->db->get($table_name)->result_array();
    }

    public function core_get_where_row($where, $table_name)
    {
        return $this->db->where($where)->get($table_name)->row_array();
    }

    public function core_get_where_result($where, $table_name)
    {
        return $this->db->where($where)->get($table_name)->result_array();
    }

    public function core_add($data, $table_name)
     {
         $this->db->insert($table_name,$data);
     }

    public function core_update($where, $table_name ,$data)
    {
        $this->db->where($where)->update($table_name ,$data);
    }

    public function core_delete($where, $table_name)
    {
        return $this->db->where($where)->delete($table_name);
    }

//==============================================Core ucun lazim olan functionlar========================================



 }