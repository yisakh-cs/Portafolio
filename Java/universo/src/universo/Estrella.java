/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package universo;

import java.awt.Color;
import java.awt.Graphics;
import java.util.ArrayList;

/**
 *
 * @author Castro
 */
public class Estrella extends Astro{
    private int posX;
    private int posY;
    private ArrayList<Planeta> listaPlanetas;
public Estrella(){
this.listaPlanetas = new ArrayList<>();


}


    /**
     * @return the posX
     */
    public int getPosX() {
        return posX;
    }

    /**
     * @param posX the posX to set
     */
    public void setPosX(int posX) {
        this.posX = posX;
    }

    /**
     * @return the posY
     */
    public int getPosY() {
        return posY;
    }

    /**
     * @param posY the posY to set
     */
    public void setPosY(int posY) {
        this.posY = posY;
    }

    /**
     * @return the listaPlanetas
     */
    public ArrayList<Planeta> getListaPlanetas() {
        return listaPlanetas;
    }

    /**
     * @param listaPlanetas the listaPlanetas to set
     */
    public void setListaPlanetas(ArrayList<Planeta> listaPlanetas) {
        this.listaPlanetas = listaPlanetas;
    }
    
      @Override
    // dibuja con color
    public void dibujar(int pX, int pY, Graphics g){
g.setColor(getColorBase());
g.fillOval(pX,pY, 2*(int)getRadio(),2*(int)getRadio());
g.drawString(getNombre(),pX,pY);


for(int i=0; i<getListaPlanetas().size();i++){
    
    double angle = Math.random()*Math.PI*2;
    double x=Math.cos(angle)*getListaPlanetas().get(i).getDistanciaEstrella();
      double y=Math.sin(angle)*getListaPlanetas().get(i).getDistanciaEstrella();
    
      g.setColor(Color.darkGray);
      g.drawOval(pX - getListaPlanetas().get(i).getDistanciaEstrella()+(int)getListaPlanetas().get(i).getRadio(),
      pY- getListaPlanetas().get(i).getDistanciaEstrella()+(int)getListaPlanetas().get(i).getRadio(),
      getListaPlanetas().get(i).getDistanciaEstrella()*2,
      getListaPlanetas().get(i).getDistanciaEstrella()*2 );
      
      
      
      getListaPlanetas().get(i).dibujar(pX+(int)x, pY+(int)y,g);
}

    }
public void agregarPlaneta(Planeta plan1){
    getListaPlanetas().add(plan1);
    }
    }

