<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $nis = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM msiswa WHERE nis='$nis'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>