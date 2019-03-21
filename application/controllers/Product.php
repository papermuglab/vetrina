<?php

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function cattle() {
        $this->load->view('product/cattle');
    }

    public function poultry() {
        $this->load->view('product/poultry');
    }

    public function companian_animal() {
        $this->load->view('product/companian_animal');
    }

    public function exotic_animal() {
        $this->load->view('product/exotic_animal');
    }

    public function swine() {
        $this->load->view('product/swine');
    }

    public function sheep() {
        $this->load->view('product/sheep');
    }

}
