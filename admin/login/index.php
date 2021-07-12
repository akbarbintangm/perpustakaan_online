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

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
        require_once "../templates/modal_logout.php";
        require_once "../templates/modal_users.php";
        require_once "../templates/modal_racks.php";
        require_once "../templates/modal_category.php";
        require_once "../templates/modal_books.php";
    ?>
</body>

<?php
    require_once "../templates/footer.php";
?>