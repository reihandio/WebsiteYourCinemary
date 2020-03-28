<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['emaildb' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang  ' . $data['user']['nicknamedb'];

        $this->load->view('user/index', $data);
    }

    public function contact()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'question' => $this->input->post('question'),
            'date' => time()
        ];

        $this->db->insert('contact', $data);
        $this->session->set_flashdata('message', '<p style="text-align:center;">Your Questiion Has Been Submitted! </p>');
        redirect('user');

    }

}