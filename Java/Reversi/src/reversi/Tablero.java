/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reversi;

/**
 *
 * @author Yisakh Castro
 */
import java.util.List;
import java.util.function.Predicate;
import java.util.stream.Collectors;

public class Tablero {
    
 
  
    /* public static Predicate<int[][]> siGana(int signo){
   
    return p -> p[0][0]==signo && p[1][1]==signo
            && p[2][2]== signo||
            p[0][2]==signo && p[1][1]==signo
            && p[0][2]== signo
            ||
            //horizontales
             p[0][0]==signo && p[0][1]==signo
            && p[0][2]== signo
             ||p[1][0]==signo && p[1][1]==signo
            && p[1][2]== signo||p[2][0]==signo && p[2][1]==signo
            && p[2][2]== signo||
            //verticales
            p[0][0]==signo && p[1][0]==signo
            && p[2][0]== signo||p[0][1]==signo && p[2][1]==signo
            && p[2][1]== signo||
            p[0][2]==signo && p[1][2]==signo
            && p[2][2]== signo;
    
    }*/
    
  public static Predicate<int[][]> inserta(int pos ,int pos2){
  
   return p -> p[pos][pos2]==2 || p[pos][pos]==1|| p[pos][pos]==0;
  
  }  
    public static Predicate<int[][]> validar(int pos ,int pos2){
  
   return p ->  p [pos+1][pos2+1]==0 || p[pos-1][pos-1]==0 ||p[pos][pos-1]==0||p[pos-1][pos]==0
           ||p[pos+1][pos]==0||p[pos][pos+1]==0||p[pos-1][pos+1]==0||p[pos+1][pos-1]==0||p[pos][pos]==0||p[pos][pos]!=0;
  
  } 
    
    
}
