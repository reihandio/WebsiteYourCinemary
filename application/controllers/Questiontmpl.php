<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questiontmpl extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_questiontmpl');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Question',
            'data_question' => $this->m_questiontmpl->get_all_question()
        );
        $this->load->view('template/headeradmin',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('questiontmpl',$data);
        
    }

}