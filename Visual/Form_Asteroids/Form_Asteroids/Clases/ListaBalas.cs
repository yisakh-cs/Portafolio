using System;

public class ListaBalas
{
    public Bala primero;

    public ListaBalas() { primero = null; }

    public void insertar(Bala nuevaBala)
    { //Si esta vacio el primero es el nuevo nodo
        if (primero == null) { primero = nuevaBala; }
        else
        {
            //Sino

            /*Si hay un solo nodo en la Lista establecemos como siguiente del primero el nodo nuevo que viene*/
            if (primero.getSiguiente() == null) { primero.setSiguiente(nuevaBala); }
            else
            {
                //Sino 
                Bala temporal = primero; 
                /*Navegamos hasta el ultimo nodo*/
                while (temporal.getSiguiente() != null)
                {
                    temporal = temporal.getSiguiente();

                } /*Le establecemos al ultimo nodo como el siguiente el nuevo nodo que viene a insertarse*/

                temporal.setSiguiente(nuevaBala);
            }

        }

    }
    public string eliminar(Bala nodoBuscado)
    { //Si esta vacia 

        if (primero!=null){ //Si NO solo hay un nodo

            if (primero==nodoBuscado){ if(primero.getSiguiente()!=null){ primero = primero.getSiguiente(); }else{ primero=null; } }else{
                //Si hay almenos 2 elementos

                if (primero.getSiguiente()!=null){ if(primero.getSiguiente()==nodoBuscado){ primero.setSiguiente(primero.getSiguiente().getSiguiente()); }else{
                        //Recorremos la lista Bala 

                       Bala temporal =primero.getSiguiente();

                        do { if(temporal.getSiguiente()==nodoBuscado){

                                //Si lo encontramos procedemos a eliminar 

                                temporal.setSiguiente(temporal.getSiguiente().getSiguiente());
                                temporal =temporal.getSiguiente(); temporal=null; break; } temporal=temporal.getSiguiente(); }while(temporal!=null); } }else{

                    //Si solo hay un nodo 

                    primero =null; }
            }
        } else
        {

            return "lista vacia"; }

        return "El nodo ha sido eliminado";
    }

}



