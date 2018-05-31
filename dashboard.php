<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "inc/config.php";
    
    ForceLog();
    $user_ID = $_SESSION['user_ID'];

    $getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_ID = :user_ID LIMIT 1");
    $getUserInfo->bindParam(':user_ID', $user_ID, PDO::PARAM_INT);
    $getUserInfo->execute();
    if($getUserInfo->rowCount() == 1){
        //User found
        $user = $getUserInfo->fetch(PDO::FETCH_ASSOC);
        
    } else {
        //User not found
        header("Location: /logout.php"); 
        exit;
    }
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
                <h1>Dashboard</h1>
                <p>You are now logged in.</p>
                <p>Hello <?php echo $user['email']; ?>, you registered at <?php echo $user['reg_time']?></p>
                <a href = "logout.php">Logout</a>
            </div>
        </section>
        <?php require_once "inc/footer.php" ?>
    </body>
</html>