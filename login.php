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
        <div class = "col-md-4 col-md-offset-4">
            <form action="/action_page.php">
                <h1>Sample Sign in Form </h1>
              <div class="form-group js-login">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required="required">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" required="required">
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        
        <?php require_once "inc/footer.php" ?>
    </body>
</html>