/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemadeemergencias;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Stack;

/**
 * Clase que contiene los metodos para realizar el recorrido de Euler
 * @author Yisakh Castro
 * 
 */
public class Euler {
    
    private int [] grado_euler;

    /*
      Estructura interna de tipo FIFO que se emplea para almacenar los nodos
      recorridos en el camino y luego poder mostrarlos en orden. 
      (Método Euler)
     */

    private Stack<Integer> pila_euler;

    /*
      Estructura interna de tipo Map que se emplea para almacenar los nodos
      (clave - entero) junto a sus nodos adyacentes que conecta 
      (valor - ArrayList de elementos enteros).
      (Método Euler)
     */

    private HashMap<Integer,ArrayList<Integer>> hash_euler;

    /*
      Valor entero que representa el nodo de partida del camino euleriano (si 
      es que existe). (Método Euler)
     */

    private int v_euler=0;

    /*
      Variable de tipo boolean que se empleará para comprobar si existe 
      o no camino euleriano a través del procesamiento normal del algoritmo.
      (Método Euler)
     */

    private boolean encontrado_euler;

    /*
      Valor entero que se emplea para guardar una copia del nodo inicial de 
      partida en la búsqueda del ciclo euleriano en el grafo.
      (Método Euler)
     */

    private int vert_orig_euler;

    /*
      Variable booleana que se utiliza para realizar la comprobación sobre el
      tipo de grafo pasado como parámetro, es decir, si es dirigido (true) 
      o no (false). (Método Euler)
     */

    private boolean dirigido_euler;
    
    /*
      Variable booleana que se utiliza para realizar la comprobación sobre el
      tipo de grafo pasado como parámetro, es decir, si es adyacente (true) 
      o no (false).
     */

    private boolean grafo_adyacente;

    /*
     * Variable booleana que se utiliza para realizar la comprobación sobre
     * el tipo de grafo pasado como parámetro, es decir, si es dirigido (true)
     * o no (false).
     */
    
    private boolean grafo_dirigido;

     /**
     * Método observador. (privado)
     * Realiza un recorrido desde el nodo inicial hasta encontrar un ciclo
     * cuyo fin termine en el nodo inicial.
     * @param v: valor entero que representa el nodo origen del camino 
     * o tour.
     * @return int: valor entero que se representa con el último nodo 
     * procesado.
     */

    private int tour_euler(int v)
    {
	int w=0;

	while(true)
	    {
		
		if(hash_euler.get(v).isEmpty())
		    break;
		
		/* Siempre tomamos por defecto el primer elemento 
		   del ArrayList de los vértices adyacentes al v 
		   en este caso. */

		w = hash_euler.get(v).get(0);
		
		pila_euler.push(v);

		/* Borramos las aristas que ya se han procesado */

		if(dirigido_euler)
		    borrar_arista_eulerGD(v,w);
		else
		    borrar_arista_eulerGND(v,w);

		v = w;

		if(hash_euler.get(v).isEmpty() && v == vert_orig_euler)
		    pila_euler.push(v);
	    }

	return v;
    }
     /**
     * Método modificador
     * Se muestra por el flujo de salida estándar el contenido del camino
     * euleriano del grafo (si es que existe). 
     * @return Devuelve una estructura ArrayList cuyo contenido es de tipo
     * entero donde se encuentra un camino euleriano posible, si es que el 
     * grafo posee algún camino.
     */
    
    public ArrayList<Integer> mostrar_euler()
    {
	Stack<Integer> Intercambio = new Stack<Integer>();
        ArrayList<Integer> resultado = new ArrayList<Integer>();

	if(!encontrado_euler)
	    return null;

	while(tour_euler(v_euler) == v_euler && !pila_euler.empty())
	    {
		/* Si hay un camino que empieza y termina en el mismo 
		   nodo y además la pila de elementos o nodos aún 
		   no esta vacía */

		v_euler = pila_euler.pop();
		Intercambio.push(v_euler);

		/* Si no es dirigido se puede mostrar el contenido de
		   la pila sin problema porque se podrá verificar en ambos
		   sentidos (incidente o adyacente), pero por el contrario 
		   para grafos dirigidos debe de mostrarse tal cual sea la 
		   arista y por tanto el motivo del intercambio de la pila
		   inicial en otra para devolver el camino correcto */

		if(!dirigido_euler)
                {
                    resultado.add(v_euler);
                }
	    }
	
	if(!dirigido_euler)
	    System.out.println("");
	else
	    {
                resultado = new ArrayList<Integer>();
                
		while(!Intercambio.empty())
                {
                    resultado.add(Intercambio.peek());
		    System.out.print(Intercambio.pop()+" ");
                }
		
		System.out.println("");
	    }

        return resultado;
    }
    
