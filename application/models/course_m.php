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
            $query = $this->db->get('courses');
            return $query->result_array();
        }

        $query = $this->db->get_where('courses', array('ID' => $id));
        return $query->row_array();
    }

    function delete_course_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('courses');
    }

    function form_insert($data){
        $this->db->insert('courses', $data);
    }
}