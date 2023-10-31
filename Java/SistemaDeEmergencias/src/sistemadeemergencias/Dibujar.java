/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemadeemergencias;

import java.awt.Color;
import java.awt.Graphics;

/**
 *
 * @author Yisakh Castro
 */
public class Dibujar {
    public static  void hacerNodo(Graphics g){
        g.setColor(Color.black);
        g.drawOval( 300, 20, 35, 35);
        g.drawOval( 150, 150, 35, 35);
        g.drawOval( 300, 150, 35, 35);
        g.drawOval( 450, 100, 35, 35);
        g.drawOval( 225, 275, 35, 35);
        g.drawOval( 375, 275, 35, 35);
        
    }
    public static void hacerLineaAB(Graphics l){
        
        l.drawLine(306, 50, 178, 154);
        l.setColor(Color.red);
    }
    public static void eliminarLineaAB(Graphics l){
        
         l.setXORMode(Color.red);
    }
    
     public static void hacerLineaBC(Graphics l){
        
        l.drawLine(178, 182,230,282);
        l.setColor(Color.red);
    }
     
     public static void hacerLineaCF(Graphics l){
        
        l.drawLine(260,295,375,295);
        l.setColor(Color.red);
    }
     
     public static void hacerLineaAD(Graphics l){
        
        l.drawLine(317,55,317,150);
        l.setColor(Color.red);
    }
     
     public static void hacerLineaDF(Graphics l){
        
        l.drawLine(317,185,390,275);
        l.setColor(Color.red);
    }
     
     public static void hacerLineaAE(Graphics l){
        
        l.drawLine(335,45,450,110);
        l.setColor(Color.red);
    }
     
     public static void hacerLineaEF(Graphics l){
        
        l.drawLine(470,135,408,283);
        l.setColor(Color.red);
    }
}