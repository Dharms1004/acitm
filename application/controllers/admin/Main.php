<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}
	
	public function index()
	{
		$data['student'] = $this->Student_model->getStudentCount();
		$data['branch'] = $this->Branch_model->getBranchCount();
		$data['course'] = $this->Course_model->getCourseCount();
		$data['content'] = "main/index";
		$this->load->view('admin/layout',$data);
	}

	public function viewprofile()
	{
		$data['content'] = "main/view_profile";
		$this->load->view('admin/layout',$data);
	}

	public function updateprofile()
	{
		
	}
}
