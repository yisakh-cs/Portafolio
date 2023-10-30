using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Productos
{
    class Producto
    {

        public void guardar(Conexion conn, String codigo, String nombre, float precio, int cantidad, String
categoria)
        {
            conn.ejecutarConsultaSQL("SELECT codigo FROM tbl_productos WHERE codigo = '" + codigo + "'");
            //Si existe el código lo actualiza, sino lo inserta
            if (conn.getDataSet().Tables[0].Rows.Count >= 1)
            {
                conn.ejecutarConsultaSQL("UPDATE tbl_productos SET nombre = '" + nombre + "', precio = " +
                precio + ", cantidad = " + cantidad + ", categoria = '" + categoria + "' WHERE codigo = '" + codigo + "'");
            }
            else
            {
                conn.ejecutarConsultaSQL("INSERT INTO tbl_productos (codigo, nombre, precio, cantidad,categoria) " +
                " VALUES('" + codigo + "', '" + nombre + "', " + precio + ", " + cantidad + ", '" + categoria + "')");
           }
        }
        public void eliminar(Conexion conn, String codigo)
        {
            conn.ejecutarConsultaSQL("DELETE FROM tbl_productos WHERE codigo = '" + codigo + "'");
        }
        public string buscar(string dato)
        {
            //Obtiene los productos que empiecen con el dato indicado por parámetro
            return "SELECT codigo, nombre, precio, cantidad, categoria FROM tbl_productos WHERE codigo LIKE'" + dato + "%' OR nombre LIKE '" + dato +"%' OR categoria LIKE '" + dato +"%'";
        }

    }
}
