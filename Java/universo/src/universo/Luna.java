/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package universo;

import java.awt.Graphics;

/**
 *
 * @author Castro
 */
public class Luna extends Astro {
    private int distanciaPlaneta;

    /**
     * @return the distanciaPlaneta
     */
    public int getDistanciaPlaneta() {
        return distanciaPlaneta;
    }

    /**
     * @param distanciaPlaneta the distanciaPlaneta to set
     */
    public void setDistanciaPlaneta(int distanciaPlaneta) {
        this.distanciaPlaneta = distanciaPlaneta;
    }
    @Override
public void dibujar(int px, int py, Graphics g){
g.setColor(getColorBase());
g.fillOval(px,py, 2*(int)getRadio(),2*(int)getRadio());
g.drawString(getNombre(),px,py);
}
}
