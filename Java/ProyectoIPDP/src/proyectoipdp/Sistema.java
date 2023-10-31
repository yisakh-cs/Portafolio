/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoipdp;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Laura Venegas & Yisakh Castro
 */
public class Sistema {

    /**
     * @param args the command line arguments
     */
    private ArrayList<Empresa> listaEmpresa = new ArrayList<>();
    
     
    public static void main(String[] args)    
    {
        // TODO code application logic here
        Empleados emp = new Empleados();
        Postulantes postu = new Postulantes();
        Empresa e = new Empresa();
        Scanner sn = new Scanner(System.in);
        boolean salir = false;
        Sistema sist= new Sistema();
        int opcion; //Guardaremos la opcion del usuario
        
         System.out.println ("Digite la empresas");
        //Lector
        Scanner lector = new Scanner(System.in);
        String buscado = lector.nextLine();
        e.Insertar(sist);
        for(int i= 0; i < sist.getListaEmpresa().size(); i++)
        {
            if(sist.getListaEmpresa().get(i).getCed_juridica().equals(buscado) || sist.getListaEmpresa().get(i).getNombre().equals(buscado))
            {
               e= sist.getListaEmpresa().get(i);
               
               
               
                while(!salir){
            
           System.out.println("1. Menu Empleado");
         
           System.out.println("3. Menu Postulante");
           System.out.println("4. Menu Planilla");
           System.out.println("5. Menu Pluses");
           System.out.println("6. Agregar Puestos");
           System.out.println("7. Salir");
            
           System.out.println("Escribe una de las opciones");
           opcion = sn.nextInt();
            
        switch(opcion)
        {
            case 1:
                   System.out.println("Has seleccionado Menu Empleado");
               {
                    emp.menuEmpleado(e);
               }
               break;
            case 2:
                   System.out.println("Has seleccionado Menu Empresa");
               {
                  e.menuEmpresa(sist);
               }
            break;
            case 3:
                   System.out.println("Has seleccionado Menu Postulante");
               {
                   postu.menuPostulante();
               }
            break;
            case 7:
                salir=true;
                break;
                
            default:
                   System.out.println("Solo números entre 1 y 7");
           }
           
        } 
           }
        
        }
        
      
    
} 

    /**
     * @return the listaEmpresa
     */
    public ArrayList<Empresa> getListaEmpresa() {
        return listaEmpresa;
    }

    /**
     * @param listaEmpresa the listaEmpresa to set
     */
    public void setListaEmpresa(ArrayList<Empresa> listaEmpresa) {
        this.listaEmpresa = listaEmpresa;
    }

    /**
     * @return the listaEmpresa
     */
  



   
   
}