# Sistema de Gestión de Pacientes

Este proyecto es un CRUD básico de pacientes desarrollado en PHP y MySQL.  
Actualmente permite **ver, crear, modificar y eliminar pacientes**, aunque el formulario de creación todavía no está conectado al frontend y solo permite ver a los pacientes mediante un cuadro.  


## Funcionalidades actuales

- **Conectivilidad del front-end con la base de datos:** Permite realizar consultas mediante php y enviarlas a la base de datos, que posteriormente pueden ser utilizadas en el front.

- **Ver pacientes:** hay una tabla `verPacientes` que muestra los pacientes usando un `SELECT`.  
- **Crear pacientes (Form):** se hizo un formulario base, pero aún no está adaptado para conectarse con la base de datos.  
- **Crear, Actualizar y eliminar pacientes:** se implementó en el backend, pero todavía no está conectado al frontend.  
- **Conexión a la base de datos:** se creó un archivo `conexion.php` usando PDO.

- **Contenido dinamico en formulario usando PHP y SQL queries:** el formulario acepta contenido dinamico mediante queries y PHP, si se modifica (agregan, eliminan, modifican) los datos de la bd se actualizara automaticamente.



## Configuración de base de datos

1. Copia el archivo `model/conexion.example.php` a `model/conexion.php`.  
2. Llena tus datos locales de conexión:
    - host
    - usuario
    - contraseña
    - nombre de la base de datos  
3. El archivo `conexion.php` original está en `.gitignore` con las credenciales, por motivos de seguridad, así que **no debe subirse a GitHub**.  


