/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Messenger;

/**
 *
 * @author pc
 */
import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.ServerSocket;
import java.net.Socket;

public class Conector extends Thread  {
     private Socket s;
    private ServerSocket ss;
    private InputStreamReader entradaSocket;   //the socket entry
    private DataOutputStream salida;           //data output for send messages
    private BufferedReader entrada;            //data entry for read messages
    private int puerto = 50000;            // computer port 
 
    public Conector()                    
    {
        try{
           ss = new ServerSocket(puerto);        // puerto = computer port
           s = ss.accept();   
            //creacion de entrada de datos para lectura de mensajes      creating data entry for reading messages
           entradaSocket = new InputStreamReader(s.getInputStream());
           entrada = new BufferedReader(entradaSocket);
          
        }catch(Exception e){};
    
    }
    
    public Conector(String ip)
    {
        try{

           this.s = new Socket(ip,this.puerto);

           //creación de entrada de datos para lectura de mensajes        creating data entry for reading messages
           this.entradaSocket = new InputStreamReader(s.getInputStream());
           this.entrada = new BufferedReader(entradaSocket);

           //creacion de salida de datos para el envio de mensajes        creating data output for sending messages
           this.salida = new DataOutputStream(s.getOutputStream());
           this.salida.writeUTF("CONECTADO \n");
         }catch(Exception e){};
     }
    
     public void enviarMSG(String msg)      //method for send a messages
     {
        try{
            salida.writeUTF(msg+"\n");
        }catch(IOException e){};
     }
      
     public String leerMSG()              //method for read a messages
     { 
       try{
            return entrada.readLine();
          }catch(IOException e){};
       return null;
     }
     
     public void desconectar()        //method for disconnect
     {  
        try{
            s.close();
           }catch(Exception e){};
        try{
            ss.close();
            }catch(Exception e){};
     }   
}

