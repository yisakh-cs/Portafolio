using System;
using System.Drawing;

public class Nave
{
    int posX;
    int posY;
    int ancho;
    int alto;
    Universo universo;
    public ListaBalas listaBalas { get; set; }
    public Nave(int posX, int posY, int ancho, int alto, Universo universo)
    {
        setPosX(posX);
        setPosY(posY);
        setAncho(ancho);
        setAlto(alto);
        setUniverso(universo);
        dibujarNave();
        listaBalas = new ListaBalas();
    }

    public void mover(char direccion)
    {
        if (direccion == 'D') // Derecha
        {
            setPosX(getPosX() + 5); // Mueve la nave hacia la derecha (ajusta la cantidad según tus necesidades)
        }
        else if (direccion == 'I') // Izquierda
        {
            setPosX(getPosX() - 5); // Mueve la nave hacia la izquierda (ajusta la cantidad según tus necesidades)
        }
    }
      public void disparar()
    {
        // Crea una nueva bala en la posición de la nave
        Bala nuevaBala = new Bala(getPosX() + getAncho() / 2, getPosY(), 5, 15, getUniverso());
        
        // Agrega la nueva bala a la lista de balas de la nave
        listaBalas.insertar(nuevaBala);
    }
    public void setPosX(int posX) { this.posX = posX; }
    public void setPosY(int posY) { this.posY = posY; }
    public void setAncho(int ancho) { this.ancho = ancho; }
    public void setAlto(int alto) { this.alto = alto; }
    public void setUniverso(Universo universo) { this.universo = universo; }

    public int getAncho() { return this.ancho; }
    public int getAlto() { return this.alto; }
    public int getPosX() { return this.posX; }
    public int getPosY() { return this.posY; }
    public Universo getUniverso() { return this.universo; }

    public void dibujarNave()
    {
        Graphics plano;
        plano = getUniverso().getEscenario().CreateGraphics();
        SolidBrush brush = new SolidBrush(Color.Blue); // Puedes cambiar el color según tus necesidades
        Point[] points = new Point[3];
        points[0] = new Point(getPosX() + getAncho() / 2, getPosY());
        points[1] = new Point(getPosX(), getPosY() + getAlto());
        points[2] = new Point(getPosX() + getAncho(), getPosY() + getAlto());
        plano.FillPolygon(brush, points);
    }

    public void borrarNave()
    {
        Graphics plano;
        plano = getUniverso().getEscenario().CreateGraphics();
        SolidBrush brush = new SolidBrush(Color.Black); // Color para borrar la nave
        Point[] points = new Point[3];
        points[0] = new Point(getPosX() + getAncho() / 2, getPosY());
        points[1] = new Point(getPosX(), getPosY() + getAlto());
        points[2] = new Point(getPosX() + getAncho(), getPosY() + getAlto());
        plano.FillPolygon(brush, points);
    }
}
