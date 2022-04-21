<?php 
    session_start(); 
    session_destroy();
    header('Location:formulairc.php'); 
    exit();