/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemadeemergencias;

import java.util.ArrayList;

/**
 *Clase Grafo contiene el recorrido de anchura y profundidad
 * 
 * @author Yisakh Castro
 *
 */
public class Grafo {

    public int[][] getG() {
        return g;
    }

    public int[][] g = {{0, 2, 0, 1, 5, 0},//a

    {2, 0, 2, 0, 0, 0},//b

    {0, 2, 0, 0, 0, 8},//c

    {1, 0, 0, 0, 0, 3},//d

    {5, 0, 0, 0, 0, 4},//e

    {0, 0, 8, 3, 4, 0}};//f

    private boolean[] visitiadoAnchura = new boolean[6];

    private boolean[] visitiadoProfunidad = new boolean[6];
    
    public Grafo() {

    }

  
/**
 * 
 * @param nodoI nodo inicio del recorrido
 * @return recorridos contiene el comino de anchura
 */
    public ArrayList<Integer> recorridoAnchura(int nodoI) {

//Lista donde guardo los nodos recorridos
        ArrayList<Integer> recorridos = new ArrayList<Integer>();

//El nodo inicial ya está visitado
        visitiadoAnchura[nodoI] = true;

//Cola de visitas de los nodos adyacentes
        ArrayList<Integer> cola = new ArrayList<Integer>();

//Se lista el nodo como ya recorrido
        recorridos.add(nodoI);

//Se agrega el nodo a la cola de visitas
        cola.add(nodoI);

//Hasta que visite todos los nodos
        while (!cola.isEmpty()) {

            int j = cola.remove(0); //Se saca el primero nodo de la cola

//Se busca en la matriz que representa el grafo los nodos adyacentes
            for (int i = 0; i < g.length; i++) {

//Si es un nodo adyacente y no está visitado entonces
                if (g[j][i] > 0 && !visitiadoAnchura[i]) {

                    cola.add(i);//Se agrega a la cola de visitas

                    recorridos.add(i);//Se marca como recorrido

                    visitiadoAnchura[i] = true;//Se marca como visitado

                }

            }

        }

        return recorridos;//Devuelvo el recorrido del grafo en anchura

    }
/**
 * 
 * @param nodoI nodo inicio del recorrido
 * @return recorridos contiene el comino de profundidad
 */
    public ArrayList<Integer> recorridoProfundidad(int nodoI) {

//Lista donde guardo los nodos recorridos
        ArrayList<Integer> recorridos = new ArrayList<Integer>();
          int[][] array=getG();

        visitiadoProfunidad[nodoI] = true;//El nodo inicial ya está visitado
        

//Cola de visitas de los nodos adyacentes
        ArrayList<Integer> cola = new ArrayList<Integer>();

        recorridos.add(nodoI);//Listo el nodo como ya recorrido

        cola.add(nodoI);//Se agrega el nodo a la cola de visitas

        while (!cola.isEmpty()) {//Hasta que visite todos los nodos

            int j = cola.remove(0);//Se saca el primer nodo de la cola
            
         
         
    //Se busca en la matriz que representa el grafo los nodos adyacentes
             
            for (int i = 0; i < g.length; i++) {
             System.out.println("print j: "+j);
             int temp=min(j);
          //  System.out.println(temp+"->valor de arco minimo");
                //Si es un nodo adyacente y no está visitado entonces
                
          
                if (array[j][i]==temp && !visitiadoProfunidad[i]) {

              
//Se recorren los hijos del nodo actual de visita y se agrega el recorrido al la lista
                     cola.add(i);
                    
                    recorridos.addAll(recorridoProfundidad(i));

                  //Se marca como visitado
                    visitiadoProfunidad[i] = true;
                    
               
                }
              array[j][i]=0 ;
                
                   
               

            }

        }

        return recorridos;//Se devuelve el recorrido del grafo en profundidad

    }
    /**
     * Metodo que busca el menor de una fila sin contar 0
     * @param pos nodo a buscar arista menor
     */
   public int min(int pos){
   int min=0;
   int temp=0;
   for(int i=0;i<g.length;i++){
      
       if(g[pos][i]>0&&min>g[pos][i]){
           min=g[pos][i];
      
       }
       if(min==0){
         min=g[pos][i];
       }
       
   
   }
   
   return min;
   }
   
  
}
