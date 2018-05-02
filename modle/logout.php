<?php
    session_start();
//	lot out
    unset($_SESSION['adminID']);
    unset($_SESSION['roll'] );
    $_SESSION['UserStatus'] = 0;
    header('Location: ../index.php');
?>
