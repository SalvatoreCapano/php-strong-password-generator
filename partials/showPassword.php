<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator | Your Password</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <main>
        <div class="container">

            <h2 class="secondaryTitle">La tua nuova password e'</h2>

            <div class="resultContainer">
                <?php
                    echo "<span class='newPassword'>" . $_SESSION['newPassword'] . "</span>";
                ?>
            </div> <!-- /resultContainer-->

        </div> <!-- /container-->
    </main>

</body>

</html>