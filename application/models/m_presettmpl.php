<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Presettmpl extends CI_Model {
    public function get_all_preset(){
   
        $query = $this->db->order_by('kd_presets','DESC')->get('presets');
    return $query->result();

    }
}
