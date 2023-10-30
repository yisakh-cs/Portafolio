using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Registro_Estudiantes
{
    public class Sistema 
    {
        private Estudiante primero = new Estudiante();
        private Estudiante ultimo = new Estudiante();

        internal Estudiante Primero { get => primero; set => primero = value; }
        internal Estudiante Ultimo { get => ultimo; set => ultimo = value; }


        public Sistema()
        {
         
            Primero = null;
            Ultimo = null;
        }

        
        

    }
}
