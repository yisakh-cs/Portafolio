/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Messenger;
import Messenger.VentanaServidor;
/**
 *
 * @author pc
 */
public class messenger {
     public static Conector Servidor;
    public static void main(String[]args)
    { 
        VentanaServidor server=new VentanaServidor();
        server.main();
    }
    public static void iniciarserver()
    {
        Servidor =new Conector();
        //Servidor.start();
    }

}
