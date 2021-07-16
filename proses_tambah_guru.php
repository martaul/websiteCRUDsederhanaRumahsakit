<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_guru = $_POST['id_guru'];
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $status_keluarga = $_POST['status_keluarga'];
    $id_jabatan = $_POST['id_jabatan'];
    $foto = $_POST['foto'];
    $status_pegawai = $_POST['status_pegawai'];
   

    // buat query
    $sql = "INSERT INTO mguru (id_guru, nip, nama_guru, tempat_lahir, tgl_lahir, alamat, no_ktp, status_keluarga, id_jabatan, foto, status_pegawai) VALUES ('$id_guru', '$nip', '$nama_guru', '$tempat_lahir', '$tgl_lahir','$alamat', '$no_ktp', '$status_keluarga', '$id_jabatan', '$foto', '$status_pegawai')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman data_guru.php dengan status=sukses
        header('Location: data_guru.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman data_guru.php dengan status=gagal
        header('Location: data_guru.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>