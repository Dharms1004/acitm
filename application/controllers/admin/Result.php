<?php


/**
* 
*/
class Result extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library('form_validation');
		$this->load->model(array('result_model','course_model','branch_model','student_model'));
		
		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}

	public function index()
	{
		$data['result'] = $this->result_model->getAllResult();
		$data['content'] = "result/view_result";
		$this->load->view("admin/layout",$data);
	}

	public function addresult()
	{
		$data['branches'] = $this->branch_model->getAllBranch();
		$data['courses'] = $this->course_model->getAllCourse();

		$data['content'] = "result/add_result";
		$this->load->view("admin/layout",$data);
	}

	public function saveResult()
	{
		if ($this->input->post()) {
			$this->changeResultStatus($this->input->post('student_id'));
			$result = $this->result_model->addNewResult();

			if ($result) {
				$this->session->set_flashdata('success', 'Result Added Successfully.');
				echo "<script> alert('Result Added Successfully'); window.close();</script>";
				//redirect('admin/result/addresult');
			}
		}
	}

	public function changeResultStatus($id)
	{
		$this->student_model->resultStatus($id);
	}

	public function validation()
	{
		$this->form_validation->set_rules('name','Course name','required|alpha|is_unique[course.name]');
		$this->form_validation->set_rules('description','Description','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('module','Course content','required');
		$this->form_validation->set_rules('duration','Duration','required|numeric');
		$this->form_validation->set_rules('fee','Fees','required|numeric');
		
		
		if ($this->form_validation->run()) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function updateresult()
	{
		if($this->input->post()){
			$result = $this->result_model->updateResult();
			if ($result) {
				$this->session->set_flashdata('success', 'Result Updated Successfully.');
				redirect('admin/result');
			}
		}
		$id = $this->uri->segment(4);
		$data['result'] = $this->result_model->getResultById($id);	
		$data['content'] = "result/edit_result";
		$this->load->view("admin/layout",$data);
	}

	public function uploadresult()
	{
		$data['content'] = "result/upload_result";
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

	public function getStudent()
	{
		
			if ($this->input->post()) {
				$result = $this->student_model->getStudentByCourseBranch();
				if ($result) {
					$table = "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'><thead><tr><th>S no.</th><th>Name</th><th>Father's Name</th><th>Mother's Name</th><th>Action</th></tr></thead><tbody>";
					$serial = 1;
					foreach ($result as $row) {
						$table .= "<tr class='odd gradeX anime'><td>$serial</td><td>$row[name]</td><td>$row[father_name]</td><td>$row[mother_name]</td><td data-id='$row[id]'><a type='button' href='getStudentById/$row[id]'  class='btn btn-warning' target='_blank' ><i class='fa fa-upload'  aria-hidden='true'></i> Add Result</a></td></tr>";
						$serial++;
					}
					$table .= "</tbody>";
					echo $table;
				}else{
					echo "No data";
				}
			}else{
				echo "nodata";
			}


	}

	

	
	
}