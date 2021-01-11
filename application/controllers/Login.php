<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	 
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');

	}
	 
	public function index()
	{
		
        $this->load->view('header');
		$this->load->view('view_login');
		
					
	}

	public function Account()
	{
		$username =  $this->input->post('user_name');
		$userpass=  $this->input->post('user_pass');
		$data = $this->model->chk_login($username,$userpass);
		
		
		if($data==true) {
            $arrData = array('status'=> $data['status'],'user_pass'=> $data['user_pass'],'user_name'=> $data['user_name'],
             'user_group'=> $data['user_group']);	
             $this->session->set_userdata($arrData);
             $username = $this->session->userdata('username');

             if($data['status'] != 1){
				$this->session->set_flashdata('msg_error','<div class="alert alert-danger fade in">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-fw fa fa-times"></i>
				<strong>Error!</strong><br />แอคเคาท์นี้ถูกระงับ<br />Account is baned.</div>');
                redirect('login');  
             } else{
				 if($data['user_group'] == "teacher"){
					redirect('teacher');
				 }else if($data['user_group'] == "company"){
					 echo "you are company";
				 }else if($data['user_group'] == "student"){
					echo "you are student";
				}else if($data['user_group'] == "bilateral"){
					echo "you are bilateral ";
				}
                
             }
        }
     else{
		$this->session->set_flashdata('msg_error','<div class="alert alert-danger fade in">
		<button class="close" data-dismiss="alert">
			×
		</button>
		<i class="fa-fw fa fa-times"></i>
		<strong>Error!</strong><br />รหัสผ่านไม่ถูกต้อง กรุณาทำการตรวจสอบข้อมูลอีกครั้งค่ะ <br />Invalid Account : Please check your account correctly.</div>');
        redirect('Login');  
     
	 }
				
	}
	
}

?>