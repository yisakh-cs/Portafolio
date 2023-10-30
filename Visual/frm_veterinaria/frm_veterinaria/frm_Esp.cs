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
    public partial class frm_VerEsp : Form
    {
        public frm_VerEsp()
        {
            InitializeComponent();
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {

            StreamWriter archivo = File.AppendText("especies.txt");
           
            string cod = txtCodEsp.Text;
            string des = txtDes.Text;

            archivo.WriteLine(cod+"@"+des+"#");
            archivo.Close();
        }

        private void btnAgregar_Click_1(object sender, EventArgs e)
        {
            StreamWriter archivo = File.AppendText("especies.txt");

            string codEsp = "";
            string des = txtDes.Text;
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
            archivo.WriteLine(codEsp + "@" + des + "#");
            archivo.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }

}

