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
            $query = $this->db->get('lectors');
            return $query->result_array();
        }

        $query = $this->db->get_where('lectors', array('ID' => $id));
        return $query->row_array();
    }
}