<?php

/**
* 
*/
class Student_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllStudent($limit,$offset)
	{
		$this->db->select("*");
		$this->db->from("student");
		$this->db->limit($limit,$offset);
		$this->db->order_by("id","desc");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function addNewStudent($data)
	{
		$value = ($_POST['admission']) ? $_POST['admission'] : date("d/m/Y");

		$data = array(
						'roll' => $this->input->post('roll'),
						'branch_id' => $this->input->post('branch_id'),
						'course_id' => $this->input->post('course_id'),
						'name' => $this->input->post('name'),
						'father_name' => $this->input->post('father_name'),
						'gender' => $this->input->post('gender'),
						'mother_name' => $this->input->post('mother_name'),
						'address' => $this->input->post('address'),
						'pincode' => $this->input->post('pincode'),
						'city' => $this->input->post('city'),
						'mobile_home' => $this->input->post('mobile_home'),
						'mobile_self' => $this->input->post('mobile_self'),
						'dob' => $this->input->post('dob'),
						'category' => $this->input->post('category'),
						'documents' => $data['documents'],
						'exam' => $data['exam_passed'],
						'pass_year' => $data['passing_year'],
						'board' => $data['board'],
						'grade' => $data['grade'],
						'timing' =>$this->input->post('timing'),
						'admission' => $value

						
						);

		
		$res = $this->db->insert('student',$data);
		return $res;
	}

	public function getStudentById($id)
	{
		$query = $this->db->get_where("student", array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function getStudentByCourseBranch()
	{
		$param['branch_id'] = $this->input->post('branchid');
		
		if ($this->input->post('courseid')) {
			$param['course_id'] = $this->input->post('courseid');
			$param['result_status'] = 0;
		}
		

		$query = $this->db->get_where("student", $param);
		$data = $query->result_array();
		return $data;
	}

	public function getStudentByDob()
	{
		$roll = $this->input->post('roll');
		$dob = $this->input->post('dob');

		$query = $this->db->get_where("student", array('roll'=>$roll, 'dob'=>$dob, 'result_status' =>1));
		$data = $query->row_array();
		return $data;
	}

	public function updateStudent($docs)
	{
		$id = $this->input->post('id');
		// echo $docs;
		// print_r($_POST['category']);
		// exit();
		$data = array(
						'roll' => $this->input->post('roll'),
						'branch_id' => $this->input->post('branch_id'),
						'course_id' => $this->input->post('course_id'),
						'name' => $this->input->post('name'),
						'father_name' => $this->input->post('father_name'),
						'gender' => $this->input->post('gender'),
						'mother_name' => $this->input->post('mother_name'),
						'address' => $this->input->post('address'),
						'pincode' => $this->input->post('pincode'),
						'city' => $this->input->post('city'),
						'mobile_home' => $this->input->post('mobile_home'),
						'mobile_self' => $this->input->post('mobile_self'),
						'dob' => $this->input->post('dob'),
						'category' => $this->input->post('category'),
						'documents' => $docs,
						//'exam' => $data['exam_passed'],
						'pass_year' => $data['passing_year'],
						'board' => $data['board'],
						'grade' => $data['grade'],
						'timing' =>$this->input->post('timing')
						
						);

		$res = $this->db->update('student', $data, array('id' => $id));
		return $res;
	}

	public function resultStatus($id)
	{
		
		$data = array('result_status' => 1);
		$res = $this->db->update('student', $data, array('id' => $id));
		return $res;
	}

	public function cardStatus($id)
	{
		
		$data = array('admit_card_status' => 1);
		$res = $this->db->update('student', $data, array('id' => $id));
		return $res;
	}

	public function deleteStudent($id)
	{
		$student = $this->studentGetByRoll($id);
		$documents = explode("|", $student['documents']);
		$path = "assets/images/student/";
		foreach ($documents as $doc) {
			unlink($path.$doc);
		}
		$this->db->where('roll', $id);
      	$this->db->delete('student');
      	return true; 
	}

	public function studentGetByRoll($id)
	{
		$query = $this->db->get_where("student", array('roll'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function getStudentCount()
	{
		$this->db->select("*");
		$this->db->from("student");
		$query = $this->db->get();
		$data = $query->num_rows();
		return $data;
	}
}