<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library(['form_validation', 'email']);
        $this->load->database();
        $this->load->model('Inquiry_model');
    }



	public function index()
	{	
		$this->load->view('header');
		$this->load->view('main-nav');
		$this->load->view('inquiry');
		$this->load->view('footer');
	}

	public function confirm()
	{	
		$this->load->view('header');
		$this->load->view('main-nav');
		$this->load->view('inquiry_confirm');
		$this->load->view('footer');
	}

	public function send()
    {
        $data = [
            'store' 	=> $this->input->post('store'),
            'company' 	=> $this->input->post('company'),
            'genre' 	=> $this->input->post('genre'),
            'postal' 	=> $this->input->post('postal'),
            'streetno' 	=> $this->input->post('streetno'),
            //'building' 	=> $this->input->post('building'),
            'phone' 	=> $this->input->post('phone'),
            'email' 	=> $this->input->post('email'),
            'incharge1' => $this->input->post('incharge1'),
            'incharge2' => $this->input->post('incharge2'),
            'type'      => $this->input->post('type'),
            'gender' 	=> $this->input->post('gender'),
            'age' 		=> $this->input->post('age'),
            'seats' 	=> $this->input->post('seats'),
            'tool' 		=> $this->input->post('tool'),
            'msg' 		=> $this->input->post('msg'),
        ];
        $this->load->library('parser');
        $message = $this->parser->parse('template/inquiry', $data, TRUE);
        $cs_mail = $this->parser->parse('template/customer_inquiry', $data, TRUE);

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['wordwrap'] = TRUE;

        $customer_mail = $this->input->post('email');
        $this->email->from('no_reply@ad-kit.co.jp');
        $this->email->to('hitosara@ad-kit.co.jp, kim.a.villar@ad-kit.co.jp, miyake.akihito@ad-kit.co.jp');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc($customer_mail);
        $this->email->subject('Hitosara お申込み:' . $this->input->post('store') . '様より');
        $this->email->message($message);
        $email = $this->email->send();

        if ($email == TRUE)
        {
            //問合せ者への受け付け確認メール
            $this->email->from('no-reply@ad-kit.co.jp');
            $this->email->to($customer_mail);
            $this->email->subject($this->input->post('store') . '様' . '【お問い合わせを受け付けました】');
            $this->email->message($cs_mail);
            $this->email->send();
            $this->Inquiry_model->inquiry_insert();
            redirect('inquiry/mail_completed');
       }
   }

   public function mail_completed()
    {
        $this->load->view('header');
		$this->load->view('main-nav');
        $this->load->view('inquiry_send');
        $this->load->view('footer');
    }

}

?>
