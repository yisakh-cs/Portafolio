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
    public partial class frm_Save : Form
    {
        public frm_Save()
        {
            InitializeComponent();
        }

        private void btnSave1_Click(object sender, EventArgs e)
        {


          
                if (File.Exists("tmp.txt"))

                {
                  DialogResult hola=  MessageBox.Show("Hay una partida guarda desea continuar la misma?", "Partida del juego", MessageBoxButtons.YesNo);

                    if (hola == DialogResult.Yes)
                    {
                        Juego frm_jueg = new Juego();

                        frm_jueg.Show();
                        this.Close();
                    }

                    else if (hola == DialogResult.No)
                    {

                        File.Delete("tmp.txt");
                        Juego frm_juego = new Juego();

                        frm_juego.Show();
                        this.Close();
                    }
                    
                
            } else
            {
                DialogResult hola = MessageBox.Show("Abrir nueva partida?", "Partida del juego", MessageBoxButtons.YesNo);

                if (hola == DialogResult.Yes)
                {
                    Juego frm_jueg = new Juego();

                    frm_jueg.Show();
                    this.Close();
                }

            }





        }

        private void frm_Save_FormClosing(object sender, FormClosingEventArgs e)
        {
            DialogResult muestra = MessageBox.Show("Quiere volver?", "Volver juego", MessageBoxButtons.YesNo);
            if (muestra == DialogResult.Yes)
            {
                this.Close();
            }

        }

        private void btnVolver_Click(object sender, EventArgs e)
        {

            DialogResult muestra = MessageBox.Show("Quiere volver?", "Volver juego", MessageBoxButtons.YesNo);
            if (muestra == DialogResult.Yes)
            {
                this.Close();
            }

        }

        
        }
    }

