<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>
<h1 align="center">Cafetería Konecta</h1>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre la aplicación

Aplicación web para la gestión y almacenamiento de los productos de la cafetería de una de las sedes de Konecta. Contiene las siguientes funcionalidades:

- Permite ver la información general de todos los productos.
- Permite la gestión de los productos de la cafetería a través de diferentes acciones como insertar, editar o eliminar productos de la base de datos.
- A través de su módulo de ventas, la aplicación permite vender los productos de la base de datos y mantener la información de Stock actualizada.

## Instalación

1. Para el desarrollo de la aplicación se instaló [Composer](https://getcomposer.org/download/) y [XAMPP](https://www.apachefriends.org/es/download.html) en su versión 8.1.12, el cual incluye: 
  - Apache 2.4.54
  - MariaDB 10.4.27
  - PHP 8.1.12
  - phpMyAdmin 5.2.0
  - XAMPP Control Panel 3.2.4
  
2. Luego de instalar XAMPP debemos hacer la clonación del proyecto dentro de la carpeta C:\xampp\htdocs con el comando: 
```
git clone https://github.com/dcervantespuello/cafeteria_konecta-Laravel.git
```

3. Se configuró un dominio de pruebas para la aplicación de siguiente manera:
  - Se ingresó al arhivo C:\xampp\apache\conf\extra\httpd-vhosts.conf
  - Al final de ese archivo se comentó la configuración por defecto y se agregó al final la siguiente configuración y guardamos el archivo:
  ```
  <VirtualHost *>
      DocumentRoot "C:/xampp/htdocs/cafeteria_konecta-Laravel/public"
      ServerName cafeteria-konecta.test
      <Directory "C:/xampp/htdocs/cafeteria_konecta-Laravel/public">
        Options All
          AllowOverride All
         Require all granted
      </Directory>
  </VirtualHost>
  ```
  - Ahora abrimos el blog de notas como adminitrador y abrimos el archivo C:\Windows\System32\drivers\etc\hosts.
  - En él agregaremos la siguiente línea de código y guardamos el archivo:
  `
  127.0.0.1         cafeteria-konecta.test
  `
  - Ahora debemos abrir XAMPP y reiniciar los servicios de Apache y MySQL.
  
3. Ahora debemos abrir por consola la carpeta del proyecto (Visual Studio Code tiene una consola la cual puede correr linux) y ejecutamos los siguientes comandos: `composer install`

4. Ahora en la raiz del proyecto cambiaremos el nombre del archivo .env.example por .env y luego ejecutamos el comando: `php artisan key:generate`
  
5. Desde el panel de XAMPP, con los servicios activos, vamos a ingresar a PHPMyAdmin haciendo clic en el botón Admin del servicio de MySQL.

6. Una vez en PHPMyAdmin debemos crear una nueva base de datos llamada ***cafe_db*** e importar en ella el archivo cafe_db.sql que se encuentra en la carpeta SQL en la raiz del proyecto.

***Una vez que hemos importado la base de datos y hemos seguido los pasos anteriores, estamos listos para utilizar la aplicación.***
