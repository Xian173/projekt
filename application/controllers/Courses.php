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
}