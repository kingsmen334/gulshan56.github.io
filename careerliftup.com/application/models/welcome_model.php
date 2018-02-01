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
      $this->db->insert("userregistration",$dataArray);
      return true;
     }else{
      return false;
     }
      
    }
  }

?>