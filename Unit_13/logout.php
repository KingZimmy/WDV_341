<?php
    session_start();        //access the exiting session
    //close the session
    session_unset();
    session_destroy();
    //close the database
    $conn = null;           //close the connection object when you sign off
    //redirect to the application home page/login page
    header("Location: login.php");      //redirect to a login page

?>