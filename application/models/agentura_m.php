<?php

class agentura_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_agentury($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('agency');
            return $query->result_array();
        }

        $query = $this->db->get_where('agency', array('ID' => $id));
        return $query->row_array();
    }

    function delete_agency_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('agency');
    }

    function form_insert($data){
        $this->db->insert('agency', $data);
    }
}