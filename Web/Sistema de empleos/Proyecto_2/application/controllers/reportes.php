<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Establece la clase reportes como extendida de controlador
class Reportes extends CI_Controller {

    public function __construct()
    {
              parent::__construct();
        //Llama el modelo para utilizar los metodos en el ctr
              $this->load->model('login_model');
              $this->load->helper('url_helper');
              $this->load->library("session");
              $this->load->helper("url");
    }

    public function index()
    {
      
    }

    public function pdf()
    {
            $this->load->helper('pdf_helper');
            $data['curri_item'] = $this->login_model->get_curriculum();
            $this->load->view('report/reporteC', $data);
    }
    
     public function pdf1()
    {
            $this->load->helper('pdf_helper');
            $data['empre_item'] = $this->login_model->get_Empresa();
            $this->load->view('report/reporteE', $data);
    }

}
?>

