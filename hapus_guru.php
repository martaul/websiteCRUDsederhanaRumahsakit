<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id_guru = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM mguru WHERE id_guru='$id_guru'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_guru.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>