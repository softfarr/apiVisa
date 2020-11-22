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
        <form action="requests.php" method="POST">
            <h1>SoftF.A.R.R</h1>
            <h2>API Visa Demo</h2>
            <h3>
                <?php

                //var_dump($_POST);

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
            <input type="hidden" name="textoOpcion" value="<?php echo $textoOpcion; ?>">
            <input type="hidden" name="radioOpcion" value="<?php echo $_POST['radioOpcion']; ?>">
            <div class="row-12 justify-content-left">
                <br>
                <h3>Customer Information</h3>
                <br>
            </div>
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
                                <option value="US">Unites States</option>
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

            <div class="row-12 justify-content-left">
                <br>
                <h3>Billing Information</h3>
                <br>
            </div>
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

            <div class="row-12 justify-content-left">
                <br>
                <h3>Card Information</h3>
                <br>
            </div>
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
                            <option value="001">001</option>
                            <option value="002">MasterCard</option>
                            <option value="003">003</option>
                            <option value="004">004</option>
                            <option value="005">005</option>
                            <option value="006">006</option>
                            <option value="007">007</option>
                            <option value="008">008</option>
                            <option value="009">009</option>
                            <option value="010">010</option>
                            <option value="011">011</option>
                            <option value="012">012</option>
                        </select>
                    </div>
                </div>

            </section>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>

</html>