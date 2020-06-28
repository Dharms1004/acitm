<?php

/**
* 
*/
class Payment_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllPayment()
	{
		$this->db->select("*");
		$this->db->from("payment");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function addNewPayment($file)
	{
				
		$res = $this->db->insert('payment',$file);
		return $res;
	}

	public function getPaymentById($id)
	{
		$query = $this->db->get_where("payment", array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function updatePayment()
	{
		$id = $this->input->post('id');
		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'file' => $file
						
						);	
		$res = $this->db->update('payment', $data, array('id' => $id));
		return $res;
	}

	public function deletePayment()
	{
		
	}

	public function getPaymentByNameCourse()
	{
		$name = $this->input->post('name');
		$course = $this->input->post('course');
		$query = $this->db->get_where("payment", array('name'=>$name,'course'=>$course));
		$data = $query->row_array();
		return $data;
	}
}