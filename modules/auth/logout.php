<?php
    include "../../includes/session.php";
    session_unset();
    header('location:../../index.php');
?>