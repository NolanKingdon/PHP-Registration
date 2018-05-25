<?php 

    if(!defined('__CONFIG__')){
        exit('You do not have a config file');
        //Should probably re-direct here instead of the exit message
    }
    //Actual config below

    //Allowing errors
    error_reporting(-1);
    ini_set('display_errors', 'On');

    //Sessions always on
    if(!isset($_SESSION)){
        session_start();
    }

    //Including php
    include_once "classes/DB.php";
    include_once "classes/filter.php";
    $con = DB::getConnection();
?>