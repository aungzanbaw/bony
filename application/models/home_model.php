<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model{
	var $filepath;

	function __construct(){
		parent::__construct();
		$this->filepath = realpath( APPPATH . '../photos');
	}	

	
}