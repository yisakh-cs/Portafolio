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
    public partial class frm_Agmedicamento : Form
    {
        public frm_Agmedicamento()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            StreamReader leer;
            string[] esp = new string[3];
            char[] separador = { '@' };

            string cod = txtIngresar.Text;
            bool time = false;
            string cadena;

            leer = File.OpenText("medicamentos.txt");

            cadena = leer.ReadLine();

            while (cadena != null && time == false)
            {
                esp = cadena.Split(separador);

                if (esp[1] == cod)
                {

                    txtNom.Text = Convert.ToString(esp[0]);
                    txtDos.Text = Convert.ToString(esp[2]);
                    time = true;


                }
                else

                    cadena = leer.ReadLine();

            }
            leer.Close();
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {
            StreamReader leer;
            string[] esp = new string[2];
            char[] separador = { '@' };
            StreamWriter temporal = File.CreateText("tmp.txt");
            string cod = txtIngresar.Text;
            bool time = false;
            string cadena;

            leer = File.OpenText("medicamentos.txt");

            cadena = leer.ReadLine();

            while (cadena != null && time == false)
            {
                esp = cadena.Split(separador);

                if (esp[1] != cod)
                {
                    temporal.WriteLine(cadena);


                }
                else

                    cadena = leer.ReadLine();

            }
            temporal.Close();
            
            leer.Close();
            File.Delete("medicamentos.txt");
            File.Move("tmp.txt", "medicamentos.txt");
        }
    }
}
