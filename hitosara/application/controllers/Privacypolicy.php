<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Privacypolicy extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{	
		$pagetitle = "Terms of Services";

		$this->load->view('header');
		$this->load->view('main-nav-applythis', $pagetitle);
		$this->load->view('privacy-policy');
		$this->load->view('footer');
	}
}

?>