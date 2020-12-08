# Proyecto_Sesion_php
Programa de dos páginas que muestra un valor numérico y permite subirlo o bajarlo mediante dos botones guardando ese numero en la variable sesión.

La primera página contiene un formulario con tres botones de tipo submit con el mismo name.

La segunda página recibe el dato, modifica el número y redirige a la primera página.

El número se guarda en una variable de sesión. Si la variable no está definida, se le dará el valor 0.

# Como funciona

Puesto que la página 2 redirige a la página 1, la página 2 no debe tener nada de HTML, ni ningún print.

Primero, la página 2 debe recoger el dato enviado por el formulario de la página 1. En la página 1 hay 3 botones, pero los tres tienen el mismo name, por lo que sólo hay que recoger un dato.

función recoge() y variable para recoger el dato

El valor guardado en la sesión se modifica en la página 2, dependiendo del dato recibido (se aumenta, se reduce o se pone a cero).

Para que la página 2 pueda guardar datos en $_SESSION, debemos unir la página a la sesión.

La variable de sesión se debe inicializar antes de modificarla (la manera más simple de hacerlo es darle valor si no existe).

Finalmente, la página 2 redirige a la página 1.

La página 1 muestra el número guardado en $_SESSION.

Para que la página 1 pueda usar datos de $_SESSION, debemos unir la página a la sesión. El nombre de la sesión debe ser el mismo en ambas páginas.

Pero la primera vez que se abre la página, $_SESSION no contiene ningún dato e intentar imprimirlo provocaría un error, por lo que damos valor a la variable si no existe.


## Como ejecutar

Para ejevvcutar ponemos los dos archivos en el directorio /var/www/html:
```
$ sudo cp *.php /var/www/html/
```
Luego vamo desde el navegador a localhost/sesion-1.php
