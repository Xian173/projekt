<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Home';
        $data['header'] = 'Home';
        $data['header2'] = 'main page';

        $this->load->view('template/header');
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }
}
