<?php

class Agentura extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('agentura_m');
    }

    public function index()
    {
        $data['agentura'] = $this->agentura_m->get_agentury();
        $data['title'] = 'Agencies';
        $data['header'] = 'Agencies';
        $data['header2'] = 'list of all agencies';

        $this->load->view('template/header');
        $this->load->view('agentura/index', $data);
        $this->load->view('template/footer');
    }

    function delete_agency_id() {
        $id = $this->uri->segment(3);
        $this->delete_model->delete_student_id($id);
        $this->index();
    }

}