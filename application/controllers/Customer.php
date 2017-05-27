<?php

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_m');
    }

    public function index()
    {
        $data['customer'] = $this->customer_m->get_customer();
        $data['title'] = 'Customer';
        $data['header'] = 'Customer';
        $data['header2'] = 'list of all customer';

        $this->load->view('template/header');
        $this->load->view('customer/index', $data);
        $this->load->view('template/footer');
    }
}