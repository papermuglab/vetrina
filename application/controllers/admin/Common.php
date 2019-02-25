<?php

class Common extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('get_designed_message');
    }

    public function delete() {
        $this->load->library('dml');
        $type = $this->input->post('type');
        $record_id = $this->input->post('record_id');
        switch ($type) {
            case 'product':
                $field_name = 'id';
                $table_name = TBL_PRODUCTS;
                break;
            case 'blog':
                $field_name = 'id';
                $table_name = TBL_BLOGS;
                break;
            case 'inquiry':
                $field_name = 'id';
                $table_name = TBL_INQUIRIES;
                break;
            case 'comment':
                $field_name = 'id';
                $table_name = TBL_BLOG_COMMENTS;
                break;
            default:
                break;
        }
        $response = $this->dml->delete($table_name, $field_name, $record_id);
        echo getDesignedMessage('Record is deleted successfully.');
    }

}
