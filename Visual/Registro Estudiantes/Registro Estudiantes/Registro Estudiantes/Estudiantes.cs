/**********Laura Venegas y Yisakh************/
// +++++ Desarrolladores+++++++++++;




using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Registro_Estudiantes
{
    public partial class Estudiantes : Form
    {
        Sistema sistema;
        Estudiante estudiante;
        int pos;

        public Estudiantes()
        {
            InitializeComponent();
            sistema = new Sistema();
            estudiante = new Estudiante();
            
            //Se llena el comboBox desde e inicio
            llenarCombo();
        }

        public void llenarCombo()
        {
            //Se crea una variable para que lea el archivo txt
            using (StreamReader lector = new StreamReader("Carreras.txt"))
            {
                //Se recorre el archivo tomando los datos
                while (lector.Peek() >= 0)
                {
                    //Se agregan al comboBox
                    cmbCarrera.Items.Add(lector.ReadLine().Split(':')[0]);
                }
            }
        }

        public void limpiarCampos()
        {
            // Se limpian todos los textBox 
            mtbCedula.Text = "";
            txtNombre.Text = "";
            mtbTelefono.Text = "";
            txtDireccion.Text = "";
            txtEmail.Text = "";
            cmbCarrera.Text = "";
        }

        public void insertarEstudiante()
        {
            //Se crea una variable estudiante
            Estudiante nuevo = new Estudiante();
            
            nuevo.Nombre = txtNombre.Text;
            nuevo.Cedula = mtbCedula.Text;
            nuevo.Direccion = txtDireccion.Text;
            nuevo.Email = txtEmail.Text;
            nuevo.Telefono = mtbTelefono.Text;
            nuevo.Carrera = cmbCarrera.Text;
            
          
            if (sistema.Primero == null)// Y si es nulo
            {
               
                sistema.Primero = nuevo;
                sistema.Primero.Siguiente = null;

                sistema.Ultimo = nuevo;
                
            }
            else
            {
               
                sistema.Ultimo.Siguiente = nuevo;
                nuevo.Siguiente = null;
                sistema.Ultimo = nuevo; 
            }

            MessageBox.Show(" Estudiante ingresado correctamente ");//Mensaje al usuario

        }

        public void mostrarEstudiantes()
        {
            //Se crea una variable para recorrer la lista
            Estudiante actual = new Estudiante();
          
            actual = sistema.Primero;
           
            int columna = dtgEstudiantes.Rows.Count - 1;
            
            if (sistema.Primero != null)
            {
              
                dtgEstudiantes.Rows.Add();
              
                while (actual != null)
                 
                {
                      
                        dtgEstudiantes[0, columna].Value = actual.Cedula;
                        dtgEstudiantes[1, columna].Value = actual.Nombre;
                        dtgEstudiantes[2, columna].Value = actual.Telefono;
                        dtgEstudiantes[3, columna].Value = actual.Direccion;
                        dtgEstudiantes[4, columna].Value = actual.Email;
                        dtgEstudiantes[5, columna].Value = actual.Carrera;
                       
               
                         actual = actual.Siguiente;
                    
                }
               
            }
            else//Si actual es igual a nulo
            {
               
                MessageBox.Show("La Lista se encuentra vacía");
            }

        }

        public void buscarEstudiante(string buscar)
        {
        
            Estudiante actual = new Estudiante();
         
            actual = sistema.Primero;
      
            bool encontrar = false;

          
            if (sistema.Primero != null && encontrar != true)
            {
   
                while (actual != null)
                {
          
                    if (buscar == actual.Nombre || buscar == actual.Cedula) {
                        
                       
                        foreach (DataGridViewRow Row in dtgEstudiantes.Rows)
                        {
                            String strFila = Row.Index.ToString();
                     
                            string cedula = Convert.ToString(Row.Cells[0].Value);
                            string nombre = Convert.ToString(Row.Cells[1].Value);

                        
                            if (cedula == this.txtBuscar.Text || nombre == this.txtBuscar.Text)
                            {


                                MessageBox.Show("Selecione para modificar", " Dato encontrado", MessageBoxButtons.OK);

                                dtgEstudiantes.Rows[Convert.ToInt32(strFila)].DefaultCellStyle.BackColor = Color.LightGreen;
                               
                            }
                            else
                            {
                                
                                dtgEstudiantes.Rows[Convert.ToInt32(strFila)].DefaultCellStyle.BackColor = Color.White;
                            }
                        }
                      
                        encontrar = true;
                        
                    }
                    actual = actual.Siguiente;
                }
              
            }
            else
            {

                MessageBox.Show("Ingrese un dato valido para buscar", " Ha ocurrido un error ", MessageBoxButtons.OK);
            }
        }

        public void eliminarEstudiante(string buscar)
        {
            if (txtBuscar != null)
            {
                //Se crea la variable actual
                Estudiante actual = new Estudiante();
                //Se empieza desde el primer dato de la lista
                actual = sistema.Primero;
                //Se crea una variable que volvera nulo el dato buscado
                Estudiante anterior = new Estudiante();

                //Variable bolena para romper el ciclo
                bool encontrar = false;

            
                if (sistema.Primero != null && encontrar != true)
                {
                  
                    while (actual != null)
                    {
                        
                        if (buscar == actual.Nombre || buscar == actual.Cedula)
                        {

                          
                            if (actual == sistema.Primero)
                            {
                                sistema.Primero = sistema.Primero.Siguiente;
                                dtgEstudiantes.Rows.RemoveAt(pos = dtgEstudiantes.CurrentRow.Index);

                             
                            }
                            else if (actual == sistema.Ultimo)
                            {

                         
                                anterior.Siguiente = null;
                                sistema.Ultimo = anterior;
                                dtgEstudiantes.Rows.RemoveAt(pos = dtgEstudiantes.CurrentRow.Index);
                            }
                            else
                            {
                        
                                anterior.Siguiente = actual.Siguiente;
                                dtgEstudiantes.Rows.RemoveAt(pos = dtgEstudiantes.CurrentRow.Index);
                            }
                       
                            MessageBox.Show("El estudiante ha sido eliminado");
                            encontrar = true;

                        }
                        actual = actual.Siguiente;
                    }
                    if (!encontrar)
                    {
                        MessageBox.Show(" El estudiante no esta en la lista ");
                    }
                }
                else//Si no encuentra nada parecido es por que no hay estudiantes en la lista
                {
                    MessageBox.Show("La Lista se encuentra vacía");
                }
            }
            else {

                MessageBox.Show("Ingrese un dato para buscar", " Ha ocurrido un error ", MessageBoxButtons.OK);
            }
            
          
        }

     
        public void modificarEstudiante()
        {
            string buscar = txtBuscar.Text;

            Estudiante actual = new Estudiante();
            actual = sistema.Primero;
            bool encontrar = false;

            pos = dtgEstudiantes.CurrentRow.Index;


            if (sistema.Primero != null && encontrar != true)
            {

                while (actual != null)
                {

                    if (buscar == actual.Nombre || buscar == actual.Cedula)
                    {
                        //Si se encontró los datos solicitados se cambiaran por unos nuevos
                        actual.Cedula = mtbCedula.Text;
                        actual.Nombre = txtNombre.Text;
                        actual.Telefono = mtbTelefono.Text;
                        actual.Direccion = txtDireccion.Text;
                        actual.Email = txtEmail.Text;
                        actual.Carrera = cmbCarrera.Text;
                        //Se da el mensaje al usuario
                        MessageBox.Show("El estudiante ha sido Modificado","Completado",MessageBoxButtons.OK);
                        //Se rompe el ciclo
                        encontrar = true;
                    }
                    //Se actualiza el dataridView
                        dtgEstudiantes[0, pos].Value = actual.Cedula;
                        dtgEstudiantes[1, pos].Value = actual.Nombre;
                        dtgEstudiantes[2, pos].Value = actual.Telefono;
                        dtgEstudiantes[3, pos].Value = actual.Direccion;
                        dtgEstudiantes[4, pos].Value = actual.Email;
                        dtgEstudiantes[5, pos].Value = actual.Carrera;
                    
                       actual = actual.Siguiente;
                }

            }
            else
            {
                MessageBox.Show("No hay dato de busqueda");
            }
        }


        private void btn_Guardar_Click(object sender, EventArgs e)
        {
            try
            {
            
                if (txtNombre.Text == "" || txtNombre.Text == " " || mtbCedula.Text == "____-____")
                {
                    MessageBox.Show("No pueden haber campos como el de cedula o Nombre vacíos");
                }
                else
                {
                    insertarEstudiante();
                 
                    limpiarCampos();
                  
                    mostrarEstudiantes();
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message, " Ha ocurrido un error ", MessageBoxButtons.OK);
            }
        }

        private void btn_Buscar_Click(object sender, EventArgs e)
        {
            try
            {
                buscarEstudiante(txtBuscar.Text);
            }
            catch (Exception ez)
            {
                MessageBox.Show(ez.Message, "Ha ocurrido un error ", MessageBoxButtons.OK);
            }
        }

        private void btn_Eliminar_Click(object sender, EventArgs e)
        {
            try
            {
                eliminarEstudiante(txtBuscar.Text);
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message, "Ha ocurrido un error", MessageBoxButtons.OK);
            }
        }

    

 
        private void dtgEstudiantes_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            mtbCedula.Text = dtgEstudiantes.CurrentRow.Cells[0].Value.ToString();
            txtNombre.Text = dtgEstudiantes.CurrentRow.Cells[1].Value.ToString();
            mtbTelefono.Text = dtgEstudiantes.CurrentRow.Cells[2].Value.ToString();
            txtDireccion.Text = dtgEstudiantes.CurrentRow.Cells[3].Value.ToString();
            txtEmail.Text = dtgEstudiantes.CurrentRow.Cells[4].Value.ToString();
            cmbCarrera.Text = dtgEstudiantes.CurrentRow.Cells[5].Value.ToString();
        }

        private void btn_Modificar_Click(object sender, EventArgs e)
        {
            try
            {
                modificarEstudiante();
              
                limpiarCampos();
                
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message, "Ha ocurrido un error", MessageBoxButtons.OK);
            }
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            buscarEstudiante(txtBuscar.Text);
        }

        private void mtbCedula_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!char.IsDigit(e.KeyChar) && !char.IsControl(e.KeyChar))
            {
                e.Handled = true; // Esto evita que se escriba el carácter no válido.
            }
        }

        private void mtbTelefono_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!char.IsDigit(e.KeyChar) && !char.IsControl(e.KeyChar))
            {
                e.Handled = true; // Esto evita que se escriba el carácter no válido.
            }
        }
    }
}
