<?php
//Force user log in for Dashboard page
    function ForceLog(){
        if(isset($_SESSION['user_ID'])){
            //User allowed - Do nothing
        } else {
            //Make users go to the login page
            header('Location: login.php');
        }
    }

    function ForceDashboard() {
        if(isset($_SESSION['user_ID'])){
            header('Location: dashboard.php');
        } else {

        }
    }
    
    function findUser($con, $email){
        $email = (string ) filter::String( $email );
        $findUser = $con->prepare("SELECT user_ID, password FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();
        $userFound = (boolean) $findUser->rowCount();
        return $userFound;
        
    }
?>