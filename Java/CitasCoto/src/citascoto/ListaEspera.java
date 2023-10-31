/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package citascoto;

/**
 *
 * @author Yisakh Castro Sanchez
 */
public class ListaEspera {
    
    private NodoEspera primero;
   
    /**
     * 
     * @param nodo inserta una cita
     */
   void insertarCita(NodoEspera nodo){
    
       if(getPrimero()==null){
       
           primero=nodo;
           System.out.println("\"Se insertoen la lista de forma correcta\";");      
       }else{
           
            nodo.sig = primero;
            primero.ant = nodo;
            primero = nodo;
            System.out.println("\"Se inserto en la lista de forma correcta\";");  
       
       }
       
       
    
    
    }
      /**
     *
     * @param aux recibe primero y avanza en lista
     */
    public void mostrar(NodoEspera aux) {

        if (getPrimero()==null) {
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
     * @return el puntero ´primero de la lista de espera
     */
    public NodoEspera getPrimero() {
        return primero;
    }
}
