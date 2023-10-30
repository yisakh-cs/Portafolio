using System;
using System.Drawing;
using System.Windows.Forms;

public class Universo
{
    int posX;
    int posY;
    int ancho;
    int alto;
    Color fondo;
    public ListaAsteroides listaAsteroides;


    PictureBox escenario;
        public Universo(int posX, int posY, int ancho, int alto, Color fondo, PictureBox escenario)
        { setPosX(posX);
        setPosY(posY);
        setAncho(ancho);
        setAlto(alto);
        setColorFondo(fondo);
        setEscenario(escenario);
        crearUniverso();
        listaAsteroides = new ListaAsteroides();
        crearAsteroides(7);

    }

        public void setPosX(int posX){
        this.posX = posX; }

        public void setPosY(int posY) {
        this.posY = posY; }

        public void setAncho(int ancho) {
        this.ancho = ancho; }

        public void setAlto(int alto) {
        this.alto = alto; }

        public void setColorFondo(Color fondo) {
        this.fondo = fondo; }

        public void setEscenario(PictureBox escenario)
        {
            this.escenario = escenario;
        }
    public int getAncho() { return this.ancho; }
    public int getAlto() { return this.alto; }
    public int getPosX() { return this.posX; }
    public int getPosY() { return this.posY; }
    public Color getColorFondo() { return this.fondo; }
    public PictureBox getEscenario() { return this.escenario; }
    public void crearUniverso() { Graphics plano; SolidBrush relleno = new SolidBrush(getColorFondo()); plano = getEscenario().CreateGraphics(); plano.FillRectangle(relleno, getPosX(), getPosY(), getAncho(), getAlto()); }

    public void crearAsteroides(int numAsteroides)
    { //Insertamos nuevos asteroides 

        int desplazarX = 50; for(int i=0;i<numAsteroides;i++){
            Asteroide asteroide = new Asteroide(desplazarX,50,20,20,this);
            listaAsteroides.insertar(asteroide);
            desplazarX += 40;

            //separamos los asteroides por 40px

        }

    }


}
