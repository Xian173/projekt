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

    public function set_agentura($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value) {
            if ($key != 'submit')
                $data[$key] = $value;
        }

        if ($id == 0) {
            return $this->db->insert('agency', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('agency', $data);
        }
    }

    function delete_agency_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('agency');
    }
}