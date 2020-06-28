<?php

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('email','session'));
		$this->load->helper('email');
		$this->load->model(array('student_model','course_model','branch_model','result_model','partener_model','payment_model'));

	}

	public function index()
	{
		$data['courses']= $this->course_model->getFeaturedCourse(3);
		$data['branches']= $this->branch_model->getFeaturedBranch(3);
		$this->load->view('frontend/index',$data);
	}
        
    public function contact()
	{
		if ($this->input->post()) {
			// print_r($this->input->post());
			// exit();
			if($this->sendMail())
			{
				$this->session->set_flashdata('success', 'Message Sent Successfully.');
				redirect(base_url()."contact");
			}else{
				$this->session->set_flashdata('failure', 'Unable to send Message.');
			}
		}

		$this->load->view('frontend/contact');
	}

	public function about()
	{
		$data['parteners'] = $this->partener_model->getAllPartener();
		$this->load->view('frontend/about',$data);
	}

	public function courses()
	{
		$data['courses']= $this->course_model->getAllCourse();
		$this->load->view('frontend/courses',$data);
	}

	public function branches()
	{
		$data['branches'] = $this->branch_model->getAllBranch();
		$this->load->view('frontend/branches',$data);
	}

	public function franchisee()
	{
		if ($this->input->post()) {

			if($this->sendMail())
			{
				$this->session->set_flashdata('success', 'Message Sent Successfully.');
				redirect(base_url()."franchisee");
			}else{
				$this->session->set_flashdata('failure', 'Unable to send Message.');
			}
		}

		$this->load->view('frontend/franchisee');
	}

	public function result()
	{
		$this->load->view('frontend/result');
	}

	public function reciept()
	{
		$data['courses'] = $this->course_model->getAllCourse();
		$this->load->view('frontend/reciept',$data);
	}

	public function getReciept()
	{
		if ($this->input->post()) {
			$result = $this->payment_model->getPaymentByNameCourse();
			if ($result) {
				$data['result'] = $result;
				$this->load->view('frontend/regConfirm',$data); 
				
			}else{
				$this->session->set_flashdata('failure', 'No student found. Contact to Admin.');
				redirect('pages/reciept/');
			}

		}
	}

	public function card()
	{
		if($this->input->post())
		{
			$student = $this->student_model->studentGetByRoll($this->input->post('roll'));
			if ($student['admit_card_status'] == 1) {

				$roll = basename($this->input->post('roll'));
				$file = base_url().'assets/pdfs/'.$roll.".pdf";
				$filename = $roll."pdf";
				header("Content-type: application/pdf");
				header("Content-Disposition: inline; filename=$filename");
				@readfile($file);
				
			}else{
				$this->session->set_flashdata('failure', 'Admit Card Not generated. Contact to your Branch.');
				redirect('pages/card/');
			}	
		}

		$this->load->view('frontend/admitcard');
	}

	public function getResult()
	{
		if($this->input->post())
		{
			$student = $this->student_model->getStudentByDob();
		
			if ($student) {
				$data['result'] = $this->result_model->getResultById($student['id']);
			}else{
				$this->session->set_flashdata('failure', 'Incorrect details.');
				redirect('pages/result/');
			}
			
			$data['student'] = $student;
			$this->load->view("frontend/resultview",$data);
		}
		
	}

	public function error()
	{
		$this->load->view('frontend/error');
	}

	public function registration()
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
			$course = $this->course_model->getCourseById($this->input->post('course_id'));
			$branch = $this->branch_model->getBranchById($this->input->post('branch_id'));
			// echo "<pre>";
			// print_r($_FILES);
			// exit();
			$payment = array(
								'amount' => 365,
								'name' => $this->input->post('name'),
								'email' => $this->input->post('email'),
								'phone' => $this->input->post('mobile_self'),
								'course' => $course['name'],
								'branch' => $branch['branch_name'],
								'address' => $this->input->post('address'),
								'roll' => $this->input->post('roll')
								);
			$this->session->set_userdata(array(
											'payment' => $payment
											));

			if($documents = $this->do_upload())
			{
				$quali['documents'] = $documents;
				 
				$result = $this->student_model->addNewStudent($quali);

				if ($result) 
				{
					redirect("payment/check");
				}
			}
		}
		$data['branches'] = $this->branch_model->getAllBranch();
		$data['courses'] = $this->course_model->getAllCourse();

		$this->load->view('frontend/registration',$data);
	}

	public function sendMail()
	{
		$config = Array(
		    'protocol' => 'SMTP',
		    'smtp_host' => 'smtp8.net4india.com',
		    'smtp_port' => 25,
		    'smtp_user' => 'dharms1004@gmail.com',
		    'smtp_pass' => 'flash1back',
		    'mailtype'  => 'html', 	
		    'charset'   => 'utf-8'

		);
		$this->email->initialize($config);  
  
		$this->email->set_newline("\r\n"); 

		$phone = $this->input->post('phone');
		$email = $this->input->post('message');

		$message = '<strong :>Phone : </strong>'.$phone.'<br><br><strong>Message : </strong>'.$email; 

		$this->email->from($this->input->post('email'),$this->input->post('name'));
		$this->email->to('infoacitm@gmail.com');
		$this->email->subject($this->input->post('subject'));
		$this->email->message($message);

		if ($this->email->send()) {
			return true;
		}else
		{
			return false;
		}



	}

	public function do_upload()

        {

                $config['upload_path']          = './assets/images/student';

                $config['allowed_types']        = '*';

                $this->load->library('upload', $config);

                $dataInfo = array();
			    $files = $_FILES;
			    // print_r($_FILES);
			    // exit();
			    $cpt = count($_FILES['file']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			        $_FILES['file']['name']= $files['file']['name'][$i];
			        $_FILES['file']['type']= $files['file']['type'][$i];
			        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			        $_FILES['file']['error']= $files['file']['error'][$i];
			        $_FILES['file']['size']= $files['file']['size'][$i];    

			        $this->upload->do_upload("file");
			        $dataInfo[] = $this->upload->data('file_name');
			    }
			  
			      return $imageName = implode("|",$dataInfo);

        }


}
	