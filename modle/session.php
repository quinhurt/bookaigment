<?php

    session_start();

//RESET LOGIN RETRIES

//LOG activities


// Set user to anonymous if not already
if(!isset($_SESSION['roll'])) {
    $_SESSION['roll'] = 0;
}



/*
    if(isset($_SESSION[user_id])){

      else{
        header('location: update.php')
      }
    }



*/
?>
