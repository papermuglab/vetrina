<?php

class Contact extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('get_designed_message', 'send_email'));
        $this->load->library('dml');
    }

    public function index() {
        $data['menu'] = 'contact';
        $this->load->view('header',$data);
        $this->load->view('contact-us');
        $this->load->view('footer');
    }

    // This is AJAX method.
    public function addInquiry() {
        $params['name'] = strip_tags($this->input->post('name'));
        $params['email'] = $this->input->post('email');
        $params['mobile'] = $this->input->post('mobile');
        $params['message'] = strip_tags($this->input->post('message'));
        $params['client_ip'] = $this->input->ip_address();
        $result = $this->dml->insert(TBL_INQUIRIES, $params);
        if ($result['status']) {  // Success
            // sendEmail(ADMIN_EMAIL, 1, $params);
            $message = getDesignedMessage("Thank you so much for your time, Our Team will contact you soon.");
        } else {
            $message = getDesignedMessage("Something wrong happened, Please try again.", 2);
        }
        print_r($message);
    }

}
