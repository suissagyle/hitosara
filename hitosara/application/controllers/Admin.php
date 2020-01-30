<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    function  __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form', 'html', 'text', 'date']);
        $this->load->database();
        $this->load->model('Login_model');
        $this->load->library(['session', 'form_validation']);
    }    
    function index(){
        
        $this->load->view('admin/login');

    }

    public function login_validation()
    {

        //validation
        $this->login_valid();
        
        if($this->form_validation->run())
        {
            
            //true
            redirect(base_url() . "dashboard");
        
        }
        else
        {
            //false
            redirect(base_url() . "admin");
        }

    }

     /**
    * 記事登録/更新のバリデーションセット
    * @access private
    * @return void
    */

    private function login_valid()
    {
        //ルールセット
        $this->form_validation->set_rules("username", "Username", "required|trim|callback_validate_credentials");
        $this->form_validation->set_rules("password", "Password", "required|trim");
        //エラーメッセージ設定
        $this->form_validation->set_message('required', 'Please fill the required fields.');
        return;
    }

    /**
    * ユーザーマスタ存在チェック
    * @access public
    * @return bool
    */

    public function validate_credentials()
    {

            //check admin
        $user_credentials = $this->Login_model->chk_admin_login();
        
        if($user_credentials->num_rows() == 1)
        {
            $this->session->set_userdata(
                [
                    'user_id'      => $user_credentials->row()->user_id,
                    'user_name'    => $user_credentials->row()->user_name,
                ]
            );
            return true;
        }
        else
        {
            $this->form_validation->set_message("validate_credentials", "Username or Password is invalid.");
            return false;
        }


    }

    // // Works 
    // function works() {

    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Worksmodel->workinsert($insert_filename);
    //                 redirect('admin/works');
    //             }
    //         }
    //         //  else {
    //         //     $return_value = $this->Client_model->client_insert();
    //         //     redirect('client');
    //         // }
            
    //     } else {

    //         //retrieve
    //         $data  = [
    //             'works'         =>      $this->Worksmodel->getPosts(),
    //             'cat'           =>      $this->Worksmodel->pulldown_category(),
    //         ];

    //         $this->load->view('admin/header');
    //         $this->data['works'] = $this->Worksmodel->getPosts();
    //         $this->load->view('admin/works', $data);
    //     }

    // }

    // // Works 
    // function works_edit($id = null) {

    //     $url_param  = $this->uri->uri_string();
        
    //     $query = $this->Worksmodel->pulldown_works((int)$id);

    //     //Array
    //     $data  = [
    //         'work'    => $query['works']->row(),
    //         'cat'     => $this->Worksmodel->create_pulldown('work_category'),
    //     ];


    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Worksmodel->workupdate_img((int)$id, $insert_filename);
    //                 redirect('admin/works');
    //             }
    //         }
    //          else {
    //             $return_value = $this->Worksmodel->workupdate((int)$id);
    //             redirect('admin/works');
    //         }
            
    //     } 

    //     $this->load->view('admin/header');
    //     $this->load->view('admin/works_edit', $data);

    // }

    // // Works 
    // function works_gallery($id = null) {

    //     $url_param  = $this->uri->uri_string();
        
    //     $query = $this->Worksmodel->pulldown_works((int)$id);

    //     //Array
    //     $data  = [
    //         'work'    => $query['works']->row(),
    //         'gal'     => $this->Worksmodel->getGallery((int)$id),
    //     ];

    //     if($this->input->post('submitconfirm-btn')){

    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/gallery/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Worksmodel->galleryinsert((int)$id, $insert_filename);
    //                 redirect('admin/works');
    //             }
    //         }
    //         //  else {
    //         //     $return_value = $this->Client_model->client_insert();
    //         //     redirect('client');
    //         // }
            
    //     } 
    //     $this->load->view('admin/header');
    //     $this->load->view('admin/works_gallery', $data);
    

    // }
    // // delete work Img   
    // public function deleteImg($id = null)
    // {
    //     $this->Worksmodel->deleteImg((int)$id);
    //     redirect('admin/works');
    // }

    //     // Works Category 
    //     function works_category() {
    //         if($this->input->post('submitconfirm-btn')){

    //             $return_value = $this->Worksmodel->insert_category();
    //             redirect('admin/works_category');
                
    //         } else {

    //             $this->load->view('admin/header');
    //             $this->data['cat'] = $this->Worksmodel->getCategory();
    //             $this->load->view('admin/works_category', $this->data);
    //         }

    //     }

    //     // delete work data   
    //     public function deleteWorks($id = null)
    //     {
    //         $this->Worksmodel->deleteWorks((int)$id);
    //         redirect('admin/works');
    //     }

    //     // delete work category data   
    //     public function deleteCategory($id = null)
    //     {
    //         $this->Worksmodel->deleteCategory((int)$id);
    //         redirect('admin/works_category');
    //     }

    // // Voice Function
    // function voice() {

    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Voicemodel->insert($insert_filename);
    //                 redirect('admin/voice');
    //             }
    //         }
    //         //  else {
    //         //     $return_value = $this->Client_model->client_insert();
    //         //     redirect('client');
    //         // }
            
    //     } else {

    //         //retrieve
    //         $data  = [
    //             'voice'         =>      $this->Voicemodel->getPosts(),
    //             'cat'           =>      $this->Voicemodel->pulldown_category(),
    //         ];

    //         $this->load->view('admin/header');
    //         //$this->data['voice'] = $this->Voicemodel->getPosts();
    //         $this->load->view('admin/voice', $data);
    //     }

        
    // }

    // // Works 
    // function voice_edit($id = null) {

    //     $url_param  = $this->uri->uri_string();
        
    //     $query = $this->Voicemodel->pulldown_voice((int)$id);

    //     //Array
    //     $data  = [
    //         'voice'    => $query['voice']->row(),
    //         'cat'     => $this->Voicemodel->create_pulldown('voice-category'),
    //     ];


    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Voicemodel->voiceupdate_img((int)$id, $insert_filename);
    //                 redirect('admin/voice');
    //             }
    //         }
    //          else {
    //             $return_value = $this->Voicemodel->voiceupdate((int)$id);
    //             redirect('admin/voice');
    //         }
            
    //     } 

    //     $this->load->view('admin/header');
    //     $this->load->view('admin/voice_edit', $data);

    // }

    //     // Voice Category 
    //     function voice_category() {
    //         if($this->input->post('submitconfirm-btn')){

    //             $return_value = $this->Voicemodel->insert_category();
    //             redirect('admin/voice_category');
                
    //         } else {

    //             $this->load->view('admin/header');
    //             $this->data['cat'] = $this->Voicemodel->getCategory();
    //             $this->load->view('admin/voice_category', $this->data);
    //         }

    //     }

    //     // delete work data   
    //     public function deleteVoice($id = null)
    //     {
    //         $this->Voicemodel->deleteVoice((int)$id);
    //         redirect('admin/voice');
    //     }

    //     // delete work category data   
    //     public function deleteVoiceCat($id = null)
    //     {
    //         $this->Voicemodel->deleteCategory((int)$id);
    //         redirect('admin/voice_category');
    //     }

    // // News Function
    // public function news() {

    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Newsmodel->newsinsert($insert_filename);
    //                 redirect('admin/news');
    //             }
    //         }
    //         //  else {
    //         //     $return_value = $this->Client_model->client_insert();
    //         //     redirect('client');
    //         // }
            
    //     } else {

    //         //retrieve
    //         $data  = [
    //             'news'         =>      $this->Newsmodel->getPosts(),
    //             'cat'           =>      $this->Newsmodel->pulldown_category(),
    //         ];

    //         $this->load->view('admin/header');
    //         //$this->data['voice'] = $this->Voicemodel->getPosts();
    //         $this->load->view('admin/news', $data);
    //     }
       
    // }

    // // Works 
    // function news_edit($id = null) {

    //     $url_param  = $this->uri->uri_string();
        
    //     $query = $this->Newsmodel->pulldown_news((int)$id);

    //     //Array
    //     $data  = [
    //         'news'    => $query['news']->row(),
    //         'cat'     => $this->Worksmodel->create_pulldown('news_category'),
    //     ];


    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Newsmodel->newsupdate_img((int)$id, $insert_filename);
    //                 redirect('admin/news');
    //             }
    //         }
    //          else {
    //             $return_value = $this->Newsmodel->newsupdate((int)$id);
    //             redirect('admin/news');
    //         }
            
    //     } 

    //     $this->load->view('admin/header');
    //     $this->load->view('admin/news_edit', $data);

    // }

    //     // News Category 
    //     public function news_category() {
    //         if($this->input->post('submitconfirm-btn')){

    //             $return_value = $this->Newsmodel->insert_category();
    //             redirect('admin/news_category');
                
    //         } else {

    //             $this->load->view('admin/header');
    //             $this->data['cat'] = $this->Newsmodel->getCategory();
    //             $this->load->view('admin/news_category', $this->data);
    //         }

    //     }

    //     // delete news data   
    //     public function deleteNews($id = null)
    //     {
    //         $this->Newsmodel->deleteNews((int)$id);
    //         redirect('admin/news');
    //     }

    //     // delete news category data   
    //     public function deleteNewsCat($id = null)
    //     {
    //         $this->Newsmodel->deleteCategory((int)$id);
    //         redirect('admin/news_category');
    //     }

    // public function blogs() {

    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Blogsmodel->bloginsert($insert_filename);
    //                 redirect('admin/blogs');
    //             }
    //         }
    //         //  else {
    //         //     $return_value = $this->Client_model->client_insert();
    //         //     redirect('client');
    //         // }
            
    //     } else {

    //         //retrieve
    //         $data  = [
    //             'blog'         =>      $this->Blogsmodel->getPosts(),
    //             'cat'           =>      $this->Blogsmodel->pulldown_category(),
    //         ];

    //         $this->load->view('admin/header');
    //         //$this->data['voice'] = $this->Voicemodel->getPosts();
    //         $this->load->view('admin/blogs', $data);
    //     }
    //     // $this->load->view('admin/header');
    //     // $this->data['blogs'] = $this->Blogsmodel->getPosts();
    //     // $this->load->view('admin/blogs', $this->data);
    // }

    // // Works 
    // function blogs_edit($id = null) {

    //     $url_param  = $this->uri->uri_string();
        
    //     $query = $this->Blogsmodel->pulldown_blog((int)$id);

    //     //Array
    //     $data  = [
    //         'blog'    => $query['blog']->row(),
    //         'cat'     => $this->Blogsmodel->create_pulldown('blog_category'),
    //     ];


    //     if($this->input->post('submitconfirm-btn')){

    //         //$return_value = $this->Worksmodel->insert();
    //         //redirect('admin/works');
    //         if (!empty($_FILES['image_file']['name']))
    //         {
    //             //画像に関するconfig;
    //             $config['upload_path']   = './uploads/thumb/';
    //             $config['allowed_types'] = 'gif|jpg|png';
    //             $config['max_size']      = '0';
    //             $config['max_width']     = '0';
    //             $config['max_height']    = '0';
    //             $config['encrypt_name']  = TRUE;
    //             $config['remove_spaces'] = TRUE;
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image_file'))
    //             {
    //                 $insert_filename = $this->upload->data('file_name');  
    //                 $return_value = $this->Blogsmodel->blogupdate_img((int)$id, $insert_filename);
    //                 redirect('admin/blogs');
    //             }
    //         }
    //          else {
    //             $return_value = $this->Blogsmodel->blogupdate((int)$id);
    //             redirect('admin/blogs');
    //         }
            
    //     } 

    //     $this->load->view('admin/header');
    //     $this->load->view('admin/blogs_edit', $data);

    // }

    //     // News Category 
    //     public function blog_category() {
    //         if($this->input->post('submitconfirm-btn')){

    //             $return_value = $this->Blogsmodel->insert_category();
    //             redirect('admin/blog_category');
                
    //         } else {

    //             $this->load->view('admin/header');
    //             $this->data['cat'] = $this->Blogsmodel->getCategory();
    //             $this->load->view('admin/blog_category', $this->data);
    //         }

    //     }

    //     // delete news data   
    //     public function deleteBlog($id = null)
    //     {
    //         $this->Blogsmodel->deleteBlog((int)$id);
    //         redirect('admin/blogs');
    //     }

    //     // delete news category data   
    //     public function deleteBlogCat($id = null)
    //     {
    //         $this->Blogsmodel->deleteCategory((int)$id);
    //         redirect('admin/blog_category');
    //     }

    // // Contact Functions
    // function contact() {
    //     $this->load->view('admin/header');
    //     $this->data['contact'] = $this->Contactmodel->getPosts();
    //     $this->load->view('admin/contact', $this->data);
    // }
    //     // delete news data   
    //     public function deleteContact($id = null)
    //     {
    //         $this->Contactmodel->deleteContact((int)$id);
    //         redirect('admin/contact');
    //     }


}