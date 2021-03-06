<?php

class Blog_model extends CI_Model {
    /*
     * Count product for Listing page
     */

    public function countTotal() {
        $this->db->select('COUNT(id) AS total');
        $this->db->from(TBL_BLOGS);
        $this->db->where('is_deleted', 0);
        return $this->db->get()->row()->total;
    }

    /*
     * Fetch blogs for Listing page
     */

    public function get($offset) {
        $this->db->select('id, title, image_name, description, permalink');
        $this->db->from(TBL_BLOGS);
        $this->db->where('is_deleted', 0);
        $this->db->order_by('added_on', 'DESC');
        $this->db->limit(10, $offset);
        return $this->db->get()->result_array();
    }

    public function getComments($blodId) {
        $this->db->select('name, email, comment, added_on, is_admin');
        $this->db->from(TBL_BLOG_COMMENTS);
        $this->db->where('blog_id', $blodId);
        $this->db->where('is_valid', 1);
        $this->db->where('is_deleted', 0);
        $this->db->order_by('added_on', 'DESC');
        return $this->db->get()->result_array();
    }

}
