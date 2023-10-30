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

namespace Petvirtual
{
    public partial class Juego : Form
    {
        public Juego() { 

                    
            InitializeComponent();
        }
  
       
      
        private void tmrSalud_Tick(object sender, EventArgs e)

        {
            tmrSalud.Start();
            Random rd = new Random();
            int alcance = rd.Next(1, 8);
            if (alcance == 1||alcance==8)
            {
                PrbHambre.Increment(-1);
            }
            else if (alcance == 2||alcance==7)
            {
                PrbDiversion.Increment(-1);

            }else if (alcance == 3||alcance==5)
            {
                PrbEstudio.Increment(-1);
            }else if (alcance == 4||alcance==6)
            {
               
                this.PrbSalud.Increment(-1);
            }
           Mensaje();

          


            

        }
       

        private void BtnDormir_Click(object sender, EventArgs e)
        {
         

            if (PrbSalud.Value <= 6&& PrbSalud.Value>=4)
            {  
                    PrbSalud.Increment(4);

                }else if (PrbSalud.Value >= 3)
            {
                PrbSalud.Increment(4);

            }
        }

        private void btnEstudiar_Click(object sender, EventArgs e)
        {
            if (PrbDiversion.Value <= 7 && PrbDiversion.Value >= 4)
            {
                PrbEstudio.Increment(3);
                PrbDiversion.Increment(3);
            }else if (PrbDiversion.Value <=3&&PrbEstudio.Value!=0)
            {
                PrbEstudio.Increment(3);
                PrbDiversion.Increment(3);
            }
        }

        private void BtnJugar_Click(object sender, EventArgs e)
        {
            if (PrbDiversion.Value <= 7 && PrbDiversion.Value >= 4)
            {
                PrbDiversion.Increment(3);
            }
            else if (PrbDiversion.Value <=3&&PrbSalud.Value!=0)
            {
                PrbDiversion.Increment(3);
            }


        }

        private void BtnAlimentar_Click(object sender, EventArgs e)
        {
            if (PrbHambre.Value <= 7 && PrbHambre.Value >= 4)
            {
                PrbHambre.Increment(3);
            }
            else if (PrbHambre.Value <=3&&PrbHambre.Value!=0)
            {
                PrbHambre.Increment(3);
            }
            if (PrbSalud.Value <= 6 && PrbSalud.Value >= 4)
            {
                PrbSalud.Increment(4);

            }else  if (PrbSalud.Value <= 3&&PrbSalud.Value!=0)
            {
                PrbSalud.Increment(4);

            }
        }

        private void btnEjercitarse_Click(object sender, EventArgs e)
        {
            if (PrbSalud.Value <= 6 && PrbSalud.Value >= 4)
            {
                PrbSalud.Increment(4);

            }else      if (PrbSalud.Value <= 3&& PrbSalud.Value!=0)
            {
                PrbSalud.Increment(4);

            }
            if (PrbDiversion.Value <= 7 && PrbDiversion.Value >= 4)
            {
                PrbDiversion.Increment(3);
            }else if (PrbDiversion.Value <= 3&& PrbDiversion.Value!=0)
            {
                PrbDiversion.Increment(3);
           
            }
        }

        public void Mensaje()
        {
            if (PrbSalud.Value <= 3)
            {
                lblOK.Text = "Peligroso";
            }
            else
            {
                if (PrbSalud.Value == 0)
                {

                    DialogResult cerrar=  MessageBox.Show("Su mascaota murió","Fin de la partida",MessageBoxButtons.OK);
                    if (cerrar == DialogResult.OK)
                    {
                        Form1 pantalla = new Form1();
                        pantalla.Show();
                        this.Close();
                    }
                }
            }

            if (PrbHambre.Value <= 3)
            {
                lblOK.Text = "Peligroso";
            }
            else
            {
                if (PrbHambre.Value == 0)
                {

                    DialogResult cerrar = MessageBox.Show("Su mascaota murió", "Fin de la partida", MessageBoxButtons.OK);
                    if (cerrar == DialogResult.OK)
                    {
                        Form1 pantalla = new Form1();
                        pantalla.Show();
                        this.Close();
                    }
                }
            }

            if (PrbDiversion.Value <= 3)
            {
                lblOK.Text = "Peligroso";

            }
            else
            {
                if (PrbDiversion.Value == 0)
                {
               
                    DialogResult cerrar = MessageBox.Show("Su mascaota murió", "Fin de la partida", MessageBoxButtons.OK);
                    if (cerrar == DialogResult.OK)
                    {
                        Form1 pantalla = new Form1();
                        pantalla.Show();
                        this.Close();
                    }
                }

            }
            if (PrbEstudio.Value <= 3)
            {
                lblOK.Text = "Peligroso";
            }
            else
            {
                if (PrbEstudio.Value == 0)
                {

                    DialogResult cerrar = MessageBox.Show("Su mascaota murió", "Fin de la partida", MessageBoxButtons.OK);
                    if (cerrar == DialogResult.OK)
                    {
                        Form1 pantalla = new Form1();
                        pantalla.Show();
                        this.Close();
                    }
                }
            }
        }

        private void Juego_Load(object sender, EventArgs e)
        {
            if (File.Exists("tmp.txt")){
                StreamReader leer = File.OpenText("tmp.txt");
                string cadena = leer.ReadLine();
                string[] datos = new string[3];
                char[] separador = { ',' };
                bool act = false;
                while(cadena != null&& act!=true)
                {
                    datos = cadena.Split(separador);
                    if (cadena!=null)
                    {
                        act = true;
                    }
                 
                }
                PrbSalud.Value = Convert.ToInt32(datos[0]);
                PrbHambre.Value = Convert.ToInt32(datos[1]);
                PrbDiversion.Value = Convert.ToInt32(datos[2]);
                PrbEstudio.Value = Convert.ToInt32(datos[3]);



                leer.Close();
                
            }
                

        }

        private void btnGuardar_Click(object sender, EventArgs e)
        {
            
                StreamWriter temp = File.CreateText("tmp.txt");

                string div = Convert.ToString(PrbDiversion.Value);
                string est = Convert.ToString(PrbEstudio.Value);
                string ham = Convert.ToString(PrbHambre.Value);
                string salud = Convert.ToString(PrbSalud.Value);

                temp.WriteLine(salud + "," + ham + "," + div + "," + est);

            temp.Close();
            
        }   
    }
}
