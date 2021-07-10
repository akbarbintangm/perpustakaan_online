<!-- Content Row -->
<div class="row">

    <!-- Books Card Example -->
    
    <div class="col-xl-3 col-md-6 mb-4">
        <a class="card border-left-primary shadow h-100 py-2" href="<?= BASEURL ?>/admin/books/">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Books</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 counter">
                            <?php 
                        		$countBooks = mysqli_query($connect, "SELECT * FROM buku") or die(mysql_error());
                        		$countBooksValue = mysqli_num_rows($countBooks);
                        		echo $countBooksValue;
                        	?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- User Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a class="card border-left-success shadow h-100 py-2" href="<?= BASEURL ?>/admin/users/">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 counter">
                            <?php 
                        		$countUsers = mysqli_query($connect, "SELECT * FROM user") or die(mysql_error());
                        		$countUsersValue = mysqli_num_rows($countUsers);
                        		echo $countUsersValue;
                        	?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <!-- Racks Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a class="card border-left-info shadow h-100 py-2" href="<?= BASEURL ?>/admin/racks/">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Racks</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 counter">
                            <?php 
                        		$countRacks = mysqli_query($connect, "SELECT * FROM rak_buku") or die(mysql_error());
                        		$countRacksValue = mysqli_num_rows($countRacks);
                        		echo $countRacksValue;
                        	?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <!-- Category Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a class="card border-left-dark shadow h-100 py-2" href="<?= BASEURL ?>/admin/category/">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Category</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 counter">
                            <?php 
                        		$countCategory = mysqli_query($connect, "SELECT * FROM kategori_buku") or die(mysql_error());
                        		$countCategoryValue = mysqli_num_rows($countCategory);
                        		echo $countCategoryValue;
                        	?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-archive fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>