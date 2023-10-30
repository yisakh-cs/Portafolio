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
    public partial class frm_BusEspecies : Form
    {
        public frm_BusEspecies()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {


            StreamReader sw;
            string[] esp = new string[1];
            char[] separador = { '@' };
            string codEsp = "";
            bool valor = false;
            string cadena;
            if (txtCodEsp.Text == "Perro")
            {
                codEsp = "P01";
            }
            else if (txtCodEsp.Text == "Gato")
            {
                codEsp = "G01";
            }
            else if (txtCodEsp.Text == "Bovino")
            {
                codEsp = "B23";
            }
            else if (txtCodEsp.Text == "Ave")
            {
                codEsp = "Av1";
            }
            try
            {
                sw = File.OpenText("especies.txt");

                cadena = sw.ReadLine();

                while (cadena != null && valor == false)
                {
                    esp = cadena.Split(separador);

                    if (esp[0] == codEsp)
                    {
                        txtDes.Text = Convert.ToString(esp[1].Trim());


                        valor = true;
                    }                    
                    else

                        cadena = sw.ReadLine();

                }
                sw.Close();
            }
            catch (FileNotFoundException)
            {


            }


        }

        private void btn_Click(object sender, EventArgs e)
        {

            StreamReader sw;
            StreamWriter temp = File.CreateText("tmp");
            string[] esp = new string[1];
            char[] separador = { '@' };
            string codEsp = "";
          
            string cadena;
            if (txtCodEsp.Text == "Perro")
            {
                codEsp = "P01";
            }
            else if (txtCodEsp.Text == "Gato")
            {
                codEsp = "G01";
            }
            else if (txtCodEsp.Text == "Bovino")
            {
                codEsp = "B23";
            }
            else if (txtCodEsp.Text == "Ave")
            {
                codEsp = "Av1";
            }
          
                sw = File.OpenText("especies.txt");

                cadena = sw.ReadLine();

                while (cadena != null )
                {
                    esp = cadena.Split(separador);

                    if (esp[0] != codEsp)
                    {
                        

                      
                    }
                  


                        cadena = sw.ReadLine();

                }
            temp.Close();
                sw.Close();
            File.Delete("especies.txt");
            File.Move("tmp.txt", "especies.txt");




        }
    }
}

