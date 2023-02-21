<?php

// ASCII
// 33 = !
// 37 = %
// 43 = +
// 45 = -
// 46 = /
// 63 = ?
// 48/57 = 0/9
// 65/90 = A/Z
// 97/122 = a/z

// Generare n caratteri casuali

// Lettere minuscole
// Lettere maiuscole
// Numero
// Simboli

// 1. Numero casuale tra 1 e 4 per decidere che carattere generare
// 1.1. Se 1: generare un carattere ascii casuale tra 97 e 122
// 1.2. Se 2: generare un carattere ascii casuale tra 65 e 90
// 1.3. Se 3: generare un carattere ascii casuale tra 48 e 57
// 1.4. Se 4: generare un carattere ascii casuale tra [33, 37, 43, 45, 46, 63]
// 2. Aggiungere il carattere alla stringa 'password'
// 3. Ripeti

include  __DIR__ . '/partials/passwordGenerator.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/main.css">
</head>

<body>

    <main>
        <div class="container">

            <h1>PHP Strong Password Generator</h1>

            <div class="formContainer">

                <form action="" method="GET">

                    <div class="lengthGroup">
                        <label for="lengthInput">Lunghezza della Password</label>
                        <input type="range" id="lengthInput" min="5" max="20" name="pswrdLngth">
                    </div> <!-- /lengthGroup-->

                    <button type="submit">Genera</button>

                </form>

            </div> <!-- /formContainer-->

        </div> <!-- /container-->
    </main>

</body>

</html>