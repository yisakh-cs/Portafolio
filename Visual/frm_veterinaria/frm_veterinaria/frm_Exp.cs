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
    public partial class frm_Exp : Form
    {
        public frm_Exp()
        {
            InitializeComponent();
        }

        private void btnA_Click(object sender, EventArgs e)
        {
            StreamWriter archivo = File.AppendText("expedientes.txt");

            string codE = txtCodExp.Text;
            string codM = txtCodM.Text;
            string codV = txtCodV.Text; ;
            string codT = txtCodT.Text; ;
            string fecha = txtFecha.Text;

            archivo.WriteLine(codE + "@" + codM + "@" + codV + "@" + codT + "@" + fecha + "#");
            archivo.Close();
        }

        private void btnSalir_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
    
}
