/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package citascoto;

/**
 *
 * @author Yisakh Castro Sanchez
 */
public class NodoEspera {
    
    private String nombre;
    private String apellido;
    private String cedula;
    private String numeroSeguro;
    private String temperatura;
    private String padecimiento;
    private String alergias;
    private String emfermedadesCronicas;
    private String Medico;
    
    NodoEspera sig;
    NodoEspera ant;
    
    
    public NodoEspera(){
     this.sig=null;
     this.ant=null;
    
    }

    public NodoEspera(String nombre, String apellido, String cedula, String numeroSeguro, String temperatura, String padecimiento, String alergias, String emfermedadesCronicas, String Medico) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.cedula = cedula;
        this.numeroSeguro = numeroSeguro;
        this.temperatura = temperatura;
        this.padecimiento = padecimiento;
        this.alergias = alergias;
        this.emfermedadesCronicas = emfermedadesCronicas;
        this.Medico = Medico;
        this.ant=null;
        this.sig=null;
    }

    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * @param nombre the nombre to set
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * @return the apellido
     */
    public String getApellido() {
        return apellido;
    }

    /**
     * @param apellido the apellido to set
     */
    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    /**
     * @return the cedula
     */
    public String getCedula() {
        return cedula;
    }

    /**
     * @param cedula the cedula to set
     */
    public void setCedula(String cedula) {
        this.cedula = cedula;
    }

    /**
     * @return the numeroSeguro
     */
    public String getNumeroSeguro() {
        return numeroSeguro;
    }

    /**
     * @param numeroSeguro the numeroSeguro to set
     */
    public void setNumeroSeguro(String numeroSeguro) {
        this.numeroSeguro = numeroSeguro;
    }

    /**
     * @return the temperatura
     */
    public String getTemperatura() {
        return temperatura;
    }

    /**
     * @param temperatura the temperatura to set
     */
    public void setTemperatura(String temperatura) {
        this.temperatura = temperatura;
    }

    /**
     * @return the padecimiento
     */
    public String getPadecimiento() {
        return padecimiento;
    }

    /**
     * @param padecimiento the padecimiento to set
     */
    public void setPadecimiento(String padecimiento) {
        this.padecimiento = padecimiento;
    }

    /**
     * @return the alergias
     */
    public String getAlergias() {
        return alergias;
    }

    /**
     * @param alergias the alergias to set
     */
    public void setAlergias(String alergias) {
        this.alergias = alergias;
    }

    /**
     * @return the emfermedadesCronicas
     */
    public String getEmfermedadesCronicas() {
        return emfermedadesCronicas;
    }

    /**
     * @param emfermedadesCronicas the emfermedadesCronicas to set
     */
    public void setEmfermedadesCronicas(String emfermedadesCronicas) {
        this.emfermedadesCronicas = emfermedadesCronicas;
    }

    /**
     * @return the Medico
     */
    public String getMedico() {
        return Medico;
    }

    /**
     * @param Medico the Medico to set
     */
    public void setMedico(String Medico) {
        this.Medico = Medico;
    }

}
