<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Establece la clase ofertas como extendida de controlador
class Ofertas extends CI_Controller {

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
        $this->ofertas();
    }

       public function empresa()
    {
        //Para redireccionar a la vista empresa
        $this->load->view('inicio/empresa');
    }
    //metodo para obtener los requisitos  donde guarda en una varianle $req los valores de la consulta por id del 
    //Carga la vista con dichos datos para usarlos
    public function requisitos($id=false)
    {   
        $req['item']=$this->login_model->get_req($id);
        $this->load->view('inicio/requisitos',$req);
    }
    
    //metodo para obtener los requisitos  donde guarda en una varianle $req los valores de la consulta por id del 
    //Carga la vista con dichos datos para usarlos
      public function editOfertas($id=false)
    {   
        $ofert['item']=$this->login_model->add_ofert($id);
        $this->load->view('inicio/editarOferta',$ofert);
    }
    //Metodo para registrar postulaciones de usuarios
    public function postulacion($id)
    {
          //llama el metodo del modelo
          $this->login_model->postular($id);
          redirect('Main/inicio');
          $this->session->set_flashdata('success', 'Usuario sea ha Postulado');

    }
      //agregar las ofertas por cada empresa
    public function agregarOfertasEmpresa()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('idUsuario', 'Usuario', 'required');
          
        $this->form_validation->set_rules('categoria', 'Categoria', 'required');

        $this->form_validation->set_rules('puesto', 'Puesto', 'required');
          
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        
        $this->form_validation->set_rules('dateOferta', 'Fecha de Oferta', 'required');
        
        $this->form_validation->set_rules('contrato', 'Duracion Contrato', 'required');
        
        $this->form_validation->set_rules('horario', 'Horario', 'required');
        
        $this->form_validation->set_rules('salario', 'Salario', 'required');
          
        $this->form_validation->set_rules('canton', 'Ubicacion', 'required');
        

        //Si se ejecuta correctamente las validaciones se agrega sino se redirecciona y muestra el error
        if ($this->form_validation->run())
          {
            $this->session->set_flashdata("success"," Agregado corectamente");
            $this->login_model->insertOfertaEmpresa();
            redirect('Main/empresa');
          }
        else
        {
             redirect('Main/empresa');
        }
        
    }
    
     //agregareditar las ofertas por cada empresa
    public function editarOfertasEmpresa($id=NULL)
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('idUsuario', 'Usuario', 'required');
          
        $this->form_validation->set_rules('categoria', 'Categoria', 'required');

        $this->form_validation->set_rules('puesto', 'Puesto', 'required');
          
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        
        $this->form_validation->set_rules('dateOferta', 'Fecha de Oferta', 'required');
        
        $this->form_validation->set_rules('contrato', 'Duracion Contrato', 'required');
        
        $this->form_validation->set_rules('horario', 'Horario', 'required');
        
        $this->form_validation->set_rules('salario', 'Salario', 'required');
          
        $this->form_validation->set_rules('canton', 'Ubicacion', 'required');
        

        //Si se ejecuta correctamente las validaciones se agrega sino se redirecciona y muestra el error
        if ($this->form_validation->run())
          {
            $this->session->set_flashdata("success"," Editado corectamente");
            $this->login_model->editarOfertaEmpresa();
            redirect('Main/empresa');
          }
        else
        {
             redirect('Main/empresa');
        }
        
    }
    //para abrir una nueva vista pasando los datos de oferta para tomar id de oferta
    public function addRequisitos($id=false)
    {   
        $ofer['item']=$this->login_model->add_ofert($id);
        $this->load->view('inicio/agregarRequisitos',$ofer);
    }
    
       //Funcion para agregar requisitos de forma adecuada
      public function AgregarRequerimientosEmpresa()
    {
          //libreria para validar campos
        $this->load->library('form_validation');

          //Valida si idOferta existe manda mensaje sino prosigue
        $this->form_validation->set_rules('idOferta', 'Oferta', 'required'|'is_unique[tbl_requisitos.idOferta]');

        $this->form_validation->set_rules('gradoEstudio', 'Grado de estudio', 'required');
          
        $this->form_validation->set_rules('experiencia', 'Experiencia', 'required');
          
        $this->form_validation->set_rules('idioma', 'idioma', 'required');
          
        $this->form_validation->set_rules('AspectGeneral', 'Aspectos Generales', 'required');
          
        $info=$this->login_model->get_idOfertaRequisitos();
          
        if ($this->form_validation->run())
        {
            //Sino existe curriculum lo agrega
            $this->session->set_flashdata("success"," Agregado corectamente");
            $this->login_model->agregarRequisitosEmpresa();
            redirect('Main/empresa');
        }
          else
          {
                $this->session->set_flashdata("success"," Actualizado corectamente");
                $this->login_model->editarRequisitosEmpresa($info['id']);
                redirect('Main/empresa');
          }


    }
  


}
?>
