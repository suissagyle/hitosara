<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Applysuccess extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    }

	public function index()
	{	
		$this->load->view('header');
		$this->load->view('main-nav-apply');
		$this->load->view('apply-success');
		$this->load->view('footer');
	}
}

?>

