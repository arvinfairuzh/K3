<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  
  
  public function login($email)
  {
    $email_special = htmlspecialchars($this->db->escape($email));
    $this->db->select('*');
    $this->db->from('pegawai');
    $this->db->where("nip = $email_special"); 
    $query = $this->db->get();
    return $query->num_rows();
  }
  
  
  public function data($email)
  {
   $email_special = htmlspecialchars($this->db->escape($email));    
   $this->db->select('*');
   $this->db->where("nip = $email_special"); 
   
   $query = $this->db->get('pegawai');
   
   return $query->row();
  }

  
}  

?>
