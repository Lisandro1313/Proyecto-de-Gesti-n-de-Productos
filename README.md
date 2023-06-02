# Proyecto de Gestión de Productos

Este proyecto es una aplicación de gestión de productos que permite realizar operaciones básicas como crear, actualizar, consultar y eliminar productos. Está desarrollado utilizando PHP en el backend y React en el frontend.

## Requisitos Técnicos

- PHP 7.0 o superior
- Servidor web (por ejemplo, Apache, Nginx)
- Base de datos en memoria (por ejemplo, SQLite)

## Instalación y Uso

1. Clona este repositorio en tu entorno local.
2. Configuración del backend:
   - Abre la carpeta `backend` en tu IDE o editor de código.
   - Configura la conexión a la base de datos en el archivo `config.php`. Asegúrate de tener una base de datos en memoria configurada y accesible.
   - Ejecuta un servidor web que soporte PHP y configura la raíz del servidor para que apunte a la carpeta `backend`.
3. Configuración del frontend:
   - Abre la carpeta `frontend/my-react-app` en la línea de comandos.
   - Instala las dependencias utilizando el comando `npm install`.
   - Ejecuta la aplicación con el comando `npm start`.
4. Accede a la aplicación en tu navegador web utilizando la URL proporcionada por el servidor web.

## Funcionalidades

- Crear un producto: Permite crear un nuevo producto con nombre, descripción, precio y cantidad.
- Actualizar un producto: Permite modificar los datos de un producto existente.
- Consultar un producto por ID o por nombre: Permite buscar y mostrar la información de un producto utilizando su ID o nombre.
- Eliminar un producto: Permite eliminar un producto de la base de datos.
- Consultar todos los productos ordenados por precio: Muestra todos los productos existentes en la base de datos ordenados por su precio.

## Base de Datos

Este proyecto utiliza una base de datos en memoria para almacenar los productos. Asegúrate de configurar la conexión a la base de datos en el archivo `backend/config.php` con los datos correctos para tu entorno.


## Dato Relevante

Asegúrate de tener instaladas todas las dependencias requeridas tanto en el backend como en el frontend antes de ejecutar la aplicación.
