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
    public partial class frm_busMascota : Form
    {
        public frm_busMascota()
        {
            InitializeComponent();
        }

        private void frm_busMascota_Load(object sender, EventArgs e)
        {

        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            StreamReader sw;
            StreamReader leer = File.OpenText("Dueño.txt");
            string[] duenno = new string[8];
            string[] archivo = new string[7];
            char[] separador = { '@' };
            string ced = txtBuscar.Text;
            bool time = false;
            string cadena;
            string otro;

            
                sw = File.OpenText("mascotas.txt");

                cadena = sw.ReadLine();

                while (cadena != null && time == false)
                {
                    duenno = cadena.Split(separador);

                    if (duenno[1] == ced)
                    {
                        txtNom.Text = Convert.ToString(duenno[0].Trim());

                        txtCodEsp.Text = Convert.ToString(duenno[2].Trim());
                        txtCodM.Text = Convert.ToString(duenno[3].Trim());
                        txtGen.Text = Convert.ToString(duenno[4].Trim());
                        txtColor.Text = Convert.ToString(duenno[5].Trim());
                        txtFecha.Text = Convert.ToString(duenno[6].Trim());
                        txtPeso.Text = Convert.ToString(duenno[7].Trim());


                        time = true;

                    }
                    else

                        cadena = sw.ReadLine();

                }
                otro = leer.ReadLine();
                bool dos = false;

                while (otro != null && dos == false)
                {
                    archivo = otro.Split(separador);

                    if (ced == archivo[4])
                    {
                        txtCodD.Text = Convert.ToString(archivo[4].Trim());
                        dos = true;
                    }
                    else
                    {
                        otro = leer.ReadLine();
                    }


                }
                leer.Close();
                sw.Close();
          
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {
            StreamReader sw;
            StreamWriter temporal = File.CreateText("tmp.txt");
            string[] duenno = new string[8];
            string[] archivo = new string[7];
            char[] separador = { '@' };
            string ced = txtBuscar.Text;
            string cadena;
            sw = File.OpenText("mascotas.txt");

            cadena = sw.ReadLine();

            while (cadena != null)
            {
                duenno = cadena.Split(separador);

                if (duenno[1] != ced)
                {
                    temporal.WriteLine(cadena);
                }

                cadena = sw.ReadLine();


            }
            temporal.Close();
            sw.Close();

            File.Delete("mascotas.txt");
            File.Move("tmp.txt", "mascotas.txt");
        }
    }

}
