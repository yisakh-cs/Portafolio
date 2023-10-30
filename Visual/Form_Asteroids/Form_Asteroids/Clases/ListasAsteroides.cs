using System;

public class ListaAsteroides
{

    public Asteroide primero;
    private Asteroide temporal;

    public ListaAsteroides() { primero = null; }

    public void insertar(Asteroide nuevoAsteroide)
    {

        //Si esta vacio el primero es el nuevo nodo 
        if (primero == null) { primero = nuevoAsteroide; }
        else
        {

            //Sino /*Si hay un solo nodo en la Lista establecemos como siguiente del primero el nodo nuevo que viene*/ 
            if (primero.getSiguiente() == null)
            {
                primero.setSiguiente(nuevoAsteroide);
            }
            else
            {//Sino Asteroide

                temporal = primero; /*Navegamos hasta el ultimo nodo*/

                while (temporal.getSiguiente() != null) { temporal = temporal.getSiguiente(); }
                /*Le establecemos al ultimo nodo como el siguiente el nuevo nodo que viene a insertarse*/
                temporal.setSiguiente(nuevoAsteroide);
            }
        }
    }
    public string eliminar(Asteroide nodoBuscado) { //Si esta vacia
        if (primero!=null){
            //Si NO solo hay un nodo
            if (primero==nodoBuscado){
                if (primero.getSiguiente()!=null){

                    primero = primero.getSiguiente();
                } else{ primero=null; }
            } else{ if(primero.getSiguiente()!=null){
                    if (primero.getSiguiente()==nodoBuscado){
                        primero.setSiguiente(primero.getSiguiente().getSiguiente());
                    } else{ Asteroide temporal=primero.getSiguiente();
                        do { if(temporal.getSiguiente()==nodoBuscado){

                                temporal.setSiguiente(temporal.getSiguiente().getSiguiente());
                                temporal =temporal.getSiguiente(); temporal=null;

                                break;
                            } temporal=temporal.getSiguiente();
                        } while(temporal!=null); }
                } else{
                    //Si solo hay un nodo primero=null;
                }
            }
        } else{ return "lista vacia";
        } return "El nodo ha sido eliminado";
    }
}

