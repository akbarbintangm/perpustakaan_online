<?php
    $konek = mysqli_connect("localhost","root","","perpustakaan");
    if (mysqli_connect_errno()){
        echo "koneksi gagal" . mysqli_connect_error();
    }



//menerima nilai dari kiriman form data registrasi
@$nama=$_POST['nama'];
@$status=$_POST['status'];
@$password=$_POST['password'];
@$email=$_POST['email'];


$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
$dirUpload = "uploads/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    mysqli_query($konek, "INSERT INTO user (nama_user, pilihan, password_user, email_user, ktp_user) values ('$nama','$status','$password','$email','$namaFile')");
    echo "Upload berhasil!<br/>";
} else {
    echo "Upload Gagal!";
}




// $sql = "INSERT INTO user (nama_user, pilihan, password_user, email_user) values ('$nama','$status','$password','$email')";
// if (mysqli_query($konek, $sql)){
//     echo "berhasil";
// }
// else {
//     echo "gagal ".mysqli_error($konek);
// }
?>