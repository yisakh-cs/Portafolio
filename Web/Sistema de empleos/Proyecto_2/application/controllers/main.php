<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        //Se declaran las llamadas al modelo y librerias a utilizar
              parent::__construct();
              $this->load->model('login_model');
              $this->load->helper('url_helper');
              $this->load->library("session");
              $this->load->helper("url");
    }

    public function index()
    {
        //Llamada al metodo login
        $this->login();
    }

    public function inicio()
    {
        //Para cargar la vista de Inici(Empleado)
        $this->load->view('inicio/inicio');
    }

    public function empresa()
    {
        //Para redireccionar a la vista empresa
        $this->load->view('inicio/empresa');
    }

    public function login()
    {
         // cargar los datos de la tabla de usuarios de acuerdo al usuario y cargar la vista del login con los datos.
         $data['tbl_informacion'] =$this->login_model->get_user($this->input->post('usuario'));
         $this->load->view('login_view',$data);
    }

    public function signin()
    {
        //Abrir la vista de registrar
        $this->load->view('signin');
    }

     public function editPerfil()
    {
         //Abrir la vista de subirFoto
        $this->load->view('inicio/subirFoto');
    }

    public function data()
    {
        //Esta funcion redirecciona a otra pagina para tomar el data de tipo de usuario
        //Para definir a que vista redireccionarse.
        if ($this->session->userdata('usuario'))
        {
            $this->load->view('data');
        } else
        {
            redirect('Main/invalid');
        }
    }

    public function invalid()
    {
        //Vista de invalidacion
        $this->load->view('invalid');
    }

    public function login_action()
    {
        //Funcion para verificar si el correo y usuario existen en la base de datos llamando el modelo y comparandolo con el correo que es unico
        $this->load->helper('security');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('correo', 'Email:', 'required|trim|xss_clean|callback_validation');
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');

        if ($this->form_validation->run())
         {
                $data = $this->login_model->get_user($this->input->post('correo'));
                $this->session->set_userdata($data);
                //Carga la vista donde se verifica el tipo de usuario
                $this->load->view('data');
        }
        else
        {
            $this->load->view('login_view');
        }
    }
    public function signin_validation()
    {
        //Funcion donde validamos todos los campos si son requeridos, y valdiar los tipos.
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');


        $this->form_validation->set_rules('cedula', 'Cedula', 'is_unique[tbl_informacion.cedula]|numeric');

        $this->form_validation->set_rules('direccion', 'Direccion', 'required');

        $this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');

        $this->form_validation->set_rules('Nusuario', 'Usuario', 'required');

        $this->form_validation->set_rules('email', 'Correo electronico', 'required|valid_email|is_unique[tbl_informacion.email]');

        $this->form_validation->set_rules('tipo', 'Tipo de usuario', 'required');

        $this->form_validation->set_rules('password', 'Contraseña', 'required|trim|alpha_numeric');

        $this->form_validation->set_rules('cpassword', 'Confirmar contraseña', 'required|trim|matches[password]');



        //Si la validacion se ejecuta entonces se agrega, ejecuta el modelo y carga la vista nuevamente
    if ($this->form_validation->run())
        {
            $this->session->set_flashdata("success"," Agregado corectamente");
            $this->login_model->iniciarSesion();
            $this->load->view('login_view');
         }
        else 
        {
            //Sino lo registra entonces lo redirecciona al registrar de nuevo
            $this->load->view('signin');
        }
    }
    //Metodo apra validar si el correo o contraseña son correctos o no
    public function validation()
    {
        $this->load->model('login_model');

        if ($this->login_model->log_in_correctly())
        {
            return true;
        } 
        else 
        {
            $this->form_validation->set_message('validation', 'Incorrecto correo/contraseña.');
            return false;
        }
    }

    public function logout()
    {
        //Funcion para desloguearse de la sesion y carga el login.
        $this->session->sess_destroy();
        redirect('Main/login');
    }
      //Funcion para editar el perfil del usuario logueado
     public function editarPerfil($id=NULL)
     {
        //Funcion donde validamos todos los campos si son requeridos, y valdiar los tipos.
        $this->load->library('form_validation');


        $this->form_validation->set_rules('nombre', 'Nombre', 'required');

        $this->form_validation->set_rules('direccion', 'Direccion', '');

        $this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');

        $this->form_validation->set_rules('Rpassword', 'Contraseña', 'required|trim|alpha_numeric');

         //Campo para confirmar la contraseña
        $this->form_validation->set_rules('cpassword', 'Confirmar contraseña', 'required|trim|matches[password]');

        $this->session->set_flashdata("success"," Editado corectamente");

         
             //Llama el modelo para editar usuario donde obtiene el id de usuario y carga la variable data
            $this->login_model->editar_usuario_post();
            $data = $this->login_model->get_u($id);
            $this->session->set_userdata($data);
            //redirecciona a la vista de empleado
            redirect('Main/inicio');

    }

    //Editar perfil de empresa
    public function editarPerfilEmpresa($id=NULL)
    {
        //Libreria para validaciones
        $this->load->library('form_validation');


        $this->form_validation->set_rules('nombre', 'Nombre', 'required');

        $this->form_validation->set_rules('direccion', 'Direccion', '');

        $this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');

        $this->form_validation->set_rules('Rpassword', 'Contraseña', 'required|trim|alpha_numeric');

        $this->form_validation->set_rules('cpassword', 'Confirmar contraseña', 'required|trim|matches[password]');

        //Envio del mensaje de editado correctamente
        $this->session->set_flashdata("success"," Editado corectamente");


            $this->login_model->editar_usuario_post();
            $data = $this->login_model->get_u($id);
            $this->session->set_userdata($data);
            redirect('Main/empresa');

    }

      //Funcion para agregar curriculum de forma adecuada
      public function AgregarCurriculum()
    {
          //libreria para validar campos
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Usuario', 'required|is_unique[tbl_curriculum.idUsuario]');

        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        //Variable para llenar un info con los datos del usuario
        $info=$this->session->all_userdata();
          
        if ($this->form_validation->run())
        {
            //Sino existe curriculum lo agrega
            $this->session->set_flashdata("success"," Agregado corectamente");
            $this->login_model->agregarCurriculum();
            $this->load->view('inicio/inicio');
        }
        else
        {
             $this->session->set_flashdata("success"," Modificado corectamente");
            //Para actualizar el curriculum si ya existe
            $this->login_model->agregarCurriculum($info['id']);
            $this->load->view('inicio/inicio');
        }

    }
    
    
    
    //Funcion para agregar experiencia del candidato
    public function agregarExperiencia()
    {
          //Libreria de validaciones
        $this->load->library('form_validation');
        
        //Campo para insertar el idcurriculum en la BD este es extraido de acuerdo al usuario
        $this->form_validation->set_rules('idCurriculum', 'IdCurriculum', 'required');
          
        $this->form_validation->set_rules('puesto', 'Puesto', 'required');

        $this->form_validation->set_rules('empresas', 'Empresas', 'required');
          
        $this->form_validation->set_rules('dateInicio', 'DateInicio', 'required');
        
        $this->form_validation->set_rules('dateFinal', 'DateFinal', 'required');
          
        $this->form_validation->set_rules('observaciones', 'Observaciones', 'required');


          if ($this->form_validation->run())
          {
                $this->session->set_flashdata("success"," Agregado corectamente");
                $this->login_model->agregarExperiencia();
                redirect('inicio/inicio');
          }
          else
          {
              redirect('inicio/inicio');
          }
        
    }
    
    //agregar formaciones estudiantiles de candidatos
    public function agregarFormacion()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('idCurriculum', 'IdCurriculum', 'required');
          
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');

        $this->form_validation->set_rules('especialidad', 'Especialidad', 'required');
          
        $this->form_validation->set_rules('institucion', 'Institucion', 'required');
          
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');

        //Si se ejecuta correctamente las validaciones se agrega sino se redirecciona y muestra el error
        if ($this->form_validation->run())
          {
            $this->session->set_flashdata("success"," Agregado corectamente");
            $this->login_model->agregarFormaciones();
            redirect('inicio/inicio');
          }
        else
        {
             redirect('inicio/inicio');
        }
        
    }
    
    
    
}
?>
