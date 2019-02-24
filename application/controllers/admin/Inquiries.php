<?php

class Inquiries extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('pagination'));
        $this->load->helper(array('get_designed_message', 'check_session'));
        isLoggedIn();
    }

    public function index() {
        $data['inquiries'] = $this->model->get($offset);
        $this->backEnd('admin/inquiry/list', $data, TRUE);
    }

    public function get_info() {
        $inquiry_id = $this->input->post('inquiry_id');
        print_r(json_encode($this->dml->getRow(TBL_INQUIRY, 'inquiry_id', $inquiry_id)));
    }

}
