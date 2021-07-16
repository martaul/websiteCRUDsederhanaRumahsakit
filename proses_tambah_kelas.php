<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_kelas        = $_POST['id_kelas'];
    $nama_kelas      = $_POST['nama_kelas'];
    $id_guru         = $_POST['id_guru'];
    $nis             = $_POST['nis'];
    $id_tahun_ajaran = $_POST['id_tahun_ajaran'];

    // buat query
    $sql = "INSERT INTO mkelas(id_kelas, nama_kelas, id_guru, nis, id_tahun_ajaran) VALUES ('$id_kelas','$nama_kelas','$id_guru', '$nis', '$id_tahun_ajaran')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: data_kelas.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: data_kelas.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>