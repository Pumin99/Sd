<?php
    session_start();
    // $_SESSION = [];
    session_destroy();
    header("location: /Sd/index.php");
    exit;
?>