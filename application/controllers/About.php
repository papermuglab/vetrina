<?php

class About extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    		$data['menu'] = 'about';
        $this->load->view('header',$data);
        $this->load->view('about-us');
        $this->load->view('footer');
    }

}
