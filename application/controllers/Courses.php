<?php

class Courses extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_m');
    }

    public function index()
    {
        $data['course'] = $this->course_m->get_courses();
        $data['title'] = 'Courses';
        $data['header'] = 'Courses';
        $data['header2'] = 'list of all courses';

        $this->load->view('template/header');
        $this->load->view('course/index', $data);
        $this->load->view('template/footer');
    }

    function delete_course_id() {
        $id = $this->uri->segment(3);
        $this->course_m->delete_course_id($id);
        redirect(base_url().'index.php/courses');
    }

    public function insert()
    {
        $data['course'] = $this->course_m->get_courses();
        $data['title'] = 'Courses';
        $data['header'] = 'Courses';
        $data['header2'] = 'list of all courses';

        $this->load->view('template/header');
        $this->load->view('course/view', $data);
        $this->load->view('template/footer');
    }

    function insertCourse()
    {
        $data = array(
            'Name' => $this->input->post('dname'),
            'Prize' => $this->input->post('dprize'),
            'Start_Date' => $this->input->post('dstart'),
            'End_Date' => $this->input->post('dend')
        );
        $this->course_m->form_insert($data);
        redirect(base_url().'index.php/courses');
    }
}