<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>API Visa</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Content here -->
        <h1>SoftF.A.R.R</h1>
        <h2>API Visa Demo</h2>
        <h3>Options</h3>

        <form action="opciones.php" method="POST">
            <input type="hidden" name="textoOpcion">
            <input type="hidden" name="textoOpcion">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion1" value=1>
                <label class="form-check-label" for="radioOpcion1">
                    <?php
                    $textoOpcion = "1. One authorization transaction and one capture a transaction in two different calls (two different requests)";
                    echo $textoOpcion;
                    ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion2" value=2>
                <label class="form-check-label" for="radioOpcion2">
                    <?php
                    $textoOpcion = "2. One authorization transaction and one capture a transaction in one single call (one single request)";
                    echo $textoOpcion;
                    ?>
                </label>
            </div>
            <iframe width="213" height="120" src="https://www.youtube.com/embed/MSaACLsXRQ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion3" value=3>
                <label class="form-check-label" for="radioOpcion3">
                    <?php
                    $textoOpcion = "3. One authorization reversal";
                    echo $textoOpcion;
                    ?>

                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion4" value=4>
                <label class="form-check-label" for="radioOpcion4">
                    <?php
                    $textoOpcion = "4. One authorization credit (refund)";
                    echo $textoOpcion;
                    ?>

            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion5" value=5>
                <label class="form-check-label" for="radioOpcion5">
                    <?php
                    $textoOpcion = "5. Trigger one decision manager rejection rule, rejecting transactions using the email address assessment@reject.com.br";
                    echo $textoOpcion;
                    ?>

            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>

</html>