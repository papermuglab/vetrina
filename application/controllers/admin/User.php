<?php

class User extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('get_designed_message', 'check_session'));
        $this->load->library('dml');
        $this->load->model('admin/admin_model', 'model');
        isLoggedIn();
    }

    public function index() {
        $this->backEnd('admin/admin/change-password');
    }

    public function changePassword() {
        $params['old_password'] = md5($this->input->post('old_password'));
        $params['password'] = md5($this->input->post('new_password'));
        if ($this->model->checkOldPassword($params['old_password'])) { // Valid old password
            $currentAdminId = $this->session->userdata('admin_id');
            unset($params['old_password']);
            $result = $this->dml->update(TBL_ADMINS, 'id', $currentAdminId, $params);
            if ($result['status']) {
                $message = getDesignedMessage('Password is changed successfully.');
            } else {
                $message = getDesignedMessage('Something wrong happened, Please try again.', 2);
            }
        } else { // Wrong Old Password
            $message = getDesignedMessage('Old Password is wrong, Please try again with correct password.', 2);
        }
        $this->session->set_flashdata('message', $message);
        redirect(base_url('admin/user'));
    }

}
