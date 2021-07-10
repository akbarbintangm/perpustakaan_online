<!-- Books DataTables -->
<div class="rounded shadow mb-4">
    <div class="card-header py-3"> 
        <div class="row">
            <div class="col text-left">
                <h6 class="m-0 font-weight-bold text-primary">Books DataTables</h6>
            </div>
            <div class="col text-right">
                <a href="#" data-toggle="modal" data-target="#addBooksModal" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus"></i> Add Data</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Buku</th>
                        <th>Nama Buku</th>   
                        <th>Penulis</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>ID Buku</th>
                        <th>Nama Buku</th>
                        <th>Penulis</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                		$viewBooks = mysqli_query($connect, "SELECT * FROM buku") or die(mysql_error());
                		$no = 1;
                		while($data = mysqli_fetch_array($viewBooks)){
                		?>
                		<tr>
                		    <td><?= $no++; ?></td>
                            <td><?= $data['id_buku']; ?></td>
                            <td><?= $data['nama_buku']; ?></td>
                            <td><?= $data['penulis_buku']; ?></td>
                            <td><a href="<?= BASEURL ?>/admin/books/view.php?id_buku=<?= $data['id_buku']; ?>" class="btn btn-info shadow btn-block shadow-sm">Lihat</a></td>
                            <td><a href="<?= BASEURL ?>/admin/books/edit.php?id_buku=<?= $data['id_buku']; ?>" class="btn btn-primary shadow btn-block shadow-sm">Edit</a></td>
                            <td><a href="<?= BASEURL ?>/admin/books/delete.php?id_buku=<?= $data['id_buku']; ?>" class="btn btn-danger shadow btn-block shadow-sm">Hapus</a></td>
                        </tr>
            		<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>