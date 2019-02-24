<?php

class Blog extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('get_designed_message', 'upload_image', 'check_session', 'create_permalink'));
        $this->load->library('dml');
        $this->load->model('admin/blog_model', 'model');
        isLoggedIn();
    }

    public function index() {
        $data['blogs'] = $this->model->get();
        $this->backEnd('admin/blog/list', $data, true);
    }

    public function add() {
        $this->backEnd('admin/blog/add');
    }

    public function edit($blog_id) {
        $data['row'] = $this->dml->getRow(TBL_BLOGS, 'id', $blog_id);
        $this->backEnd('admin/blog/add', $data, true);
    }

    public function save() {
        $blog_id = $this->input->post('blog_id');
        $params['title'] = $this->input->post('title');
        $params['description'] = $this->input->post('editor1');
        $params['permalink'] = createPermaLink($params['title']);
        if(!empty($_FILES['image']['name'])) {
            $params['image_name'] = uploadBanner('image');
        }
        if (empty($blog_id)) { // Add Product
            $result = $this->dml->insert(TBL_BLOGS, $params);
        } else {// Update Product
            $result = $this->dml->update(TBL_BLOGS, 'id', $blog_id, $params);
        }
        if ($result['status']) {
            $message = getDesignedMessage('Blog saved successfully.');
        } else {
            $message = getDesignedMessage('Something wrong happened, Please try again.', 2);
        }
        $this->session->set_flashdata('message', $message);
        redirect(base_url('admin/blog'));
    }

}
