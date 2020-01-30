<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbound extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }



	public function index()
	{	
		$this->load->view('header');
		$this->load->view('main-nav-apply');
		$this->load->view('inbound');
		$this->load->view('footer');
	}
}
?>