using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Petvirtual
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnJugar_Click(object sender, EventArgs e)
        {
            DialogResult muestra = MessageBox.Show("Deseas iniciar una partida?", "Partida", MessageBoxButtons.YesNo);
            if (muestra == DialogResult.Yes)
            {
                frm_Save save = new frm_Save();
                save.Show();
            }
        }


    }
}
