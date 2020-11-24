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

        <form action="requests.php" method="POST">
            <input type="hidden" name="textoOpcion" value="<?php echo $textoOpcion; ?>">
            <input type="hidden" name="radioOpcion" value="<?php echo $_POST['radioOpcion']; ?>">

            <h1>SoftF.A.R.R</h1>
            <h2>API Visa Demo</h2>

            <div class="accordion" id="accordionApiVisaDemo">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            Customer Information
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1">
                        <div class="accordion-body">
                            <section>
                                <div class="col-12 justify-content-left">
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="firstName">first Name</label>
                                            <input type="text" name="firstName" id="firstName"> </input>
                                        </div>
                                    </div>
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="lastName">last Name</label>
                                            <input type="text" name="lastName" id="lastName"> </input>
                                        </div>
                                    </div>

                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="address1">address 1</label>
                                            <input type="text" name="address1" id="address1"> </input>
                                        </div>
                                    </div>

                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="locality">locality</label>
                                            <input type="text" name="locality" id="locality"> </input>
                                        </div>
                                    </div>
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="administrativeArea">administrative Area</label>
                                            <input type="text" name="administrativeArea" id="administrativeArea"> </input>
                                        </div>
                                    </div>
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="postalCode">postal Code</label>
                                            <input type="text" name="postalCode" id="postalCode"> </input>
                                        </div>
                                    </div>
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="country">country</label>
                                            <select name="country" id="country">
                                                <option selected>Select</option>
                                                <option value="US">United States</option>
                                                <option value="CO">Colombia</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="email">email</label>
                                            <input type="email" name="email" id="email"> </input>
                                        </div>
                                    </div>
                                    <div class="row-12 justify-content-left">
                                        <div class="col-12 justify-content-left">
                                            <label for="phoneNumber">phone Number</label>
                                            <input type="text" name="phoneNumber" id="phoneNumber"> </input>
                                        </div>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Billing/Reversal/Refund Information
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2">
                        <div class="accordion-body">
                            <section>
                                <div class="row-12 justify-content-left">
                                    <div class="col-12 justify-content-left">
                                        <label for="code">code</label>
                                        <input type="text" name="code" id="code"> </input>
                                    </div>
                                </div>

                                <div class="row-12 justify-content-left">
                                    <div class="col-12 justify-content-left">
                                        <label for="totalAmount">total Amount</label>
                                        <input type="text" name="totalAmount" id="totalAmount"> </input>
                                    </div>
                                </div>

                                <div class="row-12 justify-content-left">
                                    <div class="col-12 justify-content-left">
                                        <label for="currency">currency</label>
                                        <select name="currency" id="currency">
                                            <option selected>Select</option>
                                            <option value="USD">USD</option>
                                        </select>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Card Information
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3">
                        <div class="accordion-body">
                            <section>
                                <div class="row-12 justify-content-left">
                                    <div class="col-12 justify-content-left">
                                        <label for="number">number</label>
                                        <input type="text" name="number" id="number"> </input>
                                    </div>
                                </div>

                                <div class="row-12 justify-content-left">
                                    <div class="col-12 justify-content-left">
                                        <label for="securityCode">security Code</label>
                                        <input type="text" name="securityCode" id="securityCode"> </input>
                                    </div>
                                </div>

                                <div class="row-12 justify-content-left">
                                    <div class="col-4 justify-content-left">
                                        <label for="expirationMonth">expiration Month</label>
                                        <select name="expirationMonth" id="expirationMonth">
                                            <option selected>Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row-12 justify-content-left">
                                    <div class="col-12 justify-content-left">
                                        <label for="expirationYear">expiration Year</label>
                                        <select name="expirationYear" id="expirationYear">
                                            <option selected>Select</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row-12 justify-content-left">
                                    <div class="col-4 justify-content-left">
                                        <label for="type">type</label>
                                        <select name="type" id="type">
                                            <option selected>Select</option>
                                            <option value="001">Visa</option>
                                            <option value="002">MasterCard</option>
                                        </select>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Reversal/Refund Information
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4">
                        <div class="accordion-body">
                            <div class="row-12 justify-content-left">
                                <div class="col-12 justify-content-left">
                                    <label for="id">id</label>
                                    <input type="text" name="id" id="id"> </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Operations
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5">
                        <div class="accordion-body">

                            <input type="hidden" name="textoOpcion">
                            <input type="hidden" name="textoOpcion">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion1" value=1 disabled>
                                <label class="form-check-label" for="radioOpcion1">
                                    <?php
                                    $textoOpcion = "1. 1 authorization transaction and one capture a transaction in two different calls (two different requests)";
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
                            <iframe width="225" height="127" src="https://www.youtube.com/embed/qskK7R3EFQg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion3" value=3>
                                <label class="form-check-label" for="radioOpcion3">
                                    <?php
                                    $textoOpcion = "3. One authorization reversal";
                                    echo $textoOpcion;
                                    ?>
                                </label>
                            </div>
                            <iframe width="225" height="127" src="https://www.youtube.com/embed/Z1RaZhp7DYQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion4" value=4>
                                <label class="form-check-label" for="radioOpcion4">
                                    <?php
                                    $textoOpcion = "4. One authorization credit (refund)";
                                    echo $textoOpcion;
                                    ?>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioOpcion" id="radioOpcion5" value=5 disabled>
                                <label class="form-check-label" for="radioOpcion5">
                                    <?php
                                    $textoOpcion = "5. Trigger one decision manager rejection rule, rejecting transactions using the email address assessment@reject.com.br";
                                    echo $textoOpcion;
                                    ?>

                            </div>




                        </div>
                    </div>
                </div>

            </div>

            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br>
            <br>
            <br>
            GitHub Repository <a href="https://github.com/softfarr/apiVisa.git">https://github.com/softfarr/apiVisa.git</a>

        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>

</html>