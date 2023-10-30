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
    public partial class frm_agregar : Form
    {
        public frm_agregar()
        {
            InitializeComponent();
        }

        public void Agregar()
        {

            StreamWriter archivo = File.AppendText("Dueño.txt");
            string duenno = txtNom.Text;
            string ap = txtAp1.Text;
            string ap2 = txtAp2.Text;
            string ced = txtCed.Text;
            string cod = txtCod.Text;
            string dir = txtDir.Text;
            string tel = txtTel.Text;


            archivo.WriteLine(duenno + "@" + ap + "@" + ap2 + "@" + ced + "@" + cod + "@" + dir + "@" + tel + "#");
            archivo.Close();

        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            Agregar();        

        }
    
    }
}
