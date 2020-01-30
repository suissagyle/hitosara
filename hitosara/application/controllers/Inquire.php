<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inquire extends CI_Controller {

    public function  __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form', 'html', 'text', 'date']);
        $this->load->database();
        $this->load->model('Inquiry_model');
        $this->load->library(['session']);
    }    

    public function index()
    {
    	 //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {
        
		    $data = [
		        
		        'all_new'          => $this->Inquiry_model->get_inquiry_all()->result(),
		    ];
		    $this->load->view('admin/inquire', $data);
		}

    }

    //view data
    public function details($id = null)
    {
        //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {

            $url_param  = $this->uri->uri_string();
        
            $query = $this->Inquiry_model->pulldown_details((int)$id);

            //Array
            $data  = [
                'inquire'    => $query['inquire']->row(),
            ];
            
            $this->load->view('admin/details', $data);
        }
    }


}