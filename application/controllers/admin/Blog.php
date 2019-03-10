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
        $params['is_comment_available'] = $this->input->post('is_comment_available');
        $params['permalink'] = createPermaLink($params['title']);
        $params['is_deleted'] = 0;
//        if (!empty($_FILES['image']['name'])) {
//            $params['image_name'] = uploadBanner('image');
//        }
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

    public function comments($blog_id = null) {
        $data['comments'] = $this->model->getComments($blog_id);
        $data['blog'] = $this->dml->getRow(TBL_BLOGS, 'id', $blog_id);
        $data['blogs'] = $this->model->getBlogTitles();
        $this->backEnd('admin/blog/comment', $data, true);
    }

    public function approveComment() {
        $comment_id = $this->input->post('comment_id');
        $params['is_valid'] = 1;
        $result = $this->dml->update(TBL_BLOG_COMMENTS, 'id', $comment_id, $params);
        echo 1;
    }

    public function saveComment() {
        $params['blog_id'] = $this->input->post('blog_id');
        $params['comment'] = $this->input->post('comment');
        $params['is_valid'] = 1;
        $params['is_admin'] = 1;
        $params['client_ip'] = $_SERVER['REMOTE_ADDR'];
        $activeBlog = !empty($this->input->post('active_blog')) ? $this->input->post('active_blog') : '';
        $result = $this->dml->insert(TBL_BLOG_COMMENTS, $params);
        if ($result['status']) {
            $message = getDesignedMessage('Comment saved successfully.');
        } else {
            $message = getDesignedMessage('Something wrong happened, Please try again.', 2);
        }
        $this->session->set_flashdata('message', $message);
        redirect(base_url('admin/blog/comments/' . $activeBlog));
    }

    public function uploadImage() {
        $blogId = $this->input->post('blog_id');
        $image = $this->input->post('image');
        $imageArr = explode(";", $image);
        $encodedImage = explode(",", $imageArr[1]);
        $fileName = date('YmdHis') . '.png';
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/vetrina/uploads/blog/' . $fileName;
        file_put_contents($filePath, base64_decode($encodedImage[1]));
        $params['image_name'] = $fileName;
        if (!empty($blogId)) { // Update
            $result = $this->dml->update(TBL_BLOGS, 'id', $blogId, $params);
        } else { // Insert
            $params['is_deleted'] = 1;
            $result = $this->dml->insert(TBL_BLOGS, $params);
        }
        echo $result['id'];
    }

}
