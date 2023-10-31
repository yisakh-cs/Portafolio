/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package citascoto;

import java.util.Scanner;

/**
 *
 * @author Yisakh Castro Sanchez
 */
public class ListasPacientes {

    private Paciente primero;

    public ListasPacientes() {
        primero = null;

    }

    public boolean estaVacia() {

        return getPrimero() == null;

    }

    /**
     *
     * @param aux se toma el primero de lista
     * @param valor valor de busqueda
     * @return retorna un nodo paciente
     */
    public Paciente buscarPaciente(Paciente aux, String valor) {

        if (getPrimero() == null) {
            System.out.println("Prueba");

        }
        if (valor.equalsIgnoreCase(getPrimero().getNumeroSeguro())) {

            return getPrimero();

        }

        if (valor.equalsIgnoreCase(aux.getNumeroSeguro())) {

            return aux;

        }
        if (aux.sig == null) {

            System.out.println("Paciente no registrado");
            return aux;
        }

        return buscarPaciente(aux.sig, valor);
    }

    void insertar(Paciente nodo) {

        if (estaVacia()) {
            setPrimero(nodo);
        } else {

            nodo.sig = getPrimero();
            setPrimero(nodo);

        }

    }

    void modificar(Paciente nodo, String numeroSeguro) {

        Scanner entrada = new Scanner(System.in);

        Paciente modificado = buscarPaciente(getPrimero(), numeroSeguro);

        if (modificado.getNumeroSeguro().equals(numeroSeguro)) {

            //se encuentra y se debe eliminar el modificado y el nuevo se inserta como primero
            //Nota: terminar el eliminar primero
            System.out.println("Modificar Padecimiento");
            modificado.setPadecimiento(entrada.nextLine());
            System.out.println("Modificar Temperatura");
            modificado.setTemperatura(entrada.nextLine());
            System.out.println("Modificar Alergias");
            modificado.setAlergias(entrada.nextLine());
            System.out.println("Modificar Enfemedades cronicas");
            modificado.setEmfermedadesCronicas(entrada.nextLine());

        } else {
            System.out.println("NO hay concidencias con el asegurado");

        }

      

    }

    
    /**
     *
     * @param cont rompe el ciclo de insercion
     */
    void insertarPrimero(boolean cont) {
        Scanner entrada = new Scanner(System.in);

        System.out.println("Insertar Pacientes: ");

        String nombre;
        String apellido;
        String cedula;
        String numeroSeguro;
        String temperatura;
        String padecimiento;
        String alergias;
        String enfermedadesCronicas;

        System.out.println("Ingrese nombre: ");

        nombre = entrada.nextLine();

        System.out.println("Ingrese apellido: ");

        apellido = entrada.nextLine();

        System.out.println("Ingrese cedula: ");

        cedula = entrada.nextLine();

        System.out.println("Ingrese Codigo de asegurado: ");

        numeroSeguro = entrada.nextLine();

        System.out.println("Ingrese temperatura del paciente: ");

        temperatura = entrada.nextLine();
        System.out.println("Ingrese Padecimiento: ");

        padecimiento = entrada.nextLine();
        System.out.println("Ingrese alergias: ");

        alergias = entrada.nextLine();
        System.out.println("Ingrese enfermedades cronicas: ");

        enfermedadesCronicas = entrada.nextLine();

        Paciente nodo = new Paciente(nombre, apellido, cedula, numeroSeguro, temperatura, padecimiento, alergias, enfermedadesCronicas);

        if (estaVacia()) {
            setPrimero(nodo);
        } else {

            nodo.sig = getPrimero();
            setPrimero(nodo);

        }
        int op;
        System.out.println("Insertar otro Paciente más? ");
        System.out.println("1)Si ");
        System.out.println("2)No ");
        op = entrada.nextInt();
        if(op == 1) {

            cont = true;
        } else {
            cont = false;

        }

        if (cont == true) {
            insertarPrimero(true);

        } else {

            System.out.println("Se ha agregado exitosamente ");
          
        }

    }
/**
 * 
 * @param eliminar nodo a eliminar
 * @param aux nodo auxiliar para guardar la continuacion al nodo eliminado
 * @param aux2 nodo auxiliar para mantener la lista con el nodo continuo
 */
    public void eliminar(Paciente eliminar, Paciente aux, Paciente aux2) {
        if (estaVacia()) {
            System.out.println("La lista esta Vacía");
            return;
        }

        if (primero.getNumeroSeguro().equalsIgnoreCase(eliminar.getNumeroSeguro())) {
            primero = primero.sig;
            return;
        }

        if (aux2 != null) {
            if (aux2.getNumeroSeguro().equalsIgnoreCase(eliminar.getNumeroSeguro())) {
                aux.sig = aux2.sig;
                return;
            } else {
                aux = aux.sig;
                aux2 = aux2.sig;
            }

            eliminar(eliminar, aux, aux2);
        }

    }

