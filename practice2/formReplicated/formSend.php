<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="Raúl Arce">
    <meta name="keywords" content="computers, programming, web design, html, html5, vegan, forever, forever vegan, food, accesories, contact, form, testimony">
    <meta name="descripcion" content="Mi primera página web, para recordar mis conocimientos de HTML">
    <meta name="lang" content="es-ES">
    <title>Formulario Enviado</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="icon" type="image/png" href="./image/icon.png">
</head>

<body>

    <?php 

    error_reporting(0);
    
        $titleForm = $_POST['titleForm'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthdate = $_POST['birthdate'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $postcode = $_POST['postcode'];
        $regionalCode = $_POST['regionalCode'];
        $subscription = $_POST['sub'];
        $subCode = $_POST['subCode'];
        $science = $_POST['science'];
        $artCraft = $_POST['artCraft'];
        $liter = $_POST['liter'];
        $tyg = $_POST['tyg'];
        $selfImp = $_POST['selfImp'];
        $passwd = $_POST['passwd'];
        $cardType = $_POST['cardType'];
        $cardNumber = $_POST['cardNumber'];
        $discount = $_POST['discount'];
        $donation = $_POST['donation'];
        $comment = $_POST['comment'];

        if($titleForm == "ms"){
            echo 'Title: Ms. <br>';
        }else if($titleForm == "mrs"){
            echo 'Title: Mrs. <br>';
        }else if($titleForm == "mr"){
            echo 'Title: Mr. <br>';
        }else if($titleForm == "dr"){
            echo 'Title: Dr. <br>';
        }else if($titleForm == "mx"){
            echo 'Title: Mx. <br>';
        }else if($titleForm == "ind"){
            echo 'Title: Ind. <br>';
        }else{
            echo 'Incorrect Title. <br>';
        }

        echo 'Fisrt Name: ' . $firstName . '<br>';
        echo 'Last Name: ' . $lastName . '<br>';
        echo 'Birthdate: ' . $birthdate . '<br>';
        
        if($region == "durham"){
            echo 'Region: Durham. <br>';
        }else if($region == "northumberland"){
            echo 'Region: Northumberland. <br>';
        }else if($region == "lancashire"){
            echo 'Region: LancaShire. <br>';
        }else if($region == "yorkshire"){
            echo 'Region: Yorkshire. <br>';
        }else if($region == "chesire"){
            echo 'Region: Chesire. <br>';
        }else if($region == "rutland"){
            echo 'Region: Rutland. <br>';
        }else if($region == "westMidlands"){
            echo 'Region: West Midlands. <br>';
        }else if($region == "kent"){
            echo 'Region: Kent. <br>';
        }else if($region == "essex"){
            echo 'Region: Essex. <br>';
        }else if($region == "dorset"){
            echo 'Region: Dorset. <br>';
        }else if($region == "devon"){
            echo 'Region: Devon. <br>';
        }else if($region == "cornwall"){
            echo 'Region: Cornwall. <br>';
        }else{
            echo 'Incorrect Region. <br>';
        }

        echo 'Postcode: ' . $postcode . '<br>';
        echo 'Regional Code: ' . $regionalCode . '<br>';

        if($subscription == "D"){
            echo 'Subscription: Dayly. <br>';
        }else if($subscription == "W"){
            echo 'Subscription: Weekly. <br>';
        }else if($subscription == "Q"){
            echo 'Subscription: Quarterly. <br>';
        }else if($subscription == "M"){
            echo 'Subscription: Monthly. <br>';
        }else if($subscription == "Y"){
            echo 'Subscription: Yearly. <br>';
        }else if($subscription == "U"){
            echo 'Subscription: Unlimited. <br>';
        }else{
            echo 'Incorrect Subscription <br>';
        }

        echo 'Subscription Code: ' . $subCode . '<br>';

        if($science){
            echo 'Area of Interest: Science. <br>';
        }
        if($artCraft){
            echo 'Area of Interest: Art and Crafts. <br>';
        }
        if($liter){
            echo 'Area of Interest: Literature. <br>';
        }
        if($tyg){
            echo 'Area of Interest: Technologies and Gadgets. <br>';
        }
        if($selfImp){
            echo 'Area of Interest: Self Improvement. <br>';
        }

        echo 'Password: ' . $passwd . '<br>';

        if($cardType == "visa"){
            echo 'Credit Card Type: Visa. <br>';
        }else if($cardType == "masterC"){
            echo 'Credit Card Type: MasterCard. <br>';
        }else if($cardType == "maestro"){
            echo 'Credit Card Type: Maestro. <br>';
        }else{
            echo 'Incorrect Credit Card Type <br>';
        }

        echo 'Card Number: ' . $cardNumber . '<br>';
        echo 'Discount Code: ' . $discount . '<br>';
        echo 'Donation: ' . $donation . '<br>';
        echo 'Comments: ' . $comment . '<br>';
    ?>

</body>

</html>