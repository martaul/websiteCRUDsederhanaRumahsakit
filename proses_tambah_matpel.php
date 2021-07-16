<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_matpel = $_POST['id_matpel'];
    $nama_matpel = $_POST['nama_matpel'];
    $status_pelajaran = $_POST['status_pelajaran'];

    // buat query
    $sql = "INSERT INTO matpel (id_matpel, nama_matpel, status_pelajaran) VALUES ('$id_matpel', '$nama_matpel', '$status_pelajaran')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: data_mata_pelajaran.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: data_mata_pelajaran.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>