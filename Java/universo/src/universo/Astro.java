/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package universo;

import java.awt.Color;
import java.awt.Graphics;


/**
 *
 * @author Castro
 */
public abstract class Astro {
    private String codigo;
    private String nombre;
    private float gravedad;
    private float radio;
    private float masa;
    private float volumen;
    private Color colorBase;
    private int tempProm;
    private String info;

    /**
     * @return the codigo
     */
    public String getCodigo() {
        return codigo;
    }

    /**
     * @param codigo the codigo to set
     */
    public void setCodigo(String codigo) {
        this.codigo = codigo;
    }

    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * @param nombre the nombre to set
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * @return the gravedad
     */
    public float getGravedad() {
        return gravedad;
    }

    /**
     * @param gravedad the gravedad to set
     */
    public void setGravedad(float gravedad) {
        this.gravedad = gravedad;
    }

    /**
     * @return the radio
     */
    public float getRadio() {
        return radio;
    }

    /**
     * @param radio the radio to set
     */
    public void setRadio(float radio) {
        this.radio = radio;
    }

    /**
     * @return the masa
     */
    public float getMasa() {
        return masa;
    }

    /**
     * @param masa the masa to set
     */
    public void setMasa(float masa) {
        this.masa = masa;
    }

    /**
     * @return the volumen
     */
    public float getVolumen() {
        return volumen;
    }

    /**
     * @param volumen the volumen to set
     */
    public void setVolumen(float volumen) {
        this.volumen = volumen;
    }

    /**
     * @return the colorBase
     */
    public Color getColorBase() {
        return colorBase;
    }

    /**
     * @param colorBase the colorBase to set
     */
    public void setColorBase(Color colorBase) {
        this.colorBase = colorBase;
    }

    /**
     * @return the tempProm
     */
    public int getTempProm() {
        return tempProm;
    }

    /**
     * @param tempProm the tempProm to set
     */
    public void setTempProm(int tempProm) {
        this.tempProm = tempProm;
    }

    /**
     * @return the info
     */
    public String getInfo() {
        return info;
    }

    /**
     * @param info the info to set
     */
    public void setInfo(String info) {
        this.info = info;
    }

public Astro(){
    

}
public abstract void dibujar(int posX, int posY, Graphics g);

}