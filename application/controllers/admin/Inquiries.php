<?php

class Inquiries extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('pagination'));
        $this->load->helper(array('get_designed_message', 'check_session'));
        isLoggedIn();
        $this->load->library('dml');
    }

    public function index() {
        $data['inquiries'] = $this->dml->get(TBL_INQUIRIES, 'is_deleted', 0);
        $this->backEnd('admin/inquiry/list', $data, TRUE);
    }

    public function get_info() {
        $inquiry_id = $this->input->post('inquiry_id');
        print_r(json_encode($this->dml->getRow(TBL_INQUIRIES, 'id', $inquiry_id)));
    }

}
