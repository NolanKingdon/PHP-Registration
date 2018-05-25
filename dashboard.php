<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "inc/config.php";
    
    ForceLog();
    echo $_SESSION['user_ID'] . " is your user ID";

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
                <h1>Dashboard.</h1>
                <p>You are now logged in.</p>
                <a href = "logout.php">Logout</a>
            </div>
        </section>
        <?php require_once "inc/footer.php" ?>
    </body>
</html>