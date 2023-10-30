using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Productos
{
    class Categoria
    {

        public string obtenerCategorias()
        {
            //Obtiene todas las categorías
            return "SELECT nombre FROM tbl_categorias";
        }

    }
}
