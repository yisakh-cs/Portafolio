/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package logica;

/**
 *
 * @author Castro
 */
public class Estudiante {

   
    public static int cedula;
    public static String nombre;
    public static String curso;

    public Estudiante() {
    }
    
     public void setEstudiante(int cd,String nom, String curso) {
        
        this.cedula= cd;
        this.nombre=nom;
        this.curso=curso;
    }
}
