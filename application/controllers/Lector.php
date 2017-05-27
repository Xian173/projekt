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
}