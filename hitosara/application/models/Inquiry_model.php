<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 問い合わせフォームからのデータを処理
*
* @access public
* @author masashi.mizuno
* @copyright ad-kit All Rights Reserved
* @category Retty
* @package model
*/

class Inquiry_model extends CI_Model {

    /*
    * 問い合わせ情報の登録
    */

    public function inquiry_insert()
    {
        $data = [
            'store'         => $this->input->post('store'),
            'company'       => $this->input->post('company'),
            'genre'         => $this->input->post('genre'),
            'postal'        => $this->input->post('postal'),
            'streetno'      => $this->input->post('streetno'),
            //'building'      => $this->input->post('building'),
            'phone'         => $this->input->post('phone'),
            'email'         => $this->input->post('email'),
            'incharge'      => $this->input->post('incharge1'),
            'mobile'        => $this->input->post('incharge2'),
            // 'gender'        => $this->input->post('gender'),
            // 'age'           => $this->input->post('age'),
            'seats'         => $this->input->post('seats'),
            //'tool'          => $this->input->post('tool'),
            'type'          => $this->input->post('type'),
            'msg'           => $this->input->post('msg'),
            'date_added'    => date('Y-m-d'),
        ];
        $this->db->insert('inquiry', $data);
        return $this->db->insert_id();
    }

    //retrieve all approve data
    public function get_inquiry_all()
    {
        //記事一覧取得
        $this->db->select('*');
        $this->db->from('inquiry');
        $this->db->order_by('id', 'DESC');
        $query_result = $this->db->get();
        return $query_result;
    }

    // retrieve specific data
    public function pulldown_details($id = null)
    {

        $this->db->select('*');
        $this->db->from('inquiry');
        $this->db->where('id', $id);        
        $query['inquire'] =  $this->db->get();
        
        return $query;
    }
}
