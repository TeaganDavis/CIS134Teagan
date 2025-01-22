<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if(!isset($_SESSION['isLoggedIn'])){
        $_SESSION['isLoggedIn'] = false;
    }

    if(isset($_SESSION['username'])){
        $_SESSION['username'] = "";
    }

?>