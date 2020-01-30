<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    public function  __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form', 'html', 'text', 'date']);
        $this->load->database();
        $this->load->model('Application_model');
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
		        
		        'all_new'          => $this->Application_model->get_new_all()->result(),
		    ];
		    $this->load->view('admin/apply', $data);
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
        
            $query = $this->Application_model->pulldown_details((int)$id);

            //Array
            $data  = [
                'apply'    => $query['apply']->row(),
            ];
            
            $this->load->view('admin/view', $data);
        }
    }

    public function pending()
    {
         //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {
        
            $data = [
                
                'all_pending'          => $this->Application_model->get_pending_all()->result(),
            ];
            $this->load->view('admin/pending', $data);
        }

    }

    public function progress()
    {
         //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {
        
            $data = [
                
                'all_progress'          => $this->Application_model->get_progress_all()->result(),
            ];
            $this->load->view('admin/progress', $data);
        }

    }

    public function service()
    {
         //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {
        
            $data = [
                
                'all_service'          => $this->Application_model->get_service_all()->result(),
            ];
            $this->load->view('admin/service', $data);
        }

    }

    //view data
    public function edit($id = null)
    {
        //check session
        $user_session = $this->session->userdata('user_id');

        if($user_session == 0)
        {    
            redirect('admin');
        } else {

            $url_param  = $this->uri->uri_string();
        
            $query = $this->Application_model->pulldown_details((int)$id);

            //Array
            $data  = [
                'apply'    => $query['apply']->row(),
            ];

            if ($this->input->post('update'))
            {

                $this->Application_model->apply_update((int)$id);
                redirect('index.php/application');
                
            }
            
            $this->load->view('admin/edit', $data);
        }
    }

    // delete data   
    public function delete($id = null)
    {
        $this->Application_model->delete((int)$id);
        redirect('index.php/application/pending');
    }


}