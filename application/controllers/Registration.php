<?php

class Registration extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['title'] = 'Login Page';
        $this->form_validation->set_rules('nickname', 'Nickname', 'required|trim');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.emaildb]', [
            'is_unique' => 'This Email Already Taken'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false)
        {
            $this->load->view('template/header');
            $this->load->view('auth/registration');
            $this->load->view('template/footer');
        }
        else{
            $data = [
                'nicknamedb' => htmlspecialchars($this->input->post('nickname', true)),
                'fullnamedb' => htmlspecialchars($this->input->post('fullname', true)),
                'emaildb' => $this->input->post('email'),
                'passworddb' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                'role_id' => 2,
                'user_created' => time()
            ];
            
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<p style="text-align:center;">Congratulations! Your account has been created. Please Login! </p>');
            redirect('login');
        }
    }
}