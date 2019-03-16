<?php

class Career extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('career');
    }

    public function sendEmail() {
        $data['profession'] = $this->input->post('profession');
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['mobile'] = $this->input->post('mobile');
        if (!empty($_FILES["resume"]["name"]) AND $_FILES["resume"]["size"] >= 3000000) { // Image size greater than 3 MB
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Resume size must be less than 3 MB.</div>');
            redirect(base_url('career'));
        } else {
            $newname = '';
            if (!empty($_FILES["resume"]["name"])) {
                $temp = explode(".", $_FILES["resume"]["name"]);
                $extension = end($temp);
                $newname = $_FILES["resume"]["tmp_name"] . "." . $extension;
                rename($_FILES["resume"]["tmp_name"], $newname);
            }
            $this->load->helper('send_email');
            sendEmail(ADMIN_EMAIL, 2, $data, $newname);
            $this->session->set_flashdata('message', '<div class="alert alert-success"><span class="fa fa-check"></span> <strong>Success!</strong> Thank you so much for your time. Our HR will get back to you.</div>');
            redirect(base_url('career'));
        }
    }

}
