/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package universo;

import java.awt.Canvas;
import java.awt.Graphics;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import javax.imageio.ImageIO;
import javax.swing.JOptionPane;
import javax.swing.JPanel;

/**
 *
 * @author Castro
 */
public class Universo extends JPanel{
    
    public Universo(){
    this.listaEstrellas= new ArrayList();
   }
    private ArrayList<Estrella> listaEstrellas;
    /**
     * @return the listaEstrellas
     */
    public ArrayList<Estrella> getListaEstrellas() {
        return listaEstrellas;
    }

    /**
     * @param listaEstrellas the listaEstrellas to set
     */
    public void setListaEstrellas(ArrayList<Estrella> listaEstrellas) {
        this.listaEstrellas = listaEstrellas;
    }
    public void dibujarUniverso(){
    //se crea un canvas
    Canvas c= new Canvas();
    c.setSize(1,1);
    this.add(c);
    this.setBackground(getBackground());
    this.setSize(this.getWidth(),this.getHeight());
    
    }
    public void AgregarEstrella(Estrella e){
    getListaEstrellas().add(e);
    }
@Override
public void paintComponent(Graphics g){
    super.paintComponent(g);
    
    
    for(int i=0;i<getListaEstrellas().size();i++){
    
   getListaEstrellas().get(i).dibujar(getListaEstrellas().get(i).getPosX(),getListaEstrellas().get(i).getPosY(),g);
    }
}

// funcion q crea el *PNG archivo  que contiene e panel
public void guardarImagen(){
try{
    BufferedImage bi= new BufferedImage(this.getSize().width,this.getSize().height,BufferedImage.TYPE_INT_ARGB);
    Graphics g= bi.createGraphics();
    this.paint(g);
    g.dispose();
    // guarda la imagen en jPanel
    ImageIO.write(bi,"png", new File("universo.png"));
JOptionPane.showMessageDialog(null,"Imagen guardada exitosamente", "Informacio",JOptionPane.INFORMATION_MESSAGE);
}catch(IOException e){
JOptionPane.showMessageDialog(null,e.getLocalizedMessage()+e.toString(),"Error",JOptionPane.WARNING_MESSAGE);}
}
}

