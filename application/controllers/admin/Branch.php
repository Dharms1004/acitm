<?php


/**
* 
*/
class Branch extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library('form_validation');
		$this->load->model(array('branch_model'));

		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}

	public function index()
	{
		$data['branch'] = $this->branch_model->getAllBranch();
		$data['content'] = "branch/view_branch";
		$this->load->view("admin/layout",$data);
	}

	public function addbranch()
	{
		if ($this->input->post() && $this->validation()) {

			if($this->do_upload())
			{
				$result = $this->branch_model->addNewBranch($_FILES['image']['name']);

				if ($result) {
					$this->session->set_flashdata('success', 'Branch Added Successfully.');
					redirect('admin/branch');
				}
			}
		}
		$data['content'] = "branch/add_branch";
		$this->load->view("admin/layout",$data);
	}

	public function validation()
	{
		$this->form_validation->set_rules('branch_name','Branch name','required|alpha_numeric_spaces|is_unique[branch.branch_name]');
		$this->form_validation->set_rules('owner_name','Owner Name','required');
		$this->form_validation->set_rules('phone','Mobile','required|numeric|exact_length[10]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('state','State','required');
		
		
		if ($this->form_validation->run()) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function updatebranch()
	{
		if($this->input->post()){
			$result = $this->branch_model->updateBranch();
			if ($result) {
				$this->session->set_flashdata('success', 'Branch Updated Successfully.');
				redirect('admin/branch');
			}
		}
		$id = $this->uri->segment(4);
		$data['branch'] = $this->branch_model->getBranchById($id);	
		$data['content'] = "branch/edit_branch";
		$this->load->view("admin/layout",$data);
	}

	public function do_upload()
        {
                $config['upload_path']          = './assets/images/branch';
                $config['allowed_types']        = 'jpg';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
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

    public function branchFeatured()

	{
		$id = $this->uri->segment(4);
		$status = $this->uri->segment(5);
		
			$result = $this->branch_model->changeBranchFeatured($id,$status);

			if ($result) {

				$this->session->set_flashdata('success', 'Branch Updated Successfully.');

				redirect('admin/branch');

			}


	}
}