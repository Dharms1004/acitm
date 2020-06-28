<?php


/**
* 
*/
class login_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();

	}

	public 	function login_verify()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result_array() as $row) {
				$user_id 	= $row['id'];
				$user_name 	= $row['username'];
				$user_pass = $row['password'];
			}

			$this->session->set_userdata('username', $user_name);
			$this->session->set_userdata('userpass',  $user_pass);			
			$this->session->set_userdata('userid', $user_id);

			return true;
		}else
		{
			return false;
		}

	}
}