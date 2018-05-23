<?php 

    if(!defined('__CONFIG__')){
        exit('You do not have a config file');
        //Should probably re-direct here instead of the exit message
    }
    //Actual config below

    //Including DB.php

    include_once "classes/DB.php";

    $con = DB::getConnection();
?>