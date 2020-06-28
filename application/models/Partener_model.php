<?php

/**
* 
*/
class Partener_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllPartener()
	{
		$this->db->select("*");
		$this->db->from("partener");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function addNewPartener($file)
	{
		$data = array(
						'branch_id' => $this->input->post('branch_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'image' => $file
					);

		
		$res = $this->db->insert('partener',$data);
		return $res;
	}

	public function getPartenerById($id)
	{
		$query = $this->db->get_where("partener", array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function updatePartener()
	{
		$id = $this->input->post('id');
		$data = array(
						'branch_id' => $this->input->post('branch_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description')
						//'file' => $file
						
						);	
		$res = $this->db->update('partener', $data, array('id' => $id));
		return $res;
	}

	public function deletePartener()
	{
		
	}
}