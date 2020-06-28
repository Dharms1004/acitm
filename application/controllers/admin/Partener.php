<?php


/**
* 
*/
class Partener extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library('form_validation');
		$this->load->model(array('result_model','course_model','branch_model','student_model','partener_model'));
		
		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}

	public function index()
	{
		$data['parteners'] = $this->partener_model->getAllPartener();
		$data['content'] = "partener/view_partener";
		$this->load->view("admin/layout",$data);
	}

	public function addpartener()
	{
		if ($this->input->post() && $this->validation()) {

			if($this->do_upload()){

				$result = $this->partener_model->addNewPartener($_FILES['file']['name']);

				if ($result) {
					$this->session->set_flashdata('success', ' Partener Added Successfully.');
					redirect('admin/partener');
				}
			}
		}

		$data['branches'] = $this->branch_model->getAllBranch();
		
		$data['content'] = "partener/add_partener";
		$this->load->view("admin/layout",$data);
	}

	public function validation()
	{
		$this->form_validation->set_rules('name','Course name','required');
		$this->form_validation->set_rules('description','Description','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('branch_id','Branch','required|numeric');
		
		
		
		if ($this->form_validation->run()) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function updatepartener()
	{
		if($this->input->post()){
			$result = $this->partener_model->updatePartener();
			if ($result) {
				$this->session->set_flashdata('success', 'Partener Updated Successfully.');
				redirect('admin/partener');
			}
		}
		$id = $this->uri->segment(4);
		$data['partener'] = $this->partener_model->getPartenerById($id);
		$data['branches'] = $this->branch_model->getAllBranch();	
		$data['content'] = "partener/edit_partener";
		$this->load->view("admin/layout",$data);
	}

	public function getStudentById()
	{
		$id = $this->uri->segment(4);
		$student = $this->student_model->getStudentById($id);
		$data['course'] = $this->course_model->getCourseById($student['course_id']);
		
		$data['student'] = $student;
		$data['content'] = "result/resultdetails";
		$this->load->view("admin/layout",$data);
	}

	public function do_upload()
        {
                $config['upload_path']          = './assets/images/partener';
                $config['allowed_types']        = 'jpg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        
                        return false;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        return true;
                }
        }	
	
}