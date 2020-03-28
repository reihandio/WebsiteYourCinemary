<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookingtmpl extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_bookingtmpl');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Booking',
            'data_booking' => $this->m_bookingtmpl->get_all_booking()
        );
        $this->load->view('template/headeradmin',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('bookingtmpl',$data);
        
    }

}