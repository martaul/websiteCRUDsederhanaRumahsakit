<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id_kelas = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM mkelas WHERE id_kelas='$id_kelas'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_kelas.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>