<?php

class Blog_model extends CI_Model {

    public function get() {
        $this->db->select('id, title');
        $this->db->select('(SELECT COUNT(id) FROM ' . TBL_BLOG_COMMENTS . ' WHERE is_valid = 1 AND is_deleted = 0) AS comments', false);
        $this->db->from(TBL_BLOGS);
        $this->db->where('is_deleted', 0);
        $this->db->order_by('title', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getComments($blog_id) {
        $this->db->select('id, name, email, comment, is_valid, is_admin, added_on');
        $this->db->from(TBL_BLOG_COMMENTS);
        $this->db->where('is_deleted', 0);
        if (!empty($blog_id)) {
            $this->db->where('blog_id', $blog_id);
        }
        $this->db->order_by('is_valid', 'ASC');
        $this->db->order_by('added_on', 'DESC');
        return $this->db->get()->result_array();
    }

    public function getBlogTitles() {
        $this->db->select('id, title');
        $this->db->from(TBL_BLOGS);
        $this->db->where('is_deleted', 0);
        $this->db->where('is_comment_available', 1);
        $this->db->order_by('title', 'ASC');
        return $this->db->get()->result_array();
    }
}
