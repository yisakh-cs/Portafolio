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
    public partial class frm_medicamento : Form
    {
        public frm_medicamento()
        {
            InitializeComponent();
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            StreamWriter archivo = File.AppendText("medicamentos.txt");
            string nombre = txtNom.Text;
            string cod = txtCod.Text;
            string dosis = txtDosis.Text;

            archivo.WriteLine(nombre + "@" + cod + "@" + dosis + "#");
            archivo.Close();
        }

        private void btnSalir_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

       
    }

    }

