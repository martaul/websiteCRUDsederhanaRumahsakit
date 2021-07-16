<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $id_guru = $_POST['id_guru'];
    $nis = $_POST['nis'];
    $id_tahun_ajaran = $_POST['id_tahun_ajaran'];

    // buat query update
    $sql = "UPDATE mkelas SET id_kelas='$id_kelas', nama_kelas='$nama_kelas', id_guru='$id_guru', nis='$nis', id_tahun_ajaran='$id_tahun_ajaran' WHERE id_kelas='$id_kelas'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_kelas.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>