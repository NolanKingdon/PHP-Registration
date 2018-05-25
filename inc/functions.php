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


?>