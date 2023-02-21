<?php
session_start();

if(isset($_GET['pswrdLngth'])) {
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

                    <button type="submit">Genera</button>

                </form>

            </div> <!-- /formContainer-->

        </div> <!-- /container-->
    </main>

</body>

</html>