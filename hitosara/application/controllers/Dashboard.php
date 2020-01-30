<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function  __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form', 'html', 'text', 'date']);
        $this->load->database();
        $this->load->model('Dashboard_model');
        $this->load->library(['session']);
    }    

    function index(){
    	 //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {
        
		    $data = [
		        
		        'new'             => $this->Dashboard_model->countNew(),
		        'review'          => $this->Dashboard_model->countReview(),
                'progress'        => $this->Dashboard_model->countProgress(),
                'service'         => $this->Dashboard_model->countService(),
		    ];
		    $this->load->view('admin/top', $data);
		}

    }

    public function logout()
    {
       $this->session->unset_userdata('log_user');
       redirect(base_url() . 'admin');
    }


}