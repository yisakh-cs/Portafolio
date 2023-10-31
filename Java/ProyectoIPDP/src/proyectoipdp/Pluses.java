/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoipdp;

import java.util.Scanner;

/**
 *
 * @author Laura Venegas & Yisakh Castro
 */
public class Pluses 
{
    private float total;

    /**
     * @return the total
     */
    public float getTotal() {
        return total;
    }

    /**
     * @param total the total to set
     */
    public void setTotal(float total) {
        this.total = total;
    }
    
    public void extras(){
        
          System.out.println ("Digite el nombre del empleado o la cedula que desea buscar");
        //Lector
        Scanner lector = new Scanner(System.in);
        String plus = lector.nextLine();
        
        
                   
    }
}
