using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Form_Asteroids
{
    public partial class Form : System.Windows.Forms.Form
    {
        Universo universo;
        Nave nave;
        public Form()
        {
            InitializeComponent();
        }
        void comprobarChoque()
        {
            Bala bala_temporal = nave.listaBalas.primero;
            Asteroide asteroide_temporal = universo.listaAsteroides.primero;
            if (bala_temporal != null)
            {
                do
                {
                    bala_temporal.mover();
                    if (bala_temporal.getPosY() < 0)
                    {
                        //Si la bala sale del escenario se elimina
                        nave.listaBalas.eliminar(bala_temporal);
                        bala_temporal.borrarBala();
                    }
                    else
                    {
                        if (asteroide_temporal != null)
                        {
                            //Por cada bala debemos comprobar si choca examinando cada asteroide
                            do
                            {
                                if (bala_temporal.getPosY() < asteroide_temporal.getPosY()
                                && bala_temporal.getPosX() > asteroide_temporal.getPosX() - bala_temporal.getAncho()
                                && bala_temporal.getPosX() < asteroide_temporal.getPosX() + asteroide_temporal.getAncho())
                                {
                                    //Si está dentro de las coordenadas de choque se elimina la balay el asteroide
                                    nave.listaBalas.eliminar(bala_temporal);
                                    bala_temporal.borrarBala();
                                    universo.listaAsteroides.eliminar(asteroide_temporal);
                                    asteroide_temporal.borrarAsteroide();
                                }
                                else
                                {
                                }
                                //recorremos la lista de asteroides para comprobar
                                asteroide_temporal = asteroide_temporal.getSiguiente();
                            } while (asteroide_temporal != null);
                        }
                    }
                    bala_temporal = bala_temporal.getSiguiente();
                } while (bala_temporal != null);
            }
        }

        private void btnIniciar_Click(object sender, EventArgs e)
        {
            universo = new Universo(0, 0, ptb_Escenario.Width, ptb_Escenario.Height, Color.Black, ptb_Escenario);
            nave = new Nave((universo.getAncho() / 2) - 20, universo.getAlto() - 60, 40, 40, universo);
            tmr_velocidad.Enabled = true;
            universo.getEscenario().Focus();
        }

        private void ptb_Escenario_KeyDown(object sender, KeyEventArgs e)
        {
            switch (e.KeyCode.ToString())
            {
                case "D":
                    nave.mover('D');
                    break;
                case "A":
                    nave.mover('I');
                    break;
                case "W":
                    nave.disparar();
                    break;
            }
        }

        private void tmr_velocidad_Tick(object sender, EventArgs e)
        {
            comprobarChoque();

        }
    }
}
