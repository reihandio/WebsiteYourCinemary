<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Usertmpl extends CI_Model {
    public function get_all_user(){
   
        $query = $this->db->order_by('id_user','DESC')->get('user');
    return $query->result();

    }
}
