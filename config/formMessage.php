<?php
         
    $message = isset($_SESSION['formMessage']) ? $_SESSION['formMessage'] : '';
    if(!empty($message)){
    echo $message;   
    }

        ?>