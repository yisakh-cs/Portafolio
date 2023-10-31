/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoipdp;

import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author Laura Venegas & Yisakh Castro
 */
public class Planilla 
{

    public Planilla(float pago, String fecha) {
        this.pago = pago;
        this.fecha = fecha;
    }
    private float pago;
    private String fecha;
    private Empleados emp;

   
    public Empleados getEmp() {
        return emp;
    }

    /**
     * @param emp the emp to set
     */
    public void setEmp(Empleados emp) {
        this.emp = emp;
    }

    public Planilla(float pago, String fecha, Empleados emp) {
        this.pago = pago;
        this.fecha = fecha;
        this.emp = emp;
    }
    
 public void realizarPago(){
          
     Empresa firma= new Empresa();
     int mas;
      System.out.println ("realizar pago");
        //Lector
        Scanner lector = new Scanner(System.in);
        String buscado = lector.nextLine();
        
        for(int i= 0; i < firma.getMilista().size(); i++)
        {
            if(firma.getMilista().get(i).getCedula().equals(buscado) || firma.getMilista().get(i).getNombre().equals(buscado))
            {
                pago=firma.getMilista().get(i).getSalario();
                            
             }
     
        } 
    }
}     
    

