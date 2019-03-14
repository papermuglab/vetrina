<?php

class Product_model extends CI_Model {

    public function getMenuID($permalink) {
        $this->db->select('id');
        $this->db->from(TBL_SUB_MENUS);
        $this->db->where('permalink', $permalink);
        $this->db->limit(1);
        $row = $this->db->get()->row_array();
        return !empty($row) ? $row['id'] : 0;
    }

    /*
     * Count product for Listing page
     */
    public function countTotal($menu_id) {
        $this->db->select('COUNT(id) AS total');
        $this->db->from(TBL_PRODUCTS);
        $this->db->where('is_deleted', 0);
        $this->db->where('sub_menu_id', $menu_id);
        return $this->db->get()->row()->total;
    }

    /*
     * Fetch products for Listing page
     */
    public function get($offset, $menu_id) {
        $this->db->select('id AS id, title, description, ingredients');
        $this->db->from(TBL_PRODUCTS);
        $this->db->where('is_deleted', 0);
        $this->db->where('sub_menu_id', $menu_id );
        $this->db->order_by('added_on', 'DESC');
        $this->db->limit(9, $offset);
        $result = $this->db->get()->result_array();
        foreach ($result AS $key => $value) {
            $result[$key]['image_name'] = $this->getProductImageName($value['id']);
        }
        return $result;
    }

    public function getProductImageName($product_id) {
        $this->db->select('image_name');
        $this->db->from(TBL_PRODUCT_IMAGES);
        $this->db->where('product_id', $product_id);
        $this->db->limit(1);
        $row = $this->db->get()->row_array();
        return !empty($row) ? $row['image_name'] : '';
    }

    /*
     * Used in Search product page.
     */
    public function getByName($offset, $search_key) {
        $this->db->select('id AS id, title, permalink');
        $this->db->from(TBL_PRODUCTS);
        $this->db->like('title', $search_key, 'both');
        $this->db->where('is_deleted', 0);
        $this->db->order_by('added_on', 'DESC');
        $this->db->limit(10, $offset);
        $result = $this->db->get()->result_array();
        foreach ($result AS $key => $value) {
            $result[$key]['image_name'] = $this->getProductImageName($value['id']);
        }
        return $result;
    }

    /*
     * Used in Search product page Count the product.
     */
    public function getByNameCount($search_key) {
        $this->db->select('COUNT(id) AS total');
        $this->db->from(TBL_PRODUCTS);
        $this->db->like('title', $search_key, 'both');
        $this->db->where('is_deleted', 0);
        return $this->db->get()->row()->total;
    }

}
