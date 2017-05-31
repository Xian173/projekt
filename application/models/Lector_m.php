<?php

class lector_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_lectors($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Lectors');
            return $query->result_array();
        }

        $query = $this->db->get_where('Lectors', array('ID' => $id));
        return $query->row_array();
    }

    function delete_lector_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('Lectors');
    }

    function form_insert($data){
        $this->db->insert('Lectors', $data);
    }

    function show_lector_id($data){
        $this->db->select('*');
        $this->db->from('Lectors');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_lector_id1($id,$data){
        $this->db->where('ID', $id);
        $this->db->update('Lectors', $data);
    }

    function show_lector(){
        $query = $this->db->get('Lectors');
        $query_result = $query->result();
        return $query_result;
    }
}