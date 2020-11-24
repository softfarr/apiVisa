<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>SoftF.A.R.R</h1>
    <h2>API Visa Demo</h2>
    <h3>
        <?php

        if ($_POST['radioOpcion'] == '0') {
            $textoOpcion = "0. Simple authorization";
        } elseif ($_POST['radioOpcion'] == '1') {
            $textoOpcion = "1. One authorization transaction and one capture a transaction in two different calls (two different requests)";
        } elseif ($_POST['radioOpcion'] == '2') {
            $textoOpcion = "2. One authorization transaction and one capture a transaction in one single call (one single request)";
        } elseif ($_POST['radioOpcion'] == '3') {
            $textoOpcion = "3. One authorization reversal";
        } elseif ($_POST['radioOpcion'] == '4') {
            $textoOpcion = "4. One authorization credit (refund)";
        } elseif ($_POST['radioOpcion'] == '5') {
            $textoOpcion = "5. Trigger one decision manager rejection rule, rejecting transactions using the email address assessment@reject.com.br";
        }
        echo $textoOpcion . PHP_EOL;
        ?>
    </h3>

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>

</html>
















<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'funciones.php';

////////////////////////////////////////////////////////////////////////////////////// 
//                                                                                  //
//                                                                                  //
//                                                                                  //
////////////////////////////////////////////////////////////////////////////////////// 

$payload = getScreenDataToJson($_POST);

if ($_POST['radioOpcion'] == '0') {
    $textoOpcion = "0. Simple authorization";
} elseif ($_POST['radioOpcion'] == '1') {
    $textoOpcion = "1. One authorization transaction and one capture a transaction in two different calls (two different requests)";
} elseif ($_POST['radioOpcion'] == '2') {
    $textoOpcion = "2. One authorization transaction and one capture a transaction in one single call (one single request)";
    // */echo "StandAloneHttpSignature Sample Code is running..."."<br>";
    echo "<br>";
    simpleAuthorization();
} elseif ($_POST['radioOpcion'] == '3') {
    $textoOpcion = "3. One authorization reversal";
    echo "<br>";
    authorizationReversal();
} elseif ($_POST['radioOpcion'] == '4') {
    $textoOpcion = "4. One authorization credit (refund)";
} elseif ($_POST['radioOpcion'] == '5') {
    $textoOpcion = "5. Trigger one decision manager rejection rule, rejecting transactions using the email address assessment@reject.com.br";
}


?>