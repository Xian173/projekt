<?php

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_m');
    }

    function show_customer_id() {
        $id = $this->uri->segment(3);
        $data['customer'] = $this->customer_m->show_customer();
        $data['single_customer'] = $this->customer_m->show_customer_id($id);
        $data['customer'] = $this->customer_m->get_customer();
        $data['title'] = 'Customer';
        $data['header'] = 'Customer';
        $data['header2'] = 'list of all customers';

        $this->load->view('template/header');
        $this->load->view('customer/edit', $data);
        $this->load->view('template/footer');
    }

    function update_customer_id1() {
        $id= $this->input->post('did');
        $data = array(
            'Name' => $this->input->post('dname'),
            'Surname' => $this->input->post('dsurname'),
            'Address' => $this->input->post('daddress'),
            'Phone' => $this->input->post('dphone'),
            'Courses_ID' => $this->input->post('dfk')
        );
        $this->customer_m->update_customer_id1($id,$data);
        $this->show_customer_id();
        redirect(base_url().'index.php/customer');
    }

    public function insert()
    {
        $data['customer'] = $this->customer_m->get_customer();
        $data['title'] = 'Customer';
        $data['header'] = 'Customer';
        $data['header2'] = 'list of all customer';

        $this->load->view('template/header');
        $this->load->view('customer/view', $data);
        $this->load->view('template/footer');
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

    function insertCustomer()
    {
        $data = array(
            'Name' => $this->input->post('dname'),
            'Surname' => $this->input->post('dsurname'),
            'Address' => $this->input->post('daddress'),
            'Phone' => $this->input->post('dphone'),
            'Courses_ID' => $this->input->post('dfk')
        );
        $this->customer_m->form_insert($data);
        redirect(base_url().'index.php/customer');
    }
}