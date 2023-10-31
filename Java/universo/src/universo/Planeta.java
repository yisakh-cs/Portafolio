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
public class Planeta extends Astro {
    private boolean habitable;
    private int distanciaEstrella;
    private int anillos;
    private float velocidad;
    private float periodoOrb;
    private String categoria;
    private ArrayList<Luna> listaLunas;
    
    public Planeta(){
    this.listaLunas= new ArrayList<>();
    }
    /**
     * @return the habitable
     */
    public boolean isHabitable() {
        return habitable;
    }

    /**
     * @param habitable the habitable to set
     */
    public void setHabitable(boolean habitable) {
        this.habitable = habitable;
    }

    /**
     * @return the distanciaEstrella
     */
    public int getDistanciaEstrella() {
        return distanciaEstrella;
    }

    /**
     * @param distanciaEstrella the distanciaEstrella to set
     */
    public void setDistanciaEstrella(int distanciaEstrella) {
        this.distanciaEstrella = distanciaEstrella;
    }

    /**
     * @return the anillos
     */
    public int getAnillos() {
        return anillos;
    }

    /**
     * @param anillos the anillos to set
     */
    public void setAnillos(int anillos) {
        this.anillos = anillos;
    }

    /**
     * @return the velocidad
     */
    public float getVelocidad() {
        return velocidad;
    }

    /**
     * @param velocidad the velocidad to set
     */
    public void setVelocidad(float velocidad) {
        this.velocidad = velocidad;
    }

    /**
     * @return the periodoOrb
     */
    public float getPeriodoOrb() {
        return periodoOrb;
    }

    /**
     * @param periodoOrb the periodoOrb to set
     */
    public void setPeriodoOrb(float periodoOrb) {
        this.periodoOrb = periodoOrb;
    }

    /**
     * @return the categoria
     */
    public String getCategoria() {
        return categoria;
    }

    /**
     * @param categoria the categoria to set
     */
    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    /**
     * @return the listaLunas
     */
    public ArrayList<Luna> getListaLunas() {
        return listaLunas;
    }

    /**
     * @param listaLunas the listaLunas to set
     */
    public void setListaLunas(ArrayList<Luna> listaLunas) {
        this.listaLunas = listaLunas;
    }
    
    
    
    
    @Override
    // dibuja con color
    public void dibujar(int pX, int pY, Graphics g){
g.setColor(getColorBase());
g.fillOval(pX,pY, 2*(int)getRadio(),2*(int)getRadio());
g.drawString(getNombre(),pX,pY);
//dibuja las lunas en lista

for(int i=0; i<getListaLunas().size();i++){
    
    double angle = Math.random()*Math.PI*2;
    double x=Math.cos(angle)*getListaLunas().get(i).getDistanciaPlaneta();
      double y=Math.sin(angle)*getListaLunas().get(i).getDistanciaPlaneta();
    
      g.setColor(Color.darkGray);
      g.drawOval(pX - getListaLunas().get(i).getDistanciaPlaneta()+(int)getListaLunas().get(i).getRadio(),
      pY- getListaLunas().get(i).getDistanciaPlaneta()+(int)getListaLunas().get(i).getRadio(),
      getListaLunas().get(i).getDistanciaPlaneta()*2,
      getListaLunas().get(i).getDistanciaPlaneta()*2 );
      
      
      
      getListaLunas().get(i).dibujar(pX+(int)x, pY+(int)y,g);
}

    }

    public void agregarLuna(Luna lun){
    getListaLunas().add(lun);
    }
}