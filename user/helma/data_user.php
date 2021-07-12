<?php
     require_once 'koneksi.php';
?>


<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
   
    <section class="content">
    <h2>Data User</h2>
        <div class="box">
            <table border="1"; class="table-tampil"; align="center"; cellpadding="1" cellspacing="4">
                <thead>
                    <tr>
                        <th  align="center">No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pilihan</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>E-mail</th>
                        <th colspan="3">Aksi</th>
                    </tr>               
                </thead>
                <tbody>
                    <?php
                        $no= 1;
                        $hasil=mysqli_query($koneksi, "SELECT * FROM user");
                            while($row = mysqli_fetch_array($hasil))
                                {
                                ?> 
                                <tr>
                                    <td align="center"><?php echo $no++?></td>
                                    <td><?php echo $row["foto_user"] ?></td>
                                    <td><?php echo $row["nama_user"] ?></td>
                                    <td><?php echo $row["alamat_user"] ?></td>
                                    <td><?php echo $row["pilihan"] ?></td>
                                    <td><?php echo $row["username_user"] ?></td>
                                    <td><?php echo $row["password_user"] ?></td>
                                    <td><?php echo $row["email_user"] ?></td>
                                    <td align="center">
                                    <a href="edit.php?id_user=<?php echo $row["id_user"]; ?>" class="btn_edit" > Edit </a> 
                                    </td>
                                </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>  
    </section>
          