<?php
    require 'db2.php';
    session_start();

    if ($_SESSION['email']) {
        header("Location:account.php");
    } else if (!$_SESSION['email']) {
        header("Location:register.php");
    }
