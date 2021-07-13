<?php
    session_start();
    require_once "../../../configurations/index.php";
    
    $fetchData = $_GET['id_buku'];
    
    $selectBooks = mysqli_query($connect, "SELECT * FROM buku WHERE id_buku = $fetchData") or die(mysql_error()); 
    if( mysqli_num_rows($selectBooks) === 1) {
        $dataBooks = mysqli_fetch_assoc($selectBooks);
        
        unlink("../../../uploads/books/pdf/".$dataBooks['file_buku']);
        unlink("../../../uploads/books/cover/".$dataBooks['cover_buku']);
        
        $deleteBooks = mysqli_query($connect, "DELETE FROM buku WHERE id_buku = $fetchData") or die(mysql_error()); 
    
        if( $deleteBooks === TRUE ) {
            //unlink(dirname(__FILE__) . "../../../uploads/books/pdf/")
            header('Location:../index.php?delete=true');
        }
        else {
            header('Location:../index.php?delete=false');
        }
    }
    
    
?>