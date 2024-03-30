<?php
    session_start();
    if(!isset($_SESSION)) {
        $_SESSION['user'] = ['username' => '', 'fullname' => ''];
    }
?>
