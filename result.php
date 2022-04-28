<?php
    $_SESSION['bra'] = $_POST;
/* 
    if (!isset($_POST['submit'])) {
        header('Location: index.php');
        exit;
    }  */
    echo $_SESSION['bra']['bet5'];
?>