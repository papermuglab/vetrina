<?php

include_once APPPATH . 'custom_class/Model.php';

class Menu_model extends CI_Model {

    public function getSubMenus($menu_id) {
        $this->db->select('id, name');
        $this->db->from(TBL_SUB_MENUS);
        $this->db->where('menu_id', $menu_id); // Fetch Sub Menus
        $this->db->order_by('name', 'ASC');
        return $this->db->get()->result_array();
    }

}
