<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller { 

	var $site_title;

	function __construct(){
		parent::__construct();
		$this->site_title = $this->config->item('site_name');
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['current_title'] = "Home";
		$data['site_title'] = $this->site_title; 
		$data['main_content'] = 'home_view'; 
		$this->load->view('template/engine',$data);
	}
}