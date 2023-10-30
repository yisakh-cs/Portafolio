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
    public partial class frm_BuscarD : Form
    {
        public frm_BuscarD()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            StreamReader sw;
            string[] duenno = new string[7];
            char[] separador = { '@' };
            string ced = txtBuscar.Text;
            bool time = false;
            string cadena;


            sw = File.OpenText("Dueño.txt");

            cadena = sw.ReadLine();

            while (cadena != null && time == false)
            {
                duenno = cadena.Split(separador);

                if (duenno[3] == ced)
                {
                    txtNom.Text = Convert.ToString(duenno[0].Trim());
                    txtAp1.Text = Convert.ToString(duenno[1].Trim());
                    txtAp2.Text = Convert.ToString(duenno[2].Trim());
                    txtCed.Text = Convert.ToString(duenno[3].Trim());
                    txtCod.Text = Convert.ToString(duenno[4].Trim());
                    txtDir.Text = Convert.ToString(duenno[5].Trim());
                    txtTel.Text = Convert.ToString(duenno[6].Trim());

                    time = true;


                }
                else

                    cadena = sw.ReadLine();


                sw.Close();
            }
        }
        private void btnEliminar_Click(object sender, EventArgs e)
        {
            StreamReader sw;
            string[] duenno = new string[7];
            char[] separador = { '@' };
            string ced = txtBuscar.Text;
            string cadena;
            StreamWriter temporal = File.CreateText("tmp.txt");

            sw = File.OpenText("Dueño.txt");

            cadena = sw.ReadLine();

            while (cadena != null)
            {
                duenno = cadena.Split(separador);

                if (ced != duenno[3])
                {

                    temporal.WriteLine(cadena);

                }

                cadena = sw.ReadLine();

            }
            temporal.Close();
            sw.Close();

            File.Delete("Dueño.txt");
            File.Move("tmp.txt", "Dueño.txt");
        }



    }
}


