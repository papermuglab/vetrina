<?php

class Blogs extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('pagination', 'dml'));
        $this->load->model('blog_model', 'model');
    }

    public function index() {
        $offset = empty($this->uri->segment(2)) ? 0 : $this->uri->segment(2);
        $this->load->config('pagination');
        $config = $this->config->item('front_pagination');
        $config["uri_segment"] = 2;
        $config["base_url"] = base_url('blogs');
        $config["total_rows"] = $this->model->countTotal();
        $this->pagination->initialize($config);
        $data['blogs'] = $this->model->get($offset);
        $data['blog_count'] = $config["total_rows"];
        $this->load->view('blogs', $data);
    }

    public function detail() {
        $permalink = !empty($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['row'] = $this->dml->getRow(TBL_BLOGS, 'permalink', $permalink);
        if (!empty($data['row'])) { // Found product
            if ($data['row']['is_comment_available'] == 1) {
                $data['comments'] = $this->dml->get(TBL_BLOG_COMMENTS, 'blog_id', $data['row']['id']);
            }
            $this->load->view('front/blog/detail', $data);
        } else {
            show_404();
        }
    }

    public function addComment() {
        $params['name'] = $this->input->post('name');
        $params['email'] = $this->input->post('email');
        $params['comment'] = $this->input->post('comment');
        $params['blog_id'] = $this->input->post('blog_id');
        $params['is_valid'] = 0; // Default Inactive
        $params['is_admin'] = 0;
        $params['client_ip'] = $this->input->ip_address();
        $result = $this->dml->insert(TBL_BLOG_COMMENTS, $params);
        if ($result['status']) {
            $message = getDesignedMessage("Comment has been added and waiting for admin approval. Thank you so much for your time " . $params['name'] . ".");
        } else {
            $message = getDesignedMessage("Something wrong happened, Please try again.", 2);
        }
    }

}
