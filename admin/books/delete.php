<?php
    require_once "../../configurations/index.php";
    require_once "../templates/header.php";
?>

<body class="animate__animated bg-light text-dark" id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once "../templates/sidebar.php"; ?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php require_once "../templates/navbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm disabled"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <?php
                        require_once "../templates/display_dashboard.php";
                        //require_once "./templates/area_charts.php";
                        require_once "../templates/books_table.php";
                    ?>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
                require_once "../templates/footer_copyrighted.php";
            ?>

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