using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace Productos
{

    public partial class Form1 : Form
    {
        Conexion conexion;
        Producto prod;
        Categoria cat;
        Global misFunciones;

        public Form1()
        {
            InitializeComponent();

            try
            {
                conexion = new Conexion("bd_productos.db", Path.Combine(Application.StartupPath, @"..\..\db"));
                prod = new Producto();
                cat = new Categoria();
                misFunciones = new Global();
                //Cargamos los datos en el ListView y el Combo desde el inicio
                misFunciones.llenarListView(conexion, lstDatos, prod.buscar(""));
                misFunciones.llenarComboBox(conexion, cmbCategoria, cat.obtenerCategorias());
                //Inicializamos al combo con el primer item visible por defecto
                cmbCategoria.SelectedIndex = 0;
            }
            catch (Exception exc)
            {
                MessageBox.Show(exc.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void txtPrecio_KeyUp(object sender, KeyEventArgs e)
        {
            var txt = sender as TextBox; //Sender obtiene el objeto actual 
            try {
                int a = Int32.Parse(txt.Text); //Intentamos covertir el string a número 
            } catch(Exception exc){
                txt.Text = ""; //En caso de error se limpia el Campo
            }
        }

        private void txtBusqueda_TextChanged(object sender, EventArgs e)
        {
            try
            {
                if (txtBusqueda.Text != "")
                { //Filtramos por el dato que se digite en el campo de Búsqueda 
                    misFunciones.llenarListView(conexion, lstDatos, prod.buscar(txtBusqueda.Text));
                } else{
                    //Mostramos todos los datos 
                    lstDatos.Clear();
                    misFunciones.llenarListView(conexion, lstDatos, prod.buscar(""));
                }
            } catch(Exception exc){
                MessageBox.Show(exc.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
                }

        private void bynGuardar_Click(object sender, EventArgs e)
        {
            try {
                prod.guardar(conexion, txtCodigo.Text, txtNombre.Text, Int32.Parse(txtPrecio.Text), 
                Int32.Parse(txtCantidad.Text), cmbCategoria.Text);
                misFunciones.llenarListView(conexion, lstDatos, prod.buscar(""));

                MessageBox.Show("Guardado exitosamente", "Info", MessageBoxButtons.OK, MessageBoxIcon.Information); } catch (Exception exc) { MessageBox.Show(exc.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error); }
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {
            try { 
            prod.eliminar(conexion, txtCodigo.Text);
            misFunciones.llenarListView(conexion, lstDatos, prod.buscar(""));

            //Vaciamos los campos al eliminar 
            txtCodigo.Text="";
            txtNombre.Text="";
            txtPrecio.Text="";
            txtCantidad.Text="";
            cmbCategoria.SelectedIndex = 0;
        }catch(Exception exc){
            MessageBox.Show(exc.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
 }
        }

        private void lstDatos_DoubleClick(object sender, EventArgs e)
        {
            //Cargamos los datos en los texts basados en la fila seleccionada del ListView
            txtCodigo.Text = lstDatos.SelectedItems[0].Text;
            txtNombre.Text = lstDatos.SelectedItems[0].SubItems[1].Text;
            txtPrecio.Text = lstDatos.SelectedItems[0].SubItems[2].Text;
            txtCantidad.Text = lstDatos.SelectedItems[0].SubItems[3].Text;
            cmbCategoria.Text = lstDatos.SelectedItems[0].SubItems[4].Text;
        }

      
    }
}
