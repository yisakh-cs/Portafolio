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
    public partial class frm_tratamiento : Form
    {
        public frm_tratamiento()
        {
            InitializeComponent();
        }

        private void btnAplicar_Click(object sender, EventArgs e)
        {
            StreamWriter archivo = File.AppendText("tratamineto.txt");
            string codT = txtCodT.Text;


            bool fv = false;
            StreamReader leer;
            string cadena;
            leer = File.OpenText("medicamentos.txt");
            cadena = leer.ReadLine();
            string[] me = new string[3];
            char[] split = { '@' };
            string dos = "";
            string codM = "";
            string ob = txtOb.Text;
            while (cadena != null && fv == false)
            {
                me = cadena.Split(split);
                if (me[1].Trim() == txtCodM.Text)
                {

                    dos = Convert.ToString(me[2].Trim());
                    codM = Convert.ToString(me[1].Trim());
                    fv = true;
                }

            }


            archivo.WriteLine(codT + "@" +codM + "@" + dos + "@" + ob + "#");
            archivo.Close();
            leer.Close();

        }

        private void btnSalir_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
    
}
