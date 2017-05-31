<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agentura_M extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_agentury($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Agency');
            return $query->result_array();
        }

        $query = $this->db->get_where('Agency', array('ID' => $id));
        return $query->row_array();
    }

    function show_agency(){
        $query = $this->db->get('Agency');
        $query_result = $query->result();
        return $query_result;
    }

    function delete_agency_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('Agency');
    }

    function form_insert($data){
        $this->db->insert('Agency', $data);
    }

    function show_agency_id($data){
        $this->db->select('*');
        $this->db->from('Agency');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_agency_id1($id,$data){
        $this->db->where('ID', $id);
        $this->db->update('Agency', $data);
    }
}