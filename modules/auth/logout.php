<?php
    session_start();
    if(isset($_GET['action']) == 'logout') {
        unset($_SESSION['user']);
        header('location:../../index.php');
    }
?>