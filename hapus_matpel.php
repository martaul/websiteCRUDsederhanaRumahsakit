<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id_matpel = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM matpel WHERE id_matpel='$id_matpel'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_mata_pelajaran.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>