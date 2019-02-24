<?php

class Product_model extends CI_Model {

    public function get() {
        $this->db->select('p.id, p.title, m.name AS menu');
        $this->db->from(TBL_PRODUCTS.' AS p');
        $this->db->join(TBL_MENUS.' AS m', 'm.id = p.menu_id');
        $this->db->where('p.is_deleted', 0);
        $this->db->order_by('p.title', 'ASC');
        return $this->db->get()->result_array();
    }

    public function deleteImage($image_name) {
        $this->db->where('image_name', $image_name);
        $this->db->delete(TBL_PRODUCT_IMAGES);
        return $this->db->affected_rows();
    }

}
