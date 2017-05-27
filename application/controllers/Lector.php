<?php

class Lector extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('lector_m');
    }

    public function index()
    {
        $data['lector'] = $this->lector_m->get_lectors();
        $data['title'] = 'Lectors';
        $data['header'] = 'Lectors';
        $data['header2'] = 'list of all lectors';

        $this->load->view('template/header');
        $this->load->view('lectors/index', $data);
        $this->load->view('template/footer');
    }

    function delete_lector_id() {
        $id = $this->uri->segment(3);
        $this->lector_m->delete_lector_id($id);
        redirect(base_url().'index.php/lector');
    }

    public function insert()
    {
        $data['lector'] = $this->lector_m->get_lectors();
        $data['title'] = 'Lectors';
        $data['header'] = 'Lectors';
        $data['header2'] = 'list of all lectors';

        $this->load->view('template/header');
        $this->load->view('lectors/view', $data);
        $this->load->view('template/footer');
    }

    function insertLector()
    {
        $data = array(
            'Name' => $this->input->post('dname'),
            'Surname' => $this->input->post('dsurname'),
            'Phone' => $this->input->post('dphone'),
            'Email' => $this->input->post('demail')
        );
        $this->lector_m->form_insert($data);
        redirect(base_url().'index.php/lector');

    }
}