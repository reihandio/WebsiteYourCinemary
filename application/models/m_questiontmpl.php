<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Questiontmpl extends CI_Model {
    public function get_all_question(){
   
        $query = $this->db->order_by('id_question','DESC')->get('contact');
    return $query->result();

    }
}
