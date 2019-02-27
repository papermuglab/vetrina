<?php

class Products extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('front/product/list');
    }

    public function detail() {
        $this->load->view('front/product/detail');
    }
}