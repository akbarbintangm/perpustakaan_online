<!-- Racks DataTables -->
<div class="rounded shadow mb-4">
    <div class="card-header py-3"> 
        <div class="row">
            <div class="col text-left">
                <h6 class="m-0 font-weight-bold text-primary">Racks DataTables</h6>
            </div>
            <div class="col text-right">
                <a href="#" data-toggle="modal" data-target="#addRacksModal" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus"></i> Add Data</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Rak</th>
                        <th>Nama</th>   
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>ID Rak</th>
                        <th>Nama</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                		$viewRacks = mysqli_query($connect, "SELECT * FROM rak_buku") or die(mysql_error());
                		$no = 1;
                		while($data = mysqli_fetch_array($viewRacks)){
                		?>
                		<tr>
                		    <td><?= $no++; ?></td>
                            <td><?= $data['id_rak_buku']; ?></td>
                            <td><?= $data['nama_rak_buku']; ?></td>
                            <td><a href="<?= BASEURL ?>/admin/racks/view.php?id_rak_buku=<?= $data['id_rak_buku']; ?>" class="btn btn-info shadow btn-block btn-sm shadow-sm">Lihat</a></td>
                            <td><a href="<?= BASEURL ?>/admin/racks/edit.php?id_rak_buku=<?= $data['id_rak_buku']; ?>" class="btn btn-primary shadow btn-block btn-sm shadow-sm">Edit</a></td>
                            <td><a href="<?= BASEURL ?>/admin/racks/delete.php?id_rak_buku=<?= $data['id_rak_buku']; ?>" class="btn btn-danger shadow btn-block btn-sm shadow-sm">Hapus</a></td>
                        </tr>
            		<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>