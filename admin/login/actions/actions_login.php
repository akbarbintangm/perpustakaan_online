<?php
    require_once "../../../configurations/index.php";
    session_start();
    
    $inputEmail = $_POST['inputEmail1'];
    $inputPassword = $_POST['inputPassword1'];
    
    $loginAdmin = mysqli_query($connect, "SELECT * FROM admin WHERE password_admin = '$inputPassword' AND username_admin = '$inputEmail' OR email_admin = '$inputEmail'") or die(mysql_error()); 
    
    if( mysqli_num_rows($loginAdmin) === 1) {
        $dataAdmin = mysqli_fetch_assoc($loginAdmin);
        //if( password_verify($inputPassword, $dataAdmin['password_admin'])){
            $_SESSION['loginAdmin'] = true;
            $_SESSION['idAdmin'] = $dataAdmin['id_admin'];
            
            header('Location:../../index.php');
            exit;
        //} 
        // else {
        //     header('Location:../index.php?error=true');
        // }
    }
    else {
        header('Location:../index.php?error=true');
    }
?>