/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package logica;

import java.sql.*;
import javax.swing.JDialog;

import javax.swing.JOptionPane;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;

public  class Conexion {

    
    
        public static String server;

         public static String puerto;
	public static String nombreBD;
	public static String usuario;
	public static String password;
        public String boton;
      
        public static Connection conn;

    public Connection getConn() {
        return conn;
    }

  
    //C es para metodos independientes
   
       
        public Conexion(){}
         public void Generar(String server1,String puerto1,String nombreBD1, String usuario1,String password1) {
           
         try {
            Class.forName("com.mysql.cj.jdbc.Driver");
			this.conn=DriverManager.getConnection("jdbc:mysql://"+server1+":"+puerto1+"/"+nombreBD1,usuario1,password1);
			
			if (conn!=null) {
                             this.server = server1;
                             this.puerto = puerto1;
                            this.nombreBD = nombreBD1;
                            this.usuario = usuario1;
                            this.password = password1;
				 System.out.println("Los datos de conexion con  la BD: "+nombreBD+" correctos");
                                 
                               
                          
			}else{
                           System.out.println("Error de conexion la base de datos: "+nombreBD+" no existe o datos erroneos");
                        } 
        } catch (ClassNotFoundException e) {
			System.out.println("ocurre una ClassNotFoundException : "+e.getMessage());
		} catch (SQLException e) {
			System.out.println("ocurre una SQLException: "+e.getMessage());
		}
    }
     public void probar(String server,String nombreBD, String usuario,String password){
     
     try{
          Class.forName("com.mysql.cj.jdbc.Driver");
          Connection con=DriverManager.getConnection("jdbc:mysql://"+server+":3306/"+nombreBD,usuario,password);
          	if (con!=null) {
				 System.out.println("Los datos de conexion con  la BD: "+nombreBD+" correctos");
                                 
                              
                          
			}else{
                           System.out.println("Error de conexion la base de datos: "+nombreBD+" no existe o datos erroneos");
                        }
     }catch (ClassNotFoundException e) {
			System.out.println("ocurre una ClassNotFoundException : "+e.getMessage());
		} catch (SQLException e) {
			System.out.println("ocurre una SQLException: "+e.getMessage());
		}
     }
     public void insertar(String cedula,String nombre,String curso){
     
        if(conn==null){
           System.out.println("No sirve la conexion");
        }
   
     try{       
            CallableStatement stmt = conn.prepareCall("{CALL insertar_estudiante(?,?,?)}");
            stmt.setString(1,cedula);
            stmt.setString(2,nombre);
            stmt.setString(3,curso);
            stmt.execute();
            System.out.println("ocurre : "+ conn);
     }catch(SQLException e){
     System.out.println("ocurre una SQLException : "+e.getMessage());
     }
   
    }

  public DefaultTableModel Procedimientos(DefaultTableModel modelo, String nameP){
      
      
   // algunas variable por defecto que se usaran
      String param="CALL "+nameP+"(";
      ResultSet rs;
      ResultSetMetaData rsmd = null;
     
     //JDialog d =  new JDialog();
     
        DefaultTableModel mdl = new DefaultTableModel();
         JTable tabla = new JTable(mdl);
      // se definen la variables para construir el parametro de llamada
     int row =modelo.getRowCount();
     int i=0;
      while(i<row){          
        // System.out.println("Nombre de row que pasa:-----"+ modelo.getValueAt(i, 0));
            param=param+"'"+modelo.getValueAt(i, 1);  
         
       
          if(i<row-1){
              //separador
          param=param+"',";
          }
          i++;
         
      
          
      }
        param=param+"');";
        System.out.println(i+ " Procedimiento:-----"+ param);
        
        try{
            // se ejecuta la el proceso
       Statement stmt = conn.createStatement();
       rs=stmt.executeQuery(param);
       rsmd = rs.getMetaData();
        
           
            int numeroColumnas = rsmd.getColumnCount();
            
           
             
         
            // Se crea un array de etiquetas para rellenar
            Object[] etiquetas = new Object[numeroColumnas];

// Se obtiene cada una de las etiquetas para cada columna
            for (int k = 0; k < numeroColumnas; k++){
   // Nuevamente, para ResultSetMetaData la primera columna es la 1.
             etiquetas[k] = rsmd.getColumnLabel(k + 1);
                }
            mdl.setColumnIdentifiers(etiquetas);
             while (rs.next()) {
                
                Object [] fila = new Object[numeroColumnas];
             //   System.out.println("Datos para la fila " + numeroColumnas);
                for (int j = 0; j <numeroColumnas; j++){
               //     System.out.println("   Fila " + j + ": " + rs.getObject(j+1));
                  
                 fila[j] = rs.getObject(j+1);
              //    System.out.println("   objetos "+  fila[j].toString());
                }
                mdl.addRow(fila);
            }
        }catch(SQLException e)
        
        {
            JOptionPane.showMessageDialog(null,e.getMessage() );
         
        } 
       /*
        tabla.setModel(mdl);
         d.add(new JScrollPane(tabla));
        d.setVisible(true); d.setSize(400,350);
               */
         return mdl;
  }
   
