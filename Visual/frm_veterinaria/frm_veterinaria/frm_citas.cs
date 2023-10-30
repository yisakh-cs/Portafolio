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
    public partial class frm_citas : Form
    {
        public frm_citas()
        {
            InitializeComponent();
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            StreamWriter archivo = File.AppendText("citas.txt");

            string codE = txtCodC.Text;
            string codM = txtCodM.Text;
            string codV = txtCodV.Text; ;
            string codT = txtCodD.Text; ;
            string fecha = txtFecha.Text;
            string hora = txtHora.Text;

            archivo.WriteLine(codE + "@" + codM + "@" + codV + "@" + codT + "@" + fecha + "#");
            archivo.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
}
