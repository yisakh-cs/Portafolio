/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkg3enlinea;

/**
 *
 * @author Castro
 */
public class Player {

    public Player() {
    }
    private int[][] matr= new int[3][3];
    private boolean turno=true;


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
    public void ficha(int pos, int pos2, int signo){
        /*Player t = new Player();

        int[][] m=t.getMatr();
          
         m[pos][pos2]=signo;
       System.out.println(m[0][0]);
               System.out.println(m[1][0]);
                   System.out.println(m[2][0]);
         t.setMatr(m);*/
        
        matr[pos][pos2]= signo;
        for(int i=0; i<3;i++){
            for(int j=0; j<3;j++){
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
    
}
