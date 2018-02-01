<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	 function __construct() {
        parent::__construct();
        //maitaining gmt and cache
        //$this->output->set_header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
        //$this->output->set_header('Expires: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
        //$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0");
        //$this->output->set_header("Pragma: no-cache");
        //$this->load->helper(array('form', 'url'));
        $this->load->model('home_model');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('myhome');
        $this->load->view('footer');
	}
	public function jobs(){
        $this->load->view('header');
		$this->load->view('jobs');
        $this->load->view('footer');
	}

	
		public function saveuser()
	{

		$name=trim($_POST['fname']);
		$email=trim($_POST['email']);
		$password=trim($_POST['password']);
		$dob=trim($_POST['dob']);
		$dataArray=array(
		"name"=>$name,
		"email"=>$email,
		"password"=>$password,
		"dob"=>$dob,
			);
		$status=$this->home_model->savemyuser($dataArray,$email);
		if($status==true){
		 $this->session->set_flashdata("msg","<p class='alert alert-success alert-dismissable'>You have registered successfully<span class='close' data-dissmiss='alert'></span></p>");
		 header("location:index");
		}
		else
		{
		 $this->session->set_flashdata("emailerror","<p class='ealert'>This email already exists</p>");
		 header("location:index");
		}
	}
     public function contact()
	 {
		 $this->load->view('header');
		 $this->load->view('contactus');
		 $this->load->view('footer');
	 }
	 
	  public function register()
	 {
		 $this->load->view('header');
		 $this->load->view('signup');
		 $this->load->view('footer');
	 }
	 
	  public function about()
	 {
		 $this->load->view('header');
		 $this->load->view('aboutus');
		 $this->load->view('footer');
	 }
	 
	 public function savecontact()
	 {
		 $data=array(
		        "name"=>$_POST['n'],
				"mobile"=>$_POST['m'],
				"email"=>$_POST['e'],
				"message"=>$_POST['msg']
		 
		 );
	$sts=$this->home_model->savecontact($data);
    echo $sts;	
	 }

}



