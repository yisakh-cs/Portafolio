/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reversi;

import java.util.Arrays;

/**
 *
 * @author Yisakh Castro
 */
public class Player {

    public Player() {
    }
    public int[][] matr = new int[8][8];
    private boolean turno = true;

    /**
     * @return the turno
     */
    public boolean isTurno() {
        return turno;
    }

    /**
     * @param turno the turno to set
     */
    public void setTurno(boolean turno) {
        this.turno = turno;
    }

    //Posiciona en el matriz (clase tablero)
    public void ficha(int signo, int pos, int pos2) {
        /*Player t = new Player();

         int[][] m=t.getMatr();
          
         m[pos][pos2]=signo;
         System.out.println(m[0][0]);
         System.out.println(m[1][0]);
         System.out.println(m[2][0]);
         t.setMatr(m);*/

        matr[pos][pos2] = signo;
        for (int i = 0; i < 8; i++) {
            for (int j = 0; j < 8; j++) {
                System.out.print(matr[i][j]);
            }
            System.out.println("");
        }
        System.out.println("");

    }

    /**
     * @return the matr
     */
    public int[][] getMatr() {
        return matr;
    }

    /**
     * @param matr the matr to set
     */
    public void setMatr(int[][] matr) {
        this.matr = matr;
    }

    // Indica la cantidad de un elemento dentro del tablero 
    public static void recorridoRecursivoBlanco(int[] matrix, int contador) {
        int buscado = 1;

        if (matrix[matrix.length - 1] == buscado) {
            contador = contador + 1;
        }

        if (matrix.length == 1) {
            System.out.println("El numero de apariciones de " + "blanco " + " es: " + contador);
            System.out.print("" + matrix[0]);

        } else {
            int[] tmp = Arrays.copyOf(matrix, (matrix.length - 1));
            recorridoRecursivoBlanco(tmp, contador);
            System.out.print("-->" + matrix[matrix.length - 1]);
        }
    }

    public static void recorridoRecursivoNegro(int[] matrix, int contador) {
        int buscado = 1;

        if (matrix[matrix.length - 1] == buscado) {
            contador = contador + 1;
        }

        if (matrix.length == 1) {
            System.out.println("El numero de apariciones de " + "blanco " + " es: " + contador);
            System.out.print("" + matrix[0]);

        } else {
            int[] tmp = Arrays.copyOf(matrix, (matrix.length - 1));
            recorridoRecursivoNegro(tmp, contador);
            System.out.print("-->" + matrix[matrix.length - 1]);
        }
    }

}
