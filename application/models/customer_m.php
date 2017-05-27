<?php

class customer_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_customer($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('customer');
            return $query->result_array();
        }

        $query = $this->db->get_where('customer', array('ID' => $id));
        return $query->row_array();
    }

    function delete_customer_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('customer');
    }
}