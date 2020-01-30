<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Apply extends CI_Controller {

		public function __construct()
	    {
	        parent::__construct();
	        $this->load->helper('form');
	        $this->load->helper('url');
	        $this->load->database();
	        $this->load->model('Applymodel', 'applymodel');
	    }

		public function index()
		{	
			// if($this->input->post('submit-btn')){

			// 	$return_value = $this->Applymodel->apply_insert();
			// 	redirect('index.php/apply');

			// } else {

				$this->load->view('header');
				$this->load->view('main-nav-applythis');
				$this->load->view('apply');
				$this->load->view('footer');
			// }
		}
		
	}
?>
