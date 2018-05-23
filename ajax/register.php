<?php 
    //Allow/require config
    define('__CONFIG__', true);
    require_once "../inc/config.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');
        $return = [];
        
        //Ensure user does not exist
        
        
        // Ensure user can and is added
        
        
        //return proper info to JS        
        $return['redirect'] = '/dashboard.php';
        
        echo json_encode($array, JSON_PRETTY_PRINT);
        exit;
    } else {
        exit('Use POST');
    }

?>