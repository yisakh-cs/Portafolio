<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library("session");
        }

        public function index($name)
        {
          $this->load->view('inicio/subirFoto',array('name' => $name));
        }

        public function do_upload($name)
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg';
                $config['max_size']             = 4000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1680;
                $config['file_name']           = $name;
                $config['overwrite']            = true;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->session->set_flashdata('error', $error['error']);
                        $referred_from = $this->session->userdata('referred_from');
                        redirect($referred_from, 'refresh');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $referred_from = $this->session->userdata('referred_from');
                        redirect($referred_from, 'refresh');
                }
        }
}
?>
