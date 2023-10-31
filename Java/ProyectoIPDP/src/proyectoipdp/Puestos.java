/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoipdp;

/**
 *
 * @author Laura Venegas & Yisakh Castro
 */
public class Puestos 
{
            private String nombre;
            private float salarioPuesto;

    public Puestos() {
    }

   

    public Puestos(String nombre, float salarioPuesto) {
        this.nombre = nombre;
        this.salarioPuesto = salarioPuesto;
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
     * @return the salarioPuesto
     */
    public float getSalarioPuesto() {
        return salarioPuesto;
    }

    /**
     * @param salarioPuesto the salarioPuesto to set
     */
    public void setSalarioPuesto(float salarioPuesto) {
        this.salarioPuesto = salarioPuesto;
    }

   
            
}
