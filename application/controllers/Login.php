<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if($this->form_validation->run() == false){
            
            $this->load->view('template/header');
            $this->load->view('auth/login');
            $this->load->view('template/footer');
    
        } else {
            //validasi sukses
            $this->_login();
        }

    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['emaildb' => $email])->row_array();

        //usernya ada
        if($user){
            if(password_verify($password, $user['passworddb'])){
                $data = [
                    'email' => $user['emaildb'],
                    'role_id' => $user['role_id'] 
                ];
                $this->session->set_userdata($data);
                redirect('user');

            }
            else{
            $this->session->set_flashdata('message', '<p style="text-align:center;">Wrong Password! </p>');
            redirect('login');
            }
            
        } else {
            $this->session->set_flashdata('message', '<p style="text-align:center;">Email is not Registered! </p>');
            redirect('login');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<p style="text-align:center;">You Have Been Logged Out!</p>');
            redirect('login');
    }

}