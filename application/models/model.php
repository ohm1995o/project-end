
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
public function chk_student($user,$pass) {  
        // $pass = base64_encode(trim($pass));
        $sql ="SELECT * FROM student WHERE std_code='$user' and tel='$pass'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
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
