<?php
    session_start();
    require_once "../../../configurations/index.php";
    $stripes = ' - ';
    $pdf = '.pdf';
    $jpg = '.jpg';
    $inputBooksName1 = $_POST['inputBooksName1'];
    $inputBooksCode1 = $_POST['inputBooksCode1'];
    $inputAuthorName1 = $_POST['inputAuthorName1'];
    $inputPublisherName1 = $_POST['inputPublisherName1'];
    $inputBooksYear1 = $_POST['inputBooksYear1'];
    $inputBooksCategory1 = $_POST['inputBooksCategory1'];
    $inputBooksRacks1 = $_POST['inputBooksRacks1'];
    //$inputBooksCover1 = $_POST['inputBooksCover1'];
    //$inputBooks1 = $_POST['inputBooks1'];
    
    $buttonData = $_POST['buttonData'];
    
    if(isset($buttonData)) {
        $bookNameFile = $_FILES['inputBooks1']['name'];
        $bookNameFileFix = $inputBooksName1.$stripes.$inputAuthorName1.$pdf;
        $bookTemp = $_FILES['inputBooks1']['tmp_name'];
        $bookDirUpload = "../../../uploads/books/pdf/";
        $bookUploaded = move_uploaded_file($bookTemp, $bookDirUpload.$bookNameFileFix);
        
        $coverNameFile = $_FILES['inputBooksCover1']['name'];
        $coverNameFileFix = $inputBooksName1.$stripes.$inputAuthorName1.$jpg;
        $coverTemp = $_FILES['inputBooksCover1']['tmp_name'];
        $coverDirUpload = "../../../uploads/books/cover/";
        $coverUploaded = move_uploaded_file($coverTemp, $coverDirUpload.$coverNameFileFix);
    
        if($bookUploaded == TRUE || $coverUploaded == TRUE) {
            $addBooks = mysqli_query($connect, "INSERT INTO buku (id_kategori_buku,	id_rak_buku, nama_buku,	kode_buku, penulis_buku, penerbit_buku, tahun_buku, cover_buku, file_buku) VALUES ('$inputBooksCategory1', '$inputBooksRacks1', '$inputBooksName1', '$inputBooksCode1', '$inputAuthorName1', '$inputPublisherName1', '$inputBooksYear1', '$coverNameFileFix', '$bookNameFileFix')") or die(mysql_error()); 
        
            if( $deleteBooks == TRUE ) {
                header('Location:../index.php?add=true');
            }
            else {
                header('Location:../index.php?add=false');
            }
        }
        else {
        
        }   
    }
?>