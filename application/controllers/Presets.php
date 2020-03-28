<?php

class Presets extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('preset', 'Preset', 'required|trim');
        
        $data['user'] = $this->db->get_where('user', ['emaildb' => $this->session->userdata('email')])->row_array();
        if($this->form_validation->run() == false){
            
            
            $this->load->view('presets', $data);
            $this->load->view('template/footer');

    
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'presetoption' => $this->input->post('preset'),
                'preset_date' => time()
            ];

            $this->db->insert('presets', $data);
            $this->session->set_flashdata('message', '<p style="text-align:center;">Your Order has been placed, check your email soon! </p>');
            redirect('presets');
    
           
        }
    }

}
?>