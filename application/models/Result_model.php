<?php

/**
* 
*/
class Result_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllResult()
	{
		$this->db->select("*");
		$this->db->from("result");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function addNewResult()
	{
		$result = implode("|", $this->input->post('module'));
		$data = array(
						'student_id' => $this->input->post('student_id'),
						'result' => $result	
						);

		
		$res = $this->db->insert('result',$data);
		return $res;
	}

	public function getResultById($id)
	{
		$query = $this->db->get_where("result", array('student_id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function updateResult()
	{
		$id = $this->input->post('id');
		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'module' => $this->input->post('module'),
						'duration' => $this->input->post('duration'),
						'fees' => $this->input->post('fee'),
						'course_image' => "qwerr",
						'created_at' => date('y-m-d')
						
						);
		$res = $this->db->update('result', $data, array('id' => $id));
		return $res;
	}

	public function deleteCourse()
	{
		
	}
}