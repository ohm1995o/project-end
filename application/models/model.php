
<?php

class Model extends CI_Model
{

public function chk_login($username,$userpass) {  
       
       $sql ="SELECT * FROM user WHERE user_name='$username' and user_pass='$userpass'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}

public function insert_registercpn($cpn_name,$cpn_address,$cpn_email,$cpn_phnumber) {  
        // $pass = base64_encode(trim($pass));
        $sql ="INSERT INTO `company` (`cpn_name`,`cpn_address`,`cpn_email`,`cpn_phnumber`) 
        VALUES ('$cpn_name','$cpn_address','$cpn_email','$cpn_phnumber')";
      $query = $this->db->query($sql);
      if($query) {
          return $this->db->insert_id(); 
          }else{ 
          return false;
          }
      
}

public function insert_registertch($tch_name,$tch_tel,$tch_code) {  
  // $pass = base64_encode(trim($pass));
  $sql ="INSERT INTO `teacher` (`tch_name`,`tch_tel`,`tch_code`) 
  VALUES ('$tch_name','$tch_tel','$tch_code')";
$query = $this->db->query($sql);
if($query) {
    return $this->db->insert_id(); 
    }else{ 
    return false;
    }

}


public function insert_user($user_name,$user_pass,$user_group,$id){ 
  // $pass = base64_encode(trim($pass));
  $sql ="INSERT INTO `user`(`user_name`,`user_pass`,`user_group`,`status`,id) 
  VALUES ('$user_name','$user_pass','$user_group','1','$id')";
$query = $this->db->query($sql);
if($query) {
    return true;  
    }else{ 
    return false;
    }

}

public function get_cpn($cpn_id) {  
  // $pass = base64_encode(trim($pass));
  $sql ="SELECT * FROM company WHERE cpn_id='$cpn_id'"; 
$query = $this->db->query($sql);
$result = $query->result_array();
if($query) {
    return $result;  
    }else{ 
    return false;
    }

}

public function get_tch($tch_id) {  
  // $pass = base64_encode(trim($pass));
  $sql ="SELECT * FROM teacher WHERE tch_id='$tch_id'"; 
$query = $this->db->query($sql);
$result = $query->result_array();
if($query) {
    return $result;  
    }else{ 
    return false;
    }

}

public function block_for_teacher() {  
        if($this->session->userdata('std_id') || $this->session->userdata('contact_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function block_for_contact() {  
        if($this->session->userdata('std_id') || $this->session->userdata('teacher_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function chk_teacher($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM teacher WHERE th_code='$user' and tel='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function chk_admin($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM admin WHERE username='$user' and password='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function chk_contact($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM contact WHERE username='$user' and password='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function CheckSession()        
{
  if($this->session->userdata('std_id')){
    if($this->session->userdata('std_id')=="") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
  }
}

   else if($this->session->userdata('teacher_id')){
    if($this->session->userdata('teacher_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }
    
   else if($this->session->userdata('admin_id')){
    if($this->session->userdata('admin_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }

   else if($this->session->userdata('contact_id')){
    if($this->session->userdata('contact_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }

   else if($this->session->userdata('fname') == ''){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
   }
    else{    return TRUE;    }
}

// public function CheckSession()        
// {
//   if($this->session->userdata('fname')=="") {
//     echo "<script>alert('Please Login')</script>";
//     redirect('login','refresh');
//  return FALSE;
 
//   }else{    return TRUE;    }
  
// }


}

?>
