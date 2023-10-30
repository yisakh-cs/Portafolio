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
{ public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnRevisar_Click(object sender, EventArgs e)
        {

        }

        private void añadirToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_agregar agregar = new frm_agregar();
            agregar.Show();
        }

        private void buscarToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_BuscarD buscar = new frm_BuscarD();
            buscar.Show();
        }

        private void agregarToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_agrMascotas agregar = new frm_agrMascotas();
            agregar.Show();
        }

        private void buscarToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            frm_busMascota Buscar = new frm_busMascota();
            Buscar.Show();
        }

        private void agregarToolStripMenuItem3_Click(object sender, EventArgs e)
        {
            frm_VerEsp ver = new frm_VerEsp();
            ver.Show();
                
                }

        private void buscarToolStripMenuItem2_Click(object sender, EventArgs e)
        {
            frm_BusEspecies ver = new frm_BusEspecies();
            ver.Show();
        }

        private void agregarToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            frm_vete ver = new frm_vete();
            ver.Show();
        }

        private void verToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_BuscarVete buscar = new frm_BuscarVete();
            buscar.Show();

        }

        private void agregarToolStripMenuItem4_Click(object sender, EventArgs e)
        {
            frm_medicamento ver = new frm_medicamento();
            ver.Show();
        }

        private void verToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            frm_Agmedicamento ver = new frm_Agmedicamento();
            ver.Show();
        }

        private void agregarToolStripMenuItem5_Click(object sender, EventArgs e)
        {
            frm_tratamiento ver = new frm_tratamiento();
            ver.Show();
        }

        private void verToolStripMenuItem2_Click(object sender, EventArgs e)
        {
            frm_verTratamiento ver = new frm_verTratamiento();
            ver.Show();
        }

        private void agregarToolStripMenuItem6_Click(object sender, EventArgs e)
        {
            frm_Exp ver = new frm_Exp();
            ver.Show();
        }

        private void verToolStripMenuItem3_Click(object sender, EventArgs e)
        {

            frm_verExp ver = new frm_verExp();
            ver.Show();
        }


        private void agregarToolStripMenuItem2_Click(object sender, EventArgs e)
        {
            frm_citas ver = new frm_citas();
            ver.Show();
        }

        private void ayudaToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frm_ayuda ver = new frm_ayuda();
            ver.Show();
        }
    }
        
    
}   
