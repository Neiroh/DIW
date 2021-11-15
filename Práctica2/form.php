<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Raúl Arce">
    <meta name="keywords" content="computers, programming, web design, html, html5, vegan, forever, forever vegan, food, accesories, contact, form, testimony">
    <meta name="descripcion" content="Mi primera página web, para recordar mis conocimientos de HTML">
    <meta name="lang" content="es-ES">
    <title>Formulario De Adición</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="icon" type="image/png" href="icon.png">
</head>

<body>

    <form action="register.php" method="post">

        <h2>Sharing</h2>

        <fieldset>

            <legend>Personal Data</legend>

            <p>
                <label for="name">Name: </label>
                <input type="text" name="name" size="25" autofocus required>
            </p>

            <p>
                <label for="surname">Surname: </label>
                <input type="text" name="surname" size="22" required>
            </p>

            <p>
                <label for="birth">Birthdate: </label>
                <input type="date" name="birth" required>
            </p>

            <p>
                <input type="radio" id="gen" name="gen" value="male">
                <label for="male">Male</label>

                <input type="radio" id="gen" name="gen" value="female">
                <label for="female">Female</label>

                <input type="radio" id="gen" name="gen" value="other">
                <label for="other">Other</label>
            </p>

        </fieldset>

        <fieldset>

            <legend>Section Information</legend>

                <input type="radio" id="section" name="section" value="food">
                <label for="food">Food</label>

                <input type="radio" id="section" name="section" value="test">
                <label for="test">Testimony</label>

                <input type="radio" id="section" name="section" value="recipes">
                <label for="recipes">Recipes</label>

                <input type="radio" id="section" name="section" value="makeup">
                <label for="makeup">Make Up</label>

                <input type="radio" id="section" name="section" value="cosmetics">
                <label for="cosmetics">Cosmetics</label>

                <p>
                    <textarea cols="65" rows="15" name="content" required></textarea>
                </p>

                <p>
                    <input type="checkbox" name="terms" value="terms" required>
                    <label for="terms">I accept terms and conditions</label>
                </p>

                <p>
                    <input type="checkbox" name="news" value="news">
                    <label for="news">I want to receive information about this website</label>
                </p>
        </fieldset>

        <p>
            <input type="submit" value="Send Data" name="send">
        </p>

    </form>

</body>

</html>