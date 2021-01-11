<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Company extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
        $this->load->model('model');

    }
 
 public function index(){
    
    $this->load->view('add_cpn');
    
    
 }
 public function registercpn(){
    $user_name =  $this->input->post('cpn_user');
	$pass_word=  $this->input->post('cpn_pass');
	$cpn_name =  $this->input->post('cpn_name');
	$cpn_address=  $this->input->post('cpn_address');
    $cpn_email =  $this->input->post('cpn_email');
    $cpn_phnumber=  $this->input->post('cpn_phnumber');
    $id = $this->model->insert_registercpn($cpn_name,$cpn_address,$cpn_email,$cpn_phnumber);
    $data = $this->model->insert_user($user_name,$pass_word,'company',$id);
    echo $id;
     

 }

 
 
}