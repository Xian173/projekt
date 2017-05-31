<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agentura extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('agentura_m');
    }

    function show_agency_id() {
        $id = $this->uri->segment(3);
        $data['agency'] = $this->agentura_m->show_agency();
        $data['single_agency'] = $this->agentura_m->show_agency_id($id);
        $data['agentura'] = $this->agentura_m->get_agentury();
        $data['title'] = 'Agencies';
        $data['header'] = 'Agencies';
        $data['header2'] = 'list of all agencies';

        $this->load->view('template/header');
        $this->load->view('agentura/edit', $data);
        $this->load->view('template/footer');
    }

    function update_agency_id1() {
        $id= $this->input->post('did');
        $data = array(
            'Name' => $this->input->post('dname'),
            'Address' => $this->input->post('daddress')
        );
        $this->agentura_m->update_agency_id1($id,$data);
        $this->show_agency_id();
        redirect(base_url().'index.php/agentura');
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

    public function edit()
    {
        $data['agentura'] = $this->agentura_m->get_agentury();
        $data['title'] = 'Agencies';
        $data['header'] = 'Agencies';
        $data['header2'] = 'list of all agencies';

        $this->load->view('template/header');
        $this->load->view('agentura/edit', $data);
        $this->load->view('template/footer');
    }

    function delete_agency_id() {
        $id = $this->uri->segment(3);
        $this->agentura_m->delete_agency_id($id);
        redirect(base_url().'index.php/agentura');
    }

    public function insert()
    {
        $data['agentura'] = $this->agentura_m->get_agentury();
        $data['title'] = 'Agencies';
        $data['header'] = 'Agencies';
        $data['header2'] = 'list of all agencies';

        $this->load->view('template/header');
        $this->load->view('agentura/view', $data);
        $this->load->view('template/footer');
    }

    function insertAgency()
    {
        $data = array(
            'Name' => $this->input->post('dname'),
            'Address' => $this->input->post('daddress')
        );
        $this->agentura_m->form_insert($data);
        redirect(base_url().'index.php/agentura');

    }
}