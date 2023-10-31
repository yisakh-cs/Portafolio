/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyectoipdp;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import static java.lang.System.console;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.Scanner;


/**
 *
 * @author Laura Venegas & Yisakh Castro
 */
public class Empleados extends Persona
{

    /**
     * @return the milista
     */
    

    /**
     * @return the fecha_inicio
     */
    public String getFecha_inicio() {
        return fecha_inicio;
    }

    /**
     * @param fecha_inicio the fecha_inicio to set
     */
    public void setFecha_inicio(String fecha_inicio) {
        this.fecha_inicio = fecha_inicio;
    }

    /**
     * @return the Salario
     */
    public Float getSalario() {
        return Salario;
    }

    /**
     * @param Salario the Salario to set
     */
    public void setSalario(Float Salario) {
        this.Salario = Salario;
    }
    
    public Empleados() 
    {
	super();
    }

    public Empleados(String nombre, String apellido, String fecha_nacimiento, String Cedula, String fecha_inicio, float salario) 
    {
		super(nombre, apellido, fecha_nacimiento,Cedula);
		this.fecha_inicio = fecha_inicio;
		this.Salario = salario;
    }
    private String fecha_inicio;
    private Float Salario;
    
    
    
    
    
    public void insertarEmpleados( Empresa firma) 
    {
        //Lector
        Scanner lector = new Scanner(System.in);
        System.out.println ("Por favor ingrese el nombre:");
        String nombre = lector.nextLine(); 
        System.out.println ("Ingrese su apellido:");
        String apellido = lector.nextLine(); 
        System.out.println ("Ingrese su fecha de nacimiento:");
        String fecha_nacimiento = lector.nextLine(); 
        System.out.println ("Ingrese su cedula:");
        String Cedula = lector.nextLine(); 
        System.out.println ("Ingrese su fecha de inicio de trabajo:");
        String fecha_inicio = lector.nextLine(); 
        System.out.println ("Ingrese su salario:");
        float salario = lector.nextFloat();
        
        Empleados emp= new Empleados(nombre, apellido, fecha_nacimiento, Cedula, fecha_inicio, salario);
        firma.getMilista().add(emp);
        System.out.println ("Se ha registrado el empleado perfectamente");

    }
    
    public void eliminarEmpleado(Empresa firma)
    {
        System.out.println ("Digite el nombre del empleado que desea eliminar");
        //Lector
        Scanner lector = new Scanner(System.in);
        String eliminado = lector.nextLine();
            for(int i= 0; i < firma.getMilista().size(); i++)
            {       
                if(firma.getMilista().get(i).getNombre().equalsIgnoreCase(eliminado))
                {
                 firma.getMilista().remove(i);
                }
            }
            
    }
    
    public void verEmpleados(Empresa firma)
    {
         Empleados empr ;
        Iterator iter = firma.getMilista().iterator();
        while(iter.hasNext()){
          empr = (Empleados)iter.next(); 
          System.out.println("Los empleados son: " + empr.getNombre() + " " + empr.getApellido() +" " + empr.getFecha_nacimiento() + " " + empr.getCedula() + " " + empr.getFecha_inicio() + " " + empr.getSalario());
        }
    }
    
     public void buscarEmpleado(Empresa firma)
    {
        System.out.println ("Digite el nombre del empleado o la cedula que desea buscar");
        //Lector
        Scanner lector = new Scanner(System.in);
        String buscado = lector.nextLine();
        
        for(Empleados e : firma.getMilista())
        {
            if(e.getCedula().equals(buscado) || e.getNombre().equals(buscado))
            {
               System.out.println ("Nombre: " +  e.getNombre() + " Apellido: " + e.getApellido() + " Cedula: " + e.getCedula() + " Fecha de Nacimiento: " + e.getFecha_nacimiento() + " Fecha de Inicio de trabajo" + e.getFecha_inicio() + " Salario: " + e.getSalario());
            }
        }

    }
     
