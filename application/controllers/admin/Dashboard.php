<?php

class Dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('admin/dashboard_model', 'model');
        $data['row'] = $this->model->getCounts();
        $this->backEnd('admin/dashboard/index', $data, true);
    }

}
