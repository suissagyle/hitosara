<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }



	public function index()
	{	

		$pagetitle = "Top";
		$this->load->view('header');
		$this->load->view('main-nav-apply', $pagetitle);
		$this->load->view('home');
		$this->load->view('footer');
	}
}

?>
