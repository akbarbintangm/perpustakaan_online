<?php
    session_start();
    require_once "../../configurations/index.php";
    
    if(!isset($_SESSION['loginAdmin'])) {
        
    }
    else {
        header('Location:../');
    }
    
    require_once "../templates/header.php";
?>

<body class="bg-gradient-primary animate__animated bg-light text-dark" id="page-top">

    <!-- Page Wrapper -->
    <div class="container">

        <?php require_once "../templates/login.php"; ?>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
</body>

<?php
    require_once "../templates/footer.php";
?>