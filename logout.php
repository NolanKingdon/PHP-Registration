<?php 
    //Destroying the session
    session_start();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '',0,'/');
    session_regenerate_id(true);
    //back to the original page
    header("Location: index.php");

?>
