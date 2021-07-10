<!-- Users DataTables -->
<div class="rounded shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users DataTables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>Nama</th>   
                        <th>Pilihan</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Pilihan</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                		$viewUsers = mysqli_query($connect, "SELECT * FROM user") or die(mysql_error());
                		$no = 1;
                		while($data = mysqli_fetch_array($viewUsers)){
                		?>
                		<tr>
                		    <td><?= $no++; ?></td>
                            <td><?= $data['id_user']; ?></td>
                            <td><?= $data['nama_user']; ?></td>
                            <td><?= $data['pilihan']; ?></td>
                            <td><a href="<?= BASEURL ?>/admin/users/view.php?id_user=<?= $data['id_user']; ?>" class="btn btn-info shadow btn-block">Lihat</a></td>
                            <td><a href="<?= BASEURL ?>/admin/users/edit.php?id_user=<?= $data['id_user']; ?>" class="btn btn-primary shadow btn-block">Edit</a></td>
                            <td><a href="<?= BASEURL ?>/admin/users/delete.php?id_user=<?= $data['id_user']; ?>" class="btn btn-danger shadow btn-block">Hapus</a></td>
                        </tr>
            		<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>