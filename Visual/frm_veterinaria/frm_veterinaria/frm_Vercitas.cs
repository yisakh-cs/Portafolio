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
    public partial class frm_Vercitas : Form
    {
        public frm_Vercitas()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {

            string[] seg = new string[6];
            StreamReader leer = File.OpenText("citas.txt");
            char[] separador = { '@' };
            string cod = txtBuscar.Text;
            bool valor = false;
            string cadena;
            cadena = leer.ReadLine();



            while (cadena != null && valor == false)
            {
                seg = cadena.Split(separador);

                if (seg[0].Trim() == cod.Trim())
                {
                    txtCodC.Text = Convert.ToString(seg[0].Trim());
                    txtCodM.Text = Convert.ToString(seg[1].Trim());
                    txtCodV.Text = Convert.ToString(seg[2].Trim());
                    txtCodD.Text = Convert.ToString(seg[3].Trim());
                    txtFecha.Text = Convert.ToString(seg[4].Trim());
                    txtHora.Text = Convert.ToString(seg[5].Trim());
                    valor = true;

                }
                else

                    cadena = leer.ReadLine();

            }
            leer.Close();

        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {

            string[] seg = new string[6];
            StreamReader leer = File.OpenText("citas.txt");
            char[] separador = { '@' };
            string cod = txtBuscar.Text;
            StreamWriter temporal = File.CreateText("tmp.txt");
            string cadena;
            cadena = leer.ReadLine();



            while (cadena != null)
            {
                seg = cadena.Split(separador);

                if (seg[0].Trim() != cod.Trim())
                {
                    temporal.WriteLine(cadena);

                }
                else

                    cadena = leer.ReadLine();

            }
            leer.Close();
          temporal.Close();

            File.Delete("citas.txt");
            File.Move("tmp.txt", "citas.txt");
        }
    }
}
