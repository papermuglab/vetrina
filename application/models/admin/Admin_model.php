<?php

class Admin_model extends CI_Model {

    public function checkOldPassword($oldPassword) {
        $this->db->select('id');
        $this->db->from(TBL_ADMINS);
        $this->db->where('password', $oldPassword);
        $this->db->limit(1);
        $row = $this->db->get()->row();
        return !empty($row) ? true : false;
    }

}
