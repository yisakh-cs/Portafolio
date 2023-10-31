/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package recursividad;

/**
 *
 * @author pablo
 */
public class Principal {

    /**
     * @param args the command line arguments
     */
    static int vector[] = {1, 2, 7, 4, 5, 6, 7, 8, 7};

    public static void main(String[] args) {
        System.out.println("Factoriales");
        System.out.println(factorial(5));
        System.out.println(factorialRecursivo(5));
        System.out.println("Potencias");
        System.out.println(potencia(2, 5));
        System.out.println(potenciaRecursiva(2, 5));
        System.out.println("con Arrays");
        System.out.println("Promedio: " + promedio(0, 0));
        System.out.println("Buscar");
        if (buscar(10, 0)) {
            System.out.println("LO ENCONTRO 10");
        } else {
            System.out.println("NO  LO  ENCONTRO");
        }
        String datos=buscarPosiciones(10, 0, "");
        if (datos.isEmpty()) {
            System.out.println("NO hay elementos");  
        }else{
            System.out.println(datos);
        
        }
       
        

    }

    /**
     * Factorial iterativo
     *
     * @param i
     * @return
     */
    private static int factorial(int i) {
        int var = 1;
        if (i == 0 || i == 1) {
            return 1;
        } else {
            for (int j = 1; j <= i; j++) {
                var = var * j;
            }
        }
        return var;
    }

    /**
     * Factorial Recursivo
     *
     * @param i
     * @return
     */
    private static int factorialRecursivo(int i) {

        if (i == 0 || i == 1) {
            return 1;
        }
        if (i == 2) {
            return 2;
        }

        return factorialRecursivo(i - 1) * i;
    }

    private static int potencia(int base, int exp) {

        if (exp == 0) {
            return 1;
        }
        if (exp == 1) {
            return base;
        }
        int resp = 1;

        for (int i = 1; i <= exp; i++) {
            resp = resp * base;
        }

        return resp;
    }

    private static int potenciaRecursiva(int base, int exp) {

        if (exp == 0) {
            return 1;
        }
        if (exp == 1) {
            return base;
        }

        return potenciaRecursiva(base, exp - 1) * base;

    }

    private static int promedio(int i, int suma) {

        if (vector == null) {
            System.out.println("Vector Vacío");
            return 0;
        }
        if (vector.length == 1) {
            return vector[0];
        }
        if (i == vector.length) {
            return suma / vector.length;
        }
        suma = suma + vector[i];
        return promedio(i + 1, suma);
    }

    public static int promedioVector() {
        if (vector == null) {
            return 0;
        }
        if (vector.length == 1) {
            return vector[0];
        }
        int suma = 0;
        for (int i = 0; i < vector.length; i++) {
            suma += vector[i];
        }

        return suma / vector.length;

    }

    public static boolean buscar(int dato, int i) {

        if (vector == null) {
            return false;
        }
        if (vector.length == 1) {
            if (vector[0] == dato) {
                return true;
            } else {
                return false;
            }
        }
        if (i == vector.length) {
            return false;
        }
        if (vector[i] == dato) {
            return true;
        }

        return buscar(dato, i + 1);

    }

    public static String buscarPosiciones(int dato, int i, String encontrados) {

        if (vector == null) {
            return "Vector vacio";
        }
        if (vector.length == 1) {
            if (vector[0] == dato) {
                return "0";
            } else {
                return "NO se encontraba en la primera posicion";
            }
        }
        if (i == vector.length) {
            return encontrados;
        }

        if (vector[i] == dato) {
            encontrados = encontrados +" , "+ String.valueOf(i);
        }
        if (i==vector.length) {
            return encontrados;
        }

        return buscarPosiciones(dato, i+1, encontrados);
    }

}
