using System;
using System.Drawing;

public class Asteroide
{
    int posX;
    int posY;
    int ancho;
    int alto;
    Asteroide siguiente;
    Universo universo;

    public Asteroide(int posX, int posY, int ancho, int alto, Universo universo)
    {
        setPosX(posX);
        setPosY(posY);
        setAncho(ancho);
        setAlto(alto);
        setUniverso(universo);
        setSiguiente(null);
        dibujarAsteroide();
    }

    public void setPosX(int posX) { this.posX = posX; }
    public void setPosY(int posY) { this.posY = posY; }
    public void setAncho(int ancho) { this.ancho = ancho; }
    public void setAlto(int alto) { this.alto = alto; }
    public void setSiguiente(Asteroide sig) { siguiente = sig; }
    public void setUniverso(Universo universo) { this.universo = universo; }

    public int getAncho() { return this.ancho; }
    public int getAlto() { return this.alto; }
    public int getPosX() { return this.posX; }
    public int getPosY() { return this.posY; }
    public Asteroide getSiguiente() { return siguiente; }
    public Universo getUniverso() { return this.universo; }

    public void dibujarAsteroide()
    {
        Graphics plano;
        plano = getUniverso().getEscenario().CreateGraphics();
        SolidBrush brush = new SolidBrush(Color.Gray); // Puedes cambiar el color según tus necesidades
        plano.FillEllipse(brush, getPosX(), getPosY(), getAncho(), getAlto());
    }

    public void borrarAsteroide()
    {
        Graphics plano;
        plano = getUniverso().getEscenario().CreateGraphics();
        SolidBrush brush = new SolidBrush(Color.Black); // Color para borrar el asteroide
        plano.FillEllipse(brush, getPosX(), getPosY(), getAncho(), getAlto());
    }
}
