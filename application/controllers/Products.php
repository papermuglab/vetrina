<?php

class Products extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('pagination', 'dml'));
        $this->load->model('product_model', 'model');
    }

    public function index() {
        $permalink = !empty($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $offset = empty($this->uri->segment(3)) ? 0 : $this->uri->segment(3);
        $menu_id = $this->model->getMenuID($permalink);
        $this->load->config('pagination');
        $config = $this->config->item('front_pagination');
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url($this->uri->segment(1) . '/' . $permalink);
        $config["total_rows"] = $this->model->countTotal($menu_id);
        $this->pagination->initialize($config);
        $data['products'] = $this->model->get($offset, $menu_id);
        $data['product_count'] = $config["total_rows"];
//        echo '<pre>';
//        print_r($data);die();
        $this->load->view('product/product_list', $data);
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

}
