<?php


/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library('form_validation');
		$this->load->model(array('login_model'));
	}

	public function index()
	{
		
		if ($this->input->post() && $this->validation()) {
			if($this->login_model->login_verify())
			{
				$this->session->set_flashdata('success', 'This is a message.');
				redirect('admin/main');
			}else
			{
				$this->session->set_flashdata('error', 'Incorrect Username or Password.');
				
			}
		}
		$this->load->view('admin/index');
	}

	public function validation()
	{
		$this->form_validation->set_rules('username','Username','required|alpha');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		
		if ($this->form_validation->run()) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userpass');
		$this->session->unset_userdata('userid');
		redirect('admin/login/');
	}

	
}