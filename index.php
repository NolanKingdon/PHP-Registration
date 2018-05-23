<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>registration form</Title>
    </head>
    <body>
        <section class = "container">
            <div class = "jumbotron">
                <a href="login.php">Log in</a>
                <a href="registration.php">Register</a>
            </div>
        </section>
        <?php require_once "inc/footer.php" ?>
    </body>
</html>