<?php


/**
* student controller
* by Dharminder Singh
* 11/12/2017
*/
class Student extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library(array('form_validation','pagination'));
		$this->load->model(array('student_model','branch_model','course_model'));

		if(! $this->session->userdata('userid'))
		{
			redirect('admin/login/');
		}
	}

	public function index()
	{
		$config = array(
			'base_url' => base_url("admin/student/index"),
			'per_page' => 10,
			'total_rows' => $this->student_model->getStudentCount(),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'first_tag_open' => "<li>",
			'first_tag_close' => "</li>",
			'last_tag_open' => "<li>",
			'last_tag_close' => "</li>",
			'first_link' => "First",
			'last_link' => "Last",
			'prev_tag_open' => "<li>",
			'prev_tag_close' => "</li>",
			'next_tag_open' => "<li>",
			'next_tag_close' => "</li>",
			'prev_tag_open' => "<li>",
			'prev_tag_close' => "</li>",
			'num_tag_open' => "<li>",
			'num_tag_close' => "</li>",
			'cur_tag_open' => "<li class='active'><a>",
			'cur_tag_close' => "</a></li>",
			 );
		$this->pagination->initialize($config);
		$offset= $this->uri->segment(4);

		$data['branches'] = $this->branch_model->getAllBranch(); 
		$data['courses'] = $this->course_model->getAllCourse(); 
		$data['student'] = $this->student_model->getAllStudent(10,$offset);
		
		
		$data['content'] = "student/view_student";
		$this->load->view("admin/layout",$data);
			
	}

	public function addstudent()
	{
		if ($this->input->post()) {
			$pdata = array_filter($_POST['exam_passed']);
			$pyear = array_filter($_POST['passing_year']);
			$board = array_filter($_POST['board']);
			$grade = array_filter($_POST['grade']);

			$quali['exam_passed'] = implode("|",$pdata);
			$quali['passing_year'] = implode("|",$pyear);
			$quali['board'] = implode("|",$board);
			$quali['grade'] = implode("|",$grade);
			$document = 0;

			if($documents = $this->do_upload())
			{
				$quali['documents'] = $documents;
				 
				$result = $this->student_model->addNewStudent($quali);

			if ($result) {
				$this->session->set_flashdata('success', 'Student Added Successfully.');
				redirect('admin/student');
			}
		}
		}
		$data['branches'] = $this->branch_model->getAllBranch();
		$data['courses'] = $this->course_model->getAllCourse();
		$data['content'] = "student/add_student";
		$this->load->view("admin/layout",$data);
	}

	public function student_form()
	{
		$id = $this->uri->segment(4);
		$data['branches'] = $this->branch_model->getAllBranch();
		$data['student'] = $this->student_model->getStudentById($id);
		$data['content'] = "student/student_form";
		$this->load->view("admin/layout",$data);
	}

	public function validation()
	{
		$this->form_validation->set_rules('roll','Roll Number','required');
		$this->form_validation->set_rules('branch_id','Branch','required');
		$this->form_validation->set_rules('course_id','Branch','required');
		$this->form_validation->set_rules('name','Name','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('father_name','Father name','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('mother_name','Mother name','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('mobile_home','Mobile home','required|numeric|exact_length[10]');
		$this->form_validation->set_rules('mobile_self','Mobile self','required|numeric|exact_length[10]');
		$this->form_validation->set_rules('dob','Date of birth','required');
		$this->form_validation->set_rules('category','Category','required|numeric');
		$this->form_validation->set_rules('gender','Gender','required|numeric');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('pincode','Pincode','required|numeric|exact_length[6]');
		$this->form_validation->set_rules('city','City','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('exam','Exam','required');
		$this->form_validation->set_rules('pass_year','Passing Year','required');
		$this->form_validation->set_rules('board','Board/University','required');
		$this->form_validation->set_rules('grade','Grade/Percentage','required');

		
		if ($this->form_validation->run()) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function updatestudent()
	{
		if($this->input->post()){

			if(isset($_FILES))
			{
				$document = explode("|", $_POST['documents']);
				$names = $this->do_upload();
				$newdocument = explode("|", $names);
				$count = count($document);
				$path = "assets/images/student/";

					for ($i=0; $i < $count; $i++) 
					{ 
						if ($newdocument[$i] != " ") 
						{
							unlink($path.$document[$i]);
							$document[$i] = $newdocument[$i];
						}
						
					}
					$docs = implode("|",$document);
			}

			$result = $this->student_model->updateStudent($docs);
			if ($result) {
				$this->session->set_flashdata('success', 'Student Updated Successfully.');
				redirect('admin/student');
			}
		}
		$id = $this->uri->segment(4);
		$data['branches'] = $this->branch_model->getAllBranch();
		$data['courses'] = $this->course_model->getAllCourse();
		$data['student'] = $this->student_model->getStudentById($id);	
		$data['content'] = "student/edit_student";
		$this->load->view("admin/layout",$data);
	}

	public function do_upload()

        {

                $config['upload_path']          = './assets/images/student';

                $config['allowed_types']        = '*';


                $this->load->library('upload', $config);

                $dataInfo = array();
			    $files = $_FILES;
			    $cpt = count($_FILES['file']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {     
			    	if (!empty($files['file']['name'][$i])) {
			    	      	  
			        $_FILES['file']['name']= $files['file']['name'][$i];
			        $_FILES['file']['type']= $files['file']['type'][$i];
			        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			        $_FILES['file']['error']= $files['file']['error'][$i];
			        $_FILES['file']['size']= $files['file']['size'][$i];    

			        $this->upload->do_upload("file");
			        $dataInfo[$i] = $this->upload->data('file_name');
			         }
			         if (empty($files['file']['name'][$i])) {
			        	$dataInfo[$i] = " ";
			        }
			        
			    }

			      return $imageName = implode("|",$dataInfo);

        }

    public function getStudentFilter()
    {
    	if ($this->input->post()) {
				$result = $this->student_model->getStudentByCourseBranch();
				if ($result) {
					$table = "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'><thead><tr><th>S no.</th><th>Student name</th><th>Father name</th><th>City</th><th>Image</th><th>Action</th></tr></thead><tbody>";
					$serial = 1;
					foreach ($result as $row) {
					 $image = explode('|', $row['documents']);
					 $path = base_url()."assets/images/student/";
					 $table .= "<tr class='odd gradeX'>
                                        <td>$serial</td>
                                        <td>$row[name]</td>
                                        <td>$row[father_name]</td>
                                        <td class='center'>$row[city]</td>
                                        <td class='center'>
                                            
                                            <img width='100px' src='$path$image[0]'> 
                                        </td>
                                        <td class='center'>
                                            <a  href='updatestudent/$row[id] ' type='button'  class='btn btn-warning' target='_blank'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Edit</a>
                                            <a  href='student_form/$row[id]' type='button'  class='btn btn-primary' target='_blank'><i class='fa fa-eye' aria-hidden='true'></i> View</a>
                                        </td>
                                    </tr>";
                                    	$serial++;
					}
					$table .= "</tbody>";
					echo $table;
				}else{
					echo "No student data";
				}
				
			}
    }
}