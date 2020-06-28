<?php

/**
* 
*/
class Note_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllNote()
	{
		$this->db->select("*");
		$this->db->from("note");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function addNewNote($file)
	{
		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'file' => $file
					);

		
		$res = $this->db->insert('note',$data);
		return $res;
	}

	public function getNoteById($id)
	{
		$query = $this->db->get_where("note", array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function updateNote()
	{
		$id = $this->input->post('id');
		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'file' => $file
						
						);	
		$res = $this->db->update('note', $data, array('id' => $id));
		return $res;
	}

	public function deleteNote()
	{
		
	}
}