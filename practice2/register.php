<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Raúl Arce">
    <meta name="keywords" content="computers, programming, web design, html, html5, vegan, forever, forever vegan, food, accesories, contact, form, testimony">
    <meta name="descripcion" content="Mi primera página web, para recordar mis conocimientos de HTML">
    <meta name="lang" content="es-ES">
    <title>Information Received</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="icon" type="image/png" href="./image/icon.png">
</head>

<body>

    <?php

    error_reporting(0);

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $birth = $_POST['birth'];
        $mail = $_POST['mail'];
        $tlf = $_POST['tlf'];

        if($_POST['gen'] == "male"){

            $gen = 'Male';

        }else if($_POST['gen'] == "female"){

            $gen = 'Female';

        }else{

            $gen = 'Other';

        }

        if($_POST['section'] == "food"){

            $section = 'Food';

        }else if($_POST['section'] == "testimony"){

            $section = 'Testimony';

        }else if($_POST['section'] == "recipes"){

            $section = 'Recipes';

        }else if($_POST['section'] == "makeup"){

            $section = 'Make Up';

        }else{

            $section = 'Cosmetics';

        }

        $content = $_POST['content'];

        echo 'Name: ' . $name . '<br>';
        echo 'Surname: ' . $surname . '<br>';
        echo 'Birthdate: ' . $birth . '<br>';
        echo 'Gender: ' . $gen . '<br>';
        echo 'Email: ' . $mail . '<br>';
        echo 'Telephone Number: ' . $tlf . '<br>';
        echo 'Section: ' . $section . '<br>';
        echo 'Content: ' . $content . '<br>';

        if($_POST['terms']){

            echo 'Terms Selected <br>';

        }

        if ($_POST['news']){

            echo 'News Selected';

        }


    ?>

</body>

</html>