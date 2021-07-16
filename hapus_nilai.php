<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id_nilai_siswa = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM tnilai_siswa WHERE id_nilai_siswa='$id_nilai_siswa'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: nilaisiswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>