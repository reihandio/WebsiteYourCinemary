<?php

class Booking extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('packet', 'Packet', 'required|trim');
        
        $data['user'] = $this->db->get_where('user', ['emaildb' => $this->session->userdata('email')])->row_array();
        if($this->form_validation->run() == false){
            
            
            $this->load->view('booking', $data);
            $this->load->view('template/footer');

    
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'book_date' => $this->input->post('date'),
                'packet' => $this->input->post('packet'),
                'date_created' => time()
            ];

            $this->db->insert('booking', $data);
            $this->session->set_flashdata('message', '<p style="text-align:center;">Your Order has been placed, check your email soon! </p>');
            redirect('booking');
    
           
        }
    }

}
?>