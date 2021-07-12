<?php
    session_start();
    if(isset($_SESSION['loginAdmin'])) {
        $_SESSION = [];
        session_unset();
        session_destroy();
        
        header('Location:../');
    }
    else {
        
    }
?>