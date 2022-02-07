<?php
require  "function.php";


// agar tidak masuk pada pengetikan manual pada url
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}
$id = $_GET['id'];

if (hapusCelana($id) > 0) {
    echo
    "<script> alert ('data berhasil di hapus');
        document.location.href = 'produkCelana.php';
        </script>";
} else {
    "<script> alert ('data gagal di gagal);
        </script>";
};
