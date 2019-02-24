<?php

class Blog_model extends CI_Model {

    public function get() {
        $this->db->select('id, title');
        $this->db->select('(SELECT COUNT(id) FROM '.TBL_BLOG_COMMENTS.' WHERE is_valid = 1 AND is_deleted = 0) AS comments', false);
        $this->db->from(TBL_BLOGS);
        $this->db->where('is_deleted', 0);
        $this->db->order_by('title', 'ASC');
        return $this->db->get()->result_array();
    }

}
