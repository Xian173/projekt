<?php

class delete extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id)) {
            show_404();
        }

        $agentura_item = $this->agentura_m->get_agentura($id);

        $this->agentura_m->delete_agentura($id);
        redirect(base_url() . 'index.php/agentura');
    }
}