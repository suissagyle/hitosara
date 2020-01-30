<?php

class Application_model extends CI_Model{
    
    /**
    * ログインチェック
    * @access public
    * @return obj
    */
    
    //retrieve all approve data
    public function get_new_all()
    {
        //記事一覧取得
        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', '新しい契約');  
        $this->db->order_by('id', 'DESC');
        $query_result = $this->db->get();
        return $query_result;
    }

    //retrieve all review data
    public function get_pending_all()
    {
        //記事一覧取得
        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', '審査中');  
        $this->db->order_by('id', 'DESC');
        $query_result = $this->db->get();
        return $query_result;
    }

    //retrieve all approve data
    public function get_progress_all()
    {
        //記事一覧取得
        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', '支払手続き中');  
        $this->db->order_by('id', 'DESC');
        $query_result = $this->db->get();
        return $query_result;
    }

    //retrieve all approve data
    public function get_service_all()
    {
        //記事一覧取得
        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('status', 'サービス開始済み');  
        $this->db->order_by('id', 'DESC');
        $query_result = $this->db->get();
        return $query_result;
    }
    
    // retrieve specific data
    public function pulldown_details($id = null)
    {

        $this->db->select('*');
        $this->db->from('apply_data');
        $this->db->where('id', $id);        
        $query['apply'] =  $this->db->get();
        
        return $query;
    }

    // update data 
    public function apply_update($id = null)
    {
        $query = [
            'status'  => $this->input->post('status', true),
            'date_updated' => date('Y-m-d'),
            'remarks'  => $this->input->post('remarks', true),
        ];
        $this->db->where('id', $id)->update('apply_data', $query);

    }

    // update data
    public function delete($id = null)
    {
        //delete
        $this->db->where('id', $id)->delete('apply_data');
    }
    
    
}