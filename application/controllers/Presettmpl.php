<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presettmpl extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_presettmpl');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Order Preset',
            'data_preset' => $this->m_presettmpl->get_all_preset()
        );
        $this->load->view('template/headeradmin',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('presettmpl',$data);
        
    }

}