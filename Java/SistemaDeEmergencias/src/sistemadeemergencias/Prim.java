/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemadeemergencias;

import java.util.ArrayList;

/**
 * Clase que contiene los metodos para realizar el recorrido de Prim
 *
 * @author Yisakh Castro
 */

//El ejecicio viene comentado explicando las instrucciones y metodos utilizados para realizar el algoritmo de prim
public class Prim {

    public ArrayList<Boolean> verticesVisitados = new ArrayList<Boolean>();
    public ArrayList<Integer> distanciasRelativas = new ArrayList<Integer>();
    public ArrayList<Integer> nodosAdyacentes = new ArrayList<Integer>();

    /**
     * static Grafo gr= new Grafo(); /**
     *
     * @param MatrizOriginal Recibe la matriz que general el grafo
     * @return devuelve la matriz que genera un arbol general de prim
     */
    public int[][] Algoritmo_Prim(int[][] MatrizOriginal) {
        //Primeramente declaramos 3 Listas 

        /**
         * Inicializando Variables
         */
        for (Integer contador = 0; contador < MatrizOriginal[0].length; contador++) {
            verticesVisitados.add(false);
            nodosAdyacentes.add(0);
            distanciasRelativas.add(Integer.MAX_VALUE);
        }
        distanciasRelativas.set(0, new Integer(0));
        /**
         * Definicion del punto que sera la raiz del punto resultante
         */
        Integer puntoevaluado = 0;
        Integer Adyacentes = 0;
        /**
         * Estructuras para ejecutar algoritmo de Prim
         */
        for (int contadorpuntoevaluado = 0; contadorpuntoevaluado < MatrizOriginal[0].length; contadorpuntoevaluado++) {
            for (int contadorAdyacentes = 0; contadorAdyacentes < MatrizOriginal[0].length; contadorAdyacentes++) {

                if ((contadorAdyacentes == puntoevaluado)) {

                    continue;
                }

                if ((MatrizOriginal[puntoevaluado][contadorAdyacentes] >0) && ((MatrizOriginal[puntoevaluado][contadorAdyacentes] < distanciasRelativas.get(contadorAdyacentes)))) {
                    distanciasRelativas.set(contadorAdyacentes, MatrizOriginal[puntoevaluado][contadorAdyacentes]);
                    nodosAdyacentes.set(contadorAdyacentes,puntoevaluado);
                }

                verticesVisitados.set(puntoevaluado, true);
                puntoevaluado = new Integer(0);
                Integer distanciaActualacomparar = new Integer(Integer.MAX_VALUE);

                /**
                 * Seleccionar el próximo vertice a ser evaluado
                 */
                for (Integer contador = 0; contador < verticesVisitados.size(); contador++) {
                    /**
                     * Si el vertice a ser verificado ya fue evaluado
                     * anteriormente (true) pasa a la proxima iteración
                     */
                    if (verticesVisitados.get(contador)) {
                        continue;

                    }
                    /**
                     * Si la distancia relativa de ese punto es menor que a al
                     * punto valorado asumir ese nuevo punto como un punto
                     * valorado
                     *
                     * al final de la iteracion, será seleccionado un punto con
                     * menor distancia relativa
                     */
                    if (distanciasRelativas.get(contador) < distanciaActualacomparar) {
                        distanciaActualacomparar = distanciasRelativas.get(contador);
                        puntoevaluado = contador;
                    }

                }//end 3er for 
            }//end 2do for
        }//end 1er for
        int[][] matrizResultane = new int[MatrizOriginal[0].length][MatrizOriginal[0].length];
        /**
         * Crear una MatrizOriginal como una arbol resultante del Algoritmo de
         * Prim
         */
        for (int contador = 0; contador < 6; contador++) {
            matrizResultane[contador][nodosAdyacentes.get(contador)] = MatrizOriginal[contador][nodosAdyacentes.get(contador)];
            matrizResultane[nodosAdyacentes.get(contador)][contador] = matrizResultane[contador][nodosAdyacentes.get(contador)];
        }
        return matrizResultane;
    }//end funcion Prim
public int min(int pos){
   int min=0;
   int temp=0;
   Grafo gr= new Grafo();
   int[][] g=gr.getG();
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
