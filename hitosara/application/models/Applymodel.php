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

class Applymodel extends CI_Model {

    public function apply_insert()
    {
        $record = [
            'fullname'                 => $this->input->post('fullname'),
            'fullnamekana'             => $this->input->post('fullnamekana'),
            'repname'                  => $this->input->post('repname'),
            'repnamekana'              => $this->input->post('repnamekana'),
            'postalcode'               => $this->input->post('postalcode'),
            'streetno'                 => $this->input->post('streetno'),
            'bldgname'                 => $this->input->post('bldgname'),
            'phoneno'                  => $this->input->post('phoneno'),
            'fax'                      => $this->input->post('fax'),
            'storename'                => $this->input->post('storename'),
            'storetelno'               => $this->input->post('storetelno'),
            'inchargename'             => $this->input->post('inchargename'),
            'inchargename2'            => $this->input->post('inchargename2'),
            'year'                     => $this->input->post('year'),
            'day'                      => $this->input->post('day'),
            'appservice'               => $this->input->post('appservice'),
            'paymentmethod'            => $this->input->post('paymentmethod'),
            'addstorenum'              => $this->input->post('addstorenum'),
            'savorjapanoption'         => $this->input->post('savorjapanoption')
        ];
        $this->db->insert('apply_data', $record);
        return $this->db->insert_id();
    }
}
