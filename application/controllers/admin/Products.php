<?php

class Products extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('get_designed_message', 'upload_image', 'check_session', 'create_permalink'));
        $this->load->library('dml');
        $this->load->model('admin/product_model', 'model');
        isLoggedIn();
    }

    public function index() {
        $data['products'] = $this->model->get();
        $this->backEnd('admin/product/list', $data, true);
    }

    public function add() {
        $data['menus'] = $this->dml->get(TBL_MENUS, 'is_deleted', 0);
        $data['subMenus'] = array();
        $this->backEnd('admin/product/add', $data, true);
    }

    public function edit($product_id) {
        $data['row'] = $this->dml->getRow(TBL_PRODUCTS, 'id', $product_id);
        $data['menus'] = $this->dml->get(TBL_MENUS, 'is_deleted', 0);
        $data['subMenus'] = $this->dml->get(TBL_SUB_MENUS, 'menu_id', $data['row']['menu_id']);
        $data['images'] = $this->dml->get(TBL_PRODUCT_IMAGES, 'product_id', $product_id);
        $this->backEnd('admin/product/add', $data, true);
    }

    public function save() {
        $product_id = $this->input->post('product_id');
        $params['menu_id'] = $this->input->post('menu_id');
        $params['sub_menu_id'] = $this->input->post('sub_menu_id');
        $params['title'] = $this->input->post('title');
        $params['description'] = $this->input->post('editor1');
        $params['ingredients'] = $this->input->post('ingredients');
        $params['permalink'] = createPermaLink($params['title']);
        if (empty($product_id)) { // Add Product
            $result = $this->dml->insert(TBL_PRODUCTS, $params);
        } else {// Update Product
            $result = $this->dml->update(TBL_PRODUCTS, 'id', $product_id, $params);
        }
        if ($result['status'] || $product_id != 0) {
            $product_id = $result['id'];
            uploadProfile($product_id, $_FILES['images']);
            $message = getDesignedMessage('Product saved successfully.');
        } else {
            $message = getDesignedMessage('Something wrong happened, Please try again.', 2);
        }
        $this->session->set_flashdata('message', $message);
        redirect(base_url('admin/products'));
    }

    public function delete_image() {
        $image_name = $this->input->post('image_name');
        print_r($this->model->deleteImage($image_name));
    }

}
