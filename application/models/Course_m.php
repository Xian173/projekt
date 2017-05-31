<?php

class course_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_courses($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Courses');
            return $query->result_array();
        }

        $query = $this->db->get_where('Courses', array('ID' => $id));
        return $query->row_array();
    }

    function delete_course_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('Courses');
    }

    function form_insert($data){
        $this->db->insert('Courses', $data);
    }

    function show_course(){
        $query = $this->db->get('Courses');
        $query_result = $query->result();
        return $query_result;
    }

    function show_course_id($data){
        $this->db->select('*');
        $this->db->from('Courses');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_course_id1($id,$data){
        $this->db->where('ID', $id);
        $this->db->update('Courses', $data);
    }
}