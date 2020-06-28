<?php

/**
* 
*/
class Branch_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllBranch()
	{
		$this->db->select("*");
		$this->db->from("branch");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function getFeaturedBranch($limit)
    {
        
        $query=$this->db->select('*')
            ->where(array('featured'=>'1',
                            'status'=>'1'))
            ->limit($limit)
            ->get('branch');
        $data = $query->result_array();
        return $data;
    }

	public function addNewBranch($image)
	{

		$data = array(
						'branch_name' => $this->input->post('branch_name'),
						'owner_name' => $this->input->post('owner_name'),
						'opening_date' => $this->input->post('odate'),
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'address' => $this->input->post('address'),
						'city' => $this->input->post('city'),
						'state' => $this->input->post('state'),
						'image' => $image
						
						);
		$res = $this->db->insert('branch',$data);
		return $res;
	}

	public function getBranchById($id)
	{
		$query = $this->db->get_where("branch", array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function updateBranch()
	{
		$id = $this->input->post('id');
		$data = array(
						'branch_name' => $this->input->post('branch_name'),
						'owner_name' => $this->input->post('owner_name'),
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'address' => $this->input->post('address'),
						'city' => $this->input->post('city'),
						'state' => $this->input->post('state')
						
						);
		$res = $this->db->update('branch', $data, array('id' => $id));
		return $res;
	}

	public function changeBranchFeatured($id, $status)
	{
		$this->db->set('featured',$status);
		$this->db->where('id',$id);
		$res = $this->db->update('branch');

		return $res;
	}

	public function deleteCourse()
	{
		
	}

	public function getBranchCount()
	{
		$this->db->select("*");
		$this->db->from("branch");
		$query = $this->db->get();
		$data = $query->num_rows();
		return $data;
	}
}