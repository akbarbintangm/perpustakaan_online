<?php
    $booksID = $_GET['id_buku'];
    $viewBooks = mysqli_query($connect, "SELECT * FROM buku INNER JOIN rak_buku ON buku.id_rak_buku = rak_buku.id_rak_buku INNER JOIN kategori_buku ON buku.id_kategori_buku = kategori_buku.id_kategori_buku WHERE buku.id_buku = '$booksID'") or die(mysql_error()); 
    if( mysqli_num_rows($viewBooks) === 1) {
        $dataBooks = mysqli_fetch_assoc($viewBooks);
    ?>
    
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="<?= BASEURL; ?>/admin/books/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
            <a href="<?= BASEURL; ?>/admin/books/edit.php?id_buku=<?= $dataBooks['id_buku']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Edit Info Data</a>
        </div>
        
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">Informasi Buku</h1>
                <div class="row">
                    <div class="col-3 text-center">
                        <img src="<?= BASEURL; ?>/uploads/books/cover/<?= $dataBooks['cover_buku']; ?>" class="img-fluid shadow-lg">
                    </div>
                    <div class="col">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Nama Buku</th>
                                    <td><?= $dataBooks['nama_buku']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Kode Buku</th>
                                    <td><?= $dataBooks['kode_buku']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Penulis Buku</th>
                                    <td><?= $dataBooks['penulis_buku']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Penerbit Buku</th>
                                    <td><?= $dataBooks['penerbit_buku']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Tahun Buku</th>
                                    <td><?= $dataBooks['tahun_buku']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Rak Buku</th>
                                    <td><?= $dataBooks['nama_rak_buku']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-dark text-light">Kategori Buku</th>
                                    <td><?= $dataBooks['nama_kategori']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                        
            </div>
        </div>
        
        <br>
    
    <?php
        if(isset($booksID)) {
            ?>
                <iframe name="Framename" src="<?= BASEURL; ?>/uploads/books/pdf/<?= $dataBooks['file_buku'];?>" width="auto " height="550" frameborder="0" scrolling="yes" style="width: 100%;"> </iframe>
            <?php
        }
        else {
            echo 'buku tidak ada';
        }
    }
    else {
        echo 'buku tidak dipilih.';
    }
?>