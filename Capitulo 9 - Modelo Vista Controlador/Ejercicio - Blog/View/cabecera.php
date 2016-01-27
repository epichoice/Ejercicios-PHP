<!DOCTYPE html>
<!--
Crea un blog siguiendo las pautas que se marcan a continuación:
a) En un blog hay como mínimo una cabecera, una serie de artículos y un pie de página.

b) Los artículos se almacenan en una base de datos. Sobre cada artículo se debe saber al menos
el título, la fecha de publicación (o fecha y hora) y el contenido. Además cada artículo tendrá un
identificador o código único (puede ser un código que se auto-incremente).

c) El identificador puede ser un número que se vaya incrementando él solo.

d) La fecha se puede coger del sistema cuando se graba un nuevo artículo.

e) Crea la clase BlogDB para aislar los datos de la conexión a la base de datos donde se guardan los
artículos.

f) Crea la clase Articulo con los mismos atributos que campos hay en la tabla articulo de la base
de datos. Esta clase debe tener implementado el constructor y opcionalmente los getter y setter (se
pueden crear de forma automática con Alt + Insert).

g) La clase Articulo tendrá también los métodos insert y delete, que deben insertar y borrar
respectivamente un artículo de la base de datos.

h) La clase Articulo debe tener también un método de clase getArticulos() que devuelva en un
array todos los artículos de la base de datos.

autor Juan Jose Fernandez Romero
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi Blog</title>
    </head>
    <body>
        <div id="contenedor">
            <header class="cabecera">
                <h2 class="tituloHeader">Mi Blog</h2>
                <nav>
                    <ul>
                        <a href="../Controller/index.php"><li>Principal</li></a>
                        <a href="../View/formAddArticulo.php"><li>Añadir Post</li></a>
                    </ul>
                </nav>
            </header>
        </div>
    </body>
</html>
