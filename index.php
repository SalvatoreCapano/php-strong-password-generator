<?php
session_start();

if ((isset($_GET['pswrdLngth'])) && (($_GET['lowercaseAllowed'] == 'on') || ($_GET['uppercaseAllowed'] == 'on') || ($_GET['numbersAllowed'] == 'on') || ($_GET['symbolsAllowed'] == 'on'))) {
    include  __DIR__ . '/partials/passwordGenerator.php';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <main>
        <div class="container">

            <h1 class="mainTitle">PHP Strong Password Generator</h1>

            <h2 class="secondaryTitle">Imposta la complessita' della password</h2>

            <div class="formContainer">

                <form action="" method="GET">

                    <div class="lengthGroup">
                        <label for="lengthInput">Lunghezza della Password</label>
                        <input type="number" id="lengthInput" min="5" max="20" name="pswrdLngth" value="15">
                    </div> <!-- /lengthGroup-->

                    <div>
                        <input type="checkbox" id="uppercaseAllowed" name="uppercaseAllowed" checked>
                        <label for="uppercaseAllowed">Deve contenere lettere maiuscole</label>
                    </div>

                    <div>
                        <input type="checkbox" id="lowercaseAllowed" name="lowercaseAllowed">
                        <label for="lowercaseAllowed">Deve contenere lettere minuscole</label>
                    </div>

                    <div>
                        <input type="checkbox" id="numbersAllowed" name="numbersAllowed">
                        <label for="numbersAllowed">Deve contenere numeri</label>
                    </div>

                    <div>
                        <input type="checkbox" id="symbolsAllowed" name="symbolsAllowed">
                        <label for="symbolsAllowed">Deve contenere simboli</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" id="repetitionsAllowed" name="repetitionsAllowed">
                        <label for="repetitionsAllowed">Deve essere composta da caratteri unici</label>
                    </div>

                    <button type="submit">Genera</button>

                </form>

            </div> <!-- /formContainer-->

        </div> <!-- /container-->
    </main>

</body>

</html>