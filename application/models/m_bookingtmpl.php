<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Bookingtmpl extends CI_Model {
    public function get_all_booking(){
   
        $query = $this->db->order_by('kd_booking','DESC')->get('booking');
    return $query->result();

    }
}