    private void borrar_arista_eulerGD(int v, int w)
    {
	if(v >= hash_euler.size() && w >= hash_euler.size())
	    {
		System.out.println("Los valores no son validos para v y w");
		return ;
	    }

	for(int j=0; j < hash_euler.get(v).size(); ++j)
	    if(hash_euler.get(v).get(j) == w)
		hash_euler.get(v).remove(j);

    }

    /**
     * Método modificador. (privado - para grafos no dirigidos)
     * Método que elimina las aristas procesadas en la función tour y que
     * no nos sirven para la obtención del camino euleriano del grafo.
     * @param v: valor entero que representa un vértice de la arista.
     * @param w: valor entero que representa el otro vértice de la arista.
     */

    private void borrar_arista_eulerGND(int v, int w)
    {

	if(v >= hash_euler.size() && w >= hash_euler.size())
	    {
		System.out.println("Los valores no son validos para v y w");
		return ;
	    }

	for(int i=0; i < hash_euler.get(w).size(); ++i)
	    if(hash_euler.get(w).get(i) == v)
		hash_euler.get(w).remove(i);

	for(int j=0; j < hash_euler.get(v).size(); ++j)
	    if(hash_euler.get(v).get(j) == w)
		hash_euler.get(v).remove(j);
	
    } 
    /**
     * Método observador. (privado)
     * Método que comprueba si se cumplen las condiciones para que un grafo
     * sea euleriano y tenga camino euleriano.
     * @param tama_G: valor entero que representa el número de nodos del grafo.
     * @return boolean: devuelve true o false dependiendo de si el grafo
     * cumple las condiciones impuestas para grafos dirigidos.
     */

    private boolean entrada_salida_euler(int tama_G)
    {
	int salir,num_vertices;
	int cond_uno=0,cond_dos=0;

	/*Primera condición de Euler para Digrafos: Es Euleriano si, 
	  y sólo si, todos sus vértices tienen el mismo grado de 
	  entrada que de salida. */
	
	for(int i=0; i < hash_euler.size(); ++i)
	    {
		salir=grado_euler[i]; 
		//Grado salida del vértice correspondiente.

		num_vertices = 0;
		for(int j=0; j < hash_euler.size(); ++j)
		    {
			for(int k=0; k < hash_euler.get(j).size(); ++k)
			    {
				if(hash_euler.get(j).get(k) == i && i != j)
				    {
					salir--;
					num_vertices++;
				    }
			    }
		    }

		//Grado de entrada.
		if(salir != 0 && num_vertices == grado_euler[i]) 
		    return false;
		
		//Grado_ent(a) = Grado_sal(a)+1.
		if(num_vertices != grado_euler[i]+1 && cond_uno==0) 
		    cond_uno++;
		else
		    {
			if(num_vertices+1 != grado_euler[i] && cond_dos==0)
			    cond_dos++;
		    }
		
	    }
	
	if(cond_uno == 1 && cond_dos == 1)
	    {
		System.out.println("El grafo es euleriano y tiene un recorrido");
		return true;
	    }

	System.out.println("El grafo es euleriano pero no tiene recorrido");
	return true; 
	/* Al llegar aquí tendríamos comprobado que el grafo es euleriano. */

    }
    /**
     * Método modificador (Algoritmo Euler para grafos dirigidos)
     * Un camino euleriano: un camino partiendo de un nodo origen que
     * pase por todos los vértices (se pueden repetir) empleando todas
     * las aristas posibles y regresando al nodo origen (ciclo).
     * @param G: matriz bidimensional de enteros cuyo contenido es el grafo
     * de trabajo actual.
     * @param v: valor entero que representa el nodo origen para el camino
     * euleriano.
     * @param w: valor entero que representa el nodo anterior procesado 
     * (en la primera llamada será el mismo nodo que v).
     */

    private void algo_EulerGD(int [][] G, int v, int w)
    {
	grado_vector(G);
	int tama_G = G.length;
	int t = grado_euler[v] + grado_euler[w];
	dirigido_euler = true;

	v_euler = v;
	pila_euler = new Stack<Integer>();
	hash_euler = new HashMap<Integer,ArrayList<Integer>>();
	ArrayList<Integer> adyacencias;

	for(int i=0; i < tama_G; ++i)
	    {
		adyacencias = new ArrayList<Integer>();

		for(int j=0; j < tama_G; ++j)
		    {
			if(G[i][j] != 0)
			    {

				adyacencias.add(j);
			    }
		    }

		hash_euler.put(i,adyacencias);
	    }

	encontrado_euler = entrada_salida_euler(G.length);

    }

