<?php

class Blogs extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('front/blog/list');
    }

    public function detail() {
        $this->load->view('front/blog/detail');
    }

}
