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
    public partial class frm_verExp : Form
    {
        public frm_verExp()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {

            StreamReader leer;
            bool ciclo = false;
            string cadena;
            string[] datos = new string[5];
            char[] split = { '@' };
            leer = File.OpenText("expediente.txt");
            cadena = leer.ReadLine();
            while (cadena != null && ciclo == false)
            {
                datos = cadena.Split(split);
                if (cadena == txtBuscar.Text)
                {
                    Exp.Text = Convert.ToString(datos[0].Trim());
                    mas.Text = Convert.ToString(datos[1].Trim());
                    vet.Text = Convert.ToString(datos[2].Trim());
                    tra.Text = Convert.ToString(datos[3].Trim());
                    fecha.Text = Convert.ToString(datos[4].Trim());

                    ciclo = true;
                }
                else
                    cadena = leer.ReadLine();


            }
            leer.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {

            StreamReader leer;
            StreamWriter temporal = File.CreateText("tmp.txt");
            string cadena;
            string[] datos = new string[5];
            char[] split = { '@' };
            leer = File.OpenText("expediente.txt");
            cadena = leer.ReadLine();
            while (cadena != null )
            {
                datos = cadena.Split(split);
                if (cadena != txtBuscar.Text)
                {
                    temporal.WriteLine();

                    
                }
               else
                    cadena = leer.ReadLine();


            }
            leer.Close();
            temporal.Close();

            File.Delete("expedientes.txt");
            File.Move("tmp.txt", "expedientes.txt");
        }
    }
    
}
