<?php
    session_start();
    require_once "../../../configurations/index.php";
    $booksID = $_POST['idBooks'];
    $stripes = ' - ';
    $dots = ".";
    $inputBooksName1 = $_POST['inputBooksName1'];
    $inputBooksCode1 = $_POST['inputBooksCode1'];
    $inputAuthorName1 = $_POST['inputAuthorName1'];
    $inputPublisherName1 = $_POST['inputPublisherName1'];
    $inputBooksYear1 = $_POST['inputBooksYear1'];
    $inputBooksCategory1 = $_POST['inputBooksCategory1'];
    $inputBooksRacks1 = $_POST['inputBooksRacks1'];
    //$inputBooksCover1 = $_POST['inputBooksCover1'];
    //$inputBooks1 = $_POST['inputBooks1'];
    
    $oldBooksFiles = $_POST['oldBooksFiles'];
    $oldCoverFiles = $_POST['oldCoverFiles'];
    
    $buttonData = $_POST['buttonData'];
    
    if(isset($buttonData)) {
        // $bookNameFile = $_FILES['inputBooks1']['name'];
        // $pdf = ['pdf'];
        // $explodeFormatBook = explode('.', $bookNameFile);
        // $explodeFormatBook = strtolower(end($explodeFormatBook));
        // $bookNameFileFix = $inputBooksName1.$stripes.$inputAuthorName1.$dots.$explodeFormatBook;
        // $bookTemp = $_FILES['inputBooks1']['tmp_name'];
        // $bookDirUpload = "../../../uploads/books/pdf/";
        // $bookUploaded = move_uploaded_file($bookTemp, $bookDirUpload.$bookNameFileFix);
        
        // $coverNameFile = $_FILES['inputBooksCover1']['name'];
        // $jpg = ['jpg', 'jpeg', 'png', 'bmp'];
        // $explodeFormatCover = explode('.', $coverNameFile);
        // $explodeFormatCover = strtolower(end($explodeFormatCover));
        // $coverNameFileFix = $inputBooksName1.$stripes.$inputAuthorName1.$dots.$explodeFormatCover;
        // $coverTemp = $_FILES['inputBooksCover1']['tmp_name'];
        // $coverDirUpload = "../../../uploads/books/cover/";
        // $coverUploaded = move_uploaded_file($coverTemp, $coverDirUpload.$coverNameFileFix);
        
        //if($bookUploaded == TRUE || $coverUploaded == TRUE) {
            $editBooks = mysqli_query($connect, "UPDATE buku SET
            id_kategori_buku='$inputBooksCategory1',
            id_rak_buku='$inputBooksRacks1',
            nama_buku='$inputBooksName1',
            kode_buku='$inputBooksCode1',
            penulis_buku='$inputAuthorName1',
            penerbit_buku='$inputPublisherName1',
            tahun_buku='$inputBooksYear1' WHERE id_buku = '$booksID'") or die(mysql_error()); 
        
            if( $editBooks == TRUE ) {
                header('Location:../index.php?edit=true');
            }
            else {
                header('Location:../index.php?edit=false');
            }
        // }
        // else {
            
        // }   
    }
?>