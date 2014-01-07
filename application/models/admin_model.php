<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
	
	public function validation()
	{
		$this->db->where('email',$this->input->post('inputEmail'));
		$this->db->where('password',sha1($this->input->post('inputPassword'))); 
		$query = $this->db->get('admin');

		if ($query->num_rows() == 1) { // match
			
			# get each cell from row

			foreach ($query->result() as $row) {
				$id = $row->id;
				$name = $row->name;
			}

			# let's create a session

			$data = array(
				'admin_login_ako' => true,
				'id' => $id,				
				'name' => $name,				
			);

			$this->session->set_userdata($data);

			return true;
		}else{
			
			return false;
		}
	}
		
}