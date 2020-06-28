<?php


/**
* SMS Controller
* by Dharminder Singh
* date 15/12/2017
*/
class Advertise extends CI_Controller
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
		$data['psmsbalance'] = $this->getPromoBalance();
		$data['tsmsbalance'] = $this->getTransBalance();

		//$data['course'] = $this->course_model->getAllCourse();
		$data['content'] = "advertise/index";
		$this->load->view("admin/layout",$data);
	}

	public function sendmessage()
	{
		if ($this->input->post() && $this->validation()) {

			$result = $this->sms();

			if ($result) {
				$this->session->set_flashdata('success', 'Message sent Successfully.');
				redirect('admin/advertise');
			}
		}
		$data['content'] = "advertise/advertise";
		$this->load->view("admin/layout",$data);
	}

	public function validation()
	{
		$this->form_validation->set_rules('mobile','Mobile Number','required');
		$this->form_validation->set_rules('message','Message','required');
			
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

	public function sms(){

		//Your authentication key
		$authKey = "188503AEaXXjo65veh5a3666cf";

		//Multiple mobiles numbers separated by comma
		$mobileNumber = $this->input->post('mobile');
		
		//Sender ID,While using route4 sender id should be 6 characters long.
		$senderId = "ACITMI";

		//Your message to send, Add URL encoding here.
		$message = urlencode($this->input->post('message'));

		//Define route 
		$route = $this->input->post('route');
		//Prepare you post parameters
		$postData = array(
		    'authkey' => $authKey,
		    'mobiles' => $mobileNumber,
		    'message' => $message,
		    'sender' => $senderId,
		    'route' => $route
		);

		//API URL
		$url="http://api.msg91.com/api/sendhttp.php";

		// init the resource
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_URL => $url,
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_POST => true,
		    CURLOPT_POSTFIELDS => $postData
		    //,CURLOPT_FOLLOWLOCATION => true
		));


		//Ignore SSL certificate verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


		//get response
		$output = curl_exec($ch);

		//Print error if any
		if(curl_errno($ch))
		{
		    echo 'error:' . curl_error($ch);
		}

		curl_close($ch);

		return $output;

	}

	public function getPromoBalance()
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://control.msg91.com/api/balance.php?authkey=188503AEaXXjo65veh5a3666cf&type=1",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}

	public function getTransBalance()
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://control.msg91.com/api/balance.php?authkey=188503AEaXXjo65veh5a3666cf&type=4",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}
}