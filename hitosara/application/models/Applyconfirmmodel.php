<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 申し込みフォームからのデータを処理
*
* @access public
* @author suissa.zafra
* @copyright ad-kit All Rights Reserved
* @category Hitosara
* @package model
*/

class Applyconfirmmodel extends CI_Model {

    public function apply_insert()
    {
        $record = [
            'fullname'                 => $this->input->post('fullname'),
            'repname'                  => $this->input->post('repname'),
            'postalcode'               => $this->input->post('postalcode'),
            'streetno'                 => $this->input->post('streetno'),
            'phoneno'                  => $this->input->post('phoneno'),
            'storename'                => $this->input->post('storename'),
            'storetelno'               => $this->input->post('storetelno'),
            'inchargename'             => $this->input->post('inchargename'),
            'inchargename2'            => $this->input->post('inchargename2'),
            'year'                     => $this->input->post('year'),
            'month'                    => $this->input->post('month'),
            'email'                    => $this->input->post('email'),
            'appservice'               => $this->input->post('appservice'),
            'paymentmethod'            => $this->input->post('paymentmethod'),
            'addstorenum'              => $this->input->post('addstorenum'),
            'savorjapanoption'         => $this->input->post('savorjapanoption'),
            'status'                   => '新しい契約',
            'date_added'               => date('Y-m-d'),
        ];
        $this->db->insert('apply_data', $record);
        return $this->db->insert_id();
    }
}
