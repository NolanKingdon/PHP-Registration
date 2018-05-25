<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');
        $return = [];
        
        $email = filter::String( $_POST['email'] );
        //Ensure user does not exist
        $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();
        
        if($findUser->rowCount() == 1){
            //User exists
            $return['error'] = "you already have an account";
            $return['is_logged_in'] = false;
        } else {
            //User Does not exist
            
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $addUser = $con->prepare("INSERT INTO users(email, password) VALUES (LOWER(:email), :password)");
            $addUser->bindParam(":email", $email, PDO::PARAM_STR);
            $addUser->bindParam(":password", $password, PDO::PARAM_STR);
            $addUser->execute();
            
            $user_ID = $con->lastInsertId();
            $_SESSION['user_ID'] = (int) $user_ID;
            
            $return['redirect'] = 'dashboard.php';
        }
        
        // Ensure user can and is added
        
        
        //return proper info to JS        
        
        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;
    } else {
        exit('Use POST');
    }

?>