       public void modificarEmpleado(Empresa firma)
    {
        System.out.println ("Digite el nombre del empleado o la cedula que desea modificar");
        //Lector
        Scanner lector = new Scanner(System.in);
        String buscado = lector.nextLine();
        
        for(int i= 0; i < firma.getMilista().size(); i++)
        {
            if(firma.getMilista().get(i).getCedula().equals(buscado) || firma.getMilista().get(i).getNombre().equals(buscado))
            {
                System.out.println ("Digite el nombre del empleado a modificar");
                String nombre = lector.nextLine();
                if(!"".equals(nombre))
                {
                     firma.getMilista().get(i).setNombre(nombre);
                }
                    System.out.println ("Digite el apellido del empleado a modificar");
                    String apellido = lector.nextLine();
                    if(!"".equals(apellido))
                {
                   firma.getMilista().get(i).setApellido(apellido);
                }
                
                System.out.println ("Digite la cedula del empleado a modificar");
                    String cedula = lector.nextLine();
                    if(!"".equals(cedula))
                    {
                        firma.getMilista().get(i).setCedula(cedula);
                    }

                      System.out.println ("Digite la fecha de nacimiento del empleado a modificar");
                       String fecha_nac = lector.nextLine();
                        if(!"".equals(fecha_nac))
                        {
                            firma.getMilista().get(i).setFecha_nacimiento(fecha_nac);
                        }   
                   
                      System.out.println ("Digite la fecha de inicio del empleado a modificar");
                           String fecha_inicio = lector.nextLine();
                        if(!"".equals(fecha_inicio))
                        {
                            firma.getMilista().get(i).setFecha_inicio(fecha_inicio);
                        } 

                           System.out.println ("Digite el salario del empleado a modificar");
                           float salario = lector.nextFloat(); 
                            if(!"".equals(salario))
                        {
                           firma.getMilista().get(i).setSalario(salario);
                        } 
                System.out.println ("Nombre: " +  firma.getMilista().get(i).getNombre()+ " Apellido: " + firma.getMilista().get(i).getApellido()+ " Cedula: "  + firma.getMilista().get(i).getCedula() + " Fecha de Nacimiento: "  + firma.getMilista().get(i).getFecha_nacimiento() + " Fecha de Inicio de trabajo" + firma.getMilista().get(i).getFecha_inicio() + " Salario: " + firma.getMilista().get(i).getSalario());
            }
            else
            {
              System.out.println ("El nombre o cedula digitado no coincide con ninguno");  
            }
            }
        }
       
        public void menuEmpleado(Empresa firma)
        {
            Empleados emp = new Empleados();
            Scanner sn = new Scanner(System.in);
            boolean salir = false;
            int opcion; //Guardaremos la opcion del usuario
        
            while(!salir){
                System.out.println("1. Agregar Empleado");
                System.out.println("2. Eliminar Empleado");
                System.out.println("3. Ver Empleados");
                System.out.println("4. Buscar Empleado");
                System.out.println("5. Modificar Empleado");
                System.out.println("6. Salir");

                System.out.println("Escribe una de las opciones");
                opcion = sn.nextInt();
              switch(opcion){
                case 1:
                   System.out.println("Has seleccionado Agregar Empleado");
                {
                   emp.insertarEmpleados(firma);   
                }
                   break;
                case 2:
                   System.out.println("Has seleccionado Eliminar Empleado");
                {
                        emp.eliminarEmpleado(firma);  
                }

                   break;
                case 3:
                   System.out.println("Has seleccionado Mostrar Empleados");
                {
                       emp.verEmpleados(firma);
                }

                   break;
                case 4:
                   System.out.println("Has seleccionado Buscar Empleado");
                {
                       emp.buscarEmpleado(firma);
                }

                   break;
                case 5:
                   System.out.println("Has seleccionado Modificar");
                {
                       emp.modificarEmpleado(firma);
                }

                   break;
                case 6:
                   salir=true;
                   break;
                default:
                   System.out.println("Solo números entre 1 y 6");
        }
    }
}

 
        
    }
      