    /**
     * Método modificador (Algoritmo Euler para grafos no dirigidos)
     * Un camino euleriano: un camino partiendo de un nodo origen que
     * pase por todos los vértices (se pueden repetir) empleando todas
     * las aristas posibles y regresando al nodo origen (ciclo).
     * @param G: matriz bidimensional de enteros cuyo contenido es el grafo
     * de trabajo actual.
     * @param v: valor entero que representa el nodo origen para el camino
     * euleriano.
     * @param w: valor entero que representa el nodo anterior procesado 
     * (en la primera llamada será el mismo nodo que v).
     */

    private void algo_EulerGND(int [][] G, int v, int w)
    {
	grado_vector(G);
	int tama_G = G.length;
	int t = grado_euler[v] + grado_euler[w];
	dirigido_euler = false;
	
	v_euler = v;
	pila_euler = new Stack<Integer>();
	hash_euler = new HashMap<Integer,ArrayList<Integer>>();
	ArrayList<Integer> adyacencias;

	for(int i=0; i < tama_G; ++i)
	    {
		adyacencias = new ArrayList<Integer>();

		for(int j=0; j < tama_G; ++j)
		    {
			if(G[i][j] != 0)
			    {
				adyacencias.add(j);
			    }
		    }

		hash_euler.put(i,adyacencias);
	    }

	if((t%2) != 0)
	    {
		encontrado_euler = false;
		return ;
	    }

	for(t=0; t < G.length; ++t)
	    if((t != v) && (t != w))
		if((grado_euler[t] % 2) != 0)
		    {
			encontrado_euler = false;
			return ;
		    }


	encontrado_euler = true;
	
    }

    /**
     * Método observador (Euler dirigido)
     * Método que llama al procedimiento general para la obtención del camino
     * euleriano (si existe) del grafo euleriano (si lo es).
     * @param G matriz bidimensional de enteros cuyo contenido es el grafo
     * de trabajo actual.
     * @param v valor entero que representa el nodo origen para el camino
     * euleriano.
     * @param w valor entero que representa el nodo anterior procesado 
     * (en la primera llamada será el mismo nodo que v).
     * @return boolean: devuelve true o fale si hay encontrado o no un 
     * camino euleriano para el grafo.
     */

  public boolean camino_eulerGD(int [][] G, int v, int w)
    {
	vert_orig_euler = w;
	algo_EulerGD(G,v,w);
	

	return encontrado_euler;
    }

    /**
     * Método observador (Euler no dirigido)
     * Método que llama al procedimiento general para la obtención del camino
     * euleriano (si existe) del grafo euleriano (si lo es).
     * @param G matriz bidimensional de enteros cuyo contenido es el grafo
     * de trabajo actual.
     * @param v valor entero que representa el nodo origen para el camino
     * euleriano.
     * @param w valor entero que representa el nodo anterior procesado 
     * (en la primera llamada será el mismo nodo que v).
     * @return boolean: devuelve true o fale si hay encontrado o no un 
     * camino euleriano para el grafo.
     */

    public boolean camino_eulerGND(int [][] G, int v, int w)
    {
	vert_orig_euler = w;
	algo_EulerGND(G,v,w);
	

	return encontrado_euler;
    }
/**
     * Método modificador. (privado)
     * Introduce en una variable privada a la clase los grados de los nodos
     * del grafo. Esta función se ha realizado para el cálculo de los grados
     * de los nodos del algoritmo de Euler.
     * @param G: matriz bidimensional de enteros cuyo contenido es el grafo
     * de trabajo actual.
     */

    private void grado_vector(int [][] G)
    {
	grado_euler = new int [G.length];

	for(int i=0; i < G.length; ++i)
	    grado_euler[i] = grado_vertice(i,G);
    }

    /**
     * Método observador
     * @param vertice valor de tipo entero que se corresponde con el vértice
     * o nodo del grafo.
     * @param G matriz de adyacencia o de costes asociada al grafo.
     * @return int: valor entero que se corresponde con la valencia del nodo.
     * Número de valencia o grado de un vértice son las aristas 
     * incidentes en él que contenga.
     */

    public int grado_vertice(int vertice, int [][] G)
    {

	int grado=0;
	int tama_G = G.length;

	if(vertice < 0 || vertice > tama_G)
	    {
		System.out.println("El vértice no esta en el grafo");
		return 0;
	    }

	for(int i=0; i < tama_G; ++i)
	    {
                if(!grafo_adyacente)
                {
                    if(G[vertice][i] != 0 && G[vertice][i] < 100)
                        grado++;
                }
                else
                {
                    if(G[vertice][i] != 0)
                        grado++;
                }
	    }

	return grado;
    }
}
