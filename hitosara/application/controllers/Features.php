<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }



	public function index()
	{	
		$pagetitle = "Features";

		$this->load->view('header');
		$this->load->view('main-nav-apply', $pagetitle);
		$this->load->view('features');
		$this->load->view('footer');
	}
}
?>