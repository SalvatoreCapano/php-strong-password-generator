<?php
session_start();

$newPassword = '';

while (strlen($newPassword) < ($_GET['pswrdLngth'])) {

    $characterType = random_int(1, 4);
    $newCharacter = null;

    if (($characterType == 1) && $_GET['lowercaseAllowed'] == 'on') {
        // Genera lettera minuscola
        $charIndex = random_int(97, 122);
        $newCharacter = chr($charIndex);
    } else if (($characterType == 2) && $_GET['uppercaseAllowed'] == 'on') {
        // Genera lettera maiscola
        $charIndex = random_int(65, 90);
        $newCharacter = chr($charIndex);
    } else if (($characterType == 3) && $_GET['numbersAllowed'] == 'on') {
        // Genera numero 0-9
        $charIndex = random_int(48, 57);
        $newCharacter = chr($charIndex);
    } else if (($characterType == 4) && $_GET['symbolsAllowed'] == 'on') {
        // Genera simbolo ! % + - / ?
        $charIndex = random_int(0, 5);
        $simbolsArray = [33, 37, 43, 45, 47, 63];
        $newCharacter = chr($simbolsArray[$charIndex]);
    }

    if ($newCharacter != null) {

        if ($_GET['repetitionsAllowed'] == 'on') {
            $isPresent = strpos($newPassword, $newCharacter);
            if ($isPresent === false)  {
                $newPassword = $newPassword . $newCharacter;
            }
        }
        else {
            $newPassword = $newPassword . $newCharacter;
        }

    }

}

$_SESSION['newPassword'] = $newPassword;

if (!empty($_SESSION['newPassword'])) {
    header('Location: ./partials/showPassword.php');
}