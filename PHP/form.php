<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mi primer formulario HTML con diferentes tipos de entrada">
    <meta name="author" content="Arce">
    <meta name="lang" content="es-ES">
    <meta name="keywords" content="html, html5, diseño de interfaces, diw, desarrollo de aplicaciones, desarrollos de aplicaciones web, programación, formularios">
    <title>Comprueba mi Página Web</title>
</head>
<body>
    
    <main>

        <p>
            <?php 

                $nombre = $_POST['nombre'];
            
                echo 'El nombre introducido es: ' , $nombre;

            ?>
        </p>

    </main>

</body>
</html>