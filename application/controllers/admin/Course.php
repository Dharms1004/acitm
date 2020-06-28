<?php


/**
* 
*/
class Course extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library('form_validation');
		$this->load->model(array('course_model'));

		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}

	public function index()
	{
		$data['course'] = $this->course_model->getAllCourse();
		$data['content'] = "course/view_course";
		$this->load->view("admin/layout",$data);
	}

	public function addcourse()
	{
		if ($this->input->post() && $this->validation()) {

			if($this->do_upload()){

				$result = $this->course_model->addNewCourse($_FILES['image']['name']);

				if ($result) {
					$this->session->set_flashdata('success', 'Course Added Successfully.');
					redirect('admin/course');
				}
			}
		}
		$data['content'] = "course/add_course";
		$this->load->view("admin/layout",$data);
	}

	public function validation()
	{
		$this->form_validation->set_rules('name','Course name','required|is_unique[course.name]');
		$this->form_validation->set_rules('description','Description','required');
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

	public function updatecourse()
	{
		if($this->input->post()){
			$result = $this->course_model->updateCourse();
			if ($result) {
				$this->session->set_flashdata('success', 'Course Updated Successfully.');
				redirect('admin/course');
			}
		}
		$id = $this->uri->segment(4);
		$data['course'] = $this->course_model->getCourseById($id);	
		$data['content'] = "course/edit_course";
		$this->load->view("admin/layout",$data);
	}

	public function do_upload()
        {
                $config['upload_path']          = './assets/images/course';
                $config['allowed_types']        = '*';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        return true;
                }
        }

    public function courseFeatured()

	{
		$id = $this->uri->segment(4);
		$status = $this->uri->segment(5);
		
			$result = $this->course_model->changeCourseFeatured($id,$status);

			if ($result) {

				$this->session->set_flashdata('success', 'Course Updated Successfully.');

				redirect('admin/course');

			}


	}

}