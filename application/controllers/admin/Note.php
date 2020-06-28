<?php


/**
* 
*/
class Note extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library('form_validation');
		$this->load->model(array('result_model','note_model'));
		
		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}

	public function index()
	{
		$data['note'] = $this->note_model->getAllNote();
		$data['content'] = "note/view_note";
		$this->load->view("admin/layout",$data);
	}

	public function addnote()
	{
		if ($this->input->post() && $this->validation()) {

			if($this->do_upload()){

				$result = $this->note_model->addNewNote($_FILES['file']['name']);

				if ($result) {
					$this->session->set_flashdata('success', ' Note Added Successfully.');
					redirect('admin/note');
				}
			}
		}

		$data['content'] = "note/add_note";
		$this->load->view("admin/layout",$data);
	}

	public function validation()
	{
		$this->form_validation->set_rules('name','Note name','required|alpha|is_unique[note.name]');
		$this->form_validation->set_rules('description','Description','required|alpha_numeric_spaces');
		
		if ($this->form_validation->run()) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function updatenote()
	{
		if($this->input->post()){
			$result = $this->note_model->updateNote();
			if ($result) {
				$this->session->set_flashdata('success', 'Note Updated Successfully.');
				redirect('admin/note');
			}
		}
		$id = $this->uri->segment(4);
		$data['note'] = $this->note_model->getNoteById($id);	
		$data['content'] = "note/edit_note";
		$this->load->view("admin/layout",$data);
	}

	public function do_upload()
        {
                $config['upload_path']          = './assets/images/note';
                $config['allowed_types']        = '*';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        return false;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        return true;
                }
        }
}