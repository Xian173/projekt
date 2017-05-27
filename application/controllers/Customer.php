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

    function delete_customer_id() {
        $id = $this->uri->segment(3);
        $this->customer_m->delete_customer_id($id);
        redirect(base_url().'index.php/customer');
    }
}