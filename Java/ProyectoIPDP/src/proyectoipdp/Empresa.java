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
 * 
 */
public class Empresa 
{

    /**
     * @return the ced_juridica
     */
    private String ced_juridica;
    private String ubicacion;
    private String nombre;
    private Empleados empleados;
    private ArrayList<Empleados> milista = new ArrayList<>();
   
    
  

    /**
     * @return the ubicacion
     */
    public String getUbicacion() {
        return ubicacion;
    }

    /**
     * @param ubicacion the ubicacion to set
     */
    public void setUbicacion(String ubicacion) {
        this.ubicacion = ubicacion;
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
     * @return the empleados
     */
    public Empleados getEmpleados() {
        return empleados;
    }

    /**
     * @param empleados the empleados to set
     */
    public void setEmpleados(Empleados empleados) {
        this.empleados = empleados;
    }
/**
     * @return the milista
     */
    public ArrayList<Empleados> getMilista() {
        return milista;
    }

    /**
     * @param milista the milista to set
     */
    public void setMilista(ArrayList<Empleados> milista) {
        this.milista = milista;
    }

    
    /**
     * @return the ced_juridica
     */
    public String getCed_juridica() {
        return ced_juridica;
    }

    /**
     * @param ced_juridica the ced_juridica to set
     */
    public void setCed_juridica(String ced_juridica) {
        this.ced_juridica = ced_juridica;
    }
    public Empresa(String ced_juridica, String ubicacion, String nombre) 
    {
        this.ced_juridica = ced_juridica;
        this.ubicacion = ubicacion;
        this.nombre = nombre;
    }
    public Empresa() 
    {

    }
    
    
    public void Insertar(Sistema sistem) 
    {
        Empresa e;
        String nombre = "Desarrolladores Y&L";
        String ced_juridica = "1122568789";
        String ubicacion = "Canoas";
        e = new Empresa(ced_juridica,ubicacion,nombre);
        sistem.getListaEmpresa().add(e);
       
    }
    
     public void menuEmpresa(Sistema sistem)
        {
            Empleados emp = new Empleados();
            Empresa e = new Empresa();
            Scanner sn = new Scanner(System.in);
            boolean salir = false;
            int opcion; //Guardaremos la opcion del usuario
        
            while(!salir){
                System.out.println("1. Ver Empresa");
                System.out.println("2. Salir");

                System.out.println("Escribe una de las opciones");
                opcion = sn.nextInt();
              switch(opcion){
                case 1:
                   System.out.println("Has seleccionado ver empresa");
                {
                 
                   e.Insertar(sistem);
                 
                }
                   break;
                case 2:
                   salir=true;
                   break;
                default:
                   System.out.println("Solo números entre 1 y 3");
        }
    }
}

    
}
