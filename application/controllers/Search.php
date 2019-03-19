<?php

class Search extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('pagination', 'dml'));
        $this->load->model('product_model', 'model');
    }

    public function index() {
        $searchName = !empty($this->uri->segment(2)) ? urldecode($this->uri->segment(2)) : 0;
        $offset = empty($this->uri->segment(3)) ? 0 : $this->uri->segment(3);
        $this->load->config('pagination');
        $config = $this->config->item('front_pagination');
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url($this->uri->segment(1) . '/' . $searchName);
        $config["total_rows"] = $this->model->searchCountTotal($searchName);
        $this->pagination->initialize($config);
        $data['products'] = $this->model->search($offset, $searchName);
        $data['product_count'] = $config["total_rows"];
        $data['product_name'] = $searchName;
        $data['menu'] = 'search';
        $this->load->view('header',$data);
        $this->load->view('search', $data);
        $this->load->view('footer');
    }

    public function detail() {
        $permalink = !empty($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['row'] = $this->dml->getRow(TBL_PRODUCTS, 'permalink', $permalink);
        if (!empty($data['row'])) { // Found product
            $data['images'] = $this->dml->get(TBL_PRODUCT_IMAGES, 'product_id', $data['row']['id']);
            $this->load->view('front/product/detail', $data);
        } else {
            show_404();
        }
    }
    public function sample() {
        $data['menu'] = 'search';
        $this->load->view('header',$data);
        $this->load->view('product/search1');
        $this->load->view('footer');
    }
}
