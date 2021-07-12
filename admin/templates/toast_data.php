<?php
    if(isset($_GET['delete'])) {
        if($_GET['delete'] == 'true') {
            echo '
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    <strong>Hapus Data Berhasil!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        else if($_GET['delete'] == 'false') {
            echo '
                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                    <strong>Hapus Data Gagal!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
    }
    if(isset($_GET['add'])) {
        if($_GET['add'] == 'true') {
            echo '
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    <strong>Tambah Data Berhasil!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        else if($_GET['add'] == 'false') {
            echo '
                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                    <strong>Tambah Data Gagal!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
    }
    if(isset($_GET['edit'])) {
        if($_GET['edit'] == 'true') {
            echo '
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    <strong>Edit Data Berhasil!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        else if($_GET['edit'] == 'false') {
            echo '
                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                    <strong>Edit Data Gagal!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
    }
    else {
        echo '';
    }
?>