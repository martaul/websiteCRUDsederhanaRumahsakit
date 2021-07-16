<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_matpel = $_POST['id_matpel'];
    $nama_matpel = $_POST['nama_matpel'];
    $status_pelajaran = $_POST['status_pelajaran'];

    // buat query update
    $sql = "UPDATE matpel SET id_matpel='$id_matpel', nama_matpel='$nama_matpel', status_pelajaran='$status_pelajaran' WHERE id_matpel='$id_matpel'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_mata_pelajaran.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>