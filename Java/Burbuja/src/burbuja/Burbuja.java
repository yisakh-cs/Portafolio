/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package burbuja;

/**
 *
 * @author Castro
 */
public class Burbuja {

    /**
     * @param args the command line arguments
     */
    
    public static void ordenar(int[]array){
    int aux;
    
      boolean t=false;
      
      while(true){
      
          for(int i=1;i<array.length;i++){
              if(array[i]<array[1-1]){
                  
                  aux=array[i];
                  array[i]=array[i-1];
                  array[i-1]=aux;
                  t=true;
              }
                    
          }
          
          if(t==true){
          
              System.out.println("Se realizaron cambios");
              for(int i=0;i<array.length-1;i++)
                System.out.println(array[i]);
              break;
          }else{
          
              System.out.println("No se hizo cambios");
              break;
          }
        
      
      }
    
    
    }
    public static void main(String[] args) {
        // TODO code application logic here
        int[] vector= {5,2,3,4,8};
        
        ordenar(vector);
    }
    
}
