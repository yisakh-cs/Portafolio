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
public class Postulantes extends Persona
{

    /**
     * @return the fecha_postulacion
     */
    public String getFecha_postulacion() {
        return fecha_postulacion;
    }

    /**
     * @param fecha_postulacion the fecha_postulacion to set
     */
    public void setFecha_postulacion(String fecha_postulacion) {
        this.fecha_postulacion = fecha_postulacion;
    }

    /**
     * @return the Puesto
     */
    public String getPuesto() {
        return Puesto;
    }

    /**
     * @param Puesto the Puesto to set
     */
    public void setPuesto(String Puesto) {
        this.Puesto = Puesto;
    }

    /**
     * @return the Exp
     */
    public String getExp() {
        return Exp;
    }

    /**
     * @param Exp the Exp to set
     */
    public void setExp(String Exp) {
        this.Exp = Exp;
    }

    /**
     * @return the Formacion
     */
    public String getFormacion() {
        return Formacion;
    }

    /**
     * @param Formacion the Formacion to set
     */
    public void setFormacion(String Formacion) {
        this.Formacion = Formacion;
    }

    /**
     * @return the milista
     */
    public ArrayList<Postulantes> getMilista() {
        return milista;
    }

    /**
     * @param milista the milista to set
     */
    public void setMilista(ArrayList<Postulantes> milista) {
        this.milista = milista;
    }
    private String fecha_postulacion;
    private String Puesto;
    private String Exp;
    private String Formacion;
    private ArrayList<Postulantes> milista = new ArrayList<>();
    
    public Postulantes() 
    {
	super();
    }

    public Postulantes(String nombre, String apellido, String fecha_nacimiento, String Cedula, String fecha_postulacion,  String Puesto, String Exp, String Formacion) 
    {
		super(nombre, apellido, fecha_nacimiento,Cedula);
		this.fecha_postulacion = fecha_postulacion;
		this.Puesto = Puesto;
                this.Exp = Exp;
                this.Formacion = Formacion;
    }
    
     public void postularPostulantes() 
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
        System.out.println ("Ingrese su fecha de postulacion:");
        String fecha_postulacion = lector.nextLine(); 
        System.out.println ("Ingrese su Puesto:");
        String Puesto = lector.nextLine();
        System.out.println ("Ingrese sus años de experiencia:");
        String Exp = lector.nextLine();
        System.out.println ("Ingrese su grado academico:");
        String Formacion = lector.nextLine();
        
        Postulantes post= new Postulantes(nombre, apellido, fecha_nacimiento, Cedula, fecha_postulacion, Puesto,Exp,Formacion);
        getMilista().add(post);
        System.out.println ("Se ha registrado el postulante perfectamente");
    }
        public void eliminarPostulante()
    {
        System.out.println ("Digite el nombre del postulante que desea eliminar");
        //Lector
        Scanner lector = new Scanner(System.in);
        String eliminado = lector.nextLine();
            for(int i= 0; i < getMilista().size(); i++)
            {       
                if(getMilista().get(i).getNombre().equalsIgnoreCase(eliminado))
                {
                    milista.remove(i);
                }       
            }
    }
    
            public void menuPostulante()
        {
            Postulantes post = new Postulantes();
            Scanner sn = new Scanner(System.in);
            boolean salir = false;
            int opcion; //Guardaremos la opcion del usuario
        
            while(!salir){
                System.out.println("1. Agregar Postulante");
                System.out.println("2. Eliminar Postulante");
                System.out.println("3. Salir");

                System.out.println("Escribe una de las opciones");
                opcion = sn.nextInt();
              switch(opcion){
                case 1:
                   System.out.println("Has seleccionado Agregar Postulante");
                {
                   post.postularPostulantes();
                }
                   break;
                case 2:
                   System.out.println("Has seleccionado Eliminar Postulante");
                {
                      post.eliminarPostulante();
                }
                   break;
                case 3:
                   salir=true;
                   break;
                default:
                   System.out.println("Solo números entre 1 y 3");
        }
    }
}
}
