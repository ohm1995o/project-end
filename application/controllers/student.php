<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Student extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
        $this->load->model('model');

    }
 
 public function index(){
    
    $this->load->view('add_student');
    
    
 }
 public function registerstd(){
    $std_user =  $this->input->post('std_user');
	$std_pass=  $this->input->post('std_pass');
	$std_name =  $this->input->post('std_name');
	$std_address=  $this->input->post('std_address');
    $std_birthday =  $this->input->post('std_birthday');
    $std_age =  $this->input->post('std_age');
    $std_sex =  $this->input->post('std_sex');
    $id = $this->model->insert_registerstd($std_name,$std_address,$std_birthday,$std_age,$std_sex);
    $data = $this->model->insert_user($std_user,$std_pass,'student',$id);
    echo $id;
 } 
}