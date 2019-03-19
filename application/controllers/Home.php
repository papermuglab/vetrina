<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['menu'] = 'home';
        $this->load->view('header',$data);
        $this->load->view('index');
        $this->load->view('footer');
    }

}
