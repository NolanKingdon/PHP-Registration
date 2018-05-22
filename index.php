<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "config.php";

?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>registration form</Title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <section class = "container">
            <div class = "jumbotron">
                <a href="login.php">Log in</a>
                <a href="registration.php">Register</a>
            </div>
        </section>
    </body>
</html>