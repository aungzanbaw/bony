<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller { 

	var $site_title;

	function __construct(){
		parent::__construct();
		$this->site_title = $this->config->item('site_name');
		$this->load->model('admin_model');
	}

	public function index()
	{	
		$session = $this->session->userdata('admin_login_ako');
		if(isset($session)){
			if($session == true){
				$this->home();
			}else{
				$this->login();
			}
		}else{
			$this->login();
		}
	}

	public function home()
	{	 
		$data['current_title'] = 'Admin';
		$data['main_content'] = 'admin_view';
		$data['active'] = 'ako';
		$data['site_title']= $this->site_title;
		$this->load->view('admin_template/engine',$data);	
	}

	public function login()
	{	 
		$data['current_title'] = 'Admin';
		$data['site_title']= $this->site_title;
		$this->load->view('adminlogin',$data);	
	}

	public function validate(){
		$status = $this->ako_model->validation();

		if($status == true){
			$this->home();
		}else{
			$data['error'] = "Email &amp; Password incorrect. Please try again.";
			$data['current_title'] = 'Admin';
			$data['title'] = 'Admin';
			$data['site_name']= $this->site_title;
			$this->load->view('adminlogin',$data);
		}
	}
}