    /**
     *
     * @param aux recibe primero y avanza en lista
     */
    public void mostrar(Paciente aux) {

        if (estaVacia()) {
            System.out.println("La lista esta Vacía");
        }

        if (aux != null) {
            System.out.println("********---------------------*******");
            System.out.println("Nombre: " + aux.getNombre());
            System.out.println("Apellido: " + aux.getApellido());
            System.out.println("Cedula: " + aux.getCedula());
            System.out.println("Numero asegurado: " + aux.getNumeroSeguro());
            System.out.println("Padecimiento: " + aux.getPadecimiento());
            System.out.println("Temperatura: " + aux.getTemperatura());
            System.out.println("Alergias: " + aux.getAlergias());
            System.out.println("Enfermedades cronicas: " + aux.getEmfermedadesCronicas());
            System.out.println("********---------------------*******");
            System.out.println();
            aux = aux.sig;

            mostrar(aux);
        }

    }

    /**
     * @param aux rebe la lista
     * @param sintoma el valor a busqueda
     * 
     */
    public void verPacienteSintoma(Paciente aux, String sintoma) {

        if (estaVacia()) {
            System.out.println("La lista esta Vacía");
        }

        if (aux.sig != null && sintoma.equalsIgnoreCase(aux.getPadecimiento())) {
            System.out.println("********---------------------*******");
            System.out.println("Nombre: " + aux.getNombre());
            System.out.println("Apellido: " + aux.getApellido());
            System.out.println("Cedula: " + aux.getCedula());
            System.out.println("Numero asegurado: " + aux.getNumeroSeguro());
            System.out.println("********---------------------*******");
            System.out.println();

        }

        verPacienteSintoma(aux.sig, sintoma);
    }

    /**
     * 
     * @param nuevo elemento al final 
     */
    void ultimo(Paciente nuevo) {
        Paciente p = getPrimero();
        
         while (p.sig != null) {
            p = p.sig;
         
            
        }
         p.sig=nuevo;
        
        
    }
    

    void ordenar() {

   Paciente inicio=getPrimero();
   Paciente aux = getPrimero().sig;
       

        while (inicio.sig != null) {
           

            while (aux!= null) {
              
                 Paciente p = getPrimero();
                 String a = p.getApellido();
                String b = aux.getApellido();
               
              if (a.compareTo(b)<0){
             //  if(a.charAt(0)>b.charAt(0)){
                    System.out.println(a.charAt(0));                    
                    primero=aux;
                    ultimo(p);
                   
                
                 aux=aux.sig;
               
               
              }
            }
        System.out.println("Hola");
        inicio=inicio.sig;
        }
        

    }

    /**
     * @return the primero
     */
    public Paciente getPrimero() {
        return primero;
    }

    /**
     * @param primero the primero to set
     */
    public void setPrimero(Paciente primero) {
        this.primero = primero;
    }

}
