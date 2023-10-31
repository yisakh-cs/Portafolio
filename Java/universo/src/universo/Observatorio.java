/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package universo;

import java.awt.Color;
import java.awt.Dimension;
import javax.swing.JOptionPane;

/**
 *
 * @author Castro
 */
public class Observatorio extends javax.swing.JFrame {
private Universo u;
    /**
     * Creates new form Observatorio
     */
    public Observatorio() {
        initComponents();
        this.setSize(new Dimension(400, 300));
        this.setResizable(true);
        btnGuardar.setEnabled(false);
    }
    
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        btnCrear = new javax.swing.JButton();
        btnGuardar = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setSize(new java.awt.Dimension(400, 300));

        btnCrear.setText("Crear Universo");
        btnCrear.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCrearActionPerformed(evt);
            }
        });

        btnGuardar.setText("Guardar Imagen");
        btnGuardar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnGuardarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(52, 52, 52)
                .addComponent(btnCrear)
                .addGap(81, 81, 81)
                .addComponent(btnGuardar)
                .addContainerGap(56, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(236, Short.MAX_VALUE)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnCrear)
                    .addComponent(btnGuardar))
                .addGap(39, 39, 39))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnGuardarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnGuardarActionPerformed
        
// TODO add your handling code here:
u.guardarImagen();
    }//GEN-LAST:event_btnGuardarActionPerformed

    private void btnCrearActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCrearActionPerformed
        // TODO add your handling code here:
        try{
       this.u  = new Universo();
       this.setSize(new Dimension(900, 700));
       btnGuardar.setEnabled(true);
       u.setSize(this.getWidth(),this.getHeight()-100);
       u.setBackground(Color.black);
       
       //Pruebas
       Estrella est1= new Estrella();
       est1.setNombre("Solaris");
       est1.setColorBase(Color.yellow);
       est1.setRadio(30);
       est1.setPosX(400);
       est1.setPosY(400);
       
       Planeta pla1= new Planeta();
       pla1.setNombre("Tierra");
        pla1.setRadio(20);
       pla1.setColorBase(Color.blue);
       pla1.setDistanciaEstrella(120);
       
       Luna lun1= new Luna();
       lun1.setNombre("Luna");
       lun1.setRadio(10);
       lun1.setColorBase(Color.gray);
       lun1.setDistanciaPlaneta(60);
       
       pla1.agregarLuna(lun1);
       est1.agregarPlaneta(pla1);
       u.AgregarEstrella(est1);
       // fin de pruebas
       
       ////  sol 2
       
       Estrella est2= new Estrella();
       est2.setNombre("Yon");
       est2.setColorBase(Color.yellow);
       est2.setRadio(40);
       est2.setPosX(200);
       est2.setPosY(100);
       
       Planeta pla2= new Planeta();
       pla2.setNombre("Marreep");
        pla2.setRadio(25);
       pla2.setColorBase(Color.red);
       pla2.setDistanciaEstrella(110);
       
       Luna lun2= new Luna();
       lun2.setNombre("Lunaris");
       lun2.setRadio(7);
       lun2.setColorBase(Color.cyan);
       lun2.setDistanciaPlaneta(20);
       
       pla2.agregarLuna(lun2);
       est2.agregarPlaneta(pla2);
       u.AgregarEstrella(est2);
       
       
       //fin sol 2
       
       
       u.dibujarUniverso();
       this.getContentPane().add(u);
       u.repaint();
        }catch(Exception e){
        JOptionPane.showMessageDialog(null,e.getLocalizedMessage()+e.toString(),"Error",JOptionPane.WARNING_MESSAGE);
        }
// catch fin
        
        
     
    }//GEN-LAST:event_btnCrearActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Observatorio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Observatorio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Observatorio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Observatorio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Observatorio().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnCrear;
    private javax.swing.JButton btnGuardar;
    // End of variables declaration//GEN-END:variables
}