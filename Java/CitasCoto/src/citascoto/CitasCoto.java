/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package citascoto;

import java.util.Scanner;
import javax.swing.JOptionPane;

/**
 *
 * @author Yisakh Castro Sanchez
 */
public class CitasCoto {

  
    static ListasPacientes ls = new ListasPacientes();
    static Paciente p = new Paciente();
    static ListaEspera espera = new ListaEspera();
    static NodoEspera cita = new NodoEspera();
    static Scanner entrada = new Scanner(System.in);

    // este metodo es temporal solo par a pruebas
    static void objetos() {

        String nombre = "yi";
        String apellido = "castro";
        String cedula = "123456";
        String numeroSeguro = "234";
        String temperatura = "35";
        String padecimiento = "no";
        String alergias = "no";
        String enfermedadesCronicas = "no";

        Paciente pnodo = new Paciente(nombre, apellido, cedula, numeroSeguro, temperatura, padecimiento, alergias, enfermedadesCronicas);
        ls.insertar(pnodo);
        String nombre1 = "Yender";
        String apellido1 = "Sanchez";
        String cedula1 = "123456";
        String numeroSeguro1 = "hola";
        String temperatura1 = "35";
        String padecimiento1 = "no";
        String alergias1 = "no";
        String enfermedadesCronicas1 = "no";

        Paciente pnodo2 = new Paciente(nombre1, apellido1, cedula1, numeroSeguro1, temperatura1, padecimiento1, alergias1, enfermedadesCronicas1);
        //Insertar normal no recusivo
        ls.insertar(pnodo2);

        //getPrimero para tomar el puntero inicial sinno quedaria como null
        p = ls.getPrimero();
        Paciente hola = ls.buscarPaciente(p, "hola");

        System.out.println(hola.getNumeroSeguro());

    }

    static void menu() {
        System.out.println("----------------   Menu------------------");
        System.out.println("---     1)Agregar Paciente al sistema.   ---");
        System.out.println("---     2)Buscar Paciente.                 ---");
        System.out.println("---     3)Mostrar pacientes.             ---");
        System.out.println("---     4)Mostrar pacientes por sintomas.---");
        System.out.println("---     5)Modificar                      ---");
        System.out.println("---     6)Eliminar                       ---");
        System.out.println("---     7)Menu Citas.                    ---");
        System.out.println("---     8)Ver por orden.                 ---");
        System.out.println("---     9)Salir.                         ---");
        System.out.println("--------------------Fin---------------------");

    }

    static void menuEspera() {

        System.out.println("----------------Menu Citas ------------------");
        System.out.println("---     1)Agendar cita.                   ---");
        System.out.println("---     2)Ver asegurados                  ---");
        System.out.println("---     3)Lista de espero                 ---");
        
        System.out.println("---     9)Salir.                          ---");

       
        boolean cont = true;
        Paciente paciente = new Paciente();
      
        while (cont) {
        System.out.print("ingrese opcion: ");
        String opcion = entrada.nextLine();
            if (opcion.equals("1")) {
               System.out.print("Numero del Asegurado: ");
               
               paciente= ls.buscarPaciente(ls.getPrimero(), entrada.nextLine());
               
               System.out.print("Ingrese Nombre del medico que atiende: ");
         
              
                NodoEspera nodo= new NodoEspera(paciente.getNombre(),paciente.getApellido(),paciente.getCedula(),paciente.getNumeroSeguro(),paciente.getTemperatura(),paciente.getPadecimiento(),paciente.getAlergias(),paciente.getEmfermedadesCronicas(),entrada.nextLine());
                espera.insertarCita(nodo);
              
            }
            if(opcion.equals("2")){
                System.out.println("Lista de asegurado registrados");
            ls.mostrar(ls.getPrimero());
            
            }
             if(opcion.equals("3")){
                System.out.println("Lista de asegurado registrados");
            espera.mostrar(espera.getPrimero());
            
            }
            if(opcion.equals("9")){
            
            cont=false;
            
            }

        }

    }

    
    /**
     * 
     * @param args 
     */
    public static void main(String[] args) {
        // TODO code application logic here

        objetos();

        boolean continuar = true;
        String opcion;
    
        while (continuar) {
            //menu de opciones
            menu();

            System.out.print("ingrese opcion: ");
            opcion = entrada.nextLine();

            if (opcion.equals("1")) {

                ls.insertarPrimero(false);

            }
            if (opcion.equals("2")) {
                  System.out.print("Ingrese el numero de asegurado");
                  Paciente buscado= ls.buscarPaciente(ls.getPrimero(),entrada.nextLine());
                 
                  System.out.println("********---------------------*******");
            System.out.println("Nombre: " + buscado.getNombre());
            System.out.println("Apellido: " + buscado.getApellido());
            System.out.println("Cedula: " + buscado.getCedula());
            System.out.println("Numero asegurado: " + buscado.getNumeroSeguro());
            System.out.println("Padecimiento: " + buscado.getPadecimiento());
            System.out.println("Temperatura: " + buscado.getTemperatura());
            System.out.println("Alergias: " + buscado.getAlergias());
            System.out.println("Enfermedades cronicas: " + buscado.getEmfermedadesCronicas());
            System.out.println("********---------------------*******");
            System.out.println();
            }
            if (opcion.equals("3")) {
                ls.mostrar(ls.getPrimero());

            }

            if (opcion.equals("4")) {
                System.out.print("Ingrese el sintoma");
                ls.verPacienteSintoma(ls.getPrimero(), entrada.nextLine());

            }
            if (opcion.equals("5")) {
                System.out.print("Ingrese el numero de asegurado a modificar");
                ls.modificar(ls.getPrimero(), entrada.nextLine());

            }
            if (opcion.equals("6")) {
                System.out.print("Ingrese el numero de asegurado a Dar de alta: ");

                ls.eliminar(ls.buscarPaciente(ls.getPrimero(), entrada.nextLine()), ls.getPrimero(), ls.getPrimero().sig);

            }
            if (opcion.equals("7")) {
                menuEspera();
            }

            if (opcion.equals("8")) {

                //ls.Ordenar(ls.getPrimero(),ls.getPrimero().sig);
              
                ls.ordenar();
               

            }
            if (opcion.equals("9")) {
                System.out.print("Tenga buen dia!!");
                continuar = false;
            }
        }
    }

}
