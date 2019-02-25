<?php

class Dashboard_model extends CI_Model {

    public function getCounts() {
        $params = array();
        $params['pending_comments'] = $this->getPendingComments();
        $params['unique_visitors'] = $this->getUniqueVisitors();
        $params['total_inquiries'] = $this->getTotalInquiries();
        $params['total_products'] = $this->getTotalProducts();
        return $params;
    }

    public function getPendingComments() {
        $this->db->select('COUNT(bc.id) AS count');
        $this->db->from(TBL_BLOG_COMMENTS . ' AS bc');
        $this->db->join(TBL_BLOGS . ' AS b', 'b.id = bc.blog_id');
        $this->db->where('b.is_deleted', 0);
        $this->db->where('bc.is_valid', 0);
        $this->db->where('bc.is_deleted', 0);
        return $this->db->get()->row()->count;
    }

    public function getUniqueVisitors() {
        $this->db->select('COUNT(DISTINCT client_ip) AS count');
        $this->db->from(TBL_PRODUCT_STATISTICS);
        return $this->db->get()->row()->count;
    }

    public function getTotalInquiries() {
        $this->db->select('COUNT(id) AS count');
        $this->db->from(TBL_INQUIRIES);
        $this->db->where('is_deleted', 0);
        return $this->db->get()->row()->count;
    }

    public function getTotalProducts() {
        $this->db->select('COUNT(id) AS count');
        $this->db->from(TBL_PRODUCTS);
        $this->db->where('is_deleted', 0);
        return $this->db->get()->row()->count;
    }

}
