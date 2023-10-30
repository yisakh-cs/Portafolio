using System;
using System.Drawing;

public class Bala
{
    int posX;
    int posY;
    int ancho;
    int alto;
    Bala siguiente;
    Universo universo;

    public Bala(int posX, int posY, int ancho, int alto, Universo universo)
    {
        setPosX(posX);
        setPosY(posY);
        setAncho(ancho);
        setAlto(alto);
        setUniverso(universo);
        setSiguiente(null);
        dibujarBala();
    }

    public void setPosX(int posX) { this.posX = posX; }
    public void setPosY(int posY) { this.posY = posY; }
    public void setAncho(int ancho) { this.ancho = ancho; }
    public void setAlto(int alto) { this.alto = alto; }
    public void setSiguiente(Bala sig) { siguiente = sig; }
    public void setUniverso(Universo universo) { this.universo = universo; }
    public int getAncho() { return this.ancho; }
    public int getAlto() { return this.alto; }
    public int getPosX() { return this.posX; }
    public int getPosY() { return this.posY; }
    public Bala getSiguiente() { return siguiente; }
    public Universo getUniverso() { return this.universo; }

    public void dibujarBala()
    {
        Graphics plano;
        plano = getUniverso().getEscenario().CreateGraphics();
        SolidBrush brush = new SolidBrush(Color.Red); // Puedes cambiar el color según tus necesidades
        plano.FillRectangle(brush, getPosX(), getPosY(), getAncho(), getAlto());
    }

    public void borrarBala()
    {
        Graphics plano;
        plano = getUniverso().getEscenario().CreateGraphics();
        SolidBrush brush = new SolidBrush(Color.Black); // Color para borrar la bala
        plano.FillRectangle(brush, getPosX(), getPosY(), getAncho(), getAlto());
    }

    public void mover()
    {
        borrarBala();
        setPosY(getPosY() - 5); // Mueve la bala hacia arriba
        dibujarBala();
    }
}