  public DefaultTableModel SQLDinamico(String sentencia){
  
        ResultSet rs;
      ResultSetMetaData rsmd = null;  
  
        DefaultTableModel mdl = new DefaultTableModel();
        try{
            // se ejecuta la el proceso
       Statement stmt = conn.createStatement();
       rs=stmt.executeQuery(sentencia);
    
       rsmd = rs.getMetaData();
        
           
            int numeroColumnas = rsmd.getColumnCount();
            
           
             
         
            // Se crea un array de etiquetas para rellenar
            Object[] etiquetas = new Object[numeroColumnas];

// Se obtiene cada una de las etiquetas para cada columna
            for (int k = 0; k < numeroColumnas; k++){
   // Nuevamente, para ResultSetMetaData la primera columna es la 1.
             etiquetas[k] = rsmd.getColumnLabel(k + 1);
                }
            mdl.setColumnIdentifiers(etiquetas);
             while (rs.next()) {
                
                Object [] fila = new Object[numeroColumnas];
              
                for (int j = 0; j <numeroColumnas; j++){
                
                  
                 fila[j] = rs.getObject(j+1);
                  System.out.println("   objetos "+  fila[j].toString());
                }
                mdl.addRow(fila);
             }
           
        }catch(SQLException e)
        
        {
          // System.out.println("ocurre una SQLException : "+e.getMessage());
             JOptionPane.showMessageDialog(null,e.getMessage() );

 
  
        } 
       /* puede mostrar la tabla
        tabla.setModel(mdl);
         d.add(new JScrollPane(tabla));
        d.setVisible(true); d.setSize(400,350);
               */
    
  
  return mdl;
  }
     public void mostrar(){
        System.out.println("prueba de datos"+conn);
     }
    
  public void funciones(String fun){
  
  fun= fun+"();";
  ResultSetMetaData rsmd = null; 
  ResultSet rs;
  DefaultTableModel mdl = new DefaultTableModel();
        try{
            // se ejecuta la el proceso
       CallableStatement stmt = conn.prepareCall(fun);
       rs=stmt.executeQuery(fun);
    
      rs.getMetaData();
        
       String salida = rs.getString(1);
           JOptionPane.showMessageDialog(null,salida );
  }
  catch(SQLException e){
            JOptionPane.showMessageDialog(null,e.getMessage() );
           }
 
  }
 
 
    public String getServer() {
        return server;
    }

    public void setServer(String server) {
        this.server = server;
    }

    public String getNombreBD() {
        return nombreBD;
    }

    public void setNombreBD(String nombreBD) {
        this.nombreBD = nombreBD;
    }

    public String getUsuario() {
        return usuario;
    }

    public void setUsuario(String usuario) {
        this.usuario = usuario;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getBoton() {
        return boton;
    }

    public void setBoton(String boton) {
        this.boton = boton;
    }

  
    public static String getPuerto() {
        return puerto;
    }

    public static void setPuerto(String puerto) {
        Conexion.puerto = puerto;
    }
   
   
    
}
