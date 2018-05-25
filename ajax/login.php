<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');
        $return = [];
        
        $email = filter::String( $_POST['email'] );
        $password = $_POST['password'];
        //Ensure user does not exist
        $findUser = $con->prepare("SELECT user_ID, password FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();
        
        if($findUser->rowCount() == 1){
            //User exists
            $user = $findUser->fetch(PDO::FETCH_ASSOC);
            $user['user_ID'] = (int) $user['user_ID'];
            $hash = (String) $user['password'];
            
            if(password_verify($password, $hash)){
                //User is signed in
                $return['redirect'] = 'dashboard.php';
                $_SESSION['user_ID'] = $user['user_ID'];
            } else {
                //Invalid pass/user combo
                $return['error'] = 'Invalid user email or password';
            }            
        } else {
            //User Does not exist
            $return['error'] = "You do not have an account. <a href='/register.php'>Create one now</a>";
        }
        
        //return proper info to JS                
        echo json_encode($return, JSON_PRETTY_PRINT);
        exit;
    } else {
        exit('Use POST');
    }

?>