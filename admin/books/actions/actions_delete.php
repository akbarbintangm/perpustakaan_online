<?php
    session_start();
    require_once "../../../configurations/index.php";
    
    $fetchData = $_GET['id_buku'];
    
    $deleteBooks = mysqli_query($connect, "DELETE FROM buku WHERE id_buku = $fetchData") or die(mysql_error()); 
    
    if( $deleteBooks === TRUE ) {
        header('Location:../index.php?delete=true');
    }
    else {
        header('Location:../index.php?delete=false');
    }
?>