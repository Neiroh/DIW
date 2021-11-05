<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="descripcion" content="Mi primer formulario HTML con diferentes tipos de entrada">
        <meta name="author" content="Jesús Roca">
        <meta name="keywords" content="html, HTML, diw, desarrollo de aplicaciones, desarrollo de aplicaciones web, formularios, html5, diseño de interfaces">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <title>Formulario de mi página web</title>
    </head>
    <body>
        <main>
            <p>
                <?php
                $nombre = $_POST['nombre'];
                echo 'El nombre introducido es: ', $nombre, '<br>';
                $apellido = $_POST['apellido'];
                echo 'El apellido introducido es: ', $apellido;
                ?>
            </p>
        </main>
    </body>
 </html>
