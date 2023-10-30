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
namespace frm_veterinaria
{
    public partial class frm_agrMascotas : Form
    {
        public frm_agrMascotas()
        {
            InitializeComponent();
        }


        private void btnAgregar_Click_1(object sender, EventArgs e)
        {
            StreamWriter archivo = File.AppendText("mascotas.txt");
            string mascota = txtNom.Text;
            string codD = txtCodD.Text;
            string codEsp = "";
            string codM = txtCodM.Text;
            string gen = txtGen.Text;
            string color = txtColor.Text;
            string fecha = txtFecha.Text;
            string peso = txtPeso.Text;
            
            if (txtCodEsp.Text == "Perro")
            {
                codEsp = "P01";


            }
            else if (txtCodEsp.Text == "Gato")
            {
                codEsp = "G01";

            }
            else if (txtCodEsp.Text == "Bovino")
            {
                codEsp = "B23";

            }
            else if (txtCodEsp.Text == "Ave")
            {
                codEsp = "Av1";

            }

            archivo.WriteLine(mascota + "@" + codD + "@" + codEsp + "@" + codM + "@" + gen + "@" + color + "@" + fecha + "@" + peso + "#");
            archivo.Close();

        }
        private void btnSalir_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }

   
}  