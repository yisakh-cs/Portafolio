<?php

class Login_model extends CI_Model
{
    //Metodo constructor donde carga la conexion a la DB
    public function __construct()
    {
        $this->load->database();
    }
    //Verifica si se loguea correctamente
    public function log_in_correctly()
    {
        //Hace la sentencia de obtener el correo y password que sean iguales a los input de la tabla informacion
        $this->db->where('email', $this->input->post('correo'));
        $this->db->where('password', $this->input->post('password'));
        $query = $this->db->get('tbl_informacion');

        if ($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    //Funcion para iniciar sesion 
    public function iniciarSesion()
    {
            $this->load->helper('url');
            //Crea un data con todos los datos del array que serian los campos de la base de datos igualados a los input
            $data = array(
                'cedula' => $this->input->post('cedula'),
                'usuario' => $this->input->post('Nusuario'),
                'nombre' => $this->input->post('nombre'),
                'tipo'=>$this->input->post('tipo'),
                'password'=>$this->input->post('password'),

                'telefono'=>$this->input->post('telefono'),
                'email' => $this->input->post('email'),
                'direccion'=>$this->input->post('direccion'),

          );
         //Insertar el data a la tabla informacion
          return $this->db->insert('tbl_informacion', $data);
    }
    //Funcion para editar el post de usuario de acuerdo a la cedula
    public function editar_usuario_post()
    {
        $data = array(
                'usuario' => $this->input->post('Nusuario'),
                'nombre' => $this->input->post('nombre'),
                'tipo'=>$this->input->post('tipo'),
                'password'=>$this->input->post('rpassword'),
                'telefono'=>$this->input->post('telefono'),
                'email' => $this->input->post('email'),
                'direccion'=>$this->input->post('direccion'),
        );
            $cedula = $this->input->post('cedula');
            $this->db->where('cedula', $cedula);
            return $this->db->update('tbl_informacion', $data);


    }

    //obtener el usuario de acuerdo al correo
    public function get_user($correo = FALSE)
    {

	  if ($correo === FALSE)
	   {
	       $query = $this->db->get('tbl_informacion');
	       return $query->result_array();
	   }

	   $query = $this->db->get_where('tbl_informacion', array('email' => $correo));
	   return $query->row_array();
    }
    
    public function get_u($id = FALSE)
    {
      $query = $this->db->get_where('tbl_informacion', array('id' => $id));
      return $query->row_array();
    }
    
    //Obtener las ofertas realizando conexiones entre bases de datos.
      public function get_ofertas()
    {
         $query2 = "SELECT tbl_ofertas.id, tbl_ofertas.nombrePuesto,tbl_ofertas.idUsuario, tbl_ofertas.ubicacion, tbl_ofertas.descripcion, tbl_ofertas.fechaOferta, tbl_ofertas.duracionContrato, tbl_ofertas.horario, tbl_ofertas.salario, tbl_categoria.categoria, tbl_informacion.nombre,tbl_categoria.vacantes FROM tbl_ofertas INNER JOIN tbl_informacion  ON tbl_ofertas.idUsuario = tbl_informacion.id INNER JOIN tbl_categoria ON tbl_categoria.id = tbl_ofertas.idCategoria WHERE estado = 'A'";
         $result = $this->db->query($query2);
         return $result->result_array();
    }

        public function get_ofertasEmpresa()
    {
         $datos = $this->session->all_userdata();
         $query2 = "SELECT tbl_ofertas.estado, tbl_ofertas.id,tbl_ofertas.nombrePuesto,tbl_ofertas.idUsuario, tbl_ofertas.ubicacion, tbl_ofertas.descripcion, tbl_ofertas.fechaOferta, tbl_ofertas.duracionContrato, tbl_ofertas.horario, tbl_ofertas.salario, tbl_categoria.categoria, tbl_informacion.nombre,tbl_categoria.vacantes FROM tbl_ofertas INNER JOIN tbl_informacion  ON tbl_ofertas.idUsuario = tbl_informacion.id INNER JOIN tbl_categoria ON tbl_categoria.id = tbl_ofertas.idCategoria WHERE  idUsuario = $datos[id]";
         $result = $this->db->query($query2);
         return $result->result_array();

    }
    //obtiene la categorias de empleos para listarlas en un combo box de ser necesario
    public function get_category()
    {
      $query = $this->db->get('tbl_categoria');
      return $query->result_array();
    }
    
    //Agregar curriculum verificando si existe ya lo actualiza y sino lo inserta
      public function agregarCurriculum($id = FALSE)
    {
        $data = array(
            'idUsuario' => $this->input->post('id'),
            'descripcion' => $this->input->post('descripcion')
        );
        if ($id === FALSE) 
        {
            return $this->db->insert('tbl_curriculum', $data);
            
        } else 
        {
            $this->db->where('idUsuario', $id);
            return $this->db->update('tbl_curriculum', $data);
        }
    } 
    
    //Agregar experiencia del candidatos llenando un array de datos y insertandolos 
     public function agregarExperiencia($id = FALSE)
     {
        $data = array(
            'idCurriculum' => $this->input->post('idC'),
            'puesto' => $this->input->post('puesto'),
            'empresa' => $this->input->post('empresas'),
            'fechaInicio' => $this->input->post('dateInicio'),
             'fechaFinal' => $this->input->post('dateFinal'),
             'descripcion' => $this->input->post('observaciones')
        );
            return $this->db->insert('tbl_experiencias', $data);
            

    }
    //agregar formaciones de candidatos llenando un data con los valores de un array llenados con los input de la base de datos
    public function agregarFormaciones($id = FALSE)
    {
        $data = array(
            'idCurriculum' => $this->input->post('idC'),
            'titulo' => $this->input->post('titulo'),
            'especialidad' => $this->input->post('especialidad'),
            'institucion' => $this->input->post('institucion'),
             'fecha' => $this->input->post('dateTrabajo')
        );

            return $this->db->insert('tbl_formacionesacademicas', $data);
            

        
    }
    //Cambiar el curriculum de acuerdo al id esto sirve para la actualización
    public function set_curri($id)
    { 
        $query = $this->db->get_where('tbl_curriculum', array('idUsuario' => $id));
        return $query->row_array();
    }
    //Obtiene los requisitos donde el idOferta sea igual al que se le envia
    public function get_req($id)
    {
      $query = $this->db->get_where('tbl_requisitos', array('idOferta' => $id));
      return $query->row_array();
    }

    //Realiza la postulacion de candidatos en la tabla postulaciones
    public function postular($id)
    {
      $datos = $this->session->all_userdata();
      $query = $this->db->get_where('tbl_ofertas', array('id' => $id));
      $info=$query->row_array();


                // array de insertar candidatos
                $data= array(
                "idUsuario"=>$datos['id'],
                "idOferta"=>$id
              );

              return $this->db->insert('tbl_postulados', $data);
        $this->session->set_flashdata("success"," Postulado corectamente");

    }
    
    //Funcion para obtener el curriculum del usuario para generar el reporte
    public function get_curriculum()
    {
         $datos = $this->session->all_userdata();
         $query2 = "SELECT tbl_curriculum.id, tbl_informacion.nombre, tbl_informacion.cedula, tbl_informacion.email, tbl_curriculum.descripcion, tbl_curriculum.idUsuario, tbl_experiencias.puesto,tbl_experiencias.empresa, tbl_experiencias.fechaInicio, tbl_experiencias.fechaFinal, tbl_experiencias.descripcion, tbl_formacionesacademicas.titulo, tbl_formacionesacademicas.especialidad,tbl_formacionesacademicas.institucion, tbl_formacionesacademicas.fecha FROM tbl_curriculum INNER JOIN tbl_experiencias  ON tbl_curriculum.id = tbl_experiencias.idCurriculum INNER JOIN tbl_formacionesacademicas ON tbl_formacionesacademicas.idCurriculum = tbl_curriculum.id INNER JOIN tbl_informacion ON tbl_curriculum.idUsuario = tbl_informacion.id";
        
         $query = $this->db->query($query2);
          return $query->row_array();
    }
     //Funcion para obtener la empresa del usuario para generar el reporte
    public function get_Empresa()
    {
         $datos = $this->session->all_userdata();
         $query2 = "SELECT tbl_informacion.nombre, tbl_informacion.cedula, tbl_informacion.email, tbl_informacion.usuario,tbl_informacion.telefono, tbl_informacion.direccion FROM tbl_informacion where tbl_informacion.id = $datos[id]";
        
         $query = $this->db->query($query2);
          return $query->row_array();
    }
    //Funcion para insertar oferta por parte de la empresa
     public function insertOfertaEmpresa()
    {
        $data = array(
                'idUsuario' => $this->input->post('idUsuario'),
                'idCategoria' => $this->input->post('categoria'),
                'nombrePuesto'=>$this->input->post('puesto'),
                'descripcion'=>$this->input->post('descripcion'),
                'fechaOferta'=>$this->input->post('dateOferta'),
                'duracionContrato' => $this->input->post('contrato'),
                'horario'=>$this->input->post('horario'),
                'salario'=>$this->input->post('salario'),
                'ubicacion'=>$this->input->post('canton'),
                'estado'=>$this->input->post('estado')
        );
            return $this->db->insert('tbl_ofertas', $data);


    }
    
    //Funcion para editar oferta por parte de la empresa
     public function editarOfertaEmpresa()
    {
        $data = array(
                'id'=>$this->input->post('idOfertas'),
                'idUsuario'=>$this->input->post('idUsuario'),
                'idCategoria'=>$this->input->post('categoria'),
                'nombrePuesto'=>$this->input->post('puesto'),
                'descripcion'=>$this->input->post('descripcion'),
                'fechaOferta'=>$this->input->post('dateOferta'),
                'duracionContrato' => $this->input->post('contrato'),
                'horario'=>$this->input->post('horario'),
                'salario'=>$this->input->post('salario'),
                'ubicacion'=>$this->input->post('canton'),
                'estado'=>$this->input->post('estado')
        );
            $ids = $this->input->post('idOfertas');
            $this->db->where('id', $ids);
            return $this->db->update('tbl_ofertas', $data);


    }
    
    
     //Obtiene las ofertas donde el id sea igual al que se le envia para tomarla en el url
    public function add_ofert($id=FALSE)
    {
      $query = $this->db->get_where('tbl_ofertas', array('id' => $id));
      return $query->row_array();
    }
        //Agregar requisitos a las ofertas verificando si existe ya lo actualiza y sino lo inserta
      public function agregarRequisitosEmpresa($id = FALSE)
    {
        $data = array(
            'idOferta'=>$this->input->post('idOferta'),
              'gradoEstudio'=>$this->input->post('gradoEstudio'),
             'experiencia'=>$this->input->post('experiencia'),
             'idioma'=>$this->input->post('idioma'),
             'aspectosGenerales'=>$this->input->post('AspectGeneral')
        );
        

                 return $this->db->insert('tbl_requisitos', $data);  
          
    } 
    //Funcion para editar los requisitos de las empresas
    public function editarRequisitosEmpresa($id = FALSE)
    {
        $data = array(
            'idOferta'=>$this->input->post('idOferta'),
              'gradoEstudio'=>$this->input->post('gradoEstudio'),
             'experiencia'=>$this->input->post('experiencia'),
             'idioma'=>$this->input->post('idioma'),
             'aspectosGenerales'=>$this->input->post('AspectGeneral')
        );
        
                $ids = $this->input->post('idOferta');
                $this->db->where('idOferta', $ids);
                return $this->db->update('tbl_requisitos', $data);     
    }
    //Funcion para recopilar los datos de la tabla requisitos
    public function get_idOfertaRequisitos()
    {
      $query = $this->db->get_where('tbl_requisitos');
      return $query->row_array();
    }
    
 }
?>
