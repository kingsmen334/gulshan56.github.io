<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model 
{    /* CONSTRUCTOR FUNCTION */
    var $db;
    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    } 
    
    public function savemyuser($dataArray,$email){
      $res=$this->db->query("select * from registration where email='$email'");
      if($res->num_rows()==0){
      $this->db->insert("registration",$dataArray);
      return true;
     }else{
      return false;
     }
      
    }
	public function savecontact($data)
	{
		$this->db->insert("contactus",$data);
		return "<p class='alert alert-success'>Your message sent successfully ! we will get message soon.... </p>";
	}
  }

?>