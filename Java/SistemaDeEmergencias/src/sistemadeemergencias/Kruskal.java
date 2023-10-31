/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemadeemergencias;

import java.util.Scanner;

/**
 * Clase que contiene los metodos para realizar el recorrido de Kruskal
 * @author Yisakh Castro
 */
public class Kruskal {

         int[][] matriz = new int[6][6];
        int[] parent = new int[6];
       /**
        * Metodo que muestra el recorrido de prim a partir de la matriz generadora del grafo
        * @param Matriz Matriz generada del grafo
        */
    public void Algoritmo(int[][] Matriz) {

        Scanner scan = new Scanner(System.in);//Leer lo que se ingresa por teclado
      
        int min;
        int u = 0;
        int v = 0;
        int noOfEdges = 0;
        int total = 0;
        //Recibiendo Parametro de la matriz de 5x5
        for (int i = 0; i < 6; i++) {

            parent[i] = 0;
            //Para recibir todos los parametros de la matriz
            for (int j = 0; j < 6; j++) {

                matriz[i][j] = Matriz[i][j];
                if (matriz[i][j] == 0) {
                    matriz[i][j] = 999;
                }

            }

        }

        while (noOfEdges < 6) {

            min = 999;

            for (int i = 0; i < 6; i++) {

                for (int j = 0; j < 6; j++) {

                    if (matriz[i][j] < min) {

                        min = matriz[i][j];
                        u = i;
                        v = j;

                    }

                }

            }
            //*Chequeamos si se hace un loop o no
            while (parent[u] != 0) {
                u = parent[u];
            }

            while (parent[v] != 0) {
                v = parent[v];
            }

            //*
            //Imprimiendo las rutas para crear el arborl de expansión mínimo
            if (v != u) //Si v = u significa que existe un loop pero sino significa que no hay loop
            {

                noOfEdges++;
                System.out.println("Vertice encontrado: " + u + "->" + v + " Min : " + min);// Vertice encontrado desde u a v + Peso
                total += min;
                parent[v] = u;

            }

            matriz[u][v] = 999;
            matriz[v][u] = 999;

        }

        System.out.println("El peso del árbol de expansión mínimo es " + total);
    }

}
