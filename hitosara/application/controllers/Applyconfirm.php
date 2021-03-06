<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Applyconfirm extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
	    $this->load->helper('url');
        $this->load->library(['form_validation', 'email']);
        $this->load->database();
        $this->load->model('Applyconfirmmodel', 'applyconfirmmodel');
        
    }


	public function index()
	{	

   //      if($this->input->post('submitconfirm-btn')){
			// 	$return_value = $this->Applyconfirmmodel->apply_insert();
			// 	redirect('index.php/applysuccess');
			// } else {
				$record = [
		            'fullname'                 => $this->input->post('fullname'),
		            'repname'                  => $this->input->post('repname'),
		            'postalcode'               => $this->input->post('postalcode'),
		            'streetno'                 => $this->input->post('streetno'),
		            'phoneno'                  => $this->input->post('phoneno'),
		            'storename'                => $this->input->post('storename'),
		            'storetelno'               => $this->input->post('storetelno'),
		            'inchargename'             => $this->input->post('inchargename'),
		            'inchargename2'            => $this->input->post('inchargename2'),
		            'month'                    => $this->input->post('month'),
		            'email'                    => $this->input->post('email'),
		            'year'                     => $this->input->post('year'),
		            'day'                      => $this->input->post('day'),
		            'appservice'               => $this->input->post('appservice'),
		            'paymentmethod'            => $this->input->post('paymentmethod'),
		            'addstorenum'              => $this->input->post('addstorenum'),
		            'savorjapanoption'         => $this->input->post('savorjapanoption')
		        ];

				$this->load->view('header');
				$this->load->view('main-nav-applythis');
				$this->load->view('apply-confirm', $record);
				$this->load->view('footer');

			
		
			//}
	}

	public function send()
    {
        $data = [
            'fullname'                 => $this->input->post('fullname'),
            'repname'                  => $this->input->post('repname'),
            'postalcode'               => $this->input->post('postalcode'),
            'streetno'                 => $this->input->post('streetno'),
            'phoneno'                  => $this->input->post('phoneno'),
            'storename'                => $this->input->post('storename'),
            'storetelno'               => $this->input->post('storetelno'),
            'inchargename'             => $this->input->post('inchargename'),
            'inchargename2'            => $this->input->post('inchargename2'),
            'month'                    => $this->input->post('month'),
            'email'                    => $this->input->post('email'),
            'year'                     => $this->input->post('year'),
            'day'                      => $this->input->post('day'),
            'appservice'               => $this->input->post('appservice'),
            'paymentmethod'            => $this->input->post('paymentmethod'),
            'addstorenum'              => $this->input->post('addstorenum'),
            'savorjapanoption'         => $this->input->post('savorjapanoption'),
        ];
        $this->load->library('parser');
        $message = $this->parser->parse('template/apply', $data, TRUE);
        $cs_mail = $this->parser->parse('template/customer_apply', $data, TRUE);

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['wordwrap'] = TRUE;

        $customer_mail = $this->input->post('email');
        $this->email->from('no_reply@ad-kit.co.jp');
        $this->email->to('hitosara@ad-kit.co.jp, kim.a.villar@ad-kit.co.jp, miyake.akihito@ad-kit.co.jp');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc($customer_mail);
        $this->email->subject('Hitosara お申込み:' . $this->input->post('fullname') . '様より');
        $this->email->message($message);
        $email = $this->email->send();

        if ($email == TRUE)
        {
            //問合せ者への受け付け確認メール
            $this->email->from('no-reply@ad-kit.co.jp');
            $this->email->to($customer_mail);
            $this->email->subject($this->input->post('fullname') . '様' . '【お問い合わせを受け付けました】');
            $this->email->message($cs_mail);
            $this->email->send();
            $this->Applyconfirmmodel->apply_insert();
            redirect('applysuccess');
       }
   }

}
?>