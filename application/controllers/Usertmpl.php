<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usertmpl extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_usertmpl');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data User',
            'data_user' => $this->m_usertmpl->get_all_user()
        );
        $this->load->view('template/headeradmin',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('usertmpl',$data);
       

    }

}