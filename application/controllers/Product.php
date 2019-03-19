<?php

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function cattle() {
        $data['menu'] = 'products';
        $data['menu1'] = 'cattle';
        $this->load->view('header',$data);
        $this->load->view('product/cattle');
        $this->load->view('footer');
    }

    public function poultry() {
        $data['menu'] = 'products';
        $data['menu1'] = 'poultry';
        $this->load->view('header',$data);
        $this->load->view('product/poultry');
        $this->load->view('footer');
    }

    public function companian_animal() {
        $data['menu'] = 'products';
        $data['menu1'] = 'companian_animal';
        $this->load->view('header',$data);
        $this->load->view('product/companian_animal');
        $this->load->view('footer');
    }

    public function exotic_animal() {
        $data['menu'] = 'products';
        $data['menu1'] = 'exotic_animal';
        $this->load->view('header',$data);
        $this->load->view('product/exotic_animal');
        $this->load->view('footer');
    }

    public function swine() {
        $data['menu'] = 'products';
        $data['menu1'] = 'swine';
        $this->load->view('header',$data);
        $this->load->view('product/swine');
        $this->load->view('footer');
    }

    public function sheep() {
        $data['menu'] = 'products';
        $data['menu1'] = 'sheep';
        $this->load->view('header',$data);
        $this->load->view('product/sheep');
        $this->load->view('footer');
    }

}
