using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Registro_Estudiantes
{
    class Estudiante
    {
       
        private string nombre;
        private string cedula;
        private string telefono;
        private string email;
        private string direccion;
        private string carrera;
        
        private Estudiante siguiente;

        public Estudiante()
        {

        }

        public string Nombre

        { get => nombre;
          set => nombre = value;
        }
        public string Cedula {

            get => cedula;
            set => cedula = value;
        }
        public string Telefono {
            get => telefono;
            set => telefono = value;
        }
        public string Email {
            get => email;
            set => email = value;
        }
        public string Direccion {
            get => direccion;
            set => direccion = value;
        }
        public string Carrera {
            get => carrera;
            set => carrera = value;
        }
        internal Estudiante Siguiente {
            get => siguiente;
            set => siguiente = value;
        }

     

    }
}
