<?php

/**
* 
*/
class Course_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllCourse()
	{
		$this->db->select("*");
		$this->db->from("course");
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}

	public function getFeaturedCourse($limit)
    {
        $data=array();
        $query=$this->db->select('*')
            ->where(array('featured'=>'1',
                            'status'=>'1'))
            ->limit($limit)
            ->get('course');
       	$data = $query->result_array(); 
        return $data;
    }

	public function addNewCourse($image)
	{
		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'module' => $this->input->post('module'),
						'duration' => $this->input->post('duration'),
						'fees' => $this->input->post('fee'),
						'course_image' => $image,
						'featured' => 0
						
						);

		
		$res = $this->db->insert('course',$data);
		return $res;
	}

	public function getCourseById($id)
	{
		$query = $this->db->get_where("course", array('id'=>$id));
		$data = $query->row_array();
		return $data;
	}

	public function changeCourseFeatured($id, $status)
	{
		$this->db->set('featured',$status);
		$this->db->where('id',$id);
		$res = $this->db->update('course');

		return $res;
	}


	public function updateCourse()
	{
		$id = $this->input->post('id');
		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'module' => $this->input->post('module'),
						'duration' => $this->input->post('duration'),
						'fees' => $this->input->post('fee')
						
						);
		$res = $this->db->update('course', $data, array('id' => $id));
		return $res;
	}

	public function deleteCourse()
	{
		
	}

	public function getCourseCount()
	{
		$this->db->select("*");
		$this->db->from("course");
		$query = $this->db->get();
		$data = $query->num_rows();
		return $data;
	}
}