<?php

class Dashboard_model extends CI_Model{
    
    /**
    * ログインチェック
    * @access public
    * @return obj
    */
    
    //count New
    function countNew()
    {

        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', '新しい契約'); 
        $query = $this->db->get();
        $rowCount = $query->num_rows();
        return $rowCount;     
    }

    //count Review
    function countReview()
    {

        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', '審査中'); 
        $query = $this->db->get();
        $rowCount = $query->num_rows();
        return $rowCount;     
    }

    function countProgress()
    {

        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', '支払手続き中'); 
        $query = $this->db->get();
        $rowCount = $query->num_rows();
        return $rowCount;     
    }

    function countService()
    {

        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', 'サービス開始済み'); 
        $query = $this->db->get();
        $rowCount = $query->num_rows();
        return $rowCount;     
    }
    
    
}