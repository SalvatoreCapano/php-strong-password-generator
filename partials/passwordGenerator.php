<?php

$newPassword = null;

do {

    $characterType = random_int(1, 4);

    if ($characterType == 1) {
        // Genera lettera minuscola
        $charIndex = random_int(97, 122);
        $newCharacter = chr($charIndex);
    }
    else if ($characterType == 2) {
        // Genera lettera maiscola
        $charIndex = random_int(65, 90);
        $newCharacter = chr($charIndex);
    }
    else if ($characterType == 3) {
        // Genera numero 0-9
        $charIndex = random_int(48, 57);
        $newCharacter = chr($charIndex);
    }
    else if ($characterType == 4) {
        // Genera simbolo ! % + - / ?
        $charIndex = random_int(0, 5);
        $simbolsArray = [33, 37, 43, 45, 47, 63];
        $newCharacter = chr($simbolsArray[$charIndex]);
    }

    $newPassword = $newPassword . $newCharacter;

} while (strlen($newPassword) < $_GET['pswrdLngth']);

echo "Lunghezza Password " . $_GET['pswrdLngth'] . '<br>';
echo "La password generata e' " . $newPassword;

?>