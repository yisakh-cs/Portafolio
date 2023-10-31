/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gato;

/**
 *
 * @author Castro
 */
public class Gato {

    public static void main(String[] args) {
        Ficha fichaX = new Ficha("X");
        Ficha fichaO = new Ficha();
        fichaO.setFicha("O");
       
        Jugador jugadorX = new Jugador(fichaX);
        Jugador jugadorO = new Jugador();
        jugadorO.setFicha(fichaO);
               
        Tablero tablero = new Tablero();
        tablero.imprimir();
        boolean ganador = false;
        for (int veces = 1; veces <= 9; veces++) {
            if(veces%2==0){
                jugadorO.ponerFicha(tablero);
                ganador = tablero.verificarGanador(jugadorO);
            }else{
                jugadorX.ponerFicha(tablero);
                ganador = tablero.verificarGanador(jugadorX);
            }
            tablero.imprimir();
            if(ganador){
                break;
            }
        }
        if(ganador){
            System.out.println("HAZ GANADO!!!");
        }else{
            System.out.println("VUELVE A INTENTARLO!!!");
        }
     
       
    }
   
}